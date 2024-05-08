<?php
if (!defined('ABSPATH')) { exit; } if (!class_exists('ComposerAutoloaderInit8435c729a95b842ccceba6a2b2114b43')) { require_once plugin_dir_path(__DIR__) . 'libphonenumber/autoload.php'; } if (function_exists('digit_send_message')) { return; } function digit_whatsapp_message($countrycode, $mobile, $otp, $dig_messagetemplate, $testCall) { $option_slug = 'digit'; $messagetemplate = $dig_messagetemplate; $whatsapp_gateway = get_option('digit_whatsapp_gateway', -1); $prefix = 'whatsapp'; switch ($whatsapp_gateway) { case 2: $whatsapp = get_option('digit_' . $prefix . 'twilio'); $whatsappno = $whatsapp['whatsappnumber']; $sid = $whatsapp['account_sid']; $token = $whatsapp['auth_token']; try { $client = new Client($sid, $token); $result = $client->messages->create( "whatsapp:" . $countrycode . $mobile, array( 'From' => "whatsapp:" . $whatsappno, 'Body' => $dig_messagetemplate ) ); } catch (Exception $e) { if ($testCall) { return $e->getMessage(); } return false; } if ($testCall) { return $result; } return true; default: return apply_filters('unitedover_send_whatsapp_message', false, $option_slug, $whatsapp_gateway, $countrycode, $mobile, $messagetemplate, $testCall); } } function digit_send_message($digit_gateway, $countrycode, $mobile, $otp, $dig_messagetemplate, $testCall = false, $whatsapp = false) { define('DIGITS_OTP', $otp); $option_slug = 'digit'; $gateway_id = $digit_gateway; $messagetemplate = $dig_messagetemplate; if (!$testCall) { $debug = apply_filters('digits_debug', false); if ($debug) { return true; } } if (in_array(str_replace('+', '', $countrycode), array('242', '225'))) { if (substr($mobile, 0, 1) != '0') { $mobile = '0' . $mobile; } } if ($whatsapp) { return digit_whatsapp_message($countrycode, $mobile, $otp, $dig_messagetemplate, $testCall); } switch ($digit_gateway) { default: return apply_filters('unitedover_send_sms', false, $option_slug, $gateway_id, $countrycode, $mobile, $messagetemplate, $testCall, $otp); } } 