<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;
?>

<?php global $product; ?>

<?php 
	if ( ! $product->is_purchasable() ) {
		return;
	}
?>

<div class="product-meta-price d-flex">
	<?php if( $product->is_on_sale() ): ?>
		<div class="d-flex align-items-center">
			<p class="mb-0 old-price font-16"><?php echo $product->get_regular_price(); ?></p>
			<span class="badge main-color-two-bg ms-2 rounded-0">% <?php echo ceil((($product->get_regular_price() - $product->get_sale_price()) / $product->get_regular_price()) * 100); ?></span>
		</div>
		<h6 class="title-font new-price"><?php echo number_format($product->get_sale_price(), 0, wc_get_price_decimal_separator(), wc_get_price_thousand_separator()); ?></h6>
	<?php else: ?>
		<?php if( $product->get_regular_price() ): ?>
			<h6 class="title-font new-price"><?php echo $product->get_regular_price(); ?></h6>
		<?php elseif( $product->get_regular_price() == 0 ): ?>
			<h6 class="title-font new-price">رایگان</h6>
		<?php else: ?>
			<h6 class="title-font new-price">تماس بگیرید</h6>
		<?php endif; ?>
	<?php endif; ?>	
</div>

<?php // echo wc_get_stock_html( $product ); // WPCS: XSS ok. ?>

<?php if ( $product->is_in_stock() ) : ?>

	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

	<form class="cart w-100 d-flex justify-content-between flex-wrap" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

		<?php do_action( 'woocommerce_before_add_to_cart_quantity' ); ?>

		<?php
			// woocommerce_quantity_input(
			// 	array(
			// 		'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
			// 		'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
			// 		'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
			// 	)
			// );
		?>
			
		<div class="product-meta-counter w-50">
			<div class="counter">
				<input
					class="counter" 
					name="count" 
					type="text" 
					min="<?php echo apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ); ?>"
					max="<?php echo apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ); ?>"
					value="<?php echo isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(); ?>"
				/>
			</div>
		</div>

		<?php do_action( 'woocommerce_after_add_to_cart_quantity' ); ?>

		<div class="product-meta-add w-50">
			<div class="d-flex justify-content-center">
				<button
					type="submit"
					name="add-to-cart"
					value="<?php echo esc_attr( $product->get_id() ); ?>"
					class="btn w-100 border-0 main-color-three-bg rounded-0 single_add_to_cart_button button alt<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>">
					<i class="bi bi-basket text-white font-20 me-1"></i>
					<?php // echo esc_html( $product->single_add_to_cart_text() ); ?>
					خرید کالا
				</button>
			</div>
		</div>

		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
	</form>

	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>