<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

defined( 'ABSPATH' ) || exit;

?>



<div class="mini-cart-items">
	<div class="mini-cart-item">
		<div class="mini-cart-item-image">
			<span class="mini-cart-item-image-overlay"></span>
			<img alt="" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/cart-image.jpg">
		</div>
		<div class="mini-cart-item-desc">
			<div
				class="mini-cart-item-remove d-flex align-items-center justify-content-between">
				<span class="font-10">دونابل</span>
				<div><a href=""><i class="bi bi-x font-14 text-muted"></i></a></div>
			</div>
			<div class="mini-cart-item-title">
				<h6 class="font-12">شال زنانه دونابل مدل 225334300MC99</h6>
			</div>
			<div class="mini-cart-item-price">
				<div class="mini-cart-item-price-counter font-12">
					<span class="">1</span> عدد
				</div>
				<div class="mini-cart-item-price-desc">
					<div class="mini-cart-item-price-price">
						<span>74,000</span>
						<span class="text-muted-two">تومان</span>
					</div>
					<div class="mini-cart-item-price-discount ms-2">
						<span class="main-color-one-bg font-12 p-1">56%</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>