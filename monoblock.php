<?php
/**
 * Plugin Name:       Monoblock
 * Description:       Powerful block to create custom designs and patterns library
 * Requires at least: 5.8
 * Requires PHP:      7.4
 * Version:           1.0.2
 * Author:            All AI
 * Author URI: 		  https://allai.club/
 * License:           GPL-3.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       monoblock
 */


namespace iori\monoblock;

// Abort if this file is called directly.
if ( ! defined( 'WPINC' ) ) {
	die;
}


/**
 * The main loader for this plugin
 */
class Main {

	/**
	 * Dependencies
	 *
	 * In order to use Gutenberg, every time you load a library (eg wp.element, wp.blocks)
	 * you need to ensure you have added the dependency to the enqueue. Otherwise your
	 * application will error (especailly if its the only block in the soloution).
	 *
	 * @var array
	 *
	 * @since 1.0.0
	 */
	public $dependencies;

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {

		/**
		* Dependencies
		*
		* In order to use Gutenberg, every time you load a library (eg wp.element, wp.blocks)
		* you need to ensure you have added the dependency to the enqueue. Otherwise your
		* application will error (especailly if its the only block in the soloution).
		*/

		$this->dependencies = [];
	}

	/**
	 * Run all of the plugin functions.
	 *
	 * @since 1.0.0
	 */
	function run() {

		/**
		 * Load Text Domain
		 */
		load_plugin_textdomain( 'iori', false, __FILE__ . '\languages' );
		
		/**
		 * Register Blocks
		 */
		add_action( 'init', array( $this, 'register_blocks' ) );
		add_action( 'init', array( $this, 'helpers' ) );
		
		/**
		 *  Create custom block category
		 */
		add_filter( 'block_categories_all', function( $categories, $post ) {
			return array_merge(
				$categories,
				array(
					array(
						'slug'  => 'monoblock',
						'title' => 'monoblock',
					),
				)
			);
		}, 10, 2 );
	}

	function helpers() {
		wp_enqueue_script('mono-helpers', plugins_url( '/assets/js/helpers.js', __FILE__ ));
		wp_localize_script('mono-helpers', 'monoblock', array(
			'path' => plugins_url().'/monoblock/',
		));
	}

	function register_blocks() {
		register_block_type( __DIR__ . '/build/1-monoblock' );
		register_block_type( __DIR__ . '/build/2-layer-base' );
		register_block_type( __DIR__ . '/build/2-layer-advanced' );
		register_block_type( __DIR__ . '/build/3-divider' );
		register_block_type( __DIR__ . '/build/3-text' );
		register_block_type( __DIR__ . '/build/3-wpcontent' );
		register_block_type( __DIR__ . '/build/3-picture' );
		register_block_type( __DIR__ . '/build/3-container' );
		register_block_type( __DIR__ . '/build/3-line' );
		register_block_type( __DIR__ . '/build/3-button' );
	}
}

require ( __DIR__ . '/server-render.php' );
require_once( __DIR__ . '/local-fonts.php' );
require_once( __DIR__ . '/patterns.php' );
require_once( __DIR__ . '/css-optimize.php' );

$main = new Main();
$main->run();