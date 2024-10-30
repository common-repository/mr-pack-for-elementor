<?php
defined('ABSPATH') or die();

class MrpackOptions extends MrPackCore
{
    private $plugin_name;
    
    function __construct($plugin_name)
    {
        add_action('init', array(
            $this,
            'mrp_options'
        ));
        $this->plugin_name = $plugin_name;

    }
    public function mrp_options() {
        
    /**
     * 
     * Create a submenu page under Plugins.
    * 
    * Framework also add "Settings" to your plugin in plugins list.
    * 
    * @link https://github.com/JoeSz/Exopite-Simple-Options-Framework
    */
    
        $config_submenu = array(
        	'type' => 'menu',
            'id' => $this->plugin_name,
            'menu_title' => __('مستر پک', 'mrpack') ,
            'parent' => '',
            'submenu' => true,
            'title' => __('افزونه مستر پک', 'mrpack') ,
            'capability' => 'manage_options',
            'multilang' => false,
            'icon' => plugins_url( '/includes/assets/images/mr-pack-icon.svg' )
        );
        
        /*
        *
        * To add a metabox.
        *
        * This normally go to your functions.php or another hook
        *
        */

        $fields[] = array(
            'name' => 'mrpack',
            'title' => __('مستر پک', 'mrpack') ,
            'icon' => 'dashicons-admin-generic',
            'fields' => array(
				array(
                    'type' => 'content',
                    'wrap_class' => 'no-border-bottom',
                    'title' => __('نسخه افزونه', 'mrpack') ,
                    'before' => '<strong>' . MRPACK_VERSION . '</strong>',
                ) ,
                array(
                    'type' => 'notice',
                    'class' => 'info',
                    'content' => __('به صورت پیش فرض افزونه مستر پک فونت پنل المنتور را به فونت <strong>وزیر</strong> تغییر می دهد. در صورت نیاز می توانید این گزینه را غیر فعال کنید.', 'mrpack') ,
                ) ,
	            array(
		            'id' => 'mrp-panel-font',
		            'type' => 'switcher',
		            'title' => __('تغییر فونت پنل المنتور', 'mrpack') ,
		            'description' => __('با روشن کردن این گزینه، فونت پنل المنتور را به فونت وزیر تغییر دهید.', 'mrpack') ,
		            'dmrpult' => 'no',
	            ) ,
                array(
                    'type' => 'notice',
                    'class' => 'info',
                    'content' => __('با فعال کردن این گزینه، تاریخ شمسی برای فیلد فرم ساز المنتور فعال خواهد شد.', 'mrpack') ,
                ) ,
	           	array(
		            'id' => 'mrp-flatpickr',
		            'type' => 'switcher',
		            'title' => __('تاریخ شمسی فرم المنتور', 'mrpack') ,
		            'description' => __('فعال کردن تاریخ شمسی برای فیلد تاریخ فرم ساز المنتور', 'mrpack') ,
		            'default' => 'yes',
	            ) ,
            ),
        );
        
        $fields[] = array(
            'name' => 'mrp-translate',
            'title' => __('ترجمه افزونه ها', 'mrpack') ,
            'icon' => 'dashicons-translation',
            'fields' => array(
	            array(
		            'type' => 'content',
		            'class' => 'class-name',
		            'content' => __('<p>به صورت پیش فرض ترجمه افزونه المنتور و المنتور پرو فعال می باشد. می توانید باقی افزونه ها را فعال یا غیر فعال کنید.</p>', 'mrpack') ,
	            ) ,
                array(
                    'id' => 'mrp-elementor',
                    'type' => 'switcher',
                    'title' => __('فارسی ساز افزونه المنتور', 'mrpack') ,
                    'description' => __('فعال/غیر فعال کردن ترجمه فارسی افزونه المنتور', 'mrpack') ,
                    'dmrpult' => 'no',
                ) ,
                array(
                    'id' => 'mrp-elementor-pro',
                    'type' => 'switcher',
                    'title' => __('فارسی ساز افزونه المنتور پرو', 'mrpack') ,
                    'description' => __('فعال/غیر فعال کردن ترجمه فارسی افزونه المنتور پرو', 'mrpack') ,
                    'dmrpult' => 'no',
                ) ,
                array(
                    'id' => 'mrp-ele-custom-skin',
                    'type' => 'switcher',
                    'title' => __('Ele Custom Skin', 'mrpack') ,
                    'description' => __('فعال/غیر فعال کردن ترجمه فارسی افزونه Ele Custom Skin', 'mrpack') ,
                    'dmrpult' => 'no',
                ) ,
                array(
                    'id' => 'mrp-essential-addons-for-elementor-lite',
                    'type' => 'switcher',
                    'title' => __('Essential Addons', 'mrpack') ,
                    'description' => __('فعال/غیر فعال کردن ترجمه فارسی افزونه Essential Addons', 'mrpack') ,
                    'dmrpult' => 'no',
                ) ,
                array(
                    'id' => 'mrp-dynamicconditions',
                    'type' => 'switcher',
                    'title' => __('Dynamic Conditions', 'mrpack') ,
                    'description' => __('فعال/غیر فعال کردن ترجمه فارسی افزونه Dynamic Conditions', 'mrpack') ,
                    'dmrpult' => 'no',
                ) ,
                array(
                    'id' => 'mrp-woolentor',
                    'type' => 'switcher',
                    'title' => __('Woolentor', 'mrpack') ,
                    'description' => __('فعال/غیر فعال کردن ترجمه فارسی افزونه Woolentor', 'mrpack') ,
                    'dmrpult' => 'no',
                ) ,
                array(
                    'id' => 'mrp-metform',
                    'type' => 'switcher',
                    'title' => __('Metform', 'mrpack') ,
                    'description' => __('فعال/غیر فعال کردن ترجمه فارسی افزونه Metform', 'mrpack') ,
                    'dmrpult' => 'no',
                ) ,
				array(
                    'id' => 'mrp-elementskit-lite',
                    'type' => 'switcher',
                    'title' => __('Elementskit Lite', 'mrpack') ,
                    'description' => __('فعال/غیر فعال کردن ترجمه فارسی افزونه Elementskit Lite', 'mrpack') ,
                    'dmrpult' => 'no',
                ) ,
            ) ,
        );
        
        $fields[] = array(
            'title' => __('فونت های فارسی', 'mrpack') ,
            'icon' => 'dashicons-editor-paste-text',
            'name' => 'persian-font',
            'fields' => array(
                array(
                    'type' => 'content',
                    'class' => 'class-name',
                    'content' => __('<p>با غیر فعال کردن این گزینه، تمامی فونت های فارسی از ویرایشگر المنتور حذف خواهد شد.</p>', 'mrpack') ,
                ) ,
                array(
                    'type' => 'notice',
                    'class' => 'info',
                    'content' => __('با استفاده از این گزینه، می توانید مجموعه ای از فونت های فارسی را به ویرایشگر المنتور اضافه کنید.', 'mrpack') ,
                ) ,
                array(
		            'id' => 'mrp-all-font',
		            'type' => 'switcher',
		            'title' => __('بارگذاری فونت ها', 'mrpack') ,
		            'description' => __('فعال/غیر فعال کردن فونت های فارسی', 'mrpack') ,
		            'dmrpult' => 'no',
	            ) ,
            ) ,

        );
        
                $fields[] = array(
            'name' => 'templates-kits',
            'title' => __('قالب های آماده ایرانی', 'mrpack') ,
            'icon' => 'dashicons-welcome-widgets-menus',
            'fields' => array(
                array(
                    'type' => 'content',
                    'class' => 'class-name',
                    'content' => __('<p>با غیر فعال کردن این گزینه، قالب های آماده ایرانی از کتابخانه المنتور حذف خواهد شد.</p>', 'mrpack') ,
                ) ,
	            array(
		            'id' => 'mrp-templates-kits',
		            'type' => 'switcher',
		            'title' => __('قالب های آماده', 'mrpack') ,
		            'description' => __('فعال/غیر فعال کردن قالب های آماده ایرانی', 'mrpack') ,
		            'dmrpult' => 'no',
	            ) ,
            ) ,
        );
        
				        $fields[] = array(
            'title' => __('بهبود استایل پیشخوان', 'mrpack') ,
            'icon' => 'dashicons-admin-customizer',
            'name' => 'style-admin',
            'fields' => array(
                array(
                    'type' => 'content',
                    'class' => 'class-name',
                    'content' => __('<p>در این بخش میتوانید استایل و فونت پیشخوان وردپرس را تغییر دهید.</p>', 'mrpack') ,
                ) ,
				array(
                    'type' => 'notice',
                    'class' => 'info',
                    'content' => __('با فعال کردن گزینه های زیر استایل پیشخوان وردپرس شما زیبا تر میشود.', 'mrpack') ,
                ) ,
	            array(
		            'id' => 'mrp-style-admin',
		            'type' => 'switcher',
		            'title' => __('بهبود استایل پیشخوان', 'mrpack') ,
 		            'description' => __('فعال سازی تم ویژه برای پیشخوان وردپرس', 'mrpack') ,
		            'default' => 'yes',
	            ) ,
				array(
		            'id' => 'mrp-font-admin',
		            'type' => 'switcher',
		            'title' => __('تغییر فونت پیشخوان', 'mrpack') ,
 		            'description' => __('فعال سازی فونت فارسی وزیر برای پیشخوان وردپرس', 'mrpack') ,
		            'default' => 'yes',
	            ) ,


            ) ,

        );
		
		        $fields[] = array(
            'title' => __('آیکون های ایرانی', 'mrpack') ,
            'icon' => 'dashicons-insert',
            'name' => 'iranian-icons',
            'fields' => array(
                array(
                    'type' => 'content',
                    'class' => 'class-name',
                    'content' => __('<p>برای نمایش آیکون پک ایرانی در کتابخانه آیکون المنتور این گزینه را فعال کنید.</p>', 'mrpack') ,
                ) ,
				array(
                    'type' => 'notice',
                    'class' => 'info',
                    'content' => __('با فعال سازی این گزینه، مجموعه آیکون برند های ایرانی به کتابخانه آیکون المنتور اضافه میشوند.', 'mrpack') ,
                ) ,
	            array(
		            'id' => 'mrp-iranian-icon',
		            'type' => 'switcher',
		            'title' => __('آیکون پک ایرانی', 'mrpack') ,
		            'description' => __('فعال سازی نمایش آیکون های ایرانی', 'mrpack') ,
		            'default' => 'yes',
	            ) ,


            ) ,

        );
			$fields[] = array(
            'title' => __('ابزار ها', 'mrpack') ,
            'icon' => 'dashicons-admin-settings',
            'name' => 'tools',
            'fields' => array(
                array(
                    'type' => 'content',
                    'class' => 'class-name',
                    'content' => __('این بخش بزودی فعال خواهد شد :)') ,
                ) ,
            ) ,
        );
		
		$fields[] = array(
            'title' => __('درباره ما', 'mrpack') ,
            'icon' => 'dashicons-admin-users
',
            'name' => 'about-us',
            'fields' => array(
                array(
                    'type' => 'content',
                    'class' => 'class-name',
                    'content' => __('

          <h2>افزونه مستر پک المنتور</h2>
          <p>افزونه مستر پک برای المنتور با هدف دسترسی آسان کاربران به تمپلیت های آماده فارسی برای افزونه صفحه ساز المنتور ساخته و منتشر شده است. <br>
          علاوه بر این سعی کردیم چندین قابلیت کاربردی را به صورت یکجا در این افزونه قرار دهیم تا کاربران با نصب یک افزونه اکثر نیاز هایشان در رابطه با افزونه المنتور رفع شود.<br>
          در ضمن در این افزونه سعی کرده ایم به شما کاربران عزیز حق انتخاب دهیم بطوری که شما قادر هستید امکانات افزونه را در بخش تنظیمات بر اساس نیاز خود فعال و غیر فعال نمایید.<br><br><strong>آقای برنامه نویس&nbsp;</strong></p><p><strong><a href="https://mr-programer.ir/" target="_blank">مشاهده وبسایت آقای برنامه نویس</a></strong></p><strong>
          <div class="linespase">
                    <div class="clear"></div></strong></div><div class="csf-field csf-field-content"><p><strong>برای دریافت پشتیبانی می توانید به <a href="https://mr-programer.ir">mr-programer.ir</a> مراجعه کنید </strong></p><strong>
            <p>
            <strong>افزونه مستر پک برای المنتور</strong>
            </p>
			<a href="https://mr-programer.ir/aid/">حمایت مالی ❤</a>
          </div>

                    
                    </p>', 'mrpack') ,
                ) ,
            ) ,
        );
 
        $options_panel = new Exopite_Simple_Options_Framework($config_submenu, $fields);
    }
}

new MrpackOptions('MRPACK');