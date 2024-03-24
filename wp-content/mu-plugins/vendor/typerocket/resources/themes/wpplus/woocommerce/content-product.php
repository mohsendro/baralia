<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="col-lg-4 products columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>">
	<div class="product-box" <?php wc_product_class( '', $product ); ?> >
		<div class="product-box-image">

			<img src="assets/img/product/product-image-1.jpg" loading="lazy" alt="" class="img-fluid one-image">
			<img src="assets/img/product/product-image-6.jpg" loading="lazy" alt="" class="img-fluid two-image">

			<div class="color-box">
				<div class="color-box-item" data-hint="نام رنگ مورد نظر" data-toggle="tooltip">
					<span class="color hint--top" style="background-color: #487eb0;"></span>
				</div>
				<div class="color-box-item" data-hint="نام رنگ مورد نظر" data-toggle="tooltip">
					<span class="color hint--top" style="background-color: #353b48;"></span>
				</div>
				<div class="color-box-item" data-hint="نام رنگ مورد نظر" data-toggle="tooltip">
					<span class="color hint--top" style="background-color: #7f8fa6;"></span>
				</div>
			</div>
			<div class="product-box-price-discount">
				<span class="d-block badge main-color-three-bg text-white font-14 rounded-0">25%</span>
			</div>
			<span class="product-box-image-overlay"></span>
		</div>
		<div class="product-box-title">
			<a href="">
				<h5 class="text-overflow-2">ساعت هوشمند شیائومی مدل Redmi Watch 2 Lite طرح بند
					سلیکونی
				</h5>
			</a>
		</div>
		<div class="product-box-size pro-var-responsive">
			<ul>
				<li><a class="active" href="">40</a></li>
				<li><a href="">41</a></li>
				<li><a href="">42</a></li>
				<li><a href="">43</a></li>
			</ul>
		</div>
		<div class="product-box-price">
			<div class="product-box-offer-discount">
				<del>2,000,000</del>
			</div>
			<div class="product-box-price-price">
				<h5 class="title-font main-color-one-color h2 mb-0">799,000 <span
						class="mb-0 text-muted-two">تومان</span></h5>

			</div>
		</div>
		<div class="product-box-action">
			<a class="btn rounded-0 main-color-three-bg border-0 w-100" href="">اضافه به سبد
				خرید</a>
		</div>
	</div>
</div>

<!-- <li <?php //wc_product_class( '', $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	// do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	// do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	// do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li> -->
