<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php global $product; ?>

<div class="swiper-slide">
    <div class="product-box">
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
            <?php 
				$regular = $product->get_regular_price();
				$sale = $product->get_sale_price();
				if( $product->is_on_sale() && $product->is_type( 'simple' ) ):
			?>
				<div class="product-box-price-discount">
					<span class="d-block badge main-color-three-bg text-white font-14 rounded-0">% <?php echo ceil((($regular - $sale) / $regular) * 100); ?></span>
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
