<?php
function quality_service_customizer( $wp_customize ) {
 
//Service section panel
$wp_customize->add_panel( 'quality_service_options', array(
		'priority'       => 600,
		'capability'     => 'edit_theme_options',
		'title'      => __('Service Settings', 'quality'),
	) );

	
	$wp_customize->add_section( 'service_section_head' , array(
		'title'      => __('Service Heading ', 'quality'),
		'panel'  => 'quality_service_options',
		'priority'   => 50,
   	) );
	
	
	//Show and hide Service section
	$wp_customize->add_setting(
	'quality_pro_options[service_enable]'
    ,
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'quality_pro_options[service_enable]',
    array(
        'label' => __('Enable Service Section On HOME Page','quality'),
        'section' => 'service_section_head',
        'type' => 'checkbox',
    )
	);
	
	
	//Sarvice title
	$wp_customize->add_setting(
    'quality_pro_options[service_title]',
    array(
        'default' => __('What We Do','quality'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'quality_pro_options[service_title]',
    array(
        'label' => __('Service Title','quality'),
        'section' => 'service_section_head',
        'type' => 'text',
    )
	);
	
	$wp_customize->add_setting(
    'quality_pro_options[service_description]',
    array(
        'default' => __('We provide best WordPress solutions for your business. Thanks to our framework you will get more happy customers.','quality'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'quality_pro_options[service_description]',
    array(
        'label' => __('Service Description','quality'),
        'section' => 'service_section_head',
        'type' => 'text',
		'sanitize_callback' => 'sanitize_text_field',
    )
	);
	
//service section one
	$wp_customize->add_section( 'service_section_one' , array(
		'title'      => __('Service Section one', 'quality'),
		'panel'  => 'quality_service_options',
		'priority'   => 100,
		'sanitize_callback' => 'sanitize_text_field',
   	) );
	$wp_customize->add_setting(
		'quality_pro_options[service_one_icon]', array(
		 'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'fa fa-shield',
        'capability'     => 'edit_theme_options',
		'type' => 'option',
    ));
	
	$wp_customize->add_control( 'quality_pro_options[service_one_icon]', array(
        'label'   => __('Service Icon One', 'quality'),
		'section' => 'service_section_one',
        'type'    => 'text',
    ));		
		
	$wp_customize->add_setting(
    'quality_pro_options[service_one_title]',
    array(
        'default' => __('Fully Responsive','quality'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'quality_pro_options[service_one_title]',
    array(
        'label' => __('Service Title One','quality'),
        'section' => 'service_section_one',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
    'quality_pro_options[service_one_text]',
    array(
        'default' => __('Lorem Ipsum which looks reason able. The generated Lorem Ipsum is ','quality'),
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'quality_pro_options[service_one_text]',
    array(
        'label' => __('Service Text One','quality'),
        'section' => 'service_section_one',
        'type' => 'text',	
    )
);
//Second service

$wp_customize->add_section( 'service_section_two' , array(
		'title'      => __('Service Section Two', 'quality'),
		'panel'  => 'quality_service_options',
		'priority'   => 200,
   	) );


$wp_customize->add_setting(
    'quality_pro_options[service_two_icon]',
    array(
        'type' =>'option',
		'default' => 'fa fa-tablet',
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 
    )	
);
$wp_customize->add_control(
    'quality_pro_options[service_two_icon]',
    array(
        'label' => __('Service Icon two','quality'),
        'section' => 'service_section_two',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'quality_pro_options[service_two_title]',
    array(
        'default' => __('SEO Friendly','quality'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
);
$wp_customize->add_control(
    'quality_pro_options[service_two_title]',
    array(
        'label' => __('Title two' ,'quality'),
        'section' => 'service_section_two',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'quality_pro_options[service_two_text]',
    array(
        'default' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst.','quality'),
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option',
    )	
);
$wp_customize->add_control(
		'quality_pro_options[service_two_text]',
		array(
        'label' => __('Service Text Two','quality'),
        'section' => 'service_section_two',
        'type' => 'text',
    )
);
//Third Service section
$wp_customize->add_section( 'service_section_three' , array(
		'title'      => __('Service Section Three', 'quality'),
		'panel'  => 'quality_service_options',
		'priority'   => 300,
   	) );


$wp_customize->add_setting(
    'quality_pro_options[service_three_icon]',
    array(
        'default' => 'fa fa-edit',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		
    )	
);
$wp_customize->add_control(
'quality_pro_options[service_three_icon]',
    array(
        'label' => __('Service Icon Three','quality'),
        'section' => 'service_section_three',
        'type' => 'text',
		
    )
);

$wp_customize->add_setting(
    'quality_pro_options[service_three_title]',
    array(
        'default' => __('Easy to Use','quality'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' =>'option',
    )	
);
$wp_customize->add_control(
    'quality_pro_options[service_three_title]',
    array(
        'label' => __('Service Text Three','quality'),
        'section' => 'service_section_three',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'quality_pro_options[service_three_text]',
    array(
        'default' => __('fLorem Ipsum which looks reason able. The generated Lorem Ipsum is t.','quality'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' =>'option',
    )	
);
$wp_customize->add_control(
    'quality_pro_options[service_three_text]',
    array(
        'label' => __('Description three','quality'),
        'section' => 'service_section_three',
        'type' => 'text',
    )
);
//Four Service section

$wp_customize->add_section( 'service_section_four' , array(
		'title'      => __('Service Section Four', 'quality'),
		'panel'  => 'quality_service_options',
		'priority'   => 400,
   	) );

$wp_customize->add_setting(
    'quality_pro_options[service_four_icon]',
    array(
        'default' => 'fa fa-star-half-o',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' =>'option',
    )	
);
$wp_customize->add_control(
    'quality_pro_options[service_four_icon]',
    array(
        'label' => __('Icon Four  Like: fa-group','quality'),
        'section' => 'service_section_four',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'quality_pro_options[service_four_title]',
    array(
        'default' => __('Well Documentation','quality'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
);
$wp_customize->add_control(
    'quality_pro_options[service_four_title]',
    array(
        'label' => __('Title four','quality'),
        'section' => 'service_section_four',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
   'quality_pro_options[service_four_text]',
    array(
        'default' => __('Lorem Ipsum which looks reason able. The generated Lorem Ipsum is-o.','quality'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
);
$wp_customize->add_control(
    'quality_pro_options[service_four_text]',
    array(
        'label' => __('Description four','quality'),
        'section' => 'service_section_four',
        'type' => 'text',
		'sanitize_callback' => 'sanitize_text_field',
    )
);	
	
	
$wp_customize->add_section( 'more_service' , array(
		'title'      => __('Add More Service', 'quality'),
		'panel'  => 'quality_service_options',
		'priority'   => 400,
   	) );	
	
class WP_service_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
     <div class="pro-vesrion">
	 <P><?php _e('Want to add more services, than upgrade to pro version','quality');?></P>
	 </div>
	  <div class="pro-box">
	 <a href="<?php echo esc_url( __('http://webriti.com/quality/', 'quality'));?>" target="_blank" class="service" id="review_pro"><?php _e( 'UPGRADE TO PRO','quality' ); ?></a>
	 <div>
    <?php
    }
}

$wp_customize->add_setting(
    'service_pro',
    array(
        'default' => __('','quality'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    )	
);
$wp_customize->add_control( new WP_service_Customize_Control( $wp_customize, 'service_pro', array(	
		'label' => __('Discover quality Pro','quality'),
        'section' => 'more_service',
		'setting' => 'service_pro',
    ))
);	
}
add_action( 'customize_register', 'quality_service_customizer' );
?>