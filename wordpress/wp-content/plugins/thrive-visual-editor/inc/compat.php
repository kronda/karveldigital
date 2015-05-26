<?php
/**
 * this file handles known compatibility issues with other plugins / themes
 */

/**
 * general admin conflict notifications
 */
add_action('admin_notices', 'tve_admin_notices');

/**
 * display any possible conflicts with other plugins / themes as error notification in the admin panel
 */
function tve_admin_notices()
{
    $has_wp_seo_conflict = tve_has_wordpress_seo_conflict();

    if ($has_wp_seo_conflict) {
        $link = sprintf('<a href="%s">%s</a>', admin_url('admin.php?page=wpseo_advanced&tab=permalinks'), __('Wordpress SEO settings'));
        $message = sprintf(__('Thrive Content Builder and Thrive Leads cannot work with the current configuration of Wordpress SEO. Please go to %s and disable the %s"Redirect ugly URL\'s to clean permalinks"%s option', 'thrive-visual-editor'), $link, '<strong>', '</strong>');
        echo sprintf('<div class="error"><p>%s</p></div>', $message);
    }
}

/**
 * check if the user has a known "Coming soon" or "Membership protection" plugin installed
 * our landing pages seem to overwrite their "Coming soon" functionality
 * this would check for any coming soon plugins that use the template_redirect hook
 */
function tve_has_coming_soon_plugin()
{
    include_once ABSPATH . '/wp-admin/includes/plugin.php';

    $hooked_in_template_redirect = array(
        'wishlist-member/wpm.php',
        'ultimate-coming-soon-page/ultimate-coming-soon-page.php',
        'easy-pie-coming-soon/easy-pie-coming-soon.php',
        'coming-soon-page/coming_soon.php',
        'cc-coming-soon/cc-coming-soon.php'
    );

    foreach ($hooked_in_template_redirect as $plugin) {
        if (is_plugin_active($plugin)) {
            return true;
        }
    }

    return false;
}

/**
 * Check if the user has the Wordpress SEO plugin installed and the "Redirect to clean URLs" option checked
 *
 * @return bool
 */
function tve_has_wordpress_seo_conflict()
{
    return is_plugin_active('wordpress-seo/wp-seo.php') && ($wpseo_options = get_option('wpseo_permalinks')) && !empty($wpseo_options['cleanpermalinks']);
}