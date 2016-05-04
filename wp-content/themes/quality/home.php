<?php 
		if('page' == get_option('show_on_front')){ get_template_part('index');}
		else {get_header();
		$quality_pro_options=theme_data_setup(); 
		$current_options = wp_parse_args(  get_option( 'quality_pro_options', array() ), $quality_pro_options );
		//****** get index static banner  ********
		get_template_part('index', 'static');			
		//****** get index service  *********/
		if (  $current_options['service_enable'] == true ) {
		get_template_part('index', 'service');
		}
		//****** get index Projects  *********/
		if (  $current_options['home_projects_enabled'] == true ) {
		get_template_part('index', 'projects');
		}
		//****** get index Blog  *********/
		if (  $current_options['home_blog_enabled'] == true ) {
		get_template_part('index', 'blog');
		}		
		get_footer();
		}
?>