<?php
// CSS and JS
function css_and_scripts() {
    // Wczytanie CSS
    wp_enqueue_style (
    'main-styles', get_template_directory_uri().'/style.css'
    );
    // Wczytanie JS
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/scripts.js', array( 'jquery') );
    wp_enqueue_script('calc-script', get_template_directory_uri() . '/js/calc.js', array( 'jquery') );}

// Action
add_action('wp_enqueue_scripts', 'css_and_scripts');
add_theme_support( 'post-thumbnails');

// Widget
register_sidebar ( array(
  'name'          => 'Widget',
  'description'   => 'Widget',
  'before_title'  => '<h2>',
  'after_title'   => '</h2>'
)); 

// Remove login header
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

// REST API disable
function portfolio_disable_rest_api() {
	return new WP_Error('portfolio_rest_api_disabled', 'REST API disables', array('status' => 403));
}
add_filter('rest_authentication_errors', 'portfolio_disable_rest_api', 99);
?>