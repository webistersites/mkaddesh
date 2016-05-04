<?php
  get_header(); ?>
<div class="page-seperator"></div>
<div class="container">
  <div class="row qua_404_wrapper">
    <div class="col-md-12 quality_404_error_section">
      <div class="error_404">
        <h2><?php _e('Error 404','quality'); ?></h2>
        <h4><?php _e('Oops! Page not found','quality'); ?></h4>
        <p><?php _e('We`re sorry, but the page you are looking for doesn`t exist.','quality'); ?></p>
        <a href="<?php echo esc_html(site_url());?>" class="qua_blog_btn"><?php _e('Go to Homepage','quality'); ?></a>
      </div>
    </div>
  </div>
</div>
<!-- 404 Error Section -->
<?php get_footer(); ?>