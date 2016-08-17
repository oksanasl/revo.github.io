<? get_header(); ?>

	<? $query = new WP_Query(array('page_id' => 6)); ?>
	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<div class="index-slider-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="index-slider">
							<? if(get_field('main_slider')): ?>
								<? while(has_sub_field('main_slider')): ?>
									<? $img = get_sub_field('main_slider_img'); ?> 
									<? if(!empty($img['url'])): ?>
										<div class="item">
											<div class="item-block">
												<div class="img">
													<div class="img-hidden">
														<a href="<? $url = get_sub_field('main_slider_link'); if(!empty($url)){ echo $url; } ?>"><img src="<? echo $img['url']; ?>" class="img-responsive" alt=""></a>
													</div>
												</div>
												<? $field = get_sub_field('main_slider_title'); ?> 
												<? if(!empty($field)): ?>
													<div class="title">
														<a href="<? $url = get_sub_field('main_slider_link'); if(!empty($url)){ echo $url; } ?>"><? echo $field; ?></a>
													</div>
												<? endif; ?>
											</div>
										</div>
									<? endif; ?>
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
    

	<? $query = new WP_Query(array('page_id' => 6)); ?>
	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<div class="index-post">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-lg-offset-6 col-md-offset-6">
						<? $field = get_field('main_post_title'); ?> 
						<? if(!empty($field)): ?>
							<div class="title">
								<h3><? echo $field; ?></h3>
							</div>
						<? endif; ?>
						<div class="stars-wrap">
							<div class="stars"></div>
							<div class="line"></div>
						</div>
						<? $field = get_field('main_post_text'); ?> 
						<? if(!empty($field)): ?>
							<div class="post-text">
								<? echo $field; ?>
							</div>
						<? endif; ?>
						<div class="link">
							<a href="<? $url = get_field('main_post_link'); if(!empty($url)){ echo $url; } ?>">about more</a>
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