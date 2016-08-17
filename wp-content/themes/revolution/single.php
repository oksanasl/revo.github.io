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