<span class="tve_options_headline"><span class="tve_icm tve-ic-move"></span>Countdown Timer Evergreen options</span>
<ul class="tve_menu">
    <li class="tve_text tve_firstOnRow">
        <label class="tve_text">
            Days
            <select class="tve_change" id="ct_day">
                <?php for ($i = 0; $i <= 30; $i++) : ?>
                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                <?php endfor ?>
            </select>
        </label>
        &nbsp;
        <label class="tve_text">
            Hours
            <select class="tve_change" id="ct_hour">
                <?php for ($i = 0; $i < 24; $i++) : ?>
                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                <?php endfor ?>
            </select>
        </label>
        &nbsp;
        <label class="tve_text">
            Minute
            <select class="tve_change" id="ct_min">
                <?php for ($i = 0; $i < 60; $i++) : ?>
                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                <?php endfor ?>
            </select>
        </label>
        &nbsp;
        <label class="tve_text">
            Seconds
            <select class="tve_change" id="ct_sec">
                <?php for ($i = 0; $i < 60; $i++) : ?>
                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                <?php endfor ?>
            </select>
        </label>
    </li>
    <li class="tve_ed_btn tve_btn_text">
        <div class="tve_option_separator">
            <span class="tve_ind tve_left">Starts again after</span>
            <span class="tve_caret tve_icm tve_left"></span>

            <div class="tve_clear"></div>
            <div class="tve_sub_btn">
                <div class="tve_sub active_sub_menu tve_large tve_dark tve_clearfix" style="min-width: 400px">
                    <ul>
                        <li class="tve_no_hover tve_no_click">
                            <label class="tve_text">
                                Days
                                <select class="tve_change" id="ct_expday">
                                    <?php for ($i = 0; $i < 30; $i++) : ?>
                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                    <?php endfor ?>
                                </select>
                            </label>
                            &nbsp;
                            <label class="tve_text">
                                Hours
                                <select class="tve_change" id="ct_exphour">
                                    <?php for ($i = 0; $i < 24; $i++) : ?>
                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                    <?php endfor ?>
                                </select>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </li>
    <li class="tve_clear"></li>
    <li class="tve_ed_btn_text tve_firstOnRow">
        <label class="tve_text">
            Text to show on complete <input type="text" class="tve_change" id="ct_text" />
        </label>
    </li>
    <?php $css_selector = '.sc_timer_content'; include dirname(__FILE__) . '/_margin.php' ?>
    <li class="tve_ed_btn tve_btn_icon">
        <span class="tve_icm tve-ic-paragraph-left tve_click" id="countdown_timer_align_left" data-align="left"></span>
    </li>
    <li class="tve_ed_btn tve_btn_icon">
        <span class="tve_icm tve-ic-paragraph-center tve_click" id="countdown_timer_align_center" data-align="center"></span>
    </li>
    <li class="tve_ed_btn tve_btn_icon">
        <span class="tve_icm tve-ic-paragraph-right  tve_click" id="countdown_timer_align_right"  data-align="right"></span>
    </li>
    <li class="tve_ed_btn tve_btn_text tve_center btn_alignment tve_click" id="countdown_timer_align_none" data-align="none">None</li>
    <li class="tve_ed_btn tve_btn_text">
        <div class="tve_option_separator">
            <span class="tve_ind tve_left">Translations</span>
            <span class="tve_caret tve_icm tve_left"></span>

            <div class="tve_clear"></div>
            <div class="tve_sub_btn">
                <div class="tve_sub active_sub_menu tve_large tve_dark tve_clearfix" style="min-width: 200px">
                    <ul>
                        <li class="tve_no_hover tve_no_click">
                            <label class="tve_text">
                                <span class="tve_label_spacer tve_small">Days</span>
                                <input type="text" placeholder="Days" class="tve_change tve_input_translatable"
                                       data-ctrl="controls.change.translate" data-args=".tve_t_day .t-caption"/>
                            </label>
                        </li>
                        <li class="tve_no_hover tve_no_click">
                            <label class="tve_text">
                                <span class="tve_label_spacer tve_small">Hour</span>
                                <input type="text" placeholder="Hour" class="tve_change tve_input_translatable"
                                       data-ctrl="controls.change.translate" data-args=".tve_t_hour .t-caption"/>
                            </label>
                        </li>
                        <li class="tve_no_hover tve_no_click">
                            <label class="tve_text">
                                <span class="tve_label_spacer tve_small">Minutes</span>
                                <input type="text" placeholder="Minutes" class="tve_change tve_input_translatable"
                                       data-ctrl="controls.change.translate" data-args=".tve_t_min .t-caption"/>
                            </label>
                        </li>
                        <li class="tve_no_hover tve_no_click">
                            <label class="tve_text">
                                <span class="tve_label_spacer tve_small">Seconds</span>
                                <input type="text" placeholder="Seconds" class="tve_change tve_input_translatable"
                                       data-ctrl="controls.change.translate" data-args=".tve_t_sec .t-caption"/>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </li>
</ul>