<?php
/**
 * Show messages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/notices/notice.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! $notices ) {
	return;
}
?>

<!-- start message notices -->
<div class="container-fluid">
	<div class="alert alert-info text-right rounded-0 woocommerce-info">
		<ul class="m-0">
			<?php foreach ( $notices as $notice ) : ?>
				<li>
					<?php echo wc_kses_notice( $notice['notice'] ); ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
<!-- end message notices -->