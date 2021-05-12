<?php function meutema_customize_register( $wp_customize ) {

	$wp_customize->add_section(
		'rodape',
		array(
			'title'    => __( 'Rodapé' ),
			'priority' => 201,
		)
	);

    $wp_customize->add_setting( 'text_company' );
    $wp_customize->add_setting( 'logo_company' );

    $wp_customize->add_setting( 'text_associated' );
    $wp_customize->add_setting( 'logo_associated_1' );
    $wp_customize->add_setting( 'logo_associated_2' );
    
	$wp_customize->add_control(
		'text_company',
		array(
			'label'   => __( 'Texto um' ),
			'section' => 'rodape',
		)
	);

    $wp_customize->add_control(
		'text_associated',
		array(
			'label'   => __( 'Texto dois' ),
			'section' => 'rodape',
		)
	);
 
	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'logo_company',
			array(
				'label'     => __( 'Logo empresa' ),
				'section'   => 'rodape',
				'mime_type' => 'image',
			)
		)
	);

    $wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'logo_associated_1',
			array(
				'label'     => __( 'Logo associado um' ),
				'section'   => 'rodape',
				'mime_type' => 'image',
			)
		)
	);

    $wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'logo_associated_2',
			array(
				'label'     => __( 'Logo associado dois' ),
				'section'   => 'rodape',
				'mime_type' => 'image',
			)
		)
	);
}

add_action( 'customize_register', 'meutema_customize_register' );

?>