<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php /* Template Name: قالب صفحه تماس با ما */ ?>

<?php
    $queried = get_queried_object(); // OR get_the_ID()
    $queried_id = get_queried_object_id();

    $template_slug = get_page_template_slug( $queried_id );
    $template_meta = get_post_meta( $queried_id, '_wp_page_template', true );

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
    <div class="container-fluid">

        <div class="contact-title text-center">
            <h1 class="title-font title-line-bottom-center mb-3">تماس با ما</h1>
            <p class="text-muted mb-4">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="single_address">
                    <i class="bi bi-pin-map"></i>
                    <h4>آدرس شرکت</h4>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                </div>
                <div class="single_address">
                    <i class="bi bi-envelope"></i>
                    <h4>ایمیل شرکت</h4>
                    <p>Info@example.com</p>
                </div>
                <div class="single_address">
                    <i class="bi bi-telephone"></i>
                    <h4>شماره شرکت</h4>
                    <p>02112345678</p>
                </div>
                <div class="single_address">
                    <i class="bi bi-clock-history"></i>
                    <h4>ساعت کاری</h4>
                    <p>شنبه تا چهارشنبه 8 صبح تا 17 بعد از ظهر <br>پنج شنبه ها 8 صبح تا 2 بعد از ظهر</p>
                </div>
            </div>
            <div class="col-lg-9">
               <div class="content-box">
                   <div class="container-fluid">
                       <form action="">
                           <div class="row gy-4">
                               <div class="col-sm-6">
                                   <div class="comment-item">
                                       <input type="email" class="form-control" id="floatingInputEmail1">
                                       <label for="floatingInputEmail1" class="form-label label-float">ایمیل خود را وارد
                                           کنید</label>
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="comment-item">
                                       <input type="text" class="form-control" id="floatingInputName">
                                       <label for="floatingInputName" class="form-label label-float">نام خود را وارد
                                           کنید</label>
                                   </div>
                               </div>
                               <div class="col-12">
                                   <div class="comment-item">
                                       <textarea class="form-control" id="floatingTextarea2" style="height: 150px"></textarea>
                                       <label for="floatingTextarea2" class="form-label label-float">متن پیام!</label>
                                   </div>
                               </div>
                               <div class="col-12">
                                   <button type="submit" class="btn-flat dark lg">ارسال</button>
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
            </div>
        </div>

    </div>
</div>
<!-- end content -->

<?php get_footer(); ?>