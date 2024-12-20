<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Topforum
 */?>
	<footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top_forum">
                        <a class="tops top_forum__tops" href="<?php bloginfo('home'); ?>">TOP FORUM</a>
                        <?php
                            wp_nav_menu(
                                array(
                                    'depth'          => '1',
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu-2',
                                    'menu_class'     => 'top_forum__list'
                                )
                            );
                        ?>
                    </div><!-- .top_forum -->
                    <div class="contact">
                        <a class="tops contact__tops" href="/contacts">CONTACT</a>
                        <p class="contact__text">Top Forum Group</p>
                        <p class="contact__text"><?php the_field('address', 2); ?></p>
                        <p class="contact__text"></p>
                        <br>
                        <p class="contact__text">
                            <a class="contact__link" href="tel:<?php the_field('telephone', 2); ?>">
                                <?php the_field('telephone', 2); ?>
                            </a>
                        </p>
                        <p class="contact__text">
                            <a class="contact__link contact__link--email" href="mailto:<?php the_field('email', 2); ?>">
                                <?php the_field('email', 2); ?>
                            </a>
                        </p>
                    </div><!-- .contact -->
                    <div class="follow_us">
                        <a href="#" class="tops follow_us__tops">FOLLOW US</a>
                    </div><!-- .follow_us -->
                </div><!-- .col-md-12 -->
            </div><!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p class="copyright__text">&copy; <?php echo date('Y'); ?> <?php the_field('text_copyright', 2); ?></p>
                    </div><!-- .copyright -->
                    <div class="website_development">
                        <p class="website_development__text"><?php the_field('text_wd', 2); ?></p>
                        <a class="website_development__link" href="#">
                        <img class="website_development__image" src="
                        <?php $image = get_field('image_wd', 2);
                        if (!empty($image)) {
                            echo $image['url'];
                        } ?>" alt=""></a>
                    </div><!-- .website_development -->
                </div><!-- .col-md-12 -->
            </div><!-- .row -->
        </div><!-- .container -->
	</footer><!-- #colophon -->
    
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>