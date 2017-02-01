<?php
/*
Plugin Name: Cookie Notifier
Plugin URI: https:git@gitlab.com:thinkerman/CookieNotifierPlugin.git
Description: Notifies user that the current website uses cookies to store information
Version: 0.1.0
Author: Samuel Adegoke
Author URI: http://devcodes.xyz
*/

if ( ! defined( 'ABSPATH' ) ) exit;

function enqueue_plugin_scripts() {
    wp_register_style( 'styles',  plugin_dir_url( __FILE__ ) . 'styles.css' );
    wp_enqueue_style( 'styles', plugin_dir_url( __FILE__ ) . 'styles.css', ' ', time() );
    wp_register_style( 'font-awesome', plugin_dir_url( __FILE__ ) . 'font-awesome/css/font-awesome.min.css');
    wp_enqueue_style( 'font-awesome', plugin_dir_url( __FILE__ ) . 'font-awesome/css/font-awesome.min.css', ' ', time() );
    wp_enqueue_script( 'cookie-script', plugin_dir_url( __FILE__ ) . 'js/script.js',array('jquery') );
    wp_enqueue_script( 'cookie-script', plugin_dir_url( __FILE__ ) . 'js/jquery.cookie.js',array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'enqueue_plugin_scripts' );
$admin_dir = plugin_dir_path( __FILE__ ).'includes/admin.php';
$cookie_disp = plugin_dir_path( __FILE__ ).'includes/cookie-disp.php';
include_once $admin_dir;
include_once $cookie_disp;


?>