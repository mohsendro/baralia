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
				<h5 class="title-font main-color-one-color h2 mb-0">
					<?php echo number_format($product->get_regular_price(), 0, wc_get_price_decimal_separator(), wc_get_price_thousand_separator()); ?>
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
		<div class="product-box-price">
			<div class="product-box-price-price">
				<h5 class="title-font main-color-one-color h2 mb-0">
					<?php echo number_format($min_variation_price, 0, wc_get_price_decimal_separator(), wc_get_price_thousand_separator()); ?> 
					<span class="mb-0 text-muted-two">الی</span> 
					<?php echo number_format($max_variation_price, 0, wc_get_price_decimal_separator(), wc_get_price_thousand_separator());?>
					<span class="mb-0 text-muted-two"><?php echo get_woocommerce_currency_symbol(); ?></span>
				</h5>
			</div>
		</div>
	<?php else: ?>	
		<div class="product-box-price">
			<div class="product-box-price-price">
				<h5 class="title-font main-color-one-color h2 mb-0">تماس بگیرید</h5>
			</div>
		</div>
	<?php endif; ?>	
<?php elseif( $product_type == 'grouped' ): ?>
	<?php
		$children_ids = $product->get_children();
		$min_price = $max_price = 0;
	
		foreach( $children_ids as $child_id ) {
			$child_product = wc_get_product( $child_id );		
			$price = $child_product->get_price();
	
			// Update min and max prices
			if( $min_price == 0 || $price < $min_price ) {
				$min_price = $price;
			}
			if( $price > $max_price ) {
				$max_price = $price;
			}
		}
	?>
	<?php if( $min_price || $max_price ): ?>
		<div class="product-box-price">
			<div class="product-box-price-price">
				<h5 class="title-font main-color-one-color h2 mb-0">
					<?php echo number_format(intval($min_price), 0, wc_get_price_decimal_separator(), wc_get_price_thousand_separator()); ?> 
					<span class="mb-0 text-muted-two">الی</span> 
					<?php echo number_format(intval($max_price), 0, wc_get_price_decimal_separator(), wc_get_price_thousand_separator());?>
					<span class="mb-0 text-muted-two"><?php echo get_woocommerce_currency_symbol(); ?></span>
				</h5>
			</div>
		</div>
	<?php else: ?>	
		<div class="product-box-price">
			<div class="product-box-price-price">
				<h5 class="title-font main-color-one-color h2 mb-0">تماس بگیرید</h5>
			</div>
		</div>
	<?php endif; ?>
<?php elseif( $product_type == 'external' ): ?>
	<div class="product-box-price">
		<?php if( $product->get_regular_price() ): ?>
			<div class="product-box-price-price">
				<h5 class="title-font main-color-one-color h2 mb-0">
					<?php echo number_format($product->get_regular_price(), 0, wc_get_price_decimal_separator(), wc_get_price_thousand_separator()); ?>
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
<?php endif; ?>