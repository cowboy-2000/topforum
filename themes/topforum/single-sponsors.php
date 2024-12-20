<?php
/* Template Name: Detail of sponsors or exhibitors */
/* Template Post Type: post, our_sponsors */
	get_header();
?>
	<main id="primary" class="site-main">
		<section class="detail_sponsor">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="detail_sponsor__title"><?php the_field('header_of_detail_sponsor'); ?></h2>
						<p class="detail_sponsor__text detail_sponsor__text--description"><?php the_field('description_of_detail_sponsor'); ?></p>
						<div class="detail_sponsor__wrapper_image">
							<img class="detail_sponsor__image" src="<?php $image = get_field('sponsor_image');
								if (!empty($image)) {
									echo $image['url'];
								} ?>" alt="">
						</div><!-- .wrapper_image -->
						<p class="detail_sponsor__text"><?php the_field('content_of_detail_sponsor'); ?></p>
						<div class="row images">
							<div class="col-lg-6 col-xl-4">
								<img class="images__image" src="<?php $image_id = get_post_thumbnail_id(916);
									$image_url = wp_get_attachment_image_url($image_id, 'full');
									echo $image_url; ?>" alt="">
							</div><!-- .col-lg-6 .col-xl-4 -->
							<div class="col-lg-6 col-xl-4">
								<img class="images__image" src="<?php $image_id = get_post_thumbnail_id(920);
									$image_url = wp_get_attachment_image_url($image_id, 'full');
									echo $image_url; ?>" alt="">
							</div><!-- .col-lg-6 .col-xl-4 -->
						</div><!-- .row .images -->
						<p class="detail_sponsor__text"><?php the_field('content_2_of_detail_sponsor'); ?></p>
					</div><!-- .col-md-12 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .detail_sponsor -->
	</main>
<?php
	get_footer();
?>