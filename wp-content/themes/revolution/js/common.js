jQuery(document).ready(function($) {

	 $(function() {
      var pull    = $('#nav-icon2');
        menu    = $('nav ul');
        menuHeight  = menu.height();

      $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
      });

      $(window).resize(function(){
            var w = $(window).width();
            if(w > 320 && menu.is(':hidden')) {
              menu.removeAttr('style');
            }
        });
    });

      $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
	    $(this).toggleClass('open');
	  });
	
	
});