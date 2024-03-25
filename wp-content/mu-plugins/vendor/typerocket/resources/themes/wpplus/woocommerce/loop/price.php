<?php
/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>

<?php $product_type = $product->get_type(); ?>
<?php if( $product_type == 'simple' ): ?>
	<div class="product-box-price">
		<?php if( $product->get_regular_price() ): ?>
			<div class="product-box-price-price">
				<h5 class="title-font main-color-one-color h2 mb-0"><?php echo $product->get_regular_price(); ?> 
					<span class="mb-0 text-muted-two"><?php echo get_woocommerce_currency_symbol(); ?></span>
				</h5>
			</div>
		<?php elseif( $product->get_regular_price() == 0 ): ?>
			<div class="product-box-price-price">
				<h5 class="title-font main-color-one-color h2 mb-0">رایگان</h5>
			</div>
		<?php else: ?>
			<div class="product-box-price-price">
				<h5 class="title-font main-color-one-color h2 mb-0">تماس بگیرید</h5>
			</div>
		<?php endif; ?>
		<?php if( $product->is_on_sale() ): ?>
			<div class="product-box-offer-discount">
				<del><?php echo $product->get_sale_price(); ?></del>
			</div>
		<?php endif; ?>	
	</div>
<?php elseif( $product_type == 'variable' ): ?>
	<?php
		$min_variation_price = $product->get_variation_price( 'min', true ) ? $product->get_variation_price( 'min', true ) : 0;
		$max_variation_price = $product->get_variation_price( 'max', true ) ? $product->get_variation_price( 'max', true ) : 0;
	?>
	<?php if( $min_variation_price && $max_variation_price ): ?>
		<div class="product-box-price-price">
			<h5 class="title-font main-color-one-color h2 mb-0">
				<?php echo $min_variation_price; ?> 
				<span class="mb-0 text-muted-two">الی</span> 
				<?php echo $max_variation_price; ?>
				<span class="mb-0 text-muted-two"><?php echo get_woocommerce_currency_symbol(); ?></span>
			</h5>
		</div>
	<?php else: ?>	
		<div class="product-box-price-price">
			<h5 class="title-font main-color-one-color h2 mb-0">تماس بگیرید</h5>
		</div>
	<?php endif; ?>	
<?php elseif( $product_type == 'grouped' ): ?>
	<?php if( $product->get_price_html() ): ?>
		<div class="product-box-price-price">
			<h5 class="title-font main-color-one-color h2 mb-0"><?php echo $product->get_price_html(); ?> 
				<!-- <span class="mb-0 text-muted-two"><?php //echo get_woocommerce_currency_symbol(); ?></span> -->
			</h5>
		</div>
	<?php else: ?>
		<div class="product-box-price-price">
			<h5 class="title-font main-color-one-color h2 mb-0">تماس بگیرید</h5>
		</div>
	<?php endif; ?>
<?php elseif( $product_type == 'external' ): ?>
	<?php if( $product->get_price_html() ): ?>
		<div class="product-box-price-price">
			<h5 class="title-font main-color-one-color h2 mb-0"><?php echo $product->get_price_html(); ?> 
				<!-- <span class="mb-0 text-muted-two"><?php //echo get_woocommerce_currency_symbol(); ?></span> -->
			</h5>
		</div>
	<?php else: ?>
		<div class="product-box-price-price">
			<h5 class="title-font main-color-one-color h2 mb-0">تماس بگیرید</h5>
		</div>
	<?php endif; ?>
<?php endif; ?>