<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package foxminded
 */

?>

	<footer id="colophon" class="site-footer">
        <div class="container site-footer__container">
            <div class="row site-footer__row">
                <div class="col-md-2 site-footer__col">
                    <div class="site-footer__logo logo">
                        <a class="logo__link" href="<?php bloginfo('home'); ?>"><?php the_field('logo_footer'); ?></a>
                    </div><!-- .logo -->
                </div><!-- .col-md-2 -->
                <div class="col-md-2 site-footer__col">
                    <h5 class="site-footer__title"><?php echo get_the_category_by_ID(8); ?></h5>
                    <?php
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category' => 8,
                            'orderby' => 'date',
                            'order' => 'ASC',
                            'post_type' => 'post',
                            'suppress_filters' => true,
                        ) );
                        foreach ($posts as $post) {
                            setup_postdata($post); ?>
                            <a class="site-footer__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php }
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="col-md-2 site-footer__col">
                    <h5 class="site-footer__title"><?php echo get_the_category_by_ID(6); ?></h5>
                    <?php
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category' => 6,
                            'orderby' => 'date',
                            'order' => 'ASC',
                            'post_type' => 'post',
                            'suppress_filters' => true,
                        ) );
                        foreach ($posts as $post) {
                            setup_postdata($post); ?>
                            <a class="site-footer__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php }
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="col-md-2 site-footer__col">
                    <h5 class="site-footer__title"><?php echo get_the_category_by_ID(7); ?></h5>
                    <?php
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category' => 7,
                            'orderby' => 'date',
                            'order' => 'ASC',
                            'post_type' => 'post',
                            'suppress_filters' => true,
                        ) );
                        foreach ($posts as $post) {
                            setup_postdata($post); ?>
                            <a class="site-footer__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php }
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="col-md-4 site-footer__col">
                    <h5 class="site-footer__title site-footer__title--form"><?php the_field('title_of_contacts'); ?></h5>
                    <?php echo do_shortcode('[contact-form-7 id="27" title="Contact form 1"]'); ?>
                </div><!-- .col-md-4 -->
            </div><!-- .row -->
            <div class="row site-footer__row site-footer__row--sub">
                <div class="col-md-6 site-footer__col site-footer__col--socials">
                    <?php
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category' => 9,
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'post_type' => 'post',
                        'suppress_filters' => true,
                    ) );
                    foreach ($posts as $post) {
                        setup_postdata($post); ?>
                        <a class="site-footer__link" href="<?php the_permalink(); ?>"><?php the_field('svg_for_image_of_social'); ?></a>
                    <?php }
                    wp_reset_postdata();
                    ?>
                </div><!-- .col-md-6 -->
                <div class="col-md-6 site-footer__col site-footer__col--copyright">
                    <p class="site-footer__text"><?php the_field('text_of_copyright'); ?></p>
                </div><!-- .col-md-6 -->
                    <p class="site-footer__text"><?php the_field('text_of_copyright'); ?></p>
            </div><!-- .row -->
        </div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap-bundle.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/script.js" type="text/javascript"></script>
<?php wp_footer(); ?>

</body>
</html>
