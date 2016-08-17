<?php /* Template Name: Contact*/ ?>
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
						<div class="cityes-title">
							<h3>Areas we cover</h3>
						</div>
					</div>
				</div>
				<div class="row">
				   <div class="col-lg-4 col-md-4 col-sm-4">
					   <div class="city-list">
						   <? $field = get_field('areas_block_one'); ?> 
							<? if(!empty($field)): ?>
								<p><? echo $field; ?></p>
							<? endif; ?>
					   </div>
				   </div>
				   <div class="col-lg-4 col-md-4 col-sm-4">
					   <div class="city-list">
						   <? $field = get_field('areas_block_two'); ?> 
							<? if(!empty($field)): ?>
								<p><? echo $field; ?></p>
							<? endif; ?>
					   </div>
				   </div>
				   <div class="col-lg-4 col-md-4 col-sm-4">
					   <div class="city-list">
						   <? $field = get_field('areas_block_three'); ?> 
							<? if(!empty($field)): ?>
								<p><? echo $field; ?></p>
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

    <div class="map-wrapper hidden-xs">
        <div id="map-canvas" class="map contact"></div>
    </div>

    <div class="page-wrap">
        <div class="container">
            <div class="col-lg-8 col-md-8" style="padding-right: 0;padding-left: 0;">
                <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="4" title="Контактная форма"]'); ?>
                </div>
            </div>
        </div>
    </div>
	
<? get_footer(); ?>