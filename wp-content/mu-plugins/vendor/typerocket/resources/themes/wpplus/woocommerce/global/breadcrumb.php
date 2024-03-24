<?php
/**
 * Shop breadcrumb
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/breadcrumb.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     2.3.0
 * @see         woocommerce_breadcrumb()
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! empty( $breadcrumb ) ) { 

	$wrap_before = '
		<!-- start bread-crumb -->
		<div class="bread-crumb py-4">
			<div class="container-fluid">
				<nav aria-label="breadcrumb" class="my-lg-0 my-2">
					<ol class="breadcrumb mb-0">
	';
	echo $wrap_before;

	foreach ( $breadcrumb as $key => $crumb ) {

		echo $before;   

		if ( ! empty( $crumb[1] ) && sizeof( $breadcrumb ) !== $key + 1 ) {
			echo '<li class="breadcrumb-item"><a class="font-14 text-muted-two" href="' . esc_url( $crumb[1] ) . '">' . esc_html( $crumb[0] ) . '</a></li>';
		} else {
			echo '<li aria-current="page" class="breadcrumb-item active main-color-one-color font-14 fw-bold">' . esc_html( $crumb[0] ) . '</li>';
		}

		echo $after;

		// if ( sizeof( $breadcrumb ) !== $key + 1 ) {
		// 	echo $delimiter;
		// }
	}

	$wrap_after = '
					</ol>
				</nav>
			</div>
		</div>
		<!-- end bread-crumb -->
	';
	echo $wrap_after; 

}