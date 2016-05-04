<?php
function quality_project_customizer( $wp_customize ) {

//Home project Section
	$wp_customize->add_panel( 'quality_project_setting', array(
		'priority'       => 700,
		'capability'     => 'edit_theme_options',
		'title'      => __('Project Settings', 'quality'),
	) );
	
	$wp_customize->add_section(
        'project_section_settings',
        array(
            'title' => __('Home Project Settings','quality'),
            'description' => '',
			'panel'  => 'quality_project_setting',)
    );
	
	
	//Show and hide Project section
	$wp_customize->add_setting(
	'quality_pro_options[home_projects_enabled]'
    ,
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'quality_pro_options[home_projects_enabled]',
    array(
        'label' => __('Enable Home Project Section','quality'),
        'section' => 'project_section_settings',
        'type' => 'checkbox',
    )
	);
	
	// //Project Title
	$wp_customize->add_setting(
    'quality_pro_options[project_heading_one]',
    array(
        'default' => __('Featured Portfolio Project','quality'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control('quality_pro_options[project_heading_one]',array(
    'label'   => __('Project Section Heading','quality'),
    'section' => 'project_section_settings',
	 'type' => 'text',)  );	
	 
	//Project Description 
	 $wp_customize->add_setting(
    'quality_pro_options[project_tagline]',
    array(
        'default' => __('aecenas sit amet tincidunt elit. Pellentesque habitant morbi tristique senectus et netus et Nulla facilisi.','quality'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control( 'quality_pro_options[project_tagline]',array(
    'label'   => __('Project Section Tagline','quality'),
    'section' => 'project_section_settings',
	 'type' => 'text',)  );
	 
	 
	 
	 $wp_customize->add_section(
        'project_one_section_settings',
        array(
            'title' => __('Home Project One','quality'),
            'description' => '',
			'panel'  => 'quality_project_setting',)
    );
	
	
	
	
	//Project one Title
	$wp_customize->add_setting(
	'quality_pro_options[project_one_title]', array(
        'default'        => 'Lorem Ipsum',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('quality_pro_options[project_one_title]', array(
        'label'   => __('Project One Title', 'quality'),
        'section' => 'project_one_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	//Project one image
	$wp_customize->add_setting( 'quality_pro_options[project_one_thumb]',array('default' => get_template_directory_uri().'/images/project_thumb.png',
	'type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'quality_pro_options[project_one_thumb]',
			array(
				'label' => 'Project One Thumbnail',
				'section' => 'example_section_one',
				'settings' =>'quality_pro_options[project_one_thumb]',
				'section' => 'project_one_section_settings',
				'type' => 'upload',
			)
		)
	);
	
	//Project Two
	$wp_customize->add_section(
        'project_two_section_settings',
        array(
            'title' => __('Home Project two','quality'),
            'description' => '',
			'panel'  => 'quality_project_setting',)
    );
	
	//Project Two Title
	$wp_customize->add_setting(
	'quality_pro_options[project_two_title]', array(
        'default'        => 'Postao je popularan',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('quality_pro_options[project_two_title]', array(
        'label'   => __('Project Two Title', 'quality'),
        'section' => 'project_two_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	//Project two image
	$wp_customize->add_setting( 'quality_pro_options[project_two_thumb]',array('default' => get_template_directory_uri().'/images/project_thumb.png','type' => 'option','sanitize_callback' => 'esc_url_raw',));	
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'quality_pro_options[project_two_thumb]',
			array(
				'label' => 'Project two Thumbnail',
				'section' => 'example_section_one',
				'settings' =>'quality_pro_options[project_two_thumb]',
				'section' => 'project_two_section_settings',
				'type' => 'upload',
			)
		)
	);
	
	//Project Three section
	$wp_customize->add_section(
        'project_three_section_settings',
        array(
            'title' => __('Home Project three','quality'),
            'description' => '',
			'panel'  => 'quality_project_setting',)
    );
	
	//Project Three Title
	$wp_customize->add_setting(
	'quality_pro_options[project_three_title]', array(
        'default'        => 'kojekakve promjene s',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('quality_pro_options[project_three_title]', array(
        'label'   => __('Project three Title', 'quality'),
        'section' => 'project_three_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	//Project three image
	$wp_customize->add_setting( 'quality_pro_options[project_three_thumb]',array('default' => get_template_directory_uri().'/images/project_thumb.png','type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'quality_pro_options[project_three_thumb]',
			array(
				'label' => 'Project three Thumbnail',
				'section' => 'example_section_one',
				'settings' =>'quality_pro_options[project_three_thumb]',
				'section' => 'project_three_section_settings',
				'type' => 'upload',
			)
		)
	);
	
	
	//Project Four section
	$wp_customize->add_section(
        'project_four_section_settings',
        array(
            'title' => __('Home Project Four','quality'),
            'description' => '',
			'panel'  => 'quality_project_setting',)
    );
	
	//Project Four Title
	$wp_customize->add_setting(
	'quality_pro_options[project_four_title]', array(
        'default'        => 'kojekakve promjene s',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('quality_pro_options[project_four_title]', array(
        'label'   => __('Project four Title', 'quality'),
        'section' => 'project_four_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	//Project Four image
	$wp_customize->add_setting( 'quality_pro_options[project_four_thumb]',array('default' => get_template_directory_uri().'/images/project_thumb.png','type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'quality_pro_options[project_four_thumb]',
			array(
				'label' => 'Project four Thumbnail',
				'section' => 'example_section_one',
				'settings' =>'quality_pro_options[project_four_thumb]',
				'section' => 'project_four_section_settings',
				'type' => 'upload',
			)
		)
	);
	
	
	$wp_customize->add_section( 'more_project' , array(
		'title'      => __('Add More Project', 'quality'),
		'panel'  => 'quality_project_setting',
		'priority'   => 400,
   	) );
	
	class WP_project_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
     <div class="pro-vesrion">
	 <P><?php _e('Want to add more projects and categorization than upgrade to pro','quality');?></P>
	 </div>
	  <div class="pro-box">
	 <a href="<?php echo esc_url( __('http://webriti.com/quality/', 'quality'));?>" target="_blank" class="service" id="review_pro"><?php _e( 'UPGRADE TO PRO','quality' ); ?></a>
	 <div>
    <?php
    }
}

$wp_customize->add_setting(
    'project_pro',
    array(
        'default' => __('','quality'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    )	
);
$wp_customize->add_control( new WP_project_Customize_Control( $wp_customize, 'project_pro', array(	
		'label' => __('Discover quality Pro','quality'),
        'section' => 'more_project',
		'setting' => 'project_pro',
    ))
);
}		
	add_action( 'customize_register', 'quality_project_customizer' );
	?>