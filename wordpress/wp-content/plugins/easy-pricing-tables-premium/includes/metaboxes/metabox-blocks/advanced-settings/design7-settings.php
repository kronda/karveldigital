<div id="design7-advanced-design-settings" >
    <div class="dh_ptp_accordion">
        <h3><?php _e('General Settings', PTP_LOC); ?></h3>
        <div>
            <table>
                <tr>
                    <td class="settings-title"><?php _e('Button Border Radius', PTP_LOC); ?></td>
                    <?php $mb->the_field('design7-rounded-corners'); 
                          $design7_rounded_corner_val = (!is_null($mb->get_the_value()))?$mb->get_the_value():'2px';
                    ?>
                    <td>
                        <select class="form-control" name="<?php $metabox->the_name(); ?>">
                            <option value="0px" <?php
                                if($design7_rounded_corner_val == '0px') {
                                    echo 'selected';
                                }
                            ?> ><?php _e('No Rounded Corners', PTP_LOC); ?></option>
                            <?php
                                for($i=1;$i<=20;++$i) {
                                    if($design7_rounded_corner_val == $i . 'px') {
                                        echo '<option value="' . $i . 'px" selected>' . $i . 'px</option>';
                                    } else {
                                        echo '<option value="' . $i . 'px" >' . $i . 'px</option>';
                                    }
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="settings-title">
                        <?php $mb->the_field('design7-hover-effects'); ?>
                        <label for="design7-hover-effects" style="margin: 0; font-weight: normal;"><?php _e('Enlarge Column on Hover', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="design7-hover-effects" value="1"<?php if ($metabox->get_the_value()) { echo ' checked="checked"'; } ?>/>
                    </td>
                </tr>
                <!--  Automatically match Column Height  -->
                  <tr>
                    <td class="settings-title">
                        <label for="match-column-height-dg7" style="margin: 0; font-weight: normal;"><?php _e('Automatically match Row Height', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <?php $mb->the_field('match-column-height-dg7'); ?>
                        <input type="checkbox" onchange="return consistent_match_column_height(this) " class="tt-match-column-height-checkbox" name="<?php $metabox->the_name(); ?>" id="match-column-height-dg7" value="1" <?php      if (!$meta) { echo 'checked="checked"'; } else  if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>
            </table>
        </div>
        <h3><?php _e('Font Sizes', PTP_LOC); ?></h3>
        <div>
            <table>
                <tr>
                    <td class="settings-title"><?php _e('Plan Name Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('design7-plan-name-font-size'); ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php if(!is_null($mb->get_the_value())) { echo $metabox->the_value(); } else { echo "20"; } ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('design7-plan-name-font-size-type'); ?>
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
                    <td class="settings-title"><?php _e('Featured Plan Name Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('design7-featured-plan-name-font-size'); ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php if(!is_null($mb->get_the_value())) { echo $metabox->the_value(); } else { echo "20"; } ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('design7-featured-plan-name-font-size-type'); ?>
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
                        <?php $mb->the_field('design7-price-font-size'); ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php if(!is_null($mb->get_the_value())) { echo $metabox->the_value(); } else { echo "70"; } ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('design7-price-font-size-type'); ?>
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
                    <td class="settings-title"><?php _e('Featured Price Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('design7-featured-price-font-size'); ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php if(!is_null($mb->get_the_value())) { echo $metabox->the_value(); } else { echo "70"; } ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('design7-featured-price-font-size-type'); ?>
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
                        <?php $mb->the_field('design7-currency-font-size'); ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php if(!is_null($mb->get_the_value())) { echo $metabox->the_value(); } else { echo "20"; } ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('design7-currency-font-size-type'); ?>
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
                    <td class="settings-title"><?php _e('Billing Timeframe Font Size', PTP_LOC); ?></td>
                    <td>
                        <?php $mb->the_field('design7-billing-timeframe-font-size'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():'16'; ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('design7-billing-timeframe-font-size-type'); ?>
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
                        <?php $mb->the_field('design7-bullet-item-font-size'); ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php if(!is_null($mb->get_the_value())) { echo $metabox->the_value(); } else { echo "14"; } ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('design7-bullet-item-font-size-type'); ?>
                        <select  name="<?php $metabox->the_name(); ?>">
                            <option value="em" <?php
                            if(!is_null($mb->get_the_value())) {
                                if($mb->get_the_value() == 'em') {
                                    echo 'selected';
                                }
                            }                            ?> >em</option>
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
                        <?php $mb->the_field('design7-button-font-size'); ?>
                        <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php if(!is_null($mb->get_the_value())) { echo $metabox->the_value(); } else { echo "16"; } ?>"/>
                    </td>
                    <td>
                        <?php $mb->the_field('design7-button-font-size-type'); ?>
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
        <h3><?php _e('Unfeatured Columns Colors', PTP_LOC); ?></h3>
        <div>
            <table>                
                <!-- Headline -->
                <tr class="table-headline">
                    <td><?php _e('Background Colors', PTP_LOC); ?></td>
                </tr>
                
                <tr>
                    <td class="settings-title"><?php _e('Border Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design7-unfeatured-border-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#bbb"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="button-gradient-picker-color" data-color-group="design7-column-background-color" data-default-color="#bbb" data-preview-id="#design7-column-background-color-preview" />
                    </td>
                    
                    <td rowspan="3" class="tt-gradient-picker-color">
                        <div id="design7-column-background-color-preview" class="tt-gradient-picker-color-preview" ></div>  
                    </td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Column Background Color', PTP_LOC); ?></td>
                    
                    <td >
                        <?php $mb->the_field('design7-column-background-color-top'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#3ad2d1"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" id="design7-column-background-color-top" class="button-gradient-picker-color" data-color-group="design7-column-background-color" value="<?php echo $value; ?>"  data-default-color="#3ad2d1"  data-preview-id="#design7-column-background-color-preview" />
                       <br/>
                       <?php $mb->the_field('design7-column-background-color-bottom'); ?>
                       <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#3aa0d1"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" id="design7-column-background-color-bottom" class="button-gradient-picker-color" data-color-group="design7-column-background-color" value="<?php echo $value; ?>"  data-default-color="#3aa0d1" data-preview-id="#design7-column-background-color-preview" />
                    </td>
                </tr>
                
                <!-- Headline -->
                <tr class="table-headline">
                    <td><br/><?php _e('Font Colors', PTP_LOC); ?></td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Title Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design7-title-area-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Pricing Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design7-pricing-area-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Currency Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design7-currency-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#2e80a7"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#2e80a7" />
                    </td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Feature Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design7-featured-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" class="colorpicker-no-palettes" value="<?php echo $value; ?>" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Duration Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design7-duration-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#2e80a7"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" class="colorpicker-no-palettes" value="<?php echo $value; ?>"  data-default-color="#2e80a7" />
                    </td>
                </tr>
                
                <!-- Headline -->
                <tr class="table-headline">
                    <td><br/><?php _e('Button Colors', PTP_LOC); ?></td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Button Color', PTP_LOC); ?></td>
                    <?php
                        $mb->the_field('design7-button-color');
                        $button_color = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#0c1f28";
                    ?>
                    <td>
                        <input type="text" name="<?php $mb->the_name(); ?>" class="button-color" value="<?php echo $button_color; ?>" class="my-color-field form-control" data-default-color="#0c1f28" />
                    </td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Button Hover Color', PTP_LOC); ?></td>
                    <?php
                        $mb->the_field('design7-button-hover-color');
                        $button_hover_color = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#112E3C";
                    ?>
                    <td>
                        <input type="text" name="<?php $mb->the_name(); ?>" class="button-border-color" value="<?php echo $button_hover_color; ?>" class="my-color-field" data-default-color="#112E3C" />
                    </td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Button Font Color', PTP_LOC); ?></td>
                    <?php
                        $mb->the_field('design7-button-font-color');
                        $button_font_color = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff";
                    ?>
                    <td>
                        <input type="text" name="<?php $mb->the_name(); ?>" class="colorpicker-no-palettes" value="<?php echo $button_font_color; ?>" class="my-color-field" data-default-color="#ffffff" />
                    </td>
                </tr>
            </table>
        </div>
        <h3><?php _e('Featured Column Colors', PTP_LOC); ?></h3>
        <div>
            <table>
                <!-- Headline -->
                <tr class="table-headline">
                    <td><?php _e('Background Colors', PTP_LOC); ?></td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Border Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design7-featured-border-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#e97d68"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" data-color-group="design7-column-featured-background-color" value="<?php echo $value; ?>" class="button-gradient-picker-color" data-default-color="#e97d68" data-preview-id="#design7-column-featured-background-color-preview"  />
                    </td>
                    <td rowspan="3" class="tt-gradient-picker-color">
                        <div id="design7-column-featured-background-color-preview" class="tt-gradient-picker-color-preview" ></div> 
                    </td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Column Background Color', PTP_LOC); ?></td>
                    
                    <td class="tt-gradient-picker-color">
                        <?php $mb->the_field('design7-column-featured-background-color-top'); ?>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#e99b68"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" id="design7-column-featured-background-color-top" class="button-gradient-picker-color" data-color-group="design7-column-featured-background-color" value="<?php echo $value; ?>"  data-default-color="#e99b68"  data-preview-id="#design7-column-featured-background-color-preview" />
                       <br/>
                       <?php $mb->the_field('design7-column-featured-background-color-bottom'); ?>
                       <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#e97d68"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" id="design7-column-featured-background-color-bottom" class="button-gradient-picker-color" data-color-group="design7-column-featured-background-color" value="<?php echo $value; ?>"  data-default-color="#e97b68" data-preview-id="#design7-column-featured-background-color-preview" />
                    </td>
                </tr>
                <!-- Headline -->
                <tr class="table-headline">
                    <td><br/><?php _e('Font Colors', PTP_LOC); ?></td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Title Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design7-featured-title-area-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Pricing Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design7-featured-pricing-area-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Currency Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design7-featured-currency-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ba6453"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php echo $value; ?>" class="colorpicker-no-palettes" data-default-color="#ba6453" />
                    </td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Feature Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design7-featured-feature-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" class="colorpicker-no-palettes" value="<?php echo $value; ?>" class="my-color-field" data-default-color="#ffffff" />
                    </td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Duration Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design7-featured-duration-font-color'); ?>
                    <td>
                        <?php $value = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ba6453"; ?>
                        <input type="text" name="<?php $mb->the_name(); ?>" class="colorpicker-no-palettes" value="<?php echo $value; ?>" class="my-color-field" data-default-color="#ba6453" />
                    </td>
                </tr>
                
                <!-- Headline -->
                <tr class="table-headline">
                    <td><br/><?php _e('Button Colors', PTP_LOC); ?></td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Button Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design7-featured-button-color'); ?>
                    <td>
                        <?php $featured_button_color = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#0c1f28";?>
                        <input type="text" name="<?php $mb->the_name(); ?>" class="button-color" value="<?php echo $featured_button_color; ?>" class="my-color-field form-control" data-default-color="#0c1f28" />
                    </td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Button Hover Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design7-featured-button-hover-color'); ?>
                    <td>
                        <?php $featured_button_hover_color = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#112E3C";?>
                        <input type="text" name="<?php $mb->the_name(); ?>" class="button-border-color" value="<?php echo $featured_button_hover_color; ?>" class="my-color-field" data-default-color="#112E3C" />
                    </td>
                </tr>
                <tr>
                    <td class="settings-title"><?php _e('Button Font Color', PTP_LOC); ?></td>
                    <?php $mb->the_field('design7-featured-button-font-color'); ?>
                    <td>
                        <?php $featured_button_font_color = (!is_null($mb->get_the_value()))?$mb->get_the_value():"#ffffff";?>
                        <input type="text" name="<?php $mb->the_name(); ?>" class="colorpicker-no-palettes" value="<?php echo $featured_button_font_color; ?>" class="my-color-field" data-default-color="#ffffff" />
                    </td>
                </tr>
            </table>
        </div>
       
        <h3><?php _e('Advanced Settings', PTP_LOC); ?></h3>
        <div>
            <table>
                <tr>
                    <?php $mb->the_field('design7-hide-empty-rows'); ?>
                    <td class="settings-title">
                        <label for="design5-hide-empty-rows" style="margin: 0; font-weight: normal;"><?php _e('Hide Empty Rows', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="design5-hide-empty-rows" value="1" <?php if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>
                <tr>
                    <?php $mb->the_field('design7-hide-call-to-action-buttons'); ?>
                    <td class="settings-title">
                        <label for="design7-call-action-buttons" style="margin: 0; font-weight: normal;"><?php _e('Hide Call To Action Buttons', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="design7-call-action-buttons" value="1"<?php if ($metabox->get_the_value()) echo ' checked="checked"'; ?>/>
                    </td>
                </tr>
                <tr>
                    <?php $mb->the_field('design7-open-link-in-new-tab'); ?>
                    <td class="settings-title">
                        <label for="design7-open-link-in-new-tab" style="margin: 0; font-weight: normal;"><?php _e('Open Link in New Tab', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="design7-open-link-in-new-tab" value="1" <?php if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>               
            </table>
        </div>
             <!-- ept-custom-css-setting -->
        <h3><?php _e('Custom CSS', PTP_LOC); ?></h3>
        <div >
 
            <table>
                <tr>
                    <?php $mb->the_field('ept-custom-css-setting-dg7'); ?>
                    <td class="settings-title">
                        <label for="custom-css-setting" style="margin: 0; font-weight: bold;"><?php _e('Custom Pricing Table CSS', PTP_LOC); ?></label>
                    </td>
                    <td class="custom-css-setting-td">
                        
                        <textarea class="custom-css-setting-textbox"  name="<?php $metabox->the_name(); ?>"  rows="10" cols="60" <?php if (!$metabox->get_the_value()) echo  'placeholder="Type your custom css here"' ?> ><?php if ($metabox->get_the_value()) echo " ".$metabox->get_the_value();else {
                         echo " ";
                     } ?></textarea>
                        </td>
                </tr>
           
            </table>
        
           </div>
    </div>
</div>
