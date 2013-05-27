jQuery(document).ready(function(){
  jQuery('.home h1').addClass('visuallyhidden');
  jQuery('.gallery-icon a').attr('href', '/portfolio');
  jQuery('.widget_woothemes_features .feature:nth-child(2) .feature-title').before('<i class="icon-wrench icon-3x"></i>');
  jQuery('.widget_woothemes_features .last .feature-title').before('<i class="icon-group icon-3x"></i>');
});