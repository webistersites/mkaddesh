<?php
// code for comment
if ( ! function_exists( 'quality_comment' ) ) :
function quality_comment( $comment, $args, $depth ) 
{
	$GLOBALS['comment'] = $comment;
	//get theme data
	global $comment_data;

	//translations
	$leave_reply = $comment_data['translation_reply_to_coment'] ? $comment_data['translation_reply_to_coment'] : 
	__('Reply','quality');?>
	
          <div class="media qua_comment_box">
			<a class="pull_left_comment">
            <?php echo get_avatar($comment,$size = '60'); ?>
            </a>
           <div class="media-body">
			   <div class="qua_comment_detail">
				<h4 class="qua_comment_detail_title"><?php the_author();?></h4>
				<span class="qua_comment_date"><?php comment_date('F j, Y');?>&nbsp;<?php _e('at','quality');?>&nbsp;<?php comment_time('g:i a'); ?></span>
				<?php comment_text() ;?>
				
				<div class="reply">				
				<i class="fa fa-mail-reply"></i>&nbsp;<?php comment_reply_link(array_merge( $args, array('reply_text' => $leave_reply,'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</div>
				
				<?php if ( $comment->comment_approved == '0' ) : ?>
				<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'quality' ); ?></em>
				<br/>
				<?php endif; ?>				
				</div>
			</div>
		  </div>
<?php
}
endif;
add_filter('get_avatar','quality_add_gravatar_class');
function quality_add_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='comment_img", $class);
    return $class;
}
?>