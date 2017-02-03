<?php
/*
Plugin Name:Simple Cookie Disclaimer
Plugin URI: https:git@gitlab.com:thinkerman/CookieNotifierPlugin.git
Description: Notifies user that the current website uses cookies to store information
Version: 0.1.0
Author: Samuel Adegoke
Author URI: http://devcodes.xyz
*/

if (!defined('ABSPATH'))
    exit;
function enqueue_plugin_scripts()
{
    wp_register_style('styles', plugin_dir_url(__FILE__) . 'assets/css/styles.css');
    wp_enqueue_style('styles');
    wp_register_style('font-awesome', plugin_dir_url(__FILE__) . 'assets/css/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('font-awesome');
    wp_enqueue_script('cookie-script', plugin_dir_url(__FILE__) . 'assets/js/script.js', array(
        'jquery'
    ));
    wp_enqueue_script('jq-cookie-plugin', plugin_dir_url(__FILE__) . 'assets/js/jquery.cookie.js', array(
        'jquery'
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_plugin_scripts');
function enqueue_admin_script($hook)
{
    if ('toplevel_page_cookie_disclaimer' != $hook) {
        return;
    }
    wp_register_style('admin_css', plugin_dir_url(__FILE__) . 'assets/css/bootstrap.min.css', false, time());
    wp_enqueue_style('admin_css');
    wp_enqueue_script('boostrap_script', plugin_dir_url(__FILE__) . 'assets/js/bootstrap.min.js', array(
        'jquery'
    ), '1.0');
    wp_register_style('select_style', plugin_dir_url(__FILE__) . 'assets/css/bootstrap-select.min.css', false, time());
    wp_enqueue_style('select_style');
    wp_enqueue_script('admin_script', plugin_dir_url(__FILE__) . 'assets/js/admin.js', array(
        'jquery'
    ), '1.0');
    wp_enqueue_script('bootstrap_select_script', plugin_dir_url(__FILE__) . 'assets/js/bootstrap-select.js', array(
        'jquery'
    ), '1.0');
    
}
add_action('admin_enqueue_scripts', 'enqueue_admin_script');


$admin_dir = plugin_dir_path(__FILE__) . 'includes/cd_admin_settings_class.php';
include_once $admin_dir;
function check_current_page()
{
    if (!is_page('Landing Page')) {
        $cookie_disp = plugin_dir_path(__FILE__) . 'includes/cd_cookie_display_class.php';
        include_once $cookie_disp;
    }
}
add_action('wp_footer', 'check_current_page');
function admin_trello_notice()
{
?>
    <div class="notice notice-success is-dismissible">
        <p><?php
    _e("Curious about my workflow habit? check out <a href='https://trello.com/b/GMv1oKPn/disclaimer-plugin' target='_blank'>the Trello card for this project</a>");
?></p>
    </div>
    <?
}
add_action('admin_notices', 'admin_trello_notice');
?>