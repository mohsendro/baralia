<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php global $product; ?>

<div class="swiper-slide">
    <a href="">
        <div class="amazing-slider-item">
            <div class="row">
                <div class="col-md-1">
                    <div class="amazing-slider-item-timer">
                        <?php $date = $product->get_date_on_sale_to(); ?>
                        <div class='countdown' data-date="<?php echo date('Y-m-d', strtotime($date)); ?>" data-time="00:00">
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="amazing-slider-item-image">
                        <?php echo $product->get_image(); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="amazing-slider-item-title">
                        <h5 class="text-overflow-2 title-font">
                            <?php echo $product->get_name(); ?>
                        </h5>
                    </div>
                    <div class="amazing-slider-item-feature">
                        <ul>
                            <li>جنس: <span>پارچه ترک</span></li>
                            <li> طرح: <span>ساده</span></li>
                            <li>قد: <span>کوتاه</span></li>
                            <li>یقه: <span>شل</span></li>
                            <li>توع لباس: <span>معمولی</span></li>
                        </ul>
                    </div>
                    <div class="amazing-slider-item-discount">
                        <?php if( $product->is_on_sale() ): ?>
                            <div class="amazing-slider-item-discount-discount">
                                <del><?php echo $product->get_regular_price(); ?></del>
                                <ins>% <?php echo ceil((($product->get_regular_price() - $product->get_sale_price()) / $product->get_regular_price()) * 100); ?></ins>
                            </div>
                        <?php endif; ?>
                        <div class="amazing-slider-item-discount-price">
                            <h4><?php echo number_format($product->get_price(), 0, wc_get_price_decimal_separator(), wc_get_price_thousand_separator()); ?></h4>
                            <span> <?php echo get_woocommerce_currency_symbol(); ?> </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>