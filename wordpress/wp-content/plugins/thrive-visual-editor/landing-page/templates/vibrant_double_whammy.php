<?php
$timezone_offset = get_option('gmt_offset');
$sign = ($timezone_offset < 0 ? '-' : '+');
$min = abs($timezone_offset) * 60;
$hour = floor($min / 60);
$tzd = $sign . str_pad($hour, 2, '0', STR_PAD_LEFT) . ':' . str_pad($min % 60, 2, '0', STR_PAD_LEFT);

$tve_globals = tve_get_post_meta(get_the_ID(), 'tve_globals', true);
$events_config = array(
    array(
        't' => 'click',
        'a' => 'thrive_lightbox',
        'config' => array(
            'l_id' => empty($tve_globals['lightbox_id']) ? '' : $tve_globals['lightbox_id'],
            'l_anim' => 'slide_top'
        )
    )
);
?>

<?php /* flat style family */ ?>
<div class="tve_lp_header tve_empty_dropzone tve_content_width">
</div>

<div class="tve_lp_content tve_editor_main_content tve_empty_dropzone thrv_wrapper tve_no_drag"
     style="margin-top: 50px; max-width: 1180px; background-attachment: scroll;">
<div class="thrv_wrapper thrv_columns tve_clearfix" style="margin-top: 0;">
    <div class="tve_colm tve_tfo tve_df">
        <h1 style="color: #333333;font-size: 56px;margin-top: 0;">
            Best-Selling Author Reveals:
            <font color="f58000">
                5 Simple Strategies to Boost
            </font>
            Your Productivity
        </h1>
    </div>
    <div class="tve_colm  tve_foc tve_ofo tve_df tve_lst">
        <div class="thrv_wrapper thrv_columns">
            <div class="tve_colm tve_twc">
                <p style="color: #333; margin-bottom: 0; margin-top: 30px;padding-bottom: 0;">
                    Hosted by:
                </p>

                <p style="color: #333;margin-top: 0;padding-bottom: 0;">
                    <span class="bold_text">Steve Blake</span>
                </p>
            </div>
            <div class="tve_colm tve_twc tve_lst">
                <div style="width: 112px; margin: 0;" class="thrv_wrapper tve_image_caption img_style_framed">
                        <span class="tve_image_frame">
                            <a href="">
                                <img class="tve_image"
                                     src="<?php echo TVE_LANDING_PAGE_TEMPLATE . '/css/images/shane_melaugh.jpg' ?>"
                                     style="width: 112px"/>
                            </a>
                        </span>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="thrv_wrapper thrv_page_section" data-tve-style="1">
    <div class="out" style="background-color: #459285">
        <div class="in lightSec">
            <div class="cck tve_clearfix">
                <div class="thrv_wrapper thrv_contentbox_shortcode" data-tve-style="6">
                    <div class="tve_cb tve_cb6 tve_teal">
                        <div class="tve_cb_cnt">
                            <div class="thrv_wrapper thrv_columns tve_clearfix" style="margin-top: 0;margin-bottom: 0;">
                                <div class="tve_colm tve_oth">
                                    <div style="width: 22px; margin: 50px 0 0 0;"
                                         class="thrv_wrapper tve_image_caption alignright">
                                            <span class="tve_image_frame">
                                                <img class="tve_image plus_icon"
                                                     src="<?php echo TVE_LANDING_PAGE_TEMPLATE . '/css/images/plus_icon.png' ?>"
                                                     style="width: 22px"/>
                                            </span>
                                    </div>
                                    <h4 class="tve_p_center" style="color: #333333; font-size: 30px;margin-top: 18px;margin-bottom: 30px;">
                                        <font color="#f58000">&nbsp;&nbsp;&nbsp;*FREE LIVE*</font><br/>WEBINAR
                                    </h4>
                                </div>
                                <div class="tve_colm tve_tth tve_lst">
                                    <div style="width: 118px; margin: 0px 20px 0 0;"
                                         class="thrv_wrapper tve_image_caption alignright">
                                            <span class="tve_image_frame">
                                                <img class="tve_image file_icon"
                                                     src="<?php echo TVE_LANDING_PAGE_TEMPLATE . '/css/images/whammy_file.png' ?>"
                                                     style="width: 118px"/>
                                            </span>
                                    </div>
                                    <h4 style="color: #333333; margin-top: 40px; margin-left: 20px; font-size:30px">"The Productivity Cheat-Sheet"</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="thrv_wrapper thrv_button_shortcode tve_fullwidthBtn" data-tve-style="1">
                    <div class="tve_btn tve_btn3 tve_nb tve_orange tve_bigBtn" style="margin-top: 20px;">
                        <a class="tve_btnLink tve_evt_manager_listen" href="" data-tcb-events="__TCB_EVENT_<?php echo htmlentities(json_encode($events_config)) ?>_TNEVE_BCT__">
                                <span class="tve_left tve_btn_im">
                                    <i></i>
                                    <span class="tve_btn_divider"></span>
                                </span>
                            <span class="tve_btn_txt">Claim Your Spot On the Free Webinar Now! &GT;&GT;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="thrv_wrapper thrv_page_section" data-tve-style="1">
    <div class="out" style="background-color: #f2f2f2">
        <div class="in darkSec">
            <div class="cck tve_clearfix">
                <div class="thrv_wrapper thrv_columns" style="margin-top: 0;margin-bottom: 0;">
                    <div class="tve_colm tve_twc">
                        <div class="thrv_wrapper thrv_columns tve_clearfix" style="margin-top: 0;">
                            <div class="tve_colm tve_oth">
                                <div class="thrv_wrapper thrv_contentbox_shortcode" data-tve-style="1">
                                    <div class="tve_cb tve_cb1 tve_teal">
                                        <div class="tve_hd tve_cb_cnt">
                                            <h3 style="color: #fff;">
                                                October
                                            </h3>
                                            <span></span>
                                        </div>
                                        <div class="tve_cb_cnt">
                                            <p class="tve_p_center"
                                               style="color: #333333; font-size: 72px;margin-bottom: 0;margin-top: 0;padding-bottom: 0;">
                                                <span class="bold_text">10</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tve_colm tve_tth tve_lst">
                                <p style="color: #333; font-size: 24px; margin-top: 20px; margin-bottom: 20px; line-height: 30px;padding-bottom: 0;">
                                    It’s
                                    happening <span class="bold_text">THIS Friday <br/>(October 10th) at...</span>
                                </p>

                                <div style="font-size: 16px; color: #333333;"
                                     class="thrv_wrapper thrv_icon alignleft">
                                        <span style="margin-top: 5px; margin-right: 5px;"
                                              class="tve_sc_icon vibrant_whammy_icon_clock"
                                              data-tve-icon="vibrant_whammy_icon_clock"></span>
                                </div>
                                <p style="color: #333333; font-size: 18px;padding-bottom: 0;"><span
                                        class="bold_text">at 12pm GMT</span> (London)</p>
                            </div>
                        </div>
                    </div>
                    <div class="tve_colm tve_twc tve_lst">
                        <p style="color: #333333; font-size: 24px; margin-top: 20px;margin-bottom: 0;padding-bottom: 0;">Time
                            left:</p>

                        <div class="thrv_wrapper thrv_countdown_timer tve_cd_timer_plain tve_clearfix init_done"
                             data-date="2020-10-18"
                             data-hour="17"
                             data-min="31"
                             data-timezone="<?php echo $tzd ?>">
                            <div class="sc_timer_content tve_clearfix" style="margin-top: -10px;">
                                <div class="tve_t_day tve_t_part">
                                    <div class="t-digits"></div>
                                    <div class="t-caption">Days</div>
                                </div>
                                <div class="tve_t_hour tve_t_part">
                                    <div class="t-digits"></div>
                                    <div class="t-caption">Hours</div>
                                </div>
                                <div class="tve_t_min tve_t_part">
                                    <div class="t-digits"></div>
                                    <div class="t-caption">Minutes</div>
                                </div>
                                <div class="tve_t_sec tve_t_part">
                                    <div class="t-digits"></div>
                                    <div class="t-caption">Seconds</div>
                                </div>
                                <div class="tve_t_text"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="thrv_wrapper thrv_page_section separator_ps" data-tve-style="1">
    <div class="out" style="">
        <div class="in lightSec pddbg"
             style="background-image: url('<?php echo TVE_LANDING_PAGE_TEMPLATE . "/css/images/whammy_sep.png" ?>');
                 box-shadow: none; box-sizing: border-box;max-width: 100vw;" data-width="1170" data-height="15">
            <div class="cck tve_clearfix">
            </div>
        </div>
    </div>
</div>
<h1 style="margin-top: 70px;">On this <font color="#f58000">FREE</font> Webinar You Will Discover...</h1>
<ol class="thrv_wrapper" style="margin-top: 50px;">
    <li class="">This is Photoshop's version of Lorem Ipsum. Proin
        gravida nibh vel velit auctor aliquet. Sed non
        neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc.
    </li>
    <li class="">Aenean sollicitudin, lorem quis bibendum auctor, nisi
        elit consequat ipsum, nec sagittis sem nibh
        id elit.
    </li>
    <li class="">This is Photoshop's version of Lorem Ipsum. Proin
        gravida nibh vel velit auctor aliquet. Aenean
        sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
    </li>
    <li class="">
        Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat
        consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
    </li>
</ol>
<div class="thrv_wrapper thrv_page_section tve_corner_ps" data-tve-style="1">
    <div class="out" style="background-color: #58a396">
        <div class="in lightSec">
            <div class="cck tve_clearfix">
                <p class="tve_p_center" style="color: #fff; margin-bottom: 10px;padding-bottom: 0;">
                    <span class="bold_text"> *Aenean sollicitudin, lorem quis bibendum auctor. <span
                            class="underline_text">Nisi elit consequat ipsum!</span>*</span></p>
            </div>
        </div>
    </div>
</div>
<div class="thrv_wrapper thrv_button_shortcode tve_fullwidthBtn" data-tve-style="1">
    <div class="tve_btn tve_btn3 tve_nb tve_orange tve_bigBtn" style="margin-top: 0px;">
        <a class="tve_btnLink tve_evt_manager_listen" href="" data-tcb-events="__TCB_EVENT_<?php echo htmlentities(json_encode($events_config)) ?>_TNEVE_BCT__">
                                <span class="tve_left tve_btn_im">
                                    <i></i>
                                    <span class="tve_btn_divider"></span>
                                </span>
            <span class="tve_btn_txt">Claim Your Spot On the Free Webinar Now! &GT;&GT;</span>
        </a>
    </div>
</div>
<p style="color: #336666; font-size: 18px; font-weight: 300;" class="tve_p_center">
    <span class="underline_text">
        <a href="" data-tcb-events="__TCB_EVENT_<?php echo htmlentities(json_encode($events_config)) ?>_TNEVE_BCT__" class="tve_evt_manager_listen">Click Here To Claim Your Spot And “
    Instantly Download” Your Lorem Ipsum Dolor</a></span></p>
</div>
<div class="tve_lp_footer tve_empty_dropzone tve_drop_constraint" data-forbid=".thrv_page_section,.sc_page_section">
    <p class="tve_p_center" style="color: #333333;font-size: 17px;margin-top: 10px;">© 2014 Webinar Landing Page. All rights Reserved | Disclaimer</p>
</div>