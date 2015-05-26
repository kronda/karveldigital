/*! Thrive Leads - The ultimate Lead Capture solution for wordpress - 2015-05-26
* https://thrivethemes.com 
* Copyright (c) 2015 * Thrive Themes */
var ThriveLeads=ThriveLeads||{};ThriveLeads.objects={},ThriveLeads["const"]=ThriveLeadsConst,ThriveLeads.open_thickbox=function(a,b){function c(){jQuery(document).bind("ajaxSuccess.tb_show",i),tb_show(a,d)}if(b.url)var d=b.url;else{var e=b.width?b.width:600,f=b.height?b.height:500,d="#TB_inline?width={w}&height={h}&inlineId={id}&modal=1",g=b.view;if(!b.view)return;ThriveLeads.objects.lightboxes||(ThriveLeads.objects.lightboxes={}),ThriveLeads.objects.lightboxes[g]||(ThriveLeads.objects.lightboxes[g]=new ThriveLeads.views.lightbox[g]({model:b.model?b.model:{},collection:b.collection?b.collection:{}}));var h=ThriveLeads.objects.lightboxes[g];(b.model||b.collection)&&(h.model=b.model?b.model:{},h.collection=b.collection?b.collection:{},h.render()),h.exists()||jQuery("body").append(h.render().$el.hide());var d=d.replace("{w}",e).replace("{h}",f).replace("{id}",h.getId())}var i=function(){setTimeout(ThriveLeads.resize_thickbox,0),jQuery(document).unbind("ajaxSuccess.tb_show")};b.url?c(a,d):(tb_show(a,d),setTimeout(ThriveLeads.resize_thickbox,0)),jQuery("body").removeClass("modal-open");var j=jQuery("#TB_window #TB_ajaxContent").off("keyup.close").on("keyup.close",function(a){27==a.which&&j.find(".tve-close-thickbox").click()});if(j.find("input,select,textarea").off("keyup.lightbox").on("keyup.lightbox",function(a){switch(a.which){case 13:j.find(".tl-enter-action").click()}}).filter(":not(select)").first().focus(),jQuery("#TB_window").find(".tl-play-link").length&&window.rebindWistiaFancyBoxes&&window.rebindWistiaFancyBoxes(),!b.url){var k=ThriveLeads.objects.lightboxes[g].$el;ThriveLeads.objects.lightboxes[g].setElement(jQuery("#TB_ajaxContent > div")),ThriveLeads.objects.lightboxes[g].afterOpen()}jQuery("#TB_overlay").on("tb_unload",function(){"function"==typeof b.close&&b.close.call(null,b.close_callback?b.close_callback:null),b.url||ThriveLeads.objects.lightboxes[g].setElement(k)})},ThriveLeads.resize_thickbox=function(){var a,b=90*jQuery(window).height()/100,c=jQuery("#TB_window"),d=c.find("#TB_ajaxContent"),e=40;d.children().each(function(){var a=jQuery(this);return a.is("script")||a.is("style")||!a.is(":visible")?!0:void(e+=a.outerHeight(!0))}),e=Math.min(e,b-100),a=e+100,d.css("max-height",b-100+"px").animate({height:e},200),c.animate({top:"50%",marginTop:-(a/2),height:e+100},200)},ThriveLeads.showLoader=function(){var a=jQuery("body"),b=a.find("#tve-leads-loader");b.length||(b=jQuery('<div id="tve-leads-loader" class="tve-leads-loader"><img src="'+ThriveLeads["const"].url.includes+'js/thickbox/loadingAnimation.gif" width="208" /></div>').appendTo(a)),b.fadeIn(),jQuery(document).on("keyup.close-loader",function(a){27==a.which&&ThriveLeads.hideLoader()})},ThriveLeads.hideLoader=function(){setTimeout(function(){jQuery("#tve-leads-loader").fadeOut(500)},200),jQuery(document).off("keyup.close-loader")},ThriveLeads.roundNumber=function(a,b){var c=Math.pow(10,b);return Math.round(a*c)/c},ThriveLeads.conversion_rate=function(a,b,c){if(a=parseInt(a),b=parseInt(b),!a||isNaN(a)||!b||isNaN(b))return"N/A";c="undefined"==typeof c?"%":"";var d=ThriveLeads.roundNumber(b/a*100,3).toFixed(2);return d+(c&&!isNaN(d)?" "+c:"")},ThriveLeads.addMessage=function(a,b){ThriveLeads.objects.messages.add(a),b&&b.call(null)},ThriveLeads.addErrorMessage=function(a,b){var c=new ThriveLeads.models.Message({status:"error",text:a});return ThriveLeads.addMessage(c,b)},ThriveLeads.addSuccessMessage=function(a,b){var c=new ThriveLeads.model.Message({status:"success",text:a});return ThriveLeads.addMessage(c,b)},ThriveLeads.addFailCallback=function(a,b){a.fail(function(c){ThriveLeads.addErrorMessage(c.responseText,ThriveLeads.displayMessages),ThriveLeads.hideLoader(),a.failed=!0,"undefined"!=typeof b&&b.closeThickbox&&b.closeThickbox()})},ThriveLeads.displayMessages=function(a){var b=new ThriveLeads.views.MessagesList({collection:ThriveLeads.objects.messages});return b.render(),"undefined"==typeof a&&(a=".tve-header"),"string"==typeof a?(jQuery(a).after(b.$el),jQuery("html, body").animate({scrollTop:0}),b.$el.html().length&&setTimeout(function(){jQuery(b.$el).hide(1e3)},1e4)):"function"==typeof a&&a&&a.call(null,b),ThriveLeads.objects.messages.reset(),b},ThriveLeads.errorHandler=function(a,b,c,d){ThriveLeads.addMessage({text:c.responseText,status:"error"}),ThriveLeads.router.navigate(a,{trigger:!0})},function(a){a(function(){var b=a('<div class="ui-tooltip" style="opacity:0;display:none"></div>').appendTo("body");a("body").on("mouseenter",".tl-tooltip",function(){var c=a(this),d=c.attr("title")?c.attr("title"):c.data("tl-title"),e=c.offset().top+c.outerHeight()+8,f=c.offset().left,g=c.attr("data-show-until");g&&parseInt(g)<jQuery(window).width()||(c.attr("title")&&(c.data("tl-title",d),c.removeAttr("title")),b.css("opacity","0").html(d).show(),f-=(b.outerWidth()-c.outerWidth())/2,b.css({top:e+"px",left:f+"px",opacity:1}).show())}).on("mouseleave",".tl-tooltip",function(){b.hide()})})}(jQuery);