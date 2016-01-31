<?php
/** var $this Thrive_Dash_List_Connection_SendinblueEmail */
?>
<h2 class="tvd-card-title"><?php echo $this->getTitle() ?></h2>
<div class="tvd-row">
	<form class="tvd-col tvd-s12">
		<input type="hidden" name="api" value="<?php echo $this->getKey() ?>"/>
		<div class="tvd-input-field">
			<input id="tvd-aw-api-email" type="text" name="connection[key]"
				   value="<?php echo $this->param('key') ?>">
			<label for="tvd-aw-api-email"><?php echo __("API key", TVE_DASH_TRANSLATE_DOMAIN) ?></label>
		</div>
	</form>
	<p class="tve-form-description"><?php echo __('SendinBlue requires SMTP activation before allowing the SendMail API to work. If SMTP is not activated yet on your account please contact SendinBlue by Email at contact@sendinblue.com for SMTP activation.', TVE_DASH_TRANSLATE_DOMAIN) ?></p>
</div>
<div class="tvd-row">
	<div class="tvd-col tvd-s12 tvd-m6">
		<a class="tvd-api-cancel tvd-btn-flat tve-btn-flat-secondary tve-btn-flat-dark tvd-full-btn"><?php echo __("Cancel", TVE_DASH_TRANSLATE_DOMAIN) ?></a>
	</div>
	<div class="tvd-col tvd-s12 tvd-m6">
		<a class="tvd-api-connect tvd-waves-effect tvd-waves-light tvd-btn tvd-btn-green tvd-full-btn"><?php echo __("Connect", TVE_DASH_TRANSLATE_DOMAIN) ?></a>
	</div>
</div>
