<?php
// Footer copyright section 
	function quality_copyright_customizer( $wp_customize ) {
	
	$wp_customize->add_section(
        'copyright_section_one',
        array(
            'title' => __('Footer Copyright Settings','quality'),
            'priority' => 720,
        )
    );
	
	$wp_customize->add_setting(
    'quality_pro_options[footer_copyright_text]',
    array(
         
		 'default' => sprintf (__('<p>@ Copyright 2014 Quality Center Design And Developed by <a href="%1$s" target="_blank">WordPress Theme</a><p>','quality'),'http://www.webriti.com'),
		 'type' =>'option',
		'sanitize_callback' => 'quality_copyright_sanitize_text',
    )
	
);
$wp_customize->add_control(
    'quality_pro_options[footer_copyright_text]',
    array(
        'label' => __('Copyright text','quality'),
        'section' => 'copyright_section_one',
        'type' => 'textarea',
    ));
}

function quality_copyright_sanitize_text( $input ) {

    return wp_kses_post( force_balance_tags( $input ) );

}

function quality_copyright_sanitize_html( $input ) {

    return force_balance_tags( $input );

}


add_action( 'customize_register', 'quality_copyright_customizer' );
?>