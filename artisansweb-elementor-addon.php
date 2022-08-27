<?php
/**
* Plugin Name: Elementor Dev By Ftech
* Plugin URI: http://ftechhn.website/
* Description: Tạo block tùy biến của Elementor.
* Author: Lê Văn Long
* Version: 1.0
* Author URI: http://ftechhn.website/
*/
 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
 
function artisansweb_elementor_addon() {
 
    // Load plugin file
    require_once( __DIR__ . '/plugin.php' );
 
    // Run the plugin
    \Artisansweb_Elementor_Addon\Plugin::instance();
 
}
add_action( 'plugins_loaded', 'artisansweb_elementor_addon' );