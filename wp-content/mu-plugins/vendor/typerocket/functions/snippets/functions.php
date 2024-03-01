<?php

if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.

function custom_wpkses_post_tags( $tags, $context ) {
	if ( 'post' === $context ) {
		$tags['iframe'] = array(
			'src'             => true,
			'height'          => true,
			'width'           => true,
			'frameborder'     => true,
			'allowfullscreen' => true,
		);
	}
	return $tags;
}
add_filter( 'wp_kses_allowed_html', 'custom_wpkses_post_tags', 10, 2 );


// Register Navigation Menus
function baralia_navigation_menus() {

	$locations = array(
		'main_menu' => 'فهرست اصلی',
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'baralia_navigation_menus' );

// Remove White Space From Site Map
function ___wejns_wp_whitespace_fix($input) {
	$allowed = false;

	$found = false;

	foreach (headers_list() as $header) {
		if (preg_match("/^content-type:\\s+(text\\/|application\\/((xhtml|atom|rss)\\+xml|xml))/i", $header)) {
			$allowed = true;
		}

		if (preg_match("/^content-type:\\s+/i", $header)) {
			$found = true;
		}
	}

	
	if ($allowed || !$found) {
		return preg_replace("/\\A\\s*/m", "", $input);
	} else {
		return $input;
	}
}
ob_start("___wejns_wp_whitespace_fix");