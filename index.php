<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Topforum
 */
    
    get_header();
?>
    <main id="primary" class="site-main">
        <div id="banner" style="background: url('<?php $image = get_field('image_banner');
        if (!empty($image)) : echo $image['url'];
        endif; ?>') no-repeat; background-size: cover; min-height: <?php echo $image['height']; ?>px">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    </div><!-- .col-md-6 -->
                    <div class="col-md-6">
                        <div class="itc-slider" data-swipe="false" data-loop="true" data-slider="itc-slider">
                            <div class="itc-slider-wrapper">
                                <div class="itc-slider-items">
                                    <?php
                                        $posts = get_posts( array(
                                            'numberposts' => -1,
                                            'category' => '4',
                                            'orderby' => 'date',
                                            'order' => 'ASC',
                                            'post_type' => 'post',
                                            'suppress_filters' => true,
                                        ) );
                                        if (count($posts) == 1) {
                                            $posts[] = $posts[0];
                                        }
                                        foreach ($posts as $post) {
                                            setup_postdata($post); ?>
                                            <div class="itc-slider-item">
                                                <div class="conferension">
                                                    <div class="conferension-inner">
                                                    <div class="date">
                                                        <time>
                                                            <p><?php the_field('day'); ?></p>
                                                            <p class="month"><?php the_field('month'); ?></p>
                                                            <p class="year"><?php the_field('year'); ?></p>
                                                        </time>
                                                    </div><!-- .date -->
                                                    <div class="text">
                                                        <p class="h"><?php the_field('header'); ?></p>
                                                        <p><?php the_field('text'); ?></p>
                                                        <p class="city"><?php the_field('city'); ?></p>
                                                    </div><!-- .text -->
                                                        <div class="clearfix"></div>
                                                    </div><!-- .conferension-inner -->
                                                </div><!-- .conferension -->
                                            </div><!-- .itc-slider-item -->
                                        <?php }
                                        wp_reset_postdata();
                                    ?>
                                </div><!-- .itc-slider-items -->
                                <button class="itc-slider-btn itc-slider-btn-prev"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/01_index_05.png" alt=""></button>
                                <button class="itc-slider-btn itc-slider-btn-next"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/01_index_06.png" alt=""></button>
                            </div><!-- .itc-slider-wrapper -->
                        </div><!-- .itc-slider -->
                    </div><!-- .col-md-6 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- #banner -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p><?php the_field('text_content'); ?></p>
                    </div><!-- .col-md-12 -->
                </div><!-- .row -->
                <div class="row">
                    <?php
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category' => '5',
                            'orderby' => 'date',
                            'order' => 'ASC',
                            'post_type' => 'post',
                            'suppress_filters' => true,
                        ) );
                        foreach ($posts as $post) {
                        setup_postdata($post); ?>
                        <div class="content_blocks col-md-4">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt=""><h3><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                                <div class="learn_more">
                                    <a href="<?php the_permalink(); ?>" class="button">Learn more</a>
                                    <p>Wealth TOP FORUM Israel 2016</p>
                                </div><!-- .learn_more -->
                            </div><!-- .content_blocks .col-md-4 -->
                        <?php }
                        wp_reset_postdata();
                    ?>
                </div><!-- .row -->
                <div class="row">
                    <div class="buttons col-md-12">
                        <a href="/registration" class="register_now button">REGISTER NOW</a>
                        <button class="subscribe button" data-bs-toggle="modal" data-bs-target="#myModal">SUBSCRIBE</button>
                        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <h3 class="modal-title" id="exampleModalLabel"><?php the_field('subscribe_header'); ?></h3>
                                    <p><?php the_field('subscribe_description'); ?></p>
                                    <?php echo do_shortcode('[contact-form-7 id="1090" title="SUBSCRIBE"]'); ?>
                                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div><!-- .modal-content -->
                            </div><!-- .modal-dialog -->
                        </div><!-- #myModal .modal .fade -->
                    </div><!-- .buttons .col-md-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- #content -->
        <div id="customer_reviews">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php echo get_the_category_by_ID(6); ?></h2>
                    </div><!-- .col-md-12 -->
                </div><!-- .row -->
                <div class="row">
                    <div class="col-md-12">
                        <div id="carousel1" class="owl-carousel">
                            <?php
                                $posts = get_posts( array(
                                    'numberposts' => -1,
                                    'category' => '6',
                                    'orderby' => 'date',
                                    'order' => 'ASC',
                                    'post_type' => 'post',
                                    'suppress_filters' => true,
                                ) );
                                for ($i = 0; $i <= 1; $i++) {
                                    foreach ($posts as $post) {
                                        setup_postdata($post); ?>
                                        <div class="carousel-element">
                                            <img src="<?php if (has_post_thumbnail()) {
                                                the_post_thumbnail_url();
                                            }
                                            else {
                                                echo bloginfo('template_url'); ?>/assets/images/01_index_11.png<?php } ?>" alt="">
                                            <div class="re">
                                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('d F Y'); ?></time>
                                                <?php the_content(); ?>
                                            </div><!-- .re -->
                                        </div><!-- .carousel-element -->
                                    <?php }
                                }
                                wp_reset_postdata();
                            ?>
                        </div><!-- #carousel1 -->
                    </div><!-- .col-md-12 -->
                </div><!-- .row -->       
            </div><!-- .container -->
        </div><!-- #customer_reviews -->
        <div id="promo_video">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php the_field('header_video'); ?></h2>
                        <div id="video_player_box">
                            <video id="my_video" width="682" poster="<?php $image = get_field('image_poster');
                                if (!empty($image)) {
                                    echo $image['url'];
                                } ?>">
                                <source src="<?php $video = get_field('video_ogv');
                                    if ($video) {
                                        echo $video['url'];
                                    } ?>" type="video.ogg">
                                <source src="<?php $video = get_field('video_mp4');
                                    if ($video) {
                                        echo $video['url'];
                                    } ?>" type="video/mp4">
                            </video>
                            <div id="playpause">
                                <div id="playpausebkgr"></div>
                                <div id="playpauseicon"></div>
                            </div><!-- #playpause -->
                            <div id="video_controls_bar">
                                <button id="playpausebtn"></button>
                                <span id="re_timetext"></span>
                                <input id="seekslider" type="range" min="0" max="100" value="0" step="1">
                                <div id="mute">
                                    <button id="mutebtn"></button>
                                    <div id="volumeslider_b">
                                        <input id="volumeslider" type="range" min="0" max="100" value="100" step="1">
                                    </div><!-- #volumeslider_b -->
                                </div><!-- #mute -->
                                <span id="quality">Авто</span>
                                <button id="fullscreenbtn"></button>
                            </div><!-- #video_controls_bar -->
                        </div><!-- #video_player_box -->
                    </div><!-- .col-md-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- #promo_video -->
        <div id="our_clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php echo get_the_category_by_ID(8); ?></h2>
                    </div><!-- .col-md-12 -->
                </div><!-- .row -->
                <div class="row">
                    <div class="col-md-12">
                        <div id="carousel2" class="owl-carousel">
                            <?php
                                $posts = get_posts( array(
                                    'numberposts' => -1,
                                    'category' => '8',
                                    'orderby' => 'date',
                                    'order' => 'ASC',
                                    'post_type' => 'post',
                                    'suppress_filters' => true,
                                ) );
                                for ($i = 0; $i <= 1; $i++) {
                                    foreach ($posts as $post) {
                                        setup_postdata($post); ?>
                                        <div class="carousel-element">
                                            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
                                        </div><!-- .carousel-element -->
                                    <?php }
                                }
                                wp_reset_postdata();
                            ?>
                        </div><!-- #carousel2 -->
                    </div><!-- .col-md-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- #our_clients -->
    </main><!-- #main -->
<?php
    get_footer();
?>