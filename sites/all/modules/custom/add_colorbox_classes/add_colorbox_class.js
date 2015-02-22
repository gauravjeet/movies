jQuery(document).ready(function() {
  jQuery('.views-field-title a').addClass('add-colorbox-class').attr('id', 'movie-name');

  // Add colorbox class to URLs.
  jQuery('a.add-colorbox-class').colorbox({scrolling:false, width:650, height:500});

  // Hide movie name.
  jQuery('[id^="movie-name"]').hide();

  jQuery('.view-content').hover(function() {
    jQuery('[id^="movie-name"]').show().css('font-size', '14').css('position', 'absolute').animate({
      bottom: "50px"
    }, "slow");
  },function() {
    jQuery('[id^="movie-name"]').animate({
      top: "-60px"
    }, "slow").hide();
  });
});