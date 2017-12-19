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
  
  // MATCH HEIGHT OF ELEMENTS
  $('.card-visibility').matchHeight();  
  $('.card-concept').matchHeight();
  
  
  // WIZARD
  $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
    var $total = navigation.find('li').length;
    var $current = index+1;
    var $percent = ($current/$total) * 100;
    $('#rootwizard').find('.progress-bar').css({width:$percent+'%'});
		
    // If it's the last tab then hide the last button and show the finish instead
    if($current >= $total) {
      $('#rootwizard').find('.pager .next').hide();
      $('#rootwizard').find('.pager .finish').show();
      $('#rootwizard').find('.pager .finish').removeClass('disabled');
    } else {
      $('#rootwizard').find('.pager .next').show();
      $('#rootwizard').find('.pager .finish').hide();
    }
		
  }});
  
  $("input[type=radio]").change(function () {
      $("input[type=radio]").parent().css( "border-color", "#F5FCFB" );
      if($(this).prop("checked")) {
        $(this).parent().css( "border-color", "#0fb89a" );
      } 
    }).change();
  
    $("input[type=checkbox]").change(function () {
      if($(this).prop("checked")) {
        $(this).parent().css( "border-color", "#0fb89a" );
      } else {
        $(this).parent().css( "border-color", "#F5FCFB" );
      }
    }).change();
  
    $("#region-select").hide();
    $("#region .regionaal").click(function () {
      $("#region").hide();
      $("#region-select").show();        
    });
  
    $("#country-select").hide();
    $("#region .landelijk").click(function() {
      $("#region").hide();
      $("#country-select").show();   
    });


	$('input').on('keydown', function(event) {
   		var x = event.which;
   		if (x === 13) {
       		event.preventDefault();
   		}
	});
  
  
  
  
  
});