<div id="design4-advanced-design-settings">
    <table>
        <tr class="table-headline"><td><br/><?php _e('Design', PTP_LOC); ?></td></tr>
        <tr>
            <td class="settings-title"><?php _e('Plan Name Font Size', PTP_LOC); ?></td>
            <td>
                <?php $mb->the_field('design4-plan-name-font-size'); ?>
                <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():"25"; ?>
                <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
            </td>
            <td>
                <?php $mb->the_field('design4-plan-name-font-size-type'); ?>
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
                <?php $mb->the_field('design4-price-font-size'); ?>
                <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():"90"; ?>
                <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
            </td>
            <td>
                <?php $mb->the_field('design4-price-font-size-type'); ?>
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
                <?php $mb->the_field('design4-currency-font-size'); ?>
                <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():"40"; ?>
                <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
            </td>
            <td>
                <?php $mb->the_field('design4-currency-font-size-type'); ?>
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
                <?php $mb->the_field('design4-bullet-item-font-size'); ?>
                <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():'16'; ?>
                <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
            </td>
            <td>
                <?php $mb->the_field('design4-bullet-item-font-size-type'); ?>
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
            <td class="settings-title"><?php _e('Optional Description Font Size', PTP_LOC); ?></td>
            <td>
                <?php $mb->the_field('design4-optional-description-font-size'); ?>
                <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():'14'; ?>
                <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
            </td>
            <td>
                <?php $mb->the_field('design4-optional-description-font-size-type'); ?>
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
            <td class="settings-title"><?php _e('Margin Between Optional Description and Price', PTP_LOC); ?></td>
            <td>
                <?php $mb->the_field('design4-margin-between-description-price-font-size'); ?>
                <?php $value = (!is_null($mb->get_the_value()))?$metabox->get_the_value():'14'; ?>
                <input class="form-control float-input" type="text" name="<?php $metabox->the_name(); ?>" value="<?php echo $value; ?>"/>
            </td>
            <td>px</td>
        </tr>
        <tr>
            <?php $mb->the_field('design4-open-link-in-new-tab'); ?>
            <td class="settings-title">
                <label for="design4-open-link-in-new-tab" style="margin: 0; font-weight: normal;"><?php _e('Open Links in New Tab', PTP_LOC); ?></label>
            </td>
            <td>
                <input type="checkbox" name="<?php $metabox->the_name(); ?>" id="design4-open-link-in-new-tab" value="1" <?php if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
            </td>
        </tr>
        
           <!--  Automatically match Column Height  -->
           <!--       <tr>
                     <?php //$mb->the_field('match-column-height-dg4'); ?>
                    <td class="settings-title">
                        <label for="match-column-height-dg4" style="margin: 0; font-weight: normal;"><?php //_e('Automatically match Column Height', PTP_LOC); ?></label>
                    </td>
                    <td>
                        <?php //$mb->the_field('match-column-height-dg4'); ?>
                        <input type="checkbox" name="<?php //$metabox->the_name(); ?>" id="match-column-height-dg4" value="1" <?php     // if (!$meta) { echo 'checked="checked"'; } else  if ($metabox->get_the_value()) echo 'checked="checked"'; ?>/>
                    </td>
                </tr>
        -->
        <tr class="table-headline design4-rows"><td><br/><?php _e('Column Colors', PTP_LOC); ?></td></tr>
    </table>
         <!-- ept-custom-css-setting -->
       
 
            <table>
                <tr>
                    <?php $mb->the_field('ept-custom-css-setting-dg4'); ?>
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

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('a[href="#dh_ptp_tabs_3"]').on('click', function() {
            var columns = $('.wpa_loop-column .wpa_group-column').length - 1;
            
            var column_names = '';
            $('.wpa_loop-column .wpa_group-column').each(function(){
                column_names += $(this).find('#plan-name').val() + "\t\n";
            });
            
            var data = {
                action: 'ptp_design4_color_columns',
                columns: columns,
                column_names: column_names,
                post_id: '<?php global $post; echo $post->ID; ?>'
            };
            $.post(ajaxurl, data, function(response) {
                // Remove previously loaded
                $('.design4-js-rows').each(function(){
                    $(this).remove();
                });
            
                // Update content
                $('.design4-rows').after(response);
            
                // Init color picker            
                $('.design4-color').wpColorPicker({
                    palettes: ['#6baba1', '#e0a32e', '#e7603b', '#9ca780']
                });
            });
        });
    });
</script>