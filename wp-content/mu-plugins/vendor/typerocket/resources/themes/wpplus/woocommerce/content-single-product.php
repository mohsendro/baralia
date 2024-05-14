<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

$related_products = wc_get_products(
	[
		'limit' => 10,
		'include' => $product->get_cross_sell_ids(),
		'exclude' => array( $product->get_id() ),
		'orderby' => 'date',
		'order' => 'DESC',
		'status' => 'publish',
	]
);

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<!-- start product meta -->
	<div class="product-meta py-20">
		<div class="container-fluid">
			<div class="content-box">
				<div class="container-fluid">
					<div class="row gy-3">
						<div class="col-lg-4">
							<div class="pro_gallery">
								<!-- <div class="icon-product-box">
									<div class="icon-product-box-item"
										data-bs-placement="top" data-bs-target="#shareModal"
										data-bs-toggle="modal" title="اشتراک گذاری">
										<i class="bi bi-share"></i>
									</div>
									<div class="icon-product-box-item" data-bs-placement="top"
										data-bs-title="افزودن به علاقه مندی"
										data-bs-toggle="tooltip">
										<i class="bi bi-heart"></i>
									</div>
									<div class="icon-product-box-item" data-bs-placement="top" data-bs-title="مقایسه محصول"
										data-bs-toggle="tooltip">
										<i class="bi bi-arrow-left-right"></i>
									</div>
									<div class="icon-product-box-item" data-bs-placement="top" data-bs-target="#chartModal"
										data-bs-toggle="modal" data-bs-toggle="modal" title="نمودار تغییر قیمت">
										<i class="bi bi-bar-chart"></i>
									</div>
								</div> -->

								<?php
									/**
									 * Hook: woocommerce_before_single_product_summary.
									 *
									 * @hooked woocommerce_show_product_sale_flash - 10
									 * @hooked woocommerce_show_product_images - 20
									 */
									do_action( 'woocommerce_before_single_product_summary' );
								?>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="product-meta-title">
								<div class="row align-items-center gy-3">
									<div class="col-lg-12">
										<h4 class="title-font"><?php the_title(); ?></h4>
										<!-- <p class="mb-0 mt-2 text-muted">
											Samsung smart watch model Galaxy Watch3 SM-R840 45mm leather strap
										</p> -->
									</div>
									<!-- <div class="col-lg-2">
										<a class="text-lg-end d-block" href="">
											<img alt="" class="img-fluid" src="assets/img/brand/boss.png">
										</a>
									</div> -->
								</div>
							</div>
							<div class="product-meta-feature">
								<div class="row gy-3">
									<div class="col-lg-7">
										<?php $short_description = get_the_excerpt(); //apply_filters( 'woocommerce_short_description', $post->post_excerpt ); ?>
										<?php if( $short_description  ): ?>
											<div class="product-meta-feature-items mb-4">
												<h5 class="title font-16 mb-2">توضیحات کوتاه</h5>
												<small class="text-muted text-justify"><?php echo $short_description; // WPCS: XSS ok. ?></small>
											</div>
										<?php endif; ?>

										<div class="product-meta-feature-items mb-4">
											<h5 class="title font-16 mb-2">اطلاعات محصول</h5>
											<?php wc_get_template( 'single-product/meta.php' ); ?>
										</div>
									</div>
									<div class="col-lg-5">
										<div class="product-meta-info">
											<div class="product-meta-garanty product-meta-info-item justify-content-start mb-3">
												<i class="bi bi-shield-check"></i>
												<span class="text-muted"> گارانتی اصالت و سلامت فیزیکی کالا
												</span>
											</div>

											<?php
												// $product_type = $product->get_type();
												// if( $product_type == 'simple' ) {

												// 	wc_get_template( 'single-product/add-to-cart/simple.php' );

												// } elseif( $product_type == 'variable' ) {

												// 	wc_get_template( 'single-product/add-to-cart/variable.php' );

												// } elseif( $product_type == 'grouped' ) {

												// 	wc_get_template( 'single-product/add-to-cart/grouped.php' );

												// } elseif( $product_type == 'external' ) {

												// 	wc_get_template( 'single-product/add-to-cart/external.php' );

												// } else {

												// 	wc_get_template( 'single-product/add-to-cart/simple.php' );

												// }
											?>

											<!-- <div class="d-flex justify-content-between flex-wrap"> -->
												<?php
													/**
													 * Hook: woocommerce_single_product_summary.
													 *
													 * @hooked woocommerce_template_single_title - 5   ***********
													 * @hooked woocommerce_template_single_rating - 10 
													 * @hooked woocommerce_template_single_price - 10
													 * @hooked woocommerce_template_single_excerpt - 20 ***********
													 * @hooked woocommerce_template_single_add_to_cart - 30
													 * @hooked woocommerce_template_single_meta - 40
													 * @hooked woocommerce_template_single_sharing - 50
													 * @hooked WC_Structured_Data::generate_product_data() - 60
													 */
													do_action( 'woocommerce_single_product_summary' );
												?>
											<!-- </div> -->
										</div>
										<?php if( $product->get_manage_stock() ): ?>
											<div class="product-meta-count text-muted">
												<span><span class="title-font"><?php echo $product->get_stock_quantity(); ?></span> عدد در انبار</span>
											</div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product meta -->

	<!-- start shop feature -->
	<div class="shop-feature">
		<div class="container-fluid">
			<nav class="navbar">
				<ul class="navbar-nav justify-content-md-between justify-content-center">
					<li class="nav-item d-flex align-items-center">
						<img alt="" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/fast.png">
						<span>امکان تحویل اکسپرس</span>
					</li>
					<li class="nav-item d-flex align-items-center">
						<img alt="" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/headphone.png">
						<span>24 ساعته 7 روز هفته</span>
					</li>
					<li class="nav-item d-flex align-items-center">
						<img alt="" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/credit-card.png">
						<span>امکان پرداخت در محل</span>
					</li>
					<li class="nav-item d-flex align-items-center">
						<img alt="" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/history.png">
						<span>7 روز ضمانت بازگشت کالا</span>
					</li>
					<li class="nav-item d-flex align-items-center">
						<img alt="" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/badge.png">
						<span>ضمانت اصالت کالا</span>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<!-- end shop feature -->

	<!-- start product desc -->
	<div class="product-desc py-20">
		<div class="container-fluid">
			<?php
				/**
				 * Hook: woocommerce_after_single_product_summary.
				 *
				 * @hooked woocommerce_output_product_data_tabs - 10
				 * @hooked woocommerce_upsell_display - 15
				 * @hooked woocommerce_output_related_products - 20
				 */
				do_action( 'woocommerce_after_single_product_summary' );
			?>
		</div>
	</div>
	<!-- end product desc -->

	<?php if ( $related_products ) : ?>
		<!-- start product slider -->
		<div class="product-slider site-slider free-swiper py-40">
			<div class="container-fluid">
				<div class="section-title">
					<div class="row gy-3 align-items-center">
						<div class="col-sm-8">
							<div class="section-title-title">
								<h2 class="title-font main-color-one-color h1">محصولات <span class="main-color-three-color">مرتبط</span>
								</h2>
								<div class="Dottedsquare"></div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="section-title-link text-sm-end text-start">
								<a class="font-16 btn-flat dark" href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>"> مشاهده همه</a>
							</div>
						</div>
					</div>
				</div>

				<?php woocommerce_product_loop_start(); ?>
				<div class="slider-parent">
					<div class="swiper product-slider-swiper">
						<div class="swiper-wrapper ">
							<?php foreach ($related_products as $product): ?>
								<?php
									$post_object = get_post( $product->get_id() );
									setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found
									// wc_get_template_part( 'content', 'product' );
								?>
								<?php get_template_part( 'components/product', 'card' ); ?>
							<?php endforeach; ?>
						</div>

						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
					</div>
				</div>
				<?php woocommerce_product_loop_end(); ?>

				<div class="text-center">
					<button class="amazing-offer-btn" data-scroll-to="#banners"></button>
				</div>
			</div>
		</div>
		<!-- end product slider -->
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>