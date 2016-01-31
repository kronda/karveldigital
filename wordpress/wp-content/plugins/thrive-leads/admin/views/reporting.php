<div id="tve-content">
    <script type="text/javascript">
        var TVE_Page_Data = {
            globalSettings: <?php echo json_encode($dashboard_data['global_settings']) ?>,
        };
    </script>
    <div id="tve-reporting">
        <div class="tve-header">
            <div class="tve-logo tve_leads_clearfix">
                <a href="<?php menu_page_url( 'thrive_leads_dashboard' ); ?>" class="tl-leads-users-dashboard-logo"
                   title="<?php echo __( 'Thrive Leads Home', 'thrive-leads' ) ?>">
					<span class="tl-logo-container">
						<?php echo '<img class="tl-logo-move tl-logo-move-1" src="' . plugins_url( 'thrive-leads/admin/img' ) . '/tl-logo-part-1-1.png" > '; ?>
                        <?php echo '<img class="tl-logo-move tl-logo-move-2" src="' . plugins_url( 'thrive-leads/admin/img' ) . '/tl-logo-part-1-2.png" > '; ?>
                        <?php echo '<img src="' . plugins_url( 'thrive-leads/admin/img' ) . '/tl-logo-part-2.png" > '; ?>
					</span>
                </a>
                <div class="tve-global-settings">
                    <?php require_once(dirname(__FILE__) . '/leads_menu.php') ?>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h1 class="panel-title"><?php echo __('Reporting', 'thrive-leads'); ?></h1>
            </div>
            <div class="panel-body">
                <form>

                    <div id="tve-chart-annotations">
                        <label class="tve-switch">
                            <span><?php echo __('Load Annotations', 'thrive-leads'); ?></span>
                            <input class="tve_load_annotation" type="checkbox" name="tve_load_annotations" value="1" <?php if ($tve_load_annotations): ?>checked="checked"<?php endif; ?> autocomplete="off">
                            <i></i>
                        </label>
                    </div>

                    <div class="tve-report-type-title">

                    </div>

                    <div class="tve-report-type">
                        <label class="tve-custom-select"><?php echo __('Show report', 'thrive-leads'); ?>:
                            <select name="report_type" id="report_type">
                                <option value="Conversion"><?php echo __('Conversion Report', 'thrive-leads'); ?></option>
                                <option value="ConversionRate"><?php echo __('Conversion Rate Report', 'thrive-leads'); ?></option>
                                <option value="CumulativeConversion"><?php echo __('Cumulative Conversions Report', 'thrive-leads'); ?></option>
                                <option value="ComparisonChart"><?php echo __('Comparison Report', 'thrive-leads'); ?></option>
                                <option value="ListGrowth"><?php echo __('List Growth', 'thrive-leads'); ?></option>
                                <option value="CumulativeListGrowth"><?php echo __('Cumulative List Growth', 'thrive-leads'); ?></option>
                                <option value="LeadReferral"><?php echo __('Lead Referral Report', 'thrive-leads'); ?></option>
                                <option value="LeadTracking"><?php echo __('Lead Tracking Report', 'thrive-leads'); ?></option>
                                <option value="LeadSource"><?php echo __('Content Marketing Report', 'thrive-leads'); ?></option>
                            </select>
                        </label>
                    </div>

                    <div class="tve-report-filters clearfix">
                        <div>
                            <label class="tve-custom-select"><?php echo __('Date Interval', 'thrive-leads'); ?>:
                                <select autocomplete="off" class="tve-chart-date-select">
                                    <option selected value="<?php echo TVE_LAST_7_DAYS; ?>"><?php echo __('Last 7 days', 'thrive-leads'); ?></option>
                                    <option value="<?php echo TVE_LAST_30_DAYS; ?>"><?php echo __('Last 30 days', 'thrive-leads'); ?></option>
                                    <option value="<?php echo TVE_THIS_MONTH; ?>"><?php echo __('This month', 'thrive-leads'); ?></option>
                                    <option value="<?php echo TVE_LAST_MONTH; ?>"><?php echo __('Last month', 'thrive-leads'); ?></option>
                                    <option value="<?php echo TVE_THIS_YEAR; ?>"><?php echo __('This year', 'thrive-leads'); ?></option>
                                    <option value="<?php echo TVE_LAST_YEAR; ?>"><?php echo __('Last year', 'thrive-leads'); ?></option>
                                    <option value="<?php echo TVE_LAST_12_MONTHS; ?>"><?php echo __('Last 12 months', 'thrive-leads'); ?></option>
                                    <option value="<?php echo TVE_CUSTOM_DATE_RANGE; ?>"><?php echo __('Custom date range', 'thrive-leads'); ?></option>
                                </select>
                            </label>
                        </div>

                        <div class="tve-date-filter">

                            <span><?php echo __('Start Date', 'thrive-leads'); ?>:</span>
                            <input type="text" name="tve-report-start-date" id="tve-report-start-date"/>
                            <span class="tve-icon-calendar start-date-calendar"></span>


                            <span><?php echo __('End Date', 'thrive-leads'); ?>:</span>
                            <input type="text" name="tve-report-end-date" id="tve-report-end-date"/>
                            <span class="tve-icon-calendar end-date-calendar"></span>

                        </div>

                        <div class="tve-chart-source">
                            <label class="tve-custom-select"><?php echo __('Source', 'thrive-leads'); ?>:
                                <select class="tve-chart-source-select" name="tve-chart-source" autocomplete="off">
                                    <option value="-1"><?php echo __('All', 'thrive-leads') ?></option>
                                    <optgroup label="<?php echo __('Lead Groups', 'thrive-leads'); ?>">
                                        <?php if (!empty($reporting_data['lead_groups'])): ?>
                                            <?php foreach ($reporting_data['lead_groups'] as $group) : ?>
                                                <option
                                                    value="<?php echo $group->ID ?>"><?php echo $group->post_title ?></option>
                                            <?php endforeach ?>
                                        <?php else: ?>
                                            <option value="-1" disabled>(<?php echo __('empty', 'thrive-leads') ?>)</option>
                                        <?php endif; ?>
                                    </optgroup>
                                    <optgroup label="<?php echo __('Shortcodes', 'thrive-leads'); ?>">
                                        <?php if (!empty($reporting_data['shortcodes'])): ?>
                                            <?php foreach ($reporting_data['shortcodes'] as $shortcode) : ?>
                                                <option
                                                    value="<?php echo $shortcode->ID ?>"><?php echo $shortcode->post_title ?></option>
                                            <?php endforeach ?>
                                        <?php else: ?>
                                            <option value="-1" disabled>(<?php echo __('empty', 'thrive-leads') ?>)</option>
                                        <?php endif; ?>
                                    </optgroup>
                                    <optgroup label="<?php echo __('ThriveBoxes', 'thrive-leads'); ?>">
                                        <?php if (!empty($reporting_data['two_step_lightbox'])): ?>
                                            <?php foreach ($reporting_data['two_step_lightbox'] as $tsl) : ?>
                                                <option
                                                    value="<?php echo $tsl->ID ?>"><?php echo $tsl->post_title ?></option>
                                            <?php endforeach ?>
                                        <?php else: ?>
                                            <option value="-1" disabled>(<?php echo __('empty', 'thrive-leads') ?>)</option>
                                        <?php endif; ?>
                                    </optgroup>
                                </select>
                            </label>
                        </div>

                        <div class="tve-referral-type" style="display:none;">
                            <label class="tve-custom-select"><?php echo __('Referral Type', 'thrive-leads'); ?>:
                                <select autocomplete="off" class="tve-referral-type-select" name="tve-referral-type">
                                    <option selected value="domain"><?php echo __('Referral Domain', 'thrive-leads'); ?></option>
                                    <option value="url"><?php echo __('Referring URLs', 'thrive-leads'); ?></option>
                                </select>
                            </label>
                        </div>

                        <div class="tve-source-type" style="display:none;">
                            <label class="tve-custom-select"><?php echo __('Source Type', 'thrive-leads'); ?>:
                                <select autocomplete="off" class="tve-source-type-select" name="tve-source-type">
                                    <option selected value="0"><?php echo __('All', 'thrive-leads'); ?></option>
                                    <option value="<?php echo TVE_SCREEN_POST; ?>"><?php echo __('Blog Posts', 'thrive-leads'); ?></option>
                                    <option value="<?php echo TVE_SCREEN_PAGE; ?>"><?php echo __('Pages', 'thrive-leads'); ?></option>
                                </select>
                            </label>
                        </div>

                        <div class="tve-tracking-type" style="display:none;">
                            <label class="tve-custom-select"><?php echo __('View', 'thrive-leads'); ?>:
                                <select autocomplete="off" class="tve-tracking-type-select" name="tve-tracking-type">
                                    <option selected value="all"><?php echo __('All', 'thrive-leads'); ?></option>
                                    <option value="source"><?php echo __('Campaign Sources', 'thrive-leads'); ?></option>
                                    <option value="medium"><?php echo __('Campaign Media', 'thrive-leads'); ?></option>
                                    <option value="campaign"><?php echo __('Campaign Names', 'thrive-leads'); ?></option>
                                </select>
                            </label>
                        </div>

                        <div class="tve-chart-interval">
                            <label class="tve-custom-select"><?php echo __('Graph Interval', 'thrive-leads'); ?>:
                                <select autocomplete="off" class="tve-chart-interval-select" name="tve-chart-interval">
                                    <option selected value="day"><?php echo __('Daily', 'thrive-leads'); ?></option>
                                    <option value="week"><?php echo __('Weekly', 'thrive-leads'); ?></option>
                                    <option value="month"><?php echo __('Monthly', 'thrive-leads'); ?></option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div style="clear: both"></div>
                </form>
                <div class="relative">
                    <div id="tve-report-chart" style="height: 600px;"></div>
                    <div class="tve-chart-overlay" style="display: none">
                        <div class="tve-overlay-text">
                            <h1><?php echo __('No Report Data (Yet)', 'thrive-leads'); ?></h1>

                            <div>
                                <?php echo __('Here you will see a graph with the report data from all of your forms. Currently there is no data to display yet.', 'thrive-leads'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="pagination-top" class="tl-pagination">
        </div>
        <div id="tve-report-meta">
        </div>
        <div id="pagination-bottom" class="tl-pagination">
        </div>
    </div>
    <a class="tve-leads-button tve-btn tve-btn-gray tve-reporting-dashboard"
       href="<?php echo admin_url('admin.php?page=thrive_leads_dashboard'); ?>"
       title="<?php echo __('Back to Thrive Leads Home') ?>"
       id="tve-asset-group-dashboard">
        <span class="tve-icon-double-angle-quotes"></span>
        <?php echo __('Back to Thrive Leads Home', 'thrive-leads') ?>
    </a>
</div>

<style>
    .tve-report-filters {
        margin-top: 30px;
    }

    .tve-report-filters div {
        float: left;
        margin-right: 20px;
    }

    #tve-report-chart {
        margin: 30px auto;
    }

    td {
        padding: 0 24px;
        text-align: center;
    }
</style>
