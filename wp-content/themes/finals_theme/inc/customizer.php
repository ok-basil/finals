<?php
/**
 * finals_theme Theme Customizer
 *
 * @package finals_theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function finals_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'finals_theme_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'finals_theme_customize_partial_blogdescription',
			)
		);
	}

	/**
	 * Add our Footer Panel
	 */
	$wp_customize->add_panel( 'footer_navigation_panel',
		array(
			'title'			=>	__( 'Footer Navigation' ),
			'description'	=>	esc_html__( 'Adjust your Footer Navigation section' ),
			'priority'		=>	160,
		)
	);

	/**
	 * Add our footer section
	 */
	$wp_customize->add_section( 'footer_section',
		array(
			'title' 		=>	__( 'Footer Section' ),
			'description'	=>	esc_html__( 'This is where the footer section resides' ),
			'panel'			=> 'footer_navigation_panel',
		)
	);

	/**
	 * Add our footer contact email setting
	 */
	$wp_customize->add_setting( 'footer_contact_email' );

	/**
	 * Adding our controls
	 */
	$wp_customize->add_control ( 'footer_contact_email',
		array(
			'label' 			=>__('Footer Contact Email'),
			'description'		=> esc_html__( 'Enter the footer contact email address here' ),
			'section'			=> 'footer_section',
			'type'				=> 'textarea',
			'input_attrs' 		=> array(
				'class'			=> 'address_field',
				'style'			=> 'border: 1px solid purple',
				'placeholder'	=>__( 'Input email address'),
			)
		)
	);

	/**
	 * Adding our footer address setting
	 */
	$wp_customize->add_setting( 'footer_address' );

	/**
	 * Adding our footer address controls
	 */
	$wp_customize->add_control( 'footer_address',
		array(
			'label'				=>__( 'Footer Address' ),
			'description'		=> esc_html__( 'Enter the footer address here' ),
			'section'			=> 'footer_section',
			'type'				=> 'textarea',
			'input_attrs'		=> array(
				'class'			=> 'address_field',
				'style'			=> 'border: 1px solid purple',
				'placeholder'	=>__( 'Input address' ),
			)
		)
	);
}
add_action( 'customize_register', 'finals_theme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function finals_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function finals_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function finals_theme_customize_preview_js() {
	wp_enqueue_script( 'finals_theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'finals_theme_customize_preview_js' );
