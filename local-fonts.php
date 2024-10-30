<?php

// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}

/**
 *  Register
*/
add_action( 'after_setup_theme', function() {
     if ( ! function_exists( 'wp_register_webfonts' ) ) {
          return;
     }
     wp_register_webfonts(
          array(
               array(
                    'font-family'  => 'Australia Custom',
                    'font-style'    => 'normal',
                    'font-weight'   => '100 200 300 400 500 600 700 800 900',
                    'src'          => array(
                         plugins_url( '/assets/fonts/Australia-Custom.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/Australia-Custom.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'League Spartan',
                    'font-style'    => 'normal',
                    'font-weight'   => '700',
                    'src'          => array(
                         plugins_url( '/assets/fonts/leaguespartan-bold.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/leaguespartan-bold.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Low Budget',
                    'font-style'    => 'normal',
                    'font-weight'   => '100 200 300 400 500 600 700 800 900',
                    'src'          => array(
                         plugins_url( '/assets/fonts/low-budget.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/low-budget.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Reey Regular',
                    'font-style'    => 'normal',
                    'font-weight'   => '100 200 300 400 500 600 700 800 900',
                    'src'          => array(
                         plugins_url( '/assets/fonts/reey-regular.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/reey-regular.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Kaushan Script',
                    'font-style'    => 'normal',
                    'font-weight'   => '100 200 300 400 500 600 700 800 900',
                    'src'          => array(
                         plugins_url( '/assets/fonts/kaushanscript-regular.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/kaushanscript-regular.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Chunk Five',
                    'font-style'    => 'normal',
                    'font-weight'   => '100 200 300 400 500 600 700 800 900',
                    'src'          => array(
                         plugins_url( '/assets/fonts/chunkfive-regular.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/chunkfive-regular.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Chunk Five Print',
                    'font-style'    => 'normal',
                    'font-weight'   => '100 200 300 400 500 600 700 800 900',
                    'src'          => array(
                         plugins_url( '/assets/fonts/chunkfive-print.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/chunkfive-print.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Great Vibes',
                    'font-style'    => 'normal',
                    'font-weight'   => '100 200 300 400 500 600 700 800 900',
                    'src'          => array(
                         plugins_url( '/assets/fonts/greatvibes-regular.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/greatvibes-regular.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Quicksand Dash',
                    'font-style'    => 'normal',
                    'font-weight'   => '100 200 300 400 500 600 700 800 900',
                    'src'          =>  array(
                         plugins_url( '/assets/fonts/quicksand/quicksand-dash.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/quicksand/quicksand-dash.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
          )
     );
     wp_register_webfonts(
          array(
               array(
                    'font-family'  => 'Arima',
                    'font-style'    => 'normal',
                    'font-weight'   => '100',
                    'src'          =>  array(
                         plugins_url( '/assets/fonts/arima/arimakoshi-thin.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/arima/arimakoshi-thin.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Arima',
                    'font-style'    => 'normal',
                    'font-weight'   => '200',
                    'src'          => array(
                         plugins_url( '/assets/fonts/arima/arimakoshi-extralight.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/arima/arimakoshi-extralight.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Arima',
                    'font-style'    => 'normal',
                    'font-weight'   => '300',
                    'src'          =>  array(
                         plugins_url( '/assets/fonts/arima/arimakoshi-light.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/arima/arimakoshi-light.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Arima',
                    'font-style'    => 'normal',
                    'font-weight'   => '400',
                    'src'          =>  array(
                         plugins_url( '/assets/fonts/arima/arimakoshi-regular.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/arima/arimakoshi-regular.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Arima',
                    'font-style'    => 'normal',
                    'font-weight'   => '500',
                    'src'          =>  array(
                         plugins_url( '/assets/fonts/arima/arimakoshi-medium.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/arima/arimakoshi-medium.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Arima',
                    'font-style'    => 'normal',
                    'font-weight'   => '600',
                    'src'          =>  array(
                         plugins_url( '/assets/fonts/arima/arimakoshi-semibold.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/arima/arimakoshi-semibold.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Arima',
                    'font-style'    => 'normal',
                    'font-weight'   => '700',
                    'src'          =>  array(
                         plugins_url( '/assets/fonts/arima/arimakoshi-bold.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/arima/arimakoshi-bold.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Arima',
                    'font-style'    => 'normal',
                    'font-weight'   => '800',
                    'src'          =>  array(
                         plugins_url( '/assets/fonts/arima/arimakoshi-extrabold.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/arima/arimakoshi-extrabold.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
          )
     );
     wp_register_webfonts(
          array(
               array(
                    'font-family'  => 'Quicksand',
                    'name' => 'Quicksand Light',
                    'font-style'    => 'normal',
                    'font-weight'   => '300',
                    'src'          => array(
                         plugins_url( '/assets/fonts/quicksand/quicksand-light.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/quicksand/quicksand-light.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Quicksand',
                    'name' => 'Quicksand Regular',
                    'font-style'    => 'normal',
                    'font-weight'   => '400',
                    'src'          =>  array(
                         plugins_url( '/assets/fonts/quicksand/quicksand-regular.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/quicksand/quicksand-regular.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Quicksand',
                    'name' => 'Quicksand Bold',
                    'font-style'    => 'normal',
                    'font-weight'   => '700',
                    'src'          => array(
                         plugins_url( '/assets/fonts/quicksand/quicksand-bold.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/quicksand/quicksand-bold.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Quicksand',
                    'name' => 'Quicksand Italic Light',
                    'font-style'    => 'italic',
                    'font-weight'   => '300',
                    'src'          =>  array(
                         plugins_url( '/assets/fonts/quicksand/quicksand-lightitalic.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/quicksand/quicksand-lightitalic.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Quicksand',
                    'name' => 'Quicksand Italic',
                    'font-style'    => 'italic',
                    'font-weight'   => '400',
                    'src'          =>  array(
                         plugins_url( '/assets/fonts/quicksand/quicksand-italic.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/quicksand/quicksand-italic.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Quicksand',
                    'name' => 'Quicksand Italic Bold',
                    'font-style'    => 'italic',
                    'font-weight'   => '700',
                    'src'          => array(
                         plugins_url( '/assets/fonts/quicksand/quicksand-bolditalic.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/quicksand/quicksand-bolditalic.woff', __FILE__ ),
                    ), 
                    'provider'     => 'local',
               ),
          )
     );
     wp_register_webfonts(
          array(
               array(
                    'font-family'  => 'Roboto',
                    'name'		=> 'Roboto Thin',
                    'font-style'    => 'normal',
                    'font-weight' 	=> '100',
                    'src' 		=>  array(
                         plugins_url( '/assets/fonts/roboto/roboto-thin.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/roboto/roboto-thin.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Roboto',
                    'name' 		=> 'Roboto Light',
                    'font-style'    => 'normal',
                    'font-weight' 	=> '300',
                    'src'          =>  array(
                         plugins_url( '/assets/fonts/roboto/roboto-light.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/roboto/roboto-light.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Roboto',
                    'name' 		=> 'Roboto Regular',
                    'font-style'    => 'normal',
                    'font-weight' 	=> '400',
                    'src'          =>  array(
                         plugins_url( '/assets/fonts/roboto/roboto-regular.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/roboto/roboto-regular.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Roboto',
                    'name' 		=> 'Roboto Medium',
                    'font-style'    => 'normal',
                    'font-weight' 	=> '500',
                    'src'          =>  array(
                         plugins_url( '/assets/fonts/roboto/roboto-medium.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/roboto/roboto-medium.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Roboto',
                    'name' 		=> 'Roboto Bold',
                    'font-style'    => 'normal',
                    'font-weight' 	=> '700',
                    'src'          => array(
                         plugins_url( '/assets/fonts/roboto/roboto-bold.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/roboto/roboto-bold.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Roboto',
                    'name' 		=> 'Roboto Black',
                    'font-style'    => 'normal',
                    'font-weight' 	=> '900',
                    'src'          => array(
                         plugins_url( '/assets/fonts/roboto/roboto-black.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/roboto/roboto-black.woff', __FILE__ ),
                    ), 
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Roboto',
                    'name' 		=> 'Roboto Thin Italic',
                    'font-style'    => 'italic',
                    'font-weight' 	=> '100',
                    'src'          =>  array(
                         plugins_url( '/assets/fonts/roboto/roboto-thinitalic.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/roboto/roboto-thinitalic.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Roboto',
                    'name' 		=> 'Roboto Light Italic',
                    'font-style'    => 'italic',
                    'font-weight' 	=> '300',
                    'src'          =>  array(
                         plugins_url( '/assets/fonts/roboto/roboto-lightitalic.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/roboto/roboto-lightitalic.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Roboto',
                    'name' 		=> 'Roboto Italic',
                    'font-style'    => 'italic',
                    'font-weight' 	=> '400',
                    'src'          => array(
                         plugins_url( '/assets/fonts/roboto/roboto-italic.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/roboto/roboto-italic.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Roboto',
                    'name' 		=> 'Roboto Medium Italic',
                    'font-style'    => 'italic',
                    'font-weight' 	=> '500',
                    'src'          =>  array(
                         plugins_url( '/assets/fonts/roboto/roboto-mediumitalic.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/roboto/roboto-mediumitalic.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Roboto',
                    'name' 		=> 'Roboto Bold Italic',
                    'font-style'    => 'italic',
                    'font-weight' 	=> '700',
                    'src'          =>  array(
                         plugins_url( '/assets/fonts/roboto/roboto-bolditalic.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/roboto/roboto-bolditalic.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
               array(
                    'font-family'  => 'Roboto',
                    'name' 		=> 'Roboto Black Italic',
                    'font-style'    => 'italic',
                    'font-weight' 	=> '900',
                    'src'          =>  array(
                         plugins_url( '/assets/fonts/roboto/roboto-blackitalic.woff2', __FILE__ ),
                         plugins_url( '/assets/fonts/roboto/roboto-blackitalic.woff', __FILE__ ),
                    ),
                    'provider'     => 'local',
               ),
          )
     );
} );

/**
 *  Enqueue
*/
add_action( 'wp_enqueue_scripts', function() {
     if ( ! function_exists( ' wp_enqueue_webfont' ) ) {
          return;
     }
     wp_enqueue_webfont( 'Australia Custom', '', array(
          'provider'    => 'local',
          'font-family'  => 'Australia Custom',
          'font-style'    => 'normal',
          'font-weight'   => '400',
     ) );
     wp_enqueue_webfont( 'League Spartan', '', array(
          'provider'    => 'local',
          'font-family'  => 'League Spartan',
          'font-style'    => 'normal',
          'font-weight'   => '700',
     ) );
     wp_enqueue_webfont( 'Low Budget', '', array(
          'font-family'  => 'Low Budget',
          'font-style'    => 'normal',
          'font-weight'   => '400',
          'provider'     => 'local',
     ) );
     wp_enqueue_webfont( 'Reey Regular', '', array(
          'font-family'  => 'Reey Regular',
          'font-style'    => 'normal',
          'font-weight'   => '400',
          'provider'     => 'local',
     ) );
     wp_enqueue_webfont( 'Kaushan Script', '', array(
          'font-family'  => 'Kaushan Script',
          'font-style'    => 'normal',
          'font-weight'   => '400',
          'provider'     => 'local',
     ) );
     wp_enqueue_webfont( 'Chunk Five', '', array(
          'font-family'  => 'Chunk Five',
          'font-style'    => 'normal',
          'font-weight'   => '400',
          'provider'     => 'local',
     ) );
     wp_enqueue_webfont( 'Chunk Five Print', '', array(
          'font-family'  => 'Chunk Five Print',
          'font-style'    => 'normal',
          'font-weight'   => '400',
          'provider'     => 'local',
     ) );
     wp_enqueue_webfont( 'Great Vibes', '', array(
          'font-family'  => 'Great Vibes',
          'font-style'    => 'normal',
          'font-weight'   => '400',
          'provider'     => 'local',
     ) );
     wp_enqueue_webfont( 'Quicksand Dash', '', array(
          'font-family'  => 'Quicksand Dash',
          'font-style'    => 'normal',
          'font-weight'   => '400',
          'provider'     => 'local',
     ) );
     wp_enqueue_webfont( 'Arima', '', array(
          'font-family'  => 'Arima',
          'provider'     => 'local',
     ) );
     wp_enqueue_webfont( 'Quicksand', '', array(
          'font-family'  => 'Quicksand',
          'provider'     => 'local',
     ) );
     wp_enqueue_webfont( 'Roboto', '', array(
          'font-family'  => 'Roboto',
          'provider'     => 'local',
     ) );
} );