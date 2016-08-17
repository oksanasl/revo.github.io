jQuery(document).ready(function($) {


	   $('.faq-tabs .show-blog').click(function(){

          $('.faq-tabs li').removeClass('active');
          $(this).addClass('active');

          $('.reviews-list').hide();
          $('.blog-list').fadeIn();

     });

     $('.faq-tabs .show-reviews').click(function(){

          $('.faq-tabs li').removeClass('active');
          $(this).addClass('active');

          $('.reviews-list').fadeIn();
          $('.blog-list').hide();

     });

     $('.blog-list .blog-title').click(function(){

          $(this).parent().find('.post-text').slideToggle();
          $(this).toggleClass('blog-title-active');

     });
	
});