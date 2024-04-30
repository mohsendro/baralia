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

<?php do_action( 'woocommerce_before_mini_cart' ); ?>

<?php if ( ! WC()->cart->is_empty() ) : ?>

	<div class="mini-cart-items <?php echo esc_attr( $args['list_class'] ); ?>">
		<?php do_action( 'woocommerce_before_mini_cart_contents' ); ?>

		<?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ): ?>
			<?php
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
			?>

			<?php if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ): ?>
				<?php
					/**
					 * This filter is documented in woocommerce/templates/cart/cart.php.
					 *
					 * @since 2.1.0
					*/
					$product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
					$thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(['auto', 70]), $cart_item, $cart_item_key );
					$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
				?>
				<div class="mini-cart-item">
			<div class="mini-cart-item-image">
				<span class="mini-cart-item-image-overlay"></span>
				<?php if ( empty( $product_permalink ) ) : ?>
					<?php echo $thumbnail; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				<?php else : ?>
					<a href="<?php echo esc_url( $product_permalink ); ?>">
						<?php echo $thumbnail; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</a>
				<?php endif; ?>
			</div>

			<div class="mini-cart-item-desc">
				<div class="mini-cart-item-remove d-flex align-items-center justify-content-between">
					<span class="font-10"></span>
					<div>
						<?php
							echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
								'woocommerce_cart_item_remove_link',
								sprintf(
									'<a href="%s" class="remove remove_from_cart_button" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s">&times;</a>',
									esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
									/* translators: %s is the product name */
									esc_attr( sprintf( __( 'Remove %s from cart', 'woocommerce' ), wp_strip_all_tags( $product_name ) ) ),
									esc_attr( $product_id ),
									esc_attr( $cart_item_key ),
									esc_attr( $_product->get_sku() )
								),
								$cart_item_key
							);
						?>
					</div>
					<!-- <div><a href=""><i class="bi bi-x font-14 text-muted"></i></a></div> -->
				</div>
				<div class="mini-cart-item-title">
					<h6 class="font-12"><?php echo $product_name; ?></h6>
				</div>
				<div class="mini-cart-item-price">
					<div class="mini-cart-item-price-counter font-12">
						<span class=""><?php echo $cart_item['quantity']; ?></span> عدد
					</div>
					<div class="mini-cart-item-price-desc">
						<div class="mini-cart-item-price-price">
							<span><?php echo $product_price; ?></span>
							<!-- <span class="text-muted-two">تومان</span> -->
						</div>
						<!-- <div class="mini-cart-item-price-discount ms-2">
							<span class="main-color-one-bg font-12 p-1">56%</span>
						</div> -->
					</div>
					<?php // echo wc_get_formatted_cart_item_data( $cart_item ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					<?php // echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</div>
			</div>
		</div>
			<?php endif; ?>
		<?php endforeach; ?>

		

		<?php do_action( 'woocommerce_mini_cart_contents' ); ?>
	</div>

	<!-- <p class="woocommerce-mini-cart__total total">
		<?php
		/**
		 * Hook: woocommerce_widget_shopping_cart_total.
		 *
		 * @hooked woocommerce_widget_shopping_cart_subtotal - 10
		 */
		// do_action( 'woocommerce_widget_shopping_cart_total' );
		?>
	</p> -->

	<?php // do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>

	<!-- <p class="woocommerce-mini-cart__buttons buttons"><?php // do_action( 'woocommerce_widget_shopping_cart_buttons' ); ?></p> -->

	<?php // do_action( 'woocommerce_widget_shopping_cart_after_buttons' ); ?>

<?php else : ?>

	<p class="woocommerce-mini-cart__empty-message my-2 text-muted"><?php esc_html_e( 'No products in the cart.', 'woocommerce' ); ?></p>

<?php endif; ?>

<?php do_action( 'woocommerce_after_mini_cart' ); ?>




