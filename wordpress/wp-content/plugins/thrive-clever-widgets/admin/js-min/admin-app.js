/*! Thrive Clever Widgets 2016-01-18
* http://www.thrivethemes.com 
* Copyright (c) 2016 * Thrive Themes */
var tcw_app=tcw_app||{};tcw_app["const"]=tcw_const,jQuery(function(){"use strict";_.templateSettings={evaluate:/<#([\s\S]+?)#>/g,interpolate:/<#=([\s\S]+?)#>/g,escape:/<#-([\s\S]+?)#>/g},new tcw_app.AppView}),tcw_app.showLoader=function(){var a=jQuery("body"),b=a.find("#tcw-loader");b.length||(b=jQuery('<div id="tcw-loader" class="tcw-loader"><img src="'+tcw_app["const"].url.includes+'js/thickbox/loadingAnimation.gif" width="208" /></div>').appendTo(a)),b.fadeIn(),jQuery(document).on("keyup.close-loader",function(a){27==a.which&&tcw_app.hideLoader()})},tcw_app.hideLoader=function(){setTimeout(function(){jQuery("#tcw-loader").fadeOut(500)},200),jQuery(document).off("keyup.close-loader")};