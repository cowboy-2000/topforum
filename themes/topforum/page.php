<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package topforum
 */

get_header();
?>
<main id="primary" class="site-main site-main--main-page">
	<section class="banner" style="background: url('<?php $image = get_field('image_banner');
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
										<div class="itc-slider__item itc-slider-item">
											<div class="conferension">
												<div class="conferension-inner">
													<div class="date">
														<time class="itc-slider-item__time time">
															<p class="time__text time__text--day"><?php the_field('day'); ?></p>
															<p class="time__text time__text--month"><?php the_field('month'); ?></p>
															<p class="time__text time__text--year"><?php the_field('year'); ?></p>
														</time>
													</div><!-- .date -->
													<div class="description">
														<p class="description__text description__text--header"><a href="#" class="description__link"><?php the_field('header'); ?></a></p>
														<p class="description__text description__text--content"><?php the_field('text'); ?></p>
														<p class="description__text description__text--city"><?php the_field('city'); ?></p>
													</div><!-- .text -->
												</div><!-- .conferension-inner -->
											</div><!-- .conferension -->
										</div><!-- .itc-slider-item -->
									<?php }
									wp_reset_postdata();
								?>
							</div><!-- .itc-slider-items -->
							<button class="itc-slider__btn itc-slider__btn--prev itc-slider-btn itc-slider-btn-prev"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/01_index_05.png" alt=""></button>
							<button class="itc-slider__btn itc-slider__btn--next itc-slider-btn itc-slider-btn-next"><img src="<?php echo bloginfo('template_url'); ?>/assets/images/01_index_06.png" alt=""></button>
						</div><!-- .itc-slider-wrapper -->
					</div><!-- .itc-slider -->
				</div><!-- .col-md-6 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .banner -->
	<section class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="content__text"><?php the_field('text_content'); ?></p>
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
							<img class="content_blocks__image" src="<?php the_post_thumbnail_url(); ?>" alt="">
							<h4 class="content_blocks__title"><a href="#" class="content_blocks__link"><?php the_title(); ?></a></h4>
							<p class="content_blocks__text"><?php the_content(); ?></p>
							<div class="content_blocks__learn_more learn_more">
								<a href="#" class="learn_more__link button">Learn more</a>
							</div><!-- .learn_more -->
							<p class="content_blocks__text content_blocks__text--wealth">Wealth TOP FORUM Israel 2016</p>
						</div><!-- .content_blocks .col-md-4 -->
					<?php }
					wp_reset_postdata();
				?>
			</div><!-- .row -->
			<div class="row">
				<div class="buttons col-md-12">
					<a href="/registration" class="content__button button">REGISTER NOW</a>
					<button class="button content__button content__button--subscribe" data-bs-toggle="modal" data-bs-target="#myModal">SUBSCRIBE</button>
					<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" role="dialog" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<h4 class="modal__title" id="exampleModalLabel"><?php the_field('subscribe_header'); ?></h4>
								<p class="modal__text"><?php the_field('subscribe_description'); ?></p>
								<?php echo do_shortcode('[contact-form-7 id="1090" title="SUBSCRIBE"]'); ?>
								<button type="button" class="modal__close btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div><!-- .modal-content -->
						</div><!-- .modal-dialog -->
					</div><!-- #myModal .modal .fade -->
				</div><!-- .buttons .col-md-12 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .content -->
	<section class="customer_reviews">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="customer_reviews__title"><?php echo get_the_category_by_ID(6); ?></h2>
				</div><!-- .col-md-12 -->
			</div><!-- .row -->
			<div class="row">
				<div class="col-md-12">
					<div id="carousel1" class="owl-carousel customer_reviews__carousel carousel1">
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
									<div class="carousel1__element carousel1-element">
										<img class="carousel1-element__image" src="<?php if (has_post_thumbnail()) {
											the_post_thumbnail_url();
										}
										else {
											echo bloginfo('template_url'); ?>/assets/images/01_index_11.png<?php } ?>" alt="">
										<div class="carousel1-element__review review">
											<h4 class="review__title"><a class="review__link" href="#"><?php the_title(); ?></a></h4>
											<time class="review__time" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('d F Y'); ?></time>
											<p class="review__text"><?php the_content(); ?></p>
										</div><!-- .review -->
									</div><!-- .carousel1-element -->
								<?php }
							}
							wp_reset_postdata();
						?>
					</div><!-- #carousel1 -->
				</div><!-- .col-md-12 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .customer_reviews -->
	<section class="promo_video">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="promo_video__title"><?php the_field('header_video'); ?></h2>
					<div id="video_player_box" class="video_player_box">
						<video id="my_video" class="video_player_box__my_video" width="682" poster="<?php $image = get_field('image_poster');
							if (!empty($image)) {
								echo $image['url'];
							} ?>">
							<source class="video_player_box__source" src="<?php $video = get_field('video_ogv');
								if ($video) {
									echo $video['url'];
								} ?>" type="video.ogg">
							<source class="video_player_box__source" src="<?php $video = get_field('video_mp4');
								if ($video) {
									echo $video['url'];
								} ?>" type="video/mp4">
						</video>
						<div id="playpause" class="video_player_box__playpause">
							<div id="playpausebkgr" class="video_player_box__playpausebkgr"></div>
							<div id="playpauseicon" class="video_player_box__playpauseicon"></div>
						</div><!-- #playpause -->
						<div id="video_controls_bar" class="video_player_box__video_controls_bar">
							<button id="playpausebtn" class="video_player_box__playpausebtn"></button>
							<span id="remaining_timetext" class="video_player_box__remaining_timetext"></span>
							<input id="seekslider" class="video_player_box__seekslider" type="range" min="0" max="100" value="0" step="1">
							<div id="mute" class="video_player_box__mute">
								<button id="mutebtn" class="video_player_box__mutebtn"></button>
								<div id="volumeslider_block" class="video_player_box__volumeslider_block">
									<input id="volumeslider" class="video_player_box__volumeslider" type="range" min="0" max="100" value="100" step="1">
								</div><!-- #volumeslider_b -->
							</div><!-- #mute -->
							<span id="quality" class="video_player_box__quality">Авто</span>
							<button id="fullscreenbtn" class="video_player_box__fullscreenbtn"></button>
						</div><!-- #video_controls_bar -->
					</div><!-- #video_player_box -->
				</div><!-- .col-md-12 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .promo_video -->
	<section class="our_clients">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="our_clients__title"><?php echo get_the_category_by_ID(8); ?></h2>
				</div><!-- .col-md-12 -->
			</div><!-- .row -->
			<div class="row">
				<div class="col-md-12">
					<div id="carousel2" class="owl-carousel our_clients__carousel carousel2">
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
									<div class="carousel2__element carousel2-element">
										<a class="carousel2-element__link" href="#">
											<img class="carousel2-element__image" src="<?php the_post_thumbnail_url(); ?>" alt="">
										</a>
									</div><!-- .carousel2-element -->
								<?php }
							}
							wp_reset_postdata();
						?>
					</div><!-- #carousel2 -->
				</div><!-- .col-md-12 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .our_clients -->
</main><!-- #main -->
<?php
	get_footer();
?>