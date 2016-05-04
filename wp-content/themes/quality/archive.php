<?php
  get_header(); ?>
<div class="page-seperator"></div>
<!-- Page Title Section ---->
<div class="container">
  <div class="row">
    <?php the_post(); ?>
    <div class="qua_page_heading">
      <h1>
        <?php if ( is_day() ) : ?>
        <?php  _e( "Daily Archives:", 'quality' ); echo (get_the_date()); ?>
        <?php elseif ( is_month() ) : ?>
        <?php  _e( "Monthly Archives:", 'quality' ); echo (get_the_date( 'F Y' )); ?>
        <?php elseif ( is_year() ) : ?>
        <?php  _e( "Yearly Archives:", 'quality' );  echo (get_the_date( 'Y' )); ?>
        <?php else : ?>
        <?php _e( "Blog Archives", 'quality' ); ?>
        <?php endif; ?>	
        <?php if(get_post_meta( get_the_ID(), 'post_description', true ) != '' ) { ?>
        <p><?php echo get_post_meta( get_the_ID(), 'post_description', true ) ; ?></p>
        <?php } ?>
        <div class="qua-separator" id=""></div>
      </h1>
    </div>
  </div>
</div>
<!-- /Page Title Section ---->
<div class="container">
  <div class="row qua_blog_wrapper">
    <!--Blog Content-->
    <div class="<?php if( is_active_sidebar('sidebar-primary')) { echo "col-md-8"; } else { echo "col-md-12"; } ?>">
      <?php while(have_posts()):the_post();
        global $more;
        $more = 0; ?>
      <div class="qua_blog_section"  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="qua_blog_post_img">
          <?php $defalt_arg =array('class' => "img-responsive"); ?>
          <?php if(has_post_thumbnail()): ?>
          <a  href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('webriti_blog_img', $defalt_arg); ?>
          </a>
          <?php endif; ?>	
        </div>
        <div class="qua_post_date">
          <span class="date"><?php echo get_the_date('j'); ?></span>
          <h6><?php echo the_time('M'); ?></h6>
        </div>
        <div class="qua_post_title_wrapper">
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <div class="qua_post_detail">
            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><i class="fa fa-user"></i><?php echo get_the_author(); ?></a>
            <a href="<?php the_permalink(); ?>"><i class="fa fa-comments"></i><?php comments_number( 'No Comments', 'one comments', '% comments' ); ?></a>
            <?php if(get_the_tag_list() != '') { ?>
            <div class="qua_tags">
              <i class="fa fa-tags"></i><a href="<?php the_permalink(); ?>"><?php the_tags('', ', ', '<br />'); ?></a>								
            </div>
            <?php }?>
          </div>
        </div>
        <div class="clear"></div>
        <div class="qua_blog_post_content">
          <p><?php the_content( __( 'Read More' , 'quality' ) ); ?></p>
		  <?php wp_link_pages( ); ?>
        </div>
      </div>
      <?php endwhile ?>
      <div class="qua_blog_pagination">
        <div class="qua_blog_pagi">					
          <?php if ( get_previous_posts_link() ): ?>
          <?php previous_posts_link(); ?>
          <?php endif; ?>					
          <?php if ( get_next_posts_link() ): ?>
          <?php next_posts_link(); ?>
          <?php endif; ?>
        </div>
        <?php if(wp_link_pages()) { wp_link_pages();  } ?>
      </div>
    </div>
    	
    <!--/Blog Content-->
    <?php get_sidebar(); ?>			
  </div>
</div>
<?php get_footer(); ?>