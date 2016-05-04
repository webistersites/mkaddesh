<?php
function quality_client_customizer( $wp_customize ) {
class quality_Customize_client_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to add Client Title,Description,Image and Link than','quality'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/quality' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','quality'); ?> </a>  
		<?php
		}
	}
//Front Client section
	$wp_customize->add_section(
        'client_section_settings',
        array(
			'priority'       => 800,
            'title' => __('Client section Heading','quality'),
            'description' => '',)
    );
	
	$wp_customize->add_setting( 'quality_pro_options[cleint_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new quality_Customize_client_upgrade(
		$wp_customize,
		'quality_pro_options[cleint_upgrade]',
			array(
				'label'					=> __('Quality Upgrade','quality'),
				'section'				=> 'client_section_settings',
				'settings'				=> 'quality_pro_options[cleint_upgrade]',
			)
		)
	);
	
	//Client title
	$wp_customize ->add_setting (
	'quality_pro_options[home_client_title]',
	array( 
	'default' => __('Meet Our Greatest Client','quality'),
	'capability'     => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	) );

	$wp_customize->add_control (
	'quality_pro_options[home_client_title]',
	array (  
	'label' => __('Client Title','quality'),
	'section' => 'client_section_settings',
	'type' => 'text',
	'input_attrs' => array('disabled'=>'disabled')
	) );
	
	//Client Discription
	$wp_customize ->add_setting (
	'quality_pro_options[home_client_desciption]',
	array( 
	'default' => __('We Love Our Clients.','quality'),
	'capability'     => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option'
	) );

	$wp_customize->add_control (
	'quality_pro_options[home_client_desciption]',
	array (  
	'label' => __('Client Description','quality'),
	'section' => 'client_section_settings',
	'type' => 'text',
	'input_attrs' => array('disabled' => 'disabled')
	) );

	//Client link
	class WP_client_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
    <a href="#" class="button"><?php _e( 'Click Here To add Client', 'quality' ); ?></a>
    <?php
    }
	}

	$wp_customize->add_setting(
		'client',
		array(
			'default' => __('','quality'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		)	
	);
	$wp_customize->add_control( new WP_client_Customize_Control( $wp_customize, 'client', array(	
			'label' => __('Discover quality Pro','quality'),
			'section' => 'client_section_settings',
			'priority'   => 500,
		))
	);
	
	}
	add_action( 'customize_register', 'quality_client_customizer' );
	?>