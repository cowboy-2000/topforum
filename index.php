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
 * @package foxminded
 */

get_header();
?>
	<main id="primary" class="site-main">
        <section class="site-main__section section_1">
            <div class="container section_1__container">
                <div class="row section_1__row">
                    <div class="col-md-8 section_1__col">
                        <div class="section_1__content">
                            <h1 class="section_1__title"><?php the_field('title_of_first_section'); ?></h1>
                            <p class="section_1__text"><?php the_field('descr_of_first_section'); ?></p>
                            <div class="section_1__stores stores d-md">
                                <div class="stores__block">
                                    <a class="stores__link" href="#">   <img src="<?php echo get_field('image_of_google_play')['url']; ?>" alt="" class="stores__image"></a>
                                </div><!-- .stores__block -->
                                <div class="stores__block">
                                    <a class="stores__link" href="#"><img src="<?php echo get_field('image_of_app_store')['url']; ?>" alt="" class="stores__image"></a>
                                </div><!-- .stores__block -->
                            </div><!-- .stores -->
                        </div><!-- .section_1__content -->
                    </div><!-- .col-md-8 -->
                    <div class="col-md-4 section_1__col">
                        <img src="<?php echo get_field('image_of_first_section')['url']; ?>" alt="" class="section_1__image">
                        <div class="section_1__stores stores d-sm">
                            <div class="stores__block">
                                <a class="stores__link" href="#"><img src="<?php echo get_field('image_of_google_play')['url']; ?>" alt="" class="stores__image--google_play"></a>
                            </div><!-- .stores__block -->
                            <div class="stores__block">
                                <a class="stores__link" href="#"><img src="<?php echo get_field('image_of_app_store')['url']; ?>" alt="" class="stores__image--app_store"></a>
                            </div><!-- .stores__block -->
                        </div><!-- .stores -->
                    </div><!-- .col-md-4 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </section>
        <section class="site-main__section section_2">
            <div class="container section_2__container">
                <div class="row section_2__row">
                    <div class="col-md-12 section_2__col">
                        <h1 class="section_2__title"><?php echo get_the_category_by_ID(3); ?></h1>
                        <?php
                            $posts = get_posts( array(
                                'numberposts' => -1,
                                'category' => 3,
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'post_type' => 'post',
                                'suppress_filters' => true,
                            ) );
                            foreach ($posts as $post) {
                                setup_postdata($post); ?>
                                <div class="section_2__block section_2-block">
                                    <svg width="154" height="154" viewBox="0 0 154 154" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.05">
                                            <circle cx="5" cy="5" r="5" fill="#0F001A"/>
                                            <circle cx="5" cy="33.6875" r="5" fill="#0F001A"/>
                                            <circle cx="5" cy="62.375" r="5" fill="#0F001A"/>
                                            <circle cx="5" cy="91.0625" r="5" fill="#0F001A"/>
                                            <circle cx="5" cy="119.75" r="5" fill="#0F001A"/>
                                            <circle cx="5" cy="148.438" r="5" fill="#0F001A"/>
                                            <circle cx="33.6875" cy="5" r="5" fill="#0F001A"/>
                                            <circle cx="33.6875" cy="33.6875" r="5" fill="#0F001A"/>
                                            <circle cx="33.6875" cy="62.375" r="5" fill="#0F001A"/>
                                            <circle cx="33.6875" cy="91.0625" r="5" fill="#0F001A"/>
                                            <circle cx="33.6875" cy="119.75" r="5" fill="#0F001A"/>
                                            <circle cx="33.6875" cy="148.438" r="5" fill="#0F001A"/>
                                            <circle cx="62.375" cy="5" r="5" fill="#0F001A"/>
                                            <circle cx="62.375" cy="33.6875" r="5" fill="#0F001A"/>
                                            <circle cx="62.375" cy="62.375" r="5" fill="#0F001A"/>
                                            <circle cx="62.375" cy="91.0625" r="5" fill="#0F001A"/>
                                            <circle cx="62.375" cy="119.75" r="5" fill="#0F001A"/>
                                            <circle cx="62.375" cy="148.438" r="5" fill="#0F001A"/>
                                            <circle cx="91.0625" cy="5" r="5" fill="#0F001A"/>
                                            <circle cx="119.75" cy="5" r="5" fill="#0F001A"/>
                                            <circle cx="148.438" cy="5" r="5" fill="#0F001A"/>
                                            <circle cx="91.0625" cy="33.6875" r="5" fill="#0F001A"/>
                                            <circle cx="119.75" cy="33.6875" r="5" fill="#0F001A"/>
                                            <circle cx="148.438" cy="33.6875" r="5" fill="#0F001A"/>
                                            <circle cx="91.0625" cy="62.375" r="5" fill="#0F001A"/>
                                            <circle cx="119.75" cy="62.375" r="5" fill="#0F001A"/>
                                            <circle cx="148.438" cy="62.375" r="5" fill="#0F001A"/>
                                            <circle cx="91.0625" cy="91.0625" r="5" fill="#0F001A"/>
                                            <circle cx="91.0625" cy="119.75" r="5" fill="#0F001A"/>
                                            <circle cx="91.0625" cy="148.438" r="5" fill="#0F001A"/>
                                            <circle cx="119.75" cy="91.0625" r="5" fill="#0F001A"/>
                                            <circle cx="119.75" cy="119.75" r="5" fill="#0F001A"/>
                                            <circle cx="119.75" cy="148.438" r="5" fill="#0F001A"/>
                                            <circle cx="148.438" cy="91.0625" r="5" fill="#0F001A"/>
                                            <circle cx="148.438" cy="119.75" r="5" fill="#0F001A"/>
                                            <circle cx="148.438" cy="148.438" r="5" fill="#0F001A"/>
                                        </g>
                                    </svg>
                                    <div class="wrapper section_2-block__wrapper">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="section_2-block__image">
                                        <div class="section_2-block__content">
                                            <h3 class="section_2-block__title"><?php the_title(); ?></h3>
                                            <p class="section_2-block__text"><?php the_content(); ?></p>
                                            <a class="section_2-block__link" href="<?php the_permalink(); ?>">Learn more
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.27654 0.131104L6.9593 1.44834L12.1722 6.67058H0.802856V8.539H12.1722L6.9593 13.7612L8.27654 15.0785L15.7502 7.60479L8.27654 0.131104Z" fill="#CC5520"/>
                                                </svg>
                                            </a>
                                        </div><!-- .section_2-block__content -->
                                    </div><!-- .wrapper -->
                                </div><!-- .section_2-block -->
                            <?php }
                            wp_reset_postdata();
                        ?>
                    </div><!-- .col-md-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </section>
        <section class="site-main__section section_3">
            <div class="container section_3__container">
                <div class="row section_3__row">
                    <div class="col-md-12 section_3__col">
                    <h2 class="section_3__title"><?php echo get_the_category_by_ID(4); ?></h2>
                    </div><!-- .col-md-12 -->
                </div><!-- .row -->
                <div class="row section_3__row section_3__row--margin">
                    <?php
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category' => 4,
                            'orderby' => 'date',
                            'order' => 'ASC',
                            'post_type' => 'post',
                            'suppress_filters' => true,
                        ) );
                        foreach ($posts as $post) {
                            setup_postdata($post); ?>
                            <div class="col-md-4">
                                <div class="section_3__block section_3-block">
                                    <?php the_field('svg_for_image_of_works'); ?>
                                    <h5 class="section_3-block__title"><?php the_title(); ?></h5>
                                    <p class="section_3-block__text"><?php the_content(); ?></p>
                                </div><!-- .section_3-block -->
                                    </div><!-- .col-md-4 -->
                        <?php }
                        wp_reset_postdata();
                    ?>
                </div><!-- .row -->
            </div><!-- .container -->
        </section>
        <section class="site-main__section section_4">
            <div class="container section_4__container">
                <div class="row section_4__row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6 section_4__col">
                        <h2 class="section_4__title"><?php echo get_the_category_by_ID(5); ?></h2>
                    </div><!-- .col-md-6 -->
                </div><!-- .row -->
                <div class="row section_4__row">
                    <div class="col-md-12 section_4__col">
                        <div id="carouselExampleIndicators" class="carousel slide section_4__carousel" data-ride="carousel">
                            <div class="carousel-inner section_4__carousel-inner">
                                <?php
                                    $posts = get_posts( array(
                                        'numberposts' => -1,
                                        'category' => 5,
                                        'orderby' => 'date',
                                        'order' => 'ASC',
                                        'post_type' => 'post',
                                        'suppress_filters' => true,
                                    ) );
                                    if (count($posts) == 1) {
                                        $posts[] = $posts[0];
                                    }
                                    foreach ($posts as $i => $post) {
                                        setup_postdata($post); ?>
                                        <div class="carousel-item<?php if ($i == 0) { ?> active<?php } ?> carousel__item">
                                            <div class="row carousel-item__row">
                                                <div class="col-md-6 carousel-item__col">
                                                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="carousel-item__image">
                                                <div class="carousel-item__background"></div>
                                                </div>
                                                <div class="col-md-6 carousel-item__col">
                                                    <div class="carousel-item__content">
                                                        <svg width="113" height="99" viewBox="0 0 113 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M102.406 49.5H84.75V35.375C84.75 27.5842 91.0842 21.25 98.875 21.25H100.641C103.576 21.25 105.938 18.8885 105.938 15.9531V5.35938C105.938 2.42402 103.576 0.0625 100.641 0.0625H98.875C79.3648 0.0625 63.5625 15.8648 63.5625 35.375V88.3438C63.5625 94.1924 68.3076 98.9375 74.1562 98.9375H102.406C108.255 98.9375 113 94.1924 113 88.3438V60.0938C113 54.2451 108.255 49.5 102.406 49.5ZM38.8438 49.5H21.1875V35.375C21.1875 27.5842 27.5217 21.25 35.3125 21.25H37.0781C40.0135 21.25 42.375 18.8885 42.375 15.9531V5.35938C42.375 2.42402 40.0135 0.0625 37.0781 0.0625H35.3125C15.8023 0.0625 0 15.8648 0 35.375V88.3438C0 94.1924 4.74512 98.9375 10.5938 98.9375H38.8438C44.6924 98.9375 49.4375 94.1924 49.4375 88.3438V60.0938C49.4375 54.2451 44.6924 49.5 38.8438 49.5Z" fill="#878787"/>
                                                        </svg>
                                                        <p class="carousel-item__text"><?php the_content(); ?></p>
                                                        <a class="carousel-item__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                        <svg width="154" height="154" viewBox="0 0 154 154" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g opacity="0.05">
                                                                <circle cx="5" cy="5" r="5" fill="#0F001A"/>
                                                                <circle cx="5" cy="33.6875" r="5" fill="#0F001A"/>
                                                                <circle cx="5" cy="62.375" r="5" fill="#0F001A"/>
                                                                <circle cx="5" cy="91.0625" r="5" fill="#0F001A"/>
                                                                <circle cx="5" cy="119.75" r="5" fill="#0F001A"/>
                                                                <circle cx="5" cy="148.438" r="5" fill="#0F001A"/>
                                                                <circle cx="33.6875" cy="5" r="5" fill="#0F001A"/>
                                                                <circle cx="33.6875" cy="33.6875" r="5" fill="#0F001A"/>
                                                                <circle cx="33.6875" cy="62.375" r="5" fill="#0F001A"/>
                                                                <circle cx="33.6875" cy="91.0625" r="5" fill="#0F001A"/>
                                                                <circle cx="33.6875" cy="119.75" r="5" fill="#0F001A"/>
                                                                <circle cx="33.6875" cy="148.438" r="5" fill="#0F001A"/>
                                                                <circle cx="62.375" cy="5" r="5" fill="#0F001A"/>
                                                                <circle cx="62.375" cy="33.6875" r="5" fill="#0F001A"/>
                                                                <circle cx="62.375" cy="62.375" r="5" fill="#0F001A"/>
                                                                <circle cx="62.375" cy="91.0625" r="5" fill="#0F001A"/>
                                                                <circle cx="62.375" cy="119.75" r="5" fill="#0F001A"/>
                                                                <circle cx="62.375" cy="148.438" r="5" fill="#0F001A"/>
                                                                <circle cx="91.0625" cy="5" r="5" fill="#0F001A"/>
                                                                <circle cx="119.75" cy="5" r="5" fill="#0F001A"/>
                                                                <circle cx="148.438" cy="5" r="5" fill="#0F001A"/>
                                                                <circle cx="91.0625" cy="33.6875" r="5" fill="#0F001A"/>
                                                                <circle cx="119.75" cy="33.6875" r="5" fill="#0F001A"/>
                                                                <circle cx="148.438" cy="33.6875" r="5" fill="#0F001A"/>
                                                                <circle cx="91.0625" cy="62.375" r="5" fill="#0F001A"/>
                                                                <circle cx="119.75" cy="62.375" r="5" fill="#0F001A"/>
                                                                <circle cx="148.438" cy="62.375" r="5" fill="#0F001A"/>
                                                                <circle cx="91.0625" cy="91.0625" r="5" fill="#0F001A"/>
                                                                <circle cx="91.0625" cy="119.75" r="5" fill="#0F001A"/>
                                                                <circle cx="91.0625" cy="148.438" r="5" fill="#0F001A"/>
                                                                <circle cx="119.75" cy="91.0625" r="5" fill="#0F001A"/>
                                                                <circle cx="119.75" cy="119.75" r="5" fill="#0F001A"/>
                                                                <circle cx="119.75" cy="148.438" r="5" fill="#0F001A"/>
                                                                <circle cx="148.438" cy="91.0625" r="5" fill="#0F001A"/>
                                                                <circle cx="148.438" cy="119.75" r="5" fill="#0F001A"/>
                                                                <circle cx="148.438" cy="148.438" r="5" fill="#0F001A"/>
                                                            </g>
                                                        </svg>
                                                    </div><!-- .carousel-item__content -->
                                                </div>
                                            </div><!-- .row -->
                                        </div><!-- .carousel-item -->
                                    <?php }
                                    wp_reset_postdata();
                                ?>
                            </div><!-- .carousel-inner -->
                            <div class="carousel__control">
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M24.3535 8.95068L15.8452 17.459L24.3535 25.9673L22.6518 29.3706L10.7402 17.459L22.6518 5.54736L24.3535 8.95068Z" fill="white"/>
                                    </svg>
                                    <span class="visually-hidden">Предыдущий</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.8067 25.9673L19.3149 17.459L10.8067 8.95072L12.5083 5.5474L24.4199 17.459L12.5083 29.3706L10.8067 25.9673Z" fill="#CC5520"/>
                                    </svg>
                                    <span class="visually-hidden">Следующий</span>
                                </button>
                            </div><!-- .carousel__control -->
                        </div><!-- .carousel -->
                    </div><!-- .col-md-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </section>
        <section class="site-main__section section_5">
            <div class="container section_5__container">
                <div class="row section_5__row">
                    <div class="col-md-6 section_5__col">
                        <img src="<?php echo get_field('image_of_last_section')['url']; ?>" alt="" class="section_5__image">
                    </div><!-- .col-md-6 -->
                    <div class="col-md-6 section_5__col">
                        <div class="section_5__content">
                            <h2 class="section_5__title"><?php the_field('title_of_last_section'); ?></h2>
                            <p class="section_5__text"><?php the_field('descr_of_last_section'); ?></p>
                            <div class="section_5__stores stores">
                                <div class="stores__block">
                                    <a class="stores__link" href="#"><img src="<?php echo get_field('image_of_google_play')['url']; ?>" alt="" class="stores__image"></a>
                                </div><!-- .stores__block -->
                                <div class="stores__block">
                                    <a class="stores__link" href="#"><img src="<?php echo get_field('image_of_app_store')['url']; ?>" alt="" class="stores__image"></a>
                                </div><!-- .stores__block -->
                            </div><!-- .stores -->
                        </div><!-- .section_5__content -->
                    </div><!-- .col-md-6 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </section>
	</main><!-- #main -->
<?php

    get_footer();
?>