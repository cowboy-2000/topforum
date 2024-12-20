<?php
/* Template Name: Speakers */
	get_header();
?>
	<main id="primary" class="site-main">
		<section class="our_speakers ">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="our_speakers__title"><?php echo get_the_category_by_ID(14); ?></h2>
						<p class="our_speakers__text"><?php the_field('speakers_description'); ?></p>
						<div class="conference">
							<h4 class="conference__title"><?php echo get_the_category_by_ID(12); ?></h4>
							<?php echo do_shortcode('[select_1]'); ?>
</div><!-- .conference -->
		            </div><!-- .col-md-12 -->
		        </div><!-- .row -->
		        <div class="speakers row">
		        	<?php
		        		$posts = get_posts( array(
		        			'numberposts' => -1,
		        			'category' => '14',
		        			'orderby' => 'date',
	                        'order' => 'ASC',
	                        'post_type' => 'post',
	                        'suppress_filters' => true,
	                    ) );
	                    foreach($posts as $post) {
	                    	setup_postdata($post); ?>
	                    	<div class="speaker col-md-6 col-lg-4 col-xl-3">
	                    		<img class="speaker__image" src="<?php the_post_thumbnail_url(); ?>" alt="">
	                    		<h4 class="speaker__title">
                                    <a class="speaker__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
	                    		<p class="speaker__text"><?php the_content(); ?></p>
	                    		<div class="speaker__learn_more learn_more">
	                    			<a href="<?php the_permalink(); ?>" class="learn_more__link button">Learn more</a>
	                    		</div><!-- .learn_more -->
	                    	</div><!-- .speaker .col-md-3 -->
	                    <?php }
		                wp_reset_postdata();
		            ?>	
				</div><!-- .row .speakers -->
			</div><!-- .container -->
		</section><!-- .our_speakers -->
	</main>
<?php
	get_footer();
?>