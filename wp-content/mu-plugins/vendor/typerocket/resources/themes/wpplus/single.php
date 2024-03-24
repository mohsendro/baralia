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

    $cat_terms = get_the_terms($post->ID, 'category');
    $tag_terms = get_the_terms($post->ID, 'post_tag');

    $category = new \App\Models\Category;
    $cat_id = get_post_meta($post->ID, 'rank_math_primary_category', true);
    if( ! $cat_id ) {
        $cat_id = get_the_category($post->ID);
        $cat_id = $cat_id[0]->term_id;
    }
    $cat_term = get_term($cat_id);
    $related_posts = $category->findById($cat_id)->posts()->take($option, 0)->get();
?>

<?php get_header(); ?>

<!-- start content -->
<div class="content">
    <?php // get_template_part( 'components/blog', 'menu' ); ?>

    <div class="blog-single-title content-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <h1 class="h3 title-font"><?php echo $post->post_title; ?></h1>

                    <!-- <div class="bread-crumb blog-single-title-bread py-4">
                        <nav aria-label="breadcrumb" class="my-lg-0 my-2">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#" class="font-14 text-white">خانه</a></li>
                                <li class="breadcrumb-item"><a href="#" class="font-14 text-white">وبلاگ</a></li>
                                <li class="breadcrumb-item"><a href="#" class="font-14 text-white">تکنولوژی</a></li>
                                <li class="breadcrumb-item active main-color-one-color font-14 fw-bold" aria-current="page">
                                    بازاریابی حسی راهی ساده و کم هزینه برای افزایش فروش
                                </li>
                            </ol>
                        </nav>
                    </div> -->

                </div>
                <div class="col-lg-3">
                    <div class="blog-single-title-thumbnail">
                        <?php if( has_post_thumbnail($post->ID) ): ?>
                            <?php echo get_the_post_thumbnail( $post->ID, "baralia_single_page_thumbnail", array( 'loading' => 'lazy', 'class' => 'img-thumbnail rounded-0' ) ); ?>
                        <?php else: ?>
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>/resources/assets/img/placeholder.webp" class="img-thumbnail rounded-0">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-single-contents">
        <div class="container-fluid">
            <div class="row gy-4">
                <div class="col-lg-9">
                    <div class="content-box">
                        <div class="container-fluid">
                            <div class="blog-single-content-meta">
                                <div class="blog-content-meta-detail">
                                    <div class="row gy-4">
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="blog-content-meta-detail-item">
                                                <i class="bi bi-stack"></i>
                                                <h6>دسته بندی: </h6>
                                                <?php if( $cat_terms ): ?>
                                                    <a href="<?php echo get_home_url() . '/category/' . trailingslashit($cat_terms[0]->slug); ?>"><?php echo $cat_terms[0]->name; ?></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="blog-content-meta-detail-item">
                                                <i class="bi bi-clock"></i>
                                                <h6>زمان مطالعه: </h6>
                                                <span><?php echo ceil(strlen($post->post_content) / 3600); ?> دقیقه</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="blog-content-meta-detail-item">
                                                <i class="bi bi-calendar-check"></i>
                                                <h6>آخرین بروزرسانی: </h6>
                                                <span><?php // echo parsidate("j F Y", $post->post_modified_gmt); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="blog-content-meta-detail-item">
                                                <i class="bi bi-send"></i>
                                                <h6>نظرات: </h6>
                                                <span><?php echo $post->comment_count; ?> نظر</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-single-content">
                                <div class="pweb_product_content">
                                    <?php if( $post->post_content ): ?>
                                        <?php the_content(); ?>
                                    <?php else: ?>
                                        <?php if($post->post_excerpt): ?>
                                            <p class="expert"><?php echo $post->post_excerpt; ?></p>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 ">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>

    <?php comments_template( '/comments-post.php' ); ?>
</div>
<!-- end content -->

<?php get_footer(); ?>