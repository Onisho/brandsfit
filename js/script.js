jQuery(document).ready(function($){
  
  // HAMBURGER ANIMATION
  $('.navbar-toggler-icon').click(function(){
		$(this).toggleClass('open');
	});
  
  // SWIPE EVENTS
  // (http://labs.rampinteractive.co.uk/touchSwipe - swipe.js)
  $(".carousel-inner").swipe( {
    //Generic swipe handler for all directions
    swipeLeft:function(event, direction, distance, duration, fingerCount) {
      $(this).parent().carousel('next'); 
    },
    swipeRight: function() {
      $(this).parent().carousel('prev'); 
    },
    //Default is 75px, set to 0 for demo so any distance triggers swipe
    threshold:0
  });
  
  // OPEN LINKS EXTERNAL
  $("a[rel=external]").click(function() {
	 window.open($(this).attr('href'));
	 return false;
  });
  
  // SCROLL
  $(window).scroll(function () {
    if ($(window).scrollTop() > 200) {
        $('.navbar').css('margin-top', '0');
        $('.scrolldown').css('opacity', '0');
    }
    if ($(window).scrollTop() < 200) {
        $('.scrolldown').css('opacity', '1');
    }
  });
  
  // STICKY NAVBAR
  var stickyToggle = function(sticky, stickyWrapper, scrollElement) {
    var stickyHeight = sticky.outerHeight();
    var stickyTop = stickyWrapper.offset().top;
    if (scrollElement.scrollTop() >= stickyTop){
      stickyWrapper.height(stickyHeight);
      sticky.addClass("is-sticky");
    }
    else{
      sticky.removeClass("is-sticky");
      stickyWrapper.height('auto');
    }
  };
  
  // FIND ALL DATA-TOGGLE="sticky-onscroll" ELEMENTS
  $('[data-toggle="sticky-onscroll"]').each(function() {
    var sticky = $(this);
    var stickyWrapper = $('<div>').addClass('sticky-wrapper');
    sticky.before(stickyWrapper);
    sticky.addClass('sticky');
    $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function() {
      stickyToggle(sticky, stickyWrapper, $(this));
    });
    stickyToggle(sticky, stickyWrapper, $(window));
  });
  
  
  
  
  
});