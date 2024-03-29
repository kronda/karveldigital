<?php global $tve_leads_help_videos ?>
<div id="tve-content">
	<script type="text/javascript">
		var TVE_Page_Data = {
			'groups': <?php echo json_encode( $dashboard_data['groups'] ) ?>,
			'shortcodes': <?php echo json_encode( $dashboard_data['shortcodes'] ) ?>,
			globalSettings: <?php echo json_encode( $dashboard_data['global_settings'] ) ?>,
			has_non_uniques: <?php echo empty( $dashboard_data['has_non_unique_impressions'] ) ? 'false' : 'true' ?>
		};
		ThriveLeads.objects.groups = new ThriveLeads.collections.Groups(<?php echo json_encode( $dashboard_data['groups'] ) ?>);
		ThriveLeads.objects.shortcodeCollection = new ThriveLeads.collections.Shortcode(<?php echo json_encode( $dashboard_data['shortcodes'] ) ?>);
		ThriveLeads.objects.TwoStepLightboxCollection = new ThriveLeads.collections.TwoStepLightbox(<?php echo json_encode( $dashboard_data['two_step_lightbox'] ) ?>);
		ThriveLeads.objects.OneClickSignupCollection = new ThriveLeads.collections.OneClickSignup(<?php echo json_encode( $dashboard_data['one_click_signup'] ) ?>);
	</script>

	<?php /* the main dashboard template - we keep it here in order to have the data directly from php */ ?>

	<script type="text/template" id="tve-leads-dashboard">
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
					<?php require_once( dirname( __FILE__ ) . '/leads_menu.php' ) ?>
				</div>
			</div>
			<div class="tve-page-title">
				<h1><?php echo __( "Today's Summary", 'thrive-leads' ) ?></h1>
			</div>
		</div>
		<# if (has_non_uniques) { #>
			<div class="messagesList">
				<div class="error">
					<p>
						<?php echo __( 'We\'ve detected that your Thrive Leads database could be optimized', 'thrive-leads' ) ?>
						- <a href="javascript:void(0)"
						     class="tve-leads-db-optimize"><?php echo __( 'click here to optimize it', 'thrive-leads' ) ?></a>.
						<?php echo __( 'This will clear some old data that it not used anymore, and free up database space.', 'thrive-leads' ) ?>
					</p>
				</div>
			</div>
			<# } #>

				<div class="tve-daily-report clearfix">
					<div class="report-item green">
						<span class="tve-icon-eye"></span>

						<div class="report-value"><?php echo $dashboard_data['summary']['impressions'] ?></div>
						<div
							class="report-title"><?php echo _n( 'Unique Impression', 'Unique Impressions', $dashboard_data['summary']['impressions'], 'thrive-leads' ) ?></div>
						<div class="report-footer"><a
								href="<?php menu_page_url( 'thrive_leads_reporting', true ); ?>"><?php echo __( 'View More', 'thrive-leads' ) ?></a>
						</div>
					</div>
					<div class="report-item teal">
						<span class="tve-icon-paper-plane"></span>

						<div class="report-value"><?php echo $dashboard_data['summary']['conversions'] ?></div>
						<div
							class="report-title"><?php echo _n( 'Conversion', 'Conversions', $dashboard_data['summary']['conversions'], 'thrive-leads' ) ?></div>
						<div class="report-footer"><a
								href="<?php menu_page_url( 'thrive_leads_reporting', true ); ?>"><?php echo __( 'View More', 'thrive-leads' ) ?></a>
						</div>
					</div>
					<div class="report-item blue">
						<span class="tve-icon-line-chart"></span>

						<div
							class="report-value"><?php echo tve_leads_conversion_rate( $dashboard_data['summary']['impressions'], $dashboard_data['summary']['conversions'] ) ?></div>
						<div class="report-title"><?php echo __( 'Conversion Rate', 'thrive-leads' ) ?></div>
						<div class="report-footer"><a
								href="<?php menu_page_url( 'thrive_leads_reporting', true ); ?>"><?php echo __( 'View More', 'thrive-leads' ) ?></a>
						</div>
					</div>
					<div id="no-form-overlay" align="center">
						<div class="dashboard-no-stats">
							<div>
								<p><?php echo __( 'In this area, a daily snapshot will be displayed. Stats will be gathered automatically as soon as you create and publish at least one form using the options below.', 'thrive-leads' ); ?></p>
							</div>
						</div>
					</div>
				</div>

				<div class="tve-collapse-table lead-groups-table" id="tve-lead-groups">
					<h2 class="tve-action-title">
						<?php echo __( 'Lead Groups', 'thrive-leads' ) ?>
						<a class="tve-leads-button tve-btn tve-btn-blue tve-add-group" href="javascript:void(0)"
						   title="<?php echo __( 'Add New Lead Group' ) ?>"
						   id="tve-lead-add"><?php echo __( 'Add New', 'thrive-leads' ) ?></a>
					</h2>

					<div class="tve-group-list-header collapse-table-header hide-no-groups" style="display: none">
						<span class="tve-group-part collapse-table-part tve-group-title collapse-table-part-title">&nbsp;</span>
						<span
							class="tve-group-part collapse-table-part tve-group-center collapse-table-part-center"><?php echo __( 'Impressions', 'thrive-leads' ) ?></span>
						<span
							class="tve-group-part collapse-table-part tve-group-center collapse-table-part-center"><?php echo __( 'Conversions', 'thrive-leads' ) ?></span>
						<span
							class="tve-group-part collapse-table-part tve-group-center collapse-table-part-center"><?php echo __( 'Conversion Rate', 'thrive-leads' ) ?></span>
						<span
							class="tve-group-part collapse-table-part tve-group-center collapse-table-part-center"><?php echo __( 'Display On Mobile', 'thrive-leads' ) ?></span>
						<span
							class="tve-group-part collapse-table-part tve-group-center collapse-table-part-center"><?php echo __( 'Display Status', 'thrive-leads' ) ?></span>
					</div>

					<ul class="collapse-table-list" id="tve-group-list"></ul>

					<div class="show-no-groups" style="display: none">
						<p>
							<?php echo __( "You don't have any Lead Groups created yet. Click the 'Add new' button to create one.", 'thrive-leads' ) ?>
						</p>
						<a href="//fast.wistia.net/embed/iframe/dzmputa1z3?popover=true"
						   class="wistia-popover[height=450,playerColor=2bb914,width=800]"><img
								src="<?php echo TVE_LEADS_ADMIN_URL . "img/video-thumb-lead-groups.jpg" ?>" alt=""/></a>
					</div>
				</div>

				<div class="tve-collapse-table" id="tve-lead-shortcodes">
					<h2 class="tve-action-title">
						<?php echo __( 'Lead Shortcodes', 'thrive-leads' ) ?>
						<a class="tve-leads-button tve-btn tve-btn-blue tve-add-shortcode"
						   href="javascript:void(0)" title="<?php echo __( 'Add New Lead Shortcode' ) ?>"
						   id="tve-lead-add"><?php echo __( 'Add New', 'thrive-leads' ) ?></a>
					</h2>

					<div class="tve-shortcode-list-header collapse-table-header-condensed collapse-table-header"
					     style="display: none">
						<span class="tve-group-part collapse-table-part tve-group-title collapse-table-part-title">&nbsp;</span>
						<span
							class="tve-group-part collapse-table-part tve-group-center collapse-table-part-center"><?php echo __( 'Form Impressions', 'thrive-leads' ) ?></span>
						<span
							class="tve-group-part collapse-table-part tve-group-center collapse-table-part-center"><?php echo __( 'Conversions', 'thrive-leads' ) ?></span>
						<span
							class="tve-group-part collapse-table-part tve-group-center collapse-table-part-center"><?php echo __( 'Conversion Rate', 'thrive-leads' ) ?></span>
						<span
							class="tve-group-part collapse-table-part tve-group-center collapse-table-part-center"><?php echo __( 'Content Locking', 'thrive-leads' ) ?></span>
					</div>
					<ul class="collapse-table-list" id="tve-shortcode-list">

					</ul>
					<div class="no-shortcodes">
						<p>
							<?php echo __( "You don't have any Lead Shortcodes created yet. Click the 'Add new' button to create one.", 'thrive-leads' ) ?>
						</p>
						<a href="//fast.wistia.net/embed/iframe/0ixjohsmn3?popover=true"
						   class="wistia-popover[height=450,playerColor=2bb914,width=800]"><img
								src="<?php echo TVE_LEADS_ADMIN_URL . "img/video-thumb-shortcode.jpg" ?>" alt=""/></a>
					</div>
				</div>

				<div class="tve-collapse-table" id="tve-two-step-lightbox">
					<h2 class="tve-action-title">
						<?php echo __( 'ThriveBoxes', 'thrive-leads' ) ?>
						<a class="tve-leads-button tve-btn tve-btn-blue tve-add-two-step-lightbox"
						   href="javascript:void(0)" title="<?php echo __( 'Add New ThriveBox' ) ?>"
						   id="tve-lead-add"><?php echo __( 'Add New', 'thrive-leads' ) ?></a>
					</h2>

					<div
						class="tve-two-step-lightbox-list-header tve-shortcode-header collapse-table-header-condensed collapse-table-header"
						style="display: none">
						<span class="tve-group-part collapse-table-part tve-group-title collapse-table-part-title">&nbsp;</span>
						<span class="tve-group-part collapse-table-part tve-group-center collapse-table-part-center">&nbsp;</span>
						<span
							class="tve-group-part collapse-table-part tve-group-center collapse-table-part-center"><?php echo __( 'Form Impressions', 'thrive-leads' ) ?></span>
						<span
							class="tve-group-part collapse-table-part tve-group-center collapse-table-part-center"><?php echo __( 'Conversions', 'thrive-leads' ) ?></span>
						<span
							class="tve-group-part collapse-table-part tve-group-center collapse-table-part-center"><?php echo __( 'Conversion Rate', 'thrive-leads' ) ?></span>
					</div>
					<ul class="collapse-table-list" id="tve-two-step-lightbox-list">

					</ul>
					<div class="no-two-step-lightbox">
						<p>
							<?php echo __( "You don't have any ThriveBoxes created yet. Click the 'Add new' button to create one.", 'thrive-leads' ) ?>
						</p>
						<a href="//fast.wistia.net/embed/iframe/agm7q743cx?popover=true"
						   class="wistia-popover[height=450,playerColor=2bb914,width=800]"><img
								src="<?php echo TVE_LEADS_ADMIN_URL . "img/video-thumb-2-step.jpg" ?>" alt=""/></a>
					</div>
				</div>

				<div class="tve-collapse-table" id="tve-one-click-signup">
					<h2 class="tve-action-title">
						<?php echo __( 'Signup Segue - One Click Signup Links', 'thrive-leads' ) ?>
						<a class="tve-leads-button tve-btn tve-btn-blue tve-add-one-click-signup"
						   href="javascript:void(0)" title="<?php echo __( 'Add New Signup Segue' ) ?>"
						   id="tve-lead-add"><?php echo __( 'Add New', 'thrive-leads' ) ?></a>
					</h2>

					<div
						class="tve-one-click-signup-list-header tve-shortcode-header collapse-table-header-condensed collapse-table-header"
						style="display: none">
						<span class="tve-group-part collapse-table-part tve-group-title collapse-table-part-title">&nbsp;</span>
						<span
							class="tve-group-part collapse-table-part tve-group-center collapse-table-part-center"><?php echo __( 'Signups', 'thrive-leads' ) ?></span>
						<span
							class="tve-group-part collapse-table-part tve-group-center collapse-table-part-center"><?php echo __( 'Service', 'thrive-leads' ) ?></span>
						<span class="tve-group-part collapse-table-part tve-group-center collapse-table-part-center">&nbsp;</span>
					</div>
					<ul class="collapse-table-list" id="tve-one-click-signup-list">

					</ul>
					<div class="no-one-click-signup">
						<p>
							<?php echo __( "You don't have any Signup Segues created yet. Click the 'Add new' button to create one.", 'thrive-leads' ) ?>
						</p>
						<a href="//fast.wistia.net/embed/iframe/mv9an37krm?popover=true"
						   class="wistia-popover[height=450,playerColor=2bb914,width=800]"><img
								src="<?php echo TVE_LEADS_ADMIN_URL . "img/video-thumb-signup-segue.png" ?>"
								alt=""/></a>
					</div>
				</div>
	</script>
</div>
