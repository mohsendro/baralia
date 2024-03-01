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
?>

<?php get_header(); ?>

<!-- start content -->
<div class="content">
    <div class="container-fluid">
        <?php // get_template_part( 'components/blog', 'menu' ); ?>

        <div class="blog-items">
            <div class="section-title-title mb-4 ">
                <h2 class="title-font main-color-one-color h1">آخرین مطالب <span class="main-color-three-color">وبلاگ</span>
                </h2>
                <div class="Dottedsquare"></div>
            </div>

            <?php if( $posts ): ?>
                <div class="row g-4 mt-1">
                    <?php foreach( $posts as $post ): ?>
                        <!-- Component Blog Card Start -->
                        <?php get_template_part( 'components/blog', 'card' ); ?>
                        <!-- Component Blog Card End -->
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <!-- Component Not Result Start -->
                <?php get_template_part( 'components/not', 'result' ); ?>
                <!-- Component Not Result End -->
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- end content -->

<?php
    if( $count > 0 ):
        require TYPEROCKET_DIR_PATH . '/functions/snippets/pagination.php';
        normal_pagination(home_url($queried->post_name . '/page'), $current_page, $total_page, true);
    endif;
?>

<?php get_footer(); ?>