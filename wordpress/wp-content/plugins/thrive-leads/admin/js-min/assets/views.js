/*! Thrive Leads - The ultimate Lead Capture solution for wordpress - 2015-12-16
* https://thrivethemes.com 
* Copyright (c) 2015 * Thrive Themes */
var ThriveLeads=ThriveLeads||{};ThriveLeads.views=ThriveLeads.views||{},jQuery(function(){ThriveLeads.views.Assets=Backbone.View.extend({events:{"mouseenter .tve-asset-group-not-connected":"showTooltip","mouseenter .tve-available-shortcodes":"showTooltip","mouseleave .tve_tooltip_message":"hideTooltip","click .tve-available-shortcodes":"showShortcodes","click .tve-asset-group-save-connection":"saveConnection","click .tve-leads-clear-cache":"clearCacheStats","click .tl-inbound-link-builder":"inboundLinkBuilder","click .tve-asset-service, .tve-asset-group-connection-event":"addAPIConnection","click .tve-asset-group-existing-connection-event":"testAPIConnection","click .tve-asset-template, .tve-asset-group-template-event":"addWizardTemplate","click .tve-asset-download-link, .tve-asset-group-links-event":"addWizardFiles","click .tve-leads-asset-dashboard":function(){location.reload()}},viewItems:[],initialize:function(){this.listenTo(this.collection,"reset",this.render),this.listenTo(this.collection,"add",this.renderOne),this.listenTo(this.collection,"remove",this.removeOne)},render:function(){return this.collection.length?this.$el.find(".show-no-asset-groups").hide():this.$el.find(".show-no-asset-groups").show(),this.collection.each(this.renderOne,this),this.$el.find(".tl-open-settings,.tl-close-settings").on("click",_.bind(this.toggleGlobalSettings,this)),this.$el.find(".tve-setting-change").on("change",_.bind(this.globalSetting,this)),this},inboundLinkBuilder:function(){ThriveLeads.open_thickbox(ThriveLeads["const"].translations.InboundLinkBuilder,{view:"InboundLink",width:700,height:300,collection:ThriveLeads.objects.groups,model:new ThriveLeads.models.InboundLink})},toggleGlobalSettings:function(a){return jQuery(a.currentTarget).parents(".tve-global-settings").toggleClass("tve-expanded"),!1},globalSetting:function(a){var b=jQuery(a.currentTarget),c={action:"thrive_leads_backend_ajax",route:"globalSettingsAPI",field:b.attr("name"),value:b.attr("value")};b.is('input[type="checkbox"]')&&!b.is(":checked")&&(c.value=0),this.globalSettings[c.field]=c.value,jQuery.post(ajaxurl,c)},clearCacheStats:function(){ThriveLeads.showLoader(),jQuery.post(ajaxurl,{action:"thrive_leads_backend_ajax",route:"clearCacheStatistics"},function(){location.reload()})},removeOne:function(){0===this.collection.length&&this.$el.find(".show-no-asset-groups").show()},renderOne:function(a){this.collection.length?this.$el.find(".show-no-asset-groups").hide():this.$el.find(".show-no-asset-groups").show();var b=new ThriveLeads.views.Asset({model:a}),c=b.render().$el;this.$el.find("#tve-asset-group-list").append(c);var d=a.get("ID");tinyMCE.init({selector:"#my-id-"+d,toolbar:"styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | ",menubar:!1,height:400,setup:function(b){b.on("init",function(b){tinyMCE.get("my-id-"+d).setContent(a.get("post_content")),tinyMCE.execCommand("mceRepaint")})}}),this.viewItems.push(b)},showShortcodes:function(){ThriveLeads.open_thickbox(ThriveLeads["const"].translations.showShortcodesList,{view:"showShortcodes",height:220})},showTooltip:function(a){var b=this.$(a.target);b.wrap('<div class="tve_tooltip_wrapper">');var c=b.attr("data-title");b.before('<div class="tooltip_arrow_border">'),b.before('<div class="tooltip_arrow">'),b.before('<div class="tve_tooltip_message">'+c,"</div>")},hideTooltip:function(){var a=jQuery(this.$el).find(".tve_tooltip_wrapper");a.find(".tve_tooltip_message").remove(),a.find(".tooltip_arrow").remove(),a.find(".tooltip_arrow_border").remove(),a.contents().unwrap()},updateOrder:function(){var a={};_.each(this.viewItems,function(b){b.model.get("order")!=b.$el.index()&&(b.model.set("order",b.$el.index()),a[b.model.get("ID")]=b.$el.index())}),this.collection.sort(),jQuery.ajax({type:"post",url:ajaxurl,data:{action:"thrive_leads_backend_ajax",route:"assets",custom:"update_order",new_order:a}})},testAPIConnection:function(){ThriveLeads.open_thickbox(ThriveLeads["const"].translations.addAPIConnection,{model:this.model,view:"testAPIConnection",height:200})},addAPIConnection:function(){ThriveLeads.open_thickbox(ThriveLeads["const"].translations.addAPIConnection,{model:this.model,view:"addAPIConnection",height:200})},addWizardTemplate:function(){ThriveLeads.open_thickbox(ThriveLeads["const"].translations.emailTemplate,{model:this.model,view:"emailTemplate",height:200});try{tinymce.remove("#wp-editor")}catch(a){}var b=this.model.get("admin_name"),c=this.model.get("email_data").template_body;if(c)var d=c;else var d="<p>Hello [lead_name],</p><p>Thank you for signing up!</p><p>To start the download of the [asset_name] you signed up for, just click the link below:</p><p>[asset_download]</p><p>Stay tuned for more updates coming your way soon!</p><p>Regards,<br/>"+b+"</p>";tinyMCE.init({selector:"#wp-editor",toolbar:"styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | ",menubar:!1,height:300,setup:function(a){a.on("init",function(a){tinyMCE.get("wp-editor").setContent(d),tinyMCE.execCommand("mceRepaint")})}})},addWizardFiles:function(){ThriveLeads.open_thickbox(ThriveLeads["const"].translations.addAssetGroup,{collection:this.collection,view:"addWizardFiles",height:500})}}),ThriveLeads.views.Asset=Backbone.View.extend({tagName:"li",className:"collapse-table-list-item",template:_.template(ThriveLeads["const"].templates["assets/item"]),events:{"click .tve-edit-title":"showEditTitleInput","change .tve-edit-title-input":"saveTitle","keyup .tve-edit-title-input":"saveTitleKeyup","blur .tve-edit-title-input":"closeEditTitle","click .tve-asset-group-delete":"deleteGroupPopup","click .tve-assey-group-details":function(a){this.model.set("details_expanded",!this.model.get("details_expanded"))},"click .tve-asset-group-heading":function(a){var b=jQuery(a.target);b.hasClass("tve-prevent-click")||b.parents(".tve-prevent-click").length||this.model.set("details_expanded",!this.model.get("details_expanded"))},"click .tve-asset-group-file-add":"addFile","click .tve-asset-group-file-add-prev":"addFilePrev","click .tve-asset-change-email":"changeEmail","click .tve-asset-preview-email":"previewEmail","click .tve-asset-group-save":"addContent"},initialize:function(){this.listenTo(this.model,"change:details_expanded",this.groupDetails),this.listenTo(this.model,"destroy",this.remove),this.listenTo(this.model.get("files"),"add",this.renderFile),this.listenTo(this.model.get("files"),"add",this.updateCount),this.listenTo(this.model.get("files"),"remove",this.updateCount)},render:function(){this.$el.html(this.template(this.model.toJSON()));var a=this.model.get("files").length;return this.$el.find(".tve-files-count").prepend(a),this.groupDetails(),this.model.get("files").each(this.renderFile,this),this},updateCount:function(){var a=this.model.get("files").length;this.$el.find(".tve-files-count").empty(),this.$el.find(".tve-files-count").prepend(a+" Files")},addContent:function(){var a="#my-id-"+this.model.get("ID")+"_ifr",b=this.$el.find(a),c=b.contents().find("body").html(),d=this.$el.find(".tve-subject-input").val();this.model.set("post_content",c),this.model.set("post_subject",d),this.model.save({},{success:function(a,b){},complete:function(){ThriveLeads.hideLoader()}}),ThriveLeads.showLoader()},addFile:function(){var a,b=this.model.get("ID"),c=this;return a?(a.open(),!1):(a=wp.media.frames.file_frame=wp.media({title:"Upload Asset Group Files (.zip, .pdf, .jpg, .png)",button:{text:"Use file"},frame:"post",state:"insert",multiple:!1}),a.on("insert",function(){var d=a.state().get("selection").first().toJSON(),e=new ThriveLeads.models.AssetFile({name:d.name,link_anchor:d.name,link:d.url,parent_ID:b,ID:""});e.save({},{success:function(a,b){a.set("ID",b)},complete:function(){c.model.get("files").add(e)}})}),a.state("embed").on("select",function(){var d=a.state(),e=(d.get("type"),d.props.toJSON()),f=new ThriveLeads.models.AssetFile({name:e.linkText,link_anchor:e.linkText,link:e.url,parent_ID:b,ID:""});f.save({},{success:function(a,b){a.set("ID",b)},complete:function(){c.model.get("files").add(f)}}),c.renderFiles()}),void a.open())},addFilePrev:function(){ThriveLeads.open_thickbox(ThriveLeads["const"].translations.addNewFile,{view:"addPrevFile",collection:ThriveLeads.objects.AssetsCollection,model:this.model,height:220})},previewEmail:function(){ThriveLeads.open_thickbox(ThriveLeads["const"].translations.previewEmail,{model:this.model,view:"emailPreview",height:200}),console.log(this.model)},changeEmail:function(a){ThriveLeads.open_thickbox(ThriveLeads["const"].translations.emailTemplate,{model:this.model,view:"emailChange",height:200});var b=this.model.get("post_content"),c=jQuery(a.currentTarget).attr("data-id");try{tinymce.remove("#my-id-"+c)}catch(d){}if(b)var e=b;else var e=ThriveLeads.objects.AssetsWizard.get("email_data").template_body;tinyMCE.init({selector:"#my-id-"+c,toolbar:"styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | ",menubar:!1,height:300,setup:function(a){a.on("init",function(a){tinyMCE.get("my-id-"+c).setContent(e),tinyMCE.execCommand("mceRepaint")})}})},renderFile:function(a){a.set("parent_ID",this.model.get("ID"));var b=new ThriveLeads.views.AssetFile({model:a});this.$el.find("#tve-asset-group-files").append(b.render().$el)},groupDetails:function(){this.model.get("details_expanded")?(this.$el.addClass("tve-expanded"),this.$el.find(".tve-asset-group-details").slideDown("fast"),this.$el.find(".tve-group-details > span").attr("class","tve-icon-minus-circle")):(this.$el.removeClass("tve-expanded"),this.$el.find(".tve-asset-group-details").slideUp("fast"),this.$el.find(".tve-group-details > span").attr("class","tve-icon-plus-circle"))},deleteGroupPopup:function(a){var b=jQuery(a.currentTarget);ThriveLeads.open_thickbox(b.attr("data-title"),{width:550,height:300,view:"ConfirmDeleteAssetGroup",model:ThriveLeads.objects.AssetsCollection.get(b.attr("data-id")),collection:ThriveLeads.objects.AssetsCollection})},showEditTitleInput:function(a){var b=this.$el.find(".asset-group-title").hide();this.$el.find(".tve-edit-title-input").val(b.text()).show().focus().select(),jQuery(a.currentTarget).hide(),a.stopPropagation()},saveTitle:function(a){var b=a.currentTarget.value;b!=this.model.get("post_title")&&(this.model.set("post_title",b),this.model.save()),this.closeEditTitle()},saveTitleKeyup:function(a){(27==a.which||13==a.which)&&this.closeEditTitle()},closeEditTitle:function(){var a=this.model.get("post_title");this.$el.find(".tve-edit-title-input").val(a),this.$el.find(".tve-edit-title-input").hide(),this.$el.find(".asset-group-title").empty().text(a),this.$el.find(".asset-group-title,.tve-edit-title").show()}}),ThriveLeads.views.AssetFile=Backbone.View.extend({tagName:"li",className:"asset-file-list-item tve-inside-collapsable-list-item clearfix",template:_.template(ThriveLeads["const"].templates["assets/file"]),events:{"click .tve-edit-file-name":"showEditTitleInput","change .tve-edit-file-name-input":"saveTitle","keyup .tve-edit-file-name-input":"saveTitleKeyup","blur .tve-edit-file-name-input":"closeEditTitle","click .tve-asset-file-delete":"deleteAssetFile"},initialize:function(){this.listenTo(this.model,"destroy",this.remove)},render:function(){return this.$el.html(this.template(this.model.toJSON())),this},deleteAssetFile:function(a){var b=jQuery(a.currentTarget);ThriveLeads.open_thickbox(b.attr("data-title"),{width:550,height:300,view:"ConfirmDeleteAssetFile",model:this.model})},showEditTitleInput:function(a){var b=jQuery(a.currentTarget);if(b.hasClass("tve-edit-file-name-title")){var c=this.$el.find(".asset-group-file-title").hide();this.$el.find(".tve-edit-file-name-title-input").val(c.text()).show().focus().select(),jQuery(a.currentTarget).hide(),a.stopPropagation()}else{var c=this.$el.find(".asset-group-anchor-title").hide();this.$el.find(".tve-edit-file-name-anchor-input").val(c.text()).show().focus().select(),jQuery(a.currentTarget).hide(),a.stopPropagation()}},saveTitle:function(a){var b=jQuery(a.currentTarget);if(b.hasClass("tve-edit-file-name-title-input")){var c=a.currentTarget.value;c!=this.model.get("name")&&(this.model.set("name",c),this.model.save())}else{var c=a.currentTarget.value;c!=this.model.get("link_anchor")&&(this.model.set("link_anchor",c),this.model.save())}this.closeEditTitle()},saveTitleKeyup:function(a){(27==a.which||13==a.which)&&this.closeEditTitle()},closeEditTitle:function(a){this.render()}}),ThriveLeads.views.AssetFileWizard=Backbone.View.extend({tagName:"li",className:"asset-file-list-item tve-inside-collapsable-list-item clearfix",template:_.template(ThriveLeads["const"].templates["assets/file"]),events:{"click .tve-edit-file-name":"showEditTitleInput","change .tve-edit-file-name-input":"saveTitle","keyup .tve-edit-file-name-input":"saveTitleKeyup","blur .tve-edit-file-name-input":"closeEditTitle","click .tve-asset-file-delete":"deleteAssetFile"},initialize:function(){this.listenTo(this.model,"destroy",this.remove)},render:function(){return this.$el.html(this.template(this.model.toJSON())),this},deleteAssetFile:function(a){jQuery(a.currentTarget);ThriveLeads.objects.WizardAddedGroup.get("files").remove(this.model);var b=ThriveLeads.objects.WizardAddedGroup.get("files");this.model.destroy(),0==b.length&&jQuery(".asset-file-list-no-files").show()},showEditTitleInput:function(a){var b=jQuery(a.currentTarget);if(b.hasClass("tve-edit-file-name-title")){var c=this.$el.find(".asset-group-file-title").hide();this.$el.find(".tve-icon-file-empty").hide(),this.$el.find(".tve-edit-file-name-title-input").val(c.text()).show().focus().select(),jQuery(a.currentTarget).hide(),a.stopPropagation()}else{var c=this.$el.find(".asset-group-anchor-title").hide();this.$el.find(".tve-edit-file-name-anchor-input").val(c.text()).show().focus().select(),jQuery(a.currentTarget).hide(),a.stopPropagation()}},saveTitle:function(a){var b=jQuery(a.currentTarget);if(b.hasClass("tve-edit-file-name-title-input")){var c=a.currentTarget.value;c!=this.model.get("name")&&this.model.set("name",c)}else{var c=a.currentTarget.value;c!=this.model.get("link_anchor")&&this.model.set("link_anchor",c)}this.closeEditTitle()},saveTitleKeyup:function(a){(27==a.which||13==a.which)&&this.closeEditTitle()},closeEditTitle:function(a){this.render()}}),ThriveLeads.views.AssetConnections=Backbone.View.extend({events:{"click .tve-leads-connection-setting-change":"saveConnection"},initialize:function(){this.listenTo(this.collection,"change",this.render)},render:function(){return this.$el.empty(),this.collection.each(this.renderOne,this),this},renderOne:function(a){var b=new ThriveLeads.views.AssetConnection({model:a}),c=b.render().$el;this.$el.append(c)},saveConnection:function(a){var b=jQuery(a.currentTarget).attr("data"),c=this;ThriveLeads.showLoader(),jQuery.ajax({type:"post",url:ajaxurl,data:{action:"thrive_leads_backend_ajax",route:"assets",custom:"update_service",new_connection:b}}).done(function(){c.collection.each(function(a,c){a.set("active",b)}),ThriveLeads.hideLoader()})}}),ThriveLeads.views.AssetConnection=Backbone.View.extend({tagName:"li",template:_.template(ThriveLeads["const"].templates["assets/connections"]),events:{"click .tve-asset-group-test":"testConnection"},render:function(){return this.$el.html(this.template(this.model.toJSON())),this},testConnection:function(a){var b=jQuery(a.currentTarget).attr("data"),c=this.$el.find(".tve-leads-test-connection-"+b+" .tve-asset-group-test-result"),d=this.$el.find(".tve-leads-test-response");ThriveLeads.showLoader(),jQuery.ajax({type:"post",url:ajaxurl,data:{action:"thrive_leads_backend_ajax",route:"assets",custom:"test_service",test_connection:b}}).success(function(a){d.empty();var b=JSON.parse(a);d.prepend(b),c.empty(),b.indexOf("updated")>-1?c.append('<span class="tve-icon-checkmark tve-leads-connection-success-icon"></span><span class="tve-leads-connection-success">Success</span>'):c.append('<span class="tve-icon-checkmark tve-leads-connection-failed-icon"></span><span class="tve-leads-connection-error">Error</span>'),ThriveLeads.resize_thickbox(),ThriveLeads.hideLoader()})}})});