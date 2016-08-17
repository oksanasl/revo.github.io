<?php /* Template Name: Our prices*/ ?>
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
					<div class="col-lg-9 col-md-9">
					
						<? if(get_field('prices')): ?>
							<? while(has_sub_field('prices')): ?>
								<div class="prices-block">
									<? $field = get_sub_field('prices_title'); ?> 
									<? if(!empty($field)): ?>
										<div class="price-title">
											<p><? echo $field; ?></p>
										</div>
									<? endif; ?>
									
									<div class="price-list">
										<? $field = get_sub_field('prices_list'); ?> 
										<? if(!empty($field)): ?>
											<? foreach($field as $item): ?>
												<div class="text-block-wrap">
													<div class="text-block">
														<p><? echo $item['prices_list_text_one']; ?></p>
													</div>
													<div class="text-block">
														<p><? echo $item['prices_list_text_two']; ?></p>
													</div>
												</div>
											<? endforeach; ?>
										<? endif; ?>
									</div>
									<? $field = get_sub_field('prices_text'); ?> 
									<? if(!empty($field)): ?>
										<div class="sub-text">
											<p><? echo $field; ?></p>
										</div>
									<? endif; ?>
								</div>
							<? endwhile; ?>
						<? endif; ?>
						
						<div class="post-text">
							<? the_content(); ?>
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