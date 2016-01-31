<?php
$admin_email = get_option('admin_email');
?>
<h2 class="tvd-card-title"><?php echo $this->getTitle() ?></h2>
<div class="tvd-row">
    <p class="tvd-form-description"><?php echo __('Postmark requires your email to be verified before allowing any emails to be sent. Please be sure that the email you set here matches the email you confirmed on the postmark website.', TVE_DASH_TRANSLATE_DOMAIN) ?></p>
    <form class="tvd-col tvd-s12">
        <input type="hidden" name="api" value="<?php echo $this->getKey() ?>"/>
        <div class="tvd-input-field">
            <input id="tvd-pm-api-email" type="text" name="connection[email]"
                   value="<?php echo $this->param('email') ?>">
            <label for="tvd-pm-api-email">
                <?php echo __("Postmark-approved email address", TVE_DASH_TRANSLATE_DOMAIN) ?>
            </label>
        </div>
        <div class="tvd-input-field">
            <input id="tvd-pm-api-key" type="text" name="connection[key]"
                   value="<?php echo $this->param('key') ?>">
            <label for="tvd-pm-api-key"><?php echo __("API key", TVE_DASH_TRANSLATE_DOMAIN) ?>:</label>
        </div>
    </form>
</div>
<div class="tvd-row">
    <div class="tvd-col tvd-s12 tvd-m6">
        <a class="tvd-api-cancel tvd-btn-flat tve-btn-flat-secondary tve-btn-flat-dark tvd-full-btn"><?php echo __("Cancel", TVE_DASH_TRANSLATE_DOMAIN) ?></a>
    </div>
    <div class="tvd-col tvd-s12 tvd-m6">
        <a class="tvd-api-connect tvd-waves-effect tvd-waves-light tvd-btn tvd-btn-green tvd-full-btn"><?php echo __("Connect", TVE_DASH_TRANSLATE_DOMAIN) ?></a>
    </div>
</div>
