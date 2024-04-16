<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$allowed_html = array(
	'a' => array(
		'href' => array(),
	),
);
?>

<div class="section-title mb-4 mt-5">
	<div class="section-title-title">
		<h2 class="title-font main-color-one-color h1">پیشخوان <span
				class="main-color-three-color">من </span>
		</h2>
		<div class="Dottedsquare"></div>
	</div>
</div>

<!--  start panel meta  -->
<!-- <div class="panel-meta my-xl-5 mb-5">
	<div class="row g-3">
		<div class="col-xl-3 col-sm-6">
			<a href="">
				<div class="panel-meta-item d-flex align-items-center">
					<div class="panel-meta-item-icon">
						<i class="bi bi bi-bag-check"></i>
					</div>
					<div class="panel-meta-title d-flex flex-column ms-3">
						<h5 class="h5">سفارشات تکمیل شده</h5>
						<h5 class="fw-lighter h5 mt-2">5 سفارش</h5>
					</div>
				</div>
			</a>
		</div>
		<div class="col-xl-3 col-sm-6">
			<a href="">
				<div class="panel-meta-item d-flex align-items-center">
					<div class="panel-meta-item-icon" style="background-color: #c1a37f;">
						<i class="bi bi bi-heart-fill"></i>
					</div>
					<div class="panel-meta-title ms-3 d-flex flex-column">
						<h5 class="h5">محصولات مورد علاقه</h5>
						<h5 class="fw-lighter mt-2 h5">25 سفارش</h5>
					</div>
				</div>
			</a>
		</div>
		<div class="col-xl-3 col-sm-6">
			<a href="">
				<div class="panel-meta-item d-flex align-items-center">
					<div class="panel-meta-item-icon bg-info">
						<i class="bi bi-send"></i>
					</div>
					<div class="panel-meta-title ms-3 d-flex flex-column">
						<h5 class="h5">نظرات</h5>
						<h5 class="fw-lighter h5 mt-2">36 نظر</h5>
					</div>
				</div>
			</a>
		</div>
		<div class="col-xl-3 col-sm-6">
			<a href="">
				<div class="panel-meta-item d-flex align-items-center">
					<div class="panel-meta-item-icon bg-secondary">
						<i class="bi bi-repeat"></i>
					</div>
					<div class="panel-meta-title ms-3 d-flex flex-column">
						<h5 class="h5">سفارشات مرجوعی</h5>
						<h5 class="fw-lighter h5 mt-2">3 سفارش</h5>
					</div>
				</div>
			</a>
		</div>
	</div>
</div> -->
<!--  end panel meta  -->

<div class="slider-parent">
	<p>
		<?php
		printf(
			/* translators: 1: user display name 2: logout url */
			wp_kses( __( 'Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)', 'woocommerce' ), $allowed_html ),
			'<strong>' . esc_html( $current_user->display_name ) . '</strong>',
			esc_url( wc_logout_url() )
		);
		?>
	</p>

	<p>
		<?php
		/* translators: 1: Orders URL 2: Address URL 3: Account URL. */
		$dashboard_desc = __( 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">billing address</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce' );
		if ( wc_shipping_enabled() ) {
			/* translators: 1: Orders URL 2: Addresses URL 3: Account URL. */
			$dashboard_desc = __( 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">shipping and billing addresses</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce' );
		}
		printf(
			wp_kses( $dashboard_desc, $allowed_html ),
			esc_url( wc_get_endpoint_url( 'orders' ) ),
			esc_url( wc_get_endpoint_url( 'edit-address' ) ),
			esc_url( wc_get_endpoint_url( 'edit-account' ) )
		);
		?>
	</p>

	<?php do_action( 'woocommerce_account_dashboard' ); ?>
	<?php do_action( 'woocommerce_before_my_account' ); ?>
	<?php do_action( 'woocommerce_after_my_account' ); ?>
</div>