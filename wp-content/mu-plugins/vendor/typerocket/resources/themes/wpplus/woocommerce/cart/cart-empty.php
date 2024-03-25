<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

/*
 * @hooked wc_empty_cart_message - 10
 */
// do_action( 'woocommerce_cart_is_empty' );
?>

<?php woocommerce_breadcrumb(); ?>

<!-- start content -->
<div class="content">
    <div class="container-fluid">
        <div class="content-box">
            <div class="container-fluid">
                <div class="cart-empty-image text-center">
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/cart-image.svg" width="100" alt="">
                </div>
                <div class="cart-empty-title">
                    <h2 class="text-center fw-bold">
                        سبد خرید شما خالی میباشد
                    </h2>
                    <div class="text-center mt-3">
						<?php if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
                        	<a href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>" class="btn-flat dark lg">رفتن به فروشگاه</a>
						<?php else: ?>
							<a href="<?php echo esc_url( get_home_url() ); ?>">رفتن به صفحه اصلی</a>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end content -->