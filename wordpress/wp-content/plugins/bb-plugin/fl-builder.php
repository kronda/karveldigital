<?php
/**
 * Plugin Name: Beaver Builder Plugin (Pro Version)
 * Plugin URI: https://www.wpbeaverbuilder.com/?utm_source=external&utm_medium=builder&utm_campaign=plugins-page
 * Description: A drag and drop frontend WordPress page builder plugin that works with almost any theme!
 * Version: 1.7.5
 * Author: The Beaver Builder Team
 * Author URI: https://www.wpbeaverbuilder.com/?utm_source=external&utm_medium=builder&utm_campaign=plugins-page
 * Copyright: (c) 2014 Beaver Builder
 * License: GNU General Public License v2.0
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: fl-builder
 */
define('FL_BUILDER_VERSION', '1.7.5');
define('FL_BUILDER_FILE', __FILE__);
define('FL_BUILDER_DIR', plugin_dir_path(FL_BUILDER_FILE));
define('FL_BUILDER_URL', plugins_url('/', FL_BUILDER_FILE));
define('FL_BUILDER_LITE', false);
define('FL_BUILDER_SUPPORT_URL', 'https://www.wpbeaverbuilder.com/support/');
define('FL_BUILDER_UPGRADE_URL', 'https://www.wpbeaverbuilder.com/pricing/');
define('FL_BUILDER_DEMO_URL', 'http://demos.wpbeaverbuilder.com');
define('FL_BUILDER_OLD_DEMO_URL', 'http://demos.fastlinemedia.com');
define('FL_BUILDER_DEMO_CACHE_URL', 'http://demos.wpbeaverbuilder.com/wp-content/uploads/bb-plugin/cache/');

/* Classes */
require_once 'classes/class-fl-builder.php';
require_once 'classes/class-fl-builder-admin.php';
require_once 'classes/class-fl-builder-admin-posts.php';
require_once 'classes/class-fl-builder-ajax.php';
require_once 'classes/class-fl-builder-ajax-layout.php';
require_once 'classes/class-fl-builder-auto-suggest.php';
require_once 'classes/class-fl-builder-color.php';
require_once 'classes/class-fl-builder-fonts.php';
require_once 'classes/class-fl-builder-icons.php';
require_once 'classes/class-fl-builder-loop.php';
require_once 'classes/class-fl-builder-model.php';
require_once 'classes/class-fl-builder-module.php';
require_once 'classes/class-fl-builder-photo.php';
require_once 'classes/class-fl-builder-services.php';
require_once 'classes/class-fl-builder-shortcodes.php';
require_once 'classes/class-fl-builder-update.php';
require_once 'classes/class-fl-builder-timezones.php';
require_once 'classes/class-fl-builder-utils.php';

/* Includes */
require_once 'includes/compatibility.php';
require_once 'includes/updater/updater.php';

/* Plugin Activation */
register_activation_hook(__FILE__,                             'FLBuilderAdmin::activate');

/* Localization */
add_action('plugins_loaded',                                   'FLBuilder::load_plugin_textdomain');

/* Updates */
add_action('init',                                             'FLBuilderUpdate::init', 11);

/* Load Settings and Modules */
add_action('init',                                             'FLBuilderModel::load_settings', 1);
add_action('init',                                             'FLBuilderModel::load_modules', 2);

/* Admin AJAX */
add_action('wp_ajax_fl_builder_disable',                       'FLBuilderModel::disable');
add_action('wp_ajax_fl_builder_duplicate_wpml_layout',         'FLBuilderModel::duplicate_wpml_layout');

/* Admin Actions */
add_action('init',                                             'FLBuilderAdmin::init');
add_action('current_screen',                                   'FLBuilderAdminPosts::init');
add_action('before_delete_post',                               'FLBuilderModel::delete_post');
add_action('save_post',                                        'FLBuilderModel::save_revision');
add_action('save_post',                    					   'FLBuilderModel::set_node_template_default_type', 10, 3);
add_action('wp_restore_post_revision',                         'FLBuilderModel::restore_revision', 10, 2);

/* Admin Filters */
add_filter('heartbeat_received',                               'FLBuilderModel::lock_post', 10, 2);
add_filter('redirect_post_location',                           'FLBuilderAdminPosts::redirect_post_location');
add_filter('page_row_actions',                                 'FLBuilderAdminPosts::render_row_actions_link');
add_filter('post_row_actions',                                 'FLBuilderAdminPosts::render_row_actions_link');
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'FLBuilderAdmin::render_plugin_action_links');
add_filter('all_plugins',                                      'FLBuilderAdmin::white_label_plugins_page');
add_filter('wp_prepare_themes_for_js',                         'FLBuilderAdmin::white_label_themes_page');
add_filter('gettext', 										   'FLBuilderAdmin::white_label_theme_gettext');

/* Frontend AJAX */
add_action('wp', 											   'FLBuilderAJAX::init');

/* Frontend Actions */
add_action('init',                                             'FLBuilder::register_templates_post_type');
add_action('send_headers',                                     'FLBuilder::no_cache_headers');
add_action('wp',                                               'FLBuilder::init');
add_action('wp_enqueue_scripts',                               'FLBuilder::register_layout_styles_scripts');
add_action('wp_enqueue_scripts',                               'FLBuilder::enqueue_ui_styles_scripts');
add_action('wp_enqueue_scripts',                               'FLBuilder::enqueue_all_layouts_styles_scripts');
add_action('wp_head',                                  		   'FLBuilder::render_custom_css_for_editing', 999);
add_action('admin_bar_menu',                                   'FLBuilder::admin_bar_menu', 999);
add_action('wp_footer',                                        'FLBuilder::include_jquery');
add_action('wp_footer',                                        'FLBuilder::render_ui');

/* Frontend Filters */
add_filter('found_posts',                                      'FLBuilderLoop::found_posts', 1, 2);
add_filter('template_include',                                 'FLBuilder::render_template', 999);
add_filter('body_class',                                       'FLBuilder::body_class');
add_filter('wp_default_editor',                                'FLBuilder::default_editor');
add_filter('mce_css',                                          'FLBuilder::add_editor_css');
add_filter('mce_buttons_2',                                    'FLBuilder::editor_buttons_2');
add_filter('mce_external_plugins',                             'FLBuilder::editor_external_plugins', 9999);
add_filter('tiny_mce_before_init',                             'FLBuilder::editor_font_sizes');
add_filter('the_content',                                      'FLBuilder::render_content');