<?php
 if (!defined('ABSPATH')) { exit; } add_action("wp_ajax_nopriv_digits_verifyotp_login", "digoneclickls_mn_fn", 1); add_action("wp_ajax_nopriv_digits_login_user", "digoneclickls_mn_fn", 1); function digoneclickls_mn_fn() { $data = digoneclickls_process(); if (!empty($data)) { wp_send_json($data); die(); } } function digoneclickls_process() { if (!isset($_POST['digits'])) { return; } $dig_one_click_login_signup = get_option('dig_one_click_login_signup', 0); if ($dig_one_click_login_signup == 0) { return; } if (is_user_logged_in()) { wp_send_json_error(array('message' => __('User is already logged in!', 'digits'))); } if ($_REQUEST['login'] == 101) { return; } $data = array(); $csrf = sanitize_text_field($_REQUEST['csrf']); $gateway = -1; $countrycode = sanitize_text_field($_REQUEST['countrycode']); $mobileno = sanitize_mobile_field_dig($_REQUEST['mobileNo']); $phone = $countrycode . $mobileno; if (function_exists('digits_validate_phone')) { if (!digits_validate_phone($phone)) { return array( 'success' => false, 'data' => array('code' => -1, 'msg' => __('Please enter a valid Phone Number', 'digits'), 'level' => 2) ); } } $csrf = $_REQUEST['csrf']; $otp = sanitize_text_field($_REQUEST['otp']); $del = false; if (!wp_verify_nonce($csrf, 'dig_form') && !wp_verify_nonce($csrf, 'crsf-otp')) { return array( 'success' => false, 'data' => array('code' => -1, 'msg' => __('Error', 'digits'), 'level' => 2) ); } if (!verifyOTP($countrycode, $mobileno, $otp, $del)) { return array( 'success' => false, 'data' => array('code' => -1, 'msg' => __('Invalid OTP', 'digits'), 'level' => 2) ); } $phone = $countrycode . $mobileno; $rememberMe = false; if (isset($_REQUEST['rememberMe']) && $_REQUEST['rememberMe'] == 'true') { $rememberMe = true; } $success_message = __('Login Successful, Redirecting..', 'digits'); if ($phone != null) { $user1 = getUserFromPhone($phone); $useMobAsUname = get_option('dig_mobilein_uname', 0); $user_name = $countrycode . $mobileno; if ($useMobAsUname == 2) { $user_name = apply_filters('digits_username', ''); } else if ($useMobAsUname == 1) { $user_name = str_replace("+", "", $user_name); } else if ($useMobAsUname == 5) { $user_name = $mobileno; } if (!$user1) { $user_id = wp_create_user($user_name, wp_generate_password()); if (is_wp_error($user_id)) { return array( 'success' => false, 'data' => array( 'code' => 1, 'msg' => __('Unexpected error occurred! Please try again.', 'digits'), 'level' => 2 ) ); } update_user_meta($user_id, 'digits_phone', $phone); update_user_meta($user_id, 'digt_countrycode', $countrycode); update_user_meta($user_id, 'digits_phone_no', $mobileno); $user1 = get_user_by('ID', $user_id); do_action('digits_new_user', $user_id); do_action('digits_user_created', $user_id); $success_message = __('Registration Successful, Redirecting..', 'digits'); $defaultuserrole = get_option('defaultuserrole', "customer"); wp_update_user(array( 'ID' => $user_id, 'role' => $defaultuserrole )); } if ($user1) { wp_set_current_user($user1->ID, $user1->user_login); wp_set_auth_cookie($user1->ID, $rememberMe); do_action('wp_login', $user1->user_login, $user1); $code = '11'; if ($gateway == 1) { echo '1'; } return array( 'success' => true, 'data' => array( 'code' => $code, 'msg' => $success_message, 'redirect' => '' ) ); } } } function digits_oneclickls_get_fields() { $reg_custom_fields = stripslashes(base64_decode(get_option("dig_reg_custom_field_data", "e30="))); if (!empty($reg_custom_fields)) { $reg_custom_fields = json_decode($reg_custom_fields, true); $fields = array(); foreach ($reg_custom_fields as $reg_custom_field) { if ($reg_custom_field['type'] === 'tac') { $fields[] = $reg_custom_field; } } if (!empty($fields)) { return $fields; } } return null; } 