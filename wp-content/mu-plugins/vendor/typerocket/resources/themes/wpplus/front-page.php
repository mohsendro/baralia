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

<!-- start content -->
<div class="content">
    <div class="container-fluid">
        <div class="content-box">
            <div class="container-fluid">
                <h1>Front page</h1>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
<!-- end content -->

<?php get_footer(); ?>