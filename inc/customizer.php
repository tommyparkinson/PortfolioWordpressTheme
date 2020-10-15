<?php
function recipe_customize_register($wp_customize){

	// Front Page Section
	$wp_customize->add_section('Front Page', array(
		'title'	=> __('Front Page', 'portfolio'),
		'description'	=> sprintf(__('Options for the front page about section', 'portfolio')),
		'priority'	=> 130
	));


	// Front Page Image Setting
	$wp_customize->add_setting('front_page_image', array(
		'default'		=> get_bloginfo('template_directory').'/img/header-img.png',
		'type'			=> 'theme_mod'
	));

	// Front Page Image Control
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'front_page_image', array(
			'label'	=> __('Front Page Image', 'portfolio'),
			'section'	=> 'Front Page',
			'settings'	=> 'front_page_image'
	)));

	// Front Page Intro Text Setting
	$wp_customize->add_setting('front_page_intro_text', array(
		'default'		=> _x('Hi, my name is...', 'portfolio'),
		'type'			=> 'theme_mod'
	));

	// Front Page Intro Text Control
	$wp_customize->add_control('front_page_intro_text', array(
		'label'			=> __('Intro Text', 'portfolio'),
		'section'		=> 'Front Page',
		'priority'		=> 20
	));

	// Front Page Title Setting
	$wp_customize->add_setting('front_page_title', array(
		'default'		=> _x('Portfolio Theme', 'portfolio'),
		'type'			=> 'theme_mod'
	));

	// Front Page Title Control
	$wp_customize->add_control('front_page_title', array(
		'label'			=> __('Title', 'portfolio'),
		'section'		=> 'Front Page',
		'priority'		=> 20
	));

	// Front Page Subtitle Setting
	$wp_customize->add_setting('front_page_subtitle', array(
		'default'		=> _x('You can find my projects here', 'portfolio'),
		'type'			=> 'theme_mod'
	));

	// Front Page Subtitle Control
	$wp_customize->add_control('front_page_subtitle', array(
		'label'			=> __('Subitle', 'portfolio'),
		'section'		=> 'Front Page',
		'priority'		=> 20
	));

	// Front Page Button 1 Setting
	$wp_customize->add_setting('front_page_button1_text', array(
		'default'		=> _x('Projects', 'portfolio'),
		'type'			=> 'theme_mod'
	));

	// Front Page Button 1 Control
	$wp_customize->add_control('front_page_button1_text', array(
		'label'			=> __('Button 1 Text', 'portfolio'),
		'section'		=> 'Front Page',
		'priority'		=> 20
	));

	// Front Page Button 2 Setting
	$wp_customize->add_setting('front_page_button2_text', array(
		'default'		=> _x('Contact', 'portfolio'),
		'type'			=> 'theme_mod'
	));

	// Front Page Button 2 Control
	$wp_customize->add_control('front_page_button2_text', array(
		'label'			=> __('Button 2 Text', 'portfolio'),
		'section'		=> 'Front Page',
		'priority'		=> 20
	));

	// Front Page Button 1 Link Setting
	$wp_customize->add_setting('front_page_button1_link', array(
		'default'		=> _x('#', 'portfolio'),
		'type'			=> 'theme_mod'
	));

	// Front Page Button 1 Link Control
	$wp_customize->add_control('front_page_button1_link', array(
		'label'			=> __('Button 1 Link', 'portfolio'),
		'section'		=> 'Front Page',
		'priority'		=> 20
	));

	// Front Page Button 2 Link Setting
	$wp_customize->add_setting('front_page_button2_link', array(
		'default'		=> _x('#', 'portfolio'),
		'type'			=> 'theme_mod'
	));

	// Front Page Button 2 Link Control
	$wp_customize->add_control('front_page_button2_link', array(
		'label'			=> __('Button 2 Link', 'portfolio'),
		'section'		=> 'Front Page',
		'priority'		=> 20
	));




}

add_action('customize_register', 'recipe_customize_register');