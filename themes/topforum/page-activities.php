<?php
/* Template Name: Activities */
	get_header();
?>
	<main id="primary" class="site-main">
		<section class="activities">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="activities__title"><?php the_field('header_activities'); ?></h2>
						<p class="activities__text"><?php the_field('description_activities'); ?></p>
					</div><!-- .col-md-12 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .activities -->
		<section class="our_events">
			<div class="container">
				<?php
					$posts = get_posts( array(
                        'numberposts' => 5,
                        'category' => '15',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post_type' => 'post',
                        'suppress_filters' => true,
                    ) );
					foreach ($posts as $post) {
                        setup_postdata($post); ?>
						<div class="event">
							<div class="row">
								<div class="col-md-7 col-lg-5 col-xl-4">

								
									<div class="event__image_block">
										<img class="event__image" src="<?php the_post_thumbnail_url(); ?>" alt="">
										<?php if (get_field('is_sold_out') == 'Yes') { ?>
											<p class="event__sold_out">Sold out</p>
										<?php } ?>
									</div><!-- .event__image_block -->
								</div><!-- .col-md-7 .col-lg-5 .col-xl-4 -->
								<div class="col-md-5 col-lg-7 col-xl-8">
									<div class="event__content">
										<h4 class="event__title"><a class="event__link" href="#"><?php the_title(); ?></a></h4>
										<p class="event__date_type"><?php the_field('date__type_of_participation'); ?></p>
										<p class="event__text"><?php the_content(); ?></p>
										<div class="event__learn_more learn_more">
											<a href="#" class="learn_more__link button">Learn more</a>
										</div><!-- .learn_more -->
									</div><!-- .event__content -->
								</div><!-- .col-md-5 .col-lg-7 .col-xl-8 -->
							</div><!-- .row -->
						</div><!-- .event -->
                    <?php }
                    wp_reset_postdata();
                ?>
            </div><!-- .container -->
		</section><!-- .our_events -->
	</main>
<?php
	get_footer();
?>