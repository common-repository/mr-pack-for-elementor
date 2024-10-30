<?php
$options = get_option('MRPACK');
if ( $options['mrp-style-admin'] == 'yes') {
    function mrpack_style_admin() {   echo '<style> 
	
element.style {
    overflow: hidden;
    overflow-wrap: break-word;
    resize: none;
    height: 56px;
}
textarea#post-title-0 {
    border: 0px !important;
    box-shadow: none !important;
}
.tablenav.top {
    margin-bottom: 10px;
}
.about-wrap .wp-badge {
    margin-top: -35px !important;
    margin-left: -8px;
}
.nav-tab-wrapper {
    background: #fff;
    padding: 10px;
    border: 0px;
    margin-top: 20px;
    box-shadow: 0px 2px 6px 0px #9f9f9f17 !important;
    border-radius: 5px;
}
div#elementor-template-library-tabs-wrapper {
    box-shadow: 0px 0px 0px 6px #ffffff52;
    background: white;
    padding: 6px 8px !important;
    margin-top: 2em;
    border-radius: 4px;
}
a.nav-tab:hover {
    color: #7a6eff;
    transition: 0.1s;
	background: #f0f0f100;
}
a.nav-tab {
    font-size: 15px !important;
    font-weight: 600;
    outline: 0px;
    border-radius: 4px;
    border: 0px;
    color: #767a7b;
    background: #f0f0f100;
    transition: 0.1s;
    font-weight: 600;
    margin: 0px;
    padding-left: 15px;
    padding-right: 15px;
}
.nav-tab-active, .nav-tab-active:focus, .nav-tab-active:focus:active, .nav-tab-active:hover {
    border-bottom: 0px !important;
    background: #f1efff !important;
    border-radius: 4px;
    color: #7c6eff !important;
}
input[type=checkbox]:checked::before {
content: url(http://cdn.mr-programer.ir/mrpack/ticks-type-no.svg);
    margin: -.01rem -.03rem 0 0;
    height: 1px;
    width: 16.2px;
}
input,select,textarea{
outline: 0px !important;
    background: #fff;
    border: 1px solid #d9d9d9 !important;
    padding: 5px 12px !important;
        min-height: 35px !important;
    line-height: 1 !important;
    transition: 0.2s !important;
	    font-weight: 300;
    color: #324049;
    
}
input:focus,select:focus,textarea:focus{
        box-shadow: 0px 0px 0px 2.7px #2196f345 !important;
    border-color: #4cb0ff !important;
}

.wp-filter,.plugin-card {
    border: 1px #e1e1e1 solid;
    border-radius: 5px;
    box-shadow: 0px 3px 14px #00000008;
}

::-webkit-scrollbar {
    width: 10px;
    background: #f4f4f4;
}

::-webkit-scrollbar-thumb {
    background: #a6a6a6;
    border-radius: 00px;
}
::-webkit-scrollbar-track {
    border-radius: 0px;
    background: #f4f4f4;
}
.postbox:hover {
    transition: 0.3s !important;
    border: 1px solid #bfe3ff !important;
    box-shadow: 0px 0px 0px 3px #2196f317 !important;
}

.postbox {
    border: 1px solid #ffffff !important;
    box-shadow: 0px 2px 6px 0px #9f9f9f17 !important;
    padding: 4px 6px;
    transition: 0.3s !important;
    border-radius: 3px;
    transition: all 0s;
}
.postbox-header {
    border-bottom: 0px solid #78c3ff;
    overflow: hidden;
}
.rtl h1, .rtl h2, .rtl h3, .rtl h4, .rtl h5, .rtl h6 {
    color: #324049;
}
.postbox .handle-order-higher:focus, .postbox .handle-order-lower:focus, .postbox .handlediv:focus {
    outline: 0px !important;
    box-shadow: none !important;
	
}
#screen-meta-links .show-settings:focus,.wp-person a:focus .gravatar, a:focus, a:focus .media-icon img {
    box-shadow: 0px 0px 0px 3px #2196f345 !important;
    border-color: #4cb0ff !important;
}
input[type=checkbox], input[type=radio] {
    min-height: 18px !important;
    box-shadow: none;
    width: 18px;
}
.wrap .add-new-h2, .wrap .page-title-action {
    border: 1px solid #bec5c7;
    background: #bec5c7;
    transition: 0.25s;
    color: #fff;
    box-shadow: 0px 3px 11px #00000014;
    font-weight: 400;
    border-radius: 3px;
}
.wrap .add-new-h2:hover, .wrap .page-title-action:hover {
    background: #2ec4b6;
    color: #fff;
    font-weight: 400;
    box-shadow: 0px 3px 11px #2ec4b638;
    border-color: #2ec4b6;
    transition: 0.25s;
}
.upload-plugin .wp-upload-form {
    background: #fff;
    border-radius: 8px;
    border: 1.2px #e3e3e3;
    border-style: dashed;
}
select {
    padding-left: 25px !important;
}
.wp-core-ui .attachment-preview {
    border: 5px #fff solid !important;
    box-shadow: 0px 2px 8px #00000017;
    background: #fff !important;
    border-radius: 4px;
}
.wp-core-ui .attachment .thumbnail:after {
    box-shadow: none;
}
.wp-core-ui .attachment.details {
    border-radius: 9px;
}
.wp-core-ui .attachment.details .check {
    background: #216fae;
    box-shadow: 0px 2px 6px #0000004a !important;
    border-radius: 100px;
    padding: 3px;
}
.wp-core-ui .attachment.details .check:hover {
    background: #f44336;
}
.thumbnail {
    border-radius: 5px !important;
}
input#plugins_per_page {
    width: auto;
}
.wp-core-ui .button-primary.focus, .wp-core-ui .button-primary.hover, .wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover {
    background: #735cda;
    color: #fff;
	    transition: 0.3s !important;
}
.wp-core-ui .button-primary {
    transition: 0.3s !important;
    background: #876dff;
    border: 0px !important;
    box-shadow: 0px 3px 11px #876dff36;
    min-width: 70px;
}
button#elementor-switch-mode-button {
    background: #8A2387;
    background: -webkit-linear-gradient(to right, #F27121, #E94057, #8A2387);
    background: linear-gradient(to right, #F27121, #E94057, #8A2387);
    box-shadow: 0px 3px 11px #e9405773;
}
.media-upload-form .notice, .media-upload-form div.error, .wrap .notice, .wrap div.error, .wrap div.updated {
    border-top: 0px;
    border-left: 0px;
    border-bottom: 0px;
    border-radius: 4px;
    padding-top: 4px;
    padding-bottom: 4px;
    box-shadow: 0px 3px 11px #0000000d;
}
#adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap {
    background-color: #1d2327;
}
div#wpadminbar {
    background: linear-gradient(
90deg
, #786eff 0%, #986dff 100%);
}
#wpadminbar .quicklinks>ul>li>a {
    color: white !important;
}
#wpadminbar .ab-icon, #wpadminbar .ab-item:before, #wpadminbar>#wp-toolbar>#wp-admin-bar-root-default .ab-icon, .wp-admin-bar-arrow {
    color: white !important;
}
.wp-menu-name {
    font-weight: 300;
}
#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, .folded #adminmenu li.wp-has-current-submenu {
    background: #876dff;
}
.upload-plugin .wp-upload-form input[type=file], .upload-theme .wp-upload-form input[type=file] {
    outline: 0px !important;
    border-radius: 5px;
}
input#code_lisense_test_asafir_id {
    border: 0px !important;
    line-height: 3 !important;
    padding: 0px !important;
}
#adminmenu .wp-submenu a {
    font-weight: 300 !important;
}

.wp-core-ui .button:not(.wp-core-ui .button-primary) {
    border: 1px #f5f5ff solid;
    color: #606a74;
}
table,td.manage-column {
    border-color: #e4e4e4 !important;
}
input[type=checkbox] {
    border-radius: 3px;
}
strong {
    color: #324049 !important;
}
span.post-state {
    color: #757575;
    font-weight: 400;
}
.exopite-sof-header h1 {
    color: #fff !important;
}
.interface-interface-skeleton__content {
    overflow-x: hidden;
}
.block-editor-block-list__insertion-point.is-vertical {
    left: -50%;
}
</style>'; } add_action('admin_head', 'mrpack_style_admin');
}

$options = get_option('MRPACK');
if ( $options['mrp-font-admin'] == 'yes') {
	
function mrp_admin_font() {
	?>
<style>
@import "<?php echo plugin_dir_url( __FILE__ ) . '/fonts/style-font.css'; ?>";
</style>
<?php
}
add_action( 'admin_head', 'mrp_admin_font' );
}