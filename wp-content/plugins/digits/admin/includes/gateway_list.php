<?php

if (!defined('ABSPATH')) {
    exit;
}


if (!function_exists('untdovr_gateway_field_label')) {
    function untdovr_gateway_field_label($field)
    {
        return $field;
    }
}

add_filter('digits_sms_gateways', 'digits_add_gateway_list');
function digits_add_gateway_list($gateways)
{
    return array_merge($gateways, digits_additional_gateways_list());
}

function digits_additional_gateways_list()
{
    return array(
        'SMS123' => array(
            'value' => 130,
            'require_addon' => 1,
            'inputs' => array(
                untdovr_gateway_field_label('API Key') => array('text' => true, 'name' => 'api_key'),
            ),
        ),
    );
}

