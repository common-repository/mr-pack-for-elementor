<?php
add_action( 'admin_menu', 'MRPACK_panel' );

function MRPACK_panel() {
	add_menu_page(
	'مستر پک',
	'مستر پک',
	'manage_options',
	'MRPACK',
	'mrp_settings_section_callback',
	MRPACK_URL.'/includes/assets/images/menu-icon.svg',
	58);
 
}
function mrpack_dashboard_widgets() {
global $wp_meta_boxes;
wp_add_dashboard_widget('custom_help_widget', 'مستر پک', 'custom_dashboard_help');
}
 
function custom_dashboard_help() {
echo '
<div id="title-mrpack-feed" class="title-mrpack-feed">
<h4> آخرین پست های وبسایت آقای برنامه نویس </h4>
</div>
';
$rss_feed = simplexml_load_file("https://mr-programer.ir/feed/");
if(!empty($rss_feed)) {
$i=0;
foreach ($rss_feed->channel->item as $feed_item) {
if($i>=4) break;
?>
<div><a class="feed_title_mrpack" target="_blank" href="<?php echo $feed_item->link; ?>"><?php echo $feed_item->title; ?></a></div>
<div><span class="feed_description_mrpack" >
<?php echo implode(' ', array_slice(explode(' ', $feed_item->description), 0, 20)) . "..."; ?>
</span></div>
<?php		
$i++;	
}}
echo '
<div id="mrpack-shortcuts" class="mrpack-shortcuts">
          <ul>
            <li><a href="https://mr-programer.ir/" target="_blank" title="آقای برنامه نویس"><span class="dashicons dashicons-wordpress"></span></a></li>
            <li><a href="https://mr-programer.ir/product-category/themes/" target="_blank" title="قالب های وردپرس"><span class="dashicons dashicons-admin-appearance"></span></a></li>
            <li><a href="https://mr-programer.ir/product-category/plugins/" target="_blank" title="افزونه های وردپرس"><span class="dashicons dashicons-admin-plugins"></span></a></li>
            <li><a href="https://faq.mr-programer.ir/" target="_blank" title="دریافت پشتیبانی"><span class="dashicons dashicons-sos"></span></a></li>
            <li><a href="https://mr-programer.ir/blog/" target="_blank" title="آموزش وردپرس"><span class="dashicons dashicons-welcome-learn-more"></span></a></li>
          </ul>
        </div>
';}





function mrpack_remove_admin_footer(){
echo '<span id="footer-support-mrpack">دریافت پشتیبانی در <a href="https://mr-programer.ir/" target="_blank"> وبسایت آقای برنامه نویس </a></span>';
}
function mrp_settings_section_callback(  ) { 

?>
	<div class="wrap about-wrap">
		<h1>به مستر پک خوش آمديد</h1>
			<div class="about-text">لذت طراحی با زبان فارسی و ظاهر زيبا</div>

		<a class="wp-badge" href="#" target="_blank"	style="
		background-color: #93033c00 !important;
    background-image: url(<?php echo plugin_dir_url( __FILE__ ) . 'assets/images/mr-pack-icon.svg'; ?>) !important;
    background-position: center center;
    background-size: 129px auto !important;
    box-shadow: none;
		"></a>

		<div class="nav-tab-wrapper">
			<a class="nav-tab nav-tab-active" href="#" target="_blank">تنظيمات</a>
			<a class="nav-tab" href="https://mr-programer.ir/" target="_blank">دریافت پشتیبانی</a>
			<a class="nav-tab" href="https://mr-programer.ir/mester-pack-plugin/" target="_blank">آموزش های افزونه</a>
		</div>
<?php
}
function mrp_persian_li() {
	?>
	<style>
header.exopite-sof-header.exopite-sof-header-js {
    border-radius: 5px 5px 0px 0px;
}

/*باکس فید خوان*/
#mrpack-shortcuts li {
    float: right;
    min-width: 20%;
    text-align: center;
    color: #486581;
}
#mrpack-shortcuts span {
    font-family: dashicons;
    font-size: 3em;
    display: inline;
    text-align: center;
}
#mrpack-shortcuts ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    margin-top: 30px;
    min-height: 50px;
    margin-right: -15px;
}
#mrpack-shortcuts li a {
    color: #486581;
}
a.feed_title_mrpack {
    color: #395066;
    font-size: 14px;
    font-weight: 600;
    line-height: 2;
	    text-decoration: none;
}
span.feed_description_mrpack {
    display: block;
    padding-bottom: 9px;
    margin-bottom: 7px;
    border-bottom: 1px solid #e4ebf2;
}
a.feed_title_mrpack:hover {
    color: #886eff;
}
#title-mrpack-feed {
    text-align: center;
    background: #eaeff5;
    padding-top: 13px;
    padding-bottom: 5px;
    margin-bottom: 15px;
    border-radius: 3px;
}
		
/*پایان فید خوان*/

.exopite-sof-wrapper-menu {
    margin-left: 0!important;
}

	.wrap-license-mrp .pluginname {
    background: #f9f9f9;
    padding: 14px;
    border-bottom: 1px solid #ccc;
    margin: -14px -14px 20px;
    width: 100%;
}
.wrap-license-mrp{
	margin: 25px 0px 10px 10px;
    background: #fff;
    border: 1px solid #ccc;
    max-width: 535px;
    padding: 15px;
    min-height: 220px;
    position: relative;
    box-sizing: border-box;
}
label.description {
    font-size: 13px;
    top: 9px;
    position: relative;
}
p.exopite-sof-description {
    font-size: 13px;
    text-align: right;
	font-family: 'Vazir';
}
.exopite-sof-content-nav {
    background-color: #fff0!important;
}
span.exopite-sof-nav-list-item-title {
    font-weight: 100 !important;
    font-size: 13px !important;
}
.exopite-sof-header h1 {
    font-weight: 600;
    text-shadow: 1.5px 1.5px 3px #00000047;
}
.exopite-sof-nav {
    background: #1d2327 !important;
}
span.exopite-sof-nav-list-item-title {
    color: #ffffffba;
}
#MRPACK-save {
    border: 0px;
    background: #52c356;
	transition: 0.2s;
}
#MRPACK-save:focus {
    outline: 0px !important;
    border: 0px;
    box-shadow: none;
}
#MRPACK-save:hover {
    background: #4eb351;
}
.exopite-sof-nav-list-item, .exopite-sof-nav-list-parent-item>span {
    color: #23282d!important;
    border-bottom: 1px solid #ffffff0d!important;
}
.exopite-sof-nav-list-item:hover, .exopite-sof-nav-list-parent-item>span:hover {
    color: #5f5f5f;
}
.linespase {
    border-top: 1px solid #eee;
    padding-top: 30px;
    margin-top: 30px;
}
li.exopite-sof-nav-list-item {
    transition: 0.2s;
}
li.exopite-sof-nav-list-item.active {
    transition: 0.2s !important;
}
.class-name p {
    font-size: 14px;
    line-height: 1.5;
    margin: 1em 0;
}
strong {
    font-size: 14.5px;
    line-height: 1.5;
}
.class-name h2 {
    text-align: revert;
    color: #1d2327;
    font-size: 1.3em;
    margin: 1em 0;
}
.exopite-sof-nav-list-item.active {
    border-right: 3px solid #7d6eff!important;
    color: #ffffff!important;
    background-color: #fff0!important;
}
.exopite-sof-nav-list-item.active span {
    color: #fff;
}
.exopite-sof-header {
    background: linear-gradient( 90deg , #786eff 0%, #986dff 100%) !important;
}
.toplevel_page_MRPACK img{
    width: 20px;height: 20px;margin-left: 5px;
}
.checkbox__switch:after,.checkbox__input:checked+.checkbox__switch,.checkbox__switch {
    border-radius: 100px!important;
}
.checkbox__input:checked+.checkbox__switch {
    border-color: #01d28e26!important;
    background-color: #01d28e26!important;
}
.checkbox__switch {
    background-color: #fa163f26!important;
}
.exopite-sof-content .info {
    color: #062748!important;
    background-color: #1089ff26!important;
    border-color: #1089ff26!important;
}
.exopite-sof-sections,.exopite-sof-nav {
    box-shadow: 1px 1px 10px 0 rgba(0,0,0,0.05);
}
span.exopite-sof-search-wrapper {
    display: none;
}
@media (min-width:768px) {
.exopite-sof-sections {
    margin-right: 25px;
}}
	</style>
	<?php
}
add_action( 'admin_head', 'mrp_persian_li' );
add_filter('admin_footer_text', 'mrpack_remove_admin_footer');
add_action('wp_dashboard_setup', 'mrpack_dashboard_widgets');