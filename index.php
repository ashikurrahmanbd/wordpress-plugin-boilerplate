<?php
/**
 * Plugin Name: Rsquare Custom Carousel
 * PLugin URI: http://wewebians.com
 * Author: Ashikur Rahman
 * Author URI: http://facebook.com/ashikjoy.akash
 * Description: This is a custom Carousel Plugin Developed by Ashikur Rahman for Rsquare under General Licence.
 * Version: 1.0
 * Text Domain: rsquare
 */


//protect direct access
defined('ABSPATH') or die(' Dont try to access direclty ');

//load text domain
load_plugin_textdomain( 'rsquare', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );

// load css and js
function rsquare_css_js(){

    //don't need to add the jquery. it will be added by default

    // js

    wp_enqueue_script( 'twitch-main-js', plugins_url( 'js/main.js', __FILE__ ), array('jquery'), '1.0', true );


    // css
   
    wp_enqueue_style( 'twitch-main-style', plugins_url( 'css/main.css', __FILE__ ));

}
add_action('wp_enqueue_scripts', 'rsquare_css_js');


//twitch shortcode

function rsquare_custom_carousel_shortcode_funtion(){

    $dir = plugin_dir_url( __FILE__ );

    ob_start();
    ?>

       

    <?php
    $clear_ob = ob_get_clean();
    return $clear_ob;
}
add_shortcode('rsquare_custom_carousel', 'rsquare_custom_carousel_shortcode_funtion');


?>
