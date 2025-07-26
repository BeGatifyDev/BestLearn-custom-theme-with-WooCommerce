<?php
// Enqueue styles and scripts
function bestlearn_enqueue_assets() {
    wp_enqueue_style('bestlearn-style', get_stylesheet_uri());
    wp_enqueue_style('bestlearn-custom', get_template_directory_uri() . '/assets/css/custom.css');
    wp_enqueue_script('bestlearn-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'bestlearn_enqueue_assets');

// Register menus and theme supports
function bestlearn_theme_setup() {
    // Register Primary Menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'bestlearn')
    ));

    // Add WooCommerce support
    add_theme_support('woocommerce');

    // Recommended additional supports
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // WooCommerce product gallery features (optional)
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'bestlearn_theme_setup');
?>
