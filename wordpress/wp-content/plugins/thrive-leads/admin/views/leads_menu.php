<?php
/**
 * Created by PhpStorm.
 * User: Aurelian Pop
 * Date: 12-Jan-16
 * Time: 3:11 PM
 */
$current_screen = get_current_screen();
?>

<ul class="tl-leads-main-menu">
    <li <?php if($current_screen->base == "thrive-leads_page_thrive_leads_reporting" ) { echo 'class="tl-leads-current-item"'; } ?>>
        <a href="<?php menu_page_url('thrive_leads_reporting'); ?>" class="tl-leads-users-dashboard" title="<?php echo __('Lead Reports', 'thrive-leads') ?>">
            <span class="tve-icon-line-graph tve-menu-icon"></span>
            <span class="tl-leads-menu-title">Lead Reports</span>
        </a>
    </li>
    <li <?php if($current_screen->base == "thrive-leads_page_thrive_leads_asset_delivery" || $current_screen->base == "thrive-leads_page_thrive_leads_contacts") { echo 'class="tl-leads-current-item"'; } ?>>
        <a href="<?php menu_page_url( 'thrive_leads_asset_delivery' ); ?>" class="tl-leads-users-contacts" title="<?php echo __('Leads Export', 'thrive-leads') ?>">
            <span class="tve-icon-lightbulb_outline tve-menu-icon"></span>
            <span class="tl-leads-menu-title">Advanced Features</span>
            <span class="tl-leads-dropdown-icon tve-icon-expanded"></span>
        </a>
        <ul class="tl-leads-submenu">
            <span class="tl-leads-top-arrow"></span>
            <li <?php if($current_screen->base == "thrive-leads_page_thrive_leads_asset_delivery") { echo 'class="tl-leads-current-item-sub"'; } ?>>
                <a href="<?php menu_page_url( 'thrive_leads_asset_delivery' ); ?>"  title="<?php echo __('Asset Delivery', 'thrive-leads') ?>">
                    <span class="tve-icon-stack tve-menu-icon"></span>
                    <span class="tl-leads-menu-title">Asset Delivery</span>

                </a>
            </li>
            <li <?php if($current_screen->base == "thrive-leads_page_thrive_leads_contacts") { echo 'class="tl-leads-current-item-sub"'; } ?>>
                <a href="<?php menu_page_url('thrive_leads_contacts'); ?>" class="tl-leads-users-contacts" title="<?php echo __('Leads Export', 'thrive-leads') ?>">
                    <span class="tve-icon-users2 tve-menu-icon"></span>
                    <span class="tl-leads-menu-title">Leads Export</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="tl-inbound-link-builder" title="<?php echo __('Thrive Leads SmartLinks', 'thrive-leads') ?>">
                    <span class="tve-icon-chain tve-menu-icon"></span>
                    <span class="tl-leads-menu-title">Smart Links</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0)" class="tl-open-settings" title="<?php echo __('Settings', 'thrive-leads') ?>">
            <span class="tve-icon-settings tve-menu-icon"></span>
            <span class="tl-leads-menu-title">Settings</span>
        </a>
    </li>
</ul>
<div class="tve-settings postbox">
    <span class="tl-close-settings tve-icon-arrow-up" title="<?php echo __('Close') ?>"></span>

    <h3 class="tve-settings-title"><span><?php echo __('General Settings', 'thrive-leads') ?></span></h3>

    <div class="inside">
        <div class="tve-input-group tve_leads_clearfix">
            <label><?php echo __('Lazy load forms') ?></label>

            <div class="tve-input">
                <label class="tve-switch">
                    <input type="checkbox" name="ajax_load" value="1"
                        <?php if ($dashboard_data['global_settings']['ajax_load']) { ?> checked="checked"
                        <?php } ?> class="tve-setting-change tve-setting-ajax_load" autocomplete="off">
                            <i></i>
                </label>
            </div>
                                <span class="tve-field-desc">
                                    <?php echo __('Using lazy loading can speed up the loading of your page and ensure compatibility with the various WordPress caching plugins such as W3 Total Cache, WP Super Cache and WP Rocket. If set to Off while caching plugins are enabled, tracking and conversions will not be recorded correctly', 'thrive-leads') ?>
                                </span>
        </div>
        <div class="tve-input-group tve_leads_clearfix">
            <h3 class="tve-settings-title" style="padding-left:0"><?php echo __('Reset cached statistics') ?></h3>

                                <span class="tve-field-desc">
                                    <?php echo __('In order to increase overall performance, Thrive Leads caches the number of impressions and conversions for each Lead Group, Shortcode, ThriveBox and Form. Click the following link to purge the cache and re-build it.', 'thrive-leads') ?>
                                    <a class="tve-leads-clear-cache" href="javascript:void(0)"><?php echo __('Purge cache', 'thrive-leads') ?></a>
                                </span>
        </div>
        <div class="tve-input-group tve_leads_clearfix">
            <h3 class="tve-settings-title" style="padding-left:0"><?php echo __('Logs') ?></h3>
            <label><?php echo __('Clear Archived Logs') ?></label>
            <a class="tve-leads-delete-logs" href="javascript:void(0)"><span class="tve-icon-trash-o"></span></a>

        </div>
    </div>
</div>