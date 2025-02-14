<?php
// Add Theme Support
function assignment_one_setup() {
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'assignment-one'),
    ));
}
add_action('after_setup_theme', 'assignment_one_setup');

// Load Styles
function assignment_one_styles() {
    wp_enqueue_style('main-styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'assignment_one_styles');
?>