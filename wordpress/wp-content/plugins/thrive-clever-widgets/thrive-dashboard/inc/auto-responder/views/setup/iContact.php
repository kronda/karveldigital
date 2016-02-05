<h2 class="tvd-card-title"><?php echo $this->getTitle() ?></h2>
<div class="tvd-row">
    <form class="tvd-col tvd-s12">
        <input type="hidden" name="api" value="<?php echo $this->getKey() ?>"/>
        <div class="tvd-input-field">
            <input id="tvd-ic-api-username" type="text" name="connection[apiUsername]"
                   value="<?php echo $this->param('apiUsername') ?>">
            <label for="tvd-ic-api-username"><?php echo __("iContact Username", TVE_DASH_TRANSLATE_DOMAIN) ?>:</label>
        </div>
        <div class="tvd-input-field">
            <input id="tvd-ic-api-appid" type="text" name="connection[appId]"
                   value="<?php echo $this->param('appId') ?>">
            <label for="tvd-ic-api-appid"><?php echo __("Application ID", TVE_DASH_TRANSLATE_DOMAIN) ?></label>
        </div>
        <div class="tvd-input-field">
            <input id="tvd-ic-api-password" type="text" name="connection[apiPassword]"
                   value="<?php echo $this->param('apiPassword') ?>">
            <label for="tvd-ic-api-password"><?php echo __("Application Password", TVE_DASH_TRANSLATE_DOMAIN) ?>
                :</label>
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
