<?php

if (!defined('ABSPATH')) {
    exit;
}

function digits_settings_dashboard()
{
    $code = dig_get_option('dig_purchasecode');
    $force = empty($code);

    $log_url = admin_url("admin.php?page=digits_settings&view=message-logs")
    ?>
    <div id="digits_dashboard_view" class="dig_admin_dashboard_wrapper <?php if ($force) echo 'dig_settings_blur'; ?>">
        <div class="dig_admin_dashboard_row">
            <div class="dig_admin_dashboard_graph">
                <div id="digits_dashboard_graph_logins_stats" class="dig_admin_dashboard_graph_details">
                    <div class="dig_admin_dashboard_graph_total">
                        <div class="dig_admin_dashboard_graph_total_value">
                            -
                        </div>
                        <div class="dig_admin_dashboard_graph_total_text">
                            <?php esc_attr_e('Total Logins', 'digits'); ?>
                        </div>
                    </div>
                    <div class="dig_admin_dashboard_graph_duration">
                        <div class="dig_admin_dashboard_graph_duration_text">
                            <?php esc_attr_e('Last 6 Months', 'digits'); ?>
                        </div>
                    </div>
                </div>
                <div id="digits_dashboard_graph_logins">

                </div>
            </div>

        </div>
        <div class="dig_admin_dashboard_row">
            <div class="dig_admin_dashboard_graph">
                <div id="digits_dashboard_graph_users_stats" class="dig_admin_dashboard_graph_details">
                    <div class="dig_admin_dashboard_graph_total">
                        <div class="dig_admin_dashboard_graph_total_value">
                            -
                        </div>
                        <div class="dig_admin_dashboard_graph_total_text">
                            <?php esc_attr_e('Total Users', 'digits'); ?>
                        </div>
                    </div>
                    <div class="dig_admin_dashboard_graph_duration">
                        <div class="dig_admin_dashboard_graph_duration_text">
                            <?php esc_attr_e('Last 12 Months', 'digits'); ?>
                        </div>
                    </div>
                </div>
                <div id="digits_dashboard_graph_users">
                </div>
            </div>
        </div>
            <div class="dig_admin_dashboard_sm_section dig_admin_stats_row">
                <div class="dig_admin_dashboard_buttons dig_admin_dashboard_stats_row1">
                    <div class="dig_admin_stat_no dig_admin_stat_min_saved">-</div>
                    <div class="dig_admin_stat_desc">
                        <?php echo __('Minutes Saved by Users', 'digits'); ?>
                    </div>
                </div>
                <div class="dig_admin_dashboard_buttons dig_admin_dashboard_stats_row2">
                    <div class="dig_admin_stat_no dig_admin_stat_otp_del">-</div>
                    <div class="dig_admin_stat_desc">
                        <?php echo __('OTP Delivered', 'digits'); ?>
                    </div>
                </div>
            </div>
            <div class="dig_admin_dashboard_sm_section">
                <div class="dig_admin_dashboard_buttons dig_admin_dashboard_buttons_row1">
                    <a href="?page=digits_settings&tab=shortcodes"
                       class="updatetabview" tab="shortcodestab">
                        <div class="dig_admin_dashboard_button">
                            <span class="dig_admin_dashboard_ic dig_admin_dashboard_shortcode"></span>
                            <?php esc_attr_e('Shortcode List', 'digits'); ?>
                        </div>
                    </a>
                <a href="<?php echo esc_attr($log_url); ?>">
                    <div class="dig_admin_dashboard_button">
                        <span class="dig_admin_dashboard_ic dig_admin_dashboard_log"></span>
                        <?php esc_attr_e('View Logs', 'digits'); ?>
                    </div>
                </a>
                </div>
            </div>
    </div>
    <?php
    digits_admin_activation_modal($force);
}


function digits_admin_activation_modal($force)
{
    $class = $force ? 'digits_admin_activation_show' : '';
    ?>
    <div id="digits_admin_activation" class="dig_overlay_modal_content digits_activate_rq <?php echo $class; ?>">
        <div class="digits_admin_activation_modal_container">
            <div class="digits_admin_activation_modal_back_drop"></div>
            <div class="digits_admin_activation_modal">
                <div class="digits_admin_activation_modal_wrapper">

                    <div class="digits_admin_activation_modal_head">
                        <?php _e('Activate Plugin', 'digits'); ?>
                    </div>
                    <div class="digits_admin_activation_modal_body">
                        <?php
                        digit_activation();
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php
}