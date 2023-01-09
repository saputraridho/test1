<?php
/**
* Plugin Name: My Plugin
* Plugin URl: https://www.facebook.com/putra.khecild.3/
* Description: Ini punyaku
* Author: PutraKun
* Author URI: https://www.facebook.com/putra.khecild.3/
* License: GPLv2
* License URl: https://www.gnu.org/licenses/gpl-2.0.html
*/

add_shortcode( 'shortcode_test', 'shortcode_handler_function' );
function shortcode_handler_function(){
    return "halo dunia";
}