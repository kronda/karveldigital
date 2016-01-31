<h2 class="tvd-card-title"><?php echo $this->getTitle() ?></h2>
<div class="tvd-row">
    <form class="tvd-col tvd-s12">
        <div class="tvd-input-field">
            <input id="tvd-op-api-id" type="text" name="connection[app_id]"
                   value="<?php echo $this->param('app_id') ?>">
            <label for="tvd-op-api-id"><?php echo __("Application ID", TVE_DASH_TRANSLATE_DOMAIN) ?>:</label>
        </div>
        <div class="tvd-input-field">
            <input id="tvd-op-api-key" type="text" name="connection[key]"
                   value="<?php echo $this->param('key') ?>">
            <label for="tvd-op-api-key"><?php echo __("API key", TVE_DASH_TRANSLATE_DOMAIN) ?>:</label>
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
