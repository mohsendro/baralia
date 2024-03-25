<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<?php
	/**
	 * Hook: woocommerce_before_main_content.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 * @hooked WC_Structured_Data::generate_website_data() - 30
	 */
	do_action( 'woocommerce_before_main_content' );
?>

<!-- start content -->
<div class="content">
    <div class="container-fluid">
        <!-- start filter in mobile -->
        <div class="custom-filter d-lg-none d-block">
            <button class="btn btn-filter-float border-0 main-color-two-bg shadow-box px-3 rounded-3 position-fixed"
                    style="z-index: 999;bottom:80px;" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <i class="bi bi-funnel font-20 fw-bold text-white"></i>
                <span class="d-block font-14 text-white">فیلتر</span>
            </button>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasRight"
                 aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasRightLabel1">فیلتر ها</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="filter-items position-sticky shadow-none top-0">
                        <div class="container-fluid">
                            <div class="filter-item">
                                <h5 class="filter-item-title">فیلتر های اعمال شده</h5>
                                <div class="filter-item-content">
                                    <a href="" class="btn-flat dark px-2 py-1 me-1 font-14 mb-2">
                                        <i class="bi bi-x text-danger"></i> دورس جدید</a>
                                    <a href="" class="btn-flat dark me-1 px-2 py-1 font-14 mb-2">
                                        <i class="bi bi-x text-danger"></i> شال حریر</a>
                                </div>
                            </div>
                            <div class="filter-item">
                                <h5 class="filter-item-title">دسته بندی ها</h5>
                                <div class="filter-item-content">
                                    <form action="">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                            <div class="form-check">
                                                <label for="colorCheck" class="form-check-label">موبایل <i
                                                        class="bi bi-phone ms-1"></i></label>
                                                <input type="checkbox" name="" id="colorCheck"
                                                       class="form-check-input">
                                            </div>
                                            <div>
                                                <span class="fw-bold font-14">(27)</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                            <div class="form-check">
                                                <label for="colorCheck2" class="form-check-label">ایرپاد <i
                                                        class="bi bi-earbuds ms-1"></i></label>
                                                <input type="checkbox" name="" id="colorCheck2"
                                                       class="form-check-input">
                                            </div>
                                            <div>
                                                <span class="fw-bold font-14">(32)</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                            <div class="form-check">
                                                <label for="colorCheck3" class="form-check-label">تبلت <i
                                                        class="bi bi-tablet ms-1"></i></label>
                                                <input type="checkbox" name="" id="colorCheck3"
                                                       class="form-check-input">
                                            </div>
                                            <div>
                                                <span class="fw-bold font-14">(14)</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                            <div class="form-check">
                                                <label for="colorCheck4" class="form-check-label">هدست <i
                                                        class="bi bi-headset ms-1"></i></label>
                                                <input type="checkbox" name="" id="colorCheck4"
                                                       class="form-check-input">
                                            </div>
                                            <div>
                                                <span class="fw-bold font-14">(8)</span>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn-outline-site">اعمال فیلتر</button>
                                    </form>
                                </div>
                            </div>
                            <div class="filter-item">
                                <h5 class="filter-item-title">قیمت</h5>
                                <div class="filter-item-content">
                                    <form action="" method="get">
                                        <div class="form-group">
                                            <input type="range" class="catRange" name="range[]">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="number" name=""  min="1500000"
                                                       class="form-control input-range-filter" placeholder="از 1500000">
                                            </div>
                                            <div class="col-6">
                                                <input type="number" name=""  min="1500000" max="3000000"
                                                       class="form-control input-range-filter" placeholder="از 3000000">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn-outline-site mt-3">اعمال فیلتر</button>

                                    </form>
                                </div>
                            </div>
                            <div class="filter-item">
                                <h5 class="filter-item-title">رنگ محصول</h5>
                                <div class="filter-item-content">
                                    <form action="">
                                        <div class="product-meta-color-items">
                                            <input type="radio" class="btn-check" name="options" id="option1"
                                                   autocomplete="off" checked>
                                            <label class="btn btt-light" for="option1">
                                                <span style="background-color: #c00;"></span>
                                                قرمز
                                            </label>

                                            <input type="radio" class="btn-check" name="options" id="option2"
                                                   autocomplete="off">
                                            <label class="btn btt-light" for="option2">
                                                <span style="background-color: #111;"></span>
                                                مشکی
                                            </label>

                                            <input type="radio" class="btn-check" name="options" id="option3"
                                                   autocomplete="off">
                                            <label class="btn btt-light" for="option3">
                                                <span style="background-color: #00cc5f;"></span>
                                                سبز
                                            </label>

                                            <input type="radio" class="btn-check" name="options" id="option4"
                                                   autocomplete="off">
                                            <label class="btn btt-light" for="option4">
                                                <span style="background-color: #1b69f0;"></span>
                                                آبی
                                            </label>

                                            <input type="radio" class="btn-check" name="options" id="option5"
                                                   autocomplete="off">
                                            <label class="btn btt-light" for="option5">
                                                <span style="background-color: #891bf0;"></span>
                                                بنفش
                                            </label>

                                            <input type="radio" class="btn-check" name="options" id="option6"
                                                   autocomplete="off">
                                            <label class="btn btt-light" for="option6">
                                                <span style="background-color: #f0501b;"></span>
                                                نارنجی
                                            </label>
                                        </div>
                                        <button type="submit" class="btn-outline-site">اعمال فیلتر</button>
                                    </form>
                                </div>
                            </div>
                            <div class="filter-item">
                                <h5 class="filter-item-title">سایز محصول</h5>
                                <div class="filter-item-content">
                                    <form action="">
                                        <div class="product-box-size pro-var-responsive">
                                            <h5 class="font-16 my-2">
                                                انتخاب سایز کالا
                                            </h5>
                                            <ul>
                                                <li><a class="active" href="">40</a></li>
                                                <li><a href="">41</a></li>
                                                <li><a href="">42</a></li>
                                                <li><a href="">43</a></li>
                                                <li><a href="">44</a></li>
                                                <li><a href="">45</a></li>
                                                <li><a href="">46</a></li>
                                                <li><a href="">47</a></li>
                                                <li><a href="">48</a></li>
                                                <li><a href="">lg</a></li>
                                                <li><a href="">xl</a></li>
                                                <li><a href="">xxl</a></li>
                                                <li><a href="">3xl</a></li>
                                                <li><a href="">4xl</a></li>
                                            </ul>
                                        </div>
                                        <button type="submit" class="btn-outline-site">اعمال فیلتر</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end filter mobile -->

        <div class="row gy-3">
            <div class="col-lg-3 d-lg-block d-none">
                <div class="filter-items position-sticky top-0">
                    <div class="container-fluid">
                        <div class="filter-item">
                            <h5 class="filter-item-title">فیلتر های اعمال شده</h5>
                            <div class="filter-item-content">
                                <a href="" class="btn-flat dark px-2 py-1 me-1 font-14 mb-2">
                                    <i class="bi bi-x text-danger"></i> دورس جدید</a>
                                <a href="" class="btn-flat dark me-1 px-2 py-1 font-14 mb-2">
                                    <i class="bi bi-x text-danger"></i> شال حریر</a>
                            </div>
                        </div>
                        <div class="filter-item">
                            <h5 class="filter-item-title">دسته بندی ها</h5>
                            <div class="filter-item-content">
                                <form action="">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                        <div class="form-check">
                                            <label for="colorCheck11" class="form-check-label">موبایل <i
                                                    class="bi bi-phone ms-1"></i></label>
                                            <input type="checkbox" name="" id="colorCheck11"
                                                   class="form-check-input">
                                        </div>
                                        <div>
                                            <span class="fw-bold font-14">(27)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                        <div class="form-check">
                                            <label for="colorCheck55" class="form-check-label">ایرپاد <i
                                                    class="bi bi-earbuds ms-1"></i></label>
                                            <input type="checkbox" name="" id="colorCheck55"
                                                   class="form-check-input">
                                        </div>
                                        <div>
                                            <span class="fw-bold font-14">(32)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                        <div class="form-check">
                                            <label for="colorCheck44" class="form-check-label">تبلت <i
                                                    class="bi bi-tablet ms-1"></i></label>
                                            <input type="checkbox" name="" id="colorCheck44"
                                                   class="form-check-input">
                                        </div>
                                        <div>
                                            <span class="fw-bold font-14">(14)</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                        <div class="form-check">
                                            <label for="colorCheck33" class="form-check-label">هدست <i
                                                    class="bi bi-headset ms-1"></i></label>
                                            <input type="checkbox" name="" id="colorCheck33"
                                                   class="form-check-input">
                                        </div>
                                        <div>
                                            <span class="fw-bold font-14">(8)</span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn-outline-site">اعمال فیلتر</button>
                                </form>
                            </div>
                        </div>
                        <div class="filter-item">
                            <h5 class="filter-item-title">قیمت</h5>
                            <div class="filter-item-content">
                                <form action="" method="get">
                                    <div class="form-group">
                                        <input type="range" class="catRange" name="range[]">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="number" name=""  min="1500000"
                                                   class="form-control input-range-filter" placeholder="از 1500000">
                                        </div>
                                        <div class="col-6">
                                            <input type="number" name=""  min="1500000" max="3000000"
                                                   class="form-control input-range-filter" placeholder="از 3000000">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn-outline-site mt-3">اعمال فیلتر</button>

                                </form>
                            </div>
                        </div>
                        <div class="filter-item">
                            <h5 class="filter-item-title">رنگ محصول</h5>
                            <div class="filter-item-content">
                                <form action="">
                                    <div class="product-meta-color-items">
                                        <input type="radio" class="btn-check" name="options" id="option11"
                                               autocomplete="off" checked>
                                        <label class="btn btt-light" for="option11">
                                            <span style="background-color: #c00;"></span>
                                            قرمز
                                        </label>

                                        <input type="radio" class="btn-check" name="options" id="option22"
                                               autocomplete="off">
                                        <label class="btn btt-light" for="option22">
                                            <span style="background-color: #111;"></span>
                                            مشکی
                                        </label>

                                        <input type="radio" class="btn-check" name="options" id="option33"
                                               autocomplete="off">
                                        <label class="btn btt-light" for="option33">
                                            <span style="background-color: #00cc5f;"></span>
                                            سبز
                                        </label>

                                        <input type="radio" class="btn-check" name="options" id="option44"
                                               autocomplete="off">
                                        <label class="btn btt-light" for="option44">
                                            <span style="background-color: #1b69f0;"></span>
                                            آبی
                                        </label>

                                        <input type="radio" class="btn-check" name="options" id="option55"
                                               autocomplete="off">
                                        <label class="btn btt-light" for="option55">
                                            <span style="background-color: #891bf0;"></span>
                                            بنفش
                                        </label>

                                        <input type="radio" class="btn-check" name="options" id="option66"
                                               autocomplete="off">
                                        <label class="btn btt-light" for="option66">
                                            <span style="background-color: #f0501b;"></span>
                                            نارنجی
                                        </label>
                                    </div>
                                    <button type="submit" class="btn-outline-site">اعمال فیلتر</button>
                                </form>
                            </div>
                        </div>
                        <div class="filter-item">
                            <h5 class="filter-item-title">سایز محصول</h5>
                            <div class="filter-item-content">
                                <form action="">
                                    <div class="product-box-size pro-var-responsive">
                                        <h5 class="font-16 my-2">
                                            انتخاب سایز کالا
                                        </h5>
                                        <ul>
                                            <li><a class="active" href="">40</a></li>
                                            <li><a href="">41</a></li>
                                            <li><a href="">42</a></li>
                                            <li><a href="">43</a></li>
                                            <li><a href="">44</a></li>
                                            <li><a href="">45</a></li>
                                            <li><a href="">46</a></li>
                                            <li><a href="">47</a></li>
                                            <li><a href="">48</a></li>
                                            <li><a href="">lg</a></li>
                                            <li><a href="">xl</a></li>
                                            <li><a href="">xxl</a></li>
                                            <li><a href="">3xl</a></li>
                                            <li><a href="">4xl</a></li>
                                        </ul>
                                    </div>
                                    <button type="submit" class="btn-outline-site">اعمال فیلتر</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
				<?php if ( woocommerce_product_loop() ): ?>
					<?php
						/**
						 * Hook: woocommerce_before_shop_loop.
						 *
						 * @hooked woocommerce_output_all_notices - 10
						 * @hooked woocommerce_result_count - 20
						 * @hooked woocommerce_catalog_ordering - 30
						 */
						do_action( 'woocommerce_before_shop_loop' );
					?>

					<div class="category-items">
						<div class="row g-3">
							<?php woocommerce_product_loop_start(); ?>
								<?php
									if ( wc_get_loop_prop( 'total' ) ) {
										while ( have_posts() ) {
											the_post();
								
											/**
											 * Hook: woocommerce_shop_loop.
											 */
											do_action( 'woocommerce_shop_loop' );
								
											wc_get_template_part( 'content', 'product' );
										}
									}
								?>
							<?php woocommerce_product_loop_end(); ?>
						</div>
					</div>

					<?php
						/**
						 * Hook: woocommerce_after_shop_loop.
						 *
						 * @hooked woocommerce_pagination - 10
						 */
						do_action( 'woocommerce_after_shop_loop' );
					?>
				<?php else: ?>
					<?php 
						/**
						 * Hook: woocommerce_no_products_found.
						 *
						 * @hooked wc_no_products_found - 10
						 */
						do_action( 'woocommerce_no_products_found' );	
					?>
				<?php endif; ?>
            </div>

			<?php if( term_description() ): ?>
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
					<div class="col-12">
						<div class="content-box" >
							<div class="container-fluid">
								<div class="product-desc-content">
									<input class="read-more-state" id="readMore3" type="checkbox">
									<!-- والد بیشتر ، کمتر ، تمام متن توضیحات باید داخل این تگ قرار بگیرند -->
									<div class="read-more-wrap">
										<h6 class="font-22 mb-2 title-font title-line-bottom"><?php woocommerce_page_title(); ?></h6>
										<p>
											<?php
												/**
												 * Hook: woocommerce_archive_description.
												 *
												 * @hooked woocommerce_taxonomy_archive_description - 10
												 * @hooked woocommerce_product_archive_description - 10
												 */
												do_action( 'woocommerce_archive_description' );
											?>
										</p>

										<!-- متن بیشتر -->
										<!-- <div class="read-more-target">
											<p><?php // the_content(); ?></p>
										</div> -->
										<!-- پایان متن بیشتر -->
									</div>
									<!-- پایان والد بیشتر کمتر -->
									<!-- <label class="read-more-trigger" for="readMore3"></label> -->
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
			<?php endif; ?>
        </div>
    </div>
</div>
<!-- end content -->

<?php
	/**
	 * Hook: woocommerce_after_main_content.
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	do_action( 'woocommerce_after_main_content' );
?>

<?php
	/**
	 * Hook: woocommerce_sidebar.
	 *
	 * @hooked woocommerce_get_sidebar - 10
	 */
	// do_action( 'woocommerce_sidebar' );
?>

<?php
get_footer();