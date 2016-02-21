<?php
/** var $this Thrive_Dash_List_Connection_Mailgun */
?>
<h2 class="tvd-card-title"><?php echo $this->getTitle() ?></h2>
<div class="tvd-row">
	<form class="tvd-col tvd-s12">
		<input type="hidden" name="api" value="<?php echo $this->getKey() ?>"/>
		<div class="tvd-input-field">
			<input id="tvd-mg-api-domain" type="text" name="connection[domain]"
			       value="<?php echo $this->param( 'domain' ) ?>">
			<label for="tvd-mg-api-domain"><?php echo __( "Mailgun-approved domain name", TVE_DASH_TRANSLATE_DOMAIN ) ?></label>
		</div>
		<div class="tvd-input-field">
			<input id="tvd-mg-api-key" type="text" name="connection[key]"
			       value="<?php echo $this->param( 'key' ) ?>">
			<label for="tvd-mg-api-key"><?php echo __( "API key", TVE_DASH_TRANSLATE_DOMAIN ) ?></label>
		</div>
	</form>
	<p><?php echo __( 'Mailgun requires a domain name to be setup in order to send emails. Please be sure that the domain you set matches the domain on the mailgun website. A verification Email will be sent to your admin email, please make sure you have a valid email set.', TVE_DASH_TRANSLATE_DOMAIN ) ?></p>
</div>
<div class="tvd-row">
	<div class="tvd-col tvd-s12 tvd-m6">
		<a class="tvd-api-cancel tvd-btn-flat tve-btn-flat-secondary tve-btn-flat-dark tvd-full-btn"><?php echo __( "Cancel", TVE_DASH_TRANSLATE_DOMAIN ) ?></a>
	</div>
	<div class="tvd-col tvd-s12 tvd-m6">
		<a class="tvd-api-connect tvd-waves-effect tvd-waves-light tvd-btn tvd-btn-green tvd-full-btn"><?php echo __( "Connect", TVE_DASH_TRANSLATE_DOMAIN ) ?></a>
	</div>
</div>
