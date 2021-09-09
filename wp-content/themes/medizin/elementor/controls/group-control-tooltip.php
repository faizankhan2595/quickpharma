<?php

namespace Medizin_Elementor;

use Elementor\Group_Control_Base;
use Elementor\Controls_Manager;

defined( 'ABSPATH' ) || exit;

/**
 * Elementor tooltip control.
 *
 * A base control for creating tooltip control.
 *
 * @since 1.0.0
 */
class Group_Control_Tooltip extends Group_Control_Base {

	protected static $fields;

	public static function get_type() {
		return 'tooltip';
	}

	protected function init_fields() {
		$fields = [];

		$fields['skin'] = [
			'label'   => esc_html__( 'Tooltip Skin', 'medizin' ),
			'type'    => Controls_Manager::SELECT,
			'options' => [
				''        => esc_html__( 'Black', 'medizin' ),
				'white'   => esc_html__( 'White', 'medizin' ),
				'primary' => esc_html__( 'Primary', 'medizin' ),
			],
			'default' => '',
		];

		$fields['position'] = [
			'label'   => esc_html__( 'Tooltip Position', 'medizin' ),
			'type'    => Controls_Manager::SELECT,
			'options' => [
				'top'          => esc_html__( 'Top', 'medizin' ),
				'right'        => esc_html__( 'Right', 'medizin' ),
				'bottom'       => esc_html__( 'Bottom', 'medizin' ),
				'left'         => esc_html__( 'Left', 'medizin' ),
				'top-left'     => esc_html__( 'Top Left', 'medizin' ),
				'top-right'    => esc_html__( 'Top Right', 'medizin' ),
				'bottom-left'  => esc_html__( 'Bottom Left', 'medizin' ),
				'bottom-right' => esc_html__( 'Bottom Right', 'medizin' ),
			],
			'default' => 'top',
		];

		return $fields;
	}

	protected function get_default_options() {
		return [
			'popover' => [
				'starter_title' => _x( 'Tooltip', 'Tooltip Control', 'medizin' ),
				'starter_name'  => 'enable',
				'starter_value' => 'yes',
				'settings'      => [
					'render_type' => 'template',
				],
			],
		];
	}
}
