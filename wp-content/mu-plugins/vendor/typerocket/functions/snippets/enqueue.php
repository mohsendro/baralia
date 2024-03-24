<?php

if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.

function wpplus_public_enqueue_scripts() {

	wp_register_style( 'normalize', TYPEROCKET_DIR_URL . 'resources/assets/vendor/css/normalize.css', false, '8.0.1' );
	wp_register_style( 'bootstrap-icons.min', TYPEROCKET_DIR_URL . 'resources/assets/font/bootstrap-icon/bootstrap-icons.min.css', false, '1.11.1' );
	wp_register_style( 'bootstrap.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/css/bootstrap.min.css', false, '5.3.2' );
	wp_register_style( 'swiper-bundle.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/js/plugin/swiper/swiper-bundle.min.css', false, '11.0.4' );
	wp_register_style( 'countdown', TYPEROCKET_DIR_URL . 'resources/assets/vendor/js/plugin/countdown/countdown.css', false, '1.0.0' );
	wp_register_style( 'style', TYPEROCKET_DIR_URL . 'resources/assets/vendor/js/plugin/rasta-contact/style.css', false, '1.0.0' );
	wp_register_style( 'jquery.bootstrap-touchspin.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/js/plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css', false, '1.0.0' );
	wp_register_style( 'main', TYPEROCKET_DIR_URL . 'resources/assets/vendor/css/main.css', false, '1.0.0' );
	wp_register_style( 'responsive', TYPEROCKET_DIR_URL . 'resources/assets/vendor/css/responsive.css', false, '1.0.0' );
	// Pages
	wp_register_style( 'tagify', TYPEROCKET_DIR_URL . 'resources/assets/vendor/js/plugin/tagify/tagify.css', false, '4.17.6' );
	wp_register_style( 'bootstrap-slider.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/js/plugin/bootstrap-slider/bootstrap-slider.min.css', false, '11.0.2' );
	// Custom Css
	wp_register_style( 'public-style', TYPEROCKET_DIR_URL . 'resources/assets/css/public.css', false, '1.0.0' );
	wp_register_style( 'responsive-style', TYPEROCKET_DIR_URL . 'resources/assets/css/responsive.css', false, '1.0.0' );
	wp_register_style( 'header-footer-style', TYPEROCKET_DIR_URL . 'resources/assets/css/header-footer.css', false, '1.0.0' );

	wp_register_script( 'modernizr-3.11.2.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/js/vendor/modernizr-3.11.2.min.js', false, '3.11.2', true );
	wp_register_script( 'jquery-3.7.1.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/js/vendor/jquery-3.7.1.min.js', false, '3.7.1', true );
	wp_register_script( 'bootstrap.bundle-5.3.2.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/js/vendor/bootstrap.bundle-5.3.2.min.js', false, '5.3.2', true );
	wp_register_script( 'swiper-bundle.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/js/plugin/swiper/swiper-bundle.min.js', false, '11.0.4', true );
	wp_register_script( 'countdown', TYPEROCKET_DIR_URL . 'resources/assets/vendor/js/plugin/countdown/countdown.js', false, '1.0.0', true );
	wp_register_script( 'vanilla-tilt.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/js/plugin/vanilla-tilt/vanilla-tilt.min.js', false, '1.0.0', true );
	wp_register_script( 'script', TYPEROCKET_DIR_URL . 'resources/assets/vendor/js/plugin/rasta-contact/script.js', false, '1.0.0', true );
	wp_register_script( 'jquery.bootstrap-touchspin.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/js/plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js', false, '1.0.0', true );
	wp_register_script( 'plugins', TYPEROCKET_DIR_URL . 'resources/assets/vendor/js/plugins.js', false, '1.0.0', true );
	wp_register_script( 'main', TYPEROCKET_DIR_URL . 'resources/assets/vendor/js/main.js', false, '1.0.0', true );
	// Pages
	wp_register_script( 'jQuery.tagify.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/js/plugin/tagify/jQuery.tagify.min.js', false, '4.17.6', true );
	wp_register_script( 'chart', TYPEROCKET_DIR_URL . 'resources/assets/vendor/js/plugin/chartjs/chart.js', false, '4.0.1', true );
	wp_register_script( 'bootstrap-slider.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/js/plugin/bootstrap-slider/bootstrap-slider.min.js', false, '11.0.2', true );
	// Custom Js
	wp_register_script( 'public-script', TYPEROCKET_DIR_URL . 'resources/assets/js/public.js', false, '1.0.0', true );
	// wp_register_script( 'ajax-sample-script', TYPEROCKET_DIR_URL . 'resources/assets/js/ajax.js', false, '1.0.0', true );


	wp_enqueue_style( 'normalize' );
	wp_enqueue_style( 'bootstrap-icons.min' );
	wp_enqueue_style( 'bootstrap.min' );
	wp_enqueue_style( 'swiper-bundle.min' );
	wp_enqueue_style( 'countdown' );
	wp_enqueue_style( 'style' );
	wp_enqueue_style( 'jquery.bootstrap-touchspin.min' );
	wp_enqueue_style( 'main' );
	wp_enqueue_style( 'responsive' );
	wp_enqueue_style( 'tagify' );
	wp_enqueue_style( 'bootstrap-slider.min' );
	wp_enqueue_style( 'public-style' );
	wp_enqueue_style( 'responsive-style' );
	wp_enqueue_style( 'header-footer-style' );

	wp_enqueue_script( 'modernizr-3.11.2.min' );
	wp_enqueue_script( 'jquery-3.7.1.min' );
	wp_enqueue_script( 'bootstrap.bundle-5.3.2.min' );
	wp_enqueue_script( 'swiper-bundle.min' );
	wp_enqueue_script( 'countdown' );
	wp_enqueue_script( 'vanilla-tilt.min' );
	wp_enqueue_script( 'script' );
	wp_enqueue_script( 'jquery.bootstrap-touchspin.min' );
	wp_enqueue_script( 'plugins' );
	wp_enqueue_script( 'main' );
	wp_enqueue_script( 'jQuery.tagify.min' );
	wp_enqueue_script( 'chart' );
	wp_enqueue_script( 'bootstrap-slider.min' );
	wp_enqueue_script( 'public-script' );
    // wp_enqueue_script( 'ajax-sample-script' );


    // Ajax Handler
    // wp_localize_script(
    //     'ajax-sample-script', 'sample_ajax_localize_obj', array(
    //         'ajax_url' => admin_url( 'admin-ajax.php' ),
    //         'the_nonce' => wp_create_nonce('sample_name_form_nonce') 
    //     )
    // );

}

function wpplus_admin_enqueue_scripts() {

    // wp_register_style( 'admin-style', TYPEROCKET_DIR_URL . 'resources/assets/css/admin.css', false, '1.0.0' );
    // wp_register_script( 'admin-script', TYPEROCKET_DIR_URL . 'resources/assets/js/admin.js', false, '1.0.0' );

    // wp_enqueue_style( 'admin-style' );

	// wp_enqueue_script( 'admin-script' );
    // wp_enqueue_script( 'ajax-sample-script' );


    // Ajax Handler
    // wp_localize_script(
    //     'ajax-sample-script', 'sample_ajax_localize_obj', array(
    //         'ajax_url' => admin_url( 'admin-ajax.php' ),
    //         'the_nonce' => wp_create_nonce('sample_name_form_nonce') 
    //     )
    // );

}

add_action( 'wp_enqueue_scripts', 'wpplus_public_enqueue_scripts' );
// add_action( 'admin_enqueue_scripts', 'wpplus_admin_enqueue_scripts' );
// add_action( 'enqueue_embed_scripts', 'wpplus_embed_enqueue_scripts' );