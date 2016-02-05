<?php
/**
 * Holds ACTIONS/FILTERS implementations ONLY
 * User: Danut
 * Date: 12/8/2015
 * Time: 4:40 PM
 */

/**
 * Hook for "init" wp action
 */
function tve_dash_init_action()
{
    if ($GLOBALS['tve_dash_loaded_from'] === 'plugins') {
        defined('TVE_DASH_URL') || define('TVE_DASH_URL', rtrim(plugins_url(), "/\\") . "/" . trim($GLOBALS['tve_dash_included']['folder'], "/\\") . '/thrive-dashboard');
    } else {
        defined('TVE_DASH_URL') || define('TVE_DASH_URL', rtrim(get_template_directory_uri(), "/\\") . '/thrive-dashboard');
    }

    defined('TVE_DASH_IMAGES_URL') || define('TVE_DASH_IMAGES_URL', TVE_DASH_URL . '/css/images');

    require_once(TVE_DASH_PATH . '/inc/font-import-manager/classes/Tve_Dash_Font_Import_Manager.php');
    require_once(TVE_DASH_PATH . '/inc/font-manager/font-manager.php');
}

/**
 * Add main Thrive Dashboard item to menu
 */
function tve_dash_admin_menu()
{
    add_menu_page(
        "Thrive Dashboard",
        "Thrive Dashboard",
        "manage_options",
        "tve_dash_section",
        "tve_dash_section",
        TVE_DASH_IMAGES_URL . '/logo-icon.png'
    );

    /**
     * @param tve_dash_section parent slug
     */
    do_action("tve_dash_add_menu_item", "tve_dash_section");

    add_submenu_page("tve_dash_section", "Thrive License Manager", "License Manager", "manage_options", "tve_dash_license_manager_section", "tve_dash_license_manager_section");
    add_submenu_page("tve_dash_section", "Thrive General Settings", "General Settings", "manage_options", "tve_dash_general_settings_section", "tve_dash_general_settings_section");

    /**
     * in order to not include the page in the menu -> use null as the first parameter
     */
    add_submenu_page(null, 'Thrive UI toolkit', 'Thrive UI toolkit', 'manage_options', 'tve_dash_ui_toolkit', 'tve_dash_ui_toolkit');
    /* Font Manager Page */
    add_submenu_page(null, 'Thrive Font Manager', 'Thrive Font Manager', 'manage_options', 'tve_dash_font_manager', 'tve_dash_font_manager_main_page');
    /* Font Import Manager Page */
    add_submenu_page(null, 'Thrive Font Import Manager', 'Thrive Font Import Manager', 'manage_options', 'tve_dash_font_import_manager', 'tve_dash_font_import_manager_main_page');
    add_submenu_page(null, 'Icon Manager', 'Icon Manager', 'manage_options', 'tve_dash_icon_manager', 'tve_dash_icon_manager_main_page');
}

function tve_dash_icon_manager_main_page()
{
    $tve_icon_manager = Tve_Dash_Thrive_Icon_Manager::instance();
    $tve_icon_manager->mainPage();
}

function tve_dash_font_import_manager_main_page()
{
    $font_import_manager = Tve_Dash_Font_Import_Manager::getInstance();
    $font_import_manager->mainPage();
}

function tve_dash_admin_enqueue_scripts($hook)
{
    $accepted_hooks = array(
        'toplevel_page_tve_dash_section',
        'thrive-dashboard_page_tve_dash_license_manager_section',
        'thrive-dashboard_page_tve_dash_general_settings_section',
        'thrive-dashboard_page_tve_dash_ui_toolkit',
        'admin_page_tve_dash_api_connect'
    );

    $accepted_hooks = apply_filters('tve_dash_include_ui', $accepted_hooks, $hook);

    if (!in_array($hook, $accepted_hooks)) {
        return;
    }

    tve_dash_enqueue();
}

/**
 * enqueue the dashboard CSS and javascript files
 */
function tve_dash_enqueue()
{
    $js_suffix = defined('TVE_DEBUG') && TVE_DEBUG ? '.js' : '.min.js';

    tve_dash_enqueue_script('tve-dash-main-js', TVE_DASH_URL . '/js/dist/tve-dash' . $js_suffix, array('jquery'));
    tve_dash_enqueue_style('tve-dash-styles-css', TVE_DASH_URL . '/css/styles.css');
    tve_dash_enqueue_script('tve-dash-api-wistia-popover', '//fast.wistia.com/assets/external/popover-v1.js', array(), '', true);

    $options = array(
        'actions' => array(
            'backend_ajax' => 'tve_dash_backend_ajax',
            'ajax_delete_api_log' => 'tve_dash_api_delete_log',
            'ajax_retry_api_log' => 'tve_dash_api_form_retry'
        ),
        'routes' => array(
            'settings' => 'generalSettings',
            'license' => 'license',
            'active_states' => 'activeState'
        ),
        'translations' => array(
            'UnknownError' => __("Unknown error", TVE_DASH_TRANSLATE_DOMAIN),
            'Deleting' => __('Deleting...', TVE_DASH_TRANSLATE_DOMAIN),
            'Testing' => __('Testing...', TVE_DASH_TRANSLATE_DOMAIN),
            'Loading' => __('Loading...', TVE_DASH_TRANSLATE_DOMAIN),
            'ConnectionWorks' => __('Connection works!', TVE_DASH_TRANSLATE_DOMAIN),
            'ConnectionFailed' => __('Connection failed!', TVE_DASH_TRANSLATE_DOMAIN),
            'Unlimited' => __('Unlimited', TVE_DASH_TRANSLATE_DOMAIN),
            'RequestError' => 'Request error, please contact Thrive developers !',
        ),
        'products' => array(
            TVE_Dash_Product_LicenseManager::ALL_TAG => 'All products',
            TVE_Dash_Product_LicenseManager::TCB_TAG => 'Thrive Content Builder',
            TVE_Dash_Product_LicenseManager::TL_TAG => 'Thrive Leads',
            TVE_Dash_Product_LicenseManager::TCW_TAG => 'Thrive Clever Widgets'
        ),
        'license_types' => array(
            'individual' => __('Individual product', TVE_DASH_TRANSLATE_DOMAIN),
            'full' => __('Full membership', TVE_DASH_TRANSLATE_DOMAIN),
        )
    );

    /**
     * Allow vendors to hook into this
     * TVE_Dash is the output js object
     */
    $options = apply_filters('tve_dash_localize', $options);

    wp_localize_script('tve-dash-main-js', 'TVE_Dash_Const', $options);
}

/**
 * main entry point for the incoming ajax requests
 *
 * passes the request to the TVE_Dash_AjaxController for processing
 */
function tve_dash_backend_ajax()
{
    $response = TVE_Dash_AjaxController::instance()->handle();

    echo json_encode($response);
    exit();
}


function tve_dash_reset_license()
{
    $options = array(
        'tcb' => 'tve_license_status|tve_license_email|tve_license_key',
        'tl' => 'tve_leads_license_status|tve_leads_license_email|tve_leads_license_key',
        'tcw' => 'tcw_license_status|tcw_license_email|tcw_license_key',
        'themes' => 'thrive_license_status|thrive_license_key|thrive_license_email',
        'dash' => 'thrive_license'
    );

    if (!empty($_POST['products'])) {
        $filtered = array_intersect_key($options, array_flip($_POST['products']));
        foreach (explode('|', implode('|', $filtered)) as $option) {
            delete_option($option);
        }
        $message = 'Licenses reset for: ' . implode(', ', array_keys($filtered));

        $dash_license = get_option('thrive_license', array());
        foreach ($_POST['products'] as $prod) {
            unset($dash_license[$prod]);
        }
        update_option('thrive_license', $dash_license);

    }

    require dirname(dirname((__FILE__))) . '/templates/settings/reset.phtml';
}

function tve_dash_load_text_domain()
{
    $domain = TVE_DASH_TRANSLATE_DOMAIN;
    $locale = $locale = apply_filters('plugin_locale', get_locale(), $domain);

    $path = 'thrive-dashboard/languages/';
    //$path = apply_filters('tve_dash_filter_plugin_languages_path', $path);

    load_textdomain($domain, WP_LANG_DIR . '/thrive/' . $domain . "-" . $locale . ".mo");
    load_plugin_textdomain($domain, false, $path);
}
