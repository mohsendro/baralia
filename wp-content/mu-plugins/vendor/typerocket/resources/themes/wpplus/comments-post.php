<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php
    $queried = get_queried_object();
    $queried_id = get_queried_object_id();
?>

<?php if( have_comments() || get_comments_number($queried_id) ): ?>
    <?php
        $cpage = get_query_var( 'cpage' ) ? get_query_var( 'cpage' ) : 1;
        $comment_form = [
            'max_depth'         => 1,
            'callback'          => 'comments_list_callback',
            'per_page'          => get_option( 'comments_per_page' ),
            'page'              => $cpage,
            'reverse_top_level' => get_option( 'default_comments_page' ) === 'oldest' ? false : true,
        ];
        $comments = get_comments(array(
			'post_id' => $queried_id,
			'status' => 'approve' //Change this to the type of comments to be displayed
		));
    ?>
    <div class="blog-single-comment-items mt-4">
        <div class="container-fluid">
            <div class="content-box">
                <div class="container-fluid">
                    <h6 class="font-26 mb-3 title-font title-line-bottom">نظرات:</h6>
                    <?php    
                        wp_list_comments($comment_form, $comments); 
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php 
        $args_pagination = [
            'prev_text' => 'قبلی',
            'next_text' => 'بعدی',
            'screen_reader_text' => '',
            'aria_label' => '',
        ];
        // the_comments_pagination($args_pagination); ?>
<?php endif; ?>

<?php if( comments_open( $queried_id ) && post_type_supports( get_post_type($queried_id), 'comments' ) ): ?>
    <div class="blog-single-comment mt-4">
        <div class="container-fluid">
            <div class="content-box">
                <div class="container-fluid">
                    <?php if( ! get_option('comment_registration') ): ?>
                        <div class="comment-model-form pt-3">
                            <div class="row gy-4">
                                <div class="col-12">
                                    <?php 
                                        $comments_args = [
                                            'class_form' => 'row gy-3',
                                            'fields' => [
                                                // 'author'   => '<p class="comment-form-author"><label for="author">نام <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" autocomplete="name" required=""></p>',
                                                'author'   => '
                                                    <div class="col-sm-6">
                                                        <div class="comment-item">
                                                            <input type="text" class="form-control" id="floatingInputName author" name="author" type="text" value="" size="30" maxlength="245" autocomplete="name" required="">
                                                            <label for="floatingInputName" class="form-label label-float">نام خود را واردد</label>
                                                        </div>
                                                    </div>
                                                ',
                                                // 'email'  => '<p class="comment-form-email"><label for="email">ایمیل <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" maxlength="100" autocomplete="email" required=""></p>',
                                                'email'  => '
                                                    <div class="col-sm-6">
                                                        <div class="comment-item">
                                                            <input type="email" class="form-control" id="floatingInputEmail1 email" name="email" type="email" value="" size="30" maxlength="100" autocomplete="email" required="">
                                                            <label for="floatingInputEmail1" class="form-label label-float">ایمیل خود را وارد کنید</label>
                                                        </div>
                                                    </div>
                                                ',
                                                // 'cookies' => '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label for="wp-comment-cookies-consent">ذخیره نام، ایمیل و وبسایت من در مرورگر برای زمانی که دوباره دیدگاهی می&zwnj;نویسم.</label></p>',
                                                'cookies' => '
                                                    <div class="col-12">
                                                        <div class="comment-item d-flex align-items-center mb-3">
                                                            <input type="checkbox" class="form-check-input" id="rememberComment wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                                            <label for="rememberComment" class="form-check-label d-block">ذخیره نام، ایمیل و وبسایت من در مرورگر برای زمانی که دوباره دیدگاهی می‌نویسم.</label>
                                                        </div>
                                                    </div>
                                                ',
                                            ],
                                            // 'comment_field' => '<p class="comment-form-comment"><label for="comment">دیدگاه <span class="required">*</span></label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required=""></textarea></p>',
                                            'comment_field' => '
                                                <div class="col-12">
                                                    <div class="comment-item">
                                                        <textarea class="form-control" id="floatingTextarea2 comment" name="comment" cols="45" rows="8" maxlength="65525" required="" style="height: 150px"></textarea>
                                                        <label for="floatingTextarea2" class="form-label label-float">متن نظر!</label>
                                                    </div>
                                                </div>
                                            ',
                                            'must_log_in' => '<div class="alert alert-warning text-center mb-0" role="alert">برای نظردهی برای این مقاله باید در سایت ورود نمایید</div>',
                                            // 'logged_in_as' => '<div class="text-right text-danger mb-3">بخش‌های موردنیاز با علامت * علامت‌گذاری شده‌اند</div>',
                                            'logged_in_as' => '',
                                            'comment_notes_before' => '',
                                            'title_reply' => '<div class="col-12"><h6 class="font-26 mb-3 title-font title-line-bottom">نظرت در مورد این مطلب چیه؟</h6></div>',
                                            // 'title_reply_before' => '<div class="col-12"><h6 class="font-26 mb-3 title-font title-line-bottom">نظرت در مورد این مطلب چیه؟</h6></div>',
                                            'title_reply_to' => '<div class="col-12"><h6 class="font-26 mb-3 title-font title-line-bottom">نظرت در مورد این مطلب چیه؟</h6></div>',
                                            '' => '',
                                            '' => '',
                                            '' => '',
                                            '' => '',
                                            '' => '',
                                            'class_submit' => 'btn-flat dark lg',
                                            'label_submit' => 'ثبت نظر',
                                            'submit_field' => '<div class="col-12">%1$s %2$s</div>',
                                            'format' => 'html5',
                                        ]; 
                                        comment_form( $comments_args, $queried_id ); 
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="alert alert-warning text-center mb-0" role="alert">برای نظردهی برای این مقاله باید در سایت ورود نمایید</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="blog-single-comment mt-4">
        <div class="container-fluid">
            <div class="content-box">
                <div class="container-fluid">
                    <div class="no-comments alert alert-danger text-center mb-0" role="alert">متاسفانه اجازه نظردهی برای این مقاله وجود ندارد</div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>