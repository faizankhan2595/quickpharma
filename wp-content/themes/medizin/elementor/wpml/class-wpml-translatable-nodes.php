<?php

namespace Medizin_Elementor;

defined( 'ABSPATH' ) || exit;

class WPML_Translatable_Nodes {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	public function initialize() {
		add_action( 'init', [ $this, 'wp_init' ] );
	}

	public function wp_init() {
		add_filter( 'wpml_elementor_widgets_to_translate', [ $this, 'wpml_widgets_to_translate_filter' ] );
	}

	public function get_translatable_node() {
		require_once MEDIZIN_ELEMENTOR_DIR . '/wpml/class-translate-widget-google-map.php';
		require_once MEDIZIN_ELEMENTOR_DIR . '/wpml/class-translate-widget-list.php';
		require_once MEDIZIN_ELEMENTOR_DIR . '/wpml/class-translate-widget-attribute-list.php';
		require_once MEDIZIN_ELEMENTOR_DIR . '/wpml/class-translate-widget-pricing-table.php';
		require_once MEDIZIN_ELEMENTOR_DIR . '/wpml/class-translate-widget-table.php';
		require_once MEDIZIN_ELEMENTOR_DIR . '/wpml/class-translate-widget-modern-carousel.php';
		require_once MEDIZIN_ELEMENTOR_DIR . '/wpml/class-translate-widget-modern-slider.php';
		require_once MEDIZIN_ELEMENTOR_DIR . '/wpml/class-translate-widget-team-member-carousel.php';
		require_once MEDIZIN_ELEMENTOR_DIR . '/wpml/class-translate-widget-testimonial-carousel.php';

		$widgets['tm-attribute-list'] = [
			'fields'            => [],
			'integration-class' => '\Medizin_Elementor\Translate_Widget_Attribute_List',
		];

		$widgets['tm-heading'] = [
			'fields' => [
				[
					'field'       => 'title',
					'type'        => esc_html__( 'Modern Heading: Primary', 'medizin' ),
					'editor_type' => 'AREA',
				],
				'title_link' => [
					'field'       => 'url',
					'type'        => esc_html__( 'Modern Heading: Link', 'medizin' ),
					'editor_type' => 'LINE',
				],
				[
					'field'       => 'description',
					'type'        => esc_html__( 'Modern Heading: Description', 'medizin' ),
					'editor_type' => 'AREA',
				],
				[
					'field'       => 'sub_title_text',
					'type'        => esc_html__( 'Modern Heading: Secondary', 'medizin' ),
					'editor_type' => 'AREA',
				],
			],
		];

		$widgets['tm-button'] = [
			'fields' => [
				[
					'field'       => 'text',
					'type'        => esc_html__( 'Button: Text', 'medizin' ),
					'editor_type' => 'LINE',
				],
				[
					'field'       => 'badge_text',
					'type'        => esc_html__( 'Button: Badge', 'medizin' ),
					'editor_type' => 'LINE',
				],
				'link' => [
					'field'       => 'url',
					'type'        => esc_html__( 'Button: Link', 'medizin' ),
					'editor_type' => 'LINK',
				],
			],
		];

		$widgets['tm-banner'] = [
			'fields' => [
				[
					'field'       => 'title_text',
					'type'        => esc_html__( 'Banner: Title', 'medizin' ),
					'editor_type' => 'LINE',
				],
				'link' => [
					'field'       => 'url',
					'type'        => esc_html__( 'Banner: Link', 'medizin' ),
					'editor_type' => 'LINK',
				],
			],
		];

		$widgets['tm-circle-progress-chart'] = [
			'fields' => [
				[
					'field'       => 'inner_content_text',
					'type'        => esc_html__( 'Circle Chart: Text', 'medizin' ),
					'editor_type' => 'LINE',
				],
			],
		];

		$widgets['tm-flip-box'] = [
			'fields' => [
				[
					'field'       => 'title_text_a',
					'type'        => esc_html__( 'Flip Box: Front Title', 'medizin' ),
					'editor_type' => 'LINE',
				],
				[
					'field'       => 'description_text_a',
					'type'        => esc_html__( 'Flip Box: Front Description', 'medizin' ),
					'editor_type' => 'AREA',
				],
				[
					'field'       => 'title_text_b',
					'type'        => esc_html__( 'Flip Box: Back Title', 'medizin' ),
					'editor_type' => 'LINE',
				],
				[
					'field'       => 'description_text_b',
					'type'        => esc_html__( 'Flip Box: Back Description', 'medizin' ),
					'editor_type' => 'AREA',
				],
				[
					'field'       => 'button_text',
					'type'        => esc_html__( 'Flip Box: Button Text', 'medizin' ),
					'editor_type' => 'LINE',
				],
				'link' => [
					'field'       => 'url',
					'type'        => esc_html__( 'Flip Box: Link', 'medizin' ),
					'editor_type' => 'LINK',
				],
			],
		];

		$widgets['tm-google-map'] = [
			'fields'            => [],
			'integration-class' => '\Medizin_Elementor\Translate_Widget_Google_Map',
		];

		$widgets['tm-icon'] = [
			'fields' => [
				'link' => [
					'field'       => 'url',
					'type'        => esc_html__( 'Icon: Link', 'medizin' ),
					'editor_type' => 'LINK',
				],
			],
		];

		$widgets['tm-icon-box'] = [
			'fields' => [
				[
					'field'       => 'title_text',
					'type'        => esc_html__( 'Icon Box: Title', 'medizin' ),
					'editor_type' => 'LINE',
				],
				[
					'field'       => 'description_text',
					'type'        => esc_html__( 'Icon Box: Description', 'medizin' ),
					'editor_type' => 'AREA',
				],
				'link'        => [
					'field'       => 'url',
					'type'        => esc_html__( 'Icon Box: Link', 'medizin' ),
					'editor_type' => 'LINK',
				],
				[
					'field'       => 'button_text',
					'type'        => esc_html__( 'Icon Box: Button', 'medizin' ),
					'editor_type' => 'LINE',
				],
				'button_link' => [
					'field'       => 'url',
					'type'        => esc_html__( 'Icon Box: Button Link', 'medizin' ),
					'editor_type' => 'LINK',
				],
			],
		];

		$widgets['tm-image-box'] = [
			'fields' => [
				[
					'field'       => 'title_text',
					'type'        => esc_html__( 'Image Box: Title', 'medizin' ),
					'editor_type' => 'LINE',
				],
				[
					'field'       => 'description_text',
					'type'        => esc_html__( 'Image Box: Content', 'medizin' ),
					'editor_type' => 'AREA',
				],
				'link' => [
					'field'       => 'url',
					'type'        => esc_html__( 'Image Box: Link', 'medizin' ),
					'editor_type' => 'LINK',
				],
				[
					'field'       => 'button_text',
					'type'        => esc_html__( 'Image Box: Button', 'medizin' ),
					'editor_type' => 'LINE',
				],
			],
		];

		$widgets['tm-list'] = [
			'fields'            => [],
			'integration-class' => '\Medizin_Elementor\Translate_Widget_List',
		];

		$widgets['tm-popup-video'] = [
			'fields' => [
				[
					'field'       => 'video_text',
					'type'        => esc_html__( 'Popup Video: Text', 'medizin' ),
					'editor_type' => 'LINE',
				],
				'video_url' => [
					'field'       => 'url',
					'type'        => esc_html__( 'Popup Video: Link', 'medizin' ),
					'editor_type' => 'LINK',
				],
				[
					'field'       => 'poster_caption',
					'type'        => esc_html__( 'Popup Video: Caption', 'medizin' ),
					'editor_type' => 'AREA',
				],
			],
		];

		$widgets['tm-pricing-table'] = [
			'fields'            => [
				[
					'field'       => 'heading',
					'type'        => esc_html__( 'Pricing Table: Heading', 'medizin' ),
					'editor_type' => 'LINE',
				],
				[
					'field'       => 'sub_heading',
					'type'        => esc_html__( 'Pricing Table: Description', 'medizin' ),
					'editor_type' => 'LINE',
				],
				[
					'field'       => 'currency',
					'type'        => esc_html__( 'Pricing Table: Currency', 'medizin' ),
					'editor_type' => 'LINE',
				],
				[
					'field'       => 'price',
					'type'        => esc_html__( 'Pricing Table: Price', 'medizin' ),
					'editor_type' => 'LINE',
				],
				[
					'field'       => 'period',
					'type'        => esc_html__( 'Pricing Table: Period', 'medizin' ),
					'editor_type' => 'LINE',
				],
				[
					'field'       => 'button_text',
					'type'        => esc_html__( 'Pricing Table: Button', 'medizin' ),
					'editor_type' => 'LINE',
				],
				'button_link' => [
					'field'       => 'url',
					'type'        => esc_html__( 'Pricing Table: Button Link', 'medizin' ),
					'editor_type' => 'LINK',
				],
			],
			'integration-class' => '\Medizin_Elementor\Translate_Widget_Pricing_Table',
		];

		$widgets['tm-table'] = [
			'fields'            => [],
			'integration-class' => [
				'\Medizin_Elementor\Translate_Widget_Pricing_Table_Head',
				'\Medizin_Elementor\Translate_Widget_Pricing_Table_Body',
			],
		];

		$widgets['tm-team-member'] = [
			'fields' => [
				[
					'field'       => 'name',
					'type'        => esc_html__( 'Team Member: Name', 'medizin' ),
					'editor_type' => 'LINE',
				],
				[
					'field'       => 'content',
					'type'        => esc_html__( 'Team Member: Content', 'medizin' ),
					'editor_type' => 'AREA',
				],
				[
					'field'       => 'position',
					'type'        => esc_html__( 'Team Member: Position', 'medizin' ),
					'editor_type' => 'LINE',
				],
				'profile' => [
					'field'       => 'url',
					'type'        => esc_html__( 'Team Member: Profile', 'medizin' ),
					'editor_type' => 'LINK',
				],
			],
		];

		$widgets['tm-modern-carousel'] = [
			'fields'            => [],
			'integration-class' => '\Medizin_Elementor\Translate_Widget_Modern_Carousel',
		];

		$widgets['tm-modern-slider'] = [
			'fields'            => [],
			'integration-class' => '\Medizin_Elementor\Translate_Widget_Modern_Slider',
		];

		$widgets['tm-team-member-carousel'] = [
			'fields'            => [],
			'integration-class' => '\Medizin_Elementor\Translate_Widget_Team_Member_Carousel',
		];

		$widgets['tm-testimonial-carousel'] = [
			'fields'            => [],
			'integration-class' => '\Medizin_Elementor\Translate_Widget_Testimonial_Carousel',
		];

		return $widgets;
	}

	public function wpml_widgets_to_translate_filter( $widgets ) {
		$medizin_widgets = $this->get_translatable_node();

		foreach ( $medizin_widgets as $widget_name => $widget ) {
			$widgets[ $widget_name ]               = $widget;
			$widgets[ $widget_name ]['conditions'] = [
				'widgetType' => $widget_name,
			];
		}

		return $widgets;
	}
}

WPML_Translatable_Nodes::instance()->initialize();
