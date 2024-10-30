<?php
/**
 * Plugin Name: مستر پک برای المنتور
 * Plugin URI: https://mr-programer.ir/mester-pack-plugin/
 * Description: بسته فارسی ساز المنتور مستر پک، افزودن امکانات ویژه پارسی به افزونه المنتور! اضافه شدن فونت های فارسی، قالب های آماده فارسی در کتابخانه المنتور ، بهبود ظاهر المنتور و...
 * Version: 2.3.2
 * Author: آقای برنامه نویس
 * Author URI: https://mr-programer.ir/
 * Text Domain: mrpack
 * Tested up to: 5.7.1
 * Tags: المنتور, المنتور فارسی,وردپرس,مستر پک,آقای برنامه نویس,سعید حسنی,persians,mr-programer.ir,mrpack,mr.pack,iranian,rtl,fa_IR,persian,iran,farsi,elementor,persian elementor
 */

add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'my_plugin_action_links' );
 
function my_plugin_action_links( $actions ) {
   $actions[] = '<a href="'. esc_url( get_admin_url(null, '/admin.php?page=MRPACK') ) .'">تنظیمات</a>';
   $actions[] = '<a href="https://mr-programer.ir/" target="_blank">پشتیبانی</a>';
   return $actions;
}

function mrp_activation_redirect( $plugin ) {
    if( $plugin == plugin_basename( __FILE__ ) ) {
        exit( wp_redirect( admin_url( '/admin.php?page=MRPACK' ) ) );
    }
}
add_action( 'activated_plugin', 'mrp_activation_redirect' );
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
define( 'MRPACK_VERSION', '2.3.2' );
define( 'MRPACK', plugin_dir_path(__FILE__));
define( 'MRPACK_DIRECTORY', plugin_dir_path( __FILE__ ) );
define( 'MRPACK_URL', plugins_url( '/', __FILE__ ) );

require_once(MRPACK.'includes/class-elementor.php');
require_once(MRPACK.'includes/class-translate.php');
require_once(MRPACK.'includes/class-admin.php');
require_once(MRPACK.'includes/class-options.php');

// Core Feature
require_once(MRPACK.'includes/lib/fonts.php');
require_once(MRPACK.'includes/lib/icon-control.php');
require_once(MRPACK.'includes/lib/style-admin.php');
require_once(MRPACK.'includes/lib/icon.php');
require_once(MRPACK.'includes/lib/localization.php');
require_once(MRPACK.'includes/lib/exopite-simple-options/exopite-simple-options-framework-class.php');
require MRPACK_DIRECTORY . 'inc/mrpack-templates.php';