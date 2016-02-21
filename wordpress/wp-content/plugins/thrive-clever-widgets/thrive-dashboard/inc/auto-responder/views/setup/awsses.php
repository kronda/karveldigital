<?php
/** var $this Thrive_Dash_List_Connection_Awsses */
$admin_email = get_option( 'admin_email' );
?>
<h2 class="tvd-card-title"><?php echo $this->getTitle() ?></h2>
<div class="tvd-row">
	<form class="tvd-col tvd-s12">
		<input type="hidden" name="api" value="<?php echo $this->getKey() ?>"/>
		<div class="tvd-input-field">
			<input id="tvd-aw-api-email" type="text" name="connection[email]"
			       value="<?php echo $this->param( 'email', $admin_email ) ?>">
			<label for="tvd-aw-api-email"><?php echo __( "Email", TVE_DASH_TRANSLATE_DOMAIN ) ?></label>
		</div>
		<div class="tvd-input-field">
			<input id="tvd-aw-api-secret" type="text" name="connection[secretkey]"
			       value="<?php echo $this->param( 'secretkey' ) ?>">
			<label for="tvd-aw-api-secret"><?php echo __( "Secret Key", TVE_DASH_TRANSLATE_DOMAIN ) ?></label>
		</div>
		<div class="tvd-input-field">
			<input id="tvd-aw-api-key" type="text" name="connection[key]" value="<?php echo $this->param( 'key' ) ?>">
			<label for="tvd-aw-api-key"><?php echo __( "Access key", TVE_DASH_TRANSLATE_DOMAIN ) ?></label>
		</div>
		<div class="tvd-input-field">
			<select id="tvd-aw-api-country" type="text" name="connection[country]">
				<option value="ireland" <?php if($this->param( 'country' ) == "ireland" ) { echo 'selected'; } ?> >Ireland</option>
				<option value="useast" <?php if($this->param( 'country' ) == "useast" ) { echo 'selected'; } ?> >US East (N. Virginia)</option>
				<option value="uswest" <?php if($this->param( 'country' ) == "uswest" ) { echo 'selected'; } ?> >US West (N. Oregon)</option>
			</select>
			<label for="tvd-aw-api-country"><?php echo __( "Email Zone", TVE_DASH_TRANSLATE_DOMAIN ) ?></label>
		</div>
	</form>
	<p class="tve-form-description">
		<?php echo __( 'Amazon Web Services Simple Email Service requires your email to be verified before allowing any emails to be sent. Please be sure that the email you set here matches the email you confirmed on the Amazon Web Services Simple Email Service website.', TVE_DASH_TRANSLATE_DOMAIN ) ?>
	</p>
	<p class="tve-form-description">
		<?php echo __( 'Emails will not be sent if Amazon Web Services Simple Email Service is on sandbox mode. If so please contact Amazon Web Services Simple Email Service to increase email limits and to be removed from sandbox.', TVE_DASH_TRANSLATE_DOMAIN ); ?>
		<?php echo sprintf( __( "More details %s.", TVE_DASH_TRANSLATE_DOMAIN ), '<a href="https://docs.aws.amazon.com/ses/latest/DeveloperGuide/request-production-access.html" target="_blank">' . __( "here", TVE_DASH_TRANSLATE_DOMAIN ) . '</a>' ) ?>
	</p>
</div>
<div class="tvd-row">
	<div class="tvd-col tvd-s12 tvd-m6">
		<a class="tvd-api-cancel tvd-btn-flat tve-btn-flat-secondary tve-btn-flat-dark tvd-full-btn"><?php echo __( "Cancel", TVE_DASH_TRANSLATE_DOMAIN ) ?></a>
	</div>
	<div class="tvd-col tvd-s12 tvd-m6">
		<a class="tvd-api-connect tvd-waves-effect tvd-waves-light tvd-btn tvd-btn-green tvd-full-btn"><?php echo __( "Connect", TVE_DASH_TRANSLATE_DOMAIN ) ?></a>
	</div>
</div>
