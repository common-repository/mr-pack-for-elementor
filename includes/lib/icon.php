<?php

$options = get_option('MRPACK');
if ( $options['mrp-iranian-icon'] == 'yes') {
    
add_filter( 'elementor/icons_manager/native', 'add_mrpack_icons_to_icon_manager');

function add_mrpack_icons_to_icon_manager( $settings ) {
		$json_url = plugin_dir_url( __FILE__ ) . '/icons/ele-icons/config.json';

		$settings['mrpack_icons'] = [
			'name'          => 'Persian Icons - آیکون های ایرانی',
			'label'         => esc_html__( 'آیکون پک ایرانی', 'text-domain' ),
			'url'           => false,
			'enqueue'       => false,
			'prefix'        => 'efa-',
			'displayPrefix' => '',
			'labelIcon'     => 'efa-gap',
			'ver'           => '5.3.0',
			'fetchJson'     => $json_url,
			'native'        => true,
		];

		return $settings;
	}
}