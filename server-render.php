<?php
/**
 * Server-side rendering of the `iori/monoblock` block.
 *
 * @package WordPress
 */

/**
 * Renders the `iori/monoblock` block on server.
 *
 * @param array $attributes The block attributes.
 * @param array $content    The block rendered content.
 *
 * @return string Returns the iori monoblock  markup, if useFeaturedImage is true.
 */
function render_block_iori_monoblock( $attributes, $content ) {
	if ( 'image' !== $attributes['backgroundType'] || false === $attributes['useFeaturedImage'] ) {
		return $content;
	}

	if ( ! ( $attributes['hasParallax'] || $attributes['isRepeated'] ) ) {
		$attr = array(
			'class'           => 'wp-block-iori-monolayer__image-background',
			'data-object-fit' => 'iori-monolayer',
		);

		if ( isset( $attributes['focalPoint'] ) ) {
			$object_position              = round( $attributes['focalPoint']['x'] * 100 ) . '%' . ' ' . round( $attributes['focalPoint']['y'] * 100 ) . '%';
			$attr['data-object-position'] = $object_position;
			$attr['style']                = 'object-position: ' . $object_position;
		}

		$image = get_the_post_thumbnail( null, 'post-thumbnail', $attr );

		$content = str_replace(
			'</span><div',
			'</span>' . $image . '<div',
			$content
		);

	} else {
		if ( in_the_loop() ) {
			update_post_thumbnail_cache();
		}
		$current_featured_image = get_the_post_thumbnail_url();
		$content                = preg_replace(
			'/class=\".*?\"/',
			'${0} style="background-image:url(' . esc_url( $current_featured_image ) . ')"',
			$content,
			1
		);
	}

	return $content;
}

/**
 * Registers the `iori/monoblock` block renderer on server.
 */
function register_block_iori_monoblock() {
	register_block_type_from_metadata(
		__DIR__ . '/monoblock',
		array(
			'render_callback' => 'render_block_iori_monoblock',
		)
	);
}
add_action( 'init', 'register_block_iori_monoblock' );