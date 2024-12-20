<?php
/* Template Name: Media */
	get_header();
?>
	<main id="primary" class="site-main">
		<section class="media">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="media__title"><?php echo get_the_category_by_ID(15); ?></h2>
                        <p class="media__text"><?php the_field('media_description'); ?></p>
                    </div><!-- .col-md-12 -->
                </div><!-- .row -->
                <div class="articles row">
                    <?php
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category' => '15',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'post_type' => 'post',
                            'suppress_filters' => true,
                        ) );
                        foreach($posts as $post) {
                            setup_postdata($post); ?>
                            <div class="article col-lg-6 col-xl-4">
                                <a class="article__link" href="#">
                                    <img class="article__image" src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </a>
                                <h4 class="article__title">
                                    <a class="article__link article__link--text" href="#"><?php the_title(); ?></a>
                                </h4>
                                <p class="article__text"><?php the_excerpt(); ?></p>
                            </div><!-- .article .col-lg-6 .col-xl-4 -->
                        <?php }
                        wp_reset_postdata();
                    ?>
                </div><!-- .row .articles -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="articles__more_article more_article">
                            <a href="#" class="more_article__link button">More article</a>
                        </div><!-- .more_article -->
                    </div><!-- .col-md-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </section><!-- .media -->
	</main>
<?php
	get_footer();
?>