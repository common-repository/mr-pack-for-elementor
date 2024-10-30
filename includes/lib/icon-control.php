<?php

/**
 * MrPack icons.
 *
 *
 * @since 2.0.8
 */
 
$options = get_option('MRPACK');
if ( $options['mrp-iranian-icon'] == 'yes') {

// Enqueue Editor
	add_action('elementor/editor/before_enqueue_scripts', function() {
		wp_enqueue_style( 'mrpack-icon',plugins_url( 'icons\ele-icons\style.css',  __FILE__ ) );
});

// Enqueue Front End
	add_action('elementor/frontend/before_enqueue_styles', function() {
		wp_enqueue_style( 'mrpack-icon',plugins_url( 'icons\ele-icons\style.css',  __FILE__ ) );
});

}