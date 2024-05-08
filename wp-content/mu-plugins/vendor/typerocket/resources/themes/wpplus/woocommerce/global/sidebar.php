<?php
/**
 * Sidebar
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/sidebar.php.
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

<?php
	// get_sidebar( 'shop' );
	/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
?>

<div class="col-lg-3 d-lg-block d-none">
	<div class="filter-items position-sticky top-0">
		<div class="container-fluid">
			<div class="filter-item">
				<h5 class="filter-item-title">فیلتر های اعمال شده</h5>
				<div class="filter-item-content">
					<a href="" class="btn-flat dark px-2 py-1 me-1 font-14 mb-2">
						<i class="bi bi-x text-danger"></i> دورس جدید</a>
					<a href="" class="btn-flat dark me-1 px-2 py-1 font-14 mb-2">
						<i class="bi bi-x text-danger"></i> شال حریر</a>
				</div>
			</div>
			<div class="filter-item">
				<h5 class="filter-item-title">دسته بندی ها</h5>
				<div class="filter-item-content">
					<form action="">
						<div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
							<div class="form-check">
								<label for="colorCheck11" class="form-check-label">موبایل <i
										class="bi bi-phone ms-1"></i></label>
								<input type="checkbox" name="" id="colorCheck11"
									class="form-check-input">
							</div>
							<div>
								<span class="fw-bold font-14">(27)</span>
							</div>
						</div>
						<div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
							<div class="form-check">
								<label for="colorCheck55" class="form-check-label">ایرپاد <i
										class="bi bi-earbuds ms-1"></i></label>
								<input type="checkbox" name="" id="colorCheck55"
									class="form-check-input">
							</div>
							<div>
								<span class="fw-bold font-14">(32)</span>
							</div>
						</div>
						<div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
							<div class="form-check">
								<label for="colorCheck44" class="form-check-label">تبلت <i
										class="bi bi-tablet ms-1"></i></label>
								<input type="checkbox" name="" id="colorCheck44"
									class="form-check-input">
							</div>
							<div>
								<span class="fw-bold font-14">(14)</span>
							</div>
						</div>
						<div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
							<div class="form-check">
								<label for="colorCheck33" class="form-check-label">هدست <i
										class="bi bi-headset ms-1"></i></label>
								<input type="checkbox" name="" id="colorCheck33"
									class="form-check-input">
							</div>
							<div>
								<span class="fw-bold font-14">(8)</span>
							</div>
						</div>
						<button type="submit" class="btn-outline-site">اعمال فیلتر</button>
					</form>
				</div>
			</div>
			<div class="filter-item">
				<h5 class="filter-item-title">قیمت</h5>
				<div class="filter-item-content">
					<form action="" method="get">
						<div class="form-group">
							<input type="range" class="catRange" name="range[]">
						</div>
						<div class="row">
							<div class="col-6">
								<input type="number" name=""  min="1500000"
									class="form-control input-range-filter" placeholder="از 1500000">
							</div>
							<div class="col-6">
								<input type="number" name=""  min="1500000" max="3000000"
									class="form-control input-range-filter" placeholder="از 3000000">
							</div>
						</div>
						<button type="submit" class="btn-outline-site mt-3">اعمال فیلتر</button>

					</form>
				</div>
			</div>
			<div class="filter-item">
				<h5 class="filter-item-title">رنگ محصول</h5>
				<div class="filter-item-content">
					<form action="">
						<div class="product-meta-color-items">
							<input type="radio" class="btn-check" name="options" id="option11"
								autocomplete="off" checked>
							<label class="btn btt-light" for="option11">
								<span style="background-color: #c00;"></span>
								قرمز
							</label>

							<input type="radio" class="btn-check" name="options" id="option22"
								autocomplete="off">
							<label class="btn btt-light" for="option22">
								<span style="background-color: #111;"></span>
								مشکی
							</label>

							<input type="radio" class="btn-check" name="options" id="option33"
								autocomplete="off">
							<label class="btn btt-light" for="option33">
								<span style="background-color: #00cc5f;"></span>
								سبز
							</label>

							<input type="radio" class="btn-check" name="options" id="option44"
								autocomplete="off">
							<label class="btn btt-light" for="option44">
								<span style="background-color: #1b69f0;"></span>
								آبی
							</label>

							<input type="radio" class="btn-check" name="options" id="option55"
								autocomplete="off">
							<label class="btn btt-light" for="option55">
								<span style="background-color: #891bf0;"></span>
								بنفش
							</label>

							<input type="radio" class="btn-check" name="options" id="option66"
								autocomplete="off">
							<label class="btn btt-light" for="option66">
								<span style="background-color: #f0501b;"></span>
								نارنجی
							</label>
						</div>
						<button type="submit" class="btn-outline-site">اعمال فیلتر</button>
					</form>
				</div>
			</div>
			<div class="filter-item">
				<h5 class="filter-item-title">سایز محصول</h5>
				<div class="filter-item-content">
					<form action="">
						<div class="product-box-size pro-var-responsive">
							<h5 class="font-16 my-2">
								انتخاب سایز کالا
							</h5>
							<ul>
								<li><a class="active" href="">40</a></li>
								<li><a href="">41</a></li>
								<li><a href="">42</a></li>
								<li><a href="">43</a></li>
								<li><a href="">44</a></li>
								<li><a href="">45</a></li>
								<li><a href="">46</a></li>
								<li><a href="">47</a></li>
								<li><a href="">48</a></li>
								<li><a href="">lg</a></li>
								<li><a href="">xl</a></li>
								<li><a href="">xxl</a></li>
								<li><a href="">3xl</a></li>
								<li><a href="">4xl</a></li>
							</ul>
						</div>
						<button type="submit" class="btn-outline-site">اعمال فیلتر</button>
					</form>
				</div>
			</div>
			<?php dynamic_sidebar( 'shop-sidebar' ); ?>
		</div>
	</div>
</div>