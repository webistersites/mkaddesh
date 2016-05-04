<?php
function appointment_header_customizer( $wp_customize ) {

/* Header Section */
	$wp_customize->add_panel( 'header_options', array(
		'priority'       => 450,
		'capability'     => 'edit_theme_options',
		'title'      => __('Header Settings', 'quality'),
	) );
	
	
	/* favicon option */
    $wp_customize->add_section( 'quality_favicon' , array(
      'title'       => __( 'Site favicon', 'quality' ),
      'priority'    => 300,
      'description' => __( 'Upload a favicon', 'quality' ),
	  'panel'  => 'header_options',
    ) );
    
    $wp_customize->add_setting('quality_pro_options[upload_image_favicon]', array(
      'sanitize_callback' => 'esc_url_raw',
	   'capability'     => 'edit_theme_options',
	   'type' => 'option', 
	   'sanitize_callback' => 'esc_url_raw',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'quality_pro_options[upload_image_favicon]', array(
      'label'    => __( 'Choose your favicon (ideal width and height is 16x16 or 32x32)', 'quality' ),
      'section'  => 'quality_favicon',
    ) ) );
	
	//Header logo setting
	$wp_customize->add_section( 'header_logo' , array(
		'title'      => __('Header Logo setting', 'quality'),
		'panel'  => 'header_options',
		'priority'   => 400,
   	) );
	$wp_customize->add_setting(
		'quality_pro_options[upload_image_logo]'
		, array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
	
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'quality_pro_options[upload_image_logo]',
			   array(
				   'label'          => __( 'Upload a 150x150 for Logo Image', 'quality' ),
				   'section'        => 'header_logo',
				   'priority'   => 50,
			   )
		   )
	);
	
	//Enable/Disable logo text
	$wp_customize->add_setting(
    'quality_pro_options[text_title]',array(
	'default'    => false,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option'
	));

	$wp_customize->add_control(
    'quality_pro_options[text_title]',
    array(
        'type' => 'checkbox',
        'label' => __('Enable/Disabe Logo','quality'),
        'section' => 'header_logo',
		'priority'   => 100,
    )
	);
	
	
	//Logo width
	
	$wp_customize->add_setting(
    'quality_pro_options[width]',array(
	'sanitize_callback' => 'sanitize_text_field',
	'default' => 200,
	'type' => 'option',
	
	));

	$wp_customize->add_control(
    'quality_pro_options[width]',
    array(
        'type' => 'text',
        'label' => __('Enter Logo Width','quality'),
        'section' => 'header_logo',
		'priority'   => 400,
    )
	);
	
	//Logo Height
	$wp_customize->add_setting(
    'quality_pro_options[height]',array(
	'sanitize_callback' => 'sanitize_text_field',
	'default' => 80,
	'type'=>'option',
	
	));

	$wp_customize->add_control(
    'quality_pro_options[height]',
    array(
        'type' => 'text',
        'label' => __('Enter Logo Height','quality'),
        'section' => 'header_logo',
		'priority'   =>410,
    )
	);
	
	
	
	//Text logo
	$wp_customize->add_setting(
	'quality_pro_options[text_title]'
    ,array(
	'default' => true,
	'sanitize_callback' => 'sanitize_text_field',
	'type' =>'option',
	
	));

	$wp_customize->add_control(
    'quality_pro_options[text_title]',
    array(
        'type' => 'checkbox',
        'label' => __('Show Logo text','quality'),
        'section' => 'header_logo',
		'priority'   => 200,
    )
	);
	
	//Custom css
	$wp_customize->add_section( 'custom_css' , array(
		'title'      => __('Custom css', 'quality'),
		'panel'  => 'header_options',
		'priority'   => 100,
   	) );
	$wp_customize->add_setting(
	'quality_pro_options[webrit_custom_css]'
		, array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=> 'option',
    ));
    $wp_customize->add_control( 'quality_pro_options[webrit_custom_css]', array(
        'label'   => __('Custom css snippet:', 'quality'),
        'section' => 'custom_css',
        'type' => 'textarea',
		'priority'   => 100,
    )); 	
	}
	add_action( 'customize_register', 'appointment_header_customizer' );
	?>