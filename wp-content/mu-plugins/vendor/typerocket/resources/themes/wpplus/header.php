<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<!DOCTYPE html>
<html lang="<?php echo get_bloginfo('language'); ?>" 
      dir="<?php if( is_rtl() ) { echo 'rtl'; } else { echo 'ltr'; } ?>"
>
<head>
    <meta charset="<?php echo get_bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" property="og:title">
    <meta content="" property="og:type">
    <meta content="" property="og:url">
    <meta content="" property="og:image">
    <meta content="#f4f5f9" name="theme-color">

    <title>
        <?php
            if( get_bloginfo('description') ) {
                echo get_bloginfo('name') . ' | ' . get_bloginfo('description');
            } else {
                echo get_bloginfo('name');
            }
        ?>
    </title>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class('overflow'); ?> >

    <!-- start header -->
    <header>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-4 col-6 order-lg-1 order-3">
                    <div class="header-cart d-flex align-items-center">
                        <div class="header-cart-icon">
                            <div class="header-cart-icon-toggle" href="">
                                <i class="bi bi-basket fs-4"></i>
                                <span class="header-cart-icon-counter">2</span>
                            </div>

                            <!-- start mini cart -->
                            <div class="min-cart">
                                <div class="mini-cart-title d-flex align-items-center justify-content-between">
                                    <div class="mini-cart-counter"><span>1</span> کالا</div>
                                    <div class="mini-cart-title-link"><a class="main-color-three-color fw-bold" href="">
                                            مشاهده سبد خرید<i class="bi bi-chevron-left font-14 ms-2"></i> </a></div>
                                </div>
                                <div class="mini-cart-items">
                                    <div class="mini-cart-item">
                                        <div class="mini-cart-item-image">
                                            <span class="mini-cart-item-image-overlay"></span>
                                            <img alt="" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/cart-image.jpg">
                                        </div>
                                        <div class="mini-cart-item-desc">
                                            <div
                                                class="mini-cart-item-remove d-flex align-items-center justify-content-between">
                                                <span class="font-10">دونابل</span>
                                                <div><a href=""><i class="bi bi-x font-14 text-muted"></i></a></div>
                                            </div>
                                            <div class="mini-cart-item-title">
                                                <h6 class="font-12">شال زنانه دونابل مدل 225334300MC99</h6>
                                            </div>
                                            <div class="mini-cart-item-price">
                                                <div class="mini-cart-item-price-counter font-12">
                                                    <span class="">1</span> عدد
                                                </div>
                                                <div class="mini-cart-item-price-desc">
                                                    <div class="mini-cart-item-price-price">
                                                        <span>74,000</span>
                                                        <span class="text-muted-two">تومان</span>
                                                    </div>
                                                    <div class="mini-cart-item-price-discount ms-2">
                                                        <span class="main-color-one-bg font-12 p-1">56%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mini-cart-action">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mini-cart-action-price">
                                                <h6 class="font-14">مبلغ قابل پرداخت:</h6>
                                                <h5 class="main-color-two-color font-14">74,000 <span
                                                        class="font-14 main-color-two-color">تومان</span></h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-end">
                                                <a class="btn main-color-two-bg rounded-0" href="">ورود و ثبت سفارش</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end mini cart -->
                        </div>
                        <div class="header-auth ms-3">
                            <div class="dropdown">
                                <a href="#register" data-bs-toggle="dropdown" aria-expanded="true" role="button"
                                    class="btn btn-white header-register border-0 rounded-pill show">
                                    <span class="fw-bold d-lg-inline-block d-none">امیر رضایی خوش آمدید</span>
                                    <i class="bi bi-person-check fs-1 d-lg-none d-inline"></i>
                                </a>
                                <ul class="dropdown-menu flex-column"
                                    style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 42px, 0px);"
                                    data-popper-placement="bottom-end">
                                    <li><a href="" class="dropdown-item"><i
                                                class="bi bi-house-door me-2"></i>پروفایل</a>
                                    </li>
                                    <li><a href="" class="dropdown-item"><i class="bi bi-cart-check me-2"></i>سفارش های
                                            من</a></li>
                                    <li><a href="" class="dropdown-item"><i class="bi bi-pin-map me-2"></i>آدرس های
                                            من</a></li>
                                    <li><a href="" class="dropdown-item"><i class="bi bi-bell me-2"></i>پیام ها و
                                            اطلاعیه ها</a></li>
                                    <li><a href="" class="dropdown-item"><i class="bi bi-chat-dots me-2"></i>نظرات
                                            من</a></li>
                                    <li><a href="" class="dropdown-item"><i
                                                class="bi bi-question-circle me-2"></i>درخواست
                                            پشتیبانی</a></li>
                                    <li><a href="" class="dropdown-item"><i class="bi bi-heart me-2"></i>محصولات مورد
                                            علاقه</a></li>
                                    <li><a href="" class="dropdown-item"><i class="bi bi-gift me-2"></i>کد های تخفیف
                                            من</a></li>
                                    <li><a href="" class="dropdown-item mct-hover"><i
                                                class="bi bi-arrow-right-square me-2"></i>خروج از حساب کاربری</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-4 d-sm-block d-none order-lg-2 order-2">
                    <div class="header-top-menu">
                        <div class="header-logo">
                            <a href="index.html">
                                <img alt="" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/logo.png">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 order-3 d-lg-block d-none">
                    <div class="header-search">
                        <form action="">
                            <input class="header-search-txt" placeholder="جستجوی محصولات از 2560 برند" type="text">
                        </form>
                    </div>
                </div>

                <div class="col-sm-4 col-6 order-lg-5 order-1">

                    <div class="responsive-menu d-lg-none d-block">
                        <div class="d-flex align-items-center">

                            <button aria-controls="responsive menu" class="btn border-0 p-3 ps-0 btn-responsive-menu"
                                data-bs-target="#responsiveMenu" data-bs-toggle="offcanvas" type="button">
                                <svg class="bi bi-list" fill="currentColor" height="32" viewBox="0 0 16 16" width="32"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
                                        fill-rule="evenodd" />
                                </svg>
                            </button>
                            <div class="header-logo d-sm-none d-flex">
                                <a href="index.html">
                                    <img alt="" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/logo.png">
                                </a>
                            </div>
                        </div>
                        <div aria-labelledby="responsive menu" class="offcanvas offcanvas-start" id="responsiveMenu"
                            tabindex="-1">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasRightLabel">فروشگاه هناس</h5>
                                <button aria-label="Close" class="btn-close" data-bs-dismiss="offcanvas"
                                    type="button"></button>
                            </div>
                            <div class="offcanvas-body d-flex flex-column">
                                <a class="text-center d-block mb-3" href="">
                                    <img alt="" class="img-fluid" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/logo.png" width="200">
                                </a>
                                <div class="header-search pb-4 w-100">
                                    <form action="">
                                        <input class="header-search-txt py-3" placeholder="جستجوی محصولات از 2560 برند"
                                            type="text">
                                    </form>
                                </div>
                                <ul class="rm-item-menu navbar-nav">
                                    <li class="nav-item bg-ul-f7"><a class="nav-link" href="index.html">صفحه
                                            اصلی</a>
                                    </li>
                                    <li class="nav-item bg-ul-f7">
                                        <a class="nav-link" href="">گوشی موبایل</a>
                                        <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                        <ul class="navbar-nav h-0">
                                            <li class="nav-item">
                                                <a class="nav-link" href="">برند</a>
                                                <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                                <ul class="navbar-nav h-0 bg-ul-f7">
                                                    <li class="nav-item"><a class="nav-link" href="">سامسونگ</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="">هوآوی</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">شیائومی</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="">الجی</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">سونی</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="">بر اساس رده بندی</a>
                                                <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                                <ul class="navbar-nav h-0 bg-ul-f7">
                                                    <li class="nav-item"><a class="nav-link" href="">لمسی</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">دکمه ای</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="">نظامی</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item bg-ul-f7">
                                        <a class="nav-link" href="">تبلت</a>
                                        <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                        <ul class="navbar-nav h-0">
                                            <li class="nav-item">
                                                <a class="nav-link" href="">کشور</a>
                                                <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                                <ul class="navbar-nav h-0 bg-ul-f7">
                                                    <li class="nav-item"><a class="nav-link" href="">ژاپن</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">کره جنوبی</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="">آمریکایی</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="">بر اساس رده بندی</a>
                                                <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                                <ul class="navbar-nav h-0 bg-ul-f7">
                                                    <li class="nav-item"><a class="nav-link" href="">لمسی</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">دانش آموزی</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="">مخصوص بازی</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item bg-ul-f7">
                                        <a class="nav-link" href="">لپتاپ</a>
                                        <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                        <ul class="navbar-nav h-0">
                                            <li class="nav-item">
                                                <a class="nav-link" href="">برند</a>
                                                <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                                <ul class="navbar-nav h-0 bg-ul-f7">
                                                    <li class="nav-item"><a class="nav-link" href="">ایسر</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">مایکروسافت</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="">ایسوس</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">اپل</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">سونی</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="">بر اساس قیمت</a>
                                                <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                                <ul class="navbar-nav h-0 bg-ul-f7">
                                                    <li class="nav-item"><a class="nav-link" href="">ارزان</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="">اقتصادی</a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="">گران</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item bg-ul-f7">
                                        <a class="nav-link" href="">صفحات</a>
                                        <span class="showSubMenu"><i class="bi bi-chevron-left"></i></span>
                                        <ul class="navbar-nav h-0">
                                            <li><a href="index.html">صفحه اصلی</a></li>
                                            <li class="nav-item"><a class="nav-link" href="product.html">صفحه
                                                    محصول</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="category.html">صفحه دسته
                                                    بندی</a></li>
                                            <li class="nav-item"><a class="nav-link" href="cart.html">صفحه سبد
                                                    خرید</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="search.html">صفحه
                                                    جستجو</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="category-product-row.html">دسته
                                                    بندی محصولات خطی</a></li>
                                            <li class="nav-item"><a class="nav-link" href="404.html">صفحه 404</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="login.html">صفحه ورود</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="register.html">صفحه ثبت
                                                    نام</a></li>
                                            <li class="nav-item"><a class="nav-link" href="forget.html">صفحه فراموشی
                                                    رمز
                                                    عبور</a></li>
                                            <li class="nav-item"><a class="nav-link" href="blog.html">صفحه وبلاگ</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="blog-detail.html">صفحه
                                                    جزییات
                                                    وبلاگ</a></li>
                                            <li class="nav-item"><a class="nav-link" href="compare.html">صفحه مقایسه
                                                    محصول</a></li>
                                            <li class="nav-item"><a class="nav-link" href="checkout.html">پرداخت
                                                    مرحله
                                                    ای</a></li>
                                            <li class="nav-item"><a class="nav-link" href="payment-ok.html">پرداخت
                                                    موفق</a></li>
                                            <li class="nav-item"><a class="nav-link" href="payment-nok.html">پرداخت
                                                    ناموفق</a></li>
                                            <li class="nav-item"><a class="nav-link" href="product-not-found.html">محصول
                                                    ناموجود</a></li>
                                            <li class="nav-item"><a class="nav-link" href="empty-cart.html">سبد خرید
                                                    خالی</a></li>
                                            <li class="nav-item"><a class="nav-link" href="dashboard.html"> داشبورد
                                                    کاربری</a></li>
                                            <li class="nav-item"><a class="nav-link" href="order.html">سفارشات</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="favorite.html">محصولات
                                                    مورد
                                                    علاقه</a></li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="notification.html">اطلاعیه</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="comments.html">نظرات</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="address.html">آدرس ها</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="last-seen.html">آخرین
                                                    بازدید
                                                    ها</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start serach float -->
        <div class="search-float">
            <div class="container-fluid">
                <div class="search-float-close float-end pointer">
                    <i class="bi bi-x fs-1"></i>
                </div>
                <div class="search-float-form">
                    <form action="">
                        <input class="header-search-txt" placeholder="جستجوی محصولات از 2560 برند" type="text">
                    </form>
                </div>

                <div class="search-float-tag">
                    <div class="search-float-tag-title d-flex align-items-center pt-4">
                        <i class="bi bi-tag me-3"></i>
                        <h6>بیشترین جستجو های اخیر:</h6>
                    </div>
                    <div class="search-float-tag-items">
                        <ul class="navbar-nav flex-row flex-wrap w-100">
                            <li class="nav-item"><a class="btn" href="">#آویز ساعت طلا زنانه</a></li>
                            <li class="nav-item"><a class="btn" href="">#پیراهن مردانه</a></li>
                            <li class="nav-item"><a class="btn" href="">#کیف زنانه</a></li>
                            <li class="nav-item"><a class="btn" href="">#کفش ورزشی مردانه</a></li>
                            <li class="nav-item"><a class="btn" href="">#شلوار زنانه</a></li>
                            <li class="nav-item"><a class="btn" href="">#ساعت مردانه</a></li>
                            <li class="nav-item"><a class="btn" href="">#کرم مرطوب کننده</a></li>
                            <li class="nav-item"><a class="btn" href="">#شامپو مو</a></li>
                            <li class="nav-item"><a class="btn" href="">#اصلاح مو صورت</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- end search float -->
    </header>
    <!--end header-->

    <?php get_template_part( 'components/mega', 'menu' ); ?>

    <?php get_template_part( 'components/breadcrumb' ); ?>

    <?php // get_template_part( 'components/content' ); ?>