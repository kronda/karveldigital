<?php

/**
 * holds configuration for all landing page templates
 * these values are loaded in the edit mode of the post, and injected in javascript
 */
/*

documentation on each key:
    [REQUIRED] name => the user-friendly name for the template
    [REQUIRED] tags => an array of keywords that will allow for easier searches (can be empty)
    extended_dropzone_elements => selector for elements that should contain a dropzone if they have no children
    fonts => array of links to custom fonts to include in the <head> section
    custom_color_mappings => extra color pickers to display for the main content area
    icons => an array of icon classes to be merged with (possible) existing icons - use this if the template has some custom icons created with fonts
    has_lightbox => boolean indicating if a lightbox should automatically be created for this landing page
    lightbox => array of lightbox settings. for now: (
        max_width => {val}px
        max_height => {val}px
    hidden_menu_items => array of keys that allows hiding some controls from the Main Content Area menu. possible keys:
        bg_color
        bg_pattern
        bg_image
        max_width
        bg_static
        bg_full_height
        border_radius
    style_family => the default style family for the template. accepted values: Flat | Minimal | Classy
*/

return array(
    'blank' => array(
        'name' => 'Blank Page', //required
        'tags' => array('Simple content'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,800,700,400,300'
        ),
        'custom_color_mappings' => array(
            'landing_page_content' => array(
                'undefined' => array(
                    'Flat' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'opacity' => 1,
                            'value' => '0 0 15px 3px [color]',
                        ),
                    ),
                    'Classy' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'opacity' => 1,
                            'value' => '0 0 15px 3px [color]',
                        ),
                    ),
                    'Minimal' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'opacity' => 1,
                            'value' => '0 0 15px 3px [color]',
                        ),
                    )
                )
            )
        ),
        'style_family' => 'Flat',
    ),
    'big_picture' => array(
        'name' => 'Big Picture', //required
        'tags' => array('1-step', 'lead generation'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
        ),
        'style_family' => 'Classy',
    ),
    'big_picture_confirmation' => array(
        'name' => 'Big Confirmation Page', //required
        'tags' => array('confirmation page'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
        ),
        'icons' => array(
            'big-picture-mail-go', 'big-picture-mail-open', 'big-picture-mail-click'
        ),
        'style_family' => 'Classy',
    ),
    'big_picture_download' => array(
        'name' => 'Big Picture Download Page', //required
        'tags' => array('download'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
        ),
        'style_family' => 'Classy',
    ),
    'big_picture_video' => array(
        'name' => 'Big Picture Video Page', //required
        'tags' => array('1-step', 'lead generation', 'video'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
        ),
        'icons' => array(
            'big-picture-icon-download', 'big-picture-icon-video', 'big-picture-icon-customization'
        ),
        'style_family' => 'Classy',
    ),
    'big_picture_coming_soon' => array(
        'name' => 'Big Picture Coming Soon', //required
        'tags' => array('coming soon', '1-step', 'lead generation'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
            '//fonts.googleapis.com/css?family=Open+Sans:700'
        ),
        'style_family' => 'Classy',
    ),
    'big_picture_sales_page' => array(
        'name' => 'Big Picture Sales Page', //required
        'tags' => array('sales page', 'long form'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
        ),
        'style_family' => 'Flat',
    ),
    'video_lead' => array(
        'name' => 'Vision', //required
        'tags' => array('lead generation', 'video', '2-step'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Roboto:300italic,300,700italic,700'
        ),
        'has_lightbox' => true,
        'lightbox' => array(
            'max_width' => '800px',
            'max_height' => '650px'
        ),
        'style_family' => 'Classy',
    ),
    'vision-1step' => array(
        'name' => 'Vision 1-Step Page', //required
        'tags' => array('lead generation', '1-step'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Roboto:300italic,300,700italic,700'
        ),
        'style_family' => 'Classy',
    ),
    'vision_download' => array(
	    'name' => 'Vision Download Page', //required
	    'tags' => array('download'),
	    'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
	    'fonts' => array(
		    '//fonts.googleapis.com/css?family=Roboto:300italic,300,700italic,700,100'
	    ),
	    'icons' => array(
		    'tve_icon-download'
	    ),
        'style_family' => 'Classy',
    ),
    'vision_confirmation' => array(
	    'name' => 'Vision Confirmation', //required
	    'tags' => array('confirmation page'),
	    'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
	    'fonts' => array(
		    '//fonts.googleapis.com/css?family=Roboto:300italic,300,700italic,700,100'
	    ),
	    'icons' => array(
		    'vision-confirmation-mail', 'vision-confirmation-mailopen', 'vision-confirmation-link', 'vision-confirmation-download'
	    ),
        'style_family' => 'Flat',
    ),
    'lead_generation' => array(
        'name' => 'Simple', //required
        'tags' => array('2-step', 'lead generation'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Raleway:300,400,500'
        ),
        'has_lightbox' => true,
        'lightbox' => array(
            'max_width' => '600px',
            'max_height' => '600px'
        ),
        'style_family' => 'Classy',
    ),
    'simple_confirmation_page' => array(
        'name' => 'Simple Confirmation Page', //required
        'tags' => array('confirmation page'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Raleway:300,400,500',
            '//fonts.googleapis.com/css?family=Open+Sans:300'
        ),
        'hidden_menu_items' => array(
            'max_width', 'bg_full_height', 'border_radius'
        ),
        'style_family' => 'Classy',
    ),
    'simple_download_page' => array(
	    'name' => 'Simple Download Page', //required
	    'tags' => array('download page'),
	    'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
	    'fonts' => array(
		    '//fonts.googleapis.com/css?family=Raleway:300,400,500'
	    ),
        'hidden_menu_items' => array(
            'max_width', 'bg_full_height', 'border_radius'
        ),
        'style_family' => 'Classy',
    ),
    'simple_video_lead' => array(
        'name' => 'Simple Video Lead', //required
        'thumbnail' => 'simple-video-lead.png', //required
        'tags' => array('lead generation', '1-step', 'video'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Raleway:300,400,500'
        ),
        'style_family' => 'Classy',
    ),
    'lead_generation_flat' => array(
        'name' => 'Flat', //required
        'tags' => array('lead generation', '2-step'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,900italic'
        ),
        'has_lightbox' => true,
        'lightbox' => array(
            'max_width' => '800px',
            'max_height' => '600px'
        ),
        'style_family' => 'Flat',
    ),
    'flat_confirmation' => array(
        'name' => 'Flat Confirmation',
        'tags' => array('confirmation page'),
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic',
        ),
        'icons' => array(
            'flat-confirmation-icon
            -envelop', 'flat-confirmation-icon-envelop-opened', 'flat-confirmation-icon-pointer', 'flat-confirmation-icon-checkmark-circle'
        ),
        'style_family' => 'Flat',
    ),
    'flat_download' => array(
        'name' => 'Flat Download',
        'tags' => array('download page'),
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic',
        ),
        'icons' => array(
            'flat-download-icon-download'
        ),
        'style_family' => 'Flat',
    ),
    'lead_generation_image' => array(
        'name' => 'Rockstar', //required
        'tags' => array('1-step', 'lead generation'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Roboto:300,900,300italic,900italic'
        ),
        'style_family' => 'Flat',
    ),
    'rockstar_confirmation' => array(
        'name' => 'Rockstar Confirmation', //required
        'tags' => array('confirmation page'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Roboto:300,500,700,300italic'
        ),
        'hidden_menu_items' => array(
            'max_width', 'bg_full_height', 'border_radius'
        ),
        'icons' => array(
            'rockstar-icon-email', 'rockstar-icon-file', 'rockstar-icon-mouse'
        ),
        'style_family' => 'Flat',
    ),
    'rockstar_download' => array(
        'name' => 'Rockstar Download', //required
        'tags' => array('download page'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Roboto:300,900,300italic,900italic'
        ),
        'hidden_menu_items' => array(
            'max_width', 'bg_full_height', 'border_radius'
        ),
        'style_family' => 'Flat',
    ),
    'mini_squeeze' => array(
        'name' => 'Mini Squeeze',
        'tags' => array('1-step', 'lead generation'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Roboto:300italic,300,700italic,700'
        ),
        'style_family' => 'Flat',
    ),
    'mini_squeeze_download' => array(
        'name' => 'Mini Squeeze Download',
        'tags' => array('download page'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Roboto:300italic,300,700italic,700'
        ),
        'icons' => array(
            'mini-squeeze-download-icon'
        ),
        'style_family' => 'Flat',
    ),
    'mini_squeeze_confirmation' => array(
        'name' => 'Mini Squeeze Confirmation',
        'tags' => array('confirmation page'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Roboto:300italic,300,700italic,700'
        ),
        'style_family' => 'Flat',
    ),
    'minimal_video_offer_page' => array(
        'name' => 'Serene',
        'tags' => array('sales page', 'video'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Roboto:300italic,300,700italic,700'
        ),
        'icons' => array(
            'minimal-video-offer-download'
        ),
        'has_lightbox' => true,
        'lightbox' => array(
            'max_width' => '495px',
            'max_height' => '540px'
        ),
        'style_family' => 'Flat',
    ),
    'serene_download_page' => array(
        'name' => 'Serene Download Page',
        'tags' => array('download page'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700'
        ),
        'icons' => array(
            'serene-downloadpage-download', 'serene-downloadpage-heart'
        ),
        'hidden_menu_items' => array(
            'max_width', 'bg_full_height', 'border_radius'
        ),
        'style_family' => 'Flat',
    ),
    'serene_lead_generation_page' => array(
        'name' => 'Serene Lead Generation Page',
        'tags' => array('1-step', 'lead generation'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700'
        ),
        'icons' => array(
            'serene-leadgeneration-download'
        ),
        'style_family' => 'Flat',
    ),
    'copy_sales_page' => array(
        'name' => 'Copy Sales Page',
        'tags' => array('sales page', 'long form'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100',
            '//fonts.googleapis.com/css?family=Raleway:300,400,500'
        ),
        'icons' => array(
            'copy-salespage-file', 'copy-salespage-map', 'copy-salespage-chart'
        ),
        'custom_color_mappings' => array(
            'landing_page_content' => array(
                'undefined' => array(
                    'Flat' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    ),
                    'Classy' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    ),
                    'Minimal' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    )
                )
            )
        ),
        'style_family' => 'Classy',
    ),
    'copy_download' => array(
        'name' => 'Copy Download Page',
        'tags' => array('download'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100',
            '//fonts.googleapis.com/css?family=Raleway:300,400,500'
        ),
        'style_family' => 'Classy',
    ),
    'copy_video_lead' => array(
        'name' => 'Copy Video Lead',
        'tags' => array('video', 'lead generation', '2-step'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100',
            '//fonts.googleapis.com/css?family=Raleway:300,400,500'
        ),
        'has_lightbox' => true,
        'lightbox' => array(
            'max_width' => '800px',
            'max_height' => '610px'
        ),
        'style_family' => 'Classy',
    ),
    'foundation_lead_generation' => array(
        'name' => 'Foundation Lead Generation',
        'tags' => array('lead generation', '1-step'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Ek+Mukta:200,400,700'
        ),
        'custom_color_mappings' => array(
            'landing_page_content' => array(
                'undefined' => array(
                    'Flat' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '2px 2px 10px 0px [color]',
                        ),
                    ),
                    'Classy' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '2px 2px 10px 0px [color]',
                        ),
                    ),
                    'Minimal' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '2px 2px 10px 0px [color]',
                        ),
                    )
                )
            )
        ),
        'style_family' => 'Classy',
    ),
    'foundation_personal_branding_confirmation' => array(
        'name' => 'Personal Branding Confirmation',
        'tags' => array('confirmation page', 'video', 'personal branding'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Ek+Mukta:200,300,500,600'
        ),
        'custom_color_mappings' => array(
            'landing_page_content' => array(
                'undefined' => array(
                    'Flat' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '2px 2px 10px 0px [color]',
                        ),
                    ),
                    'Classy' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '2px 2px 10px 0px [color]',
                        ),
                    ),
                    'Minimal' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '2px 2px 10px 0px [color]',
                        ),
                    )
                )
            )
        ),
        'style_family' => 'Classy',
    ),
    'foundation_personal_branding_download' => array(
        'name' => 'Personal Branding Download',
        'tags' => array('download page', 'personal branding'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Ek+Mukta:200,300,500,600'
        ),
        'icons' => array(
            'foundation-download-icon-download'
        ),
        'custom_color_mappings' => array(
            'landing_page_content' => array(
                'undefined' => array(
                    'Flat' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '2px 2px 10px 0px [color]',
                        ),
                    ),
                    'Classy' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '2px 2px 10px 0px [color]',
                        ),
                    ),
                    'Minimal' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '2px 2px 10px 0px [color]',
                        ),
                    )
                )
            )
        ),
        'style_family' => 'Classy',
    ),
    'foundation_personal_branding_lead' => array(
        'name' => 'Personal Branding Lead Generation',
        'tags' => array('lead generation', '1-step', 'personal branding'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Ek+Mukta:200,300,500,600'
        ),
        'custom_color_mappings' => array(
            'landing_page_content' => array(
                'undefined' => array(
                    'Flat' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '2px 2px 10px 0px [color]',
                        ),
                    ),
                    'Classy' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '2px 2px 10px 0px [color]',
                        ),
                    ),
                    'Minimal' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '2px 2px 10px 0px [color]',
                        ),
                    )
                )
            )
        ),
        'style_family' => 'Classy',
    ),
    'foundation_personal_branding_welcome' => array(
        'name' => 'Personal Branding Welcome',
        'tags' => array('personal branding'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Ek+Mukta:200,300,500,600'
        ),
        'custom_color_mappings' => array(
            'landing_page_content' => array(
                'undefined' => array(
                    'Flat' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '2px 2px 10px 0px [color]',
                        ),
                    ),
                    'Classy' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '2px 2px 10px 0px [color]',
                        ),
                    ),
                    'Minimal' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '2px 2px 10px 0px [color]',
                        ),
                    )
                )
            )
        ),
        'style_family' => 'Classy',
    ),
    'foundation_personal_branding_2step' => array(
        'name' => 'Personal Branding 2-Step',
        'tags' => array('lead generation', '2-step', 'personal branding'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Ek+Mukta:200,300,500,600'
        ),
        'has_lightbox' => true,
        'lightbox' => array(
            'max_width' => '720px',
            'max_height' => '610px'
        ),
        'custom_color_mappings' => array(
            'landing_page_content' => array(
                'undefined' => array(
                    'Flat' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '2px 2px 10px 0px [color]',
                        ),
                    ),
                    'Classy' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '2px 2px 10px 0px [color]',
                        ),
                    ),
                    'Minimal' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '2px 2px 10px 0px [color]',
                        ),
                    )
                )
            )
        ),
        'style_family' => 'Classy',
    ),
//    'vibrant_double_whammy' => array(
//        'name' => 'Vibrant Double Whammy Webinar',
//        'tags' => array('webinar', '2-step'),
//        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
//        'fonts' => array(
//            '//fonts.googleapis.com/css?family=Open+Sans:700',
//            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
//            '//fonts.googleapis.com/css?family=Raleway:300,600'
//        ),
//        'icons' => array(
//            'vibrant_whammy_icon_clock'
//        ),
//        'has_lightbox' => true,
//        'lightbox' => array(
//            'max_width' => '850px',
//            'max_height' => '440px'
//        ),
//        'custom_color_mappings' => array(
//            'landing_page_content' => array(
//                'undefined' => array(
//                    'Flat' => array(
//                        array(
//                            'label' => 'Shadow color',
//                            'selector' => '.tve_lp_content',
//                            'search_outside' => 1, // global selector, do not search inside edit_mode
//                            'property' => 'box-shadow',
//                            'value' => '0 0 15px 3px [color]',
//                        ),
//                    ),
//                    'Classy' => array(
//                        array(
//                            'label' => 'Shadow color',
//                            'selector' => '.tve_lp_content',
//                            'search_outside' => 1, // global selector, do not search inside edit_mode
//                            'property' => 'box-shadow',
//                            'value' => '0 0 15px 3px [color]',
//                        ),
//                    ),
//                    'Minimal' => array(
//                        array(
//                            'label' => 'Shadow color',
//                            'selector' => '.tve_lp_content',
//                            'search_outside' => 1, // global selector, do not search inside edit_mode
//                            'property' => 'box-shadow',
//                            'value' => '0 0 15px 3px [color]',
//                        ),
//                    )
//                )
//            )
//        ),
//        'style_family' => 'Classy',
//    ),
    'vibrant_download_page' => array(
        'name' => 'Vibrant Download Page',
        'tags' => array('download'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Open+Sans:700',
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
            '//fonts.googleapis.com/css?family=Raleway:300,600'
        ),
        'icons' => array(
            'vibrant_download_icon'
        ),
        'custom_color_mappings' => array(
            'landing_page_content' => array(
                'undefined' => array(
                    'Flat' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    ),
                    'Classy' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    ),
                    'Minimal' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    )
                )
            )
        ),
        'style_family' => 'Classy',
    ),
    'vibrant_email_confirmation' => array(
        'name' => 'Vibrant Email Confirmation',
        'tags' => array('confirmation page'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Open+Sans:700',
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
            '//fonts.googleapis.com/css?family=Raleway:300,600'
        ),
        'icons' => array(
            'vibrant_email_arrow', 'vibrant_email_download'
        ),
        'custom_color_mappings' => array(
            'landing_page_content' => array(
                'undefined' => array(
                    'Flat' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    ),
                    'Classy' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    ),
                    'Minimal' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    )
                )
            )
        ),
        'style_family' => 'Classy',
    ),
    'vibrant_lead_generation' => array(
        'name' => 'Vibrant Lead Generation',
        'tags' => array('confirmation page'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Open+Sans:700',
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
            '//fonts.googleapis.com/css?family=Raleway:300,600'
        ),
        'has_lightbox' => true,
        'lightbox' => array(
            'max_width' => '850px',
            'max_height' => '440px'
        ),
        'custom_color_mappings' => array(
            'landing_page_content' => array(
                'undefined' => array(
                    'Flat' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    ),
                    'Classy' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    ),
                    'Minimal' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    )
                )
            )
        ),
        'style_family' => 'Classy',
    ),
    'vibrant_live_streaming_page' => array(
        'name' => 'Vibrant Live Streaming Page',
        'tags' => array('webinar', 'live streaming', 'video'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Open+Sans:700',
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
            '//fonts.googleapis.com/css?family=Raleway:300,600'
        ),
        'custom_color_mappings' => array(
            'landing_page_content' => array(
                'undefined' => array(
                    'Flat' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    ),
                    'Classy' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    ),
                    'Minimal' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    )
                )
            )
        ),
        'style_family' => 'Classy',
    ),
    'vibrant_sales_page' => array(
        'name' => 'Vibrant Sales Page',
        'tags' => array('sales page', 'long form'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Open+Sans:700',
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
            '//fonts.googleapis.com/css?family=Raleway:300,600'
        ),
        'icons' => array(
            'vibrant-sales-download', 'vibrant-sales-gear', 'vibrant-sales-chart', 'vibrant-sales-lock', 'vibrant-sales-plug',
            'vibrant-sales-modem', 'vibrant-sales-heart', 'vibrant-sales-briefcase', 'vibrant-sales-people', 'vibrant-sales-arrow'
        ),
        'custom_color_mappings' => array(
            'landing_page_content' => array(
                'undefined' => array(
                    'Flat' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    ),
                    'Classy' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    ),
                    'Minimal' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    )
                )
            )
        ),
        'style_family' => 'Classy',
    ),
    'vibrant_video_sales_page' => array(
        'name' => 'Vibrant Video Sales Page',
        'tags' => array('sales page', 'video'),
        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Open+Sans:700',
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
            '//fonts.googleapis.com/css?family=Raleway:300,600'
        ),
        'custom_color_mappings' => array(
            'landing_page_content' => array(
                'undefined' => array(
                    'Flat' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    ),
                    'Classy' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    ),
                    'Minimal' => array(
                        array(
                            'label' => 'Shadow color',
                            'selector' => '.tve_lp_content',
                            'search_outside' => 1, // global selector, do not search inside edit_mode
                            'property' => 'box-shadow',
                            'value' => '0 0 15px 3px [color]',
                        ),
                    )
                )
            )
        ),
        'style_family' => 'Classy',
    ),
//    'vibrant_webinar_registration' => array(
//        'name' => 'Vibrant Webinar Registration',
//        'tags' => array('webinar', '2-step'),
//        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
//        'fonts' => array(
//            '//fonts.googleapis.com/css?family=Open+Sans:700',
//            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
//            '//fonts.googleapis.com/css?family=Raleway:300,600'
//        ),
//        'icons' => array(
//            'vibrant_whammy_icon_clock'
//        ),
//        'has_lightbox' => true,
//        'lightbox' => array(
//            'max_width' => '580px',
//            'max_height' => '440px'
//        ),
//        'custom_color_mappings' => array(
//            'landing_page_content' => array(
//                'undefined' => array(
//                    'Flat' => array(
//                        array(
//                            'label' => 'Shadow color',
//                            'selector' => '.tve_lp_content',
//                            'search_outside' => 1, // global selector, do not search inside edit_mode
//                            'property' => 'box-shadow',
//                            'value' => '0 0 15px 3px [color]',
//                        ),
//                    ),
//                    'Classy' => array(
//                        array(
//                            'label' => 'Shadow color',
//                            'selector' => '.tve_lp_content',
//                            'search_outside' => 1, // global selector, do not search inside edit_mode
//                            'property' => 'box-shadow',
//                            'value' => '0 0 15px 3px [color]',
//                        ),
//                    ),
//                    'Minimal' => array(
//                        array(
//                            'label' => 'Shadow color',
//                            'selector' => '.tve_lp_content',
//                            'search_outside' => 1, // global selector, do not search inside edit_mode
//                            'property' => 'box-shadow',
//                            'value' => '0 0 15px 3px [color]',
//                        ),
//                    )
//                )
//            )
//        ),
//        'style_family' => 'Classy',
//    ),
//    'vibrant_webinar_replay' => array(
//        'name' => 'Vibrant Webinar Replay',
//        'tags' => array('webinar', 'video'),
//        'extended_dropzone_elements' => '.tve_lp_header, .tve_lp_content, .tve_lp_footer',
//        'fonts' => array(
//            '//fonts.googleapis.com/css?family=Open+Sans:700',
//            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
//            '//fonts.googleapis.com/css?family=Raleway:300,600'
//        ),
//        'custom_color_mappings' => array(
//            'landing_page_content' => array(
//                'undefined' => array(
//                    'Flat' => array(
//                        array(
//                            'label' => 'Shadow color',
//                            'selector' => '.tve_lp_content',
//                            'search_outside' => 1, // global selector, do not search inside edit_mode
//                            'property' => 'box-shadow',
//                            'value' => '0 0 15px 3px [color]',
//                        ),
//                    ),
//                    'Classy' => array(
//                        array(
//                            'label' => 'Shadow color',
//                            'selector' => '.tve_lp_content',
//                            'search_outside' => 1, // global selector, do not search inside edit_mode
//                            'property' => 'box-shadow',
//                            'value' => '0 0 15px 3px [color]',
//                        ),
//                    ),
//                    'Minimal' => array(
//                        array(
//                            'label' => 'Shadow color',
//                            'selector' => '.tve_lp_content',
//                            'search_outside' => 1, // global selector, do not search inside edit_mode
//                            'property' => 'box-shadow',
//                            'value' => '0 0 15px 3px [color]',
//                        ),
//                    )
//                )
//            )
//        ),
//        'style_family' => 'Classy',
//    ),
    'fame-2step' => array(
        'name' => 'Fame 2-Step Lead Gen', //required
        'tags' => array('2-step', 'lead generation'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Roboto:400,100,500,700,100italic'
        ),
        'hidden_menu_items' => array(
            'max_width', 'bg_full_height', 'border_radius'
        ),
        'style_family' => 'Minimal',
        'has_lightbox' => true,
        'lightbox' => array(
            'max_width' => '530px',
            'max_height' => '420px'
        ),
    ),
    'fame-coming-soon' => array(
        'name' => 'Fame Coming Soon', //required
        'tags' => array('coming soon', '1-step'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Roboto:400,100,500,700,100italic'
        ),
        'hidden_menu_items' => array(
            'max_width', 'bg_full_height', 'border_radius'
        ),
        'style_family' => 'Minimal',
    ),
    'fame-confirmation' => array(
        'name' => 'Fame Confirmation', //required
        'tags' => array('confirmation page'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Roboto:400,100,500,700,100italic'
        ),
        'hidden_menu_items' => array(
            'max_width', 'bg_full_height', 'border_radius'
        ),
        'style_family' => 'Minimal',
    ),
    'fame-download' => array(
        'name' => 'Fame Download', //required
        'tags' => array('download page'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Roboto:400,100,500,700,100italic'
        ),
        'hidden_menu_items' => array(
            'max_width', 'bg_full_height', 'border_radius'
        ),
        'style_family' => 'Minimal',
    ),
    'fame-minimal-lead-gen' => array(
        'name' => 'Fame Minimal Lead Generation', //required
        'tags' => array('lead generation', '1-step'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Roboto:400,100,500,700,100italic'
        ),
        'hidden_menu_items' => array(
            'max_width', 'bg_full_height', 'border_radius'
        ),
        'icons' => array(
            'fame-icon-facebook', 'fame-icon-twitter', 'fame-icon-google'
        ),
        'style_family' => 'Minimal',
    ),
//    'fame-multiple-choice' => array(
//        'name' => 'Fame Multiple Choice', //required
//        'tags' => array('2-step', 'lead generation', 'multiple choice'),
//        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
//        'fonts' => array(
//            '//fonts.googleapis.com/css?family=Roboto:400,100,500,700,100italic',
//            '//fonts.googleapis.com/css?family=Playball'
//        ),
//        'hidden_menu_items' => array(
//            'max_width', 'bg_full_height', 'border_radius'
//        ),
//        'style_family' => 'Flat',
//        'has_lightbox' => true,
//        'lightbox' => array(
//            'max_width' => '836px',
//            'max_height' => '458px'
//        ),
//    ),
    'fame-video-sales' => array(
        'name' => 'Fame Video Sales Page', //required
        'tags' => array('video', 'sales page'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
        ),
        'hidden_menu_items' => array(
            'max_width', 'bg_full_height', 'border_radius'
        ),
        'style_family' => 'Minimal',
    ),
    'lime-lead-generation-page' => array(
        'name' => 'Lime Lead Generation Page', //required
        'tags' => array('lead generation'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
        ),
        'hidden_menu_items' => array(
            'max_width', 'bg_full_height', 'border_radius'
        ),
        'has_lightbox' => true,
        'lightbox' => array(
            'max_width' => '520px',
            'max_height' => '650px'
        ),
        'style_family' => 'Minimal',
    ),
    'lime-lead-generation-page2' => array(
        'name' => 'Lime Lead Generation Page2', //required
        'tags' => array('lead generation'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
        ),
        'hidden_menu_items' => array(
            'max_width', 'bg_full_height', 'border_radius'
        ),
        'style_family' => 'Minimal',
    ),
    'lime-coming-soon' => array(
        'name' => 'Lime Coming Soon Page', //required
        'tags' => array('coming soon'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
        ),
        'hidden_menu_items' => array(
            'max_width', 'bg_full_height', 'border_radius'
        ),
        'style_family' => 'Minimal',
    ),
    'lime-confirmation-page' => array(
        'name' => 'Lime Confirmation Page', //required
        'tags' => array('confirmation page'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
        ),
        'hidden_menu_items' => array(
            'max_width', 'bg_full_height', 'border_radius'
        ),
        'style_family' => 'Minimal',
    ),
    'lime-download-page' => array(
        'name' => 'Lime Download Page', //required
        'tags' => array('download page'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
        ),
        'hidden_menu_items' => array(
            'max_width', 'bg_full_height', 'border_radius'
        ),
        'style_family' => 'Minimal',
    ),
    'lime-video-lesson' => array(
        'name' => 'Lime Video Lesson Page', //required
        'tags' => array('video', 'course content'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
        ),
        'hidden_menu_items' => array(
            'max_width', 'bg_full_height', 'border_radius'
        ),
        'style_family' => 'Minimal',
        'icons' => array(
            'lime-icon-lock'
        ),
    ),
    'lime-sales-page' => array(
        'name' => 'Lime Sales Page', //required
        'tags' => array('sales page', 'video'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
        ),
        'hidden_menu_items' => array(
            'max_width', 'bg_full_height', 'border_radius'
        ),
        'style_family' => 'Minimal',
    ),
    'lime-video-sales-page' => array(
        'name' => 'Lime Video Sales Page', //required
        'tags' => array('sales page', 'video'),
        'extended_dropzone_elements' => '.tve_lp_content, .tve_lp_header, .tve_lp_footer',
        'fonts' => array(
            '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
        ),
        'hidden_menu_items' => array(
            'max_width', 'bg_full_height', 'border_radius'
        ),
        'style_family' => 'Minimal',
    ),
);

