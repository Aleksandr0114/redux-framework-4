<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Text', 'your-domain-here' ),
		'desc'             => esc_html__( 'For full documentation on this field, visit: ', 'your-domain-here' ) . '<a href="//docs.redux.io/core/fields/text/" target="_blank">docs.redux.io/core/fields/text/</a>',
		'id'               => 'basic-text',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'text-example',
				'type'     => 'text',
				'title'    => esc_html__( 'Text Field', 'your-domain-here' ),
				'subtitle' => esc_html__( 'Subtitle', 'your-domain-here' ),
				'desc'     => esc_html__( 'Field Description', 'your-domain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'        => 'text-example-hint',
				'type'      => 'text',
				'title'     => esc_html__( 'Text Field w/ Hint', 'your-domain-here' ),
				'subtitle'  => esc_html__( 'Subtitle', 'your-domain-here' ),
				'desc'      => esc_html__( 'Field Description', 'your-domain-here' ),
				'default'   => 'Default Text',
				'text_hint' => array(
					'title'   => 'Hint Title',
					'content' => 'Hint content about this field!',
				),
			),
			array(
				'id'          => 'text-placeholder',
				'type'        => 'text',
				'title'       => esc_html__( 'Text Field', 'your-domain-here' ),
				'subtitle'    => esc_html__( 'Subtitle', 'your-domain-here' ),
				'desc'        => esc_html__( 'Field Description', 'your-domain-here' ),
				'placeholder' => 'Placeholder Text',
			),
		),
	)
);