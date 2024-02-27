<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php get_header(); ?>

<!-- start content -->
<div class="content">
    <div class="container-fluid">
        <div class="content-box">
            <div class="container-fluid">
                <div class="text-center py-3">
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/404.svg" alt="">
                    <h1 class="title-font display-1 mt-4">404</h1>
                    <h5>صفحه مورد نظر شما یافت نشد.</h5>
                    <a href="<?php echo get_home_url(); ?>" class="btn main-color-two-bg rounded-0 mt-4 btn-lg">فروشگاه</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end content -->

<?php get_footer(); ?>