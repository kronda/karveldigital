/*! Thrive Clever Widgets 2016-02-10
* http://www.thrivethemes.com 
* Copyright (c) 2016 * Thrive Themes */
var tcw_app=tcw_app||{};!function(){"use strict";tcw_app.AppView=Backbone.View.extend({el:"body",events:{"click .tcw_widget_button":"openPopUp","click .tcw-toggle-display":"toggleCollapsed"},openPopUp:function(a){var b=jQuery(a.target);tb_show(b.attr("title"),b.attr("href")),jQuery("#TB_window").addClass("tcw-modal"),jQuery("#TB_overlay").addClass("tcw-modal-overlay"),jQuery("#TB_load").addClass("tcw-model-loading"),a.preventDefault()},toggleCollapsed:function(a){var b=jQuery(a.currentTarget),c=b.hasClass("collapsed");this.$el.find(""+b.data("target"))[c?"slideDown":"slideUp"](200),b.find("span.tcw-icon").removeClass("tcw-icon-keyboard-arrow-right tcw-icon-keyboard-arrow-down").addClass(c?"tcw-icon-keyboard-arrow-down":"tcw-icon-keyboard-arrow-right"),b.toggleClass("collapsed"),b.toggleClass("hover")}})}(jQuery);