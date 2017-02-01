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
    wp_enqueue_style( 'styles' );
    wp_enqueue_script( 'js-script', plugin_dir_url( __FILE__ ) . '/js/script.js',array('jQuery'),false,false );
}
add_action( 'wp_enqueue_scripts', 'enqueue_plugin_scripts' );

include_once('/includes/admin.php');
include_once('/includes/settings.php');
?>