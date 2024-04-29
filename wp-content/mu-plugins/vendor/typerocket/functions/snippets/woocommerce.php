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


// These are actions you can unhook/remove! Woocommerce Template
function wpplus_woocommerce_loaded_action() {

    // remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

}
add_action( 'woocommerce_loaded', 'wpplus_woocommerce_loaded_action' );


// These are actions you can filter! Woocommerce hooks
function wpplus_custom_price_html( $price, $product ) {
    // $price = str_replace( '<span class="woocommerce-Price-currencySymbol">تومان</span>', ' ', $price );
    // $price = str_replace( ' - ', "<span class='mb-0 text-muted-two'>الی</span>", $price );
    $price = str_replace( 'span', 'div class="d-inline"', $price );
    $price = str_replace( 'del', 'del class="d-inline"', $price );
    $price = str_replace( 'ins', 'ins class="d-inline"', $price );
    return $price;
}
add_filter( 'woocommerce_get_price_html', 'wpplus_custom_price_html', 10, 2 );

// Filter search result
function wpplus_filter_search_to_products($query) {
    if ($query->is_search && !is_admin()) {
      $query->set('post_type', array('product'));
    }
    return $query;
}
add_filter('pre_get_posts', 'wpplus_filter_search_to_products');
  














add_filter( 'woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment', 30, 1 );
function header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;

    ob_start();

    ?>
    <a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
    <?php
    $fragments['a.cart-customlocation'] = ob_get_clean();

    return $fragments;
}