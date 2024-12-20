<?php
/* Template Name: Exhibitors */
	get_header();
?>
	<main id="primary" class="site-main">
		<section class="our_exhibitors">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="our_exhibitors__title"><?php echo get_the_category_by_ID(13); ?></h2>
						<p class="our_exhibitors__text"><?php the_field('exhibitors_description'); ?></p>
						<div class="conference">
						    <h4 class="conference__title"><?php echo get_the_category_by_ID(12); ?></h4>
						    <?php echo do_shortcode('[select_1]'); ?>
                        </div><!-- .conference -->
					</div><!-- .col-md-12 -->
				</div><!-- .row -->
				<div class="exhibitors row">
					<?php
						$posts = get_posts( array(
	                        'numberposts' => -1,
	                        'category' => '13',
	                        'orderby' => 'date',
	                        'order' => 'ASC',
	                        'post_type' => 'post',
	                        'suppress_filters' => true,
	                    ) );
	                    $index1 = array_search(562, array_column($posts, 'ID'));
	                    $index2 = array_search(573, array_column($posts, 'ID'));
	                    $first_post = get_post(562);
	                    $second_post = get_post(573);
	                    $posts[$index1] = $second_post;
	                    $posts[$index2] = $first_post;
	                    foreach($posts as $post) {
	                    	setup_postdata($post); ?>
	                    	<div class="exhibitor col-md-6 col-lg-4 col-xl-3">
	                    		<a class="exhibitor__link" href="<?php the_permalink(); ?>">
                                    <img class="exhibitor__image" src="<?php $image = get_field('sponsor_image');
	                    		    if (!empty($image)) {
	                    			    echo $image['url'];
	                    		    } ?>" alt="">
                                </a>
	                    		<h4 class="exhibitor__title"><?php the_field('sponsor'); ?></h4>
	                    		<p class="exhibitor__text"><?php the_field('sponsor_description'); ?></p>
	                    		<div class="exhibitor__learn_more learn_more">
	                    			<a href="<?php the_permalink(); ?>" class="learn_more__link button">Learn more</a>
	                    		</div><!-- .learn_more -->
	                    	</div><!-- .exhibitor .col-md-3 -->
	                    <?php  }
	                    wp_reset_postdata();
	                ?>
				</div><!-- .row .exhibitors -->
			</div><!-- .container -->
		</section><!-- .our_exhibitors -->
	</main>
<?php
	get_footer();
?>