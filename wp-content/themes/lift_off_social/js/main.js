(function($){


$(document).ready(function() {
 
  var clientsSlider = $("#clientsSlider");
 
  clientsSlider.owlCarousel({
      items : 1, //10 items above 1000px browser width
      itemsDesktop : [1000,1], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,1], // betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  });



  var slData = $("#clientsSlider").data('owlCarousel');

  $('.slider_ctrl .sl_arrow').on('click', function (e) {
  	
  	e.preventDefault();

  	if($(this).hasClass('arrow_left')){
  		slData.next();
  	} else {
  		slData.prev();
  	}




  });
});


})(jQuery);