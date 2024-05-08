<?php
 if (!defined('ABSPATH')) { exit; } require dirname(__FILE__) . '/includes/lock.php'; require dirname(__FILE__) . '/includes/functions.php'; function digits_update_pagelock_settings() { if (isset($_POST['diglock_lock_full_website'])) { $settings = array(); $settings['lock_full_website'] = sanitize_text_field($_POST['diglock_lock_full_website']); $settings['lock_wc_checkout'] = sanitize_text_field($_POST['diglock_lock_wc_checkout']); $settings['lock_mode'] = sanitize_text_field($_POST['diglock_lock_method']); update_option('dig_pagelock_options', $settings); if (isset($_POST['diglock_excluded_link'])) { $excluded_links = $_POST['diglock_excluded_link']; $filtered_links = array(); foreach ($excluded_links as $link) { $url = parse_url($link); if (!$url) { continue; } $link = $url['host']; if (isset($url['path'])) { $link .= $url['path']; } $filtered_links[] = sanitize_text_field($link); } update_option('diglock_excluded_link', $filtered_links); } } } add_action('digits_save_settings_data', 'digits_update_pagelock_settings'); function dig_is_exclude_lock_page() { if (dig_is_wp_login_page()) { return true; } $filtered_links = get_option('diglock_excluded_link', array()); if (!empty($filtered_links) && is_array($filtered_links)) { $url = parse_url("//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"); if (!$url) { return false; } $link = $url['host']; if (isset($url['path'])) { $link .= $url['path']; } if (in_array(sanitize_text_field($link), $filtered_links)) { return true; } } return false; } function dig_is_wp_login_page() { $ABSPATH_MY = str_replace(array('\\', '/'), DIRECTORY_SEPARATOR, ABSPATH); return ((in_array($ABSPATH_MY . 'wp-login.php', get_included_files()) || in_array($ABSPATH_MY . 'wp-register.php', get_included_files())) || (isset($_GLOBALS['pagenow']) && $GLOBALS['pagenow'] === 'wp-login.php') || $_SERVER['PHP_SELF'] == '/wp-login.php'); } function digpl_pagelock_values() { $digpl_pagelock_values = array( 'lock_full_website' => 0, 'lock_mode' => 1, 'lock_wc_checkout' => 0 ); return get_option('dig_pagelock_options', $digpl_pagelock_values); } function digits_addon_digpagelock() { return 'digpagelock'; } function dig_show_pagelock($active_tab) { ?>
    <div data-tab="digpagelocktab"
         class="dig_admin_in_pt digpagelocktab digtabview <?php echo $active_tab == digits_addon_digpagelock() ? 'digcurrentactive' : '" style="display:none;'; ?>">
        <?php digad_show_pagelock_settings(); ?>
    </div>

    <?php
 } add_action('digits_settings_page', 'dig_show_pagelock'); function digad_show_pagelock_settings() { $digpc = get_site_option('dig_purchasecode'); if (empty($digpc)) { return; } $digpl_pagelock_values = digpl_pagelock_values(); $lock_full_website = $digpl_pagelock_values['lock_full_website']; $lock_wc_checkout = $digpl_pagelock_values['lock_wc_checkout']; $lock_mode = $digpl_pagelock_values['lock_mode']; ?>

    <div class="dig_admin_head"><span><?php _e('Forced Login', 'digits'); ?></span></div>

    <table class="form-table">
        <tr>
            <th scope="row"><label
                        for="diglock_lock_full_website"><?php _e('Lock Full Website', 'digits'); ?>
                </label></th>
            <td>
                <select name="diglock_lock_full_website" id="diglock_lock_full_website">
                    <option value="1" <?php if ($lock_full_website == 1) { echo 'selected=selected'; } ?> ><?php _e('Yes', 'digits'); ?></option>
                    <option value="0" <?php if ($lock_full_website == 0) { echo 'selected=selected'; } ?> ><?php _e('No', 'digits'); ?></option>
                </select>
                <p class="dig_ecr_desc dig_sel_erc_desc"><?php _e('This will lock the whole website so that it can only be accessed by logged in users.', 'digits'); ?></p>
            </td>
        </tr>
    </table>
    <div class="diglock_lock_full_website_options" <?php if ($lock_full_website == 0) { echo 'style="display:none"'; } ?>>
        <table class="form-table">
            <tr>
                <th scope="row"><label
                            for="diglock_excluded_link"><?php _e('Excluded Page Links', 'digits'); ?>
                    </label></th>
                <td>
                    <select name="diglock_excluded_link[]" multiple class="dig_multiselect_dynamic_enable">
                        <?php
 $diglock_excluded_link = get_option('diglock_excluded_link', array()); if (is_array($diglock_excluded_link)) { foreach ($diglock_excluded_link as $link) { echo '<option selected>' . $link . '</option>'; } } ?>
                    </select>
                    <p class="dig_ecr_desc dig_sel_erc_desc"><?php _e('Page lock will not appear on these link(s)', 'digits'); ?></p>

                </td>
            </tr>
        </table>
    </div>
    <table class="form-table">
        <tr>
            <th scope="row"><label
                        for="diglock_lock_wc_checkout"><?php _e('Lock WooCommerce Checkout Page', 'digits'); ?>
                </label></th>
            <td>
                <select name="diglock_lock_wc_checkout" id="diglock_lock_wc_checkout">
                    <option value="1" <?php if ($lock_wc_checkout == 1) { echo 'selected=selected'; } ?> ><?php _e('Yes', 'digits'); ?></option>
                    <option value="0" <?php if ($lock_wc_checkout == 0) { echo 'selected=selected'; } ?> ><?php _e('No', 'digits'); ?></option>
                </select>
                <p class="dig_ecr_desc dig_sel_erc_desc"><?php _e('This will lock the checkout page so that it can only be accessed by logged in users.', 'digits'); ?></p>
            </td>
        </tr>

        <tr>
            <th scope="row"><label
                        for="diglock_lock_method"><?php _e('Lock Method', 'digits'); ?>
                </label></th>
            <td>
                <select name="diglock_lock_method">
                    <option value="1" <?php if ($lock_mode == 1) { echo 'selected'; } ?>><?php _e('Page', 'digits'); ?></option>
                    <option value="2" <?php if ($lock_mode == 2) { echo 'selected'; } ?>><?php _e('Modal', 'digits'); ?></option>
                </select>
            </td>
        </tr>


    </table>
    <script>
        jQuery(document).ready(function () {
            var lock_options = jQuery(".diglock_lock_full_website_options");
            jQuery("#diglock_lock_full_website").on('change', function () {
                if (jQuery(this).val() == '1') {
                    lock_options.slideDown();
                } else {
                    lock_options.slideUp();
                }
            })
        })
    </script>
    <?php
} function digpagelock_addon($list) { $list[] = 'digpagelock'; return $list; } add_filter('digits_addon', 'digpagelock_addon'); add_action('init', 'digpage_check_fullsite_lock', 10); function digpage_check_fullsite_lock() { digpage_check_lock(1); } add_action('template_redirect', 'digpage_check_checkout_lock', 10); function digpage_check_checkout_lock() { if (function_exists('is_checkout')) { if (is_checkout()) { digpage_check_lock(2); } } } function digpage_is_full_site_lock() { $digpl_pagelock_values = digpl_pagelock_values(); $lock_full_website = $digpl_pagelock_values['lock_full_website']; $lock_wc_checkout = $digpl_pagelock_values['lock_wc_checkout']; $lock_mode = $digpl_pagelock_values['lock_mode']; if ($lock_full_website == 1) { return true; } else { return false; } } function digpage_check_lock($page_type) { if (dig_is_exclude_lock_page()) { return; } $digpc = get_site_option('dig_purchasecode'); if (empty($digpc)) { return; } if (!is_user_logged_in()) { $digpl_pagelock_values = digpl_pagelock_values(); $lock_full_website = $digpl_pagelock_values['lock_full_website']; $lock_wc_checkout = $digpl_pagelock_values['lock_wc_checkout']; $lock_mode = $digpl_pagelock_values['lock_mode']; if (($lock_full_website == 1 && $page_type == 1) || ($lock_wc_checkout == 1 && $page_type == 2)) { digpage_activate_lock($page_type, $lock_mode, 0); } } } function digpagelock_lockpage() { $digpc = get_site_option('dig_purchasecode'); if (empty($digpc)) { return; } global $wp; $request = $wp->request; if ($request == null) { global $post; if (isset($post->ID)) { $post_id = $post->ID; } else { return; } } else { $request_url = home_url($request); $post_id = url_to_postid($request_url); if ($post_id == 0 || empty($request)) { $post = get_page_by_path($request); if ($post != null) { $post_id = $post->ID; } else { return; } } } if ($post_id != null && !is_user_logged_in()) { $lock = get_post_meta($post_id, 'diglock_lock', true); $lock_mode = get_post_meta($post_id, 'diglock_lock_mode', true); if ($lock) { digpage_activate_lock(3, $lock_mode, $post_id); } } } function digpage_add_inlinecss() { ?>
    <style>
        .digits_no_dismiss {
            display: block !important;
        }

        <?php
 if(digpage_is_full_site_lock()){ ?>
        .dig_login_cancel, .dig-cont-close {
            display: none;
        }

        <?php
 } ?>
        html, body {
            overflow: hidden;
        }

    </style>
    <?php
} function digpage_add_inlinescripts() { ?>
    <script>
        var goBack = function () {
            var ref = document.referrer;
            if (ref === '') {
                document.location.href = "/";
                return;
            }
            var host = window.location.host;
            if (ref.indexOf(host) == -1) {
                document.location.href = "/";
                return;
            }
            window.history.back()
        }


        addCloseListner('dig-cont-close');
        addCloseListner('dig_login_cancel');

        function addCloseListner(className) {
            var closeButton = document.getElementsByClassName(className);
            if (closeButton) {
                for (var i = 0; i < closeButton.length; i++) {
                    closeButton[i].addEventListener('click', goBack);
                }
            }
        }
    </script>
    <?php
} function digpage_add_lockclass($class) { $class[] = ' digits_no_dismiss'; return $class; } add_action('get_header', 'digpagelock_lockpage', 30); function diglock_add_lock_box() { $screens = array('post', 'page', 'product'); foreach ($screens as $screen) { add_meta_box( 'diglock_lockbox', __('Page Lock', 'digits'), 'diglock_inner_lock_box', $screen, 'side', 'core' ); } } add_action('add_meta_boxes', 'diglock_add_lock_box'); function diglock_inner_lock_box($post) { $digpc = get_site_option('dig_purchasecode'); if (empty($digpc)) { return; } wp_nonce_field('diglock_inner_lock_box', 'diglock_inner_lock_box'); $lock = get_post_meta($post->ID, 'diglock_lock', true); $checked = ''; if ($lock) { $checked = 'checked'; } echo '<br />'; echo '<div class="components-base-control"><div class="components-base-control__field">'; echo '<label class="components-base-control__label" for="diglock_lock">'; echo '<input type="checkbox" id="diglock_lock" name="diglock_lock" value="1" ' . $checked . '/>'; _e("Lock this page", 'digits'); echo '</label> '; echo '</div></div>'; $lock_mode = get_post_meta($post->ID, 'diglock_lock_mode', true); echo '<div class="components-base-control"><div class="components-base-control__field">'; echo '<label class="components-base-control__label" for="diglock_lock_mode">'; _e("Method", 'digits'); echo ':</label>'; ?>
    <select class="components-select-control__input" id="diglock_lock_mode" name="diglock_lock_mode">
        <option value="1" <?php if ($lock_mode == 1) { echo 'selected'; } ?>><?php _e('Page', 'digits'); ?></option>
        <option value="2" <?php if ($lock_mode == 2) { echo 'selected'; } ?>><?php _e('Modal', 'digits'); ?></option>
    </select>
    <?php
 echo '</div></div>'; do_action('digits_pagelock_single_page_settings', $post->ID); ?>
    <style>#diglock_lockbox .inside {
            box-sizing: border-box;
        }</style>
    <?php
} function diglock_save_lockstatus($post_id) { if (!isset($_POST['diglock_inner_lock_box'])) { return; } $nonce = $_POST['diglock_inner_lock_box']; if (!wp_verify_nonce($nonce, 'diglock_inner_lock_box')) { return; } if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) { return; } if ('page' == $_POST['post_type'] && !current_user_can('edit_page', $post_id)) { return; } else if ('page' != $_POST['post_type'] && !current_user_can('edit_post', $post_id)) { return; } if (isset($_POST['diglock_lock'])) { $lock = true; } else { $lock = false; } $lock_mode = sanitize_text_field($_POST['diglock_lock_mode']); update_post_meta($post_id, 'diglock_lock', $lock); update_post_meta($post_id, 'diglock_lock_mode', $lock_mode); do_action('digits_pagelock_single_page_settins_update', $post_id); } add_action('save_post', 'diglock_save_lockstatus'); ?>