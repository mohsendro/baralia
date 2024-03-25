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

<?php
	$column_base = 12 % esc_attr( wc_get_loop_prop( 'columns' ) );
	if( $column_base > 0 ) {
		$column = 12 - $column_base;
		$column = $column / esc_attr( wc_get_loop_prop( 'columns' ) );
	} else {
		$column = 12 / esc_attr( wc_get_loop_prop( 'columns' ) );
	}
?>

<?php
	// var_dump($product);
?>

<div class="col-lg-<?php echo $column; ?> products columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>">
	<div class="product-box" <?php wc_product_class( '', $product ); ?> >
		<?php
			/**
			 * Hook: woocommerce_before_shop_loop_item.
			 *
			 * @hooked woocommerce_template_loop_product_link_open - 10
			 */
			// do_action( 'woocommerce_before_shop_loop_item' );
		?>
		<?php
			/**
			 * Hook: woocommerce_before_shop_loop_item_title.
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
			// do_action( 'woocommerce_before_shop_loop_item_title' );
		?>
		<div class="product-box-image">
			<?php echo $product->get_image(); ?>
			<img src="assets/img/product/product-image-1.jpg" loading="lazy" alt="" class="img-fluid one-image">
			<!-- <img src="assets/img/product/product-image-6.jpg" loading="lazy" alt="" class="img-fluid two-image"> -->

			<?php 
				$regular = $product->get_regular_price();
				$sale = $product->get_sale_price();
				if( $product->is_on_sale() && $product->is_type( 'simple' ) ):
			?>
				<div class="product-box-price-discount">
					<span class="d-block badge main-color-three-bg text-white font-14 rounded-0"><?php echo ceil((($regular - $sale) / $regular) * 100); ?></span>
				</div>
			<?php endif; ?>
			<span class="product-box-image-overlay"></span>
		</div>
		<?php
			/**
			 * Hook: woocommerce_shop_loop_item_title.
			 *
			 * @hooked woocommerce_template_loop_product_title - 10
			 */
			// do_action( 'woocommerce_shop_loop_item_title' );
		?>
		<div class="product-box-title">
			<a href="<?php echo get_permalink( $product->get_id() ); ?>">
				<h5 class="text-overflow-2"><?php echo $product->get_name(); ?></h5>
			</a>
		</div>
		<?php
			/**
			 * Hook: woocommerce_after_shop_loop_item_title.
			 *
			 * @hooked woocommerce_template_loop_rating - 5
			 * @hooked woocommerce_template_loop_price - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item_title' );
		?>
		<?php
			/**
			 * Hook: woocommerce_after_shop_loop_item.
			 *
			 * @hooked woocommerce_template_loop_product_link_close - 5
			 * @hooked woocommerce_template_loop_add_to_cart - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item' );
		?>
	</div>
</div>