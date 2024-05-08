<?php
 if (!defined('ABSPATH')) { exit; } require dirname(__FILE__) . '/handler.php'; function digits_update_billing_merge_settings() { if (isset($_POST['dig_bill_merge_phone'])) { $dig_bill_ship_fields = sanitize_text_field($_POST['dig_bill_merge_phone']); update_option('dig_bill_merge_phone', $dig_bill_ship_fields); $dig_sync_acc_bill_fields = sanitize_text_field($_POST['dig_sync_acc_bill_fields']); update_option('dig_sync_acc_bill_phone', $dig_sync_acc_bill_fields); } } add_action('digits_save_settings_data', 'digits_update_billing_merge_settings'); function digits_addon_digmergphne() { return 'digmergphne'; } function dig_show_billmerge($active_tab) { ?>
    <div data-tab="digmergphnetab"
         class="dig_admin_in_pt digmergphnetab digtabview <?php echo $active_tab == digits_addon_digmergphne() ? 'digcurrentactive' : '" style="display:none;'; ?>">
        <?php digad_show_merge_settings(); ?>
    </div>

    <?php
 } add_action('digits_settings_page', 'dig_show_billmerge'); function digad_show_merge_settings() { $digpc = get_site_option('dig_purchasecode'); if (empty($digpc)) return; $dig_bill_ship_fields = get_option('dig_bill_merge_phone', 0); $dig_sync_acc_bill_fields = get_option('dig_sync_acc_bill_phone', 0); ?>


    <table class="form-table">
        <tr>
            <th scope="row"><label
                        for="dig_bill_ship_fields"><?php _e( 'Merge Billing and Account Mobile Fields', 'digits') ?>
                </label></th>
            <td>
                <select name="dig_bill_merge_phone" id="dig_bill_ship_fields">
                    <option value="1" <?php if ($dig_bill_ship_fields == 1) { echo 'selected=selected'; } ?> ><?php _e( 'Yes', 'digits') ?></option>
                    <option value="0" <?php if ($dig_bill_ship_fields == 0) { echo 'selected=selected'; } ?> ><?php _e( 'No', 'digits') ?></option>
                </select>
                <p class="dig_ecr_desc dig_sel_erc_desc"><?php _e( 'This will merge WooCommerce\'s Billing and Account Phone Number (Digits), Account phone number field will be removed from checkout and Billing Phone Number will be used as account phone number.', 'digits') ?></p>
            </td>
        </tr>

        <tr>
            <th scope="row"><label
                        for="dig_sync_acc_bill_fields"><?php _e('Always Sync Billing Phone with Account Number', 'digits'); ?>
                </label></th>
            <td>
                <select name="dig_sync_acc_bill_fields" id="dig_sync_acc_bill_fields">
                    <option value="1" <?php if ($dig_sync_acc_bill_fields == 1) { echo 'selected=selected'; } ?> ><?php _e('Yes', 'digits'); ?></option>
                    <option value="0" <?php if ($dig_sync_acc_bill_fields == 0) { echo 'selected=selected'; } ?> ><?php _e('No', 'digits'); ?></option>
                </select>
                <p class="dig_ecr_desc dig_sel_erc_desc"><?php _e('User will not be able to change billing phone number from checkout once you enable this option.', 'digits'); ?></p>
            </td>
        </tr>
    </table>
	<?php
} function digmergphne_addon($list) { $list[] = 'digmergphne'; return $list; } add_filter('digits_addon', 'digmergphne_addon'); function digmergphne_scripts() { $digpc = get_site_option('dig_purchasecode'); if (empty($digpc)) return; if (function_exists('is_checkout')) { if (is_checkout()) { $dig_bill_ship_fields = get_option('dig_bill_merge_phone', 0); if ($dig_bill_ship_fields == 0) return; wp_register_script('mergphne', plugins_url('/js/digbillmerge.js', __FILE__), array('jquery')); $jsData = array( 'user_logged_in' => is_user_logged_in(), 'merge' => $dig_bill_ship_fields, ); wp_localize_script('mergphne', 'dig_billmerge', $jsData); wp_enqueue_script('mergphne'); } } } add_action('wp_enqueue_scripts', 'digmergphne_scripts', 1); function dig_mergphn_update_wc_checkout_labels($fields) { $dig_bill_ship_fields = get_option('dig_bill_merge_phone', 0); if ($dig_bill_ship_fields == 0) return $fields; $fields['billing']['billing_email']['label'] = __("Email", "digits"); $fields['billing']['billing_phone']['label'] = __("Mobile Number", "digits"); unset($fields['account']['mobile/email']); return $fields; } add_filter('woocommerce_checkout_fields', 'dig_mergphn_update_wc_checkout_labels', 10); add_action('wp_head', 'digmergphn_hide_field'); function digmergphn_hide_field() { if (is_user_logged_in()) return; if (function_exists('is_checkout')) { if (is_checkout()) { $dig_bill_ship_fields = get_option('dig_bill_merge_phone', 0); if ($dig_bill_ship_fields == 0) return; ?>
            <style>#billing_phone {
                    display: none;
                }</style><?php
 } } }