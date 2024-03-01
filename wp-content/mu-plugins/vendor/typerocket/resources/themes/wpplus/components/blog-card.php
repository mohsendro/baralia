<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<div class="col-lg-4">
    <div class="blog-item">
        <div class="blog-item-parent">
            <div class="blog-item-image">
                <?php if( has_post_thumbnail($post->ID) ): ?>
                    <?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
                <?php else: ?>
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>/resources/assets/img/placeholder.webp" class="thumbnail">
                <?php endif; ?>
            </div>
            <div class="blog-item-desc">
                <div class="blog-item-desc-parent">
                    <div class="blog-item-title">
                        <h5 class="title-font text-overflow-2"><?php echo wp_trim_words( $post->post_title, 12, '...' ); ?></h5>
                        <p class="mb-0 text-overflow-2">
                            <?php 
                                if( $post->post_excerpt ) {
                                    echo substr( sanitize_textarea_field($post->post_excerpt), 0, 250);
                                } else {
                                    echo substr( sanitize_textarea_field($post->post_content), 0, 250);
                                }
                            ?>
                        </p>
                    </div>
                    <div class="blog-item-link">
                        <a href="<?php echo get_permalink($post->ID); ?>">
                            <span>خواندن ادامه</span>
                            <i class="bi bi-arrow-left"></i>
                        </a>
                    </div>
                </div>
                <div class="blog-item-date">
                    <div class="blog-item-date-date">
                        <i class="bi bi-clock me-1"></i>
                        <span><?php echo get_the_date('j F Y', $post->ID); ?></span>
                    </div>
                    <div class="blog-item-comment">
                        <span class="title-font font-16"><?php echo $post->comment_count; ?></span> <span class="text-muted">نظر</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>