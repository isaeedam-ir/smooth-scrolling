<?php
/**
 * Plugin Name: Smooth Scrolling
 * Description: Is a lightweight plugin that introduces a smooth scrolling effect when navigating with a mouse wheel, touchpad, or keyboard arrows.
 * Version:     1.0.1
 * Author:      Saeed Piri
 * Author URI:  https://isaeedam.ir/
 * Requires at least: 6.0
 * Requires PHP: 7.4
 * License: GPL-3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'wp_enqueue_scripts', 'smooth_scrolling_script' );
function smooth_scrolling_script(){
    wp_register_script('smoothscroll', plugin_dir_url(__FILE__) . 'js/SmoothScroll.min.js', array(), '1.0.1', array( 'strategy' => 'defer', 'in_footer' => true ) );
    wp_enqueue_script ('smoothscroll');
}