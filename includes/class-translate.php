<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Load gettext translate for our text domain.
 *
 * @since 2.1.2
 *
 * @return void
 */
 
$options = get_option('MRPACK');

if ( @$options['mrp-elementor-pro']) {
if (get_locale() == 'fa_IR' ) {
// Elementor Pro
$text_domain = 'elementor-pro';
	$MRPACK_lang = MRPACK . "/languages/$text_domain/$text_domain-fa_IR.mo";
	$wordpress_lang = "content_url( string $path = '' )/languages/plugins/$text_domain-fa_IR.mo";
	unload_textdomain($text_domain);
	load_textdomain($text_domain, $MRPACK_lang );
}
}
if ( @$options['mrp-elementor'] ) {
if (get_locale() == 'fa_IR' ) {
// Elementor 
$text_domain = 'elementor';
	$MRPACK_lang = MRPACK . "/languages/$text_domain/$text_domain-fa_IR.mo";
	$wordpress_lang = "content_url( string $path = '' )/languages/plugins/$text_domain-fa_IR.mo";
	unload_textdomain($text_domain);
	load_textdomain($text_domain, $MRPACK_lang );
}
}
if ( @$options['mrp-ele-custom-skin'] ) {
if (get_locale() == 'fa_IR' ) {
// Ele Custom Skin 
$text_domain = 'ele-custom-skin';
	$MRPACK_lang = MRPACK . "/languages/$text_domain/$text_domain-fa_IR.mo";
	$wordpress_lang = "content_url( string $path = '' )/languages/plugins/$text_domain-fa_IR.mo";
	unload_textdomain($text_domain);
	load_textdomain($text_domain, $MRPACK_lang );
}
}
if ( @$options['mrp-essential-addons-for-elementor-lite']  ) {
if (get_locale() == 'fa_IR' ) {
// Essential Addons Lite
$text_domain = 'essential-addons-for-elementor-lite';
	$MRPACK_lang = MRPACK . "/languages/$text_domain/$text_domain-fa_IR.mo";
	$wordpress_lang = "content_url( string $path = '' )/languages/plugins/$text_domain-fa_IR.mo";
	unload_textdomain($text_domain);
	load_textdomain($text_domain, $MRPACK_lang );
}
}
if ( @$options['mrp-dynamicconditions']  ) {
if (get_locale() == 'fa_IR' ) {
// Dynamic Conditions
$text_domain = 'dynamicconditions';
	$MRPACK_lang = MRPACK . "/languages/$text_domain/$text_domain-fa_IR.mo";
	$wordpress_lang = "content_url( string $path = '' )/languages/plugins/$text_domain-fa_IR.mo";
	unload_textdomain($text_domain);
	load_textdomain($text_domain, $MRPACK_lang );
}
}
if ( @$options['mrp-woolentor']  ) {
if (get_locale() == 'fa_IR' ) {
// Woolentor
$text_domain = 'woolentor';
	$MRPACK_lang = MRPACK . "/languages/$text_domain/$text_domain-fa_IR.mo";
	$wordpress_lang = "content_url( string $path = '' )/languages/plugins/$text_domain-fa_IR.mo";
	unload_textdomain($text_domain);
	load_textdomain($text_domain, $MRPACK_lang );
}
}
if ( @$options['mrp-metform']  ) {
if (get_locale() == 'fa_IR' ) {
// MetForm
$text_domain = 'metform';
	$MRPACK_lang = MRPACK . "/languages/$text_domain/$text_domain-fa_IR.mo";
	$wordpress_lang = "content_url( string $path = '' )/languages/plugins/$text_domain-fa_IR.mo";
	unload_textdomain($text_domain);
	load_textdomain($text_domain, $MRPACK_lang );
}
}
if ( @$options['mrp-elementskit-lite'] ) {
if (get_locale() == 'fa_IR' ) {
// Elementskit Lite
$text_domain = 'elementskit-lite';
	$MRPACK_lang = MRPACK . "/languages/$text_domain/$text_domain-fa_IR.mo";
	$wordpress_lang = "content_url( string $path = '' )/languages/plugins/$text_domain-fa_IR.mo";
	unload_textdomain($text_domain);
	load_textdomain($text_domain, $MRPACK_lang );
}
}