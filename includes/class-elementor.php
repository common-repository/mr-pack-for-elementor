<?php
/**
* Mrpack font.
*
*
* @since 2.3.0
*/

class MrPackCore
{

	public function option($option, $bool = false, $default = true)
	{
		$options = get_option('MRPACK');

		if (!isset($options[$option]) && $default === true)
		{
			return true;
		}
		if (!isset($options[$option]) && $default === false)
		{
			return false;
		}
		if ($bool === true)
		{
			if ($options[$option] == 'yes'):
				return true;
			else:
				return false;
			endif;
		}
		else
		{
			return $options[$option];
		}
	}
	
}

new MrPackCore;


$options = get_option('MRPACK');

if (  @$options['mrp-panel-font'] && @$options['mrp-panel-font'] != 'no') {
// Enqueue Editor
	add_action('elementor/editor/before_enqueue_scripts', function() {
		wp_enqueue_style( 'mrpack',plugins_url( 'assets/css/editor-rtl.min.css', __FILE__ ) );
});

// Enqueue Preview
	add_action('elementor/preview/enqueue_styles', function() {
		wp_enqueue_style( 'mrpack-preview',plugins_url( 'assets/css/preview-rtl.css', __FILE__ ) );
});

// Enqueue Common
	add_action('admin_enqueue_scripts', function() {
		wp_enqueue_style( 'mrpack-common',plugins_url( 'assets/css/common-rtl.css', __FILE__ ) );
	});
	
// Enqueue Common app
	add_action('elementor/app/init', function() {
		wp_enqueue_style( 'mrpack-common',plugins_url( 'assets/css/common-rtl.css', __FILE__ ) );
	});
	
}

if ( @$options['mrp-all-font'] && @$options['mrp-all-font'] != 'no') {
/**
 * Enqueue Persian Font Front End
 */
    function mrp_persian_font() {
			wp_enqueue_style( 'mrpack-font', 'https://cdn.mr-programer.ir/mrpack/fonts.css' );
	}
	add_action( 'elementor/frontend/before_enqueue_styles', 'mrp_persian_font' );

}

if ( @$options['mrp-flatpickr'] && @$options['mrp-flatpickr'] != 'no') { 
/**
 * Enqueue RTL Flatpickr Front End
 */
function mrp_persian_flatpickr() {
	wp_enqueue_style( 'mrpack-flatpickr',plugins_url( 'assets/css/flatpickr-rtl.css', __FILE__ ) );
}
add_action( 'elementor/frontend/before_enqueue_styles', 'mrp_persian_flatpickr' );

/**
 * Enqueue Flatpickr Mobile
 */
function mrp_persian_flatpickr_Mobile() {
	wp_enqueue_script( 'mrpack-flatpickr',plugins_url( 'assets/js/flatpickr-mobile.js', __FILE__ ) , [ 'flatpickr' ]  );
}
add_action( 'elementor/frontend/before_enqueue_styles', 'mrp_persian_flatpickr_Mobile' );

}