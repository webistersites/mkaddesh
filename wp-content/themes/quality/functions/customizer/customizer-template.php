<?php
function quality_template_customizer( $wp_customize ) {

class quality_Customize_slug_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to add Post type Slug Than','quality'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/quality' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','quality'); ?> </a>  
		<?php
		}
	}
	
class quality_Customize_section_head_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to add Section Heading Than','quality'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/quality' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','quality'); ?> </a>  
		<?php
		}
	}	
	
class quality_Customize_contact_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to add Contact Page,Contact Details Than','quality'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/quality' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','quality'); ?> </a>  
		<?php
		}
	}

class quality_Customize_map_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to add Google Map Than','quality'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/quality' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','quality'); ?> </a>  
		<?php
		}
	}	
	
	

//Template panel 
	$wp_customize->add_panel( 'quality_template', array(
		'priority'       => 920,
		'capability'     => 'edit_theme_options',
		'title'      => __('Template Settings', 'quality'),
	) );
	
	
	
	// add section to manage Post type Slug
	$wp_customize->add_section(
        'posttype_slug_settings',
        array(
            'title' => __('Post Type Slug','quality'),
            'description' => __('','quality'),
			'panel'  => 'quality_template',
			'priority'   => 100,
			
			)
    );
	
	$wp_customize->add_setting( 'quality_pro_options[slug_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new quality_Customize_slug_upgrade(
		$wp_customize,
		'quality_pro_options[slug_upgrade]',
			array(
				'label'					=> __('Quality Upgrade','quality'),
				'section'				=> 'posttype_slug_settings',
				'settings'				=> 'quality_pro_options[slug_upgrade]',
			)
		)
	);
	
	 //Service slug 
	 $wp_customize->add_setting(
    'quality_pro_options[service_slug]',
    array(
        'default' => __('quality_service','quality'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control( 'quality_pro_options[service_slug]',array(
    'label'   => __('Service Slug','quality'),
    'section' => 'posttype_slug_settings',
	 'type' => 'text',
	 'input_attrs' => array('disabled'=>'disabled')
	 )  );	
	
	//Portfolio/Project Slug 
	 $wp_customize->add_setting(
    'quality_pro_options[portfolio_slug]',
    array(
        'default' => __('quality_portfolio','quality'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control( 'quality_pro_options[portfolio_slug]',array(
    'label'   => __('Portfolio/Project Slug','quality'),
    'section' => 'posttype_slug_settings',
	 'type' => 'text',
	 'input_attrs' => array('disabled'=>'disabeld')
	 )  );	
	
	
	// add section to manage Section heading
	$wp_customize->add_section(
        'section_heading',
        array(
            'title' => __('Section Heading','quality'),
			'panel'  => 'quality_template',
			'priority'   => 100,
			
			)
    );
	
	$wp_customize->add_setting( 'quality_pro_options[section_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new quality_Customize_section_head_upgrade(
		$wp_customize,
		'quality_pro_options[section_upgrade]',
			array(
				'label'					=> __('Quality Upgrade','quality'),
				'section'				=> 'section_heading',
				'settings'				=> 'quality_pro_options[section_upgrade]',
			)
		)
	);
	
	// Blog Heading
	$wp_customize->add_setting(
		'quality_pro_options[home_blog]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Latest From Blog','quality'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'quality_pro_options[home_blog]',
		array(
			'type' => 'text',
			'label' => __('Home Page Blog Section Heading','quality'),
			'section' => 'section_heading',
			'input_attrs' => array('disabled'=>'disabeld')
		)
	);
	
	
	// About us page Heading
	$wp_customize->add_setting(
		'quality_pro_options[head_one_team]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Meet Our','quality'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));
		

	$wp_customize->add_control(
		'quality_pro_options[head_one_team]',
		array(
			'type' => 'text',
			'label' => __('About Us Page Team Heading One','quality'),
			'section' => 'section_heading',
			'input_attrs' => array('disabled'=>'disabeld')
		)
	);
	
	// About us page Heading
	$wp_customize->add_setting(
		'quality_pro_options[head_two_team]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Great Team','quality'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'quality_pro_options[head_two_team]',
		array(
			'type' => 'text',
			'label' => __('About Us Page Team Heading Two','quality'),
			'section' => 'section_heading',
			'input_attrs' => array('disabled'=>'disabeld')
		)
	);
	
	
	// About us page Heading
	$wp_customize->add_setting(
		'quality_pro_options[related_project_heading]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Related Project','quality'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'quality_pro_options[related_project_heading]',
		array(
			'type' => 'text',
			'label' => __('Related Project','quality'),
			'section' => 'section_heading',
			'input_attrs' => array('disabled'=>'disabeld')
		)
	);
	 
	 
	//Conatct Page
	// add section to manage Section heading
	$wp_customize->add_section(
        'conatact_page',
        array(
            'title' => __('Contact Page','quality'),
			'panel'  => 'quality_template',
			'priority'   => 100,
			
			)
    );
	
	$wp_customize->add_setting( 'quality_pro_options[contact_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new quality_Customize_contact_upgrade(
		$wp_customize,
		'quality_pro_options[contact_upgrade]',
			array(
				'label'					=> __('Quality Upgrade','quality'),
				'section'				=> 'conatact_page',
				'settings'				=> 'quality_pro_options[contact_upgrade]',
			)
		)
	);
	
	// Conatct send message heading
	$wp_customize->add_setting(
		'quality_pro_options[send_usmessage]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Send Us a Message','quality'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'quality_pro_options[send_usmessage]',
		array(
			'type' => 'text',
			'label' => __('Send Us a Messageis Street','quality'),
			'section' => 'conatact_page',
			'input_attrs' => array('disabled'=>'disabled')
		)
	);
	
	// Conatct send message heading
	$wp_customize->add_setting(
		'quality_pro_options[contact_address]',
		array('capability'  => 'edit_theme_options',
		'default' => __('25, Lorem Lis Street','quality'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'quality_pro_options[contact_address]',
		array(
			'type' => 'text',
			'label' => __('Contact Address Line One:','quality'),
			'section' => 'conatact_page',
			'input_attrs' => array('disabled'=>'disabled')
		)
	);
	
	// Conatct send message heading
	$wp_customize->add_setting(
		'quality_pro_options[contact_phone_number]',
		array('capability'  => 'edit_theme_options',
		'default' => __('00386 40 000 111','quality'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'quality_pro_options[contact_phone_number]',
		array(
			'type' => 'text',
			'label' => __('Contact Phone Number:','quality'),
			'section' => 'conatact_page',
			'input_attrs' => array('disabled'=>'disabled')
		)
	);
	
	
	// Conatct Email
	$wp_customize->add_setting(
		'quality_pro_options[contact_email]',
		array('capability'  => 'edit_theme_options',
		'default' => __('themes@webriti.com','quality'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'quality_pro_options[contact_email]',
		array(
			'type' => 'text',
			'label' => __('Contact Email:','quality'),
			'section' => 'conatact_page',
			'input_attrs' => array('disabled'=>'disabled')
		)
	);
	
	
	// Contact Office time:
	$wp_customize->add_setting(
		'quality_pro_options[contact_office_time]',
		array('capability'  => 'edit_theme_options',
		'default' => __('themes@webriti.com','quality'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'quality_pro_options[contact_office_time]',
		array(
			'type' => 'text',
			'label' => __('Contact Office time:','quality'),
			'section' => 'conatact_page',
			'input_attrs'=>array('disabled'=>'disabled')
		)
	);
	
	
	// Conatct Google map
	$wp_customize->add_section(
        'conatact_page_map',
        array(
            'title' => __('Google Maps','quality'),
			'panel'  => 'quality_template',
			'priority'   => 100,
			
			)
    );
	
	$wp_customize->add_setting( 'quality_pro_options[map_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new quality_Customize_map_upgrade(
		$wp_customize,
		'quality_pro_options[map_upgrade]',
			array(
				'label'					=> __('Quality Upgrade','quality'),
				'section'				=> 'conatact_page_map',
				'settings'				=> 'quality_pro_options[map_upgrade]',
			)
		)
	);
	
	
	// Contact Office time:
	$wp_customize->add_setting(
		'quality_pro_options[contact_google_map_enabled]',
		array('capability'  => 'edit_theme_options',
		'default' => __('themes@webriti.com','quality'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'quality_pro_options[contact_google_map_enabled]',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Google Map in contact page','quality'),
			'section' => 'conatact_page_map',
		)
	);
	
	//Google map URL
	
	$wp_customize->add_setting(
		'quality_pro_options[contact_google_map_url]',
		array('capability'  => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'default' => __('https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kota+Industrial+Area,+Kota,+Rajasthan&amp;aq=2&amp;oq=kota+&amp;sll=25.003049,76.117499&amp;sspn=0.020225,0.042014&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Kota+Industrial+Area,+Kota,+Rajasthan&amp;z=13&amp;ll=25.142832,75.879538','quality'), 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'quality_pro_options[contact_google_map_url]',
		array(
			'type' => 'text',
			'label' => __('Google Map URL:','quality'),
			'section' => 'conatact_page_map',
			'input_attrs' => array('disabled'=>'disabled')
		)
	);
	
	
	}
	add_action( 'customize_register', 'quality_template_customizer' );
	?>