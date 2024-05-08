<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php /* Template Name: قالب صفحه درباره ما */ ?>

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

<!-- start content -->
<div class="content">
    <div class="about-us">
        <div class="container-fluid">
            <div class="content-box">
                <div class="container-fluid">
                    <div class="row align-items-center gy-3">
                        <div class="col-lg-6">
                            <div class="about-us-desc">
                                <div class="about-us-title">
                                    <div class="about-us-title">
                                        <p>فروشگاه</p>
                                        <h4>بارالیا | Baralia</h4>
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
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-us-image text-lg-end text-center">
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/about-us.png" alt="">
                            </div>
                        </div>
                    </div>

                    <h3 class="title-font text-center my-4 title-line-bottom-center">سوالات متداول</h3>
                    <div class="about-us-faq">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                        نحوه ی خرید از سایت به چه صورته؟
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne" style="">
                                    <div class="accordion-body">
                                       <p>
                                           لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                                           گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است،
                                       </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        شرایط بازگشت وجه به چه صورت است؟
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo" style="">
                                    <div class="accordion-body">
                                        <p>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                                            گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، لورم
                                            ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک
                                            است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، ده از
                                            طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                            است،
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        ارسال محصول چه مقدار زمان می برد؟
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree" style="">
                                    <div class="accordion-body">
                                        <p>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                                            گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در .
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <h3 class="title-font text-center my-4 title-line-bottom-center">نماد های ما</h3>

                    <nav class="navbar navbar-expand justify-content-center ">
                        <ul class="navbar-nav ">
                            <li class="nav-item footer-namad-item"><a href="" class="nav-link text-muted-two"><img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/namad-01.png" alt=""></a></li>
                            <li class="nav-item footer-namad-item"><a href="" class="nav-link text-muted-two"><img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/namad-02.png" alt=""></a></li>
                            <li class="nav-item footer-namad-item"><a href="" class="nav-link text-muted-two"><img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/namad-03.png" alt=""></a></li>
                            <li class="nav-item footer-namad-item"><a href="" class="nav-link text-muted-two"><img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/enamad.png" alt=""></a></li>
                            <li class="nav-item footer-namad-item"><a href="" class="nav-link text-muted-two"><img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/rezi.png" alt=""></a></li>
                        </ul>
                    </nav>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- end content -->

<?php get_footer(); ?>