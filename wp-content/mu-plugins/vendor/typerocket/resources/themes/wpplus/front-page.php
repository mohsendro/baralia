<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php
    $queried = get_queried_object();
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

    $post = new \App\Models\Post;
    $where_post = [
        [
            'column'   => 'post_status',
            'operator' => '=',
            'value'    => 'publish'
        ]
    ];
    $posts = $post->findAll()->where($where_post)->orderBy('id', 'DESC');
    $posts_data = $posts; 
    $posts = $posts->get();

    if( $posts != null || $posts > 0 ) {

        $count = $posts->count();
        $total_page = ceil($count / $option);
        $current_page = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        $posts = $posts_data->take($option, ($current_page-1)*$option)->get();

    } else {

        $posts = [];
        $count = 0;
        $total_page = 0;
        $current_page = 0;
        
    }    
   
    $main_terms = get_terms(
        [
            'taxonomy' => 'product_cat',
            'parent' => 0,
            'hide_empty' => false,
            'number' => 3,
			'order' => 'ASC',
        ]

    );

    $second_terms = get_terms(
        [
            'taxonomy' => 'product_cat',
            // 'parent' => 0,
            'hide_empty' => false,
            'number' => 16,
			'order' => 'ASC',
        ]

    );
   
    $new_products = wc_get_products(
        [
            'limit' => 10,
            'orderby' => 'date',
            'order' => 'DESC',
            'status' => 'publish',
        ]
    );
    
    $best_products = wc_get_products(
        [
            'limit' => 10,
            'orderby' => 'date',
            'order' => 'DESC',
            'status' => 'publish',
            'meta_key' => 'total_sales',
            'meta_value_func' => 'SUM',
        ]
    );

    $contact_template = get_posts( 
        array(
            'post_type' => 'page',
            'meta_key'   => '_wp_page_template',
            'meta_value' => 'templates/contact-template.php',
            'meta_compare' => '=',
        )
    );
?>

<?php get_header(); ?>

<?php get_template_part( 'components/slider' ); ?>

<!-- start advert -->
<div class="advert d-lg-block d-none advert-under-slider py-40">
    <div class="container-fluid">
        <div class="row gx-4 gy-4">
            <?php foreach( $main_terms as $term ): ?>
                <?php get_template_part( 'components/category', 'card', $term ); ?>
            <?php endforeach; ?>
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
                        <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn-flat dark"> مشاهده همه</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-category-items mt-5">
            <div class="swiper free-mode">
                <div class="swiper-wrapper">
                    <?php foreach( $second_terms as $term ): ?>
                        <?php get_template_part( 'components/category', '', $term ); ?>
                    <?php endforeach; ?>
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
                        <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="font-16 btn-flat dark"> مشاهده همه</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-parent">
            <div class="swiper product-slider-swiper">
                <div class="swiper-wrapper ">
                    <?php foreach ($new_products as $product): ?>
                        <?php get_template_part( 'components/product', 'card' ); ?>
                    <?php endforeach; ?>
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
                        <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn-flat dark"> مشاهده همه</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper mt-4 product-slider-swiper">
            <div class="swiper-wrapper ">
                <?php foreach ($best_products as $product): ?>
                    <?php get_template_part( 'components/product', 'card' ); ?>
                <?php endforeach ?>
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
                        <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn-flat dark">مشاهده همه</a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="swiper amazing-slider-sw">
                        <div class="swiper-wrapper">
                            <?php foreach ($new_products as $product): ?>
                                <?php get_template_part( 'components/featured', 'card' ); ?>
                            <?php endforeach; ?>
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
                        <a href="<?php echo get_permalink( $contact_template[0]->ID ); ?>" class="btn-flat dark">بیشتر </a>
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
                        <a class="btn-flat dark" href="<?php echo get_post_type_archive_link( 'post' ); ?>"> مشاهده همه</a>
                    </div>
                </div>
            </div>
        </div>

        <?php if( $posts ): ?>
            <div class="swiper mt-4 blog-slider-swiper">
                <div class="swiper-wrapper">
                    <?php foreach( $posts as $post ): ?>
                        <div class="swiper-slide">
                            <!-- Component Blog Card Start -->
                            <?php get_template_part( 'components/blog', 'card' ); ?>
                            <!-- Component Blog Card End -->
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <!-- Component Not Result Start -->
                <?php get_template_part( 'components/not', 'result' ); ?>
                <!-- Component Not Result End -->
            <?php endif; ?>
            
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
<!-- end product slider -->

<?php get_footer(); ?>