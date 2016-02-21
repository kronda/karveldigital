<div class="tve-sp"></div>
<p class="tl-mock-paragraph"><?php echo __( 'Choose the type of optin you would like for the Mailchimp integration', TVE_DASH_TRANSLATE_DOMAIN ) ?></p>
<div class="tve_lightbox_select_holder tve_lightbox_input_inline tve_lightbox_select_inline">
	<label for="tve-api-extra" class="tve-custom-select">
		<select class="tve-api-extra tl-api-connection-list" name="mailchimp_optin">
			<option
				value="s"<?php echo $data['optin'] === 's' ? ' selected="selected"' : '' ?>><?php echo __( 'Single optin', TVE_DASH_TRANSLATE_DOMAIN ) ?></option>
			<option
				value="d"<?php echo $data['optin'] === 'd' ? ' selected="selected"' : '' ?>><?php echo __( 'Double optin', TVE_DASH_TRANSLATE_DOMAIN ) ?></option>
		</select>
	</label>
</div>
<br>
<p><?php echo __( '(Double optin means your subscribers will need to confirm their email address before being added to your list)', TVE_DASH_TRANSLATE_DOMAIN ) ?></p>
