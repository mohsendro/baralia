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


// Change the woocommerce_form_field HTML Structure
function change_html_structure_form_field_text( $field, $key, $args, $value ) {

    $field = "<div class='col-12'>";
    $field .= "<div class='comment-item mb-3'>";
    $field .= "<input type='". esc_attr( $args['type'] ) ."' name='". esc_attr( $key ) ."' class='form-control' id='". esc_attr( $key ) ."' placeholder='". esc_attr( $args['placeholder'] ) ."' value='". esc_attr( $value ) ."' autocomplete='given-name'>";
    $field .= "<label for='". esc_attr( $key ) ."' class='form-label label-float fw-bold'>" . esc_html( $args['label'] );
    $field .= "</label>";
    $field .= "</div>";
    $field .= "</div>";
    return $field;

}

function change_html_structure_form_field_select( $field, $key, $args, $value ) {

    $field = "<div class='col-12'>";
    $field .= "<div class='comment-item mb-3'>";
    $field .= "< for='". esc_attr( $key ) ."' class='form-label label-float fw-bold'>";
    $field .= "<span class='text-danger'>" . esc_html( $args['label'] );
    $field .= "</span>";
    $field .= "</label>";
    $field .= '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $key ) . '" class="form-select ' . esc_attr( implode( ' ', $args['class'] ) ) . '">';
    foreach ( $args['options'] as $option_value => $option_label ) {
        $selected = $value == $option_value ? 'selected' : '';
        echo '<option value="' . esc_attr( $option_value ) . '" ' . $selected . '>' . esc_html( $option_label ) . '</option>';
    }
    $field .= "</select>";
    $field .= "</div>";
    $field .= "</div>";
    return $field;

}

add_filter( 'woocommerce_form_field_select', 'change_html_structure_form_field_select', 10, 4 );
add_filter( 'woocommerce_form_field_text', 'change_html_structure_form_field_text', 10, 4 );
add_filter( 'woocommerce_form_field_tel', 'change_html_structure_form_field_text', 10, 4 );
add_filter( 'woocommerce_form_field_email', 'change_html_structure_form_field_text', 10, 4 );