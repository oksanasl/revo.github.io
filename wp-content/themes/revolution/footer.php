<div class="contact-info-wrap">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="contact-info">
                    <div class="title">
                        <h3>Contact information</h3>
                    </div>
                    <ul>
						<? $query = new WP_Query(array('page_id' => 32)); ?>
						<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
							<? $field = get_field('contact_adress'); ?> 
							<? if(!empty($field)): ?>
								<li><i class="fa fa-map-marker" aria-hidden="true"></i> <? echo $field; ?></li>
							<? endif; ?>
							<? $field = get_field('contact_phone'); ?> 
							<? if(!empty($field)): ?>
								<li><i class="fa fa-phone" aria-hidden="true"></i> <? echo $field; ?></li>
							<? endif; ?>
							<? $field = get_field('contact_skype'); ?> 
							<? if(!empty($field)): ?>
								<li><i class="fa fa-skype" aria-hidden="true"></i> <? echo $field; ?></li>
							<? endif; ?>
							<? $field = get_field('contact_mail'); ?> 
							<? if(!empty($field)): ?>
								<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <? echo $field; ?></li>
							<? endif; ?>
						<?php endwhile; ?>
						<!-- post navigation -->
						<?php else: ?>
						<!-- no posts found -->
						<?php endif; ?>
                    </ul>
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-vine" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="news">
                    <div class="title">
                        <h3>Latest news</h3>
                    </div>
                    <div class="news-list">
						<? $query = new WP_Query(array('cat' => 2, 'posts_per_page' => 2 )); ?>
						<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
							<div class="news-block">
								<div class="news-title">
									<a href="<? the_permalink(); ?>"><? the_title(); ?></a>
								</div>
								<div class="excerpt">
									<? the_excerpt(); ?>
								</div>
								<div class="more">
									<a href="<? the_permalink(); ?>">read more</a>
								</div>
							</div>
						<?php endwhile; ?>
						<!-- post navigation -->
						<?php else: ?>
						<!-- no posts found -->
						<?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="subscribe">
                    <div class="title">
                        <h3>Get instant quote</h3>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="45" title="Подписка"]'); ?>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="text">
                        <div class="title">
                            <a href="<?php echo get_home_url(); ?>">Revolution services</a>
                        </div>
                        <p>We love who we are and we are very proud to be the part of your business. Curabitur sit amet magna quam. Praesent in libero vel turpis pellentesque egestas sit amet vel nunc. Nunc lobortis dui neque quis. Cras dignissim metus justo, in molestie erat semper a. Ut semper nisi in tellus auctor, sed egestas lectus.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="footer-menu">
                        <div class="title">
                            <h3>HELP</h3>
                        </div>
                        <ul>
							<? $menu = menu_mass('help'); ?>
							<? foreach($menu as $item): ?>
								<li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="<? echo $item['url'] ?>"><? echo $item['title'] ?></a></li>
							<? endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6">
                    <div class="footer-menu">
                        <div class="title">
                            <h3>PAGE LINKS</h3>
                        </div>
                        <ul>
                            <? $menu = menu_mass('page_links'); ?>
							<? foreach($menu as $item): ?>
								<li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="<? echo $item['url'] ?>"><? echo $item['title'] ?></a></li>
							<? endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copy">
        <p>© 2016 All rights reserved</p>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
	<? if(is_front_page()): ?>
		<!--Index JS-->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/owl-carousel/owl.theme.css">
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/owl-carousel/owl.carousel.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/index.js"></script>
		<!--Index JS-->
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/common.js"></script>
	<? endif; ?>
	
	<? if(is_page(32)): ?>
		<!--Map-->
		<script src="http://maps.googleapis.com/maps/api/js"></script>
		<script src="<?php bloginfo('template_url') ?>/js/map.settings.js"></script>
		<!--Map-->
	<? endif; ?>
	
	<? if(is_page(47)): ?>	
		<!--Faq-->
		<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/faq.js"></script>
		<!--Faq-->
	<? endif; ?>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<? wp_footer(); ?>
  </body>
</html>