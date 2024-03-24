<?php

if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.

// Register Theme Features
function wpplus_wc_features_support()  {

    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-slider' );
    add_theme_support( 'wc-product-gallery-lightbox' );

    if (class_exists('Woocommerce')){
        add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
    }

}
add_action('init', 'wpplus_wc_features_support') ;


// These are actions you can unhook/remove!
function wpplus_woocommerce_loaded_action() {

    // remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

}
add_action( 'woocommerce_loaded', 'wpplus_woocommerce_loaded_action' );
