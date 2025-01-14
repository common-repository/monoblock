<?php
/**
 * CSS Optimization: 
 * Optimizes the CSS rendered by monoblock in the frontend in a safe manner.
 *
 * Main logic: when a post is saved, gather all the CSS generated and optimize them.
 * Cache the optimized CSS in the post meta - this will be used to load the CSS 
 * in the frontend head tag.
 *
 * This is done when a post is saved in order to pre-calculate all the CSS,
 * making it fast since we just need to load the saved CSS in the frontend
 * without any added processing.
 *
 * The styles (before being optimized) are saved as well, so we can make sure
 * first that the block's styles have been optimized before stripping them out
 * `render_block`.
 *
 * This is backward compatible, if no optimized CSS is found, then the original
 * blocks/content will just be used.
 *
 * Important notes:
 * - The optimized CSS is saved when the post is saved.
 * - The actual post content / blocks aren't modified.
 * - This works well with caching solutions like caching plugins
 * - No additional block rendering / processing is done (aside from stripping
 *   the CSS in `render_block`)
 * - When previewing posts, no optimization is done.
 *
 * @since 1.0.1
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Monoblock_CSS_Optimize' ) ) {

	/**
	 * Monoblock Optimize CSS.
	 */
	class Monoblock_CSS_Optimize {

		/**
		 * This holds the optimized CSS for the current post, this will be
		 * loaded in the head.
		 *
		 * @var String
		 */
		public $optimized_css = '';

		/**
		 * This holds the raw CSS values of $this->optimized_css above, this is
		 * used for cross checking whether a block's CSS was optimized and if
		 * it's safe to strip out.
		 *
		 * @var array
		 */
		public $css_raw = array();

		/**
		 * This should be the order of the media queries to prevent wrong overrides.
		 */
		// const MEDIA_QUERY_ORDER = array(
		// 	'', // All screens,
		// 	'@media screen and (min-width:1024px)', // Desktop only.
		// 	'@media screen and (min-width:768px)', // Desktop & tablet.
		// 	'@media screen and (min-width:768px) and (max-width:1023px)', // Tablet.
		// 	'@media screen and (max-width:1023px)', // Tablet & mobile.
		// 	'@media screen and (max-width:767px)', // Mobile.
		// );
		const MEDIA_QUERY_ORDER = array(
			'', // All screens,
			'@media screen and (max-width: 960px)', // Tablet.
			'@media screen and (max-width: 600px)', // Mobile.
		);

		/**
		 * Initialize
		 */
		function __construct() {
			// When a post is saved, generate an optimized version of the styles used.
			add_action( 'save_post', array( $this, 'generate_optimied_css_for_post' ), 10, 3 );

			// Load the optimized CSS in the head of posts.
			add_action( 'wp', array( $this, 'load_cached_css_for_post' ) );

			// If the optimized CSS was loaded, then strip out the styles which were in the CSS.
			add_filter( 'render_block', array( $this, 'strip_optimized_block_styles' ), 10, 2 );

			// Add our filter that adjusts all CSS that we print out.
			add_filter( 'monoblock_frontend_css', array( $this, 'adjust_breakpoints' ) );
		}

		/**
		 * Adjust media query breakpoints in the given CSS.
		 *
		 * @param String $css
		 * @return String adjusted CSS
		 */
		public function adjust_breakpoints( $css ) {
			$breakpoints = array( 'tablet' => '', 'mobile' => '', );
			$new_tablet = $breakpoints['tablet'];
			$new_mobile = $breakpoints['mobile'];

			if ( ! empty( $new_tablet ) ) {
				$css = preg_replace( "/(@media[^{]+)width:\s*1024px/", "$1width:" . $new_tablet . "px", $css );
				$css = preg_replace( "/(@media[^{]+)width:\s*1023px/", "$1width:" . ( $new_tablet - 1 ) . "px", $css );
			}

			if ( ! empty( $new_mobile ) ) {
				$css = preg_replace( "/(@media[^{]+)width:\s*768px/", "$1width:" . $new_mobile . "px", $css );
				$css = preg_replace( "/(@media[^{]+)width:\s*767px/", "$1width:" . ( $new_mobile - 1 ). "px", $css );
			}

			// echo '<script type="text/javascript">console.log("'.$optimized_css.'");</script>';

			return $css;
		}

		/**
		 * When editing a post, we need to generate the optimized CSS for all
		 * the blocks used in the post.
		 *
		 * @param Int $post_id
		 * @param WP_Post $post
		 * @param Boolean $update
		 *
		 * @return void
		 */
		public function generate_optimied_css_for_post( $post_id, $post, $update ) {
			error_log('The attributes are: ');

			if ( $post->post_type === 'attachment' ||
			     $post->post_type === 'revision' || // Don't do this when previewing a post.
			     $post->post_type === 'nav_menu_item' ||
			     $post->post_type === 'wp_template' || // DEV NOTE: This should work for FSE as well, but disallow this for now while we don't support it yet.
			     $post->post_type === 'wp_template_part' // DEV NOTE: This should work for FSE as well, but disallow this for now while we don't support it yet.
			) {
				return;
			}

			// Convert content to blocks.
			$blocks = parse_blocks( $post->post_content );

			// Go through and gather all the styles.
			$styles = array(); // Holds unique ids and styles from blocks.
			self::parse_blocks( $blocks, $styles );

			// Generate the optimized CSS.
			$styles_only = array();
			foreach ( $styles as $block_styles ) {
				foreach ( $block_styles as $block_style ) {
					$styles_only[] = $block_style[1];
				}
			}
			$optimized_css = self::generate_css( $styles_only );

			// Save the optimized CSS to the post.
			update_post_meta( $post_id, 'monoblock_optimized_css', $optimized_css );
			update_post_meta( $post_id, 'monoblock_optimized_css_raw', $styles );
		}

		/**
		 * Goes through all the given blocks and gathers all the styles.
		 *
		 * @param Array $blocks
		 * @param Array $style_arr Mutated array that will contain all the styles
		 *
		 * @return void
		 */
		public static function parse_blocks( $blocks, &$style_arr ) {
			foreach ( $blocks as $block ) {
				$block_name = isset( $block['blockName'] ) ? $block['blockName'] : '';
				if ( stripos( $block_name, 'iori/' ) !== false ) {
					self::parse_block_style( $block, $style_arr );
				}

				self::parse_blocks( $block['innerBlocks'], $style_arr );
			}
		}

		/**
		 * Parses a block and gathers all the styles.
		 *
		 * @param Array $block
		 * @param Array $style_arr
		 *
		 * @return void
		 */
		public static function parse_block_style( $block, &$style_arr ) {
			$block_content = $block['innerHTML'];
			if ( stripos( $block_content, '<style' ) !== false ) {

				// We need the unique id for tracking.
				if ( is_array( $block['attrs'] ) && array_key_exists( 'uniqueId', $block['attrs'] ) ) {

					// Gather all the styles.
					preg_match_all( '#<style[^>]*>(.*?)</style>#', $block_content, $styles );
					// $style contains:
					// 0 = whole style tag
					// 1 = css inside the style tag

					$all_block_styles = array();
					foreach ( $styles[0] as $i => $style_tag ) {
						// Add the styles to our list of styles to optimize.
						$all_block_styles[] = array(
							$styles[0][ $i ],
							$styles[1][ $i ],
						);
					}

					$unique_id = $block['attrs']['uniqueId'];
					$style_arr[ $unique_id ] = $all_block_styles;
				}
			}
		}

		/**
		 * Gets the optimized CSS very early on for the current post, and
		 * trigger the printing of the styles in the head.
		 *
		 * @return void
		 */
		public function load_cached_css_for_post() {
			// DEV NOTE: If we'll also do this for wp_template and
			// wp_template_part then we might need to use the actions:
			// render_block_core_template_part_post and
			// render_block_core_template_part_file
			if ( is_singular() && ! is_preview() && ! is_attachment() ) {
				$post_id = get_the_ID();
				$this->optimized_css = get_post_meta( $post_id, 'monoblock_optimized_css', true );
				$this->css_raw = get_post_meta( $post_id, 'monoblock_optimized_css_raw', true );


				if ( ! empty( $this->optimized_css ) ) {
					add_action( 'wp_head', array( $this, 'print_optimized_styles' ) );
				}
			}
		}

		/**
		 * Prints the optimized CSS in the head.
		 *
		 * @return void
		 */
		public function print_optimized_styles() {
			if ( ! empty( $this->optimized_css ) ) {
				echo "\n";
				echo '<style class="mono-block-styles">';
				echo apply_filters( 'monoblock_frontend_css', $this->optimized_css );
				echo '</style>';
			}
		}

		/**
		 * HOVER STYLES HACK (1/4): The CSS generated by hover states in
		 * src/util/styles/style-object.js get reordered because of
		 * optimization. This stops the hover states from working.  To fix it,
		 * we add a placeholder to the styles for the hover states so we can
		 * group them together.  We move those with the placeholders to the end
		 * to ensure that our hover styles work.
		 *
		 * @param string $a Selector
		 * @param string $b Selector
		 *
		 * @return int -1, 0, 1 to reorder the array
		 */
		public static function selector_sort( $a, $b ) {
			if ( stripos( $a, '/* */' ) !== false && stripos( $b, '/* */' ) !== false ) {
				return 0;
			} else if ( stripos( $a, '/* */' ) !== false ) {
				return 1;
			} else if ( stripos( $b, '/* */' ) !== false ) {
				return -1;
			}
			return 0;
		}

		/**
		 * Strips out the styles of a rendered block if the block's CSS has been
		 * optimized in the head of the page.
		 *
		 * @param String $block_content
		 * @param Array $block
		 *
		 * @return String The modified $block_content
		 */
		public function strip_optimized_block_styles( $block_content, $block ) {
			if ( ! is_singular() || is_preview() ) {
				return $block_content;
			}
			if ( empty( $this->css_raw ) || empty( $this->optimized_css ) ) {
				return $block_content;
			}

			// Only do this to our blocks.
			$block_name = isset( $block['blockName'] ) ? $block['blockName'] : '';
			if ( ! empty( $block ) && is_array( $block ) && stripos( $block_name, 'iori/' ) === 0 ) {
				if ( stripos( $block_content, '<style' ) !== false ) {

					// We need the unique id for tracking.
					if ( is_array( $block['attrs'] ) && array_key_exists( 'uniqueId', $block['attrs'] ) ) {
						$unique_id = $block['attrs']['uniqueId'];

						if ( array_key_exists( $unique_id, $this->css_raw ) ) {
							$css_to_strip = $this->css_raw[ $unique_id ];
							foreach ( $css_to_strip as $style ) {
								// $style[0] - contains the whole style tag.
								if ( stripos( $block_content, $style[0] ) !== false ) {
									$block_content = str_replace( $style[0], '', $block_content );
								}
							}
						}
					}
				}
			}

			return $block_content;
		}

		/**
		 * Combines similar class selectors in a single :is()
		 *
		 * @param Array $selectors
		 * @return Array Combined selectors
		 */
		public static function combine_selectors( $selectors ) {
			$new_selectors = array();
			$classes_to_combine = array();
			foreach( $selectors as $selector ) {
				$selector = trim( $selector );
				// Find all the unique id classes of the form ".mono-123bcd"
				preg_match( '/(.mono-[a-f0-9-]{7})(?=\s|$)/', $selector, $matches );

				// If it doesn't have a block selector that we can combine, just add it.
				if ( ! count( $matches ) ) {
					$new_selectors[] = $selector;
					continue;
				}

				$match = $matches[1];

				// Don't do this if the selector is only the unique id.
				if ( $selector === $match ) {
					$new_selectors[] = $match;
					continue;
				}

				// Collect all the selectors we can combine.
				$selector = preg_replace( "#" . $match . "(?!-)#", '%s', $selector, 1 ); // Don't replace partial classname matches and only do it once.
				if ( ! array_key_exists( $selector, $classes_to_combine ) ) {
					$classes_to_combine[ $selector ] = array();
				}
				$classes_to_combine[ $selector ][] = $match;
			}

			// Combine the selectors into a single :is() selector.
			foreach ( $classes_to_combine as $selector => $classes ) {
				if ( count( $classes ) === 1 ) {
					$new_selectors[] = sprintf( $selector, $classes[0] );
				} else {
					$new_selectors[] = sprintf( $selector, ':is(' . implode( ', ', $classes ) . ')' );
				}
			}

			return $new_selectors;
		}

		/**
		 * Generates an optimized version of an array of CSS strings.
		 *
		 * @param Array An array of CSS strings.
		 *
		 * @return String The optimized CSS.
		 */
		public static function generate_css( $styles ) {
			// This contains styles as keys and selectors as values for easy
			// lookups.
			$all_style_rules = array();

			// Organize the styles gathered so we can group together similar selectors.
			// The styles will be organized into:
			// - media query
			//   - style rule
			//     - selector
			//     - selector 2
			//     - ...
			foreach ( $styles as $style ) {
				// Spread all media queries.
				// The CSS generated by blocks can have media queries with multiple selectors & rules inside.
				// To make optimization easier, we'll spread them out so we can sort the selectors per media queries.
				$style = preg_replace_callback( '#((@media[^\{]+\{)(.*?)\}})#', function( $style_matches ) {
					return preg_replace( '#\}([^\}])#', '}}' . $style_matches[2] . '$1', $style_matches[0] );
				}, $style );

				// Extract all media queries, selectors and rules for optimization.
				preg_match_all( '#(@\w+.*?\{)?(.*?)(\{[^\}]+\})\}?#', $style, $style_matches );
				// $style_matches contains:
				// 1 = media query if there is one
				// 2 = selector
				// 3 = style rules

				foreach ( $style_matches[1] as $i => $media_query ) {
					$media_query = ! empty( $media_query ) ? substr( $media_query, 0, -1 ) : $media_query;
					$selector = $style_matches[2][ $i ];
					$style_rule = $style_matches[3][ $i ];

					// HOVER STYLES HACK (2/4): Add a placeholder so we'll end
					// up grouping together the hover styles.
					if ( stripos( $selector, ':hover' ) !== false ) {
						$style_rule .= '/* */';
					}

					if ( ! array_key_exists( $media_query, $all_style_rules ) ) {
						$all_style_rules[ $media_query ] = array();
					}

					if ( ! array_key_exists( $style_rule, $all_style_rules[ $media_query ] ) ) {
						$all_style_rules[ $media_query ][ $style_rule ] = array();
					}

					// We can have multiple selectors for the same rule.  This
					// explodes by commas but doesn't do it for strings inside
					// parenthesis. This handles selectors like
					// ":is(g,rect,circle)"
					$selectors = preg_split( '#,(?![^(]+\))#', $selector );

					foreach ( $selectors as $selector ) {
						$all_style_rules[ $media_query ][ $style_rule ][] = trim( $selector );
					}
				}
			}

			// Organize the styles.
			$css = '';
			$media_queries = self::MEDIA_QUERY_ORDER;

			// This will also include other media queries that we do not support, but just add those at the end of our CSS.
			foreach ( array_keys( $all_style_rules ) as $mediq_query ) {
				if ( ! in_array( $mediq_query, $media_queries ) ) {
					$media_queries[] = $media_query;
				}
			}

			// Go through each media query.
			foreach ( $media_queries as $media_query ) {
				if ( ! array_key_exists( $media_query, $all_style_rules ) ) {
					continue;
				}

				$styles = $all_style_rules[ $media_query ];

				if ( ! empty( $media_query ) ) {
					$css .= $media_query . '{';
				}

				// HOVER STYLES HACK (3/4): Reorder the selectors so hover
				// styles are put last.
				uksort( $styles, array( 'Monoblock_CSS_Optimize', 'selector_sort' ) );

				// Combine the selectors.
				foreach ( $styles as $style_rules => $selector_arr ) {

					// HOVER STYLES HACK (4/4): Remove the placeholder we used
					// to move the hover styles to the end.
					$style_rules = str_replace( '/* */', '', $style_rules );

					// Optimize selectors by combining similar ones.
					$selector_arr = self::combine_selectors( $selector_arr );

					$css .= implode( ',', $selector_arr ) . $style_rules;
				}

				if ( ! empty( $media_query ) ) {
					$css .= '}';
				}
			}

			return $css;
		}
	}

	new Monoblock_CSS_Optimize();
}
