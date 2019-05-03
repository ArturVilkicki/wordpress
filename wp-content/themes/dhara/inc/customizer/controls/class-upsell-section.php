<?php
/**
 * The upsell Customizer section.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( class_exists( 'WP_Customize_Section' ) && ! class_exists( 'Dhara_Upsell_Section' ) ) {
	/**
	 * Create our upsell section.
	 * Escape your URL in the Customizer using esc_url().
	 *
	 */
	class Dhara_Upsell_Section extends WP_Customize_Section {
		public $type = 'dhara-upsell-section';
		public $pro_url = '';
		public $pro_text = '';
		public $id = '';

		public function json() {
			$json = parent::json();
			$json['pro_text'] = $this->pro_text;
			$json['pro_url']  = esc_url( $this->pro_url );
			$json['id'] = $this->id;
			return $json;
		}

		protected function render_template() {
			?>
			<li id="accordion-section-{{ data.id }}" class="dhara-upsell-accordion-section control-section-{{ data.type }} cannot-expand accordion-section">
				<h3><a href="{{{ data.pro_url }}}" target="_blank">{{ data.pro_text }}</a></h3>
			</li>
			<?php
		}
	}
}

if ( ! function_exists( 'dhara_customizer_controls_css' ) ) {
	add_action( 'customize_controls_enqueue_scripts', 'dhara_customizer_controls_css' );
	/**
	 * Add CSS for our controls
	 *
	 */
	function dhara_customizer_controls_css() {
		wp_enqueue_style( 'dhara-customizer-controls-css', trailingslashit( get_template_directory_uri() ) . 'inc/customizer/controls/css/upsell-customizer.css', array(), DHARA_VERSION );
		wp_enqueue_script( 'dhara-upsell', trailingslashit( get_template_directory_uri() ) . 'inc/customizer/controls/js/upsell-control.js', array( 'customize-controls' ), false, true );
	}
}
