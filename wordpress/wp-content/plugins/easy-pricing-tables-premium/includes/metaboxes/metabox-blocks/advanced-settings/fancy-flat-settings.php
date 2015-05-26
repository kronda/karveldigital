       
                  

<div id="fancy-flat-advanced-design-settings">
    <div class="dh_ptp_accordion">
        <h3><?php _e('General Settings', PTP_LOC); ?></h3>
        <div>
            <table>
                <tr>
                    <?php $mb->the_field('fancy-flat-expand-featured-item'); ?>
                    <td class="settings-title">
                        <label for="design2-expand-featured-item" style="margin: 0; font-weight: normal;"><?php _e('Expand Featured Column', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="design2-expand-featured-item" value="1"<?php if ($metabox->get_the_value() || !is_array($metabox->meta)) echo ' checked="checked"'; ?>/>
                    </td>
                </tr>
                <tr>
                    <?php $mb->the_field('fancy-flat-expand-item-when-hovering'); ?>
                    <td class="settings-title">
                        <label for="design2-expand-item-when-hovering" style="margin: 0; font-weight: normal;"><?php _e('Expand Column on Hover', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="design2-expand-item-when-hovering" value="1"<?php if ($metabox->get_the_value()) echo ' checked="checked"'; ?>/>
                    </td>
                </tr>
                <tr>
                    <?php $mb->the_field('fancy-flat-display-most-popular-label'); ?>
                    <?php $most_popular_label_display = $metabox->get_the_value()?'':'display:none;'; ?>
                    <td class="settings-title">
                        <label for="design2-display-most-popular-label" style="margin: 0; font-weight: normal;"><?php _e('Display Featured Label', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="design2-display-most-popular-label" class="design2-featured-label" value="1"<?php if ($metabox->get_the_value() || !is_array($metabox->meta)) echo ' checked="checked"'; ?>/>
                    </td>
                </tr>
                <tr class="design2-featured-label-text-item" style="<?php echo $most_popular_label_display; ?>">
                    <td class="settings-title"><?php _e('Featured Label Text', PTP_LOC); ?></td>
                    <?php $mb->the_field('fancy-flat-most-popular-label-text'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():__('Most Popular', PTP_LOC); ?>
                        <input type="text" name="<?php $metabox->the_name(); ?>" id="<?php $metabox->the_name(); ?>" class="design2-featured-label-text" value="<?php echo $value; ?>" />
                    </td>
                </tr>
                <tr>
                    <?php $mb->the_field('fancy-flat-display-featured-ribbon'); ?>
                    <?php $featured_ribbon_display = $metabox->get_the_value()?'':'display:none;'; ?>
                    <td class="settings-title">
                        <label for="design2-display-featured-ribbon" style="margin: 0; font-weight: normal;"><?php _e('Display Featured Ribbon', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="design2-display-featured-ribbon" class="design2-featured-ribbon" value="1"<?php if ($metabox->get_the_value()) echo ' checked="checked"'; ?>/>
                    </td>
                </tr>
                <tr class="design2-featured-ribbon-text-item" style="<?php echo $featured_ribbon_display; ?>">
                    <td class="settings-title"><?php _e('Featured Ribbon Text', PTP_LOC); ?></td>
                    <?php $mb->the_field('fancy-flat-featured-ribbon-text'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():__('Featured', PTP_LOC); ?>
                        <input type="text" name="<?php $metabox->the_name(); ?>" id="<?php $metabox->the_name(); ?>" class="design2-featured-ribbon-text" value="<?php echo $value; ?>"/>
                    </td>
                </tr>
                   <!--  Automatically match Column Height  -->
                  <tr>
                     <?php $mb->the_field('match-column-height-dg2'); ?>
                    <td class="settings-title">
                        <label for="match-column-height-dg2" style="margin: 0; font-weight: normal;"><?php _e('Automatically match Row Height', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <?php $mb->the_field('match-column-height-dg2'); ?>
                        <input type="checkbox" onchange="return consistent_match_column_height(this) " class="tt-match-column-height-checkbox" name="<?php $metabox->the_name(); ?>" id="match-column-height-dg3" value="1" <?php      if (!$meta) { echo 'checked="checked"'; } else  if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>
            </table>
        </div>
        <h3><?php _e('Font Sizes', PTP_LOC); ?></h3>
        <div>
            <table>
                <tr class="design2-featured-label-text-item" style="<?php echo $most_popular_label_display; ?>">
                    <td class="settings-title"><?php _e('Featured Label Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('fancy-flat-most-popular-font-size'); ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo (!is_null($mb->get_the_value()))?$metabox->the_value():"0.9"; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('fancy-flat-most-popular-font-size-type'); ?>
                        <select  name="<?php $metabox->the_name(); ?>">
                            <option value="em" <?php
                                if( ! $mb->get_the_value() || 'em' == $mb->get_the_value() ) {
                                    echo 'selected';
                                }
                            ?> >em</option>
                            <option value="px" <?php
                                if( 'px' == $mb->get_the_value() ) {
                                    echo 'selected';
                                }
                            ?>>px</option>
                        </select>
                    </td>
                </tr>
                <tr class="design2-featured-ribbon-text-item" style="<?php echo $featured_ribbon_display; ?>">
                    <td class="settings-title"><?php _e('Featured Ribbon Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('design2-featured-ribbon-font-size'); ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo (!is_null($mb->get_the_value()))?$metabox->the_value():"17"; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('design2-featured-ribbon-font-size-type'); ?>
                        <select  name="<?php $metabox->the_name(); ?>">
                            <option value="em" <?php
                                if( 'em' == $mb->get_the_value() ) {
                                    echo 'selected';
                                }
                            ?> >em</option>
                            <option value="px" <?php
                                if( ! $mb->get_the_value() || 'px' == $mb->get_the_value() ) {
                                    echo 'selected';
                                }
                            ?>>px</option>
                        </select>
                    </td>
                </tr>    
                <tr>
                    <td class="settings-title"><?php _e('Plan Name Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('fancy-flat-plan-name-font-size'); ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo (!is_null($mb->get_the_value()))?$metabox->the_value():"1"; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('fancy-flat-plan-name-font-size-type'); ?>
                        <select  name="<?php $metabox->the_name(); ?>">
                            <option value="em" <?php
                                if(!is_null($mb->get_the_value())) {
                                    if($mb->get_the_value() == 'em') {
                                        echo 'selected';
                                    }
                                } else {
                                    echo 'selected';
                                }
                            ?> >em</option>
                            <option value="px" <?php
                                if(!is_null($mb->get_the_value())) {
                                    if($mb->get_the_value() == 'px') {
                                        echo 'selected';
                                    }
                                }
                            ?>>px</option>
                        </select>
                    </td>
                </tr> 
                <tr>
                    <td class="settings-title"><?php _e('Price Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('fancy-flat-price-font-size'); ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo (!is_null($mb->get_the_value()))?$metabox->the_value():"48"; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('fancy-flat-price-font-size-type'); ?>
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
                        <?php $mb->the_field('fancy-flat-bullet-item-font-size'); ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo (!is_null($mb->get_the_value()))?$metabox->the_value():"0.875"; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('fancy-flat-bullet-item-font-size-type'); ?>
                        <select  name="<?php $metabox->the_name(); ?>">
                            <option value="em" <?php
                                if(!is_null($mb->get_the_value())) {
                                    if($mb->get_the_value() == 'em') {
                                        echo 'selected';
                                    }
                                } else {
                                    echo 'selected';
                                }
                            ?> >em</option>
                            <option value="px" <?php
                                if(!is_null($mb->get_the_value())) {
                                    if($mb->get_the_value() == 'px') {
                                        echo 'selected';
                                    }
                                }
                            ?>>px</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Button Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('fancy-flat-button-font-size'); ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo (!is_null($mb->get_the_value()))?$metabox->the_value():"1"; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('fancy-flat-button-font-size-type'); ?>
                        <select  name="<?php $metabox->the_name(); ?>">
                            <option value="em" <?php
                                if(!is_null($mb->get_the_value())) {
                                    if($mb->get_the_value() == 'em') {
                                        echo 'selected';
                                    }
                                } else {
                                    echo 'selected';
                                }
                            ?> >em</option>
                            <option value="px" <?php
                                if(!is_null($mb->get_the_value())) {
                                    if($mb->get_the_value() == 'px') {
                                        echo 'selected';
                                    }
                                }
                            ?>>px</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        <h3><?php _e('Colors', PTP_LOC); ?></h3>
        <div>
            <table id="tt_ptp_easy-design-color-table-design2">
                <tr>
                    <td class="settings-title"><?php _e('How would you like to choose your colors?', PTP_LOC); ?></td>
                    <?php $mb->the_field('design2-choose-your-colors'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():1; ?>
                        <?php $design2_choose_your_colors = $value; ?>
                        <label style="margin: 0; font-weight: normal;"><input type="radio" name="<?php $mb->the_name(); ?>" class="design2-choose-your-colors" value="1" <?php echo ($value == 1)?'checked':''; ?>/><?php _e('Use a pre-built color scheme', PTP_LOC); ?></label>
                        <label style="margin: 4px 0 5px 0; font-weight: normal;"><input type="radio" name="<?php $mb->the_name(); ?>" class="design2-choose-your-colors" value="2" <?php echo ($value == 2)?'checked':''; ?>/><?php _e('Build your own color scheme', PTP_LOC); ?></label>
                    </td>
                </tr>
                
                <!-- Custom themes -->
                <tr class="table-headline design2-color-scheme-2 <?php echo ($design2_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td><br/><?php _e('Unfeatured Columns', PTP_LOC); ?></td>
                </tr>
                
                <tr class="design2-color-scheme-2 <?php echo ($design2_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Plan Title Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design2-unfeatured-plan-title-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#2a3856"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#2a3856" />
                    </td>
                </tr>
                <tr class="design2-color-scheme-2 <?php echo ($design2_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Plan Title Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design2-unfeatured-plan-title-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#6b89c9"; ?>
                       
                               <input type="text" name="<?php $mb->the_name(); ?>" id="design2-unfeatured-plan-title-background-color" value="<?php echo $value; ?>" class="colorpicker-no-palettes"  data-default-color="#6b89c9" />
                   
                    
                    </td>
                </tr>
                <tr class="design2-color-scheme-2 <?php echo ($design2_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Plan Title Border Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design2-unfeatured-plan-border-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#898f97"; ?>
                        <input type="text" id="tt-design2-unfeatured-plan-border-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#898f97" />
                    </td>
                </tr>
                <tr class="design2-color-scheme-2 <?php echo ($design2_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Price Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design2-unfeatured-plan-price-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="design2-color-scheme-2 <?php echo ($design2_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Button Hover Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design2-unfeatured-button-hover-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="design2-color-scheme-2 <?php echo ($design2_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Button Hover Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design2-unfeatured-button-hover-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#4c5ab2"; ?>
                        <input type="text" id="tt-design2-unfeatured-button-hover-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#4c5ab2" />
                    </td>
                </tr>
        
                <tr class="table-headline design2-color-scheme-2 <?php echo ($design2_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td><br/><?php _e('Featured Columns', PTP_LOC); ?></td>
                </tr>
                
                <tr class="design2-color-scheme-2 <?php echo ($design2_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Plan Title Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design2-featured-plan-title-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#57120c"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#57120c" />
                    </td>
                </tr>
                <tr class="design2-color-scheme-2 <?php echo ($design2_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Plan Title Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design2-featured-plan-title-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ef5f54"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" id="design2-featured-plan-title-background-color-value" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ef5f54" />
                    </td>
                </tr>
                <tr class="design2-color-scheme-2 <?php echo ($design2_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Plan Title Border Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design2-featured-plan-border-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#898f97"; ?>
                        <input type="text" id="tt-design2-featured-plan-border-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#898f97" />
                    </td>
                </tr>
                <tr class="design2-color-scheme-2 <?php echo ($design2_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Price Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design2-featured-plan-price-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="design2-color-scheme-2 <?php echo ($design2_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Button Hover Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design2-featured-button-hover-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="design2-color-scheme-2 <?php echo ($design2_choose_your_colors != 2) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Button Hover Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design2-featured-button-hover-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#d54b23"; ?>
                        <input type="text" id="tt-design2-featured-button-hover-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#d54b23" />
                    </td>
                </tr>
                <tr class="design2-featured-label-text-item design2-color-scheme-2 <?php echo ($design2_choose_your_colors != 2) ? 'hide' : ''; ?>" style="<?php echo $most_popular_label_display; ?>">
                    <td class="settings-title"><?php _e('Featured Label Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design2-featured-most-popular-label-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#f1b3ae"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" id="design2-featured-most-popular-label-background-color" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#f1b3ae" />
                    </td>
                </tr>
                <tr class="design2-featured-label-text-item design2-color-scheme-2 <?php echo ($design2_choose_your_colors != 2) ? 'hide' : ''; ?>" style="<?php echo $most_popular_label_display; ?>">
                    <td class="settings-title"><?php _e('Featured Label Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design2-featured-most-popular-label-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#67332f"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#67332f" />
                    </td>
                </tr>
                <tr class="design2-featured-ribbon-text-item design2-color-scheme-2 <?php echo ($design2_choose_your_colors != 2) ? 'hide' : ''; ?>" style="<?php echo $featured_ribbon_display; ?>">
                    <td class="settings-title"><?php _e('Featured Ribbon Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design2-featured-ribbon-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#a64137"; ?>
                        <input type="text" id="tt-design2-featured-ribbon-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#a64137" />
                    </td>
                </tr>
                
                <!-- Preset themes -->
                <tr class="design2-color-scheme-1 <?php echo ($design2_choose_your_colors != 1) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Column Color Scheme', PTP_LOC); ?></td>
                    <?php $mb->the_field('fancy-flat-column-color-scheme'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()) && substr($mb->get_the_value(), 0, 1) == '#')?$mb->get_the_value():"#6b89c9"; ?>
                        <div class="dh_ptp_easy_palette_container">
                            <a tabindex="0" class="dh_ptp_palette_result fancy-flat-column-color-scheme-value" title="<?php _e('Select Color', PTP_LOC); ?>" data-current="<?php _e('Current Color', PTP_LOC); ?>" style="background-color: <?php echo $value; ?>;"></a>
                            <span class="dh_ptp_palette_input_wrap">
                                <input type="text" name="<?php $mb->the_name(); ?>" id="fancy-flat-column-color-scheme" value="<?php echo $value; ?>" class="color-palette ptp-fancy-column-color-scheme"/>
                            </span>
                        </div>
                    </td>
                </tr>
                <tr class="design2-color-scheme-1 <?php echo ($design2_choose_your_colors != 1) ? 'hide' : ''; ?>">
                    <td class="settings-title"><?php _e('Featured Column Color Scheme', PTP_LOC); ?></td>
                    <?php $mb->the_field('fancy-flat-featured-column-color-scheme'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()) && substr($mb->get_the_value(), 0, 1) == '#')?$mb->get_the_value():"#ef5f54"; ?>
                        <div class="dh_ptp_easy_palette_container">
                            <a tabindex="0" class="dh_ptp_palette_result fancy-flat-featured-column-color-scheme-value" title="Select Color" data-current="<?php _e('Current Color', PTP_LOC); ?>" style="background-color: <?php echo $value; ?>;"></a>
                            <span class="dh_ptp_palette_input_wrap">
                                <input type="text" name="<?php $mb->the_name(); ?>"  value="<?php echo $value; ?>" class="color-palette ptp-fancy-column-color-scheme"/>
                            </span>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <h3>Advanced Settings</h3>
        <div>
            <table>
                <tr>
                    <?php $mb->the_field('design2-hide-empty-rows'); ?>
                    <td class="settings-title">
                        <label for="design2-hide-empty-rows" style="margin: 0; font-weight: normal;"><?php _e('Hide Empty Rows', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="design2-hide-empty-rows" value="1" <?php if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>
                <tr>
                    <?php $mb->the_field('fancy-flat-hide-call-to-action-buttons'); ?>
                    <td class="settings-title">
                        <label for="design2-hide-call-to-action-buttons" style="margin: 0; font-weight: normal;"><?php _e('Hide Call To Action Buttons', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="design2-hide-call-to-action-buttons" value="1"<?php if ($metabox->get_the_value()) echo ' checked="checked"'; ?>/>
                    </td>
                </tr>
                <tr>
                    <?php $mb->the_field('design2-open-link-in-new-tab'); ?>
                    <td class="settings-title">
                        <label for="design2-open-link-in-new-tab" style="margin: 0; font-weight: normal;"><?php _e('Open Link in New Tab', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="design2-open-link-in-new-tab" value="1" <?php if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>
                <tr>
                    <?php $mb->the_field('fancy-flat-no-spacing-between-columns'); ?>
                    <td class="settings-title">
                        <label for="design2-no-spacing-between-columns" style="margin: 0; font-weight: normal;"><?php _e('No Spacing Between Columns', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="design2-no-spacing-between-columns" value="1"<?php if ($metabox->get_the_value()) echo ' checked="checked"'; ?>/> 
                    </td>
                </tr>
            </table>
        </div>
             <!-- ept-custom-css-setting -->
        <h3><?php _e('Custom CSS', PTP_LOC); ?></h3>
        <div >
 
            <table>
                <tr>
                    <?php $mb->the_field('ept-custom-css-setting-dg2'); ?>
                    <td class="settings-title">
                        <label for="custom-css-setting" style="margin: 0; font-weight: bold;"><?php _e('Custom Pricing Table CSS', PTP_LOC); ?></label>
                    </td>
                    <td class="custom-css-setting-td">
                        
                        <textarea class="custom-css-setting-textbox"  name="<?php $metabox->the_name(); ?>"  rows="10" cols="60" <?php if (!$metabox->get_the_value()) echo  'placeholder=" Type your custom css here"' ?> ><?php if ($metabox->get_the_value()) echo " ".$metabox->get_the_value();else {
                         echo " ";
                     } ?></textarea>
                        </td>
                </tr>
           
            </table>
        
           </div>
    </div>
    
    <script type="text/javascript">
       jQuery(document).ready(function($) {            
            // Most Popular Text
            if ( 1 == $( '.design2-featured-label:checked').length ) {
                $('.design2-featured-label-text-item').show();
                tt_check_for_show_color_option_for_own_design2_color() ;
            }
            
            $('.design2-featured-label').on('change', function(){
                var color_settings = $('.design2-choose-your-colors:checked').val();
                
                if ($(this).prop('checked')) {
                    
                    $('.design2-featured-label-text-item').show();
                    tt_check_for_show_color_option_for_own_design2_color() ;
                } else {
                    $('.design2-featured-label-text-item').hide();
                }
            });
            
            // Featured Ribbon Text
            
             if ( 1 == $( '.design2-featured-ribbon:checked').length ) {
                   $('.design2-featured-ribbon-text-item').each(function() {
                        $(this).show();
                        tt_check_for_show_color_option_for_own_design2_color() ;
                    });
            }
            
            $('.design2-featured-ribbon').on('change', function(){
                if ($(this).prop('checked')) {
                    $('.design2-featured-ribbon-text-item').each(function() {
                        $(this).show();
                        tt_check_for_show_color_option_for_own_design2_color() ;
                    });
                } else {
                    $('.design2-featured-ribbon-text-item').each(function() {
                        $(this).hide();
                    });
                }
            });
            
            
            
        });
        
       
        
    </script>
</div>