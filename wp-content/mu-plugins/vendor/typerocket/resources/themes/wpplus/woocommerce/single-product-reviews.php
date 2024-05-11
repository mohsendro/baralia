<?php
/**
 * Display single product reviews (comments)
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product-reviews.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.3.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! comments_open() ) {
	return;
}

?>
<div id="reviews" class="woocommerce-Reviews">
	<div id="comments">
		<h2 class="woocommerce-Reviews-title">
			<?php
			$count = $product->get_review_count();
			if ( $count && wc_review_ratings_enabled() ) {
				/* translators: 1: reviews count 2: product name */
				$reviews_title = sprintf( esc_html( _n( '%1$s review for %2$s', '%1$s reviews for %2$s', $count, 'woocommerce' ) ), esc_html( $count ), '<span>' . get_the_title() . '</span>' );
				echo apply_filters( 'woocommerce_reviews_title', $reviews_title, $count, $product ); // WPCS: XSS ok.
			} else {
				esc_html_e( 'Reviews', 'woocommerce' );
			}
			?>
		</h2>

		<?php if ( have_comments() ) : ?>
			<ol class="commentlist">
				<?php wp_list_comments( apply_filters( 'woocommerce_product_review_list_args', array( 'callback' => 'woocommerce_comments' ) ) ); ?>
			</ol>

			<?php
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
				echo '<nav class="woocommerce-pagination">';
				paginate_comments_links(
					apply_filters(
						'woocommerce_comment_pagination_args',
						array(
							'prev_text' => is_rtl() ? '&rarr;' : '&larr;',
							'next_text' => is_rtl() ? '&larr;' : '&rarr;',
							'type'      => 'list',
						)
					)
				);
				echo '</nav>';
			endif;
			?>
		<?php else : ?>
			<p class="woocommerce-noreviews"><?php esc_html_e( 'There are no reviews yet.', 'woocommerce' ); ?></p>
		<?php endif; ?>
	</div>

	<?php if ( get_option( 'woocommerce_review_rating_verification_required' ) === 'no' || wc_customer_bought_product( '', get_current_user_id(), $product->get_id() ) ) : ?>
		<div id="review_form_wrapper">
			<div id="review_form">
				<?php
				$commenter    = wp_get_current_commenter();
				$comment_form = array(
					/* translators: %s is product title */
					'title_reply'         => have_comments() ? esc_html__( 'Add a review', 'woocommerce' ) : sprintf( esc_html__( 'Be the first to review &ldquo;%s&rdquo;', 'woocommerce' ), get_the_title() ),
					/* translators: %s is product title */
					'title_reply_to'      => esc_html__( 'Leave a Reply to %s', 'woocommerce' ),
					'title_reply_before'  => '<span id="reply-title" class="comment-reply-title">',
					'title_reply_after'   => '</span>',
					'comment_notes_after' => '',
					'label_submit'        => esc_html__( 'Submit', 'woocommerce' ),
					'logged_in_as'        => '',
					'comment_field'       => '',
				);

				$name_email_required = (bool) get_option( 'require_name_email', 1 );
				$fields              = array(
					'author' => array(
						'label'    => __( 'Name', 'woocommerce' ),
						'type'     => 'text',
						'value'    => $commenter['comment_author'],
						'required' => $name_email_required,
					),
					'email'  => array(
						'label'    => __( 'Email', 'woocommerce' ),
						'type'     => 'email',
						'value'    => $commenter['comment_author_email'],
						'required' => $name_email_required,
					),
				);

				$comment_form['fields'] = array();

				foreach ( $fields as $key => $field ) {
					$field_html  = '<p class="comment-form-' . esc_attr( $key ) . '">';
					$field_html .= '<label for="' . esc_attr( $key ) . '">' . esc_html( $field['label'] );

					if ( $field['required'] ) {
						$field_html .= '&nbsp;<span class="required">*</span>';
					}

					$field_html .= '</label><input id="' . esc_attr( $key ) . '" name="' . esc_attr( $key ) . '" type="' . esc_attr( $field['type'] ) . '" value="' . esc_attr( $field['value'] ) . '" size="30" ' . ( $field['required'] ? 'required' : '' ) . ' /></p>';

					$comment_form['fields'][ $key ] = $field_html;
				}

				$account_page_url = wc_get_page_permalink( 'myaccount' );
				if ( $account_page_url ) {
					/* translators: %s opening and closing link tags respectively */
					$comment_form['must_log_in'] = '<p class="must-log-in">' . sprintf( esc_html__( 'You must be %1$slogged in%2$s to post a review.', 'woocommerce' ), '<a href="' . esc_url( $account_page_url ) . '">', '</a>' ) . '</p>';
				}

				if ( wc_review_ratings_enabled() ) {
					$comment_form['comment_field'] = '<div class="comment-form-rating"><label for="rating">' . esc_html__( 'Your rating', 'woocommerce' ) . ( wc_review_ratings_required() ? '&nbsp;<span class="required">*</span>' : '' ) . '</label><select name="rating" id="rating" required>
						<option value="">' . esc_html__( 'Rate&hellip;', 'woocommerce' ) . '</option>
						<option value="5">' . esc_html__( 'Perfect', 'woocommerce' ) . '</option>
						<option value="4">' . esc_html__( 'Good', 'woocommerce' ) . '</option>
						<option value="3">' . esc_html__( 'Average', 'woocommerce' ) . '</option>
						<option value="2">' . esc_html__( 'Not that bad', 'woocommerce' ) . '</option>
						<option value="1">' . esc_html__( 'Very poor', 'woocommerce' ) . '</option>
					</select></div>';
				}

				$comment_form['comment_field'] .= '<p class="comment-form-comment"><label for="comment">' . esc_html__( 'Your review', 'woocommerce' ) . '&nbsp;<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" required></textarea></p>';

				comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ) );
				?>
			</div>
		</div>
	<?php else : ?>
		<p class="woocommerce-verification-required"><?php esc_html_e( 'Only logged in customers who have purchased this product may leave a review.', 'woocommerce' ); ?></p>
	<?php endif; ?>

	<div class="clear"></div>
</div>










<div class="tab-pane show fade product-comment-content" id="productComment-pane">
	<div class="comment-form">
		<h6 class="font-26 mb-2 title-font title-line-bottom">نظرت در مورد این محصول
			چیه؟</h6>
		<p class="font-14 text-muted mt-2">برای ثبت نظر، از طریق دکمه افزودن
			دیدگاه جدید
			نمایید. اگر این محصول را قبلا خریده باشید، نظر شما به عنوان خریدار
			ثبت خواهد
			شد.</p>
		<form action="">
			<div class="row gy-4">
				<div class="col-md-4">
					<div class="product-rateing position-sticky top-0">
						<div class="row gy-2 align-items-center">
							<div class="number">
								<h4 class="fw-light">متوسط امتیاز ها</h4>
								<h2>3.00</h2>
								<div class="star">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star"></i>
								</div>
							</div>
							<div class="prog-rating">
								<div class="item w-100 mb-2">
									<div class="d-flex align-items-center flex-wrap">
										<span class="font-14">5 ستاره</span>
										<div class="progress flex-grow-1 mx-2"
											style="height: 7px;">
											<div aria-valuemax="100" aria-valuemin="0"
												aria-valuenow="25" class="progress-bar"
												role="progressbar"
												style="width: 25%"></div>
										</div>
										<span class="font-14">5</span>
									</div>
								</div>
								<div class="item w-100 mb-2">
									<div class="d-flex align-items-center flex-wrap">
										<span class="font-14">4 ستاره</span>
										<div class="progress flex-grow-1 mx-2"
											style="height: 7px;">
											<div aria-valuemax="100" aria-valuemin="0"
												aria-valuenow="60" class="progress-bar"
												role="progressbar"
												style="width: 60%"></div>
										</div>
										<span class="font-14">17</span>
									</div>
								</div>
								<div class="item w-100 mb-2">
									<div class="d-flex align-items-center flex-wrap">
										<span class="font-14">3 ستاره</span>
										<div class="progress flex-grow-1 mx-2"
											style="height: 7px;">
											<div aria-valuemax="100" aria-valuemin="0"
												aria-valuenow="78" class="progress-bar"
												role="progressbar"
												style="width: 78%"></div>
										</div>
										<span class="font-14">85</span>
									</div>
								</div>
								<div class="item w-100 mb-2">
									<div class="d-flex align-items-center flex-wrap">
										<span class="font-14">2 ستاره</span>
										<div class="progress flex-grow-1 mx-2"
											style="height: 7px;">
											<div aria-valuemax="100" aria-valuemin="0"
												aria-valuenow="4" class="progress-bar"
												role="progressbar"
												style="width: 4%"></div>
										</div>
										<span class="font-14">3</span>
									</div>
								</div>
								<div class="item w-100">
									<div class="d-flex align-items-center flex-wrap">
										<span class="font-14">1 ستاره</span>
										<div class="progress flex-grow-1 mx-2"
											style="height: 7px;">
											<div aria-valuemax="100" aria-valuemin="0"
												aria-valuenow="82" class="progress-bar"
												role="progressbar"
												style="width: 82%"></div>
										</div>
										<span class="font-14">652</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-floating mb-3 form-group">
								<input class="form-control" id="floatingInputEmail1"
									placeholder="ایمیل خود را وارد کنید"
									type="email">
								<label for="floatingInputEmail1">ایمیل خود را وارد
									کنید</label>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-floating mb-3 form-group">
								<input class="form-control" id="floatingInputName"
									placeholder="نام خود را وارد کنید"
									type="text">
								<label for="floatingInputName">نام خود را وارد کنید</label>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group form-check">
								<input class="form-check-input" id="rememberComment"
									type="checkbox">
								<label class="form-check-label d-block"
									for="rememberComment">
									ذخیره
									نام، ایمیل و وبسایت من در مرورگر برای زمانی که دوباره
									دیدگاهی می‌نویسم.
								</label>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label class="my-3" for="commentRating">امتیاز شما</label>
								<fieldset class="rating" id="commentRating">
									<input id="star5" name="rating" required type="radio"
										value="5"/>
									<label for="star5">5 stars</label>
									<input id="star4" name="rating" required type="radio"
										value="4"/>
									<label for="star4">4 stars</label>
									<input id="star3" name="rating" required type="radio"
										value="3"/>
									<label for="star3">3 stars</label>
									<input id="star2" name="rating" required type="radio"
										value="2"/>
									<label for="star2">2 stars</label>
									<input id="star1" name="rating" required type="radio"
										value="1"/>
									<label for="star1">1 star</label>
								</fieldset>
							</div>
						</div>
						<div class="col-12">
							<div class="form-floating">
							<textarea class="form-control"
									id="floatingTextarea2"
									placeholder="Leave a comment here"
									style="height: 150px"></textarea>
								<label for="floatingTextarea2">متن نظر!</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group mt-3">
								<label class="text-success mb-2 fw-bold font-16"
									for="tags-pos">نقاط
									قوت</label>
								<input class="commentTags form-control" id="tags-pos"
									name="tags-pos"
									placeholder="با کلید اینتر اضافه کنید">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group mt-3">
								<label class="text-danger fw-bold mb-2 font-16"
									for="tags-neg">نقاط
									ضعف</label>
								<input class="commentTags form-control" id="tags-neg"
									name="tags-neg"
									placeholder="با کلید اینتر اضافه کنید">
							</div>
						</div>
						<div class="col-12">
							<button type="submit" class="btn main-color-two-bg px-5 btn-lg rounded-0 border-0">ثبت نظر</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="box_filter mt-5 pb-3">
		<div class="row align-items-end">
			<div class="col-md-4 bf1">
				<h4 class="title-font title-line-bottom">نظرات کاربران</h4>
			</div>
			<div class="col-md-8 bf2">
				<ul class="list-inline text-end mb-0">
					<li class="list-inline-item title-font">مرتب سازی بر اساس :</li>
					<li class="list-inline-item"><a href="#">نظر خریداران</a></li>
					<li class="list-inline-item"><a class="active_custom" href="#">مفیدترین
						نظرات</a>
					</li>
					<li class="list-inline-item"><a href="#">جدیدترین نظرات</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="box_users_comment mt-3 p-4">
		<div class="row">
			<div class="col-lg-3">
				<div class="box_message_light">
					<svg class="bi bi-cart3" fill="currentColor" height="16"
						viewBox="0 0 16 16" width="16"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
					</svg>
					خریدار این محصول
				</div>
				<div class="box_shopping mt-lg-5 mt-3">
					<span>خریداری شده از :</span>
					<p>
						<i class="bi bi-shop"></i>
						<a href="#">اسمارت الکترونیک</a>
					</p>
				</div>
				<div class="box_message_dislike mt-2">
					<i class="bi bi-hand-thumbs-down"></i>
					خرید این محصول را توصیه نمی
					کنم
				</div>
			</div>
			<div class="col-lg-9 pr-5" style="margin-top:-10px">
				<div class="box_comment_header mt-4 mt-lg-0">
					<span class="span1">نخرید</span>
					<br>
					<span class="span2">توسط مسلم ابراهیمی در تاریخ ۳۰ شهریور ۱۳۹۷
				</span>
				</div>
				<div class="border-bottom mt-3"></div>
				<div class="row mt-4">
					<div class="col-md-6 evaluation-positive">
						<ul class="list-inline">
							<span>نقاط قوت</span>
							<li class="list-inline-item ml-3">هیچی</li>
						</ul>
					</div>
					<div class="col-md-6 evaluation-negative">
						<ul class="list-inline">
							<span>نقاط ضعف</span>
							<li class="list-inline-item ml-3">کیفیت صدا , موقع زنگ اصلا
								صدا
								نمیره
							</li>
						</ul>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-md-12">
						<p class="box_text_comment">
							دوستان سلام من این رو خریدم اصلا خوب نیست صدا نمیره اونایی
							که
							میگن خوبه
							همشون
							فروشنده این بسته هستن با اکانت هایی که ساختن میام الکی نظر
							میدن
							نخرید به خدا
							نخرید اصلا خوب نیست
						</p>
					</div>
				</div>
				<div class="row justify-content-end">
					<div class="col-12">
						<div class="comments_likes">
						<span class="mr-4 mt-1">
							ایا این نظر برایتان مفید بود ؟
						</span>
							<a class="btn btn-like btn-like-like mt-1 mt-md-0 ms-2"
							href="#"><i
									class="bi bi-hand-thumbs-up"></i> 70</a>
							<a class="btn btn-like btn-like-dislike mt-1 mt-md-0"
							href="#"> <i
									class="bi bi-hand-thumbs-down"></i> 7</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="box_users_comment mt-3 p-4">
		<div class="row">
			<div class="col-lg-3">
				<div class="box_message_light">
					<svg class="bi bi-cart3" fill="currentColor" height="16"
						viewBox="0 0 16 16" width="16"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
					</svg>
					خریدار این محصول
				</div>
				<div class="box_shopping mt-lg-5 mt-3">
					<span>خریداری شده از :</span>
					<p>
						<i class="bi bi-shop"></i>
						<a href="#">اسمارت الکترونیک</a>
					</p>
				</div>
				<div class="box_message_dislike mt-2">
					<i class="bi bi-hand-thumbs-down"></i>
					خرید این محصول را توصیه نمی
					کنم
				</div>
			</div>
			<div class="col-lg-9 pr-5" style="margin-top:-10px">
				<div class="box_comment_header mt-4 mt-lg-0">
					<span class="span1">نخرید</span>
					<br>
					<span class="span2">توسط مسلم ابراهیمی در تاریخ ۳۰ شهریور ۱۳۹۷
				</span>
				</div>
				<div class="border-bottom mt-3"></div>
				<div class="row mt-4">
					<div class="col-md-6 evaluation-positive">
						<ul class="list-inline">
							<span>نقاط قوت</span>
							<li class="list-inline-item ml-3">هیچی</li>
						</ul>
					</div>
					<div class="col-md-6 evaluation-negative">
						<ul class="list-inline">
							<span>نقاط ضعف</span>
							<li class="list-inline-item ml-3">کیفیت صدا , موقع زنگ اصلا
								صدا
								نمیره
							</li>
						</ul>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-md-12">
						<p class="box_text_comment">
							دوستان سلام من این رو خریدم اصلا خوب نیست صدا نمیره اونایی
							که
							میگن خوبه
							همشون
							فروشنده این بسته هستن با اکانت هایی که ساختن میام الکی نظر
							میدن
							نخرید به خدا
							نخرید اصلا خوب نیست
						</p>
					</div>
				</div>
				<div class="row justify-content-end">
					<div class="col-12">
						<div class="comments_likes">
						<span class="mr-4 mt-1">
							ایا این نظر برایتان مفید بود ؟
						</span>
							<a class="btn btn-like btn-like-like mt-1 mt-md-0 ms-2"
							href="#"><i
									class="bi bi-hand-thumbs-up"></i> 70</a>
							<a class="btn btn-like btn-like-dislike mt-1 mt-md-0"
							href="#"> <i
									class="bi bi-hand-thumbs-down"></i> 7</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="text-center">
			<a class="btn-flat lg dark" href="">بارگذاری کامنت ها</a>
		</div>
	</div>
</div>

<div aria-labelledby="#productAnswer" class="tab-pane show fade" id="productAnswer-pane" role="tabpanel">
	<h4 class="title-font title-line-bottom">پرسش و پاسخ</h4>
	<span class="fw-bold d-block mt-2 text-muted font-12">پرسش خود را در مورد محصول مطرحنمایید</span>

	<div class="box_questions mt-4">
		<form>
			<div class="form-group">
				<textarea class="form-control"
						placeholder="هر سوالی در مورد این محصول به ذهنتان میرسید بپرسید!"
						rows="7"></textarea>
				<button class="btn main-color-three-bg mt-3 btn-lg rounded-0"
						type="submit">ثبت پرسش
				</button>
			</div>
		</form>

		<div class="box_filter mt-5 pb-3">
			<div class="row align-items-end">
				<div class="col-md-4 bf1">
					<h4 class="title-font title-line-bottom">پرسش های کاربران</h4>
				</div>
				<div class="col-md-8 bf2">
					<ul class="list-inline text-end mb-0">
						<li class="list-inline-item title-font">مرتب سازی بر اساس :</li>
						<li class="list-inline-item"><a href="#">نظر خریداران</a></li>
						<li class="list-inline-item"><a class="active_custom" href="#">مفیدترین
							نظرات</a>
						</li>
						<li class="list-inline-item"><a href="#">جدیدترین نظرات</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="box_questions mt-4">
			<div class="row bs-qu">
				<div class="col-lg-2 bq1 text-center">
					<i class="bi bi-question-circle-fill"></i>
					<br>
					<span class="span1">پرسش</span>
					<br>
					<span class="span2">فرزاد عباسقلی زاده</span>
				</div>
				<div class="col-lg-10 bq2">
					<p>سلام چطوری دو گوشی همزمان پخش میکنه ؟ </p>

					<div class="row bq-footer">
						<div class="col-md-5 col-6 my-flex-align-end">
					<span class="date"> ۱۶ مهر ۱۳۹۷
					</span>
						</div>
						<div class="col-md-7 col-6 text-end pe-0">
							<a class="d-none d-sm-block" href="#">
								<span class="link-info">به این پرسش پاسخ دهید (۱ پاسخ)</span>
							</a><a class="d-sm-none d-block" href="#">پاسخ</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row bs-qu">
				<div class="col-lg-2 bq1 text-center">
					<i class="bi bi-chat-dots-fill"></i>
					<br>
					<span class="span1">پاسخ</span>
					<br>
					<span class="span2">حسین زارع</span>
				</div>
				<div class="col-lg-10 bq2 bg-transparent">
					<p>حوه راه اندازی: (خیلی دربارش پرسیده بودند): اول: بلوتوث گوشی خود
						را
						خاموش کنید.
						دوم: لطفا
						کلید های چند منظوره در هر دو هدفون را همزمان فشار دهید
					</p>
					<div class="row align-items-center bq-footer">
						<div class="col-lg-5 col-12 my-flex-align-end">
					<span class="date">۲۲ مهر ۱۳۹۷
					</span>
						</div>
						<div class="col-lg-7 col-12 text-start p-0 ">
							<div class="comments_likes">
											<span class="mr-4 mt-1">
												ایا این نظر برایتان مفید بود ؟
											</span>
								<a class="btn btn-like btn-like-like mt-1 mt-md-0 ms-2"
								href="#"><i
										class="bi bi-hand-thumbs-up"></i> 70</a>
								<a class="btn btn-like btn-like-dislike mt-1 mt-md-0"
								href="#">
									<i class="bi bi-hand-thumbs-down"></i> 7</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="box_questions mt-4">
			<div class="row bs-qu">
				<div class="col-lg-2 bq1 text-center">
					<i class="bi bi-question-circle-fill"></i>
					<br>
					<span class="span1">پرسش</span>
					<br>
					<span class="span2">فرزاد عباسقلی زاده</span>
				</div>
				<div class="col-lg-10 bq2">
					<p>سلام چطوری دو گوشی همزمان پخش میکنه ؟ </p>

					<div class="row bq-footer">
						<div class="col-md-5 col-6 my-flex-align-end">
					<span class="date"> ۱۶ مهر ۱۳۹۷
					</span>
						</div>
						<div class="col-md-7 col-6 text-end pe-0">
							<a class="d-none d-sm-block" href="#">
								<span class="link-info">به این پرسش پاسخ دهید (۱ پاسخ)</span>
							</a><a class="d-sm-none d-block" href="#">پاسخ</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row bs-qu">
				<div class="col-lg-2 bq1 text-center">
					<i class="bi bi-chat-dots-fill"></i>
					<br>
					<span class="span1">پاسخ</span>
					<br>
					<span class="span2">حسین زارع</span>
				</div>
				<div class="col-lg-10 bq2 bg-transparent">
					<p>حوه راه اندازی: (خیلی دربارش پرسیده بودند): اول: بلوتوث گوشی خود
						را
						خاموش کنید.
						دوم: لطفا
						کلید های چند منظوره در هر دو هدفون را همزمان فشار دهید
					</p>
					<div class="row align-items-center bq-footer">
						<div class="col-lg-5 col-12 my-flex-align-end">
					<span class="date">۲۲ مهر ۱۳۹۷
					</span>
						</div>
						<div class="col-lg-7 col-12 text-start p-0 ">
							<div class="comments_likes">
											<span class="mr-4 mt-1">
												ایا این نظر برایتان مفید بود ؟
											</span>
								<a class="btn btn-like btn-like-like mt-1 mt-md-0 ms-2"
								href="#"><i
										class="bi bi-hand-thumbs-up"></i> 70</a>
								<a class="btn btn-like btn-like-dislike mt-1 mt-md-0"
								href="#">
									<i class="bi bi-hand-thumbs-down"></i> 7</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container mt-4">
			<div class="text-center">
				<a class="btn-flat lg dark" href="">بارگذاری کامنت ها</a>
			</div>
		</div>

	</div>
</div>