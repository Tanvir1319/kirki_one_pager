<?php

new \Kirki\Panel(
	'theme_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Theme Panel', 'otheme' ),
		'description' => esc_html__( 'My Panel Description.', 'otheme' ),
	]
); 

new \Kirki\Section(
	'banner_section',
	[
		'title'       => esc_html__( 'Banner Section', 'otheme' ),
		'description' => esc_html__( 'My Section Description.', 'otheme' ),
		'panel'       => 'theme_panel',
		'priority'    => 160,
	]
);


//**Banner Section Text */
new \Kirki\Field\Text(
	[
		'settings' => 'banner_text',
		'label'    => esc_html__( 'Text Control', 'otheme' ),
		'section'  => 'banner_section',
		'default'  => esc_html__( 'This is a default text', 'otheme' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.head-title',
				'function' => 'html',
				
			],
		]
	]
);
//**Banner Section Button Text */

new \Kirki\Field\Text(
	[
		'settings' => 'button_text',
		'label'    => esc_html__( 'Button Text', 'otheme' ),
		'section'  => 'banner_section',
		'default'  => esc_html__( 'Click here', 'otheme' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.btn-common',
				'function' => 'html',
				
			],
		]
	]
);



//**Banner Section Text Typography */

new \Kirki\Field\Typography(
	[
		'settings'    => 'typography_setting',
		'label'       => esc_html__( 'Typography Control', 'kirki' ),
		'description' => esc_html__( 'The full set of options.', 'kirki' ),
		'section'     => 'banner_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Roboto',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'color'           => '#333333',
			'font-size'       => '14px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'center',
		],
		'output'      => [
			[
				'element' => '#hero-area .content.head-title',
			],
		],
	]
);





//**Banner Button Url */

new \Kirki\Field\URL(
	[
		'settings' => 'button_url',
		'label'    => esc_html__( 'Button Url', 'kirki' ),
		'section'  => 'banner_section',
		'default'  => 'https://youtube.com/',
		'priority' => 10,
	]
);

//**Banner Section Image */
new \Kirki\Field\Image(
	[
		'settings'    => 'banner_img',
		'label'       => esc_html__( 'Banner Image', 'kirki' ),
		'description' => esc_html__( '', 'kirki' ),
		'section'     => 'banner_section',
		'default'     => '',
		
	]
);

//** Banner Background */

new \Kirki\Field\Background(
	[
		'settings'    => 'background_setting',
		'label'       => esc_html__( 'Background Control', 'kirki' ),
		'description' => esc_html__( 'Background conrols are pretty complex! (but useful if used properly)', 'kirki' ),
		'section'     => 'banner_section',
		'default'     => [
			'background-color'      => 'rgba(20,20,20,.8)',
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '#hero-area .contents',
			],
		],
	]
);


//**Feature Section */
new \Kirki\Section(
	'about_us',
	[
		'title'       => esc_html__( 'About Section', 'kirki' ),
		'description' => esc_html__( 'About Section ', 'kirki' ),
		'panel'       => 'theme_panel',
		'priority'    => 160,
	]
);


//**Feature Section Heading */
new \Kirki\Field\Text(
	[
		'settings'    => 'aboutus_heading',
		'label'       => esc_html__( 'Heading', 'kirki' ),
		'section'     => 'about_us',
		'default'     => esc_html__( 'default heading', 'kirki' ),
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.title-hl',
				'function' => 'html',
				
			],
		]
	]
);


//**Feature Section description*/

new \Kirki\Field\Textarea(
	[
		'settings'    => 'aboutus_description',
		'label'       => esc_html__( 'description', 'kirki' ),
		'section'     => 'about_us',
		'default'     => esc_html__( 'default description', 'kirki' ),
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.mb-4',
				'function' => 'html',
				
			],
		]
	]
);



//**Feature Section button text */
new \Kirki\Field\Text(
	[
		'settings' => 'aboutsection_button',
		'label'    => esc_html__( 'Button Text', 'otheme' ),
		'section'  => 'about_us',
		'default'  => esc_html__( 'Click here', 'otheme' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.btn btn-common',
				'function' => 'html',
				
			],
		]
	]
);


//**About Us Section Button URL */

new \Kirki\Field\URL(
	[
		'settings' => 'aboutsectionbutton_url',
		'label'    => esc_html__( 'Button Url', 'kirki' ),
		'section'  => 'about_us',
		'default'  => 'https://youtube.com/',
		'priority' => 10,
	]
);



//**About Us Repeater */

new \Kirki\Field\Repeater(
	[
		'settings'     => 'about_repeater',
		'label'        => esc_html__( 'Services', 'kirki' ),
		'section'      => 'about_us',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Your Item', 'kirki' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__( 'Add new item', 'kirki' ),
		'default'      => [
			[
				'service_title'   => esc_html__( '', 'kirki' ),
				'service_description'    => esc_html__('','kirki'),
				'service_icon'   => esc_html__( 'lni-medall-alt', 'kirki' ),
			],
			
		],
		'fields'       => [
			'item_icon'   => [
				'type'        => 'select',
				'label'       => esc_html__( 'item icon', 'kirki' ),
				
				'default'     => '',
				'choices' => array(
					'lni-microphone' =>__('Icon 1','kirki'),
					'lni-users' =>__('Icon 2','kirki'),
					'lni-medall-alt' =>__('Icon 3','kirki'),

				)
			],
			'item_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'item title', 'kirki' ),
				
				'default'     => '',
			],
			'item_description'    => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'item description', 'kirki' ),
				'default'     => '',
			],
		],

		'choices' => [
			'limit' => 3
		],
	]
);


//**Service Section  */


new \Kirki\Section(
	'services_section',
	[
		'title'       => esc_html__( 'Service Section', 'kirki' ),
		'description' => esc_html__( 'Service Description.', 'kirki' ),
		'panel'       => 'theme_panel',
		'priority'    => 160,
	]
);


//**Service Section  Control */ 

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'switch_service',
		'label'       => esc_html__( 'Switch Field', 'kirki' ),
		'description' => esc_html__( 'Enable/Disable', 'kirki' ),
		'section'     => 'services_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);


//**Service Section  Heading */


new \Kirki\Field\Text(
	[
		'settings' => 'service_heading',
		'label'    => esc_html__( 'Service Heading', 'kirki' ),
		'section'  => 'services_section',
		'default'  => esc_html__( '', 'kirki' ),
		'priority' => 10,
	]
);

//**Service Section  Heading */

new \Kirki\Field\Textarea(
	[
		'settings' => 'service_description',
		'label'    => esc_html__( 'Service Description', 'kirki' ),
		'section'  => 'services_section',
		'default'  => esc_html__( '', 'kirki' ),
		'priority' => 10,
	]
);

/**Service Section Repeater */


new \Kirki\Field\Repeater(
	[
		'settings'     => 'service_repeater',
		'label'        => esc_html__( 'Service Control', 'kirki' ),
		'section'      => 'services_section',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Your Services', 'kirki' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__( 'Add new services ', 'kirki' ),
		'default'      => [
			[
				'service_icon'   => esc_html__( '', 'kirki' ),
				'service_heading_text'   => esc_html__( '', 'kirki' ),
				'service_description_text'    => '',
			],
			
		],
		'fields'       => [

			'service_icon'   => [
				'type'        => 'select',
				'label'       => esc_html__( 'Service Icon', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => 'lni-pencil',
				'choices' => [
					'lni-pencil'=>__('pencil','otheme'),
					'lni-cog' =>__('cog','otheme'),
					'lni-mobile' =>__('mobile','otheme'),
					'lni-layers' =>__('layers','otheme'),
					'lni-briefcase'  =>__('brifcase','otheme'),
					'lni-rocket'  =>__('rocket','otheme'),

				]
			],

			'service_heading_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Service Heading', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
			],
			'service_description_text'    => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Service Description', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
			],
		],

		'choices' => [
			'limit' => 6
		],
	]
);


//** Service Alignment */
new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'service_alignment',
		'label'       => esc_html__( 'Service Alignment Control', 'kirki' ),
		'section'     => 'services_section',
		'default'     => 'left',
		'priority'    => 10,
		'choices'     => [
			'left'   => esc_html__( 'Left', 'kirki' ),
			'center' => esc_html__( 'Center', 'kirki' ),
			'right'  => esc_html__( 'Right', 'kirki' ),
		],
		'output' => array(
			array(
				'element' => '.services-item',
				'property' => 'text-align'
			),
		),
	]


);




//** Service Alignment Number */
new \Kirki\Field\Radio_Buttonset(
	[
		'type'    => 'select',
		'settings'    => 'service_alignment_num',
		'label'       => esc_html__( 'Service Alignment Number Control', 'kirki' ),
		'section'     => 'services_section',
		'default'     => 'col-lg-4',
		'priority'    => 10,
		'choices'     => [
			'col-lg-4'   => esc_html__( '3 Columns', 'kirki' ),
			'col-lg-6' => esc_html__( '2 Columns', 'kirki' ),
			'col-lg-3'  => esc_html__( '4 Columns', 'kirki' ),
		],
	
	]


);





















//**Video Section */

new \Kirki\Section(
	'video_section',
	[
		'title'       => esc_html__( 'Video Section', 'kirki' ),
		'description' => esc_html__( 'My Video Description.', 'kirki' ),
		'panel'       => 'theme_panel',
		'priority'    => 160,
	]
);


new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'switch_video',
		'label'       => esc_html__( 'Switch Field', 'kirki' ),
		'description' => esc_html__( 'Enable/Disable', 'kirki' ),
		'section'     => 'video_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);

//** Video Section Background */


new \Kirki\Field\Background(
	[
		'settings'    => 'background_video',
		'label'       => esc_html__( 'Background Control', 'kirki' ),
		'section'     => 'video_section',
		'default'     => [
			'background-color'      => 'rgba(20,20,20,.8)',
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.video-promo ',
			],
		],
	]
);


//** Video Section Icon */

new \Kirki\Field\Dashicons(
	[
		'settings'    => 'video_icons',
		'label'       => esc_html__( 'Video Icons Control', 'kirki' ),
		'section'     => 'video_section',
		'default'     => 'lni-film-play',
		'priority' => 10,
		'choices'     => [
			'lni-film-play' =>__('video player','otheme'),
		],
	] ,);


	new \Kirki\Field\text(
		[
			'settings' => 'video_name',
			'label'    => esc_html__( 'Video Name', 'kirki' ),
			'section'  => 'video_section',
			'default'  => '',
			'priority' => 10,
		]
	);



//** Video Section URL */

new \Kirki\Field\link(
	[
		'type' => 'link',
		'settings' => 'video_url',
		'label'    => esc_html__( 'Video URL Control', 'kirki' ),
		'section'  => 'video_section',
		'default'  => '',
		'priority' => 10,
	]
);




//** Team Section  */


new \Kirki\Section(
	'team_section',
	[
		'title'       => esc_html__( 'Team Section', 'kirki' ),
		'description' => esc_html__( 'Team Description.', 'kirki' ),
		'panel'       => 'theme_panel',
		'priority'    => 160,
	]
);


//**Team Section  Control */ 






new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'switch_team_section',
		'label'       => esc_html__( 'Switch Field', 'kirki' ),
		'description' => esc_html__( 'Eneble/Disable', 'kirki' ),
		'section'     => 'team_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);



//**Team Section  Heading */

new \Kirki\Field\Text(
	[
		'settings' => 'team_heading',
		'label'    => esc_html__( 'Team Heading', 'kirki' ),
		'section'  => 'team_section',
		'default'  => esc_html__( '', 'kirki' ),
		'priority' => 10,
	]
);


//**Team Section  Description */
new \Kirki\Field\Textarea(
	[
		'settings' => 'team_description',
		'label'    => esc_html__( 'Team Description', 'kirki' ),
		'section'  => 'team_section',
		'default'  => esc_html__( '', 'kirki' ),
		'priority' => 10,
	]
);

/**Team Section Repeater */


new \Kirki\Field\Repeater(
	[
		'settings'     => 'team_repeater',
		'label'        => esc_html__( 'Team Control', 'kirki' ),
		'section'      => 'team_section',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Team Members', 'kirki' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__( 'Add new team members ', 'kirki' ),
		'default'      => [
			[
				
				'team_img'   => esc_html__( '', 'kirki' ),
				'team_fb'   => esc_html__( '', 'kirki' ),
				'team_twitter'   => esc_html__( '', 'kirki' ),
				'team_insta'   => esc_html__( '', 'kirki' ),
				'team_name'   => esc_html__( '', 'kirki' ),
				'team_designation'   => esc_html__( '', 'kirki' ),
			],
			
		],
		'fields'       => [

			

			'team_img'   => [
				'type'        => 'image',
				'label'       => esc_html__( 'Team Image', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
			],
			'team_fb'    => [
				'type'        => 'link',
				'label'       => esc_html__( 'facebook url', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
			],
			'team_twitter'    => [
				'type'        => 'link',
				'label'       => esc_html__( 'twitter url', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
			],
			'team_insta'    => [
				'type'        => 'link',
				'label'       => esc_html__( 'Intagram url', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
			],
			'team_name'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Team Name', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
			],
			'team_designation'   => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Team Designation', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
			],
			



		],

		'choices' => [
			'limit' => 4
		],
	]
);





//** Counter Section  */


new \Kirki\Section(
	'counter_section',
	[
		'title'       => esc_html__( 'Counter Section', 'kirki' ),
		'description' => esc_html__( 'Counter Description.', 'kirki' ),
		'panel'       => 'theme_panel',
		'priority'    => 160,
	]
);


//** Counter Background */

new \Kirki\Field\Background(
	[
		'settings'    => 'background_setting',
		'label'       => esc_html__( 'Background Control', 'kirki' ),
		'description' => esc_html__( 'Background conrols are pretty complex! (but useful if used properly)', 'kirki' ),
		'section'     => 'counter_section',
		'default'     => [
			'background-color'      => 'rgba(20,20,20,.8)',
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '#counter',
			],
		],
	]
);







//**Counter Section  Control */ 

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'switch_counter_section',
		'label'       => esc_html__( 'Switch Section', 'kirki' ),
		'description' => esc_html__( 'Enable/Disable', 'kirki' ),
		'section'     => 'counter_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);







/**Counter Section Repeater */


new \Kirki\Field\Repeater(
	[
		'settings'     => 'counter_repeater',
		'label'        => esc_html__( 'Counter Control', 'kirki' ),
		'section'      => 'counter_section',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Counter ', 'kirki' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__( 'Add new Counter ', 'kirki' ),
		'default'      => [
			[
				
				'counter_icon'   => esc_html__( '', 'kirki' ),
				'counter_number'   => esc_html__( '', 'kirki' ),
				'counter_text'   => esc_html__( '', 'kirki' ),
				'counter_animation'   => esc_html__( '', 'kirki' ),
				'counter_duration'   => esc_html__( '', 'kirki' ),
			],
			
		],
		'fields'       => [

			

			'counter_icon'   => [
				'type'        => 'select',
				'label'       => esc_html__( 'Icon', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
				'choices' => array(
					'lni-users' =>__('Icon 1','kirki'),
					'lni-download' =>__('Icon 2','kirki'),
					'lni-emoji-smile' =>__('Icon 2','kirki'),
					'lni-thumbs-up' =>__('Icon 3','kirki'),

				),],
			'counter_number'    => [
				'type'        => 'number',
				'label'       => esc_html__( 'Number', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
			],
			'counter_text'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'write here', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
			],


			'counter_animation'   => [
				'type'        => 'select',
				'label'       => esc_html__( 'animation', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
				'choices' => array(
					'fadeInUp ' =>__('Animation 1','kirki'),
					'fadeInDown ' =>__('Animation 2','kirki'),
					'fadeInLeft ' =>__('Animation 3','kirki'),
					'fadeInRight ' =>__('Animation 4','kirki'),

				),],


				'counter_duration'   => [
					'type'        => 'select',
					'label'       => esc_html__( 'Duration', 'kirki' ),
					'description' => esc_html__( '', 'kirki' ),
					'default'     => '',
					'choices' => array(
						'0.8s ' =>__('0.8s','kirki'),
						'0.5s ' =>__('0.5s','kirki'),
						'0.10s ' =>__('0.10s','kirki'),
						'0.12s ' =>__('0.12s','kirki'),
	
					),],



		],

		'choices' => [
			'limit' => 4
		],
	]
);





//** Our Work Section  */


new \Kirki\Section(
	'work_section',
	[
		'title'       => esc_html__( 'Our Work Section', 'kirki' ),
		'description' => esc_html__( 'Our Work Section Description.', 'kirki' ),
		'panel'       => 'theme_panel',
		'priority'    => 160,
	]
);


//**Work Section  Control */ 

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'switch_work_section',
		'label'       => esc_html__( 'Switch Section', 'kirki' ),
		'description' => esc_html__( 'Enable/Disable', 'kirki' ),
		'section'     => 'work_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);


//**Work Section  Heading */

new \Kirki\Field\Text(
	[
		'settings' => 'work_heading',
		'label'    => esc_html__( 'Work Heading', 'kirki' ),
		'section'  => 'work_section',
		'default'  => esc_html__( '', 'kirki' ),
		'priority' => 10,
	]
);


//**Work Section  Description */
new \Kirki\Field\Textarea(
	[
		'settings' => 'work_description',
		'label'    => esc_html__( 'Work Description', 'kirki' ),
		'section'  => 'work_section',
		'default'  => esc_html__( '', 'kirki' ),
		'priority' => 10,
	]
);

/**Work Section Repeater */


new \Kirki\Field\Repeater(
	[
		'settings'     => 'work_repeater',
		'label'        => esc_html__( 'Team Control', 'kirki' ),
		'section'      => 'work_section',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Work Type', 'kirki' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__( 'Add new work ', 'kirki' ),
		'default'      => [
			[
				
				'work_img'   => esc_html__( '', 'kirki' ),
				'work_icon'   => esc_html__( '', 'kirki' ),
				'work_text'   => esc_html__( '', 'kirki' ),
				
			],
			
		],
		'fields'       => [

			

			'work_img'   => [
				'type'        => 'image',
				'label'       => esc_html__( 'Work Image', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
			],


			'work_icon'   => [
				'type'        => 'select',
				'label'       => esc_html__( 'Icon', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
				'choices' => array(
					'zoom-icon' =>__('Icon 1','kirki'),
					'lni-download' =>__('Icon 2','kirki'),
					'lni-emoji-smile' =>__('Icon 2','kirki'),
					'lni-thumbs-up' =>__('Icon 3','kirki'),

				),],

			'work_text'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Work text', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
			],


			



		],

		'choices' => [
			'limit' => 6
		],
	]
);








//** Price Section  */


new \Kirki\Section(
	'price_section',
	[
		'title'       => esc_html__( 'Price Section', 'kirki' ),
		'description' => esc_html__( 'Price Description.', 'kirki' ),
		'panel'       => 'theme_panel',
		'priority'    => 160,
	]
);


//**Price Section  Control */ 

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'switch_price_section',
		'label'       => esc_html__( 'Switch Section', 'kirki' ),
		'description' => esc_html__( 'Enable/Disable', 'kirki' ),
		'section'     => 'price_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);


//**Price Section  Heading */

new \Kirki\Field\Text(
	[
		'settings' => 'Price_heading',
		'label'    => esc_html__( 'Team Heading', 'kirki' ),
		'section'  => 'price_section',
		'default'  => esc_html__( '', 'kirki' ),
		'priority' => 10,
	]
);


//**Price Section  Description */
new \Kirki\Field\Textarea(
	[
		'settings' => 'price_description',
		'label'    => esc_html__( 'Price Description', 'kirki' ),
		'section'  => 'price_section',
		'default'  => esc_html__( '', 'kirki' ),
		'priority' => 10,
	]
);




/**Price Section Repeater */


new \Kirki\Field\Repeater(
	[
		'settings'     =>  'price_repeater',
		'label'        => esc_html__( 'Price Control', 'kirki' ),
		'section'      => 'price_section',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Price Type', 'kirki' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__( 'Add new price ', 'kirki' ),
		'default'      => [
			[
				'price_text'   => esc_html__( '', 'kirki' ),
				'price_amount'   => esc_html__( '', 'kirki' ),
				'price_duration'   => esc_html__( '', 'kirki' ),
				'price_feature1'   => esc_html__( '', 'kirki' ),
				'price_feature2'   => esc_html__( '', 'kirki' ),
				'price_feature3'   => esc_html__( '', 'kirki' ),
				'price_feature4'   => esc_html__( '', 'kirki' ),
				'price_feature5'   => esc_html__( '', 'kirki' ),
				'price_feature6'   => esc_html__( '', 'kirki' ),
				'price_button'   => esc_html__( '', 'kirki' ),
				'price_btn_link'   => esc_html__( '', 'kirki' ),           
				'price_switch'   => esc_html__( '', 'kirki' ),
					
			],
			
		],
		'fields'       => [

			'price_switch'   => [
				'type'        => 'Checkbox_Switch',
				'label'       => esc_html__( 'Price Feaured ?', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
				
			],

			'price_text'   => [
				'type'        => 'select',
				'label'       => esc_html__( 'Price Name', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
				'choices' => array(
					'basic' =>__('Basic','kirki'),
					'professional' =>__('Professional','kirki'),
					'expert' =>__('Expert','kirki'),
					

				),
			],


			'price_amount'   => [
				'type'        => 'number',
				'label'       => esc_html__( 'Price Amount', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
],


'price_amount'   => [
	'type'        => 'number',
	'label'       => esc_html__( 'Price Amount', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'default'     => '',
],


'price_amount'   => [
	'type'        => 'number',
	'label'       => esc_html__( 'Price Amount', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'default'     => '',
],



'price_feature1'   => [
	'type'        => 'text',
	'label'       => esc_html__( 'Price Feature', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'default'     => '',
],

'price_feature2'   => [
	'type'        => 'text',
	'label'       => esc_html__( 'Price Feature', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'default'     => '',
],


'price_feature3'   => [
	'type'        => 'text',
	'label'       => esc_html__( 'Price Feature', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'default'     => '',
],

'price_feature4'   => [
	'type'        => 'text',
	'label'       => esc_html__( 'Price Feature', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'default'     => '',
],

'price_feature5'   => [
	'type'        => 'text',
	'label'       => esc_html__( 'Price Feature', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'default'     => '',
],

'price_feature6'   => [
	'type'        => 'text',
	'label'       => esc_html__( 'Price Feature', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'default'     => '',
],


'price_button'   => [
	'type'        => 'text',
	'label'       => esc_html__( 'Price Button', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'default'     => '',
],

'price_btn_link'   => [
	'type'        => 'link',
	'label'       => esc_html__( 'Price Button Link', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'default'     => '',
],




		


			



		],

		'choices' => [
			'limit' => 3
		],
	]
);









//** Skill Section  */


new \Kirki\Section(
	'skill_section',
	[
		'title'       => esc_html__( 'Skill Section', 'kirki' ),
		'description' => esc_html__( 'Skill Description.', 'kirki' ),
		'panel'       => 'theme_panel',
		'priority'    => 160,
	]
);


//**Skill Section  Control */ 

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'switch_skill_section',
		'label'       => esc_html__( 'Switch Section', 'kirki' ),
		'description' => esc_html__( 'Enable/Disable', 'kirki' ),
		'section'     => 'skill_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);





//**Skill Section  Image */


new \Kirki\Field\image(
	[
		'settings' => 'skill_image',
		'label'    => esc_html__( 'Team Image', 'kirki' ),
		'section'  => 'skill_section',
		'default'  => esc_html__( '', 'kirki' ),
		'priority' => 10,
	]
);






//**Skill Section  Heading */

new \Kirki\Field\Text(
	[
		'settings' => 'skill_heading',
		'label'    => esc_html__( 'Team Heading', 'kirki' ),
		'section'  => 'team_section',
		'default'  => esc_html__( '', 'kirki' ),
		'priority' => 10,
	]
);


//**Skill Section  Description */
new \Kirki\Field\Textarea(
	[
		'settings' => 'Skill_description',
		'label'    => esc_html__( 'Skill Description', 'kirki' ),
		'section'  => 'skill_section',
		'default'  => esc_html__( '', 'kirki' ),
		'priority' => 10,
	]
);


/**Skill Section Repeater */


new \Kirki\Field\Repeater(
	[
		'settings'     => 'skill_repeater',
		'label'        => esc_html__( 'Skill Control', 'kirki' ),
		'section'      => 'skill_section',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Skill Type', 'kirki' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__( 'Add new skill ', 'kirki' ),
		'default'      => [
			[
				'skill_text'   => esc_html__( '', 'kirki' ),
				'skill_percent'   => esc_html__( '', 'kirki' ),
			
					
			],
			
		],
		'fields'       => [

			

			'skill_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Skill Name', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
				
			],


			'skill_percent'   => [
				'type'        => 'number',
				'label'       => esc_html__( 'Skill Percentage', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
],


		],

		'choices' => [
			'limit' => 2
		],
	]
);



//** Testmonial Section  */


new \Kirki\Section(
	'testimonial_section',
	[
		'title'       => esc_html__( 'Testimonial Section', 'kirki' ),
		'description' => esc_html__( 'Testimonial Description.', 'kirki' ),
		'panel'       => 'theme_panel',
		'priority'    => 160,
	]
);


//**Testiomonial Section  Control */ 

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'switch_testimonial_section',
		'label'       => esc_html__( 'Switch Section', 'kirki' ),
		'description' => esc_html__( 'Enable/Disable', 'kirki' ),
		'section'     => 'testimonial_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);

//**Testiomonial Section  Background */ 


new \Kirki\Field\Background(
	[
		'settings'    => 'background_testimonial',
		'label'       => esc_html__( 'Background Control', 'kirki' ),
		'section'     => 'testimonial_section',
		'default'     => [
			'background-color'      => 'rgba(20,20,20,.8)',
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '#testimonial',
			],
		],
	]
);






/**Testimonial Section Repeater */


new \Kirki\Field\Repeater(
	[
		'settings'     => 'testimonial_repeater',
		'label'        => esc_html__( 'Skill Control', 'kirki' ),
		'section'      => 'testimonial_section',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Testimonial Type', 'kirki' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__( 'Add new testimonial ', 'kirki' ),
		'default'      => [
			[
				'testi_img'   => esc_html__( '', 'kirki' ),
				'testi_name'   => esc_html__( '', 'kirki' ),
				'testi_des'   => esc_html__( '', 'kirki' ),
				'testi_comment'   => esc_html__( '', 'kirki' ),
			
					
			],
			
		],
		'fields'       => [

			

			'testi_img'   => [
				'type'        => 'image',
				'label'       => esc_html__( 'Image', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
				
			],


			'testi_name'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Person Name', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
],

'testi_des'   => [
	'type'        => 'text',
	'label'       => esc_html__( 'Person Designation', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'default'     => '',
],


'testi_comment'   => [
	'type'        => 'textarea',
	'label'       => esc_html__( 'Person Comment', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'default'     => '',
],

		],

		'choices' => [
			'limit' => 5
		],
	]
);


//** Blog Section  */


new \Kirki\Section(
	'blog_section',
	[
		'title'       => esc_html__( 'Blog Section', 'kirki' ),
		'description' => esc_html__( 'Blog Description.', 'kirki' ),
		'panel'       => 'theme_panel',
		'priority'    => 160,
	]
);


//**Blog Section  Control */ 

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'switch_blog_section',
		'label'       => esc_html__( 'Switch Section', 'kirki' ),
		'description' => esc_html__( 'Enable/Disable', 'kirki' ),
		'section'     => 'skill_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);




//**Blog Section  Heading */

new \Kirki\Field\Text(
	[
		'settings' => 'skill_heading',
		'label'    => esc_html__( 'Blog Heading', 'kirki' ),
		'section'  => 'blog_section',
		'default'  => esc_html__( '', 'kirki' ),
		'priority' => 10,
	]
);


//**Blog Section  Description */
new \Kirki\Field\Textarea(
	[
		'settings' => 'blog_description',
		'label'    => esc_html__( 'Blog Description', 'kirki' ),
		'section'  => 'blog_section',
		'default'  => esc_html__( '', 'kirki' ),
		'priority' => 10,
	]
);





//** Noteable Section */ //






new \Kirki\Section(
	'note_section',
	[
		'title'       => esc_html__( 'Noteable Section', 'kirki' ),
		'description' => esc_html__( 'Noteable Section Description.', 'kirki' ),
		'panel'       => 'theme_panel',
		'priority'    => 160,
	]
);


//**Noteable Section  Control */ 

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'switch_noteable_section',
		'label'       => esc_html__( 'Switch Section', 'kirki' ),
		'description' => esc_html__( 'Enable/Disable', 'kirki' ),
		'section'     => 'note_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);


//**Note Section  Heading */

new \Kirki\Field\Text(
	[
		'settings' => 'noteable_heading',
		'label'    => esc_html__( 'Work Heading', 'kirki' ),
		'section'  => 'note_section',
		'default'  => esc_html__( '', 'kirki' ),
		'priority' => 10,
	]
);


//**Note Section  Description */
new \Kirki\Field\Textarea(
	[
		'settings' => 'note_description',
		'label'    => esc_html__( 'Work Description', 'kirki' ),
		'section'  => 'note_section',
		'default'  => esc_html__( '', 'kirki' ),
		'priority' => 10,
	]
);

/**Note Section Repeater */


new \Kirki\Field\Repeater(
	[
		'settings'     => 'note_repeater',
		'label'        => esc_html__( 'Team Control', 'kirki' ),
		'section'      => 'note_section',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Noteable Images', 'kirki' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__( 'Add Noteable Image ', 'kirki' ),
		'default'      => [
			[
				
				'note_img'   => esc_html__( '', 'kirki' ),
				
				
			],
			
		],
		'fields'       => [

			

			'note_img'   => [
				'type'        => 'image',
				'label'       => esc_html__( 'Note Image', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
			],


		


			



		],

		'choices' => [
			'limit' => 4
		],
	]
);


//** Contact Section  */


new \Kirki\Section(
	'contact_section',
	[
		'title'       => esc_html__( 'Contact Section', 'kirki' ),
		'description' => esc_html__( 'Contact Description.', 'kirki' ),
		'panel'       => 'theme_panel',
		'priority'    => 160,
	]
);






//**Contact Section  Heading */

new \Kirki\Field\Text(
	[
		'settings' => 'contact_heading',
		'label'    => esc_html__( 'Contact Heading', 'kirki' ),
		'section'  => 'contact_section',
		'default'  => esc_html__( '', 'kirki' ),
		'priority' => 10,
	]
);


//**Contact Section  Description */
new \Kirki\Field\Textarea(
	[
		'settings' => 'contact_description',
		'label'    => esc_html__( 'Contact Description', 'kirki' ),
		'section'  => 'contact_section',
		'default'  => esc_html__( '', 'kirki' ),
		'priority' => 10,
	]
);

//**Contact Section  Subheading */

new \Kirki\Field\Text(
	[
		'settings' => 'contact_subheading',
		'label'    => esc_html__( 'Contact Sub Heading', 'kirki' ),
		'section'  => 'contact_section',
		'default'  => esc_html__( '', 'kirki' ),
		'priority' => 10,
	]
);




/**Contact Section Repeater */


new \Kirki\Field\Repeater(
	[
		'settings'     => 'contact_repeater',
		'label'        => esc_html__( 'Contact Control', 'kirki' ),
		'section'      => 'contact_section',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Contact Info', 'kirki' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__( 'Add new noteable ', 'kirki' ),
		'default'      => [
			[
				'contact_icon'   => esc_html__( '', 'kirki' ),
				'contact_des'   => esc_html__( '', 'kirki' ),
			
			
					
			],
			
		],
		'fields'       => [

			

			'contact_icon'   => [
				'type'        => 'select',
				'label'       => esc_html__( 'Icon', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
				'choices' => array(
					'lni-map-marker' =>__('Icon 1','kirki'),
					'lni-envelope' =>__('Icon 2','kirki'),
					'contact-icon' =>__('Icon 2','kirki'),
					

				),
				
			],


			'contact_des'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'contact description', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
				
			],

			
		],

		'choices' => [
			'limit' => 3
		],
	]
);




//** Footer Section  */





new \Kirki\Section(
	'footer_section',
	[
		'title'       => esc_html__( 'Footer Section', 'kirki' ),
		'description' => esc_html__( 'Footer Section Description.', 'kirki' ),
		'panel'       => 'theme_panel',
		'priority'    => 160,
	]
);




//**Footer Img */

new \Kirki\Field\Image(
	[
		'settings' => 'footer_img',
		'label'    => esc_html__( 'Footer Image', 'kirki' ),
		'section'  => 'work_section',
		'default'  => esc_html__( '', 'kirki' ),
		'priority' => 10,
	]
);




/**Footer Section Repeater1 */


new \Kirki\Field\Repeater(
	[
		'settings'     => 'footer_repeater1',
		'label'        => esc_html__( 'Footer Media', 'kirki' ),
		'section'      => 'footer_section',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Media Type', 'kirki' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__( 'Add new work ', 'kirki' ),
		'default'      => [
			[
				
				'media_link'   => esc_html__( '', 'kirki' ),
				'media_name'   => esc_html__( '', 'kirki' ),
				
				
			],
			
		],
		'fields'       => [

			

			'media_link'   => [
				'type'        => 'link',
				'label'       => esc_html__( 'Social Media Link', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
			],

			'media_name'   => [
				'type'        => 'select',
				'label'       => esc_html__( 'Social Media Icon', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
				'choices' => array(
					'lni-facebook-filled' =>__('Facebook','kirki'),
					'lni-twitter-filled' =>__('Twitter','kirki'),
					'lni-instagram-filled' =>__('Instagram','kirki'),
					'lni-linkedin-filled' =>__('Linkdin','kirki')
				),
			],

			


			



		],

		'choices' => [
			'limit' => 4		],
	]
);





		
/**Footer Section Copyright Repeater */








new \Kirki\Field\Repeater(
	[
		'settings'     => 'footer_repeater2',
		'label'        => esc_html__( 'Footer Copyright', 'kirki' ),
		'section'      => 'footer_section',
		'priority'     => 10,
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Footer Copyright', 'kirki' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__( 'Add Footer Copyright ', 'kirki' ),
		'default'      => [
			[
				
				'copyright_text'   => esc_html__( '', 'kirki' ),
				'copyright_link'   => esc_html__( '', 'kirki' ),
				'copyright_name'   => esc_html__( '', 'kirki' ),
				
				
			],
			
		],
		'fields'       => [

			

			'copyright_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Copyriht Text', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
			],

			'copyright_link'   => [
				'type'        => 'link',
				'label'       => esc_html__( 'Copyright Link', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
				
			],
			'copyright_name'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Copyright name', 'kirki' ),
				'description' => esc_html__( '', 'kirki' ),
				'default'     => '',
				
			],

			


			



		],

		'choices' => [
			'limit' => 1		],
	]
);

	
