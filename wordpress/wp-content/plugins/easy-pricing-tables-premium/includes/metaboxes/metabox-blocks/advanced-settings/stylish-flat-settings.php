<!-- Design 3 -->

<div id="stylish-flat-advanced-design-settings">
    <div class="dh_ptp_accordion">
        <h3><?php _e('General Settings', PTP_LOC); ?></h3>
        <div>
            <table>
                <tr>
                    <td class="settings-title"><?php _e('Featured Label Text', PTP_LOC); ?></td>
                    <?php $mb->the_field('stylish-flat-most-popular-label-text'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():'Most Popular'; ?>
                        <input type="text" name="<?php $metabox->the_name(); ?>" id="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>" />
                    </td>
                </tr>
                <tr>
                    <td class="settings-title">
                        <?php $mb->the_field('stylish-flat-hover-effects'); ?>
                        <label for="stylish-flat-hover-effects" style="margin: 0; font-weight: normal;"><?php _e('Enlarge Column on Hover', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="stylish-flat-hover-effects" value="1"<?php if ($metabox->get_the_value()) { echo ' checked="checked"'; } ?>/>
                    </td>
                </tr>
                   <!--  Automatically match Column Height  -->
                  <tr>
                     <?php $mb->the_field('match-column-height-dg3'); ?>
                    <td class="settings-title">
                        <label for="match-column-height-dg3" style="margin: 0; font-weight: normal;"><?php _e('Automatically match Row Height', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <?php $mb->the_field('match-column-height-dg3'); ?>
                        <input type="checkbox" onchange="return consistent_match_column_height(this) " class="tt-match-column-height-checkbox" name="<?php $metabox->the_name(); ?>" id="match-column-height-dg3" value="1" <?php      if (!$meta) { echo 'checked="checked"'; } else  if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
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
                        <?php $mb->the_field('stylish-flat-most-popular-font-size'); ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo (!is_null($mb->get_the_value()))?$metabox->get_the_value():"11"; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('stylish-flat-most-popular-font-size-type'); ?>
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
                        <?php $mb->the_field('stylish-flat-plan-name-font-size'); ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo (!is_null($mb->get_the_value()))?$metabox->get_the_value():"24"; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('stylish-flat-plan-name-font-size-type'); ?>
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
                        <?php $mb->the_field('stylish-flat-price-font-size'); ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo (!is_null($mb->get_the_value()))?$metabox->get_the_value():"42"; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('stylish-flat-price-font-size-type'); ?>
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
                        <?php $mb->the_field('stylish-flat-bullet-item-font-size'); ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php if(!is_null($mb->get_the_value())) echo $metabox->get_the_value(); else echo "12"; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('stylish-flat-bullet-item-font-size-type'); ?>
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
                        <?php $mb->the_field('stylish-flat-button-font-size'); ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo (!is_null($mb->get_the_value()))?$metabox->get_the_value():"13"; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('stylish-flat-button-font-size-type'); ?>
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
                <tr>
                    <td class="settings-title"><?php _e('How would you like to choose your colors?', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-choose-your-colors'); ?>
                    <td>
                        <?php $design3_choose_your_colors = (!is_null($mb->get_the_value()))?$metabox->get_the_value():1; ?>
                        <label style="margin: 0; font-weight: normal;"><input type="radio" name="<?php $mb->the_name(); ?>" class="design3-choose-your-colors" value="1" <?php echo ($design3_choose_your_colors == 1)?'checked':''; ?>/><?php _e('Use a pre-built color scheme', PTP_LOC); ?></label>
                        <label style="margin: 4px 0 5px 0; font-weight: normal;"><input type="radio" name="<?php $mb->the_name(); ?>" class="design3-choose-your-colors" value="2" <?php echo ($design3_choose_your_colors == 2)?'checked':''; ?>/><?php _e('Build your own color scheme', PTP_LOC); ?></label>
                    </td>
                </tr>
                
                <!-- unfeatured columns -->
                <tr class="table-headline design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td><br/><?php _e('Unfeatured Columns', PTP_LOC); ?></td>
                </tr>
                    
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Plan Title Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-unfeatured-plan-title-font-color'); ?>
                    <td>
                        <?php
                            $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#d4d4d4";
                            $unfeatured_design3_plan_title_font_color_tmp = $value;
                        ?>
                        <input type="text" id="tt-design3-unfeatured-plan-title-font-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#d4d4d4" />
                    </td>
                </tr>
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Plan Title Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-unfeatured-plan-title-background-color'); ?>
                    <td>
                        <?php
                            $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#456366";
                            $unfeatured_design3_plan_title_background_color_tmp = $value;
                        ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" id="design3-unfeatured-plan-title-background-color-value" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#456366" />
                    </td>
                </tr>
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Price Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-unfeatured-plan-price-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#d4d4d4"; ?>
                        <input type="text" id="tt-design3-unfeatured-plan-price-font-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#d4d4d4" />
                    </td>
                </tr>
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Feature Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-unfeatured-feature-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#313131"; ?>
                        <input type="text" id="tt-design3-unfeatured-feature-font-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#313131" />
                    </td>
                </tr>
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Feature Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-unfeatured-feature-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#dddddd"; ?>
                        <input type="text" id="tt-design3-unfeatured-feature-background-color" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#dddddd" />
                    </td>
                </tr>
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Feature Border Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-unfeatured-feature-border-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#bbbbbb"; ?>
                        <input type="text" id="tt-design3-unfeatured-feature-border-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#bbbbbb" />
                    </td>
                </tr>
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Button Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-unfeatured-button-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():$unfeatured_design3_plan_title_background_color_tmp; ?>
                        <input type="text" id="tt-design3-unfeatured-button-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="<?php echo $unfeatured_design3_plan_title_background_color_tmp; ?>" />
                    </td>
                </tr>
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Button Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-unfeatured-button-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():$unfeatured_design3_plan_title_font_color_tmp; ?>
                        <input type="text" id="tt-design3-unfeatured-button-font-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="<?php echo $unfeatured_design3_plan_title_font_color_tmp; ?>" />
                    </td>
                </tr>
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Button Hover Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-unfeatured-button-hover-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#d4d4d4"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#d4d4d4" />
                    </td>
                </tr>
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Button Hover Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-unfeatured-button-hover-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#374f52"; ?>
                        <input type="text" id="tt-design3-unfeatured-button-hover-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#374f52" />
                    </td>
                </tr>
                
                <!-- featured column -->
                <tr class="table-headline design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td><br/><?php _e('Featured Columns', PTP_LOC); ?></td>
                </tr>
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Plan Title Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-featured-plan-title-font-color'); ?>
                    <td>
                        <?php
                            $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#d4d4d4";
                            $featured_design3_plan_title_font_color_tmp = $value;
                        ?>
                        <input type="text" id="tt-design3-featured-plan-title-font-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#d4d4d4" />
                    </td>
                </tr>
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Plan Title Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-featured-plan-title-background-color'); ?>
                    <td>
                        <?php
                            $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#456366";
                            $featured_design3_plan_title_background_color_tmp = $value;
                        ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" id="design3-featured-plan-title-background-color-value" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#456366" />
                    </td>
                </tr>
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Featured Label Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-featured-most-popular-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#d4d4d4"; ?>
                        <input type="text" id="tt-design3-featured-most-popular-font-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#d4d4d4" />
                    </td>
                </tr>
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Price Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-featured-plan-price-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#d4d4d4"; ?>
                        <input type="text" id="tt-design3-featured-plan-price-font-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#d4d4d4" />
                    </td>
                </tr>
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Feature Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-featured-feature-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#313131"; ?>
                        <input type="text" id="tt-design3-featured-feature-font-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#313131" />
                    </td>
                </tr>
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Feature Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-featured-feature-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#dddddd"; ?>
                        <input type="text" id="tt-design3-featured-feature-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#dddddd" />
                    </td>
                </tr>
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Feature Border Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-featured-feature-border-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#bbbbbb"; ?>
                        <input type="text" id="tt-design3-featured-feature-border-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#bbbbbb" />
                    </td>
                </tr>
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Button Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-featured-button-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():$featured_design3_plan_title_background_color_tmp; ?>
                        <input type="text" id="tt-design3-featured-button-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="<?php echo $featured_design3_plan_title_background_color_tmp; ?>" />
                    </td>
                </tr>
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Button Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-featured-button-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():$featured_design3_plan_title_font_color_tmp; ?>
                        <input type="text" id="tt-design3-featured-button-font-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="<?php echo $featured_design3_plan_title_font_color_tmp; ?>" />
                    </td>
                </tr>
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Button Hover Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-featured-button-hover-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#d4d4d4"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#d4d4d4" />
                    </td>
                </tr>
                <tr class="design3-color-scheme-2 <?php echo ($design3_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Button Hover Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design3-featured-button-hover-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#374f52"; ?>
                        <input type="text" id="tt-design3-featured-button-hover-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#374f52" />
                    </td>
                </tr>
                
                <!-- pre-build theme options -->
                <tr class="design3-color-scheme-1 <?php echo ($design3_choose_your_colors != 1) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Table Color Scheme', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('stylish-flat-table-color-scheme'); ?>
                        <label style="font-weight: normal; margin: 0px; padding: 5px 0 5px 0; display: block;"><input type="radio" class="tt-ptp-stylish-flat-table-color-scheme-class" id="ptp-stylish-flat-table-color-scheme" name="<?php $mb->the_name(); ?>" value="light"<?php if(!is_null($mb->get_the_value())) {  echo $mb->is_value('light')?' checked="checked"':'';} else { echo ' checked="checked"';}  ?>> <?php _e('Light', PTP_LOC); ?></label>
                        <label style="font-weight: normal; margin: 0px; padding: 5px 0 15px 0; display: block;"><input type="radio" id="tt-ptp-stylish-flat-table-color-scheme-class" name="<?php $mb->the_name(); ?>" value="dark"<?php echo $mb->is_value('dark')?' checked="checked"':''; ?>> <?php _e('Dark', PTP_LOC); ?></label>
                    </td>
                </tr>
                <tr class="design3-color-scheme-1 <?php echo ($design3_choose_your_colors != 1) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Column Color Scheme', PTP_LOC); ?></td>
                    <?php $mb->the_field('stylish-flat-column-color-scheme'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()) && substr($mb->get_the_value(), 0, 1) == '#')?$mb->get_the_value():"#456366"; ?>
                        <div class="dh_ptp_easy_palette_container">
                            <a tabindex="0" class="dh_ptp_palette_result stylish-flat-column-color-scheme-value" title="<?php _e('Select Color', PTP_LOC); ?>" data-current="<?php _e('Current Color', PTP_LOC); ?>" style="background-color: <?php echo $value; ?>;"></a>
                            <span class="dh_ptp_palette_input_wrap">
                                <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="color-palette ptp-stlyish-column-color-scheme"/>
                            </span>
                        </div>
                    </td>
                </tr>
                <tr class="design3-color-scheme-1 <?php echo ($design3_choose_your_colors != 1) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Featured Column Color Scheme', PTP_LOC); ?></td>
                    <?php $mb->the_field('stylish-flat-featured-column-color-scheme'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()) && substr($mb->get_the_value(), 0, 1) == '#')?$mb->get_the_value():"#456366"; ?>
                        <div class="dh_ptp_easy_palette_container">
                            <a tabindex="0" class="dh_ptp_palette_result stylish-flat-featured-column-color-scheme-value" title="<?php _e('Select Color', PTP_LOC); ?>" data-current="<?php _e('Current Color', PTP_LOC); ?>" style="background-color: <?php echo $value; ?>;"></a>
                            <span class="dh_ptp_palette_input_wrap">
                                <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="color-palette ptp-stlyish-column-color-scheme"/>
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
                    <?php $mb->the_field('design3-hide-empty-rows'); ?>
                    <td class="settings-title">
                        <label for="design3-hide-empty-rows" style="margin: 0; font-weight: normal;"><?php _e('Hide Empty Rows', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="design3-hide-empty-rows" value="1" <?php if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>                
                <tr>
                    <td class="settings-title">
                        <?php $mb->the_field('stylish-flat-hide-call-to-action-buttons'); ?>
                        <label for="design3-hide-call-to-action-buttons" style="margin: 0; font-weight: normal;"><?php _e('Hide Call To Action Buttons', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="design3-hide-call-to-action-buttons" value="1"<?php if ($metabox->get_the_value()) { echo ' checked="checked"'; } ?>/>
                    </td>
                </tr>
                <tr>
                    <?php $mb->the_field('design3-open-link-in-new-tab'); ?>
                    <td class="settings-title">
                        <label for="design3-open-link-in-new-tab" style="margin: 0; font-weight: normal;"><?php _e('Open Links in New Tab', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="design3-open-link-in-new-tab" value="1" <?php if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>
            </table>
        </div>
             <!-- ept-custom-css-setting -->
        <h3><?php _e('Custom CSS', PTP_LOC); ?></h3>
        <div >
 
            <table>
                <tr>
                    <?php $mb->the_field('ept-custom-css-setting-dg3'); ?>
                    <td class="settings-title">
                        <label for="custom-css-setting" style="margin: 0; font-weight: bold;"><?php _e('Custom Pricing Table CSS', PTP_LOC); ?></label>
                    </td>
                    <td class="custom-css-setting-td">
                        
                        <textarea  class="custom-css-setting-textbox" name="<?php $metabox->the_name(); ?>"  rows="10" cols="60" <?php if (!$metabox->get_the_value()) echo  'placeholder=" Type your custom css here"' ?> ><?php if ($metabox->get_the_value()) echo " ".$metabox->get_the_value();else {
                         echo " ";
                     } ?></textarea>
                        </td>
                </tr>
           
            </table>
        
           </div>
    </div>
</div>
