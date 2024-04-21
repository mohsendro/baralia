<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<div class="swiper-slide">
    <div class="main-category-item">
        <div class="main-category-item-image">
            <a href="<?php echo get_term_link( $term->term_id )?>">
                <?php
                    $term_thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true ); // Get the ID of the term thumbnail
                    $term_thumbnail = wp_get_attachment_image( $term_thumbnail_id, 'thumbnail' ); // Get the HTML markup for the term thumbnail                                
                ?>
                <?php if( $term_thumbnail ): ?>
                    <?php echo $term_thumbnail; ?>
                <?php else: ?>
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>/resources/assets/img/placeholder.webp" class="thumbnail">
                <?php endif; ?>
            </a>
        </div>
        <div class="main-category-item-title">
            <h6 class="title-font"><?php echo $term->name; ?></h6>
        </div>
    </div>
</div>