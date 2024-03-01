<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<li class="nav-item">
    <a href="" class="nav-link">
        <div class="mini-blog-item">
            <div class="image">
                <?php if( has_post_thumbnail($post->ID) ): ?>
                    <?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
                <?php else: ?>
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>/resources/assets/img/placeholder.webp" class="thumbnail">
                <?php endif; ?>
            </div>
            <div class="d-flex align-items-start desc flex-wrap flex-column justify-content-between">
                <h6 class="title mct-hover"><?php echo wp_trim_words( $post->post_title, 12, '...' ); ?></h6>
                <div class="d-flex align-items-center">
                    <p class="text-muted mb-0"><?php echo get_the_date('j F Y', $post->ID); ?></p>
                    <div class="text-end ms-2"><i class="bi bi-arrow-left main-color-one-color"></i></div>
                </div>
            </div>
        </div>
    </a>
</li>