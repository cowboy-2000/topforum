<?php
/* Template Name: Sponsors */
	get_header();
?>
	<main id="primary" class="site-main">
		<section class="our_sponsors">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="our_sponsors__title"><?php echo get_the_category_by_ID(11); ?></h2>
                        <p class="our_sponsors__text"><?php the_field('sponsors_description'); ?></p>
                        <div class="conference">
                            <h4 class="conference__title"><?php echo get_the_category_by_ID(12); ?></h4>
                            <?php echo do_shortcode('[select_1]'); ?>
                        </div><!-- .conference -->
                        <div class="sponsors row">
                            <?php
                                $posts = get_posts( array(
                                    'numberposts' => -1,
                                    'category' => '11',
                                    'orderby' => 'date',
                                    'order' => 'ASC',
                                    'post_type' => 'post',
                                    'suppress_filters' => true,
                                ) );
                                foreach($posts as $post) {
                                    setup_postdata($post); ?>
                                    <div class="sponsor col-md-6 col-lg-4 col-xl-3">
                                        <h3 class="sponsor__title sponsor"><?php the_title(); ?></h3>
                                        <a class="sponsor__link" href="<?php the_permalink(); ?>">
                                            <img class="sponsor__image" src="<?php $image = get_field('sponsor_image');
                                            if (!empty($image)) {
                                                echo $image['url'];
                                            } ?>" alt="">
                                        </a>
                                        <h4 class="sponsor__title sponsor__title--brand"><?php the_field('sponsor'); ?></h4>
                                        <p class="sponsor__text"><?php the_field('sponsor_description'); ?></p>
                                        <div class="sponsor__learn_more learn_more">
                                            <a href="<?php the_permalink(); ?>" class="learn_more__link button">Learn more</a>
                                        </div><!-- .learn_more -->
                                    </div><!-- .sponsor .col-md-3 -->
                                <?php  }
                                wp_reset_postdata();
                            ?>
                        </div><!-- .sponsors -->
                    </div><!-- .col-md-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
	    </section><!-- .our_sponsors -->
	</main>
<?php
	get_footer();
?>