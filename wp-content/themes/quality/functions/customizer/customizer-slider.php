<?php
function quality_slider_customizer( $wp_customize ) {

	//slider Section 
	$wp_customize->add_panel( 'quality_slider_setting', array(
		'priority'       => 500,
		'capability'     => 'edit_theme_options',
		'title'      => __('Banner Image Settings', 'quality'),
	) );
	
	$wp_customize->add_section(
        'slider_section_settings',
        array(
            'title' => __('Banner Image Settings','quality'),
            'description' => '',
			'panel'  => 'quality_slider_setting',)
    );
	
	
	$wp_customize->add_setting( 'quality_pro_options[home_feature]',array('default' => get_template_directory_uri().'/images/slider/slide.jpg',
	'type' => 'option','sanitize_callback' => 'esc_url_raw',
	));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'quality_pro_options[home_feature]',
			array(
				'type'        => 'upload',
				'label' => 'Image Upload',
				'section' => 'example_section_one',
				'settings' =>'quality_pro_options[home_feature]',
				'section' => 'slider_section_settings',
				
			)
		)
	);
	
	//Slider Title
	$wp_customize->add_setting(
	'quality_pro_options[home_image_title]', array(
        'default'        => 'Theme Feature Goes Here!',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('quality_pro_options[home_image_title]', array(
        'label'   => __('Banner Title', 'quality'),
        'section' => 'slider_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	//Slider sub title
	$wp_customize->add_setting(
	'quality_pro_options[home_image_sub_title]', array(
        'default'        => 'WordPress Premium Theme!',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('quality_pro_options[home_image_sub_title]', array(
        'label'   => __('Banner Sub Title', 'quality'),
        'section' => 'slider_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	//Slider Banner discription
	$wp_customize->add_setting(
	'quality_pro_options[home_image_description]', array(
        'default'        => 'WordPress Premium Theme!',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('quality_pro_options[home_image_description]', array(
        'label'   => __('Banner Description', 'quality'),
        'section' => 'slider_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	 }
	add_action( 'customize_register', 'quality_slider_customizer' );
	?>