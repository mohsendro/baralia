<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php
    $queried_id = get_queried_object_id();

    $option = new \App\Models\Option;
    $where_option = [
        [
            'column'   => 'option_name',
            'operator' => '=',
            'value'    => 'posts_per_page'
        ]
    ];
    $option = $option->findAll()->where($where_option)->select('option_value')->get()->toArray();
    $option = $option[0]['option_value'];
?>

<?php get_header(); ?>

<?php get_template_part( 'components/slider' ); ?>

<!-- start advert -->
<div class="advert d-lg-block d-none advert-under-slider py-40">
    <div class="container-fluid">
        <div class="row gx-0 gy-4">
            <?php get_template_part( 'components/category' ); ?>
        </div>
    </div>
</div>
<!-- end advert -->

<!-- start main-category -->
<div class="main-category py-40">
    <div class="container-fluid">
        <div class="section-title">
            <div class="row align-items-center gy-3">
                <div class="col-sm-8">
                    <div class="section-title-title">
                        <h2 class="title-font main-color-one-color h1">دسته بندی <span class="main-color-three-color">محصولات</span>
                        </h2>
                        <div class="Dottedsquare"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="section-title-link text-sm-end text-start">
                        <a class="btn-flat dark" href=""> مشاهده همه</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-category-items mt-5">

            <div class="swiper free-mode">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="main-category-item">
                            <div class="main-category-item-image">
                                <a href="">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/category/1-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="main-category-item-title">
                                <h6 class="title-font">لباس مردانه</h6>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-category-item">
                            <div class="main-category-item-image">
                                <a href="">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/category/2-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="main-category-item-title">
                                <h6 class="title-font">انواع کتانی</h6>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-category-item">
                            <div class="main-category-item-image">
                                <a href="">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/category/3-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="main-category-item-title">
                                <h6 class="title-font">انواع عینک</h6>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-category-item">
                            <div class="main-category-item-image">
                                <a href="">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/category/5-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="main-category-item-title">
                                <h6 class="title-font">انواع ساعت</h6>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-category-item">
                            <div class="main-category-item-image">
                                <a href="">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/category/6-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="main-category-item-title">
                                <h6 class="title-font">کیف زنانه</h6>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-category-item">
                            <div class="main-category-item-image">
                                <a href="">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/category/7-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="main-category-item-title">
                                <h6 class="title-font">انواع کفش</h6>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-category-item">
                            <div class="main-category-item-image">
                                <a href="">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/category/8-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="main-category-item-title">
                                <h6 class="title-font">کلاه زنانه</h6>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-category-item">
                            <div class="main-category-item-image">
                                <a href="">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/category/9-1-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="main-category-item-title">
                                <h6 class="title-font">طلا و جواهر</h6>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-category-item">
                            <div class="main-category-item-image">
                                <a href="">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/category/10-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="main-category-item-title">
                                <h6 class="title-font">کت و شلوار</h6>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="main-category-item">
                            <div class="main-category-item-image">
                                <a href="">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/category/11-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="main-category-item-title">
                                <h6 class="title-font">ست رسمی</h6>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-category-item">
                            <div class="main-category-item-image">
                                <a href="">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/category/12-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="main-category-item-title">
                                <h6 class="title-font">انواع تیشرت</h6>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-category-item">
                            <div class="main-category-item-image">
                                <a href="">
                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/category/13.jpg" alt="">
                                </a>
                            </div>
                            <div class="main-category-item-title">
                                <h6 class="title-font">انواع گوشواره</h6>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>
<!-- end main-category -->

<!-- start product slider -->
<div class="product-slider site-slider free-swiper py-40">
    <div class="container-fluid">
        <div class="section-title">
            <div class="row gy-3 align-items-center">
                <div class="col-sm-8">
                    <div class="section-title-title">
                        <h2 class="title-font main-color-one-color h1">محصولات <span class="main-color-three-color">تازه وارد</span>
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

                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-1.jpg" loading="lazy" alt="" class="img-fluid one-image">
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-6.jpg" loading="lazy" alt="" class="img-fluid two-image">

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

                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-2.jpg" loading="lazy" alt="" class="img-fluid one-image">
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-9.jpg" loading="lazy" alt="" class="img-fluid two-image">

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
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-3.jpg" loading="lazy" alt="" class="img-fluid one-image">
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-5.jpg" loading="lazy" alt="" class="img-fluid two-image">
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
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-4.jpg" loading="lazy" alt="" class="img-fluid one-image">
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-4.jpg" loading="lazy" alt="" class="img-fluid two-image">
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
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-5.jpg" loading="lazy" alt="" class="img-fluid one-image">
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-3.jpg" loading="lazy" alt="" class="img-fluid two-image">
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
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-6.jpg" loading="lazy" alt="" class="img-fluid one-image">
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-7.jpg" loading="lazy" alt="" class="img-fluid two-image">
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
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-7.jpg" loading="lazy" alt="" class="img-fluid one-image">
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-6.jpg" loading="lazy" alt="" class="img-fluid two-image">
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
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-8.jpg" loading="lazy" alt="" class="img-fluid one-image">
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-9.jpg" loading="lazy" alt="" class="img-fluid two-image">
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

<!-- start advert -->
<div class="advert d-lg-block d-none advert-under-slider py-40">
    <div class="container-fluid">
        <div class="advert-item img-tilt" data-tilt>
            <a href="">
                <img alt="" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/advert-4.jpg">
                <div class="advert-item-title">
                    <h4>لباس مردانه</h4>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- end advert -->

<!-- start product slider -->
<div class="product-slider free-swiper-two free-sw no-bg site-slider py-40">
    <div class="container-fluid position-relative">
        <div class="section-title with-line">
            <div class="row gy-3 align-items-center">
                <div class="col-sm-8">
                    <div class="section-title-title">
                        <h2 class="title-font main-color-one-color h1">پرفروشترین <span class="main-color-three-color">محصولات</span>
                        </h2>
                        <div class="Dottedsquare"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="section-title-link text-sm-end text-start">
                        <a class="btn-flat dark" href=""> مشاهده همه</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper mt-4 product-slider-swiper">

            <div class="swiper-wrapper ">

                <div class="swiper-slide">
                    <div class="product-box">
                        <div class="product-box-image">

                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product-no-bg/product-image-11.png" loading="lazy" alt="" class="img-fluid one-image">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-6.jpg" loading="lazy" alt="" class="img-fluid two-image">

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

                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product-no-bg/product-image-12.jpg" loading="lazy" alt="" class="img-fluid one-image">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-9.jpg" loading="lazy" alt="" class="img-fluid two-image">

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
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product-no-bg/product-image-13.jpg" loading="lazy" alt="" class="img-fluid one-image">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-5.jpg" loading="lazy" alt="" class="img-fluid two-image">
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
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product-no-bg/product-image-14.jpg" loading="lazy" alt="" class="img-fluid one-image">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-4.jpg" loading="lazy" alt="" class="img-fluid two-image">
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
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product-no-bg/product-image-15.jpg" loading="lazy" alt="" class="img-fluid one-image">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-3.jpg" loading="lazy" alt="" class="img-fluid two-image">
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
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product-no-bg/product-image-16.jpg" loading="lazy" alt="" class="img-fluid one-image">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-7.jpg" loading="lazy" alt="" class="img-fluid two-image">
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
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product-no-bg/product-image-17.jpg" loading="lazy" alt="" class="img-fluid one-image">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-6.jpg" loading="lazy" alt="" class="img-fluid two-image">
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
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product-no-bg/product-image-18.jpg" loading="lazy" alt="" class="img-fluid one-image">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product/product-image-9.jpg" loading="lazy" alt="" class="img-fluid two-image">
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
</div>
<!-- end product slider -->

<!-- start amazing slider -->
<div class="amazing-slider pb-0 py-40">
    <div class="container-fluid position-relative">
        <div class="amazing-slider-parent">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="amazing-slider-title">
                        <p class="mb-0">پیشنهاد</p>
                        <h6 class="title-font">شگفت انگیز</h6>
                        <a href="" class="btn-flat dark">مشاهده همه</a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="swiper amazing-slider-sw">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="">
                                    <div class="amazing-slider-item">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="amazing-slider-item-timer">
                                                    <div class='countdown' data-date="2027-01-01" data-time="18:30">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="amazing-slider-item-image">
                                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product-no-bg/product-image-1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="amazing-slider-item-title">
                                                    <h5 class="text-overflow-2 title-font">ساعت هوشمند شیائومی مدل Redmi Watch 2 Lite طرح بند
                                                        سلیکونی پاور مود جدید 2024
                                                    </h5>
                                                </div>
                                                <div class="amazing-slider-item-feature">
                                                    <ul>
                                                        <li>جنس: <span>پارچه ترک</span></li>
                                                        <li> طرح: <span>ساده</span></li>
                                                        <li>قد: <span>کوتاه</span></li>
                                                        <li>یقه: <span>شل</span></li>
                                                        <li>توع لباس: <span>معمولی</span></li>
                                                    </ul>
                                                </div>
                                                <div class="amazing-slider-item-discount">
                                                    <div class="amazing-slider-item-discount-discount">
                                                        <del>1,340,000</del>
                                                        <ins>35%</ins>
                                                    </div>
                                                    <div class="amazing-slider-item-discount-price">
                                                        <h4>999,000</h4>
                                                        <span> تومان </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <div class="amazing-slider-item">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="amazing-slider-item-timer">
                                                    <div class='countdown' data-date="2027-01-01" data-time="18:30">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="amazing-slider-item-image">
                                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product-no-bg/product-image-2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="amazing-slider-item-title">
                                                    <h5 class="text-overflow-2 title-font">ساعت هوشمند شیائومی مدل Redmi Watch 2 Lite طرح بند
                                                        سلیکونی پاور مود جدید 2024
                                                    </h5>
                                                </div>
                                                <div class="amazing-slider-item-feature">
                                                    <ul>
                                                        <li>جنس: <span>پارچه ترک</span></li>
                                                        <li> طرح: <span>ساده</span></li>
                                                        <li>قد: <span>کوتاه</span></li>
                                                        <li>یقه: <span>شل</span></li>
                                                        <li>توع لباس: <span>معمولی</span></li>
                                                    </ul>
                                                </div>
                                                <div class="amazing-slider-item-discount">
                                                    <div class="amazing-slider-item-discount-discount">
                                                        <del>1,340,000</del>
                                                        <ins>35%</ins>
                                                    </div>
                                                    <div class="amazing-slider-item-discount-price">
                                                        <h4>999,000</h4>
                                                        <span> تومان </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href=""><div class="amazing-slider-item">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="amazing-slider-item-timer">
                                                <div class='countdown' data-date="2027-01-01" data-time="18:30">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="amazing-slider-item-image">
                                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product-no-bg/product-image-3.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="amazing-slider-item-title">
                                                <h5 class="text-overflow-2 title-font">ساعت هوشمند شیائومی مدل Redmi Watch 2 Lite طرح بند
                                                    سلیکونی پاور مود جدید 2024
                                                </h5>
                                            </div>
                                            <div class="amazing-slider-item-feature">
                                                <ul>
                                                    <li>جنس: <span>پارچه ترک</span></li>
                                                    <li> طرح: <span>ساده</span></li>
                                                    <li>قد: <span>کوتاه</span></li>
                                                    <li>یقه: <span>شل</span></li>
                                                    <li>توع لباس: <span>معمولی</span></li>
                                                </ul>
                                            </div>
                                            <div class="amazing-slider-item-discount">
                                                <div class="amazing-slider-item-discount-discount">
                                                    <del>1,340,000</del>
                                                    <ins>35%</ins>
                                                </div>
                                                <div class="amazing-slider-item-discount-price">
                                                    <h4>999,000</h4>
                                                    <span> تومان </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <div class="amazing-slider-item">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="amazing-slider-item-timer">
                                                    <div class='countdown' data-date="2027-01-01" data-time="18:30">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="amazing-slider-item-image">
                                                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/product-no-bg/product-image-4.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="amazing-slider-item-title">
                                                    <h5 class="text-overflow-2 title-font">ساعت هوشمند شیائومی مدل Redmi Watch 2 Lite طرح بند
                                                        سلیکونی پاور مود جدید 2024
                                                    </h5>
                                                </div>
                                                <div class="amazing-slider-item-feature">
                                                    <ul>
                                                        <li>جنس: <span>پارچه ترک</span></li>
                                                        <li> طرح: <span>ساده</span></li>
                                                        <li>قد: <span>کوتاه</span></li>
                                                        <li>یقه: <span>شل</span></li>
                                                        <li>توع لباس: <span>معمولی</span></li>
                                                    </ul>
                                                </div>
                                                <div class="amazing-slider-item-discount">
                                                    <div class="amazing-slider-item-discount-discount">
                                                        <del>1,340,000</del>
                                                        <ins>35%</ins>
                                                    </div>
                                                    <div class="amazing-slider-item-discount-price">
                                                        <h4>999,000</h4>
                                                        <span> تومان </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-button-next d-lg-flex d-none"></div>
                        <div class="swiper-button-prev d-lg-flex d-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end amazing slider -->

<!-- start about us -->
<div class="about-us py-40">
    <div class="container-fluid">
        <div class="row align-items-center gy-4">
            <div class="col-lg-6">
                <div class="about-us-desc">
                    <div class="about-us-title">
                        <div class="about-us-title">
                            <p>فروشگاه</p>
                            <h4>هناس کالا</h4>
                            <div class="Dottedsquare"></div>
                        </div>
                    </div>
                    <div class="about-us-text">
                        <div class="about-us-social me-4">
                            <nav class="navbar">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a href="" class="nav-link text-muted-two"><i class="bi bi-instagram"></i></a></li>
                                    <li class="nav-item"><a href="" class="nav-link text-muted-two"><i class="bi bi-twitter"></i></a></li>
                                    <li class="nav-item"><a href="" class="nav-link text-muted-two"><i class="bi bi-linkedin"></i></a></li>
                                    <li class="nav-item"><a href="" class="nav-link text-muted-two"><i class="bi bi-telegram"></i></a></li>
                                    <li class="nav-item"><a href="" class="nav-link text-muted-two"><i class="bi bi-youtube"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                        <p class="text-muted text-justify mb-0 mt-3">
                            با بیش از سی سال سابقه خدمت به مشتریان در زمینه فروش ابزارآلات صنعتی و کارگاهی را دارا می باشد و با گردهم آوردن متخصصان این عرصه بالغ بر ده سال است که برند را به صورت تخصصی در زمینه ابزار آلات عرضه کرده است. همچنین برای ارائه هرچه تمام تر فعالیت خود از سال فروشگاه اینترنتی ابزار را راه اندازی نموده است. به مدیریت محمدرضا شروع به فعالیت کرده و همچنان با سرعت هرچه تمام تر در حال به روز رسانی فعالیت های خود و ارائه انواع خدمات به مشتریان گرامی در سراسر ایران به صورت حضوری و آنلاین می باشد را به صورت تخصصی در زمینه ابزار آلات عرضه کرده است. همچنین برای ارائه هرچه تمام تر فعالیت خود از سال فروشگاه اینترنتی ابزار را راه اندازی نموده است. ابزار محسن به مدیریت محمدرضا شروع به فعالیت کرده و همچنان با سرعت هرچه تمام تر در حال به روز رسانی فعالیت های خود و ارائه انواع خدمات به مشتریان گرامی در سراسر ایران به صورت حضوری و آنلاین می باشد

                        </p>
                    </div>
                    <div class="about-us-link mt-4 d-flex align-items-center">
                        <a href="" class="btn-flat dark">بیشتر </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-us-image text-lg-end text-center">
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/about-us.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about us -->


<!-- start product slider -->
<div class="product-slider blog-slider free-sw free-swiper-two no-bg site-slider py-40">
    <div class="container-fluid position-relative">
        <div class="section-title with-line">
            <div class="row gy-3 align-items-center">
                <div class="col-sm-8">
                    <div class="section-title-title">
                        <h2 class="title-font main-color-one-color h1">آخرین مطالب <span class="main-color-three-color">وبلاگ </span>
                        </h2>
                        <div class="Dottedsquare"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="section-title-link text-sm-end text-start">
                        <a class="btn-flat dark" href=""> مشاهده همه</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper mt-4 blog-slider-swiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="blog-item">
                        <div class="blog-item-parent">
                            <div class="blog-item-image">
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/category/1-1.jpg" alt="">
                            </div>
                            <div class="blog-item-desc">
                                <div class="blog-item-desc-parent">
                                    <div class="blog-item-title">
                                        <h5 class="title-font text-overflow-2">با بیش از سی سال سابقه خدمت به مشتریان در زمینه فروش ابزارآلات صنعتی</h5>
                                        <p class="mb-0 text-overflow-2">
                                            با بیش از سی سال سابقه خدمت به مشتریان در زمینه فروش ابزارآلات صنعتی و کارگاهی را دارا می باشد و با گردهم آوردن متخصصان این عرصه بالغ بر ده سال است که برند را به صورت تخصصی در زمینه ابزار آلات عرضه کرده است.
                                        </p>
                                    </div>
                                    <div class="blog-item-link">
                                        <a href="">
                                            <span>خواندن ادامه</span>
                                            <i class="bi bi-arrow-left"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-item-date">
                                    <div class="blog-item-date-date">
                                        <i class="bi bi-clock me-1"></i>
                                        <span>1402/09/17</span>
                                    </div>
                                    <div class="blog-item-comment">
                                        <span class="title-font font-16">3</span> <span class="text-muted">نظر</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog-item">
                        <div class="blog-item-parent">
                            <div class="blog-item-image">
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/category/2-1.jpg" alt="">
                            </div>
                            <div class="blog-item-desc">
                                <div class="blog-item-desc-parent">
                                    <div class="blog-item-title">
                                        <h5 class="title-font text-overflow-2">با بیش از سی سال سابقه خدمت به مشتریان در زمینه فروش ابزارآلات صنعتی</h5>
                                        <p class="mb-0 text-overflow-2">
                                            با بیش از سی سال سابقه خدمت به مشتریان در زمینه فروش ابزارآلات صنعتی و کارگاهی را دارا می باشد و با گردهم آوردن متخصصان این عرصه بالغ بر ده سال است که برند را به صورت تخصصی در زمینه ابزار آلات عرضه کرده است.
                                        </p>
                                    </div>
                                    <div class="blog-item-link">
                                        <a href="">
                                            <span>خواندن ادامه</span>
                                            <i class="bi bi-arrow-left"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-item-date">
                                    <div class="blog-item-date-date">
                                        <i class="bi bi-clock me-1"></i>
                                        <span>1402/09/17</span>
                                    </div>
                                    <div class="blog-item-comment">
                                        <span class="title-font font-16">3</span> <span class="text-muted">نظر</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog-item">
                        <div class="blog-item-parent">
                            <div class="blog-item-image">
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/category/3-1.jpg" alt="">
                            </div>
                            <div class="blog-item-desc">
                                <div class="blog-item-desc-parent">
                                    <div class="blog-item-title">
                                        <h5 class="title-font text-overflow-2">با بیش از سی سال سابقه خدمت به مشتریان در زمینه فروش ابزارآلات صنعتی</h5>
                                        <p class="mb-0 text-overflow-2">
                                            با بیش از سی سال سابقه خدمت به مشتریان در زمینه فروش ابزارآلات صنعتی و کارگاهی را دارا می باشد و با گردهم آوردن متخصصان این عرصه بالغ بر ده سال است که برند را به صورت تخصصی در زمینه ابزار آلات عرضه کرده است.
                                        </p>
                                    </div>
                                    <div class="blog-item-link">
                                        <a href="">
                                            <span>خواندن ادامه</span>
                                            <i class="bi bi-arrow-left"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-item-date">
                                    <div class="blog-item-date-date">
                                        <i class="bi bi-clock me-1"></i>
                                        <span>1402/09/17</span>
                                    </div>
                                    <div class="blog-item-comment">
                                        <span class="title-font font-16">3</span> <span class="text-muted">نظر</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog-item">
                        <div class="blog-item-parent">
                            <div class="blog-item-image">
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/category/5-1.jpg" alt="">
                            </div>
                            <div class="blog-item-desc">
                                <div class="blog-item-desc-parent">
                                    <div class="blog-item-title">
                                        <h5 class="title-font text-overflow-2">با بیش از سی سال سابقه خدمت به مشتریان در زمینه فروش ابزارآلات صنعتی</h5>
                                        <p class="mb-0 text-overflow-2">
                                            با بیش از سی سال سابقه خدمت به مشتریان در زمینه فروش ابزارآلات صنعتی و کارگاهی را دارا می باشد و با گردهم آوردن متخصصان این عرصه بالغ بر ده سال است که برند را به صورت تخصصی در زمینه ابزار آلات عرضه کرده است.
                                        </p>
                                    </div>
                                    <div class="blog-item-link">
                                        <a href="">
                                            <span>خواندن ادامه</span>
                                            <i class="bi bi-arrow-left"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-item-date">
                                    <div class="blog-item-date-date">
                                        <i class="bi bi-clock me-1"></i>
                                        <span>1402/09/17</span>
                                    </div>
                                    <div class="blog-item-comment">
                                        <span class="title-font font-16">3</span> <span class="text-muted">نظر</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog-item">
                        <div class="blog-item-parent">
                            <div class="blog-item-image">
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/category/6-1.jpg" alt="">
                            </div>
                            <div class="blog-item-desc">
                                <div class="blog-item-desc-parent">
                                    <div class="blog-item-title">
                                        <h5 class="title-font text-overflow-2">با بیش از سی سال سابقه خدمت به مشتریان در زمینه فروش ابزارآلات صنعتی</h5>
                                        <p class="mb-0 text-overflow-2">
                                            با بیش از سی سال سابقه خدمت به مشتریان در زمینه فروش ابزارآلات صنعتی و کارگاهی را دارا می باشد و با گردهم آوردن متخصصان این عرصه بالغ بر ده سال است که برند را به صورت تخصصی در زمینه ابزار آلات عرضه کرده است.
                                        </p>
                                    </div>
                                    <div class="blog-item-link">
                                        <a href="">
                                            <span>خواندن ادامه</span>
                                            <i class="bi bi-arrow-left"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-item-date">
                                    <div class="blog-item-date-date">
                                        <i class="bi bi-clock me-1"></i>
                                        <span>1402/09/17</span>
                                    </div>
                                    <div class="blog-item-comment">
                                        <span class="title-font font-16">3</span> <span class="text-muted">نظر</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog-item">
                        <div class="blog-item-parent">
                            <div class="blog-item-image">
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/category/7-1.jpg" alt="">
                            </div>
                            <div class="blog-item-desc">
                                <div class="blog-item-desc-parent">
                                    <div class="blog-item-title">
                                        <h5 class="title-font text-overflow-2">با بیش از سی سال سابقه خدمت به مشتریان در زمینه فروش ابزارآلات صنعتی</h5>
                                        <p class="mb-0 text-overflow-2">
                                            با بیش از سی سال سابقه خدمت به مشتریان در زمینه فروش ابزارآلات صنعتی و کارگاهی را دارا می باشد و با گردهم آوردن متخصصان این عرصه بالغ بر ده سال است که برند را به صورت تخصصی در زمینه ابزار آلات عرضه کرده است.
                                        </p>
                                    </div>
                                    <div class="blog-item-link">
                                        <a href="">
                                            <span>خواندن ادامه</span>
                                            <i class="bi bi-arrow-left"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-item-date">
                                    <div class="blog-item-date-date">
                                        <i class="bi bi-clock me-1"></i>
                                        <span>1402/09/17</span>
                                    </div>
                                    <div class="blog-item-comment">
                                        <span class="title-font font-16">3</span> <span class="text-muted">نظر</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </div>
</div>
<!-- end product slider -->


















<?php get_footer(); ?>