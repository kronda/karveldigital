<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 11/15/13
 * Time: 15:28
 */


/**
 * Read all custom styling from our database
 */
function dh_ptp_design4_css($id, $meta)
{
    /**
     * Overall Styles
     */
    
    // Plan Name
    $design4_plan_name_font_size = (isset($meta['design4-plan-name-font-size']))?$meta['design4-plan-name-font-size']:'25';
    $design4_plan_name_font_size_type = (isset($meta['design4-plan-name-font-size-type']))?$meta['design4-plan-name-font-size-type']:'px';
    
    // Price
    $design4_price_font_size = (isset($meta['design4-price-font-size']))?$meta['design4-price-font-size']:'90';
    $design4_price_font_size_type = (isset($meta['design4-price-font-size-type']))?$meta['design4-price-font-size-type']:'px';
    
    // Currency
    $design4_currency_font_size = (isset($meta['design4-currency-font-size']))?$meta['design4-currency-font-size']:'40';
    $design4_currency_font_size_type = (isset($meta['design4-currency-font-size-type']))?$meta['design4-currency-font-size-type']:'px';
    
    // Bullet Item
    $design4_bullet_item_font_size = (isset($meta['design4-bullet-item-font-size']))?$meta['design4-bullet-item-font-size']:'16';
    $design4_bullet_item_font_size_type = (isset($meta['design4-bullet-item-font-size-type']))?$meta['design4-bullet-item-font-size-type']:'px';
    
    // Optional Description
    $design4_optional_description_font_size = (isset($meta['design4-optional-description-font-size']))?$meta['design4-optional-description-font-size']:'14';
    $design4_optional_description_font_size_type = (isset($meta['design4-optional-description-font-size-type']))?$meta['design4-optional-description-font-size-type']:'px';

    // Margin between optional description and price
    $design4_margin_between_description_price = (isset($meta['design4-margin-between-description-price-font-size']))?$meta['design4-margin-between-description-price-font-size']:'14';
      // Print stylish custom css setting
      if(isset($meta['ept-custom-css-setting-dg4'])) {    
              echo $meta['ept-custom-css-setting-dg4'];
        }
    ?>
    
    /* design4 #<?php echo $id;?> */
    #ptp-<?php echo $id; ?> .ptp-design4-title {
        font-size: <?php echo $design4_plan_name_font_size . $design4_plan_name_font_size_type; ?>;
    }
    #ptp-<?php echo $id; ?> .ptp-design4-title .has-tip {
        color: #fff;
        border-bottom: dotted 1px #fff;
    }
    #ptp-<?php echo $id; ?> .ptp-design4-price .ptp-design4-total {
        font-size: <?php echo $design4_price_font_size . $design4_price_font_size_type; ?>;
    }
    #ptp-<?php echo $id; ?> .ptp-design4-currency, #ptp-<?php echo $id; ?> .ptp-design4-end {
        font-size: <?php echo $design4_currency_font_size . $design4_currency_font_size_type; ?>;
    }
    #ptp-<?php echo $id; ?> .ptp-design4-back .ptp-design4-description .ptp-design4-bullet-item {
        font-size: <?php echo $design4_bullet_item_font_size . $design4_bullet_item_font_size_type; ?>;
    }
    #ptp-<?php echo $id; ?> .ptp-design4-back .ptp-design4-description .ptp-design4-bullet-item .has-tip,
    #ptp-<?php echo $id; ?> .ptp-design4-back .ptp-design4-description .ptp-design4-bullet-item .has-tip:hover {
        color: #fff;
        border-bottom: dotted 1px #fff;
    }
    #ptp-<?php echo $id; ?> .ptp-design4-front .ptp-design4-description {
        font-size: <?php echo $design4_optional_description_font_size . $design4_optional_description_font_size_type; ?>;
        padding-top: <?php echo $design4_margin_between_description_price;?>px;
    }
    
    <?php
        $i = 1;
        while (true) {
            if (isset($meta['design4_color_column_'.$i])) {
                echo
                    '#ptp-' . $id . ' .ptp-col-id-' . ($i-1) . ' .ptp-design4-color-1-font { '.
                        'color: '.$meta['design4_color_column_'.$i].'; '.
                    '}'."\n";
                echo
                    '#ptp-' . $id . ' .ptp-col-id-' . ($i-1) . ' .ptp-design4-color-1-font .has-tip { '.
                        'color: '.$meta['design4_color_column_'.$i].'; '.
                        'border-bottom: dotted 1px '.$meta['design4_color_column_'.$i].'; '.
                    '}'."\n";
                echo
                    '#ptp-' . $id . ' .ptp-col-id-' . ($i-1) . ' .ptp-design4-color-1-bg { ' .
                        'background: '.$meta['design4_color_column_'.$i].'; '.
                    '}'."\n";
            } else {
                break;
            }
            $i++;
        }
    ?>
    
    /* end of design4 #<?php echo $id;?> */
    
    <?php
}


/**
 * Generate our simple flat pricing table HTML
 * @return [type]
 */
function dh_ptp_generate_design4_pricing_table_html ($id, $hide = false) {
    global $features_metabox;
    global $meta;

    $meta = get_post_meta($id, $features_metabox->get_the_id(), TRUE);
    $post = get_post($id);
    
    $color_db = array(
        '#6baba1' => 'ptp-design4-color-1',
        '#e0a32e' => 'ptp-design4-color-2',
        '#e7603b' => 'ptp-design4-color-3',
        '#9ca780' => 'ptp-design4-color-4',
    );
    
    $loop_index = 0;
    $hide_table = ($hide)?'style="display:none"':'';
    $pricing_table_html = '<div id="ptp-'. $id .'" class="ptp-design4-pricingtable" '.$hide_table.'>';
    foreach ($meta['column'] as $column)
    {
        // Note: beneath ifs are to prevent 'undefined variable notice'. It wasn't possible to put this code into a function since the passing argument might be undefined.      
        $planname = isset($column['planname'])?$column['planname']:'';
        $planprice = isset($column['planprice'])?$column['planprice']:'';
        $planfeatures = isset($column['planfeatures'])?$column['planfeatures']:'';
        $buttonurl = isset($column['buttonurl'])?$column['buttonurl']:'';
        $buttontext = isset($column['buttontext'])?$column['buttontext']:'';
        $optional_description = isset($column['optionaldescription'])?$column['optionaldescription']:'';
        
        // Plan color tweaks
        $plancolor = isset($column['plancolor'])?$column['plancolor']:'#6baba1';
        $plancolor = isset($meta['design4_color_column_'.($loop_index+1)])?$meta['design4_color_column_'.($loop_index+1)]:$plancolor;
        $color_css = (isset($color_db[$plancolor])?$color_db[$plancolor]:'ptp-design4-color-1');
        
        // set html based on if our current column is featured
        if(isset($column['feature'])) {
            $feature = ($column['feature'] == 'featured')?'<div class="ptp-design4-popular ' . $color_css . '-font fa fa-star"></div>':'';
            $feature_class = ($column['feature'] == 'featured')?'ptp-design4-front-popular':'';
        } else {
            $feature = '';
            $feature_class = '';
        }

        // button url variables
        $tracking = get_option('dh_ptp_google_analytics');
        $table_name = addslashes($post->post_title)?addslashes($post->post_title):'untitled pricing table';
        $onclick = ($tracking == 1)?dh_ptp_generate_ga_script( $table_name, 'Button clicked' , addslashes($column['planname']) ):"";
        $open_in_new_tab = (isset($meta['design4-open-link-in-new-tab']) && $meta['design4-open-link-in-new-tab'])?'target="_blank"':'';
        $anchor_1 = ($buttonurl != '')?'<a href="'.$buttonurl.'" ' . $open_in_new_tab . ' '.$onclick.'>':'';
        $anchor_2 = ($buttonurl != '')?'</a>':'';

        // get custom shortcode button if any
        $custom_button = false;
        $shortcode_pattern = '|^\[shortcode\](?P<custom_button>.*)\[/shortcode\]$|';
        if ( 
            preg_match( $shortcode_pattern, $buttonurl, $matches ) 
            || 
            preg_match( $shortcode_pattern, $buttontext, $matches )
        ) {
            $anchor_1 = '';
            $anchor_2 = '';
            $custom_button = $matches[ 'custom_button' ];
        }
        
        // Extract price information
        if (strlen($planprice) > 0) {
            $pattern = "/^(?P<currency>[^\d\s]+)?\s*(?P<price_1>[\d']+)(?P<price_2>[\d,.]+)?$/";
            $matches = array();
            preg_match($pattern, trim($planprice), $matches);
            if( $matches ) {
                $currency = empty ( $matches[ 'currency' ] ) ? '$' : $matches[ 'currency' ];
                $price_1 = empty ( $matches[ 'price_1' ] ) ? '...' : $matches[ 'price_1' ];
                $price_2 = empty ( $matches[ 'price_2' ] ) ? '00' : $matches[ 'price_2' ];
            }
        }

        // create the html code
        $pricing_table_html .= '
            <div class="ptp-design4-col ptp-col-id-' . $loop_index . '">
                ' . $anchor_1 . '
                <div class="ptp-design4-circle">
                  <div class="ptp-design4-front '.$feature_class.'">
                    <div class="ptp-design4-title '.$color_css.'-font">' . dh_ptp_fa_icons($planname) . '</div>
                    <div class="ptp-design4-price '.$color_css.'-font">' .
                        ( $matches 
                            ? ( '
                                <span class="ptp-design4-currency">' . $currency . '</span>
                                <span class="ptp-design4-total">' . $price_1 . '</span> ' .
                                ( $price_2 != '00' || empty ( $currency [2] )
                                    ? ( '<span class="ptp-design4-end">' . $price_2 . '</span>' )
                                    : ''
                                ) 
                            ) 
                            : ( '<span class="ptp-design4-total">' . $planprice . '</span>' )
                        )
                        .
                    '</div>
                    <div class="ptp-design4-description">'.dh_ptp_fa_icons($optional_description).'</div>
                  </div>
                  ' .$feature . '
                  <div class="ptp-design4-back '.$color_css.'-bg ptp-design4-info">
                    <div class="ptp-design4-title">' . dh_ptp_fa_icons($planname) . '</div>
                    <div class="ptp-design4-description">' .
                        dh_ptp_features_to_html_design4($planfeatures) . $custom_button .
                    '</div>
                  </div>
                </div>
                ' . $anchor_2 . '
              </div>
        ';

        $loop_index++;
    }

    $pricing_table_html .= '</div>';

    return $pricing_table_html;
}

function dh_ptp_features_to_html_design4($features)
{
    // the string to be returned
    $output = '';

    // explode string into a useable array
    $dh_ptp_features = explode("\n", $features);

    // how many features does this column have?
    $total_features = count($dh_ptp_features);

    //add each feature to $dh_ptp_feature_html
    for ($i=0; $i<$total_features; $i++)
    {
        if ($dh_ptp_features[$i] == "") {
            $output .= '<div class="ptp-design4-bullet-item ptp-row-id-'.$i.'">&nbsp;</div>';
        } else {
            $output .= '<div class="ptp-design4-bullet-item ptp-row-id-'.$i.'">' . dh_ptp_fa_icons($dh_ptp_features[$i]) . '</div>';
        }
    }

    // return the features html
    return $output;
}

function tt_ptp_enable_column_match_height_script_dg4() {
    ?>
        <script type="text/javascript">
         jQuery(document).ready(function($) {    
          $('.ptp-bullet-item').matchHeight(false);    
          $('.ptp-plan').matchHeight(false); 
          $('.ptp-cta').matchHeight(false); 
        
         });
      </script>
      
        <?php
      
}