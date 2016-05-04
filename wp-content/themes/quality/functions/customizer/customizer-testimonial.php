<?php
function quality_testimonial_customizer( $wp_customize ) {
class quality_Customize_testimonial_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to add Testimonial Title,Description,Image,Link and Animation Than','quality'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/quality' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','quality'); ?> </a>  
		<?php
		}
	}

	$wp_customize->add_section(
        'test_section_settings',
        array(
			'priority'       => 750,
            'title' => __('Testimonail Settings','quality'),
            'description' => '',)
    );
	
	$wp_customize->add_setting( 'quality_pro_options[test_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new quality_Customize_testimonial_upgrade(
		$wp_customize,
		'quality_pro_options[test_upgrade]',
			array(
				'label'					=> __('Quality Upgrade','quality'),
				'section'				=> 'test_section_settings',
				'settings'				=> 'quality_pro_options[test_upgrade]',
			)
		)
	);
	
	// add section to manage Testimonial Title
	$wp_customize->add_setting(
    'quality_pro_options[home_testimonial_title]',
    array(
        'default' => __('What Our Clients Say','quality'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control( 'quality_pro_options[home_testimonial_title]',array(
    'label'   => __('Testimonial Title','quality'),
    'section' => 'test_section_settings',
	 'type' => 'text',
	 'input_attrs' => array('disabled'=>'disabled')
	 )  );	
	 
	 
	 $wp_customize->add_setting(
    'quality_pro_options[home_testimonial_desciption]',
    array(
        'default' => __('Here is the best part of our impressive services','quality'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control( 'quality_pro_options[home_testimonial_desciption]',array(
    'label'   => __('Testimonial Description','quality'),
    'section' => 'test_section_settings',
	 'type' => 'text',
	 'input_attrs' => array('disabled' => 'disabled')
	 )  );	
	 
	 
	 
	//Testimonial animation
	
	$wp_customize->add_setting(
    'quality_pro_options[testi_slide_type]',
    array(
        'default' => __('scroll','quality'),
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
    )
	);

	$wp_customize->add_control(
    'quality_pro_options[testi_slide_type]',
    array(
        'type' => 'select',
        'label' => __('Slide Type Variations','quality'),
        'section' => 'test_section_settings',
		 'choices' => array('scroll'=>__('scroll', 'quality'), 'fade'=>__('fade', 'quality') ,'crossfade'=>__('crossfade','quality'),'cover-fade' =>__('cover-fade','quality')),
		));
		
	
	//Testimonial Scroll Items
	
	$wp_customize->add_setting(
    'quality_pro_options[testi_scroll_items]',
    array(
        'default' => __('scroll','quality'),
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
    )
	);

	$wp_customize->add_control(
    'quality_pro_options[testi_scroll_items]',
    array(
        'type' => 'select',
        'label' => __('Scroll Items','quality'),
        'section' => 'test_section_settings',
		 'choices' => array(1=>1,2=>2,3=>3),
		));
		
	//Testimonial Animation speed	
	$wp_customize->add_setting(
    'quality_pro_options[testi_scroll_dura]',
    array(
        'default' => __('1500','quality'),
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    )
	);

	$wp_customize->add_control(
    'quality_pro_options[testi_scroll_dura]',
    array(
        'type' => 'select',
        'label' => __('Scroll Duration','quality'),
        'section' => 'test_section_settings',
		'priority'   => 300,
		 'choices' => array('500'=>'0.5','1000'=>'1.0','1500'=>'1.5','2000' => '2.0','2500' => '2.5' ,'3000' =>'3.0' , '3500' => '3.5', '4000' => '4.0','4500' => '4.5' ,'5000' => '5.0' , '5500' => '5.5' )));	
		 
	//Testimonail Time out Duration
	$wp_customize->add_setting(
    'quality_pro_options[testi_timeout_dura]',
    array(
        'default' => __('1500','quality'),
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    )
	);

	$wp_customize->add_control(
    'quality_pro_options[testi_timeout_dura]',
    array(
        'type' => 'select',
        'label' => __('Time out Duration','quality'),
        'section' => 'test_section_settings',
		'priority'   => 300,
		 'choices' => array('500'=>'0.5','1000'=>'1.0','1500'=>'1.5','2000' => '2.0','2500' => '2.5' ,'3000' =>'3.0' , '3500' => '3.5', '4000' => '4.0','4500' => '4.5' ,'5000' => '5.0' , '5500' => '5.5' )));	

		 
		
	//Testimonail link
	class WP_testmonial_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
    <a href="#" class="button"><?php _e( 'Click Here To add Testimonial', 'quality' ); ?></a>
    <?php
    }
}

$wp_customize->add_setting(
    'testimonial',
    array(
        'default' => __('','quality'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    )	
);
$wp_customize->add_control( new WP_testmonial_Customize_Control( $wp_customize, 'testimonial', array(	
		'label' => __('Discover Quality Pro','quality'),
        'section' => 'test_section_settings',
		'priority'   => 500,
    ))
);
	
		}
	add_action( 'customize_register', 'quality_testimonial_customizer' );
	?>