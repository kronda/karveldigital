<?php

/* Enqueue font awesome CSS */
function dh_ptp_register_css_font_awesome()
{
    wp_register_style('ept-font-awesome', PTP_PLUGIN_PATH_FOR_SUBDIRS . '/assets/pricing-tables/font-awesome/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts', 'dh_ptp_register_css_font_awesome');

/* Replace shortcode text into font awesome icon */
function dh_ptp_fa_icons($raw, $extra = false, $fa_icon_type = '')
{
    // Extra Icons for Comparison 1
    if ($extra) {
        if($fa_icon_type == 'no-circle') {
            $raw = str_replace('[y]', '<i class="fa fa-check black"></i>', $raw);
           $raw = str_replace('[n]', '<i class="fa fa-times black"></i>', $raw);
        } else {
           $raw = str_replace('[y]', '<i class="fa fa-chevron-circle-down green"></i>', $raw);
           $raw = str_replace('[n]', '<i class="fa fa-times-circle red"></i>', $raw);   
        }
    }
    
	// Tooltip
	if (preg_match('/\[tooltip( content=[\"|\']{1}(.*)?[\"|\']{1})?\](.*)?\[\/tooltip\]/sim', $raw)) {
		$pattern = '/\[tooltip( content=[\"|\']{1}(.*)?[\"|\']{1})?\](.*)?\[\/tooltip\]/i';
		$replacement = '<span data-tooltip class="has-tip" title="$2">$3</span>';
		$raw = preg_replace($pattern, $replacement, $raw);
	}
	
    $pattern = '/\[(.*?)\]/i';
    $replacement = '<i class="fa fa-$1"></i>';
    $text = preg_replace($pattern, $replacement, $raw);
    
    return $text;
}

?>