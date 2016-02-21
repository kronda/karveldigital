/*! Thrive Leads - The ultimate Lead Capture solution for wordpress - 2016-02-11
* https://thrivethemes.com 
* Copyright (c) 2016 * Thrive Themes */
var ThriveLeads=ThriveLeads||{};jQuery(function(){var a=Backbone.Router.extend({routes:{contacts:"contacts"},contacts:function(){var a=new ThriveLeads.views.Contacts({el:"#tve-contacts"});a.globalSettings=TVE_Page_Data.globalSettings,a.render()}});ThriveLeads.router=new a,Backbone.history.start({hashChange:!0})});