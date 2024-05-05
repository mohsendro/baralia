<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php
    $user = wp_get_current_user();

    $count_posts = wp_count_posts( 'product' );
	$product_count = $count_posts->publish;

    $popular_terms = get_terms(
        [
            'taxonomy' => 'product_tag',
            'parent' => 0,
            'hide_empty' => false,
            'number' => 15,
			'order' => 'ASC',
        ]

    );
?>

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
            if( is_front_page() ) {
                if( get_bloginfo('description') ) {
                    echo get_bloginfo('name') . ' | ' . get_bloginfo('description');
                } else {
                    echo get_bloginfo('name');
                }
            } else {
                wp_title();
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
                                <span class="header-cart-icon-counter"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                            </div>

                            <!-- start mini cart -->
                            <div class="min-cart">
                                <div class="mini-cart-title d-flex align-items-center justify-content-between">
                                    <div class="mini-cart-counter"><span><?php echo count(WC()->cart->get_cart()); ?></span> کالا</div>
                                    <div class="mini-cart-title-link">
                                        <a class="main-color-three-color fw-bold" href="<?php echo wc_get_cart_url(); ?>">
                                            مشاهده سبد خرید<i class="bi bi-chevron-left font-14 ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                                <?php woocommerce_mini_cart(); //wc_get_template('cart/mini-cart.php');?>
                                <div class="mini-cart-action">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mini-cart-action-price">
                                                <h6 class="font-14">مبلغ قابل پرداخت:</h6>
                                                <h5 class="main-color-two-color font-14">
                                                    <?php echo WC()->cart->get_cart_subtotal(); ?>
                                                    <!-- <span class="font-14 main-color-two-color">تومان</span> -->
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-end">
                                                <a class="btn main-color-two-bg rounded-0" href="<?php echo wc_get_cart_url(); ?>">ثبت سفارش</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end mini cart -->
                        </div>

                        <div class="header-auth ms-3">
                            <?php if( is_user_logged_in() ): ?>
                                <div class="dropdown">
                                    <a href="#register" data-bs-toggle="dropdown" aria-expanded="true" role="button"
                                        class="btn btn-white header-register border-0 rounded-pill show">
                                        <span class="fw-bold d-lg-inline-block d-none"><?php echo $user->display_name; ?> خوش آمدید</span>
                                        <i class="bi bi-person-check fs-1 d-lg-none d-inline"></i>
                                    </a>
                                    <ul class="dropdown-menu flex-column"
                                        style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 42px, 0px);"
                                        data-popper-placement="bottom-end">
                                        <li>
                                            <a href="<?php echo wc_get_account_endpoint_url( 'dashboard' ); ?>" class="dropdown-item">
                                                <i class="bi bi-house-door me-2"></i>
                                                پروفایل
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo wc_get_account_endpoint_url( 'orders' ); ?>" class="dropdown-item">
                                                <i class="bi bi-cart-check me-2"></i>
                                                سفارش های من
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo wc_get_account_endpoint_url( 'edit-account' ); ?>" class="dropdown-item">
                                                <i class="bi bi-pin-map me-2"></i>
                                                آدرس های من
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo wc_get_account_endpoint_url( 'customer-logout' ); ?>" class="dropdown-item mct-hover">
                                                <i class="bi bi-arrow-right-square me-2"></i>
                                                خروج از حساب کاربری
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            <?php else: ?>
                                <a href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>" class="btn btn-white header-register border-0 rounded-pill show">
                                    <span class="fw-bold d-lg-inline-block d-none">ورود / ثبت نام</span>
                                    <i class="bi bi-person-check fs-1 d-lg-none d-inline"></i>
                                </a>
                            <?php endif; ?> 
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-4 d-sm-block d-none order-lg-2 order-2">
                    <div class="header-top-menu">
                        <div class="header-logo">
                            <a href="<?php echo home_url(); ?>">
                                <img alt="<?php echo get_bloginfo('name'); ?>" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/logo/Baralia - Logo-05.png">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 order-3 d-lg-block d-none">
                    <div class="header-search">
                        <form action="<?php echo wc_get_page_permalink( 'shop' ); ?>">
                            <input class="header-search-txt" placeholder="جستجو از بین <?php echo $product_count; ?> محصول" type="text">
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
                                        fill-rule="evenodd"
                                    />
                                </svg>
                            </button>
                            <div class="header-logo d-sm-none d-flex">
                                <a href="<?php echo home_url(); ?>">
                                    <img alt="<?php echo get_bloginfo('name'); ?>" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/logo/Baralia - Logo-05.png">
                                </a>
                            </div>
                        </div>
                        <div aria-labelledby="responsive menu" class="offcanvas offcanvas-start" id="responsiveMenu"
                            tabindex="-1">
                            <!-- <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasRightLabel"><?php // echo get_bloginfo('name'); ?></h5>
                                <button aria-label="Close" class="btn-close" data-bs-dismiss="offcanvas"
                                    type="button"></button>
                            </div> -->
                            <div class="offcanvas-body d-flex flex-column">
                                <a class="text-center d-block mb-3" href="<?php echo home_url(); ?>">
                                    <img alt="<?php echo get_bloginfo('name'); ?>" class="img-fluid" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/logo/Baralia - Logo-05.png" width="200">
                                </a>
                                <div class="header-search pb-4 w-100">
                                    <form action="<?php echo wc_get_page_permalink( 'shop' ); ?>">
                                        <input class="header-search-txt py-3" placeholder="جستجو از بین <?php echo $product_count; ?> محصول"
                                            type="text" name="s">
                                    </form>
                                </div>
                                <?php
                                    wp_nav_menu( array(
                                        'menu'				=> "mobile_menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                                        'menu_class'		=> "rm-item-menu navbar-nav", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                                        // 'menu_id'			=> "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
                                        'container'			=> "", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                                        'container_class'	=> "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                                        'container_id'		=> "", // (string) The ID that is applied to the container.
                                        // 'fallback_cb'		=> "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
                                        // 'before'			=> "", // (string) Text before the link markup.
                                        // 'after'				=> "", // (string) Text after the link markup.
                                        // 'link_before'		=> "", // (string) Text before the link text.
                                        // 'link_after'		=> "", // (string) Text after the link text.
                                        // 'echo'				=> "", // (bool) Whether to echo the menu or return it. Default true.
                                        'depth'				=> 3, // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
                                        'walker'			=> new Mobile_Menu_Walker_Nav_Menu(), // (object) Instance of a custom walker class.
                                        'theme_location'	=> "", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                                        'item_spacing'		=> "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
                                    ) );
                                ?>
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
                    <form action="<?php echo wc_get_page_permalink( 'shop' ); ?>">
                        <input class="header-search-txt" name="s" placeholder="جستجو از بین <?php echo $product_count; ?> محصول" type="text">
                    </form>
                </div>

                <div class="search-float-tag">
                    <div class="search-float-tag-title d-flex align-items-center pt-4">
                        <i class="bi bi-tag me-3"></i>
                        <h6>بیشترین جستجو های اخیر:</h6>
                    </div>
                    <?php if( $popular_terms ): ?>
                        <div class="search-float-tag-items">
                            <ul class="navbar-nav flex-row flex-wrap w-100">
                                <?php foreach( $popular_terms as $term ): ?>
                                    <li class="nav-item"><a class="btn" href="<?php echo get_term_link( $term->term_id )?>"># <?php echo $term->name; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- end search float -->
    </header>
    <!--end header-->

    <?php get_template_part( 'components/mega', 'menu' ); ?>
    <?php // get_template_part( 'components/breadcrumb' ); ?>
    <?php // get_template_part( 'components/content' ); ?>