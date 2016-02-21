<h2 class="tvd-card-title"><?php echo $this->getTitle() ?></h2>
<div class="tvd-row">
	<form class="tvd-col tvd-s12">
		<input type="hidden" name="api" value="<?php echo $this->getKey() ?>"/>
		<div class="tvd-input-field">
			<input id="tvd-ac-api-url" type="text" name="connection[api_url]"
			       value="<?php echo $this->param( 'api_url' ) ?>">
			<label for="tvd-ac-api-url"><?php echo __( "API URL", TVE_DASH_TRANSLATE_DOMAIN ) ?></label>
		</div>
		<div class="tvd-input-field">
			<input id="tvd-ac-api-key" type="text" name="connection[api_key]"
			       value="<?php echo $this->param( 'api_key' ) ?>">
			<label for="tvd-ac-api-key"><?php echo __( "API Key", TVE_DASH_TRANSLATE_DOMAIN ) ?></label>
		</div>
	</form>
</div>
<div class="tvd-row">
	<div class="tvd-col tvd-s12 tvd-m6">
		<a class="tvd-api-cancel tvd-btn-flat tve-btn-flat-secondary tve-btn-flat-dark tvd-full-btn"><?php echo __( "Cancel", TVE_DASH_TRANSLATE_DOMAIN ) ?></a>
	</div>
	<div class="tvd-col tvd-s12 tvd-m6">
		<a class="tvd-api-connect tvd-waves-effect tvd-waves-light tvd-btn tvd-btn-green tvd-full-btn"><?php echo __( "Connect", TVE_DASH_TRANSLATE_DOMAIN ) ?></a>
	</div>
</div>
