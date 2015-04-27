<div id="comparison2-advanced-design-settings">
    <div class="dh_ptp_accordion">
        <!-- General Settings -->
        <h3><?php _e('General Settings', PTP_LOC); ?></h3>
        <div>
            <table>
                <?php /* ?>
                <tr>
                    <?php $mb->the_field('comparison2-shake-buttons-on-hover'); ?>
                    <td class="settings-title">
                        <label for="comparison2-shake-buttons-on-hover" style="margin: 0; font-weight: normal;"><?php _e('Shake Button on Hover', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="comparison2-shake-buttons-on-hover" value="1" <?php if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>
                  <?php */ ?>
                 
                   <!--  Automatically match Column Height  -->
                  <tr>
                     <?php $mb->the_field('match-column-height-cp2'); ?>
                    <td class="settings-title">
                        <label for="match-column-height-cp2" style="margin: 0; font-weight: normal;"><?php _e('Automatically match Row Height', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <?php $mb->the_field('match-column-height-cp2'); ?>
                        <input type="checkbox" onchange="return consistent_match_column_height(this) " class="tt-match-column-height-checkbox" name="<?php $metabox->the_name(); ?>" id="match-column-height-cp2" value="1" <?php      if (!$meta) { echo 'checked="checked"'; } else  if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Font Sizes -->
        <h3><?php _e('Font Sizes', PTP_LOC); ?></h3>
        <div>
            <table>
                <tr>
                    <td class="settings-title"><?php _e('Plan Name Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('comparison2-plan-name-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():'20'; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison2-plan-name-font-size-type'); ?>
                        <select  name="<?php $metabox->the_name(); ?>">
                            <option value="em" <?php
                                if(!is_null($mb->get_the_value())) {
                                    if($mb->get_the_value() == 'em') {
                                        echo 'selected';
                                    }
                                }
                            ?> >em</option>
                            <option value="px" <?php
                                if(!is_null($mb->get_the_value())) {
                                    if($mb->get_the_value() == 'px') {
                                        echo 'selected';
                                    }
                                } else {
                                    echo 'selected';
                                }
                            ?>>px</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Bullet Item Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('comparison2-bullet-item-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():'16'; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison2-bullet-item-font-size-type'); ?>
                        <select  name="<?php $metabox->the_name(); ?>">
                            <option value="em" <?php
                                if(!is_null($mb->get_the_value())) {
                                    if($mb->get_the_value() == 'em') {
                                        echo 'selected';
                                    }
                                }
                            ?> >em</option>
                            <option value="px" <?php
                                if(!is_null($mb->get_the_value())) {
                                    if($mb->get_the_value() == 'px') {
                                        echo 'selected';
                                    }
                                } else {
                                    echo 'selected';
                                }
                            ?>>px</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Button Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('comparison2-button-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():'14'; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison2-button-font-size-type'); ?>
                        <select  name="<?php $metabox->the_name(); ?>">
                            <option value="em" <?php
                                if(!is_null($mb->get_the_value())) {
                                    if($mb->get_the_value() == 'em') {
                                        echo 'selected';
                                    }
                                }
                            ?> >em</option>
                            <option value="px" <?php
                                if(!is_null($mb->get_the_value())) {
                                    if($mb->get_the_value() == 'px') {
                                        echo 'selected';
                                    }
                                } else {
                                    echo 'selected';
                                }
                            ?>>px</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        
        
        <!-- Colors -->
        <h3><?php _e('Colors', PTP_LOC); ?></h3>
        <div>
            <table>
                                
                <!-- description column -->
                <tr class="table-headline comparison2-color-scheme-2" >
                    <td><br/> <?php _e('Description Column', PTP_LOC); ?> </td>
                </tr>
                
                <tr class="comparison2-color-scheme-2" >
                    <td class="settings-title"><?php _e('Uneven Row Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-description-dark-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" id="tt-comparison2-description-dark-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Even Row Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-description-light-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" id="tt-comparison2-description-light-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <?php /* ?>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Hover Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-description-hover-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#C1C5C6"; ?>
                        <input type="text" id="tt-comparison2-description-hover-background-color" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#C1C5C6" />
                    </td>
                </tr>
                 <?php */ ?> 
                 
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Border Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-description-border-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#e9e9e9"; ?>
                        <input type="text" id="tt-comparison2-description-border-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#e9e9e9" />
                    </td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Description Text Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-description-text-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#333333"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#333333" />
                    </td>
                </tr>
                
                <!-- buttons -->
                <tr class="table-headline comparison2-color-scheme-2 ">
                    <td><br/><?php _e('Button Colors', PTP_LOC); ?></td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Button Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-button-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Button Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-button-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#00B5B5"; ?>
                        <input type="text" id="tt-comparison2-button-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#00B5B5" />
                    </td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Button Hover Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-button-hover-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Button Hover Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-button-hover-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#019E9E"; ?>
                        <input type="text" id="tt-comparison2-button-hover-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#019E9E" />
                    </td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Button Bottom Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-button-bottom-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#019E9E"; ?>
                        <input type="text" id="tt-comparison2-button-hover-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#019E9E" />
                    </td>
                </tr>
                
                 <!-- feature buttons -->
                <tr class="table-headline comparison2-color-scheme-2 ">
                    <td><br/><?php _e('Featured Button Colors', PTP_LOC); ?></td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Button Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-featured-button-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Button Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-featured-button-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#00B5B5"; ?>
                        <input type="text" id="tt-comparison2-featured-button-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#00B5B5" />
                    </td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Button Hover Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-featured-button-hover-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Button Hover Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-featured-button-hover-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#019E9E"; ?>
                        <input type="text" id="tt-comparison2-featured-button-hover-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#019E9E" />
                    </td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Button Bottom Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-featured-button-bottom-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#019E9E"; ?>
                        <input type="text" id="tt-comparison2-featured-button-hover-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#019E9E" />
                    </td>
                </tr>
                
                <!-- columns -->
                <tr class="table-headline comparison2-color-scheme-2 ">
                    <td><br/><?php _e('Row Colors', PTP_LOC); ?></td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Uneven Row Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-column-light-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Even Row Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-column-dark-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <?php /* ?>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Row Hover Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-column-hover-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#C1C5C6"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#C1C5C6" />
                    </td>
                </tr>
                <?php */ ?>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Row Border Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-column-row-border-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#e9e9e9"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#e9e9e9" />
                    </td>
                </tr>
                
                <!-- unfeatured -->
                <tr class="table-headline comparison2-color-scheme-2 ">
                    <td><br/><?php _e('Unfeatured Columns', PTP_LOC); ?></td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Plan Title Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-unfeatured-plan-title-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#333333"; ?>
                        <input type="text" id="tt-comparison2-unfeatured-plan-title-font-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#333333" />
                    </td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Plan Title Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-unfeatured-plan-title-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#f9f9f9"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" id="comparison2-unfeatured-plan-title-background-color-value" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#f9f9f9" />
                    </td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Plan Title Hover Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-unfeatured-plan-title-hover-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" id="tt-comparison2-unfeatured-plan-title-hover-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Plan Title Border Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-unfeatured-plan-border-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#e9e9e9"; ?>
                        <input type="text" id="tt-comparison2-unfeatured-plan-border-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#e9e9e9" />
                    </td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Row Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-unfeatured-row-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#333333"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#333333" />
                    </td>
                </tr>
                
                <!-- featured -->
                <tr class="table-headline comparison2-color-scheme-2 ">
                    <td><br/><?php _e('Featured Columns', PTP_LOC); ?></td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Plan Title Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-featured-plan-title-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#333333"; ?>
                        <input type="text" id="tt-comparison2-featured-plan-title-font-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#333333" />
                    </td>
                </tr>
                <tr class="comparison2-color-scheme-2">
                    <td class="settings-title"><?php _e('Plan Title Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-featured-plan-title-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#f9f9f9"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" id="comparison2-featured-plan-title-background-color-value" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#f9f9f9" />
                    </td>
                </tr>
                
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Plan Title Hover Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-featured-plan-title-hover-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" id="tt-comparison2-featured-plan-title-hover-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Plan Title Border Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-featured-plan-border-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#e9e9e9"; ?>
                        <input type="text" id="tt-comparison2-featured-plan-border-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#e9e9e9" />
                    </td>
                </tr>
                <tr class="comparison2-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Row Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison2-featured-row-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#333333"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#333333" />
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Advanced Settings -->
        <h3><?php _e('Advanced Settings', PTP_LOC); ?></h3>
        <div>
            <table>
                <tr>
                    <?php $mb->the_field('comparison2-hide-empty-rows'); ?>
                    <td class="settings-title">
                        <label for="comparison2-hide-empty-rows" style="margin: 0; font-weight: normal;"><?php _e('Hide Empty Rows', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="comparison2-hide-empty-rows" value="1" <?php if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>
                <tr class="hide">
                    <?php $mb->the_field('comparison2-hide-call-to-action-buttons'); ?>
                    <td class="settings-title">
                        <label for="comparison2-hide-call-to-action-buttons" style="margin: 0; font-weight: normal;"><?php _e('Hide Call To Action Buttons', PTP_LOC); ?></label>
                    </td>
                    <td>  
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="comparison2-hide-call-to-action-buttons" value="1"<?php  echo 'checked="checked"'; ?>/>
                    </td>
                </tr>
                 
                 
                <tr>
                    <?php $mb->the_field('comparison2-open-link-in-new-tab'); ?>
                    <td class="settings-title">
                        <label for="comparison2-open-link-in-new-tab" style="margin: 0; font-weight: normal;"><?php _e('Open Links in New Tab', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="comparison2-open-link-in-new-tab" value="1" <?php if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>
               
                <tr class="hide">
                    <?php $mb->the_field('comparison2-show-action-buttons-on-top'); ?>
                    <td class="settings-title">
                        <label for="comparison2-show-action-buttons-on-top" style="margin: 0; font-weight: normal;"><?php _e('Show Action Buttons On Top', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="comparison2-show-action-buttons-on-top" value="1" <?php echo 'checked="checked"'; ?> />
                    </td>
                </tr>
            </table>
        </div>
         <!-- ept-custom-css-setting -->
         <h3   ><?php _e('Custom CSS', PTP_LOC); ?></h3>
         <div class="custom-css-setting-div" >
 
            <table>
                <tr>
                    <?php $mb->the_field('ept-custom-css-setting-cp2'); ?>
                    <td class="settings-title">
                        <label for="custom-css-setting" style="margin: 0; font-weight: bold;"><?php _e('Custom Pricing Table CSS', PTP_LOC); ?></label>
                    </td>
                    <td class="custom-css-setting-td">
                        
                        <textarea  id="custom-css5" class="custom-css-setting-textbox" name="<?php $metabox->the_name(); ?>"  rows="10" cols="60" <?php if (!$metabox->get_the_value()) echo  'placeholder=" Type your custom css here"' ?> ><?php if ($metabox->get_the_value()) echo " ".$metabox->get_the_value(); else {
                                                echo  ' ' ;
                                            } ?></textarea>
                        </td>
                </tr>
           
            </table>
        
           </div>
    </div>
</div>
