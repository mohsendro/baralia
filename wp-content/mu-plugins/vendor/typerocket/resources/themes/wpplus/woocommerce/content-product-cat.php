<?php
/**
 * The template for displaying product category thumbnails within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product-cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php $term = $category; ?>

<div class="col-lg-4">
    <div class="advert-item">
        <a href="<?php echo get_term_link( $term->term_id )?>">
            <?php
                $term_thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true ); // Get the ID of the term thumbnail
                $term_thumbnail = wp_get_attachment_image( $term_thumbnail_id, 'full' ); // Get the HTML markup for the term thumbnail                                
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


<!-- <li <?php // wc_product_cat_class( '', $category ); ?>>
	<?php
	/**
	 * The woocommerce_before_subcategory hook.
	 *
	 * @hooked woocommerce_template_loop_category_link_open - 10
	 */
	// do_action( 'woocommerce_before_subcategory', $category );

	/**
	 * The woocommerce_before_subcategory_title hook.
	 *
	 * @hooked woocommerce_subcategory_thumbnail - 10
	 */
	// do_action( 'woocommerce_before_subcategory_title', $category );

	/**
	 * The woocommerce_shop_loop_subcategory_title hook.
	 *
	 * @hooked woocommerce_template_loop_category_title - 10
	 */
	// do_action( 'woocommerce_shop_loop_subcategory_title', $category );

	/**
	 * The woocommerce_after_subcategory_title hook.
	 */
	// do_action( 'woocommerce_after_subcategory_title', $category );

	/**
	 * The woocommerce_after_subcategory hook.
	 *
	 * @hooked woocommerce_template_loop_category_link_close - 10
	 */
	// do_action( 'woocommerce_after_subcategory', $category );
	?>
</li> -->