<div id="comparison1-advanced-design-settings">
    <div class="dh_ptp_accordion">
        <!-- General Settings -->
        <h3><?php _e('General Settings', PTP_LOC); ?></h3>
        <div>
            <table>
                <tr>
                    <td class="settings-title"><?php _e('Featured Label Text', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-most-popular-label-text'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():'Most Popular'; ?>
                        <input type="text" name="<?php $metabox->the_name(); ?>" id="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>" />
                    </td>
                </tr>
                <tr>
                    <?php $mb->the_field('comparison1-shake-buttons-on-hover'); ?>
                    <td class="settings-title">
                        <label for="comparison1-shake-buttons-on-hover" style="margin: 0; font-weight: normal;"><?php _e('Shake Button on Hover', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="comparison1-shake-buttons-on-hover" value="1" <?php if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>
                   <!--  Automatically match Column Height  -->
                  <tr>
                     <?php $mb->the_field('match-column-height-cp1'); ?>
                    <td class="settings-title">
                        <label for="match-column-height-cp1" style="margin: 0; font-weight: normal;"><?php _e('Automatically match Row Height', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <?php $mb->the_field('match-column-height-cp1'); ?>
                        <input type="checkbox" onchange="return consistent_match_column_height(this) " class="tt-match-column-height-checkbox" name="<?php $metabox->the_name(); ?>" id="match-column-height-cp1" value="1" <?php      if (!$meta) { echo 'checked="checked"'; } else  if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Font Sizes -->
        <h3><?php _e('Font Sizes', PTP_LOC); ?></h3>
        <div>
            <table>
                <tr>
                    <td class="settings-title"><?php _e('Featured Label Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('comparison1-most-popular-font-size'); ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php if(!is_null($mb->get_the_value())) echo $metabox->the_value(); else echo "18"; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison1-most-popular-font-size-type'); ?>
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
                    <td class="settings-title"><?php _e('Plan Name Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('comparison1-plan-name-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():"25"; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison1-plan-name-font-size-type'); ?>
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
                    <td class="settings-title"><?php _e('Price Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('comparison1-price-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():"90"; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison1-price-font-size-type'); ?>
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
                    <td class="settings-title"><?php _e('Currency Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('comparison1-currency-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():"40"; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison1-currency-font-size-type'); ?>
                        <select name="<?php $metabox->the_name(); ?>">
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
                    <td class="settings-title"><?php _e('Billing Timeframe Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('comparison1-billing-timeframe-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():'16'; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison1-billing-timeframe-font-size-type'); ?>
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
                        <?php $mb->the_field('comparison1-bullet-item-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():'16'; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison1-bullet-item-font-size-type'); ?>
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
                        <?php $mb->the_field('comparison1-button-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():'14'; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison1-button-font-size-type'); ?>
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
                    <td class="settings-title"><?php _e('Raw Description Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('comparison1-raw-description-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():'14'; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison1-raw-description-font-size-type'); ?>
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
                    <td class="settings-title"><?php _e('Row Line Height', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('comparison1-row-line-height'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():'20'; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <select  name="<?php $metabox->the_name(); ?>">
                            <option value="px" selected>px</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
       
        <!-- Colors -->
        <h3><?php _e('Colors', PTP_LOC); ?></h3>
        <div>
            <table>
                <tr>
                    <td class="settings-title"><?php _e('How would you like to choose your colors?', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-choose-your-colors'); ?>
                    <td>
                        <?php $comparison1_choose_your_colors = (!is_null($mb->get_the_value()))?$metabox->get_the_value():1; ?>
                        <label style="margin: 0; font-weight: normal;"><input type="radio" name="<?php $mb->the_name(); ?>" class="comparison1-choose-your-colors" value="1" <?php echo ($comparison1_choose_your_colors == 1)?'checked':''; ?>/><?php _e('Use a pre-built color scheme', PTP_LOC); ?></label>
                        <label style="margin: 4px 0 5px 0; font-weight: normal;"><input type="radio" name="<?php $mb->the_name(); ?>" class="comparison1-choose-your-colors" value="2" <?php echo ($comparison1_choose_your_colors == 2)?'checked':''; ?>/><?php _e('Build your own color scheme', PTP_LOC); ?></label>
                    </td>
                </tr>
                
                <!-- description column -->
                <tr class="table-headline comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td><br/><?php _e('Description Column', PTP_LOC); ?></td>
                </tr>
                
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Even Row Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-description-dark-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#2c3e50"; ?>
                        <input type="text" id="tt-comparison1-description-dark-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#2c3e50" />
                    </td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Uneven Row Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-description-light-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#34495e"; ?>
                        <input type="text" id="tt-comparison1-description-light-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#34495e" />
                    </td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Hover Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-description-hover-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#18232e"; ?>
                        <input type="text" id="tt-comparison1-description-hover-background-color" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#18232e" />
                    </td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Border Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-description-border-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#2c3e50"; ?>
                        <input type="text" id="tt-comparison1-description-border-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#2c3e50" />
                    </td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Description Text Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-description-text-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                
                <!-- buttons -->
                <tr class="table-headline comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td><br/><?php _e('Button Colors', PTP_LOC); ?></td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Button Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-button-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Button Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-button-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#e74c3c"; ?>
                        <input type="text" id="tt-comparison1-button-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#e74c3c" />
                    </td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Button Hover Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-button-hover-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Button Hover Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-button-hover-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#c0392b"; ?>
                        <input type="text" id="tt-comparison1-button-hover-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#c0392b" />
                    </td>
                </tr>
                
                <!-- columns -->
                <tr class="table-headline comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td><br/><?php _e('Row Colors', PTP_LOC); ?></td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Uneven Row Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-column-light-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#f4fafb"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#f4fafb" />
                    </td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Even Row Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-column-dark-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#e8f4f7"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#e8f4f7" />
                    </td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Row Hover Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-column-hover-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                
                <!-- unfeatured -->
                <tr class="table-headline comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td><br/><?php _e('Unfeatured Columns', PTP_LOC); ?></td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Plan Title Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-unfeatured-plan-title-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#537597"; ?>
                        <input type="text" id="tt-comparison1-unfeatured-plan-title-font-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#537597" />
                    </td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Plan Title Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-unfeatured-plan-title-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#34495e"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" id="comparison1-unfeatured-plan-title-background-color-value" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#34495e" />
                    </td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Plan Title Hover Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-unfeatured-plan-title-hover-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#2c3e50"; ?>
                        <input type="text" id="tt-comparison1-unfeatured-plan-title-hover-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#2c3e50" />
                    </td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Plan Title Border Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-unfeatured-plan-border-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#2c3e50"; ?>
                        <input type="text" id="tt-comparison1-unfeatured-plan-border-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#2c3e50" />
                    </td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Pay Duration Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-unfeatured-pay-duration-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#2c3e50"; ?>
                        <input type="text" id="tt-comparison1-unfeatured-pay-duration-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#2c3e50" />
                    </td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Price Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-unfeatured-plan-price-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#f1f1f1"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#f1f1f1" />
                    </td>
                </tr>
                
                <!-- featured -->
                <tr class="table-headline comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td><br/><?php _e('Featured Columns', PTP_LOC); ?></td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Plan Title Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-featured-plan-title-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#952e22"; ?>
                        <input type="text" id="tt-comparison1-featured-plan-title-font-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#952e22" />
                    </td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Plan Title Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-featured-plan-title-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#e74c3c"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" id="comparison1-featured-plan-title-background-color-value" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#e74c3c" />
                    </td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Plan Title Hover Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-featured-plan-title-hover-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#c0392b"; ?>
                        <input type="text" id="tt-comparison1-featured-plan-title-hover-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#c0392b" />
                    </td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Plan Title Border Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-featured-plan-border-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#c0392b"; ?>
                        <input type="text" id="tt-comparison1-featured-plan-border-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#c0392b" />
                    </td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Pay Duration Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-featured-pay-duration-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#c0392b"; ?>
                        <input type="text" id="tt-comparison1-featured-pay-duration-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#c0392b" />
                    </td>
                </tr>
                <tr class="comparison1-color-scheme-2 <?php echo ($comparison1_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Price Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-featured-plan-price-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#f1f1f1"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#f1f1f1" />
                    </td>
                </tr>
                
                <!-- pre-build -->
                <tr class="comparison1-color-scheme-1 <?php echo ($comparison1_choose_your_colors != 1) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Choose a theme', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison1-choose-a-theme'); ?>
                    <td>
                        <?php
                            $value = (!is_null($mb->get_the_value()) && substr($mb->get_the_value(), 0, 1) == '#')?$mb->get_the_value():"#34495e/#c0392b";
                            if (strpos($value, '/') === false) {
                                $value = "#34495e/#c0392b";
                            }
                            list($color1, $color2) = explode('/', $value);
                        ?>
                        <div class="dh_ptp_color_palettes_container">
                            <a tabindex="0" class="dh_ptp_color_palettes_result" title="<?php _e('Select Theme', PTP_LOC); ?>" data-current="<?php _e('Current Theme', PTP_LOC); ?>" style="background-color: <?php echo $color1; ?>;">
                                <span style="position: absolute; height: 22px; width: 15px; margin-left: -15px;background-color:<?php echo $color2; ?>"></span>
                            </a>
                            <span class="dh_ptp_color_palettes_input_wrap">
                                <input type="text" name="<?php $mb->the_name(); ?>" id="comparison1-choose-a-theme-value" value="<?php echo $value; ?>" class="palette"/>
                            </span>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Advanced Settings -->
        <h3><?php _e('Advanced Settings', PTP_LOC); ?></h3>
        <div>
            <table>
                <tr>
                    <?php $mb->the_field('comparison1-hide-empty-rows'); ?>
                    <td class="settings-title">
                        <label for="comparison1-hide-empty-rows" style="margin: 0; font-weight: normal;"><?php _e('Hide Empty Rows', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="comparison1-hide-empty-rows" value="1" <?php if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>
                <tr>
                    <?php $mb->the_field('comparison1-hide-call-to-action-buttons'); ?>
                    <td class="settings-title">
                        <label for="comparison1-hide-call-to-action-buttons" style="margin: 0; font-weight: normal;"><?php _e('Hide Call To Action Buttons', PTP_LOC); ?></label>
                    </td>
                    <td>  
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="comparison1-hide-call-to-action-buttons" value="1"<?php if ($metabox->get_the_value()) echo ' checked="checked"'; ?>/>
                    </td>
                </tr>
                <tr>
                    <?php $mb->the_field('comparison1-open-link-in-new-tab'); ?>
                    <td class="settings-title">
                        <label for="comparison1-open-link-in-new-tab" style="margin: 0; font-weight: normal;"><?php _e('Open Links in New Tab', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="comparison1-open-link-in-new-tab" value="1" <?php if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>
            </table>
        </div>
         <!-- ept-custom-css-setting -->
         <h3   ><?php _e('Custom CSS', PTP_LOC); ?></h3>
         <div class="custom-css-setting-div" >
 
            <table>
                <tr>
                    <?php $mb->the_field('ept-custom-css-setting-cp1'); ?>
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
