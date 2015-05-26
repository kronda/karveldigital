<div id="comparison3-advanced-design-settings">
    <div class="dh_ptp_accordion">
        <!-- General Settings -->
        <h3><?php _e('General Settings', PTP_LOC); ?></h3>
        <div>
            <table>
                <tr>
                    <?php $mb->the_field('comparison3-shake-buttons-on-hover'); ?>
                    <td class="settings-title">
                        <label for="comparison3-shake-buttons-on-hover" style="margin: 0; font-weight: normal;"><?php _e('Shake Button on Hover', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="comparison3-shake-buttons-on-hover" value="1" <?php if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>
                   <!--  Automatically match Column Height  -->
                  <tr>
                     <?php $mb->the_field('match-column-height-cp3'); ?>
                    <td class="settings-title">
                        <label for="match-column-height-cp3" style="margin: 0; font-weight: normal;"><?php _e('Automatically match Row Height', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <?php $mb->the_field('match-column-height-cp3'); ?>
                        <input type="checkbox" onchange="return consistent_match_column_height(this) " class="tt-match-column-height-checkbox" name="<?php $metabox->the_name(); ?>" id="match-column-height-cp3" value="1" <?php      if (!$meta) { echo 'checked="checked"'; } else  if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Font Sizes -->
        <h3><?php _e('Font Sizes', PTP_LOC); ?></h3>
        <div>
            <table>
                <tr class="table-headline comparison3-color-scheme-2">
                    <td><br/><?php _e('General', PTP_LOC); ?></td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Bullet Item Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('comparison3-bullet-item-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():'20'; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison3-bullet-item-font-size-type'); ?>
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
                        <?php $mb->the_field('comparison3-button-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():'20'; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison3-button-font-size-type'); ?>
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
                        <?php $mb->the_field('comparison3-raw-description-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():'20'; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison3-raw-description-font-size-type'); ?>
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
                <!-- Unfeatured Columns -->
                <tr class="table-headline comparison3-color-scheme-2">
                    <td><br/><?php _e('Unfeatured Columns', PTP_LOC); ?></td>
                </tr>               
                <tr>
                    <td class="settings-title"><?php _e('Plan Name Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('comparison3-plan-name-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():"23"; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison3-plan-name-font-size-type'); ?>
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
                        <?php $mb->the_field('comparison3-price-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():"40"; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison3-price-font-size-type'); ?>
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
                        <?php $mb->the_field('comparison3-currency-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():"40"; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison3-currency-font-size-type'); ?>
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
                        <?php $mb->the_field('comparison3-billing-timeframe-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():'16'; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison3-billing-timeframe-font-size-type'); ?>
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
                <!-- Featured Columns -->
                 <tr class="table-headline comparison3-color-scheme-2">
                    <td><br/><?php _e('Featured Columns', PTP_LOC); ?></td>
                </tr>
                 <tr>
                    <td class="settings-title"><?php _e('Featured Label Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('comparison3-most-popular-font-size'); ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php if(!is_null($mb->get_the_value())) echo $metabox->the_value(); else echo "18"; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison3-most-popular-font-size-type'); ?>
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
                        <?php $mb->the_field('comparison3-featured-plan-name-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():"24"; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison3-featured-plan-name-font-size-type'); ?>
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
                        <?php $mb->the_field('comparison3-featured-price-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():"48"; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison3-featured-price-font-size-type'); ?>
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
                        <?php $mb->the_field('comparison3-featured-currency-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():"48"; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison3-featured-currency-font-size-type'); ?>
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
                        <?php $mb->the_field('comparison3-featured-billing-timeframe-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():'22'; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('comparison3-featured-billing-timeframe-font-size-type'); ?>
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
                                
                 <?php $comparison3_choose_your_colors = (!is_null($mb->get_the_value()))?$metabox->get_the_value():2; ?>
                <!-- description column -->
                <tr class="table-super-headline comparison3-color-scheme-2 ">
                    <td><br/><?php _e('Description Column', PTP_LOC); ?></td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Uneven Row Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-description-light-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" id="tt-comparison3-description-light-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Even Row Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-description-dark-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#e8f4f7"; ?>
                        <input type="text" id="tt-comparison3-description-dark-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#e8f4f7" />
                    </td>
                </tr>
                
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Border Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-description-border-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#dbdbdb"; ?>
                        <input type="text" id="tt-comparison3-description-border-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#dbdbdb" />
                    </td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Description Text Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-description-text-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#333333"; ?>
                        <input type="text" id="tt-comparison3-description-text-font-color" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#333333" />
                    </td>
                </tr>
                
               
                
                
                <!-- unfeatured -->
                <tr class="table-super-headline comparison3-color-scheme-2 ">
                    <td><br/><?php _e('Unfeatured Columns', PTP_LOC); ?></td>
                </tr>
                <tr class="table-headline comparison3-color-scheme-2 ">
                    <td><br/><?php _e('Header', PTP_LOC); ?></td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-unfeatured-plan-title-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#333333"; ?>
                        <input type="text" id="tt-comparison3-unfeatured-plan-title-font-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#333333" />
                    </td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Plan Title Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-unfeatured-plan-title-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" id="comparison3-unfeatured-plan-title-background-color-value" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>                
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Column Border Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-unfeatured-column-border-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#DBDBDB"; ?>
                        <input type="text" id="tt-comparison3-unfeatured-column-border-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#DBDBDB" />
                    </td>
                </tr>
                
                <!-- unfeature row color -->
                <tr class="table-headline comparison3-color-scheme-2 ">
                    <td><br/><?php _e('Row', PTP_LOC); ?></td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Row Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-unfeatured-row-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#333333"; ?>
                        <input type="text" id="tt-comparison3-unfeatured-row-font-color" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#333333" />
                    </td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Uneven Row Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-column-light-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" id="tt-comparison3-column-light-color" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Even Row Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-column-dark-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#e8f4f7"; ?>
                        <input type="text" id="tt-comparison3-column-dark-color" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#e8f4f7" />
                    </td>
                </tr>

                 <!-- Unfeatured buttons -->
                <tr class="table-headline comparison3-color-scheme-2 ">
                    <td><br/><?php _e('Button', PTP_LOC); ?></td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Button Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-button-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" id="tt-comparison3-button-font-color" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Button Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-button-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#3498DB"; ?>
                        <input type="text" id="tt-comparison3-button-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#3498DB" />
                    </td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Button Hover Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-button-hover-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" id="tt-comparison3-button-hover-font-color" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Button Hover Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-button-hover-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#2980B9"; ?>
                        <input type="text" id="tt-comparison3-button-hover-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#2980B9" />
                    </td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Button Border Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-button-boder-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#2980B9"; ?>
                        <input type="text" id="tt-comparison3-button-boder-color" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#2980B9" />
                    </td>
                </tr>
                
                
                <!-- featured -->
                <tr class="table-super-headline comparison3-color-scheme-2 ">
                    <td><br/><?php _e('Featured Columns', PTP_LOC); ?></td>
                </tr>
                <tr class="table-headline comparison3-color-scheme-2 ">
                    <td><br/><?php _e('Header', PTP_LOC); ?></td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-featured-plan-title-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" id="tt-comparison3-featured-plan-title-font-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Plan Title Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-featured-plan-title-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#34495e"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" id="comparison3-featured-plan-title-background-color-value" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#34495e" />
                    </td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Column Border Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-featured-column-border-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#263545"; ?>
                        <input type="text" id="tt-comparison3-featured-column-border-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#263545" />
                    </td>
                </tr>
                <!-- feature row color -->
                <tr class="table-headline comparison3-color-scheme-2 ">
                    <td><br/><?php _e('Row', PTP_LOC); ?></td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Row Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-featured-row-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" id="tt-comparison3-featured-row-font-color"  name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Uneven Row Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-featured-column-light-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#34495E"; ?>
                        <input type="text" id="tt-comparison3-featured-column-light-color" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#34495E" />
                    </td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Even Row Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-featured-column-dark-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#2D3F51"; ?>
                        <input type="text" id="tt-comparison3-featured-column-dark-color" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#2D3F51" />
                    </td>
                </tr>
                
                 <!-- Featured buttons -->
                <tr class="table-headline comparison3-color-scheme-2 ">
                    <td><br/><?php _e('Button', PTP_LOC); ?></td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Button Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-featured-button-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" id="tt-comparison3-featured-button-font-color" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Button Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-featured-button-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#E74C3C"; ?>
                        <input type="text" id="tt-comparison3-featured-button-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#E74C3C" />
                    </td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Button Hover Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-featured-button-hover-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" id="tt-comparison3-featured-button-hover-font-color" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Button Hover Background Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-featured-button-hover-background-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#c0392b"; ?>
                        <input type="text" id="tt-comparison3-featured-button-hover-background-color-value" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#c0392b" />
                    </td>
                </tr>
                <tr class="comparison3-color-scheme-2 ">
                    <td class="settings-title"><?php _e('Button Border Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('comparison3-featured-button-boder-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#D21A09"; ?>
                        <input type="text" id="tt-comparison3-featured-button-boder-color" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#D21A09" />
                    </td>
                </tr>
                
            </table>
        </div>
        
        <!-- Advanced Settings -->
        <h3><?php _e('Advanced Settings', PTP_LOC); ?></h3>
        <div>
            <table>
                <tr>
                    <?php $mb->the_field('comparison3-hide-empty-rows'); ?>
                    <td class="settings-title">
                        <label for="comparison3-hide-empty-rows" style="margin: 0; font-weight: normal;"><?php _e('Hide Empty Rows', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="comparison3-hide-empty-rows" value="1" <?php if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>
                <tr>
                    <?php $mb->the_field('comparison3-hide-call-to-action-buttons'); ?>
                    <td class="settings-title">
                        <label for="comparison3-hide-call-to-action-buttons" style="margin: 0; font-weight: normal;"><?php _e('Hide Call To Action Buttons', PTP_LOC); ?></label>
                    </td>
                    <td>  
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="comparison3-hide-call-to-action-buttons" value="1"<?php if ($metabox->get_the_value()) echo ' checked="checked"'; ?>/>
                    </td>
                </tr>
                <tr>
                    <?php $mb->the_field('comparison3-open-link-in-new-tab'); ?>
                    <td class="settings-title">
                        <label for="comparison3-open-link-in-new-tab" style="margin: 0; font-weight: normal;"><?php _e('Open Links in New Tab', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="comparison3-open-link-in-new-tab" value="1" <?php if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>
            </table>
        </div>
         <!-- ept-custom-css-setting -->
         <h3   ><?php _e('Custom CSS', PTP_LOC); ?></h3>
         <div class="custom-css-setting-div" >
 
            <table>
                <tr>
                    <?php $mb->the_field('ept-custom-css-setting-cp3'); ?>
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
