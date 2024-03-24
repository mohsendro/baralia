<?php

if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.

// Comments List Callback 
function comments_list_callback($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
    <div <?php //comment_class('box_users_comment mt-3 p-4'); ?> id="comment-<?php comment_ID(); ?>" class="box_users_comment mt-3 p-4">
        <div class="box_comment_header">
            <span class="span1"><?php echo get_comment_author_link(); ?></span>
            <div class="d-flex align-items-center mt-3">
                <!-- <img src="assets/img/user.png" alt="" width="50" class="me-3"> -->
                <?php echo get_avatar($comment,$args['avatar_size'],null,null,array('class' => array('img-responsive', 'img-circle') )); ?>
                <span class="span2 d-block"><?php printf(__('%1$s at %2$s', 'your-text-domain'), get_comment_date(),  get_comment_time()) ?></span>
            </div>
        </div>
        <div class="border-bottom mt-3"></div>
        <div class="row mt-4">
            <div class="col-md-12">
                <p class="box_text_comment"><?php comment_text(); ?></p>
            </div>
        </div>
    </div>
<?php }

// Movement Fields From Comments
function move_comment_field_comment_callback( $fields ) {

    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;

}
add_filter( 'comment_form_fields', 'move_comment_field_comment_callback' );

// Remove 'url' Field
function remomve_url_field_comment_callback($fields) {

    if(isset($fields['url']))
    unset($fields['url']);
    return $fields;
 
 }
 add_filter('comment_form_default_fields', 'remomve_url_field_comment_callback');