<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

woocommerce_breadcrumb();

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}
?>

<div class="content">
	<div class="container-fluid">
        <div class="payment_navigtions">
            <div class="checkout-headers">
                <nav class="navbar navbar-expand">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?php echo wc_get_cart_url(); ?>" class="nav-link">
                                <span>1</span>
                                <p>سبد خرید</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="<?php echo wc_get_checkout_url(); ?>" class="nav-link">
                                <span>2</span>
                                <p>صورتحساب</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo wc_get_checkout_url(); ?>" class="nav-link">
                                <span>3</span>
                                <p>جزییات پرداخت</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

	<?php do_action( 'woocommerce_before_checkout_form', $checkout ); ?>

	<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
		<div class="container-fluid">
			<div class="row gy-4">
				<div class="col-lg-9">
					<?php if ( $checkout->get_checkout_fields() ) : ?>
						<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
						<?php do_action( 'woocommerce_checkout_billing' ); ?>
						<?php do_action( 'woocommerce_checkout_shipping' ); ?>
						<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
					<?php endif; ?>

					<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
					<h2 class="title-font title-line-bottom main-color-one-color mt-4 mb-4 h4">جزئیات <span class="main-color-three-color">
						<?php esc_html_e( 'Your order', 'woocommerce' ); ?> </span>
					</h2>
					
					<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
					<div id="order_review" class="woocommerce-checkout-review-order">
						<?php do_action( 'woocommerce_checkout_order_review' ); ?>
					</div>
					<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
				</div>

				<div class="col-lg-3">
					<div class="content-box">
						<div class="container-fluid">
							<div class="item">
								<div class="factor">
									<div class="d-flex factor-item mb-3 align-items-center justify-content-between">
										<h5 class="mb-0 h6">قیمت کالا ها</h5>
										<p class="mb-0 font-17">1,228,000 تومان</p>
									</div>

									<div class="d-flex factor-item mb-3 align-items-center justify-content-between">
										<h5 class="mb-0 h6">تخفیف کالا ها</h5>
										<p class="mb-0 font-18">1,296,000 تومان</p>
									</div>

									<div class="d-flex mb-3 align-items-center justify-content-between">
										<h5 class="mb-0 h6">حمل و نقل</h5>
										<p class="mb-0 font-18 main-color-two-color fw-bold">1,308,000 تومان</p>
									</div>

									<div class="d-flex factor-item mb-3 align-items-center justify-content-between">
										<h5 class="mb-0 h6">مجموع</h5>
										<p class="mb-0 font-18">1,308,000 تومان</p>
									</div>

									<div class="action mt-3 d-flex align-items-center justify-content-center">
										<a href="#" class="btn main-color-two-bg rounded-0 btn-lg font-16 text-center lg w-100">پرداخت نهایی و تکمیل خرید</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>

	<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
</div>