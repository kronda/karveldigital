<?php
/**
 * global array for holding all the wistia videos used across TL admin UI
 */
global $tve_leads_help_videos;
$tve_leads_help_videos = array(
    'Forms' => 'http://fast.wistia.net/embed/iframe/3bvkuef0om?popover=true', // displayed when creating a new form (in the lightbox)
    'LeadGroups' => '//fast.wistia.net/embed/iframe/dzmputa1z3?popover=true', // displayed when there are no Lead Groups and when adding a new Lead Group
    'LeadShortcodes' => '//fast.wistia.net/embed/iframe/0ixjohsmn3?popover=true', // displayed when there are no Lead Shortcodes and when adding a new Lead Shortcode
    'TwoStepLightbox' => '//fast.wistia.net/embed/iframe/agm7q743cx?popover=true', // displayed when there are no Lead 2-step lightboxes and when adding a new one
    'AssetGroup' => '//fast.wistia.net/embed/iframe/agm7q743cx?popover=true', // displayed when there are no asset groups and when adding a new one
    'TriggerSettings' => '//fast.wistia.net/embed/iframe/cjdd4fw8pu?popover=true', // displayed on the Trigger Settings Lightbox
    'VariationTest' => '//fast.wistia.net/embed/iframe/h7qzx5xdlp?popover=true', // displayed when starting a Variation Test (between designs)
    'GroupTest' => '//fast.wistia.net/embed/iframe/zsiofuiy1h?popover=true', // displayed when starting a Group-level test (between form-types)
    'TestChart' => '//fast.wistia.net/embed/iframe/i8629vqgbj?popover=true', // displayed in the upper-part of the Chart on the Test View page
    'TestTableData' => '//fast.wistia.net/embed/iframe/x4nm5gzrjy?popover=true', // displayed in the table header (below the chart on test view page)
    'GroupDisplaySettings' => '//fast.wistia.net/embed/iframe/4c8wg35d58?popover=true', // displayed in the Group Targeting options popup
    'SignupSegue' => '//fast.wistia.net/embed/iframe/mv9an37krm?popover=true', // displayed when there are no Signup Segues and when adding a new one
);


/** global variable with the colors that will be used in the chart and tables */
global $tve_leads_chart_colors;
$tve_leads_chart_colors = array('#20a238', '#2f82d7', '#fea338', '#dd383d', '#ab31a4', '#95d442', '#36c4e2', '#525252', '#f3643e', '#e26edd');

/**
 * Read all templates and store the content in an array.
 * @param string $dir folder to scan
 * @return array with key representing the path and the content stored in value
 */
function tve_load_backbone_templates($dir = '', $root = 'template')
{
    if (empty($dir)) {
        return array();
    }

    $folders = scandir($dir);
    $templates = array();

    foreach ($folders as $item) {
        if (in_array($item, array(".", ".."))) {
            continue;
        }

        if (is_dir($dir . DIRECTORY_SEPARATOR . $item)) {
            $templates = array_merge($templates, tve_load_backbone_templates($dir . DIRECTORY_SEPARATOR . $item));
        }

        if (is_file($dir . DIRECTORY_SEPARATOR . $item)) {

            ob_start();
            include $dir . DIRECTORY_SEPARATOR . $item;
            $template_content = ob_get_contents();
            ob_end_clean();

            $template_path = str_replace(DIRECTORY_SEPARATOR, '/', substr($dir, strpos($dir, $root) + strlen($root) + 1)) . '/' . basename($item, '.phtml');
            $templates[$template_path] = $template_content;
        }
    }

    return $templates;
}

/**
 * Generate an array of dates between $start_date and $end_date depending on the $interval
 * @author: Andrei
 * @param $start_date
 * @param $end_date
 * @param string $interval - can be 'day', 'week', 'month'
 * @return array $dates
 */
function tve_leads_generate_dates_interval($start_date, $end_date, $interval = 'day')
{
    switch ($interval) {
        case 'day':
            $date_format = 'd M, Y';
            break;
        case 'week':
            $date_format = '\W\e\e\k W, o';
            //TODO: the labels should be translated
            break;
        case 'month':
            $date_format = 'F Y';
            break;
        default:
            return array();
    }

    $dates = array();
    for ($i = 0; strtotime($start_date . ' + ' . $i . 'day') <= strtotime($end_date); $i++) {
        $timestamp = strtotime($start_date . ' + ' . $i . 'day');
        $date = date($date_format, $timestamp);

        //remove the 0 from the week number
        if ($interval == 'week') {
            $date = str_replace('Week 0', 'Week ', $date);
        }
        if (!in_array($date, $dates)) {
            $dates[] = $date;
        }
    }
    return $dates;
}

/**
 * filter out some post_types that are to be displayed in the Group settings popup
 *
 * @param array $blacklist
 *
 * @return array
 */
function tve_leads_settings_post_types_blacklist($blacklist)
{
    if (!is_array($blacklist)) {
        $blacklist = array();
    }

    $blacklist [] = 'tcb_lightbox';
    $blacklist [] = 'thrive_optin';
    $blacklist [] = 'focus_area';

    return $blacklist;
}

/**
 * check whether or not the user has a caching plugin installed and try to detect the actual plugin being used
 *
 * @return bool}string false if there is no known caching plugin installed, or string the name of installed caching plugin
 */
function tve_leads_cache_detect_plugin()
{
    $known_plugins = array(
        'wp-super-cache/wp-cache.php',
        'w3-total-cache/w3-total-cache.php',
        'wp-rocket/wp-rocket.php'
    );
    $known_plugins = apply_filters('tve_leads_cache_known_plugins', $known_plugins);

    if (!is_array($known_plugins) || empty($known_plugins)) {
        return false;
    }

    include_once ABSPATH . 'wp-admin/includes/plugin.php';

    foreach ($known_plugins as $plugin_file) {
        if (is_plugin_active($plugin_file)) {
            return dirname($plugin_file);
        }
    }

    return false;
}

/**
 * try to automatically prune (clear) the cache if the user has a known caching plugin installed
 *
 * @param string $cache_plugin
 *
 * @return bool true on success, false on failure
 */
function tve_leads_cache_clear($cache_plugin)
{
    $known_callbacks = array(
        'wp-super-cache' => 'wp_cache_clear_cache',
        'w3-total-cache' => 'w3tc_pgcache_flush',
        'wp-rocket' => 'rocket_clean_domain'
    );

    if (!isset($known_callbacks[$cache_plugin])) {
        $known_callbacks[$cache_plugin] = apply_filters('tve_leads_cache_clear_callback', '', $cache_plugin);
    }
    if (!isset($known_callbacks[$cache_plugin]) || !function_exists($known_callbacks[$cache_plugin])) {
        return false;
    }
    call_user_func($known_callbacks[$cache_plugin]);
    return true;
}

/**
 * filter the most recent items in ThriveBoxes Menu Trigger
 */
function tve_leads_filter_nav_menu_items_two_step_recent($most_recent_items)
{
    return array_slice($most_recent_items, 0, 3);
}

/**
 * Overwrite the quick search ajax action when an user search for on menu item
 * Displays the response(HTML/JSON) if the action is quick-search-posttype-tve_lead_2s_lightbox
 *
 * @return void if the action is not quick-search-posttype-tve_lead_2s_lightbox
 */
function tve_leads_menu_quick_search()
{
    if (empty($_REQUEST['type'])) {
        return;
    }

    if ($_REQUEST['type'] !== 'quick-search-posttype-' . TVE_LEADS_POST_TWO_STEP_LIGHTBOX) {
        return;
    }

    require_once ABSPATH . 'wp-admin/includes/nav-menu.php';

    $args = array();
    $query = isset($request['q']) ? $request['q'] : '';
    $response_format = isset($_REQUEST['response-format']) && in_array($_REQUEST['response-format'], array('json', 'markup')) ? $_REQUEST['response-format'] : 'json';

    if ('markup' == $response_format) {
        $args['walker'] = new Walker_Nav_Menu_Checklist;
    }

    query_posts(array(
        'posts_per_page' => 10,
        'post_type' => TVE_LEADS_POST_TWO_STEP_LIGHTBOX,
        's' => $query,
    ));

    if (!have_posts()) {
        return;
    }

    while (have_posts()) {
        the_post();
        if ('markup' == $response_format) {
            $var_by_ref = get_the_ID();
            echo walk_nav_menu_tree(array_map('wp_setup_nav_menu_item', array(get_post($var_by_ref))), 0, (object)$args);
        } elseif ('json' == $response_format) {
            echo wp_json_encode(
                array(
                    'ID' => get_the_ID(),
                    'post_title' => get_the_title(),
                    'post_type' => get_post_type(),
                )
            );
            echo "\n";
        }
    }

    wp_die();
}

/**
 * Does not display extended menu option for ThriveBox menu items
 * Returns false if the menu item type is TVE_LEADS_POST_TWO_STEP_LIGHTBOX
 *
 * @param $display_option
 * @param $menu_item
 * @return bool
 */
function filter_thrive_display_extended_menu_option($display_option, $menu_item)
{
    return $menu_item->object === TVE_LEADS_POST_TWO_STEP_LIGHTBOX ? false : $display_option;
}
