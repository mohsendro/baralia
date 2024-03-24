<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
 
if( $product->get_image_id() || $product->get_gallery_image_ids() ) {

	$images = [];
	if( $product->get_image_id() ) {
		$images[] = intval($product->get_image_id());
	} else {
		// $images[] = intval(wc_placeholder_img());
	}

	if( $product->get_gallery_image_ids() ) {
		foreach( $product->get_gallery_image_ids() as $src ) {
			$images[] = $src;
		}
	}
	
}
?>

<?php if( $images ): ?>
	<div class="swiper product-gallery">
		<div class="swiper-wrapper" title="برای بزرگنمایی تصویر دابل کلیک کنید">
			<?php foreach ($images as $image): ?>
				<div class="swiper-slide">
					<div class="swiper-zoom-container">
						<img class="img-fluid" src="<?php echo wp_get_attachment_image_url($image); ?>"/>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="swiper-button-next d-none d-lg-flex"></div>
		<div class="swiper-button-prev d-none d-lg-flex"></div>
		<div class="swiper-pagination d-none d-lg-block"></div>
	</div>
	<div class="swiper product-gallery-thumb" thumbsSlider="">
		<div class="swiper-wrapper">
			<?php foreach ($images as $image): ?>
				<div class="swiper-slide">
					<img class="img-fluid" src="<?php echo wp_get_attachment_image_url($image); ?>"/>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
<?php else: ?>
	<div class="swiper product-gallery">
		<div class="swiper-wrapper" title="برای بزرگنمایی تصویر دابل کلیک کنید">
			<div class="swiper-slide">
				<div class="swiper-zoom-container">
					<?php echo wc_placeholder_img(); ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>