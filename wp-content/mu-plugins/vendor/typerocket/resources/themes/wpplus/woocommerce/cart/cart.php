<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
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

woocommerce_breadcrumb();
?>

<div class="container-fluid">
	<?php do_action( 'woocommerce_before_cart' ); ?>
</div>

<!-- start content -->
<div class="content">
    <div class="container-fluid">

        <div class="payment_navigtions">
            <div class="checkout-headers">
                <nav class="navbar navbar-expand">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a href="" class="nav-link">
                                <span>1</span>
                                <p>سبد خرید</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <span>2</span>
                                <p>صورتحساب</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <span>3</span>
                                <p>جزییات پرداخت</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <h2 class="title-font main-color-one-color mt-4 h4">سبد خرید شما <span class="main-color-three-color">(3 کالا)</span>
            </h2>
        </div>

    </div>

    <div class="container-fluid">
        <div class="cart-product">
            <div class="row gy-4">
                <div class="col-12">
                    <div class="cart-product-item">
                        <div class="content-box">
                            <div class="container-fluid">
                                <div class="responsive-table">
                                    <table class="table table-bordered site-tbl">
                                        <thead>
                                        <tr>
                                            <th class="h5 text-center">عملیات</th>
                                            <th class="h5 text-center" colspan="2">تصویر</th>
                                            <th class="h5 text-center">محصول</th>
                                            <th class="h5 text-center">تعداد</th>
                                            <th class="h5 text-center">قیمت کل</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center align-middle">
                                                <a href="" data-bs-toggle="tooltip" class="p-4" data-bs-placement="top" data-bs-title="حذف محصول از سبد خرید">
                                                    <i class="bi bi-x-lg"></i>
                                                </a>
                                            </td>
                                            <td colspan="2" class="text-center align-middle">
                                                <img src="assets/img/product/product-image-1.jpg" width="100" class="" alt="">
                                            </td>
                                            <td class="align-middle">
                                                <h5 class="fw-light">ساعت دیجیتال نیکون مدل coolpix p900</h5>

                                                <div class="d-flex flex-lg-row flex-column mt-4 justify-content-start  align-items-lg-center align-items-start">
                                                    <div class="item d-flex align-items-center">
                                                        <div class="icon"><i class="bi bi-shop"></i></div>
                                                        <div class="saller-name mx-2">فروشنده:</div>
                                                        <div class="saller-name text-muted">ایران مال</div>
                                                    </div>

                                                    <div class="item d-flex align-items-center ms-lg-3">
                                                        <div class="icon"><i class="bi bi-shield-check"></i>
                                                        </div>
                                                        <div class="saller-name mx-2">گارانتی:</div>
                                                        <div class="saller-name text-muted">ایران مال گارانتی</div>
                                                    </div>

                                                    <div class="item d-flex align-items-center ms-lg-3">
                                                        <div class="icon"><i class="bi bi-bounding-box-circles"></i>
                                                        </div>
                                                        <div class="saller-name mx-2">سایز:</div>
                                                        <div class="saller-name text-muted">small</div>
                                                    </div>

                                                    <div class="item d-flex align-items-center ms-lg-3">
                                                        <div class="icon"><i class="bi bi-palette2"></i></div>
                                                        <div class="saller-name mx-2">رنگ:</div>
                                                        <div class="saller-name text-muted">
                                                            <div class="product-meta-color-items mt-0" style="line-height: 1">
                                                                <span class="seller-color" style="background-color: #c00;"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </td>
                                            <td class="counter text-center align-middle"><input type="text" name="count" class="counter"
                                                                       value="1"></td>
                                            <td class="text-center align-middle">
                                                <h5 class="title-font main-color-one-color h2 mb-0">799,000 <span class="mb-0 text-muted-two font-14 fw-lighter">تومان</span></h5>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-xl-9">
                            <div class="content-box">
                                <div class="container-fluid">
                                    <div class="shop-feature mt-0 pt-0">
                                        <nav class="navbar mt-0 pt-0">
                                            <ul class="navbar-nav justify-content-md-between shadow-none justify-content-center">
                                                <li class="nav-item d-flex align-items-center">
                                                    <img alt="" src="assets/img/fast.png">
                                                    <span>امکان تحویل اکسپرس</span>
                                                </li>
                                                <li class="nav-item d-flex align-items-center">
                                                    <img alt="" src="assets/img/headphone.png">
                                                    <span>24 ساعته 7 روز هفته</span>
                                                </li>
                                                <li class="nav-item d-flex align-items-center">
                                                    <img alt="" src="assets/img/credit-card.png">
                                                    <span>امکان پرداخت در محل
                                        </span>
                                                </li>
                                                <li class="nav-item d-flex align-items-center">
                                                    <img alt="" src="assets/img/history.png">
                                                    <span>7 روز ضمانت بازگشت کالا
                                        </span>
                                                </li>
                                                <li class="nav-item d-flex align-items-center">
                                                    <img alt="" src="assets/img/badge.png">
                                                    <span>ضمانت اصالت کالا
                                        </span>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>

                                    <div class="alert alert-danger rounded-0">
                                        با توجه به محدود بودن موجودی کالاها، افزودن کالا به سبد خرید به معنی رزرو آن
                                        نیست. جهت نهایی کردن خرید پیش از اتمام موجودی، همین حالا سبد خود را ثبت و خرید
                                        را تکمیل کنید.
                                    </div>

                                    <div class="cart-action mt-lg-0 mt-3">
                                        <div class="row flex-wrap align-items-center">
                                            <div class="col-md-8">
                                                <div class="form-group mb-0 d-flex">
                                                    <input type="text"
                                                           class="form-control discount-txt rounded-0 footer-form-txt"
                                                           placeholder="کد تخفیف خود را وارد کنید">
                                                    <button type="submit"
                                                            class="btn discount-btn main-color-two-bg border-0 rounded-0">
                                                        اعمال
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="cart-footer-update text-sm-end text-center mt-md-0 mt-3">
                                                    <form action="">
                                                        <button type="submit" class="btn-flat dark disount-btn-action">
                                                            بروز رسانی سبد خرید
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-3">
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

                                            <div class="d-flex factor-item flex-column mb-3 align-items-start justify-content-between">
                                                <h5 class="mb-0 h6">حمل و نقل</h5>
                                                <form action="">
                                                    <div class="form-check mt-3">
                                                        <input type="radio" checked class="form-check-input" name="post"
                                                               id="post-1">
                                                        <label for="post-1" class="form-check-label">
                                                            پیک موتوری اختصاصی (کمتر از 5 ساعت): 80,000 تومان
                                                        </label>
                                                    </div>
                                                    <div class="form-check mt-3">
                                                        <input type="radio" class="form-check-input" name="post"
                                                               id="post-2">
                                                        <label for="post-2" class="form-check-label">
                                                            پیک عمومی هناس (2 تا 3 روز کاری): 50,000 تومان

                                                        </label>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="d-flex factor-item mb-3 align-items-center justify-content-between">
                                                <h5 class="mb-0 h6">مجموع</h5>
                                                <p class="mb-0 font-18">1,308,000 تومان</p>
                                            </div>

                                            <div class="action mt-3 d-flex align-items-center justify-content-center">
                                                <a href="#"
                                                   class="btn-flat dark text-center lg w-100">تسویه
                                                    حساب</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- end content -->

<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
	<?php do_action( 'woocommerce_before_cart_table' ); ?>

	<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
		<thead>
			<tr>
				<th class="product-remove"><span class="screen-reader-text"><?php esc_html_e( 'Remove item', 'woocommerce' ); ?></span></th>
				<th class="product-thumbnail"><span class="screen-reader-text"><?php esc_html_e( 'Thumbnail image', 'woocommerce' ); ?></span></th>
				<th class="product-name"><?php esc_html_e( 'Product', 'woocommerce' ); ?></th>
				<th class="product-price"><?php esc_html_e( 'Price', 'woocommerce' ); ?></th>
				<th class="product-quantity"><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></th>
				<th class="product-subtotal"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php do_action( 'woocommerce_before_cart_contents' ); ?>

			<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
				/**
				 * Filter the product name.
				 *
				 * @since 2.1.0
				 * @param string $product_name Name of the product in the cart.
				 * @param array $cart_item The product in the cart.
				 * @param string $cart_item_key Key for the product in the cart.
				 */
				$product_name = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
					<tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

						<td class="product-remove">
							<?php
								echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
										/* translators: %s is the product name */
										esc_attr( sprintf( __( 'Remove %s from cart', 'woocommerce' ), wp_strip_all_tags( $product_name ) ) ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									),
									$cart_item_key
								);
							?>
						</td>

						<td class="product-thumbnail">
						<?php
						$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

						if ( ! $product_permalink ) {
							echo $thumbnail; // PHPCS: XSS ok.
						} else {
							printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
						}
						?>
						</td>

						<td class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
						<?php
						if ( ! $product_permalink ) {
							echo wp_kses_post( $product_name . '&nbsp;' );
						} else {
							/**
							 * This filter is documented above.
							 *
							 * @since 2.1.0
							 */
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
						}

						do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

						// Meta data.
						echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

						// Backorder notification.
						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
						}
						?>
						</td>

						<td class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
							<?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</td>

						<td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
						<?php
						if ( $_product->is_sold_individually() ) {
							$min_quantity = 1;
							$max_quantity = 1;
						} else {
							$min_quantity = 0;
							$max_quantity = $_product->get_max_purchase_quantity();
						}

						$product_quantity = woocommerce_quantity_input(
							array(
								'input_name'   => "cart[{$cart_item_key}][qty]",
								'input_value'  => $cart_item['quantity'],
								'max_value'    => $max_quantity,
								'min_value'    => $min_quantity,
								'product_name' => $product_name,
							),
							$_product,
							false
						);

						echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
						?>
						</td>

						<td class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
							<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</td>
					</tr>
					<?php
				}
			}
			?>

			<?php do_action( 'woocommerce_cart_contents' ); ?>

			<tr>
				<td colspan="6" class="actions">

					<?php if ( wc_coupons_enabled() ) { ?>
						<div class="coupon">
							<label for="coupon_code" class="screen-reader-text"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?></button>
							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
					<?php } ?>

					<button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

					<?php do_action( 'woocommerce_cart_actions' ); ?>

					<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
				</td>
			</tr>

			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
		</tbody>
	</table>
	<?php do_action( 'woocommerce_after_cart_table' ); ?>
</form>

<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

<div class="cart-collaterals">
	<?php
		/**
		 * Cart collaterals hook.
		 *
		 * @hooked woocommerce_cross_sell_display
		 * @hooked woocommerce_cart_totals - 10
		 */
		do_action( 'woocommerce_cart_collaterals' );
	?>
</div>

<?php do_action( 'woocommerce_after_cart' ); ?>
