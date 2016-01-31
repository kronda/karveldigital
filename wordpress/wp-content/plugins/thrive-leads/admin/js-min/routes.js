/*! Thrive Leads - The ultimate Lead Capture solution for wordpress - 2016-01-18
* https://thrivethemes.com 
* Copyright (c) 2016 * Thrive Themes */
var ThriveLeads=ThriveLeads||{};jQuery(function(){ThriveLeads.objects.titleChanger=new ThriveLeads.models.PageTitle({default_title:document.title}),ThriveLeads.objects.titleChanger.on("title_change",function(a){document.title=a});var a=Backbone.Router.extend({routes:{dashboard:"dashboard","form-type/:id":"formTypeEdit","shortcode/:id":"shortcodeEdit","2step-lightbox/:id":"twoStepLightboxEdit","settings/:group":"settings","triggers/:form_type_id/:variation_key":"triggerEdit","test/:id(/:completed)":"viewTest","position/:form_type_id/:variation_key":"positionEdit"},dashboard:function(){ThriveLeads.hideLoader(),ThriveLeads.objects.DashboardView||(ThriveLeads.objects.DashboardView=new ThriveLeads.views.Dashboard(TVE_Page_Data)),ThriveLeads.objects.DashboardView.render()},shortcodeEdit:function(a){return a?(ThriveLeads.showLoader(),ThriveLeads.objects.FormTypeView&&ThriveLeads.objects.FormTypeView.undelegateEvents(),ThriveLeads.objects.TwoStepLightboxEditView&&ThriveLeads.objects.TwoStepLightboxEditView.undelegateEvents(),ThriveLeads.objects.Shortcode?(ThriveLeads.objects.ShortcodeEditView.FLAG_skipListener=!0,ThriveLeads.objects.Shortcode.set("ID",a),ThriveLeads.objects.ShortcodeEditView.clear()):(ThriveLeads.objects.Shortcode=new ThriveLeads.models.Shortcode({ID:a}),ThriveLeads.objects.ShortcodeEditView=new ThriveLeads.views.FormTypeEdit({model:ThriveLeads.objects.Shortcode})),void ThriveLeads.objects.Shortcode.fetch({error:_.partial(ThriveLeads.errorHandler,"#dashboard")}).always(function(a){_.isObject(a)&&a.redirect_to&&ThriveLeads.router.navigate(a.redirect_to,{trigger:!0})})):void ThriveLeads.router.navigate("#dashboard",{trigger:!0})},twoStepLightboxEdit:function(a){return a?(ThriveLeads.showLoader(),ThriveLeads.objects.FormTypeView&&ThriveLeads.objects.FormTypeView.undelegateEvents(),ThriveLeads.objects.ShortcodeEditView&&ThriveLeads.objects.ShortcodeEditView.undelegateEvents(),ThriveLeads.objects.TwoStepLightbox?(ThriveLeads.objects.TwoStepLightboxEditView.FLAG_skipListener=!0,ThriveLeads.objects.TwoStepLightbox.set("ID",a),ThriveLeads.objects.TwoStepLightboxEditView.clear()):(ThriveLeads.objects.TwoStepLightbox=new ThriveLeads.models.TwoStepLightbox({ID:a}),ThriveLeads.objects.TwoStepLightboxEditView=new ThriveLeads.views.FormTypeEdit({model:ThriveLeads.objects.TwoStepLightbox})),void ThriveLeads.objects.TwoStepLightbox.fetch({error:_.partial(ThriveLeads.errorHandler,"#dashboard")}).always(function(a){_.isObject(a)&&a.redirect_to&&ThriveLeads.router.navigate(a.redirect_to,{trigger:!0})})):void ThriveLeads.router.navigate("#dashboard",{trigger:!0})},formTypeEdit:function(a){return a?(ThriveLeads.showLoader(),ThriveLeads.objects.ShortcodeEditView&&ThriveLeads.objects.ShortcodeEditView.undelegateEvents(),ThriveLeads.objects.TwoStepLightboxEditView&&ThriveLeads.objects.TwoStepLightboxEditView.undelegateEvents(),ThriveLeads.objects.FormType?(ThriveLeads.objects.FormTypeView.FLAG_skipListener=!0,ThriveLeads.objects.FormType.set("ID",a),ThriveLeads.objects.FormTypeView.clear()):(ThriveLeads.objects.FormType=new ThriveLeads.models.FormType({ID:a}),ThriveLeads.objects.FormTypeView=new ThriveLeads.views.FormTypeEdit({model:ThriveLeads.objects.FormType})),void ThriveLeads.objects.FormType.fetch({error:_.partial(ThriveLeads.errorHandler,"#dashboard")}).always(function(a){_.isObject(a)&&a.redirect_to&&ThriveLeads.router.navigate(a.redirect_to,{trigger:!0})})):void ThriveLeads.router.navigate("#dashboard",{trigger:!0})},settings:function(a){if(0===ThriveLeads.objects.groups.length){ThriveLeads.objects.groups.reset(TVE_Page_Data.groups);var b=ThriveLeads.objects.groups.findWhere({ID:parseInt(a)})}else var b=ThriveLeads.objects.groups.findWhere({ID:parseInt(a)});if(!b)return ThriveLeads.router.navigate("#dashboard",{trigger:!0}),void tb_remove();var c=ThriveLeads["const"].url.admin+"admin-ajax.php?action=thrive_leads_backend_ajax&route=displayGroupSettings&group="+a;ThriveLeads.open_thickbox(b.get("post_title")+" "+ThriveLeads["const"].translations.DisplayGroupSettings+" "+ThriveLeads["const"].translations.GroupSettingsVideo,{url:c,close:function(){ThriveLeads.router.navigate("#dashboard",{trigger:!0})}})},triggerEdit:function(a,b){ThriveLeads.open_thickbox(ThriveLeads["const"].translations.TriggerSettings+" "+ThriveLeads["const"].translations.TriggerSettingsVideo,{url:ThriveLeads["const"].url.admin+"admin-ajax.php?width=700&height=350&action=thrive_leads_backend_ajax&route=triggerSettings&form_type_id="+a+"&variation_key="+b,close_callback:function(){return ThriveLeads.objects.triggerView.model},close:function(b){var c=b();return c&&c instanceof ThriveLeads.models.FormVariationBase?void("shortcode"===c.get("tve_form_type")?ThriveLeads.router.navigate("#shortcode/"+a,{trigger:!0}):"two_step_lightbox"===c.get("tve_form_type")?ThriveLeads.router.navigate("#2step-lightbox/"+a,{trigger:!0}):ThriveLeads.router.navigate("#form-type/"+a,{trigger:!0})):void ThriveLeads.router.navigate("#dashboard",{trigger:!0})}})},positionEdit:function(a,b){ThriveLeads.open_thickbox(ThriveLeads["const"].translations.PositionSettings,{url:ThriveLeads["const"].url.admin+"admin-ajax.php?width=700&height=350&action=thrive_leads_backend_ajax&route=positionSettings&form_type_id="+a+"&variation_key="+b,close_callback:function(){return ThriveLeads.objects.positionView.model},close:function(b){var c=b();return c&&c instanceof ThriveLeads.models.FormVariationBase?void("shortcode"===c.get("tve_form_type")?ThriveLeads.router.navigate("#shortcode/"+a,{trigger:!0}):"two_step_lightbox"===c.get("tve_form_type")?ThriveLeads.router.navigate("#2step-lightbox/"+a,{trigger:!0}):ThriveLeads.router.navigate("#form-type/"+a,{trigger:!0})):void ThriveLeads.router.navigate("#dashboard",{trigger:!0})}})},viewTest:function(a,b){ThriveLeads.showLoader();var c=new ThriveLeads.models.Test({id:parseInt(a)}),d=new ThriveLeads.views.Test({model:c});b&&(d.collection=new ThriveLeads.collections.Tests),c.fetch({success:function(){d.render(),ThriveLeads.hideLoader()},error:_.partial(ThriveLeads.errorHandler,"#dashboard")})}});ThriveLeads.router=new a,Backbone.history.start({hashChange:!0})});