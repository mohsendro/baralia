<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php
    $categories = get_categories();

    $post = new \App\Models\Post;
    $where_post = [
        [
            'column'   => 'post_status',
            'operator' => '=',
            'value'    => 'publish'
        ]
    ];
    $posts = $post->findAll()->where($where_post)->orderBy('id', 'DESC')->take(4, 0)->get();
?>

<div class="position-sticky top-0">
    <?php if( $categories ): ?>
        <div class="card blog-card shadow-box mb-4">
            <div class="card-header">
                <h5 class="">دسته بندی مطالب</h5>
            </div>
            <div class="card-body pb-0">
                <div class="blog-card-items">
                    <nav class="navbar w-100 py-0">
                        <ul class="navbar-nav w-100">
                            <?php foreach($categories as $category): ?>
                                <li class="nav-item">
                                    <a href="<?php echo home_url('category/' . $category->slug); ?>" class="nav-link mct-hover"><?php echo $category->cat_name; ?><span><?php echo $category->category_count; ?></span></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if( $posts ): ?>
        <div class="card blog-card shadow-box mb-4">
            <div class="card-header">
                <h5 class="">آخرین مطالب</h5>
            </div>
            <div class="card-body pb-0">
                <nav class="navbar">
                    <ul class="navbar-nav">
                        <?php foreach( $posts as $post ): ?>
                            <!-- Component Sidebar Card Start -->
                            <?php get_template_part( 'components/sidebar', 'card' ); ?>
                            <!-- Component Sidebar Card End -->
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </div>
    <?php endif; ?>

    <div class="card blog-card shadow-box d-lg-block d-none">
        <div class="card-header">
            <h5 class="">تبلیغات</h5>
        </div>
        <div class="card-body p-3">
            <div class="blog-card-items">
                <img src="<?php echo TYPEROCKET_DIR_URL; ?>/resources/assets/img/bonrailco-1.gif" class="w-100" alt="">
            </div>
        </div>
    </div>

    <?php dynamic_sidebar( 'blog-sidebar' ); ?>
</div>