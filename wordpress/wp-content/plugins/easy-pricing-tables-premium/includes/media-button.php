<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

function dh_ptp_media_button()
{
    global $pagenow, $typenow, $wp_version;
    
    $button_title = __('Insert pricing table', PTP_LOC);
    $output = '';
    
    // Show button only in post and page edit screens
    if ( in_array( $pagenow, array( 'post.php', 'page.php', 'post-new.php', 'post-edit.php' ) ) && $typenow != 'download' ) {
        /* check current WP version */
        if ( version_compare( $wp_version, '3.5', '<' ) ) {
            $output = '<a href="#TB_inline?width=640&height=550&inlineId=dh-ptp-pricing-table-thickbox" class="thickbox" title="' . $button_title . '">' . $button_title . '</a>';
        } else {
            $img = '<span class="wp-media-buttons-icon" id="dh-ptp-media-button"></span>';
            $output = '<a href="#TB_inline?width=640&height=550&inlineId=dh-ptp-pricing-table-thickbox" class="thickbox button" title="' . $button_title . '" style="padding-left: .4em;">' .$img . $button_title . '</a>';
        }
    }
    
    echo $output;
}
add_action( 'media_buttons', 'dh_ptp_media_button', 11);

function dh_ptp_get_pricing_tables($filtered = false, $filter = '')
{
    global $post;
    
    $data = array();
    
    // Args
    $args = array(
        'post_type'=> 'easy-pricing-table',
        'post_status'=> array('publish', 'draft'),
        'posts_per_page'=> -1
    );
    
    // Fetch all pricing tables
    $post_clone = $post;
    $query = new WP_Query($args);
    if ( $query->have_posts() ) : 
        while ( $query->have_posts() ) : $query->the_post();
            $meta = get_post_meta($post->ID, '1_dh_ptp_settings', true);
            if ($filtered) {
                if ($filter && isset($meta[$filter]) && $meta[$filter] == 'selected') {
                    $data[] = $post;
                }
            } else {
                $data[] = $post;
            }
        endwhile;
    endif;
      
    // Restore original Post Data
    $post = $post_clone;
    return $data;
}

function dh_ptp_media_button_thickbox()
{
    global $pagenow, $typenow, $post;

    // Only run in post/page creation and edit screens
    if ( in_array( $pagenow, array( 'post.php', 'page.php', 'post-new.php', 'post-edit.php' ) ) && $typenow != 'download' ) {
        $pricing_tables = dh_ptp_get_pricing_tables();
        $checking_license_level = get_option( 'dh_ptp_grandfathered' );
    ?>
    
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $('#dh-ptp-pricing-table-insert').on('click', function () {
                    var shortcode_opt = $('input[name="dh_ptp_display_type"]:checked').val();
                    
                    if (shortcode_opt == 2) {
                        var default_option_pricing_table_id = $('#dh-switch-default-option-pricing-table').val();
                        var alternate_option_pricing_table_id = $('#dh-switch-alternate-option-pricing-table').val();
                        var default_option_title = $('#dh-switch-default-option-title').val();
                        var alternate_option_title = $('#dh-switch-alternate-option-title').val();
                        
                        if ('0' == default_option_pricing_table_id || '0' == alternate_option_pricing_table_id ||
                            '' == default_option_title || '' == alternate_option_title)
                        {
                            alert('<?php _e('Please fill out all mandatory fields (*).', PTP_LOC); ?>');
                            return;
                        }
                        
                        var alternate_2_text = '';
                        var alternate_2_option_pricing_table_id = $('#dh-switch-third-option-pricing-table').val();
                        var alternate_2_option_title = $('#dh-switch-third-option-title').val();
                        if ( '0' != alternate_2_option_pricing_table_id  ) {
                            
                            if( '' == alternate_2_option_title ) {
                                alert('<?php _e('Please fill out Alternate Title 2 fields.', PTP_LOC); ?>');
                                return;
                            }
                            
                            alternate_2_text = 'alternate_2_title="' + alternate_2_option_title + '" ' +
                                'alternate_2_subtitle="' + $('#dh-switch-third-option-subtitle').val() + '" ' +
                                'alternate_2_pricing_table_id="' + alternate_2_option_pricing_table_id + '" ' ;
                        }
                        
                        // shortcode
                        window.send_to_editor(
                            '[easy-pricing-toggle ' +
                                'default_pricing_table_id="' + default_option_pricing_table_id + '" '+
                                'default_title="' + default_option_title + '" ' +
                                'default_subtitle="' + $('#dh-switch-default-option-subtitle').val() + '" ' +
                                'alternate_title="' + alternate_option_title + '" ' +
                                'alternate_subtitle="' + $('#dh-switch-alternate-option-subtitle').val() + '" ' +
                                'alternate_pricing_table_id="' + alternate_option_pricing_table_id + '" ' +
                                'font_color="' + $('#dh-switch-active-font-color').val() + '" ' +
                                'background_color="' + $('#dh-switch-active-bg-color').val() + '" ' +
                                'border_color="' + $('#dh-switch-active-border-color').val() + '" ' + 
                                 alternate_2_text +
                            ']'
                        );
                        
                    } else {
                        var id = $('#dh-ptp-pricing-table').val();
                        
                        // Return early if no download is selected
                        if ('0' === id) {
                            alert('<?php _e('You must choose pricing table first!', PTP_LOC); ?>');
                            return;
                        }
                        window.send_to_editor('[easy-pricing-table id="' + id + '"]');
                        
                        // Tracking
                        jQuery.ajax({
                            type: "POST",
                            url: "<?php echo admin_url('admin-ajax.php'); ?>",
                            data: {
                                action: "dh_ptp_tracking_deploy",
                                id: id
                            }
                        });
                    }
                });
                
                $('input[name="dh_ptp_display_type"]').click(function() {
                    var value = $(this).val();
                    
                    if (value == 2) {
                        // Show pricing table switch options
                        $('.ptp-switch-2').each(function( index ) {
                            $(this).show();
                        });
                        
                        // Hide pricing table options
                        $('#dh-ptp-pricing-table').hide();
                    } else {
                        // Show pricing table options
                        $('#dh-ptp-pricing-table').show();
                        
                        // Hide pricing table switch options
                        $('.ptp-switch-2').each(function( index ) {
                            $(this).hide(); 
                        });
                        $('.ptp-switch-2-colors').each(function( index ){
                            $(this).hide();
                        });
                    } 
                });
                
                // Color pickers init
                $('.dh-ptp-shortcode-colorpicker').wpColorPicker();
                
                //save response.active_font_color use for toggle 3 table
                $response_active_font_color = '#333';
                $response_active_bg_color = '#333';
                // Table selected
                $('#dh-switch-default-option-pricing-table').on('change', function(){
                    var id = $(this).val();
                    
                    // Load data
                    $.ajax({
                        type: 'GET',
                        url: '<?php echo admin_url('admin-ajax.php');?>',
                        data: {
                            'action': 'dh_ptp_alternate_option_table',
                            'id': id
                        },
                        dataType: 'JSON'
                    })
                    .done(function(response) {
                        // Create select
                        if (response.select) {
                            var select_html = '<option value="0"><?php _e('Please select...', PTP_LOC); ?></option>';
                            for (var i=0; i<response.select.length; i++) {
                                var post = response.select[i];
                                select_html += '<option value="' + post['id'] + '">' + post['post_title'] + '</option>';
                            }
                            //reset the second & third table html
                            $('#dh-switch-alternate-option-pricing-table').html(select_html);                            
                            $('#dh-switch-third-option-pricing-table').html('<option value="0">None</option>');
                            $response_active_font_color = response.active_font_color;
                            $response_active_bg_color = response.active_bg_color;
                            // Colors
                            $('#dh-switch-active-font-color').iris('color', response.active_bg_color);
                            $('#dh-switch-active-bg-color').iris('color', response.active_bg_color);
                            $('#dh-switch-active-border-color').iris('color', response.active_border_color);
                            
                        }
                    });
                    
                    // Show color pickers
                    if ('' !== id) {
                        $('.ptp-switch-2-colors').each(function( index ) {
                            $(this).show();
                        });
                    } else {
                        $('.ptp-switch-2-colors').each(function( index ) {
                            $(this).hide();
                        });
                    }
                    $('.dh-switch-active-border-color-container').hide();
                  
                    
                    
                    // Tracking
                    jQuery.ajax({
                        type: "POST",
                        url: "<?php echo admin_url('admin-ajax.php'); ?>",
                        data: {
                            action: "dh_ptp_tracking_deploy",
                            id: id,
                            type: "toggle"
                        }
                    });
                    
                });
                
                 // Table selected
                $('#dh-switch-alternate-option-pricing-table').on('change', function(){
                    var id = $('#dh-switch-default-option-pricing-table').val();
                    
                    // Load data
                    $.ajax({
                        type: 'GET',
                        url: '<?php echo admin_url('admin-ajax.php');?>',
                        data: {
                            'action': 'dh_ptp_alternate_option_table',
                            'id': id,
                            'alternate_1_id' : $(this).val()
                        },
                        dataType: 'JSON'
                    })
                    .done(function(response) {
                        // Create select
                        if (response.select) {
                            var select_html = '<option value="0"><?php _e('None', PTP_LOC); ?></option>';
                            for (var i=0; i<response.select.length; i++) {
                                var post = response.select[i];
                                select_html += '<option value="' + post['id'] + '">' + post['post_title'] + '</option>';
                            }
                            $('#dh-switch-third-option-pricing-table').html(select_html);                           
                            $('.dh-switch-active-border-color-container').hide();
                            $('#dh-switch-active-font-color').iris('color', $response_active_bg_color);
                        }
                    });
                    });
                
                 // Table selected
                $('#dh-switch-third-option-pricing-table').on('change', function(){                                                  
                            if( $(this).val() !== '0' ) {
                                $('#dh-switch-active-font-color').iris('color', $response_active_font_color);
                                $('.dh-switch-active-border-color-container').show();
                            } else {
                                $('#dh-switch-active-font-color').iris('color', $response_active_bg_color);
                                $('.dh-switch-active-border-color-container').hide();
                            }
                });
                
                // Scroll bottom
                $('.wrap a.wp-color-result').click(function() {
                    var target = $(this);
                    if (target.length) {
                        $('#TB_ajaxContent').animate({
                          scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                });
            });
        </script>
        
        <style>
            
            #dh-ptp-media-button {
			background: url(<?php echo PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/ept-icon-16x16.png'; ?>) 0 -1px no-repeat;
			background-size: 16px 16px;
		}
        </style>
        <div id="dh-ptp-pricing-table-thickbox" style="display: none;">
            <div class="wrap" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
                <p><?php _e('Use the form below to insert the shortcode for a pricing table.', PTP_LOC); ?></p>
                <div>
                    <div style="margin-bottom: 10px;">
                        <input type="radio" name="dh_ptp_display_type" id="dh-ptp-display-type-1" value="1" checked/> <label for="dh-ptp-display-type-1"><?php _e('Insert a pricing table', PTP_LOC); ?></label><br/>
                    <?php if( DH_PTP_LICENSE_PACKAGE != DH_PTP_EXCLUDE_LICENSE_PACKAGE || $checking_license_level !=='no' ) : ?>    
                        <input type="radio" name="dh_ptp_display_type" id="dh-ptp-display-type-2" value="2"/> <label for="dh-ptp-display-type-2"><?php _e('Insert a pricing toggle', PTP_LOC); ?></label>
                    <?php endif; ?>
                    </div>
                    
                    <!-- Pricing Table -->
                    <select id="dh-ptp-pricing-table">
                        <option value="0"><?php _e('Please select...', PTP_LOC); ?></option>
                        <?php
                            foreach ($pricing_tables as $item) {
                                echo '<option value="' . $item->ID . '">' . ($item->post_title?$item->post_title:__('(no title)', PTP_LOC)) . '</option>';
                            }
                        ?>
                    </select>
                    
                    <!-- Pricing switch -->
                    <div>
                        <!-- Default Default Pricing Table  -->
                        <div class="ptp-switch-2" style="min-height: 30px; display: none;">
                            <label for="dh-switch-default-option-pricing-table" style="width: 190px; display: inline-block; padding-top: 5px; vertical-align: top;"><?php _e('Default Pricing Table', PTP_LOC); ?> <b>*</b></label>
                            <select id="dh-switch-default-option-pricing-table" style="width: 200px;">
                                <option value="0"><?php _e('Please select...', PTP_LOC); ?></option>
                                <?php
                                    foreach ($pricing_tables as $item) {
                                        echo '<option value="' . $item->ID . '">' . ($item->post_title?$item->post_title:__('(no title)', PTP_LOC)) . '</option>';
                                    }
                                ?>
                            </select>
                        </div>                        
                        <div class="ptp-switch-2" style="min-height: 30px; display: none;">
                            <label for="dh-switch-default-option-title" style="width: 190px; display: inline-block; padding-top: 5px; vertical-align: top;"><?php _e('Default Title', PTP_LOC); ?> <b>*</b></label>
                            <input type="text" id="dh-switch-default-option-title" placeholder="<?php _e('Yearly (20% off)', PTP_LOC); ?>" style="width: 200px;"/>
                        </div>
                        <div class="ptp-switch-2" style="min-height: 30px; display: none;">
                            <label for="dh-switch-default-option-subtitle" style="width: 190px; display: inline-block; padding-top: 5px; vertical-align: top;"><?php _e('Default Subtitle', PTP_LOC); ?></label>
                            <input type="text" id="dh-switch-default-option-subtitle" placeholder="<?php _e('Pay Yearly and Save 20%', PTP_LOC); ?>" style="width: 200px;"/>
                        </div>
                        <!-- Alternate Pricing Table   --> 
                        <div class="ptp-switch-2" style="min-height: 30px; display: none;">
                            <label for="dh-switch-alternate-option-pricing-table" style="width: 190px; display: inline-block; padding-top: 5px; vertical-align: top;"><?php _e('Alternate Pricing Table', PTP_LOC); ?> <b>*</b></label>
                            <select id="dh-switch-alternate-option-pricing-table" style="width: 200px;">
                                <option value="0"><?php _e('Please select...', PTP_LOC); ?></option>
                            </select>
                        </div>
                        <div class="ptp-switch-2" style="min-height: 30px; display: none;">
                            <label for="dh-switch-alternate-option-title" style="width: 190px; display: inline-block; padding-top: 5px; vertical-align: top;"><?php _e('Alternate Title', PTP_LOC); ?> <b>*</b></label>
                            <input type="text" id="dh-switch-alternate-option-title" placeholder="<?php _e('Monthly', PTP_LOC); ?>" style="width: 200px;"/>
                        </div>
                        <div class="ptp-switch-2" style="min-height: 30px; display: none;">
                            <label for="dh-switch-alternate-option-subtitle" style="width: 190px; display: inline-block; padding-top: 5px; vertical-align: top;"><?php _e('Alternate Subtitle', PTP_LOC); ?></label>
                            <input type="text" id="dh-switch-alternate-option-subtitle" placeholder="<?php _e('Pay Month to Month', PTP_LOC); ?>" style="width: 200px;"/>
                        </div>
                      
                        <!-- Third Pricing Table   --> 
                        <div class="ptp-switch-2" style="min-height: 30px; display: none;">
                            <label for="dh-switch-third-option-pricing-table" style="width: 190px; display: inline-block; padding-top: 5px; vertical-align: top;"><?php _e('Alternate Pricing Table 2', PTP_LOC); ?> <b>*</b></label>
                            <select id="dh-switch-third-option-pricing-table" style="width: 200px;">
                                <option value="0"><?php _e('None', PTP_LOC); ?></option>
                            </select>
                        </div>
                        <div class="ptp-switch-2" style="min-height: 30px; display: none;">
                            <label for="dh-switch-third-option-title" style="width: 190px; display: inline-block; padding-top: 5px; vertical-align: top;"><?php _e('Alternate Title 2', PTP_LOC); ?> <b>*</b></label>
                            <input type="text" id="dh-switch-third-option-title" placeholder="<?php _e('Biyearly', PTP_LOC); ?>" style="width: 200px;"/>
                        </div>
                        <div class="ptp-switch-2" style="min-height: 30px; display: none;">
                            <label for="dh-switch-third-option-subtitle" style="width: 190px; display: inline-block; padding-top: 5px; vertical-align: top;"><?php _e('Alternate Subtitle 2', PTP_LOC); ?></label>
                            <input type="text" id="dh-switch-third-option-subtitle" placeholder="<?php _e('Pay Biyearly', PTP_LOC); ?>" style="width: 200px;"/>
                        </div>
                        
                        <!-- Color -->
                        <div class="ptp-switch-2-colors" style="min-height: 30px; display: none;">
                            <label for="dh-switch-active-font-color" style="width: 190px; display: inline-block; padding-top: 5px; vertical-align: top;"><?php _e('Font Color', PTP_LOC); ?></label>
                            <input type="text" id="dh-switch-active-font-color" class="dh-ptp-shortcode-colorpicker" value="#ffffff" data-default-color="#ffffff" />
                        </div>
                        <div class="ptp-switch-2-colors" style="min-height: 30px; display: none;">
                            <label for="dh-switch-active-bg-color" style="width: 190px; display: inline-block; padding-top: 5px; vertical-align: top;"><?php _e('Background Color', PTP_LOC); ?></label>
                            <input type="text" id="dh-switch-active-bg-color" class="dh-ptp-shortcode-colorpicker" value="#ffffff" data-default-color="#ffffff" />
                        </div>
                        <div class="dh-switch-active-border-color-container" style="min-height: 30px; display: none;">
                            <label for="dh-switch-active-border-color" style="width: 190px; display: inline-block; padding-top: 5px; vertical-align: top;"><?php _e('Border Color', PTP_LOC); ?></label>
                            <input type="text" id="dh-switch-active-border-color" class="dh-ptp-shortcode-colorpicker" value="#ffffff" data-default-color="#ffffff" />
                        </div>
                    </div>
                </div>
                <p class="submit">
                    <input type="button" id="dh-ptp-pricing-table-insert" class="button-primary" value="<?php _e('Insert', PTP_LOC); ?>"/>
                    <a id="dh-ptp-pricing-table-cancel" class="button-secondary" onclick="tb_remove();" title="Cancel"><?php _e('Cancel', PTP_LOC); ?></a>
                </p>
            </div>
        </div>
    <?php
    }
}
add_action( 'admin_footer', 'dh_ptp_media_button_thickbox' );

// Enqueue assets
function dh_ptp_media_button_assets($hook_suffix)
{
    if ($hook_suffix == 'post.php' || $hook_suffix == 'post-new.php') {
        wp_enqueue_style('wp-color-picker');
        wp_enqueue_script('wp-color-picker');
    }
}
add_action('admin_enqueue_scripts', 'dh_ptp_media_button_assets');

// Load alternate option table
function dh_ptp_alternate_option_table()
{
    $default_id = (preg_match('/^([0-9]+)$/', $_REQUEST['id']))?$_REQUEST['id']:false;
    if(isset( $_REQUEST['alternate_1_id'] ))
        $alternate_1_id = (preg_match('/^([0-9]+)$/', $_REQUEST['alternate_1_id']))?$_REQUEST['alternate_1_id']:false;
    
    // Filter
    $filter = '';
    $meta = get_post_meta($default_id, '1_dh_ptp_settings', true);
    if ($default_id) {
        $meta = get_post_meta($default_id, '1_dh_ptp_settings', true);
        $meta_options = array(
            'dh-ptp-simple-flat-template',
            'dh-ptp-fancy-flat-template',
            'dh-ptp-stylish-flat-template',
            'dh-ptp-design4-template',
            'dh-ptp-dg5-template',
            'dh-ptp-dg6-template',
            'dh-ptp-dg7-template',
            'dh-ptp-comparison1-template',
            'dh-ptp-comparison2-template',
            'dh-ptp-comparison3-template'            
                        
        );
        
        foreach($meta_options as $option) {
            if (isset($meta[$option]) && $meta[$option] == 'selected') {
                $filter = $option;
                break;
            }
        }
    }
    
    // get featured column
    $column = false;
    foreach ($meta['column'] as $col) {
        if ( isset($col['feature'])  && $col['feature'] == 'featured') {
            $column = $col;
            break;
        }
    }
    
    // Colors
    switch($filter) {
        case 'dh-ptp-simple-flat-template':
            $active_font_color = '#ffffff';
            $active_bg_color = isset($meta['button-color'])?$meta['button-color']:'#3498db';
            $active_border_color = $active_bg_color;
            break;
        case 'dh-ptp-fancy-flat-template':  // NOT OK!
            // Dependencies
            $custom_colors = isset($meta['design2-choose-your-colors'])?$meta['design2-choose-your-colors']:1;
            
            $active_font_color = '#ffffff';
            if ($custom_colors == 1) {
                // Default
                $default_border = array(
                    '#f77fa8' => '#cd5771',
                    '#ef5f54' => '#b43d1b',
                    '#f15477' => '#b61e2c',
                    '#a176c3' => '#7c4592',
                    '#6b89c9' => '#424e9a',
                    '#49a9d3' => '#446ba9',
                    '#59b7b7' => '#3e8f95',
                    '#9ca46b' => '#697c41',
                    '#92d590' => '#61a86c',
                    '#b9c869' => '#799538',
                    '#79714c' => '#52552d',
                    '#9d7d60' => '#705a31',
                    '#dca562' => '#a48227',
                    '#ffa14f' => '#e57300',
                    '#ffe177' => '#d8b538'
                );
                
                $active_font_color = '#ffffff';
                $active_bg_color = isset($meta['fancy-flat-column-color-scheme'])?$meta['fancy-flat-column-color-scheme']:'#6b89c9';
                $active_border_color = $default_border[$active_bg_color];
            } else {
                // Custom
                $active_font_color = '#ffffff';
                $active_bg_color = isset($meta['design2-unfeatured-plan-title-background-color'])?$meta['design2-unfeatured-plan-title-background-color']:'#6b89c9';
                $active_border_color = isset($meta['design2-unfeatured-plan-border-background-color'])?$meta['design2-unfeatured-plan-border-background-color']:'#898f97';
            }
            break;
        case 'dh-ptp-stylish-flat-template':
            // Dependencies
            $design3_choose_your_colors = isset($meta['design3-choose-your-colors'])?$meta['design3-choose-your-colors']:1;
            
            if ($design3_choose_your_colors == 1) {
                // Default
                $active_font_color = '#d4d4d4';
                $active_bg_color = $meta['stylish-flat-column-color-scheme'];
                $active_border_color = $active_bg_color;
                
            } else {
                // Custom
                $active_font_color = isset($meta['design3-unfeatured-plan-title-font-color'])?$meta['design3-unfeatured-plan-title-font-color']:'#d4d4d4';
                $active_bg_color = isset($meta['design3-unfeatured-plan-title-background-color'])?$meta['design3-unfeatured-plan-title-background-color']:'#456366';
                $active_border_color = $active_bg_color;
            }
            
            break;
        case 'dh-ptp-design4-template':
            $column = ($column)?$column:$meta['column'][0];
            $active_font_color = '#ffffff';
            $active_bg_color = isset($column['plancolor'])?$column['plancolor']:'#6baba1';
            $active_border_color = $active_bg_color;
            break;
        case 'dh-ptp-dg5-template':
            $active_font_color = '#ffffff';
            $active_bg_color = ($column && isset($meta['design5-featured-button-color']))?$meta['design5-featured-button-color']: (isset( $meta['design5-button-color'])?$meta['design5-button-color']:'#7f8c8d');
            $active_border_color = $active_bg_color;
            break;
       case 'dh-ptp-dg6-template':
            $active_font_color = '#ffffff';  
            $active_bg_color = ($column && isset($meta['design6-featured-button-color']))?$meta['design6-featured-button-color']: (isset( $meta['design6-button-color'])?$meta['design6-button-color']:'#0c1f28');
            $active_border_color = $active_bg_color;
            break;
        case 'dh-ptp-dg7-template':
            $active_font_color = '#ffffff';
            $active_bg_color =  ($column && isset( $meta['design7-featured-button-color']))?$meta['design7-featured-button-color']:(isset( $meta['design7-button-color'])?$meta['design7-button-color']:'#0c1f28');
            $active_border_color = $active_bg_color;
            break;
        case 'dh-ptp-comparison1-template':
            // Dependencies
            $custom_colors = isset($meta['comparison1-choose-your-colors'])?$meta['comparison1-choose-your-colors']:1;
                        
            if ($custom_colors == 1) {
                // Default
                $comparison1_choose_a_theme = $meta['comparison1-choose-a-theme'];
                $default = array(
                    '#34495e/#c0392b' => array('#e74c3c'),
                    '#0e9577/#ce3306' => array('#ce3306'),
                    '#66317d/#0a8bb0' => array('#0a8bb0'),
                    '#08a7bd/#a81818' => array('#a81818'),
                    '#138f6b/#46b527' => array('#46b527'),
                    '#417d83/#ee4c7e' => array('#ee4c7e'),
                    '#27b18f/#ecce44' => array('#ecce44'),
                    '#b97a68/#f37e5d' => array('#f37e5d'),
                    '#114d68/#9e0165' => array('#9e0165'),
                    '#444588/#ee1367' => array('#ee1367')
                );
                
                $active_font_color = '#ffffff';
                $active_bg_color = $default[$comparison1_choose_a_theme][0];
                $active_border_color = $active_bg_color;
            } else {
                // Custom
                $active_font_color = '#ffffff';
                $active_bg_color = $meta['comparison1-button-background-color'];
                $active_border_color = $active_bg_color;
            }
            break;
        case 'dh-ptp-comparison2-template':
            $active_font_color = '#ffffff';
            $active_bg_color = ($column &&  isset($meta['comparison2-featured-button-background-color']))?$meta['comparison2-featured-button-background-color']: (isset( $meta['comparison2-button-background-color'])?$meta['comparison2-button-background-color']:'#00b5b5');
            $active_border_color = $active_bg_color;
            break;
        case 'dh-ptp-comparison3-template':
                $active_font_color = '#ffffff';
                $active_bg_color = $meta['comparison3-button-background-color'];
                $active_border_color = $active_bg_color;
            break;
    }
    
    $data = array();
    $results = dh_ptp_get_pricing_tables($default_id, $filter);
    foreach ($results as $result) {
         if ($default_id != $result->ID) {              
             if ( isset($alternate_1_id) && $alternate_1_id  == $result->ID ) { continue; }                
             $data[] = array('id' => $result->ID, 'post_title' => ($result->post_title?$result->post_title:__('(no title)', PTP_LOC)));
           }              
    }
    
    echo json_encode(
        array(
            'select' => $data,
            'active_font_color' => $active_font_color,
            'active_bg_color' => $active_bg_color,
            'active_border_color' => $active_border_color
        )
    );
    
    exit();
}
add_action('wp_ajax_dh_ptp_alternate_option_table', 'dh_ptp_alternate_option_table');
add_action('wp_ajax_nopriv_dh_ptp_alternate_option_table', 'dh_ptp_alternate_option_table');
?>