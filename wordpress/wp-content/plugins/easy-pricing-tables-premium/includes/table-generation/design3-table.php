<?php

/* Print stylesheet for stylish flat table */
function dh_ptp_stylish_flat_css($id, $meta)
{
    // Font Size
	$most_popular_font_size = (isset($meta['stylish-flat-most-popular-font-size']))?$meta['stylish-flat-most-popular-font-size']:'11';
    $most_popular_font_size_type = (isset($meta['stylish-flat-most-popular-font-size-type']))?$meta['stylish-flat-most-popular-font-size-type']:'px';
    $plan_name_font_size = (isset($meta['stylish-flat-plan-name-font-size']))?$meta['stylish-flat-plan-name-font-size']:'24';
    $plan_name_font_size_type = (isset($meta['stylish-flat-plan-name-font-size-type']))?$meta['stylish-flat-plan-name-font-size-type']:'px';
    $price_font_size = (isset($meta['stylish-flat-price-font-size']))?$meta['stylish-flat-price-font-size']:'42';
    $price_font_size_type = (isset($meta['stylish-flat-price-font-size-type']))?$meta['stylish-flat-price-font-size-type']:'px';
    $bullet_item_font_size = (isset($meta['stylish-flat-bullet-item-font-size']))?$meta['stylish-flat-bullet-item-font-size']:'12';
    $bullet_item_font_size_type = (isset($meta['stylish-flat-bullet-item-font-size-type']))?$meta['stylish-flat-bullet-item-font-size-type']:'px';
    $button_font_size = (isset($meta['stylish-flat-button-font-size']))?$meta['stylish-flat-button-font-size']:'13';
    $button_font_size_type = (isset($meta['stylish-flat-button-font-size-type']))?$meta['stylish-flat-button-font-size-type']:'px';
    
	// Design Settings
    $stylish_flat_hover_effects = isset($meta['stylish-flat-hover-effects'])?1:0;
   
    // Colors
	$design3_choose_your_colors = isset($meta['design3-choose-your-colors'])?$meta['design3-choose-your-colors']:1;
	$stylish_flat_table_color_scheme = isset($meta['stylish-flat-table-color-scheme'])?$meta['stylish-flat-table-color-scheme']:'dark';
    
	// Custom colors, fetch only when option selected
    if ($design3_choose_your_colors == 2) {
		// Unfeatured columns
		$design3_unfeatured_plan_title_font_color = isset($meta['design3-unfeatured-plan-title-font-color'])?$meta['design3-unfeatured-plan-title-font-color']:'#d4d4d4';
		$design3_unfeatured_plan_title_background_color = isset($meta['design3-unfeatured-plan-title-background-color'])?$meta['design3-unfeatured-plan-title-background-color']:'#456366';
		$design3_unfeatured_plan_price_font_color = isset($meta['design3-unfeatured-plan-price-font-color'])?$meta['design3-unfeatured-plan-price-font-color']:'#d4d4d4';
		$design3_unfeatured_feature_font_color = isset($meta['design3-unfeatured-feature-font-color'])?$meta['design3-unfeatured-feature-font-color']:'#313131';
		$design3_unfeatured_feature_background_color = isset($meta['design3-unfeatured-feature-background-color'])?$meta['design3-unfeatured-feature-background-color']:'#dddddd';
		$design3_unfeatured_feature_border_color = isset($meta['design3-unfeatured-feature-border-color'])?$meta['design3-unfeatured-feature-border-color']:'#bbbbbb';
        $design3_unfeatured_button_color = isset($meta['design3-unfeatured-button-color'])?$meta['design3-unfeatured-button-color']:$design3_unfeatured_plan_title_background_color;
        $design3_unfeatured_button_font_color = isset($meta['design3-unfeatured-button-font-color'])?$meta['design3-unfeatured-button-font-color']:$design3_unfeatured_plan_title_font_color; 
        $design3_unfeatured_button_hover_font_color = isset($meta['design3-unfeatured-button-hover-font-color'])?$meta['design3-unfeatured-button-hover-font-color']:'#d4d4d4';
		$design3_unfeatured_button_hover_color = isset($meta['design3-unfeatured-button-hover-color'])?$meta['design3-unfeatured-button-hover-color']:'#374f52';
		
		// Featured columns
		$design3_featured_plan_title_font_color = isset($meta['design3-featured-plan-title-font-color'])?$meta['design3-featured-plan-title-font-color']:'#d4d4d4';
		$design3_featured_plan_title_background_color = isset($meta['design3-featured-plan-title-background-color'])?$meta['design3-featured-plan-title-background-color']:'#456366';
		$design3_featured_most_popular_font_color = isset($meta['design3-featured-most-popular-font-color'])?$meta['design3-featured-most-popular-font-color']:'#d4d4d4';
		$design3_featured_plan_price_font_color = isset($meta['design3-featured-plan-price-font-color'])?$meta['design3-featured-plan-price-font-color']:'#d4d4d4';
		$design3_featured_feature_font_color = isset($meta['design3-featured-feature-font-color'])?$meta['design3-featured-feature-font-color']:'#313131';
		$design3_featured_feature_background_color = isset($meta['design3-featured-feature-background-color'])?$meta['design3-featured-feature-background-color']:'#dddddd';
		$design3_featured_feature_border_color = isset($meta['design3-featured-feature-border-color'])?$meta['design3-featured-feature-border-color']:'#bbbbbb';
        $design3_featured_button_color = isset($meta['design3-featured-button-color'])?$meta['design3-featured-button-color']:$design3_featured_plan_title_background_color;
        $design3_featured_button_font_color = isset($meta['design3-featured-button-font-color'])?$meta['design3-featured-button-font-color']:$design3_featured_plan_title_font_color;
        $design3_featured_button_hover_font_color = isset($meta['design3-featured-button-hover-font-color'])?$meta['design3-featured-button-hover-font-color']:'#d4d4d4';
		$design3_featured_button_hover_color = isset($meta['design3-featured-button-hover-color'])?$meta['design3-featured-button-hover-color']:'#374f52';
	}
        
        // Print stylish custom css setting
      if(isset($meta['ept-custom-css-setting-dg3'])) {    
              echo $meta['ept-custom-css-setting-dg3'];
        }
	?>
    
    <?php
    /* Print styles */
    ?>
    
    /* stylish flat #<?php echo $id;?> */
	
	<?php // !important fixes */ ?>
	#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable time,
	#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable mark,
	#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable audio,
	#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable video {
		color: #d4d4d4;
	}
	
	#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable {
		color: #d4d4d4;
	}
	
    <?php if ($stylish_flat_table_color_scheme == 'light') : ?> 
    #ptp-<?php echo $id; ?> .ptp-stylish-description .ptp-design3-row {
        color: #313131;
    }
    #ptp-<?php echo $id; ?> .ptp-stylish-description .ptp-design3-row .has-tip {
        color: #313131;
        border-bottom: dotted 1px #313131;
    }
    #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable {
        color: #313131;
        text-shadow:1px 1px 1px #ffffff;
    }
    #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-header {
        color: #eeeeee;
        text-shadow:1px 1px 1px #161616;
        -webkit-box-shadow: inset 0 1px 1px 0 rgba(0, 0, 0, 0.2), 0 0 2px 0 rgba(0, 0, 0, 0.1);
        -moz-box-shadow: inset 0 1px 1px 0 rgba(0, 0, 0, 0.2), 0 0 2px 0 rgba(0, 0, 0, 0.1);
        box-shadow: inset 0 1px 1px 0 rgba(0, 0, 0, 0.2), 0 0 2px 0 rgba(0, 0, 0, 0.1);
    }
    #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-column {
        background: #dddddd;
    }
    #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-content .ptp-stylish-description .ptp-design3-row {
        border-bottom: 1px solid #bbbbbb;
    }
    #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-pricing_button {
        -webkit-box-shadow: inset 0px 1px 2px 0px rgba(0, 0, 0, 0.2), 0px 1px 1px 0px rgba(255, 255, 255, 0.5);
        -moz-box-shadow: inset 0px 1px 2px 0px rgba(0, 0, 0, 0.2), 0px 1px 1px 0px rgba(255, 255, 255, 0.5);
        box-shadow: inset 0px 1px 2px 0px rgba(0, 0, 0, 0.2), 0px 1px 1px 0px rgba(255, 255, 255, 0.5);
    }
    #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-pricing_button a {
        color: #eeeeee;
    }
    #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-pricing_button:hover {
        -webkit-box-shadow: inset 0px 1px 2px 0px rgba(0, 0, 0, 0.1), 0px 1px 1px 0px rgba(255, 255, 255, 0.7);
        -moz-box-shadow: inset 0px 1px 2px 0px rgba(0, 0, 0, 0.1), 0px 1px 1px 0px rgba(255, 255, 255, 0.7);
        box-shadow: inset 0px 1px 2px 0px rgba(0, 0, 0, 0.1), 0px 1px 1px 0px rgba(255, 255, 255, 0.7);
    }
    #ptp-<?php echo $id; ?> .ptp-stylish-column_blue .ptp-stylish-bottomheader {
		border-top: 1px solid #53777a;
	}
    #ptp-<?php echo $id; ?> .ptp-stylish-column_brown .ptp-stylish-bottomheader {
		border-top: 1px solid #727060;
	}
    #ptp-<?php echo $id; ?> .ptp-stylish-column_deepblue .ptp-stylish-bottomheader {
		border-top: 1px solid #4d5054;
	}
    #ptp-<?php echo $id; ?> .ptp-stylish-column_darkgrey .ptp-stylish-bottomheader {
		border-top: 1px solid #3e4244;
	}
    #ptp-<?php echo $id; ?> .ptp-stylish-column_green .ptp-stylish-bottomheader {
		border-top: 1px solid #506e50;
	}
    #ptp-<?php echo $id; ?> .ptp-stylish-column_ocean .ptp-stylish-bottomheader {
		border-top: 1px solid #4e5a66;
	}
    #ptp-<?php echo $id; ?> .ptp-stylish-column_olive .ptp-stylish-bottomheader {
		border-top: 1px solid #595850;
	}
    #ptp-<?php echo $id; ?> .ptp-stylish-column_orange .ptp-stylish-bottomheader {
		border-top: 1px solid #b44927;
	}
    #ptp-<?php echo $id; ?> .ptp-stylish-column_pink .ptp-stylish-header {
		border-bottom: 1px solid #582033;
	}
    #ptp-<?php echo $id; ?> .ptp-stylish-column_pink .ptp-stylish-bottomheader {
		border-top: 1px solid #7d2e49;
	}
    #ptp-<?php echo $id; ?> .ptp-stylish-column_purple .ptp-stylish-bottomheader {
		border-top: 1px solid #52444e;
	}
    #ptp-<?php echo $id; ?> .ptp-stylish-column_red .ptp-stylish-bottomheader {
		border-top: 1px solid #812626;
	}
    #ptp-<?php echo $id; ?> .ptp-stylish-column_yellow .ptp-stylish-bottomheader {
		border-top: 1px solid #c1991b;
	}
    #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-column_highlight {
        background: #d3d3d3;
        border-bottom: 1px solid #cccccc;
        -webkit-box-shadow: inset 0 0 1px rgba(0,0,0,0.6), 0 0 21px 0px rgba(0, 0, 0, 0.2);
        -moz-box-shadow: inset 0 0 1px rgba(0,0,0,0.6), 0 0 21px 0px rgba(0, 0, 0, 0.2);
        box-shadow: inset 0 0 1px rgba(0,0,0,0.6), 0 0 21px 0px rgba(0, 0, 0, 0.2);
    }
    #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-column_highlight {
        background: #dddddd;
    }
    <?php endif; ?>
    
    #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-header .subline {
        font-size: <?php echo $most_popular_font_size.$most_popular_font_size_type; ?>;
        color: <?php echo ($stylish_flat_table_color_scheme == 'dark')?'#d4d4d4':'#eeeeee'; ?>;
    }
    #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-header strong.title {
        font-size: <?php echo $plan_name_font_size.$plan_name_font_size_type; ?>;
        display:block;
    }
    #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-header strong.title .has-tip{
        color: <?php echo ($stylish_flat_table_color_scheme == 'dark')?'#d4d4d4':'#eeeeee'; ?>;
        border-bottom: dotted 1px <?php echo ($stylish_flat_table_color_scheme == 'dark')?'#d4d4d4':'#eeeeee'; ?>;
    }
    #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-header strong.price {
        font-size: <?php echo $price_font_size.$price_font_size_type; ?>;
    }
    #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-header strong.price .has-tip {
        color: <?php echo ($stylish_flat_table_color_scheme == 'dark')?'#d4d4d4':'#eeeeee'; ?>;
        border-bottom: dotted 1px <?php echo ($stylish_flat_table_color_scheme == 'dark')?'#d4d4d4':'#eeeeee'; ?>;
    }
    #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-content .ptp-stylish-description .ptp-design3-row {
        font-size: <?php echo $bullet_item_font_size.$bullet_item_font_size_type; ?>;
    }
    #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-content .ptp-stylish-description .ptp-design3-row .has-tip{
        color: <?php echo ($stylish_flat_table_color_scheme == 'dark')?'#d4d4d4':'#313131'; ?>;
        border-bottom: dotted 1px <?php echo ($stylish_flat_table_color_scheme == 'dark')?'#d4d4d4':'#313131'; ?>;
    }
    #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-pricing_button a {
        font-size: <?php echo $button_font_size.$button_font_size_type; ?>;
    }
    #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-pricing_button a .has-tip{
        color: <?php echo ($stylish_flat_table_color_scheme == 'dark')?'#d4d4d4':'#eeeeee'; ?>;
        border-bottom: dotted 1px <?php echo ($stylish_flat_table_color_scheme == 'dark')?'#d4d4d4':'#eeeeee'; ?>;
    }
    
    <?php if ($stylish_flat_hover_effects) : ?>
        #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable {
            margin-top: 30px;
        }
        #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-column {
            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -webkit-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-column:hover {
            -moz-box-shadow: 0 0 20px -2px rgba(0,0,0,0.25);
            -webkit-box-shadow: 0 0 20px -2px rgba(0,0,0,0.25);
            box-shadow: 0 0 20px -2px rgba(0,0,0,0.25);
        }
        #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-column .ptp-stylish-footer {
            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -webkit-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-column:hover .ptp-stylish-footer{
            padding: 44px 2% 32px 2%;
        }
    <?php endif; ?>
	<?php if ($design3_choose_your_colors == 2) : ?>
		/* Border */
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-bottomheader {
			border-top: 1px solid rgba(255, 255, 255, 0.4); 
		}
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-topheader {
			border-bottom: 1px solid rgba(0, 0, 0, 0.3); 
		}
		
		/* Featured */
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-featured .ptp-stylish-header strong.title{
			color: <?php echo $design3_featured_plan_title_font_color;?>;
		}
        #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-featured .ptp-stylish-header strong.title .has-tip{
			color: <?php echo $design3_featured_plan_title_font_color;?>;
            border-bottom: dotted 1px <?php echo $design3_featured_plan_title_font_color; ?>;
		}
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-featured .ptp-stylish-header {
            background: <?php echo $design3_featured_plan_title_background_color; ?>;
        }
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-featured .ptp-stylish-pricing_button {
			background: <?php echo $design3_featured_button_color; ?>;
		}
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-featured .ptp-stylish-pricing_button:hover {
			background: <?php echo $design3_featured_button_hover_color; ?>;
		}
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-featured .ptp-stylish-pricing_button a {
			color: <?php echo $design3_featured_button_font_color; ?>;
		}
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-featured .ptp-stylish-pricing_button:hover a {
			color: <?php echo $design3_featured_button_hover_font_color;?>;
		}
        #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-featured .ptp-stylish-pricing_button a .has-tip {
			color: <?php echo $design3_featured_button_font_color; ?>;
            border-bottom: dotted 1px <?php echo $design3_featured_button_font_color; ?>;
		}
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-featured .ptp-stylish-pricing_button:hover a .has-tip {
			color: <?php echo $design3_featured_button_hover_font_color;?>;
            border-bottom: dotted 1px <?php echo $design3_featured_button_hover_font_color; ?>;
		}
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-featured .ptp-stylish-header strong.price {
			color: <?php echo $design3_featured_plan_price_font_color; ?>;
		}
        #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-featured .ptp-stylish-header strong.price .has-tip{
            color: <?php echo $design3_featured_plan_price_font_color;?>;
            border-bottom: dotted 1px <?php echo $design3_featured_plan_price_font_color; ?>;
		}
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-featured .ptp-stylish-header .subline {
			color: <?php echo $design3_featured_most_popular_font_color;?>;
		}
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-featured {
			background: <?php echo $design3_featured_feature_background_color; ?>;
		}
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-featured div.ptp-stylish-description .ptp-design3-row {
			color: <?php echo $design3_featured_feature_font_color; ?>;
			text-shadow: none;
			border-bottom: 1px solid <?php echo $design3_featured_feature_border_color;?>;
		}
        #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-featured div.ptp-stylish-description .ptp-design3-row .has-tip {
            color: <?php echo $design3_featured_feature_font_color; ?>;
            border-bottom: dotted 1px <?php echo $design3_featured_feature_font_color; ?>;
        }
		
		/* Unfeatured */
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-unfeatured .ptp-stylish-header strong.title {
			color: <?php echo $design3_unfeatured_plan_title_font_color;?>;
		}
        #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-unfeatured .ptp-stylish-header strong.title .has-tip {
			color: <?php echo $design3_unfeatured_plan_title_font_color;?>;
            border-bottom: dotted 1px <?php echo $design3_unfeatured_plan_title_font_color; ?>;
		}
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-unfeatured .ptp-stylish-header {
            background: <?php echo $design3_unfeatured_plan_title_background_color; ?>;
        }
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-unfeatured .ptp-stylish-pricing_button {
			background: <?php echo $design3_unfeatured_button_color; ?>;
		}
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-unfeatured .ptp-stylish-pricing_button:hover {
			background: <?php echo $design3_unfeatured_button_hover_color; ?>;
		}
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-unfeatured .ptp-stylish-pricing_button a {
			color: <?php echo $design3_unfeatured_button_font_color; ?>;
		}
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-unfeatured .ptp-stylish-pricing_button:hover a {
			color: <?php echo $design3_unfeatured_button_hover_font_color;?>;
		}
        #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-unfeatured .ptp-stylish-pricing_button a .has-tip{
            color: <?php echo $design3_unfeatured_button_font_color;?>;
            border-bottom: dotted 1px <?php echo $design3_unfeatured_button_font_color; ?>;
		}
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-unfeatured .ptp-stylish-pricing_button:hover a .has-tip{
            color: <?php echo $design3_unfeatured_button_hover_font_color;?>;
            border-bottom: dotted 1px <?php echo $design3_unfeatured_button_hover_font_color; ?>;
		}
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-unfeatured .ptp-stylish-header strong.price {
			color: <?php echo $design3_unfeatured_plan_price_font_color; ?>;
		}
        #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-unfeatured .ptp-stylish-header strong.price .has-tip{
            color: <?php echo $design3_unfeatured_plan_price_font_color;?>;
            border-bottom: dotted 1px <?php echo $design3_unfeatured_plan_price_font_color; ?>;
		}
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-unfeatured {
			background: <?php echo $design3_unfeatured_feature_background_color; ?>;
		}
		#ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-unfeatured div.ptp-stylish-description .ptp-design3-row {
			color: <?php echo $design3_unfeatured_feature_font_color; ?>;
			text-shadow: none;
			border-bottom: 1px solid <?php echo $design3_unfeatured_feature_border_color;?>;
		}
        #ptp-<?php echo $id; ?>.ptp-stylish-pricingtable .ptp-stylish-unfeatured div.ptp-stylish-description .ptp-design3-row .has-tip {
            color: <?php echo $design3_unfeatured_feature_font_color; ?>;
            border-bottom: dotted 1px <?php echo $design3_unfeatured_feature_font_color; ?>;
        }
	<?php endif; ?>
    /* end of stylish flat #<?php echo $id;?> */
    
    <?php
}

/**
 * Generate our fancy flat pricing table HTML
 * @return [type]                          [description]
 */
function dh_ptp_generate_stylish_flat_pricing_table_html ($id, $hide = false)
{
    global $features_metabox;
    $meta = get_post_meta($id, $features_metabox->get_the_id(), TRUE);
    $post = get_post($id);

    /**
     * the string to be returned that includes the pricing table html
     * @var string
     */
    
    $color_db = array(
        '#456366' => 'blue',
        '#696758' => 'brown',
        '#36393B' => 'darkgrey',
        '#496449' => 'green',
        '#3f4953' => 'ocean',
        '#a64324' => 'orange',
        '#712941' => 'pink',
        '#493c45' => 'purple',
        '#742222' => 'red',
        '#b28d19' => 'yellow'
    );

    // set number of columns
    $number_of_columns;
    switch (count($meta['column'])) {
        case 1:
            $number_of_columns = "ptp-stylish-pricingtable_one";
            break;
        case 2:
            $number_of_columns = "ptp-stylish-pricingtable_two";
            break;
        case 3:
            $number_of_columns = "ptp-stylish-pricingtable_three";
            break;
        case 4:
            $number_of_columns = "ptp-stylish-pricingtable_four";
            break;
        case 5:
            $number_of_columns = "ptp-stylish-pricingtable_five";
            break;
        default:
            $number_of_columns = "ptp-stylish-pricingtable_five";
            break;
    }

	$hide_table = ($hide)?'style="display:none"':'';
    $pricing_table_html = '<div id="ptp-'.$id.'" class="ptp-stylish-pricingtable ' . $number_of_columns . ' ptp-' . $id .'" '.$hide_table.'>';

    // set max number of features
    // beneath code basically helps making empty boxes in case one column has more content than another
    $dh_ptp_max_number_of_features = 0;
    $planfeatures;
    
    // get plan features
    foreach ($meta['column'] as $column)
    {
        if(isset($column['planfeatures'])) {
            $planfeatures = $column['planfeatures'];
            
            // get number of features
            $col_number_of_features = count( explode( "\n", $column['planfeatures'] ) );

            if ($col_number_of_features > $dh_ptp_max_number_of_features) {
                $dh_ptp_max_number_of_features = $col_number_of_features;
            }
        }
    }

    $loop_index = 0;
    foreach ($meta['column'] as $column) {
        
        if(isset($column['planfeatures'])) {
            $planfeatures = $column['planfeatures'];
        } else {
            $planfeatures = '';
        }
        
        // is plan featured
        if(isset($column['feature']) && $column['feature'] == "featured") {
            $most_popular_text = isset($meta['stylish-flat-most-popular-label-text'])?$meta['stylish-flat-most-popular-label-text']:__('Most Popular', PTP_LOC);
        
            $feature = (isset($meta['stylish-flat-expand-featured-item']))?'column_highlight ptp-stylish-featured':'ptp-stylish-featured';
            $color_scheme = $meta['stylish-flat-featured-column-color-scheme'];
            $description = ' <p class="subline">' . dh_ptp_fa_icons($most_popular_text) . '</p>';
        } else {
            $feature = 'ptp-stylish-unfeatured';
            $color_scheme = $meta['stylish-flat-column-color-scheme'];
            $description = '';
        }
        
        // Fetch respected color scheme from color
        $color_scheme = 'ptp-stylish-column_'.(isset($color_db[$color_scheme])?$color_db[$color_scheme]:'blue');
        
        // Get button text
        $button_text = isset($column['buttontext'])?$column['buttontext']:'';

        // Get button url
        $button_url = isset($column['buttonurl'])?$column['buttonurl']:'';

        // get custom shortcode button if any
        $custom_button = false;
        $shortcode_pattern = '|^\[shortcode\](?P<custom_button>.*)\[/shortcode\]$|';
        if ( 
            preg_match( $shortcode_pattern, $button_text, $matches) 
            ||
            preg_match( $shortcode_pattern, $button_url, $matches) 
        ) {
            $custom_button = $matches[ 'custom_button' ];
        }
        
        // Call to action buttons
        $tracking = get_option('dh_ptp_google_analytics');
        $table_name = addslashes($post->post_title)?addslashes($post->post_title):'untitled pricing table';
        $onclick = ($tracking == 1)?dh_ptp_generate_ga_script( $table_name, 'Button clicked' , addslashes($column['planname']) ):"";
        if (isset($meta['stylish-flat-hide-call-to-action-buttons']) && $meta['stylish-flat-hide-call-to-action-buttons']) {
            $call_to_action = ''; 
        } else {
			$open_in_new_tab = (isset($meta['design3-open-link-in-new-tab']) && $meta['design3-open-link-in-new-tab'])?'target="_blank"':'';
			
            $call_to_action =
                '<div class="ptp-stylish-footer">' .
                    '<div id="ptp-'.$id.'-cta-'.$loop_index.'" class="'.(($custom_button)?'ptp-stylish-pricing_button_custom':'ptp-stylish-pricing_button').'">' .
                        (($custom_button)?$custom_button:'<a style="border: 0px none;" href="' . $column['buttonurl'] .'" ' . $open_in_new_tab . ' '.$onclick.'>' . dh_ptp_fa_icons($column['buttontext']) . '</a>') .
                    '</div>' .
                '</div>';
        }
        
		// Hide empty rows
        $hide_empty_rows = isset($meta['design3-hide-empty-rows'])?true:false;
		
        $pricing_table_html .= 
            '<div class="ptp-stylish-column ' . $color_scheme . ' ' . $feature . ' dh-ptp-col-id-' . $loop_index . '">' .
                '<div class="ptp-stylish-header">' .
                    '<div class="ptp-stylish-topheader">' .
                        '<strong class="title">' . dh_ptp_fa_icons($column['planname']) .'</strong> ' .
						$description . 
                    '</div>' .
                    '<div class="ptp-stylish-bottomheader">' .
                        '<strong class="price">' . dh_ptp_fa_icons($column['planprice']) . '</strong>' .
                    '</div>' .
                '</div>' .
                '<div class="ptp-stylish-content">' .
                    '<div class="ptp-stylish-description">' .
                        dh_ptp_features_to_html_stylish_flat($planfeatures, $dh_ptp_max_number_of_features, $hide_empty_rows) .
                    '</div>' .
                    $call_to_action . 
                '</div>' .
            '</div>';
        
        $loop_index++;
    }

    $pricing_table_html .= '<div style="clear:both;"></div>';
    $pricing_table_html .= '</div>';

    return $pricing_table_html;
}

/**
 * Generate HTML code for our features
 * @param  [type] $dh_ptp_plan_features [description]
 * @return [type]                       [description]
 */
function dh_ptp_features_to_html_stylish_flat ($dh_ptp_plan_features, $dh_ptp_max_number_of_features, $hide_empty_rows){

    // the string to be returned
    $dh_ptp_feature_html = "";

    // explode string into a useable array
    $dh_ptp_features = explode("\n", $dh_ptp_plan_features);

    //how many features does this column have?
    $this_columns_number_of_features = count($dh_ptp_features);

    //add each feature to $dh_ptp_feature_html
    for ($iterator=0; $iterator<$dh_ptp_max_number_of_features; $iterator++) {
        if ($iterator < $this_columns_number_of_features && trim($dh_ptp_features[$iterator]) != "") {
            $dh_ptp_feature_html .= '<div class="ptp-design3-row ptp-row-id-'.$iterator.'">' . dh_ptp_fa_icons($dh_ptp_features[$iterator]) . '</div>';
        } else {
			if (!$hide_empty_rows) {
				$dh_ptp_feature_html .= '<div class="ptp-design3-row ptp-row-id-'.$iterator.' tt-ptp-empty-row ">&nbsp;</div>';
			}
        }
    }

    // return the features html
    return $dh_ptp_feature_html;
}

function tt_ptp_enable_column_match_height_script_dg3( $id ) {
     $name_of_called_matchheight_func = "call_match_height_$id";
    ?>
        <script type="text/javascript">
          jQuery(document).ready(function($) {
              jQuery.<?php echo $name_of_called_matchheight_func; ?> = function call_match_height_design3 (ptp_id) {
                                //alert(ptp_id);
                                $( ptp_id+' .ptp-stylish-topheader strong.title').matchHeight(false); 
                                $( ptp_id+' .ptp-stylish-bottomheader').matchHeight(false);
                                $( ptp_id+' .ptp-design3-row').each(function( index ){
                                    $( ptp_id+' .ptp-row-id-'+index).matchHeight(false);

                                  });  
                         }
              var ptp_id = '#ptp-'+<?php echo $id; ?> ;
              $.<?php echo $name_of_called_matchheight_func; ?> ( ptp_id );             
          });
      </script>
      
        <?php
      
}