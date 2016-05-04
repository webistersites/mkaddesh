<?php	
add_action( 'widgets_init', 'quality_widgets_init');
function quality_widgets_init() {
/*sidebar*/
register_sidebar( array(
		'name' => __( 'Sidebar', 'quality' ),
		'id' => 'sidebar-primary',
		'description' => __( 'The primary widget area', 'quality' ),
		'before_widget' => '<div class="qua_sidebar_widget" >',
		'after_widget' => '</div>',
		'before_title' => '<div class="qua_sidebar_widget_title"><h2>',
		'after_title' => '</h2><div class="qua-separator-small spacer"></div></div>',
	) );
}	                     
?>