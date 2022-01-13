<?php

class My_Elementor_Widgets {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once('animated-shapes-widget/animated-shapes.php');
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Animated_Shapes_Widget() );
	}

}

add_action( 'init', 'my_elementor_init' );
function my_elementor_init() {
	My_Elementor_Widgets::get_instance();
}

function add_elementor_widget_categories( $elements_manager ) {

	$elements_manager->add_category(
		'EL MOKRI',
		[
			'title' => __( 'EL MOKRI', 'animated-shapes' ),
			'icon' => 'fab fa-medium-m',
			
		]
	);
	
}
add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories' );