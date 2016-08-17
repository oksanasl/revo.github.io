<?php /* Template Name: FAQ*/ ?>
<? get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="page-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-title">
							<h3><? the_title(); ?></h3>
						</div>
						<div class="stars-wrap">
							<div class="stars"></div>
							<div class="line"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="faq-tabs">
							<ul>
								<li class="active show-blog">Blog</li>
								<li class="show-reviews">reviews</li>
							</ul>
						</div>
						<div class="blog-list">
							<? if(get_field('blog')): ?>
								<? while(has_sub_field('blog')): ?>
									<div class="blog-block">
									
										<? $field = get_sub_field('blog_title'); ?> 
										<? if(!empty($field)): ?>
											<div class="blog-title">
												<p><? echo $field; ?></p>
											</div>
										<? endif; ?>
										
										<? $field = get_sub_field('blog_text'); ?> 
										<? if(!empty($field)): ?>
											<div class="post-text">
												<? echo $field; ?>
											</div>
										<? endif; ?>
									</div>
								<? endwhile; ?>
							<? endif; ?>
						</div>

						<div class="reviews-list">
							<? if(get_field('reviews')): ?>
								<? while(has_sub_field('reviews')): ?>
									<div class="reviews-block">
									
										<? $field = get_sub_field('reviews_title'); ?> 
										<? if(!empty($field)): ?>
											<div class="reviews-title">
												<p><? echo $field; ?></p>
											</div>
										<? endif; ?>
										
										<? $field = get_sub_field('reviews_text'); ?> 
										<? if(!empty($field)): ?>
											<div class="post-text">
												<? echo $field; ?>
											</div>
										<? endif; ?>
									</div>
								<? endwhile; ?>
							<? endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
	
<? get_footer(); ?>