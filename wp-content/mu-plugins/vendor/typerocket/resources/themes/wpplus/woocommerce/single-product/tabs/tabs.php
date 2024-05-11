<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : ?>
	<div class="woocommerce-tabs wc-tabs-wrapper">
		<div class="product-desc-tab">
			<ul class="nav" id="productTab" role="tablist">
				<?php $i == 0; ?>
				<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
					<?php 
						if( $i == 0 ) {
							$active_tab = 'active';
						} else {
							$active_tab = '';
						}
					?>
					<li class="nav-item <?php echo esc_attr( $key ); ?>_tab" id="tab-title-<?php echo esc_attr( $key ); ?>" role="tab" aria-controls="tab-<?php echo esc_attr( $key ); ?>">
						<button
							aria-selected="true" 
							class="<?php echo $active_tab; ?> d-flex waves-effect waves-light"
							data-bs-target="#tab-<?php echo esc_attr( $key ); ?>" 
							data-bs-toggle="tab" 
							role="button"
							type="button">
							<?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?>
							<?php if( $key == 'reviews' ): ?>
								<span class="badge main-color-two-bg rounded-0 ms-2"><?php echo $product->get_review_count(); ?></span>
							<?php endif; ?>
						</button>
					</li>
					<?php $i++; ?>
				<?php endforeach; ?>
			</ul>
		</div>

		<div class="content-box">
			<div class="container-fluid">
				<div class="product-descs" id="prodesc">
					<div class="product-desc">
						<div class="product-desc-tab-content">
							<div class="tab-content" id="productTabContent">
								<?php $j == 0; ?>
								<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
									<?php 
										if( $j == 0 ) {
											$active_pane = 'show active';
										} else {
											$active_pane = '';
										}
									?>
									<div class="tab-pane <?php echo $active_pane; ?> fade" id="tab-<?php echo esc_attr( $key ); ?>" aria-labelledby="tab-title-<?php echo esc_attr( $key ); ?>">
										<div class="product-desc-content">
											<?php
												if ( isset( $product_tab['callback'] ) ) {
													call_user_func( $product_tab['callback'], $key, $product_tab );
												}
											?>	
										</div>	
									</div>	
									<?php $j++; ?>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php do_action( 'woocommerce_product_after_tabs' ); ?>
	</div>
<?php endif; ?>








