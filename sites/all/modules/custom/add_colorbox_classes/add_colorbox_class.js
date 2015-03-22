jQuery(document).ready(function() {
  var hasclass= jQuery('.views-field-title a').hasClass('add-colorbox-class');

  if (!hasclass) {
    jQuery('.views-field-title a').addClass('add-colorbox-class');
  }

  // Add colorbox class to URLs.
  jQuery('a.add-colorbox-class').colorbox({scrolling:false, width:650, height:500});
});