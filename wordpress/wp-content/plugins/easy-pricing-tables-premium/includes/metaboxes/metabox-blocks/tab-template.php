<div id="dh_ptp_tabs_2" class="dh_ptp_tab">
 
    <?php
       /**
        * This is a pacth fix for user just move from old design 5 table to Comparison table
        * Will be removed in furture
        */
        $patch_fix_for_design5 = false;
        $mb->the_field('dh-ptp-design5-template');
         if(!is_null($metabox->get_the_value()) && $mb->get_the_value()=="selected" )
             { 
              $patch_fix_for_design5 = true;
             };
    
    ?>
    
    <?php $mb->the_field('dh-ptp-simple-flat-template'); ?>
    <div id="simple-flat-selector" onClick="templateSelectorClickedHandler(this)" class="template-selector <?php if(!is_null($metabox->get_the_value())){if($mb->get_the_value()=="selected"){echo "template-selected";}} else {echo "template-selected";} ?>">
        <input type="hidden" name="<?php $mb->the_name(); ?>" value="<?php if(!is_null($metabox->get_the_value())){$mb->the_value();} elseif(!$mb->is_last()){ echo "selected"; } ?>" class="form-control template-hidden-input" />
        <img src="<?php echo PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/ui/img/simple-flat.png'; ?>" class="template-image"></img>
        <p class="template-headline"><?php _e('Pricing Table 1', PTP_LOC); ?></p>
        <ul class="template-feature">
            <li><?php // _e('Supports Up To 10 Columns', PTP_LOC); ?></li>
        </ul>
        <a  class="button template-button"><?php _e('Use This Template', PTP_LOC); ?></a>
    </div>

    <?php $mb->the_field('dh-ptp-fancy-flat-template'); ?>
    <div id="fancy-flat-selector" onClick="templateSelectorClickedHandler(this)" class="template-selector <?php if($mb->get_the_value()=="selected"){echo "template-selected";} ?>">
        <input type="hidden" name="<?php $mb->the_name(); ?>" value="<?php if(!is_null($metabox->get_the_value())){$mb->the_value();} elseif(!$mb->is_last()){ echo "not-selected"; } ?>" class="form-control template-hidden-input" />
        <img src="<?php echo PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/ui/img/fancy-flat.png'; ?>" class="template-image"></img>
        <p class="template-headline"><?php _e('Pricing Table 2', PTP_LOC); ?></p>
        <ul class="template-feature">
            <li><?php // _e('Supports Up To 8 Columns', PTP_LOC); ?></li>
        </ul>
        <a  class="button template-button"><?php _e('Use This Template', PTP_LOC); ?></a>
    </div>

    <?php $mb->the_field('dh-ptp-stylish-flat-template'); ?>
    <div id="stylish-flat-selector" onClick="templateSelectorClickedHandler(this)" class="template-selector <?php if($mb->get_the_value()=="selected"){echo "template-selected";} ?>">
        <input type="hidden" name="<?php $mb->the_name(); ?>" value="<?php if(!is_null($metabox->get_the_value())){$mb->the_value();} elseif(!$mb->is_last()){ echo "not-selected"; } ?>" class="form-control template-hidden-input" />
        <img src="<?php echo PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/ui/img/stylish-flat.png'; ?>" class="template-image"></img>
        <p class="template-headline"><?php _e('Pricing Table 3', PTP_LOC); ?></p>
        <ul class="template-feature">
            <li><?php // _e('Supports Up To 5 Columns', PTP_LOC); ?></li>
        </ul>
        <a  class="button template-button"><?php _e('Use This Template', PTP_LOC); ?></a>
    </div>

    <!-- Design 4 -->
    <?php $mb->the_field('dh-ptp-design4-template'); ?>
    <div id="design4-selector" onClick="templateSelectorClickedHandler(this)" class="template-selector <?php if($mb->get_the_value()=="selected"){echo "template-selected";} ?>">
        <input type="hidden" name="<?php $mb->the_name(); ?>" value="<?php if(!is_null($metabox->get_the_value())){$mb->the_value();} elseif(!$mb->is_last()){ echo "not-selected"; } ?>" class="form-control template-hidden-input" />
        <img src="<?php echo PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/ui/img/design4.png'; ?>" class="template-image"></img>
        <p class="template-headline"><?php _e('Pricing Table 4 (best for non-touch devices)', PTP_LOC); ?></p>
        <ul class="template-feature">
            <li><?php // _e('Supports Unlimited Columns', PTP_LOC); ?></li>
            <li><?php // _e('Hover Effects (ideal for non-touch devices)', PTP_LOC); ?></li>
        </ul>
        <a  class="button template-button"><?php _e('Use This Template', PTP_LOC); ?></a>
    </div>
    
    <?php $mb->the_field('dh-ptp-dg5-template'); ?>
    <div id="design5-selector"  onClick="templateSelectorClickedHandler(this)" class="template-selector <?php if($mb->get_the_value()=="selected"){echo "template-selected";} ?>">
        <input type="hidden" name="<?php $mb->the_name(); ?>" value="<?php if(!is_null($metabox->get_the_value())){$mb->the_value();} elseif(!$mb->is_last()){ echo "not-selected"; } ?>" class="form-control template-hidden-input" />
        <img src="<?php echo PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/ui/img/design5.png'; ?>" class="template-image"></img>
        <p class="template-headline"><?php _e('Pricing Table 5', PTP_LOC); ?></p>
        <ul class="template-feature">
            <li><?php // _e('Supports Up To 10 Columns', PTP_LOC); ?></li>
        </ul>
        <a  class="button template-button"><?php _e('Use This Template', PTP_LOC); ?></a>
    </div>
    
    <?php $mb->the_field('dh-ptp-dg6-template'); ?>
    <div id="design6-selector"  onClick="templateSelectorClickedHandler(this)" class="template-selector <?php if($mb->get_the_value()=="selected"){echo "template-selected";} ?>">
        <input type="hidden" name="<?php $mb->the_name(); ?>" value="<?php if(!is_null($metabox->get_the_value())){$mb->the_value();} elseif(!$mb->is_last()){ echo "not-selected"; } ?>" class="form-control template-hidden-input" />
        <img src="<?php echo PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/ui/img/design6.png'; ?>" class="template-image"></img>
        <p class="template-headline"><?php _e('Pricing Table 6', PTP_LOC); ?></p>
        <ul class="template-feature">
            <li><?php // _e('Supports Up To 10 Columns', PTP_LOC); ?></li>
        </ul>
        <a  class="button template-button"><?php _e('Use This Template', PTP_LOC); ?></a>
    </div>
    
    <?php $mb->the_field('dh-ptp-dg7-template'); ?>
    <div id="design7-selector"  onClick="templateSelectorClickedHandler(this)" class="template-selector <?php if($mb->get_the_value()=="selected"){echo "template-selected";} ?>">
        <input type="hidden" name="<?php $mb->the_name(); ?>" value="<?php if(!is_null($metabox->get_the_value())){$mb->the_value();} elseif(!$mb->is_last()){ echo "not-selected"; } ?>" class="form-control template-hidden-input" />
        <img src="<?php echo PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/ui/img/design7.png'; ?>" class="template-image"></img>
        <p class="template-headline"><?php _e('Pricing Table 7', PTP_LOC); ?></p>
        <ul class="template-feature">
            <li><?php // _e('Supports Up To 10 Columns', PTP_LOC); ?></li>
        </ul>
        <a  class="button template-button"><?php _e('Use This Template', PTP_LOC); ?></a>
    </div>
    
    <?php $mb->the_field('dh-ptp-comparison1-template'); ?>
    <div id="comparison1-selector" onClick="templateSelectorClickedHandler(this)" class="template-selector <?php if($mb->get_the_value()=="selected" || $patch_fix_for_design5){echo "template-selected";} ?>">
        <input type="hidden" name="<?php $mb->the_name(); ?>" value="<?php if($patch_fix_for_design5){echo "selected";} elseif(!is_null($metabox->get_the_value())){$mb->the_value();} elseif(!$mb->is_last()  ){ echo "not-selected"; } ?>" class="form-control template-hidden-input" />
        <img src="<?php echo PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/ui/img/comparison1.png'; ?>" class="template-image"></img>
        <p class="template-headline"><?php _e('Comparison Table 1', PTP_LOC); ?></p>
        <ul class="template-feature">            
            <li><?php // _e('Supports Up To 10 Columns', PTP_LOC); ?></li>
        </ul>
        <a  class="button template-button"><?php _e('Use This Template', PTP_LOC); ?></a>
    </div>
    
    <?php $mb->the_field('dh-ptp-comparison2-template'); ?>
    <div id="comparison2-selector" onClick="templateSelectorClickedHandler(this)" class="template-selector <?php if($mb->get_the_value()=="selected"){echo "template-selected";} ?>">
        <input type="hidden" name="<?php $mb->the_name(); ?>" value="<?php if(!is_null($metabox->get_the_value())){$mb->the_value();} elseif(!$mb->is_last()  ){ echo "not-selected"; } ?>" class="form-control template-hidden-input" />
        <img src="<?php echo PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/ui/img/comparison2.png'; ?>" class="template-image"></img>
        <p class="template-headline"><?php _e('Comparison Table 2', PTP_LOC); ?></p>
        <ul class="template-feature">
            <li><?php // _e('Supports Up To 10 Columns', PTP_LOC); ?></li>
        </ul>
        <a  class="button template-button"><?php _e('Use This Template', PTP_LOC); ?></a>
    </div>
    
    <?php $mb->the_field('dh-ptp-comparison3-template'); ?>
    <div id="comparison3-selector" onClick="templateSelectorClickedHandler(this)" class="template-selector <?php if($mb->get_the_value()=="selected"){echo "template-selected";} ?>">
        <input type="hidden" name="<?php $mb->the_name(); ?>" value="<?php if(!is_null($metabox->get_the_value())){$mb->the_value();} elseif(!$mb->is_last()  ){ echo "not-selected"; } ?>" class="form-control template-hidden-input" />
        <img src="<?php echo PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/ui/img/comparison3.png'; ?>" class="template-image"></img>
        <p class="template-headline"><?php _e('Comparison Table 3', PTP_LOC); ?></p>
        <ul class="template-feature">
            <li><?php // _e('Supports Up To 10 Columns', PTP_LOC); ?></li>
        </ul>
        <a  class="button template-button"><?php _e('Use This Template', PTP_LOC); ?></a>
    </div>
    
    <!-- clear our floats -->
    <div class="clear"></div>
</div>
