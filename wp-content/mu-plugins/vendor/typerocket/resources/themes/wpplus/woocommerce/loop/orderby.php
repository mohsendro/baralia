<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="category-sort mb-3">
	<div class="content-box">
		<div class="container-fluid">
			<div class="box_filter d-lg-block d-none">
				<ul class="list-inline text-start mb-0">
					<li class="list-inline-item title-font ms-0">مرتب سازی بر اساس :</li>
					<?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
						<?php
							if( isset($_GET['orderby']) && $id == $_GET['orderby'] ) {
								$class_active = 'active_custom';
							} else {
								$class_active = '';
							}
						?>
						<li class="list-inline-item"><a class="<?php echo $class_active; ?>" href="<?php echo esc_url( add_query_arg( 'orderby', $id ) ); ?>"><?php echo esc_html( $name ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="d-lg-none d-block">
				<form class="woocommerce-ordering" method="get">
					<h5 class="mb-3">مرتب سازی بر اساس</h5>
					<select name="orderby" id="" class="form-select orderby" aria-label="<?php esc_attr_e( 'Shop order', 'woocommerce' ); ?>">
						<?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
							<option value="<?php echo esc_attr( $id ); ?>" <?php selected( $orderby, $id ); ?>>
								<a href="<?php echo esc_url( add_query_arg( 'orderby', $id ) ); ?>"><?php echo esc_html( $name ); ?></a>
							</option>
						<?php endforeach; ?>
					</select>
					<input type="hidden" name="paged" value="1" />
					<?php wc_query_string_form_fields( null, array( 'orderby', 'submit', 'paged', 'product-page' ) ); ?>
				</form>
			</div>
		</div>
	</div>
</div>