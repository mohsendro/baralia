<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<div class="col-lg-4">
    <div class="advert-item">
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
        <div class="advert-item-title">
            <h4><?php echo $term->name; ?></h4>
        </div>
        </a>
    </div>
</div>