jQuery(document).ready(function($) {

	  $(".index-slider").owlCarousel({
      slideSpeed : 500,
      paginationSpeed : 500,
      items : 2,
      pagination: true,
      navigation: false,
      itemsDesktop: [1199,1],
  	  itemsDesktopSmall: [991,1],
  	  itemsTablet: [768,1],
  	  itemsMobile: [640,1],
    });
	
	
});