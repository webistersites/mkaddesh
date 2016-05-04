<?php if ( post_password_required() ) : ?>
<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'quality' ); ?></p>
<?php return; endif; ?>
<?php if ( have_comments() ) : ?>
<div class="qua_comment_section">
  <div class="qua_comment_title">
    <h3><i class="fa fa-comments"></i>
      <?php echo comments_number('No Comments', '1 Comment', '% Comments'); ?>
    </h3>
  </div>
  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>		
  <?php endif; ?>
  <?php wp_list_comments( array( 'callback' => 'quality_comment' ) ); ?>
</div>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
<nav id="comment-nav-below">
  <h1 class="assistive-text"><?php _e( 'Comment navigation', 'quality' ); ?></h1>
  <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'quality' ) ); ?></div>
  <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'quality' ) ); ?></div>
</nav>
<?php endif;  ?>
<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : 
  //_e("Comments Are Closed!!!",'quality');
  ?>
<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php _e("You must be",'quality'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php _e("logged in",'quality')?></a> <?php _e("to post a comment",'quality'); ?></p>
<?php else : ?>
<div class="qua_comment_form_section">
  <?php  
    $fields=array(
    'author' => '<div class="qua_form_group"><label>' .__('Name','quality').'<small>*</small></label><input class="qua_con_input_control" name="author" id="author" value="" type="text"/></div>',
    'email' => '<div class="qua_form_group"><label>'.__('Email','quality').'<small>*</small></label><input class="qua_con_input_control" name="email" id="email" value=""   type="email" ></div>',		
    );
    function my_fields($fields) { 
    return $fields;
    }
    add_filter('comment_form_default_fields','my_fields');
    $defaults = array(
    'fields'=> apply_filters( 'comment_form_default_fields', $fields ),
    'comment_field'=> '<div class="qua_form_group"><label>'.__('Comment','quality').'</label>
    <textarea id="comments" rows="5" class="qua_con_textarea_control" name="comment"></textarea></div>',		
    'logged_in_as' => '<p class="logged-in-as">' . __( "Logged in as ",'quality' ).'<a href="'. admin_url( 'profile.php' ).'">'.$user_identity.'</a>'. '<a href="'. wp_logout_url( get_permalink() ).'" title="Log out of this account">'.__(" Log out?",'quality').'</a>' . '</p>',
    'id_submit'=> 'qua_send_button',
    'label_submit'=>__( 'Post Comment','quality'),
    'comment_notes_after'=> '',
	'comment_notes_before'=>'',
    'title_reply'=> '<h2>'.__( 'Leave a Reply','quality').'</h2>',
    'id_form'=> 'action'
    );
    comment_form($defaults);?>						
</div>
<?php endif; // If registration required and not logged in ?>
<?php endif;  ?>