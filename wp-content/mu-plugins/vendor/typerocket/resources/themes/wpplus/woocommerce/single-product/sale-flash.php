<?php
/**
 * Single Product Sale Flash
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/sale-flash.php.
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
?>

<?php global $post, $product; ?>

<?php if ( $product->is_on_sale() ) : ?>	
	<div class="product-box-price-discount">
		<span class="d-block badge main-color-three-bg text-white font-14 rounded-0"><?php echo apply_filters( 'woocommerce_sale_flash', esc_html__( 'Sale!', 'woocommerce' ), $post, $product ); ?></span>
	</div>
<?php endif; ?>

<?php
/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
