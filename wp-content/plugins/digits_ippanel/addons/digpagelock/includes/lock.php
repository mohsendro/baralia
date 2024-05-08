<?php
 if (!defined('ABSPATH')) { exit; } function digpage_activate_lock($type, $lock_mode, $lock_page_id) { if (wp_doing_ajax() || digpagelock_is_rest_api_request()) { return; } if (!is_numeric($lock_page_id)) { $lock_page_id = 0; } $current_url = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; $is_login = (isset($_GET['login']) && $_GET['login'] == 'true') ? true : false; $is_login = apply_filters('is_digits_login_reg_page', $is_login, $lock_page_id, $current_url); if ($is_login) { return; } if ($lock_mode == 2) { $modal_filter = 'digits_modal_class_digits_native'; $modal_filter = apply_filters('digpagelock_modal_lock', $modal_filter, $lock_page_id); add_filter($modal_filter, 'digpage_add_lockclass'); add_action('wp_head', 'digpage_add_inlinecss'); add_action('wp_footer', 'digpage_add_inlinecss'); add_action('wp_footer', 'digpage_add_inlinescripts'); wp_enqueue_script('jquery'); wp_add_inline_script('jquery', "if(! /Android|webOS|iPhone|iPad|iPod|Opera Mini/i.test(navigator.userAgent) ) jQuery(document).bind('scroll',function () {window.scrollTo(0,0);});"); } else { $login_url = add_query_arg(array( 'login' => 'true', 'back' => 'home' ), $current_url); $url = apply_filters('digits_pagelock_login_url', $login_url, $current_url, $lock_page_id); wp_safe_redirect($url); die(); } }