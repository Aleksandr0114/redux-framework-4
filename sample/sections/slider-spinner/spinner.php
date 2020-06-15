<?php
/**
 * Redux Framework spinner config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Spinner', 'your-domain-here' ),
		'id'         => 'slider_spinner-spinner',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'your-domain-here' ) . '<a href="//docs.redux.io/core/fields/spinner/" target="_blank">docs.redux.io/core/fields/spinner/</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'opt-spinner',
				'type'        => 'spinner',
				'title'       => esc_html__( 'JQuery UI Spinner Example 1', 'your-domain-here' ),
				'desc'        => esc_html__( 'JQuery UI spinner description. Min:20, max: 100, step:20, default value: 40', 'your-domain-here' ),
				'default'     => '40',
				'min'         => '20',
				'step'        => '20',
				'max'         => '100',
				'suffix'      => '',
				'output_unit' => '',
				'output'      => array( '.heck-with-it' => 'max-width' ),
			),
		),
	)
);