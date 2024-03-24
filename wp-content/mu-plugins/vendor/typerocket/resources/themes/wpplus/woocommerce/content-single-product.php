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

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	// do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		//do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

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

<?php do_action( 'woocommerce_after_single_product' ); ?>










<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<!-- start product meta -->
	<div class="product-meta py-20">
		<div class="container-fluid">
			<div class="content-box">
				<div class="container-fluid">
					<div class="row gy-3">
						<div class="col-lg-4">
							<div class="pro_gallery">
								<div class="icon-product-box">
									<div class="icon-product-box-item" data-bs-placement="top" data-bs-target="#shareModal"
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
								</div>

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
									<div class="col-lg-10">
										<h4 class="title-font">
											ساعت هوشمند سامسونگ مدل Galaxy Watch3 SM-R840 45mm بند چرمی
										</h4>
										<p class="mb-0 mt-2 text-muted">Samsung smart watch model Galaxy Watch3 SM-R840 45mm
											leather strap</p>
									</div>
									<div class="col-lg-2">
										<a class="text-lg-end d-block" href="">
											<img alt="" class="img-fluid" src="assets/img/brand/boss.png">
										</a>
									</div>
								</div>
							</div>
							<div class="product-meta-feature">
								<div class="row gy-3">
									<div class="col-lg-7">
										<div class="product-meta-feature-items">
											<h5 class="title font-16 mb-2">ویژگی های کالا</h5>
											<ul class="navbar-nav">
												<li class="nav item"><span>نوع اتصال:</span><strong>با سیم</strong></li>
												<li class="nav item"><span>رابط ها:</span><strong>3.5 میلیمتری</strong></li>
												<li class="nav item"><span>مقدار رم :</span><strong>8 گیگابایت</strong></li>
												<li class="nav item"><span>نوع گوشی:</span><strong>دوگوشی</strong></li>
											</ul>
										</div>
										<div class="product-meta-color">
											<h5 class="font-16">
												انتخاب رنگ کالا
											</h5>
											<div class="product-meta-color-items">
												<input autocomplete="off" checked class="btn-check" id="option1"
													name="options"
													type="radio">
												<label class="btn " for="option1">
													<span style="background-color: #c00;"></span>
													قرمز
												</label>

												<input autocomplete="off" class="btn-check" id="option2" name="options"
													type="radio">
												<label class="btn " for="option2">
													<span style="background-color: #111;"></span>
													مشکی
												</label>

												<input autocomplete="off" class="btn-check" disabled id="option3"
													name="options"
													type="radio">
												<label class="btn " for="option3">
													<span style="background-color: #00cc5f;"></span>
													سبز
												</label>

												<input autocomplete="off" class="btn-check" id="option4" name="options"
													type="radio">
												<label class="btn " for="option4">
													<span style="background-color: #1b69f0;"></span>
													آبی
												</label>
											</div>
										</div>
										<div class="product-box-size pro-var-responsive">
											<h5 class="font-16 my-2">
												انتخاب سایز کالا
											</h5>
											<ul>
												<li><a class="active" href="">40</a></li>
												<li><a href="">41</a></li>
												<li><a href="">42</a></li>
												<li><a href="">43</a></li>
											</ul>
										</div>
									</div>
									<div class="col-lg-5">
										<div class="product-meta-info">
											<div class="product-meta-info-title border-0 product-meta-info-item d-flex align-items-center justify-content-between">
												<h5>فروشنده</h5>
												<a class="main-color-two-color fw-bold" href="">3 فروشنده دیگر</a>
											</div>
											<div class="d-flex product-meta-info-item">
												<div>
													<i class="bi bi-shop"></i>
												</div>
												<div class="text-start ms-3">
													<h6 class="fw-bold text-muted-2 font-16">رستا گالری</h6>
													<div class="d-flex align-items-center mt-2">
														<p class="font-12 mb-0">
															<span class="text-success ms-1 fw-bold">89.6%</span>
															<span class="text-muted">رضایت از کالا</span>
														</p>
														<p class="ps-1 mb-0 ms-1 border-start font-12">
															<span class="text-muted">عملکرد</span>
															<span class="text-success fw-bold">عالی</span>
														</p>
													</div>
												</div>
											</div>
											<div class="product-meta-rating product-meta-info-item">
												<div class="d-flex align-items-center">
													<div class="count-comment text-muted">16 دیدگاه</div>
													<div class="count-rating">
														<span>(17) 4.5</span>
														<i class="bi bi-star-fill"></i>
													</div>
												</div>
											</div>
											<div class="product-meta-garanty product-meta-info-item justify-content-start">
												<i class="bi bi-shield-check"></i>
												<span class="text-muted"> گارانتی اصالت و سلامت فیزیکی کالا
												</span>
											</div>
											<div class="product-meta-price d-flex">
												<div class="d-flex align-items-center">
													<p class="mb-0 old-price font-16">1,500,000 تومان </p>
													<span class="badge main-color-two-bg ms-2 rounded-0">23%</span>
												</div>
												<h6 class="title-font new-price">1,200,000 تومان</h6>
											</div>
											<div class="d-flex justify-content-between flex-wrap">
												<div class="product-meta-counter w-50">
													<div class="counter">
														<input class="counter" name="count" type="text" value="1">
													</div>
												</div>
												<div class="product-meta-add w-50">
													<div class="d-flex justify-content-center">
														<a class="btn w-100 border-0 main-color-three-bg rounded-0" href=""><i
																class="bi bi-basket text-white font-20 me-1"></i>خرید
															کالا</a>
													</div>
												</div>
											</div>

										</div>
										<div class="product-meta-count text-muted">
											<span><span class="title-font">14</span> عدد در انبار</span>
										</div>
									</div>
								</div>
							</div>
							<?php
								/**
								 * Hook: woocommerce_single_product_summary.
								 *
								 * @hooked woocommerce_template_single_title - 5
								 * @hooked woocommerce_template_single_rating - 10
								 * @hooked woocommerce_template_single_price - 10
								 * @hooked woocommerce_template_single_excerpt - 20
								 * @hooked woocommerce_template_single_add_to_cart - 30
								 * @hooked woocommerce_template_single_meta - 40
								 * @hooked woocommerce_template_single_sharing - 50
								 * @hooked WC_Structured_Data::generate_product_data() - 60
								 */
								do_action( 'woocommerce_single_product_summary' );
							?>
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
			<div class="product-desc-tab">
				<ul class="nav" id="productTab" role="tablist">
					<li class="nav-item">
						<button aria-selected="true" class="active waves-effect waves-light"
								data-bs-target="#productDescLess-pane" data-bs-toggle="tab" id="productDescLess"
								role="button" type="button">
							توضیحات کالا
						</button>
					</li>
					<li class="nav-item">
						<button aria-selected="true" class=" waves-effect waves-light"
								data-bs-target="#productDesc-pane" data-bs-toggle="tab" id="productDesc"
								role="button" type="button">
							مشخصات کالا
						</button>
					</li>
					<li class="nav-item">
						<button aria-selected="false" class=" waves-effect waves-light"
								data-bs-target="#productTable-pane" data-bs-toggle="tab" id="productTable"
								role="button" type="button">
							توضیحات تکمیلی
						</button>
					</li>
					<li class="nav-item">
						<button aria-selected="false" class="d-flex waves-effect waves-light"
								data-bs-target="#productComment-pane" data-bs-toggle="tab" id="productComment"
								role="button" type="button">
							نظرات <span class="badge main-color-two-bg rounded-0 ms-2">17</span>
						</button>
					</li>
					<li class="nav-item">
						<button aria-selected="false" class="d-flex waves-effect waves-light"
								data-bs-target="#productAnswer-pane" data-bs-toggle="tab" id="productAnswer"
								role="button" type="button">
							پرسش و پاسخ <span class="badge main-color-two-bg rounded-0 ms-2">8</span>
						</button>
					</li>
				</ul>
			</div>
			<div class="content-box">
				<div class="container-fluid">
					<div class="product-descs" id="prodesc">
						<div class="product-desc">
							<div class="product-desc-tab-content">
								<div class="tab-content" id="productTabContent">
									<div class="tab-pane fade show active product-desc-less-contents"
										id="productDescLess-pane">
										<div class="product-desc-content">
											<input class="read-more-state" id="readMore3" type="checkbox"/>
											<!-- والد بیشتر ، کمتر ، تمام متن توضیحات باید داخل این تگ قرار بگیرند -->
											<div class="read-more-wrap">
												<h6 class="font-22 mb-2 title-font title-line-bottom">معرفی محصول</h6>
												<p><?php the_content(); ?></p>
												<!-- متن بیشتر -->
												<!-- <div class="read-more-target">
													<p><?php // the_content(); ?></p>
												</div> -->
												<!-- پایان متن بیشتر -->
											</div>
											<!-- پایان والد بیشتر کمتر -->
											<label class="read-more-trigger" for="readMore3"></label>
										</div>
									</div>
									<div class="tab-pane fade product-desc-contents" id="productDesc-pane">
										<div class="product-desc-content">
											<input class="read-more-state" id="readMore2" type="checkbox"/>
											<!-- والد بیشتر ، کمتر ، تمام متن توضیحات باید داخل این تگ قرار بگیرند -->
											<div class="read-more-wrap">
												<h6 class="font-26 mb-2 title-font title-line-bottom">معرفی کامل محصول</h6>
												<p><?php the_content(); ?></p>
												<!-- متن بیشتر -->
												<!-- <div class="read-more-target">
													<p><?php // the_content(); ?></p>
												</div> -->
												<!-- پایان متن بیشتر -->
											</div>
											<!-- پایان والد بیشتر کمتر -->
											<label class="read-more-trigger" for="readMore2"></label>
										</div>
									</div>
									<div class="tab-pane fade" id="productTable-pane">
										<div aria-labelledby="#productTable"
											class="tab-pane fade active show" role="tabpanel">
											<h6 class="font-26 mb-2 title-font title-line-bottom">مشخصات فنی</h6>
											<div class="box_list mt-4">
												<p class="title">
													<svg class="bi bi-caret-left-fill" fill="currentColor"
														height="16" viewBox="0 0 16 16"
														width="16" xmlns="http://www.w3.org/2000/svg">
														<path
																d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z">
														</path>
													</svg>
													مشخصات کلی
												</p>
												<section>
													<ul class="param_list list-inline">
														<div class="container-fluid">
															<div class="row ps-md-2">
																<li
																		class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom1">
																			قابلیت پخش موسیقی
																		</p>
																	</div>
																</li>
																<li class="list-inline-item col-md-8 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom2">
																			دارد
																		</p>
																	</div>
																</li>
															</div>
															<div class="row ps-md-2">
																<li
																		class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom1">
																			قابلیت کنترل صدا و موزیک
																		</p>
																	</div>
																</li>
																<li class="list-inline-item col-md-8 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom2">
																			ندارد
																		</p>
																	</div>
																</li>
															</div>
															<div class="row ps-md-2">
																<li
																		class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom1">
																			راهنمایی صوتی
																		</p>
																	</div>
																</li>
																<li class="list-inline-item col-md-8 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom2">
																			ندارد
																		</p>
																	</div>
																</li>
															</div>

														</div>
													</ul>
												</section>
											</div>
											<div class="box_list mt-4">
												<p class="title">
													<svg class="bi bi-caret-left-fill" fill="currentColor"
														height="16" viewBox="0 0 16 16"
														width="16" xmlns="http://www.w3.org/2000/svg">
														<path
																d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z">
														</path>
													</svg>
													مشخصات کلی
												</p>
												<section>
													<ul class="param_list list-inline">
														<div class="container-fluid">
															<div class="row ps-md-2">
																<li
																		class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom1">
																			قابلیت پخش موسیقی
																		</p>
																	</div>
																</li>
																<li class="list-inline-item col-md-8 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom2">
																			دارد
																		</p>
																	</div>
																</li>
															</div>
															<div class="row ps-md-2">
																<li
																		class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom1">
																			قابلیت کنترل صدا و موزیک
																		</p>
																	</div>
																</li>
																<li class="list-inline-item col-md-8 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom2">
																			ندارد
																		</p>
																	</div>
																</li>
															</div>
															<div class="row ps-md-2">
																<li
																		class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom1">
																			راهنمایی صوتی
																		</p>
																	</div>
																</li>
																<li class="list-inline-item col-md-8 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom2">
																			ندارد
																		</p>
																	</div>
																</li>
															</div>

														</div>
													</ul>
												</section>
											</div>
											<div class="box_list mt-4">
												<p class="title">
													<svg class="bi bi-caret-left-fill" fill="currentColor"
														height="16" viewBox="0 0 16 16"
														width="16" xmlns="http://www.w3.org/2000/svg">
														<path
																d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z">
														</path>
													</svg>
													مشخصات کلی
												</p>
												<section>
													<ul class="param_list list-inline">
														<div class="container-fluid">
															<div class="row ps-md-2">
																<li
																		class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom1">
																			قابلیت پخش موسیقی
																		</p>
																	</div>
																</li>
																<li class="list-inline-item col-md-8 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom2">
																			دارد
																		</p>
																	</div>
																</li>
															</div>
															<div class="row ps-md-2">
																<li
																		class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom1">
																			قابلیت کنترل صدا و موزیک
																		</p>
																	</div>
																</li>
																<li class="list-inline-item col-md-8 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom2">
																			ندارد
																		</p>
																	</div>
																</li>
															</div>
															<div class="row ps-md-2">
																<li
																		class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom1">
																			راهنمایی صوتی
																		</p>
																	</div>
																</li>
																<li class="list-inline-item col-md-8 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom2">
																			ندارد
																		</p>
																	</div>
																</li>
															</div>

														</div>
													</ul>
												</section>
											</div>
											<div class="box_list mt-4">
												<p class="title">
													<svg class="bi bi-caret-left-fill" fill="currentColor"
														height="16" viewBox="0 0 16 16"
														width="16" xmlns="http://www.w3.org/2000/svg">
														<path
																d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z">
														</path>
													</svg>
													مشخصات کلی
												</p>
												<section>
													<ul class="param_list list-inline">
														<div class="container-fluid">
															<div class="row ps-md-2">
																<li
																		class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom1">
																			راهنمایی صوتی
																		</p>
																	</div>
																</li>
																<li class="list-inline-item col-md-8 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom2">
																			دارد
																		</p>
																	</div>
																</li>
															</div>
															<div class="row ps-md-2">
																<li
																		class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">

																</li>
																<li class="list-inline-item col-md-8 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom2">
																			ندارد
																		</p>
																	</div>
																</li>
															</div>
															<div class="row ps-md-2">
																<li
																		class="list-inline-item col-md-3 pe-md-1 pe-md-3 p-0 m-0">

																</li>
																<li class="list-inline-item col-md-8 p-0 m-0">
																	<div class="box_params_list">
																		<p class="block border_right_custom2">
																			ندارد
																		</p>
																	</div>
																</li>
															</div>

														</div>
													</ul>
												</section>
											</div>
										</div>
									</div>
									<div class="tab-pane fade product-comment-content" id="productComment-pane">

										<div class="comment-form">
											<h6 class="font-26 mb-2 title-font title-line-bottom">نظرت در مورد این محصول
												چیه؟</h6>
											<p class="font-14 text-muted mt-2">برای ثبت نظر، از طریق دکمه افزودن
												دیدگاه جدید
												نمایید. اگر این محصول را قبلا خریده باشید، نظر شما به عنوان خریدار
												ثبت خواهد
												شد.</p>
											<form action="">
												<div class="row gy-4">
													<div class="col-md-4">
														<div class="product-rateing position-sticky top-0">
															<div class="row gy-2 align-items-center">
																<div class="number">
																	<h4 class="fw-light">متوسط امتیاز ها</h4>
																	<h2>3.00</h2>
																	<div class="star">
																		<i class="bi bi-star-fill"></i>
																		<i class="bi bi-star-fill"></i>
																		<i class="bi bi-star-fill"></i>
																		<i class="bi bi-star-fill"></i>
																		<i class="bi bi-star"></i>
																	</div>
																</div>
																<div class="prog-rating">
																	<div class="item w-100 mb-2">
																		<div class="d-flex align-items-center flex-wrap">
																			<span class="font-14">5 ستاره</span>
																			<div class="progress flex-grow-1 mx-2"
																				style="height: 7px;">
																				<div aria-valuemax="100" aria-valuemin="0"
																					aria-valuenow="25" class="progress-bar"
																					role="progressbar"
																					style="width: 25%"></div>
																			</div>
																			<span class="font-14">5</span>
																		</div>
																	</div>
																	<div class="item w-100 mb-2">
																		<div class="d-flex align-items-center flex-wrap">
																			<span class="font-14">4 ستاره</span>
																			<div class="progress flex-grow-1 mx-2"
																				style="height: 7px;">
																				<div aria-valuemax="100" aria-valuemin="0"
																					aria-valuenow="60" class="progress-bar"
																					role="progressbar"
																					style="width: 60%"></div>
																			</div>
																			<span class="font-14">17</span>
																		</div>
																	</div>
																	<div class="item w-100 mb-2">
																		<div class="d-flex align-items-center flex-wrap">
																			<span class="font-14">3 ستاره</span>
																			<div class="progress flex-grow-1 mx-2"
																				style="height: 7px;">
																				<div aria-valuemax="100" aria-valuemin="0"
																					aria-valuenow="78" class="progress-bar"
																					role="progressbar"
																					style="width: 78%"></div>
																			</div>
																			<span class="font-14">85</span>
																		</div>
																	</div>
																	<div class="item w-100 mb-2">
																		<div class="d-flex align-items-center flex-wrap">
																			<span class="font-14">2 ستاره</span>
																			<div class="progress flex-grow-1 mx-2"
																				style="height: 7px;">
																				<div aria-valuemax="100" aria-valuemin="0"
																					aria-valuenow="4" class="progress-bar"
																					role="progressbar"
																					style="width: 4%"></div>
																			</div>
																			<span class="font-14">3</span>
																		</div>
																	</div>
																	<div class="item w-100">
																		<div class="d-flex align-items-center flex-wrap">
																			<span class="font-14">1 ستاره</span>
																			<div class="progress flex-grow-1 mx-2"
																				style="height: 7px;">
																				<div aria-valuemax="100" aria-valuemin="0"
																					aria-valuenow="82" class="progress-bar"
																					role="progressbar"
																					style="width: 82%"></div>
																			</div>
																			<span class="font-14">652</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-8">
														<div class="row">
															<div class="col-sm-6">
																<div class="form-floating mb-3 form-group">
																	<input class="form-control" id="floatingInputEmail1"
																		placeholder="ایمیل خود را وارد کنید"
																		type="email">
																	<label for="floatingInputEmail1">ایمیل خود را وارد
																		کنید</label>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-floating mb-3 form-group">
																	<input class="form-control" id="floatingInputName"
																		placeholder="نام خود را وارد کنید"
																		type="text">
																	<label for="floatingInputName">نام خود را وارد کنید</label>
																</div>
															</div>
															<div class="col-12">
																<div class="form-group form-check">
																	<input class="form-check-input" id="rememberComment"
																		type="checkbox">
																	<label class="form-check-label d-block"
																		for="rememberComment">
																		ذخیره
																		نام، ایمیل و وبسایت من در مرورگر برای زمانی که دوباره
																		دیدگاهی می‌نویسم.
																	</label>
																</div>
															</div>
															<div class="col-12">
																<div class="form-group">
																	<label class="my-3" for="commentRating">امتیاز شما</label>
																	<fieldset class="rating" id="commentRating">
																		<input id="star5" name="rating" required type="radio"
																			value="5"/>
																		<label for="star5">5 stars</label>
																		<input id="star4" name="rating" required type="radio"
																			value="4"/>
																		<label for="star4">4 stars</label>
																		<input id="star3" name="rating" required type="radio"
																			value="3"/>
																		<label for="star3">3 stars</label>
																		<input id="star2" name="rating" required type="radio"
																			value="2"/>
																		<label for="star2">2 stars</label>
																		<input id="star1" name="rating" required type="radio"
																			value="1"/>
																		<label for="star1">1 star</label>
																	</fieldset>
																</div>
															</div>
															<div class="col-12">
																<div class="form-floating">
																<textarea class="form-control"
																		id="floatingTextarea2"
																		placeholder="Leave a comment here"
																		style="height: 150px"></textarea>
																	<label for="floatingTextarea2">متن نظر!</label>
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group mt-3">
																	<label class="text-success mb-2 fw-bold font-16"
																		for="tags-pos">نقاط
																		قوت</label>
																	<input class="commentTags form-control" id="tags-pos"
																		name="tags-pos"
																		placeholder="با کلید اینتر اضافه کنید">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group mt-3">
																	<label class="text-danger fw-bold mb-2 font-16"
																		for="tags-neg">نقاط
																		ضعف</label>
																	<input class="commentTags form-control" id="tags-neg"
																		name="tags-neg"
																		placeholder="با کلید اینتر اضافه کنید">
																</div>
															</div>
															<div class="col-12">
																<button type="submit" class="btn main-color-two-bg px-5 btn-lg rounded-0 border-0">ثبت نظر</button>
															</div>
														</div>
													</div>
												</div>
											</form>
										</div>
										<div class="box_filter mt-5 pb-3">
											<div class="row align-items-end">
												<div class="col-md-4 bf1">
													<h4 class="title-font title-line-bottom">نظرات کاربران</h4>
												</div>
												<div class="col-md-8 bf2">
													<ul class="list-inline text-end mb-0">
														<li class="list-inline-item title-font">مرتب سازی بر اساس :</li>
														<li class="list-inline-item"><a href="#">نظر خریداران</a></li>
														<li class="list-inline-item"><a class="active_custom" href="#">مفیدترین
															نظرات</a>
														</li>
														<li class="list-inline-item"><a href="#">جدیدترین نظرات</a></li>
													</ul>
												</div>
											</div>
										</div>

										<div class="box_users_comment mt-3 p-4">
											<div class="row">
												<div class="col-lg-3">
													<div class="box_message_light">
														<svg class="bi bi-cart3" fill="currentColor" height="16"
															viewBox="0 0 16 16" width="16"
															xmlns="http://www.w3.org/2000/svg">
															<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
														</svg>
														خریدار این محصول
													</div>
													<div class="box_shopping mt-lg-5 mt-3">
														<span>خریداری شده از :</span>
														<p>
															<i class="bi bi-shop"></i>
															<a href="#">اسمارت الکترونیک</a>
														</p>
													</div>
													<div class="box_message_dislike mt-2">
														<i class="bi bi-hand-thumbs-down"></i>
														خرید این محصول را توصیه نمی
														کنم
													</div>
												</div>
												<div class="col-lg-9 pr-5" style="margin-top:-10px">
													<div class="box_comment_header mt-4 mt-lg-0">
														<span class="span1">نخرید</span>
														<br>
														<span class="span2">توسط مسلم ابراهیمی در تاریخ ۳۰ شهریور ۱۳۹۷
													</span>
													</div>
													<div class="border-bottom mt-3"></div>
													<div class="row mt-4">
														<div class="col-md-6 evaluation-positive">
															<ul class="list-inline">
																<span>نقاط قوت</span>
																<li class="list-inline-item ml-3">هیچی</li>
															</ul>
														</div>
														<div class="col-md-6 evaluation-negative">
															<ul class="list-inline">
																<span>نقاط ضعف</span>
																<li class="list-inline-item ml-3">کیفیت صدا , موقع زنگ اصلا
																	صدا
																	نمیره
																</li>
															</ul>
														</div>
													</div>
													<div class="row mt-4">
														<div class="col-md-12">
															<p class="box_text_comment">
																دوستان سلام من این رو خریدم اصلا خوب نیست صدا نمیره اونایی
																که
																میگن خوبه
																همشون
																فروشنده این بسته هستن با اکانت هایی که ساختن میام الکی نظر
																میدن
																نخرید به خدا
																نخرید اصلا خوب نیست
															</p>
														</div>
													</div>
													<div class="row justify-content-end">
														<div class="col-12">
															<div class="comments_likes">
															<span class="mr-4 mt-1">
																ایا این نظر برایتان مفید بود ؟
															</span>
																<a class="btn btn-like btn-like-like mt-1 mt-md-0 ms-2"
																href="#"><i
																		class="bi bi-hand-thumbs-up"></i> 70</a>
																<a class="btn btn-like btn-like-dislike mt-1 mt-md-0"
																href="#"> <i
																		class="bi bi-hand-thumbs-down"></i> 7</a>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
										<div class="box_users_comment mt-3 p-4">
											<div class="row">
												<div class="col-lg-3">
													<div class="box_message_light">
														<svg class="bi bi-cart3" fill="currentColor" height="16"
															viewBox="0 0 16 16" width="16"
															xmlns="http://www.w3.org/2000/svg">
															<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
														</svg>
														خریدار این محصول
													</div>
													<div class="box_shopping mt-lg-5 mt-3">
														<span>خریداری شده از :</span>
														<p>
															<i class="bi bi-shop"></i>
															<a href="#">اسمارت الکترونیک</a>
														</p>
													</div>
													<div class="box_message_dislike mt-2">
														<i class="bi bi-hand-thumbs-down"></i>
														خرید این محصول را توصیه نمی
														کنم
													</div>
												</div>
												<div class="col-lg-9 pr-5" style="margin-top:-10px">
													<div class="box_comment_header mt-4 mt-lg-0">
														<span class="span1">نخرید</span>
														<br>
														<span class="span2">توسط مسلم ابراهیمی در تاریخ ۳۰ شهریور ۱۳۹۷
													</span>
													</div>
													<div class="border-bottom mt-3"></div>
													<div class="row mt-4">
														<div class="col-md-6 evaluation-positive">
															<ul class="list-inline">
																<span>نقاط قوت</span>
																<li class="list-inline-item ml-3">هیچی</li>
															</ul>
														</div>
														<div class="col-md-6 evaluation-negative">
															<ul class="list-inline">
																<span>نقاط ضعف</span>
																<li class="list-inline-item ml-3">کیفیت صدا , موقع زنگ اصلا
																	صدا
																	نمیره
																</li>
															</ul>
														</div>
													</div>
													<div class="row mt-4">
														<div class="col-md-12">
															<p class="box_text_comment">
																دوستان سلام من این رو خریدم اصلا خوب نیست صدا نمیره اونایی
																که
																میگن خوبه
																همشون
																فروشنده این بسته هستن با اکانت هایی که ساختن میام الکی نظر
																میدن
																نخرید به خدا
																نخرید اصلا خوب نیست
															</p>
														</div>
													</div>
													<div class="row justify-content-end">
														<div class="col-12">
															<div class="comments_likes">
															<span class="mr-4 mt-1">
																ایا این نظر برایتان مفید بود ؟
															</span>
																<a class="btn btn-like btn-like-like mt-1 mt-md-0 ms-2"
																href="#"><i
																		class="bi bi-hand-thumbs-up"></i> 70</a>
																<a class="btn btn-like btn-like-dislike mt-1 mt-md-0"
																href="#"> <i
																		class="bi bi-hand-thumbs-down"></i> 7</a>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
										<div class="container">
											<div class="text-center">
												<a class="btn-flat lg dark" href="">بارگذاری کامنت ها</a>
											</div>
										</div>
									</div>
									<div aria-labelledby="#productAnswer" class="tab-pane fade" id="productAnswer-pane"
										role="tabpanel">
										<h4 class="title-font title-line-bottom">پرسش و پاسخ</h4>
										<span class="fw-bold d-block mt-2 text-muted font-12">پرسش خود را در مورد محصول مطرحنمایید</span>

										<div class="box_questions mt-4">
											<form>
												<div class="form-group">
													<textarea class="form-control"
															placeholder="هر سوالی در مورد این محصول به ذهنتان میرسید بپرسید!"
															rows="7"></textarea>
													<button class="btn main-color-three-bg mt-3 btn-lg rounded-0"
															type="submit">ثبت پرسش
													</button>
												</div>
											</form>

											<div class="box_filter mt-5 pb-3">
												<div class="row align-items-end">
													<div class="col-md-4 bf1">
														<h4 class="title-font title-line-bottom">پرسش های کاربران</h4>
													</div>
													<div class="col-md-8 bf2">
														<ul class="list-inline text-end mb-0">
															<li class="list-inline-item title-font">مرتب سازی بر اساس :</li>
															<li class="list-inline-item"><a href="#">نظر خریداران</a></li>
															<li class="list-inline-item"><a class="active_custom" href="#">مفیدترین
																نظرات</a>
															</li>
															<li class="list-inline-item"><a href="#">جدیدترین نظرات</a></li>
														</ul>
													</div>
												</div>
											</div>

											<div class="box_questions mt-4">
												<div class="row bs-qu">
													<div class="col-lg-2 bq1 text-center">
														<i class="bi bi-question-circle-fill"></i>
														<br>
														<span class="span1">پرسش</span>
														<br>
														<span class="span2">فرزاد عباسقلی زاده</span>
													</div>
													<div class="col-lg-10 bq2">
														<p>سلام چطوری دو گوشی همزمان پخش میکنه ؟ </p>

														<div class="row bq-footer">
															<div class="col-md-5 col-6 my-flex-align-end">
														<span class="date"> ۱۶ مهر ۱۳۹۷
														</span>
															</div>
															<div class="col-md-7 col-6 text-end pe-0">
																<a class="d-none d-sm-block" href="#">
																	<span class="link-info">به این پرسش پاسخ دهید (۱ پاسخ)</span>
																</a><a class="d-sm-none d-block" href="#">پاسخ</a>
															</div>
														</div>
													</div>
												</div>
												<div class="row bs-qu">
													<div class="col-lg-2 bq1 text-center">
														<i class="bi bi-chat-dots-fill"></i>
														<br>
														<span class="span1">پاسخ</span>
														<br>
														<span class="span2">حسین زارع</span>
													</div>
													<div class="col-lg-10 bq2 bg-transparent">
														<p>حوه راه اندازی: (خیلی دربارش پرسیده بودند): اول: بلوتوث گوشی خود
															را
															خاموش کنید.
															دوم: لطفا
															کلید های چند منظوره در هر دو هدفون را همزمان فشار دهید
														</p>
														<div class="row align-items-center bq-footer">
															<div class="col-lg-5 col-12 my-flex-align-end">
														<span class="date">۲۲ مهر ۱۳۹۷
														</span>
															</div>
															<div class="col-lg-7 col-12 text-start p-0 ">
																<div class="comments_likes">
																				<span class="mr-4 mt-1">
																					ایا این نظر برایتان مفید بود ؟
																				</span>
																	<a class="btn btn-like btn-like-like mt-1 mt-md-0 ms-2"
																	href="#"><i
																			class="bi bi-hand-thumbs-up"></i> 70</a>
																	<a class="btn btn-like btn-like-dislike mt-1 mt-md-0"
																	href="#">
																		<i class="bi bi-hand-thumbs-down"></i> 7</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="box_questions mt-4">
												<div class="row bs-qu">
													<div class="col-lg-2 bq1 text-center">
														<i class="bi bi-question-circle-fill"></i>
														<br>
														<span class="span1">پرسش</span>
														<br>
														<span class="span2">فرزاد عباسقلی زاده</span>
													</div>
													<div class="col-lg-10 bq2">
														<p>سلام چطوری دو گوشی همزمان پخش میکنه ؟ </p>

														<div class="row bq-footer">
															<div class="col-md-5 col-6 my-flex-align-end">
														<span class="date"> ۱۶ مهر ۱۳۹۷
														</span>
															</div>
															<div class="col-md-7 col-6 text-end pe-0">
																<a class="d-none d-sm-block" href="#">
																	<span class="link-info">به این پرسش پاسخ دهید (۱ پاسخ)</span>
																</a><a class="d-sm-none d-block" href="#">پاسخ</a>
															</div>
														</div>
													</div>
												</div>
												<div class="row bs-qu">
													<div class="col-lg-2 bq1 text-center">
														<i class="bi bi-chat-dots-fill"></i>
														<br>
														<span class="span1">پاسخ</span>
														<br>
														<span class="span2">حسین زارع</span>
													</div>
													<div class="col-lg-10 bq2 bg-transparent">
														<p>حوه راه اندازی: (خیلی دربارش پرسیده بودند): اول: بلوتوث گوشی خود
															را
															خاموش کنید.
															دوم: لطفا
															کلید های چند منظوره در هر دو هدفون را همزمان فشار دهید
														</p>
														<div class="row align-items-center bq-footer">
															<div class="col-lg-5 col-12 my-flex-align-end">
														<span class="date">۲۲ مهر ۱۳۹۷
														</span>
															</div>
															<div class="col-lg-7 col-12 text-start p-0 ">
																<div class="comments_likes">
																				<span class="mr-4 mt-1">
																					ایا این نظر برایتان مفید بود ؟
																				</span>
																	<a class="btn btn-like btn-like-like mt-1 mt-md-0 ms-2"
																	href="#"><i
																			class="bi bi-hand-thumbs-up"></i> 70</a>
																	<a class="btn btn-like btn-like-dislike mt-1 mt-md-0"
																	href="#">
																		<i class="bi bi-hand-thumbs-down"></i> 7</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="container mt-4">
												<div class="text-center">
													<a class="btn-flat lg dark" href="">بارگذاری کامنت ها</a>
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
	<!-- end product desc -->

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
							<a class="font-16 btn-flat dark" href=""> مشاهده همه</a>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-parent">
				<div class="swiper product-slider-swiper">

					<div class="swiper-wrapper ">

						<div class="swiper-slide">
							<div class="product-box">
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
						<div class="swiper-slide">
							<div class="product-box">
								<div class="product-box-image">

									<img src="assets/img/product/product-image-2.jpg" loading="lazy" alt="" class="img-fluid one-image">
									<img src="assets/img/product/product-image-9.jpg" loading="lazy" alt="" class="img-fluid two-image">

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
						<div class="swiper-slide">
							<div class="product-box">
								<div class="product-box-image">
									<img src="assets/img/product/product-image-3.jpg" loading="lazy" alt="" class="img-fluid one-image">
									<img src="assets/img/product/product-image-5.jpg" loading="lazy" alt="" class="img-fluid two-image">
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
						<div class="swiper-slide">
							<div class="product-box">
								<div class="product-box-image">
									<img src="assets/img/product/product-image-4.jpg" loading="lazy" alt="" class="img-fluid one-image">
									<img src="assets/img/product/product-image-4.jpg" loading="lazy" alt="" class="img-fluid two-image">
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
						<div class="swiper-slide">
							<div class="product-box">
								<div class="product-box-image">
									<img src="assets/img/product/product-image-5.jpg" loading="lazy" alt="" class="img-fluid one-image">
									<img src="assets/img/product/product-image-3.jpg" loading="lazy" alt="" class="img-fluid two-image">
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
						<div class="swiper-slide">
							<div class="product-box">
								<div class="product-box-image">
									<img src="assets/img/product/product-image-6.jpg" loading="lazy" alt="" class="img-fluid one-image">
									<img src="assets/img/product/product-image-7.jpg" loading="lazy" alt="" class="img-fluid two-image">
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
						<div class="swiper-slide">
							<div class="product-box">
								<div class="product-box-image">
									<img src="assets/img/product/product-image-7.jpg" loading="lazy" alt="" class="img-fluid one-image">
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
						<div class="swiper-slide">
							<div class="product-box">
								<div class="product-box-image">
									<img src="assets/img/product/product-image-8.jpg" loading="lazy" alt="" class="img-fluid one-image">
									<img src="assets/img/product/product-image-9.jpg" loading="lazy" alt="" class="img-fluid two-image">
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

					</div>

					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>

				</div>
			</div>

			<div class="text-center">
				<button class="amazing-offer-btn" data-scroll-to="#banners"></button>
			</div>

		</div>
	</div>
	<!-- end product slider -->
</div>