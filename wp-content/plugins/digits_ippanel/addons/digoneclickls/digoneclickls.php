<?php
 if (!defined('ABSPATH')) { exit; } require dirname(__FILE__) . '/process.php'; function digits_update_oneclick_ls_settings() { if (isset($_POST['dig_one_click_login_signup'])) { $dig_one_click_login_signup = sanitize_text_field($_POST['dig_one_click_login_signup']); update_option('dig_one_click_login_signup', $dig_one_click_login_signup); $dig_one_click_login_signup_third_party_actions = sanitize_text_field($_POST['dig_one_click_login_signup_third_party_actions']); update_option('dig_one_click_login_signup_third_party_actions', $dig_one_click_login_signup_third_party_actions); } } add_action('digits_save_settings_data', 'digits_update_oneclick_ls_settings'); function digits_addon_digoneclickls() { return 'digoneclickls'; } function dig_show_oneclick_tab($active_tab) { ?>
    <div data-tab="digoneclicktab"
         class="dig_admin_in_pt digoneclicklstab digtabview <?php echo $active_tab == digits_addon_digoneclickls() ? 'digcurrentactive' : '" style="display:none;'; ?>">
        <?php digad_show_oneclick_settings(); ?>
    </div>

    <?php
 } add_action('digits_settings_page', 'dig_show_oneclick_tab'); function digad_show_oneclick_settings() { $digpc = get_site_option('dig_purchasecode'); if (empty($digpc)) { return; } $dig_one_click_login_signup = get_option('dig_one_click_login_signup', 0); $dig_one_click_login_signup_third_party_actions = get_option('dig_one_click_login_signup_third_party_actions', 0); ?>

    <div class="dig_admin_head"><span><?php _e('One Click Login-Signup', 'digits'); ?></span></div>
	<div style="color: red">
		توجه: هنگامی که این ادان را فعال کنید در فرم ورود تنها با شماره موبایل می توان ورود کرد و کاربران قدیمی سایت که شماره موبایل ثبت شده ندارند نمی توانند وارد شوند. شما می توانید به هر روشی که امکانش باشد، شماره مشتریان را ثبت کنید و سپس این ادان را فعال نمایید. ادان یکپارچه سازی کاربران همین افزونه می تواند شما را کمک کند تا از تمام مشتریان شماره همراه بگیرید و در پروفایلشان ثبت کنید.
	</div>
    <table class="form-table">
        <tr>
            <th scope="row"><label
                        for="dig_one_click_login_signup"><?php _e('One Click Login-Signup', 'digits'); ?>
                </label></th>
            <td>
                <select name="dig_one_click_login_signup" id="dig_one_click_login_signup">
                    <option value="1" <?php if ($dig_one_click_login_signup == 1) { echo 'selected=selected'; } ?> ><?php _e('Yes', 'digits'); ?></option>
                    <option value="0" <?php if ($dig_one_click_login_signup == 0) { echo 'selected=selected'; } ?> ><?php _e('No', 'digits'); ?></option>
                </select>
            </td>
        </tr>

        <tr>
            <th scope="row"><label
                        for="$dig_one_click_login_signup_third_party_actions"><?php _e('Enable Third Party Integrations', 'digits'); ?>
                </label></th>
            <td>
                <select name="dig_one_click_login_signup_third_party_actions"
                        id="dig_one_click_login_signup_third_party_actions">
                    <option value="1" <?php if ($dig_one_click_login_signup_third_party_actions == 1) { echo 'selected=selected'; } ?> ><?php _e('Yes', 'digits'); ?></option>
                    <option value="0" <?php if ($dig_one_click_login_signup_third_party_actions == 0) { echo 'selected=selected'; } ?> ><?php _e('No', 'digits'); ?></option>
                </select>
            </td>
        </tr>
    </table>

    <?php
} function digits_onclickls_form() { $digpc = get_site_option('dig_purchasecode'); if (empty($digpc)) { return; } if (is_user_logged_in()) { return; } $theme = "dark"; $themee = "lighte"; $bgtype = "bgdark"; $userCountryCode = getUserCountryCode(); $dig_login_details = digit_get_login_fields(); $captcha = $dig_login_details['dig_login_captcha']; ?>
    <style>
        .dig_ma-box .dig-box-login-title {
            display: none;
        }

        .dig_ma-box .digoneclickls .diglogsignup {
            padding-top: 24px;
            width: 100%;
        }

        .dig_ma-box .digoneclickls {
            float: unset;
        }

        .dig_ma-box .digloginpage {
            padding: 0 24px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 320px;
        }
    </style>
    <div class="digloginpage digoneclickls">
        <form class="diglogsignup">

            <div class="dig_sml_box_msg_head"><?php _e('Login / Register', 'digits'); ?></div>

            <div class="dig_sml_box_msg"><?php _e('A verification code will be sent to your number', 'digits'); ?></div>

            <div class="minput">
                <div class="minput_inner">
                    <div class="digits-input-wrapper">
                        <input type="text" class="mobile_field mobile_format dig-mobmail" name="mobmail" value=""
                               data-type="2" required/>
                    </div>
                    <div class="countrycodecontainer logincountrycodecontainer">
                        <input type="text" name="countrycode"
                               class="input-text countrycode logincountrycode <?php echo $theme; ?>"
                               maxlength="6" size="3" value="<?php echo $userCountryCode; ?>"
                               placeholder="<?php echo $userCountryCode; ?>"/>
                    </div>

                    <label><?php _e('Mobile Number', 'digits'); ?></label>
                    <span class="<?php echo $bgtype; ?>"></span>
                </div>
            </div>

            <div class="minput dig_login_otp" style="display: none;">
                <div class="minput_inner">
                    <div class="digits-input-wrapper empty">
                        <input type="text" name="dig_otp" class="dig-login-otp" autocomplete="one-time-code"/>
                    </div>
                    <label><?php _e('OTP', 'digits'); ?></label>
                    <span class="<?php echo $bgtype; ?>"></span>
                </div>
            </div>
            <?php
 if ($captcha == 1) { dig_show_login_captcha(1, $bgtype); } dig_rememberMe(); $fields = digits_oneclickls_get_fields(); if (!empty($fields)) { show_digp_reg_fields(1, $bgtype, 0, $fields); } ?>


            <input type="hidden" name="dig_nounce" class="dig_nounce"
                   value="<?php echo wp_create_nonce('dig_form') ?>">


            <div
                    class="dig_login_va_otp <?php echo $themee; ?> <?php echo $bgtype; ?> button loginviasms"><?php _e('Proceed', 'digits'); ?></div>

            <?php if (dig_isWhatsAppEnabled()) { ?>
                <div id="dig_login_va_whatsapp"
                     class=" <?php echo $themee; ?> <?php echo $bgtype; ?> button loginviasms loginviawhatsapp dig_use_whatsapp"><?php _e('Proceed With WhatsApp', 'digits'); ?></div>
                <?php
 } ?>
            <?php echo "<div id='dig_lo_resend_otp_btn' class=\"dig_resendotp dig_logof_log_resend dig_lo_resend_otp_btn\" dis='1'> " . __('Resend OTP', 'digits') . "<span>(00:<span>" . dig_getOtpTime() . "</span>)</span></div>"; ?>

            <?php
 $dig_one_click_login_signup_third_party_actions = get_option('dig_one_click_login_signup_third_party_actions', 0); if ($dig_one_click_login_signup_third_party_actions == 1) { global $dig_logingpage; $dig_logingpage = 1; do_action('login_form'); $dig_logingpage = 0; } ?>

        </form>
    </div>
    <script>
        jQuery('.dig-mobmail').on('keypress', function (e) {
            if (e.which == 13) {
                jQuery('.dig_login_va_otp').trigger('click');
            }
        });
    </script>
    <?php
} add_action('digits_custom_form', 'digits_onclickls_form'); function digits_onclickls_os() { if (!session_id() || session_status() == PHP_SESSION_NONE) { session_start(); } if (session_id() == '') { session_start(); } if (!isset($_POST['digits'])) { return; } if ($_REQUEST['login'] == 101) { return; } $dig_one_click_login_signup = get_option('dig_one_click_login_signup', 0); if ($dig_one_click_login_signup == 0) { return; } $fields = digits_oneclickls_get_fields(); if(!empty($fields)) { $validation_error = new WP_Error(); $validation_error = validate_digp_reg_fields($fields, $validation_error); if ($validation_error->get_error_code()) { wp_send_json_error(array('message' => __('Please accept terms and condition!','digits'))); die(); } } $countrycode = sanitize_text_field($_REQUEST['countrycode']); $mobileno = sanitize_mobile_field_dig($_REQUEST['mobileNo']); $csrf = $_REQUEST['csrf']; if (!wp_verify_nonce($csrf, 'dig_form')) { echo '0'; die(); } if (!checkwhitelistcode($countrycode)) { echo "-99"; die(); } if (isset($_POST['captcha']) && isset($_POST['captcha_ses']) && $_POST['captcha_ses'] != '') { $ses = filter_var($_POST['captcha_ses'], FILTER_SANITIZE_NUMBER_FLOAT); if (isset($_SESSION['dig_captcha' . $ses])) { if ($_POST['captcha'] != $_SESSION['dig_captcha' . $ses]) { wp_send_json_error(array('message' => __('Please enter a valid captcha!', 'digits'))); die(); } } }elseif(isset($_POST['digits_reg_logincaptcha']) && isset($_POST['dig_captcha_ses']) && $_POST['dig_captcha_ses'] != '') { $ses = filter_var($_POST['dig_captcha_ses'], FILTER_SANITIZE_NUMBER_FLOAT); if (isset($_SESSION['dig_captcha' . $ses])) { if ($_POST['digits_reg_logincaptcha'] != $_SESSION['dig_captcha' . $ses]) { wp_send_json_error(array('message' => __('Please enter a valid captcha!', 'digits'))); die(); } } } if (getUserFromPhone($countrycode . $mobileno)) { $_REQUEST['login'] = 1; } else { $_REQUEST['login'] = 2; } digits_check_mob(); die(); } add_action("wp_ajax_nopriv_digits_check_mob", "digits_onclickls_os", 1); function digoneclickls_hideloginitems() { $dig_one_click_login_signup = get_option('dig_one_click_login_signup', 0); if ($dig_one_click_login_signup == 1) { return 1; } return 0; } add_filter('dig_hide_forms', 'digoneclickls_hideloginitems'); function digoneclickls_addon($list) { $list[] = 'digoneclickls'; return $list; } add_filter('digits_addon', 'digoneclickls_addon'); ?>