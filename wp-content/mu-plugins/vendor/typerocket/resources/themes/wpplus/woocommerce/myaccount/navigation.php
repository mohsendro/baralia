<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php do_action( 'woocommerce_before_account_navigation' ); ?>

<!-- start dashboard menu desktop  -->
<div class="content-box d-xl-block d-none">
	<div class="container-fluid">
		<div class="panel-menu">
			<nav class="navbar navbar-expand justify-content-center">
				<ul class="navbar-nav">
					<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
						<li class="nav-item <?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
							<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>" class="nav-link">
								<i class="bi bi-link-45deg"></i>
								<?php echo esc_html( $label ); ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</nav>
		</div>
	</div>
</div>
<!-- end dashboard menu desktop  -->

<!--   start dashboard menu mobile  -->
<div class="custom-filter d-xl-none d-block">
	<button class="btn btn-filter-float border-0 main-color-one-bg shadow-box px-4 rounded-3 position-fixed"
			style="z-index: 999;bottom:80px;" type="button" data-bs-toggle="offcanvas"
			data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
		<i class="bi bi-funnel font-20 fw-bold text-white"></i>
		<span class="d-block font-14 text-white">منو</span>
	</button>

	<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasRight"
			aria-labelledby="offcanvasRightLabel">
		<div class="offcanvas-header">
			<h5 class="offcanvas-title" id="offcanvasRightLabel1">منو</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
			<div class="panel-nav-nav ">
				<ul class="rm-item-menu navbar-nav">
					<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
						<li class="nav-item <?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
							<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>" class="nav-link">
								<i class="bi bi-link-45deg"></i>
								<?php echo esc_html( $label ); ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--   end dashboard menu mobile   -->

<?php do_action( 'woocommerce_after_account_navigation' ); ?>