<?php
/* Template Name: Detail of speakers */
/* Template Post Type: post, our_speakers */
	get_header();
?>
	<main id="primary" class="site-main">
		<section class="detail_speaker">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="detail_speaker__title"><?php the_field('header_of_detail_speaker'); ?></h2>
						<p class="detail_speaker__text detail_speaker__text--description"><?php the_field('description_of_detail_speaker'); ?></p>
						<div class="detail_speaker__wrapper_image">
							<img class="detail_speaker__image" src="<?php the_post_thumbnail_url(); ?>" alt="">
						</div><!-- .wrapper_image -->
						<p class="detail_speaker__text"><?php the_field('content_of_detail_speaker'); ?></p>
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
						<p class="detail_speaker__text"><?php the_field('content_2_of_detail_speaker'); ?></p>
					</div><!-- .col-md-12 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .detail_speaker -->
	</main>
<?php
	get_footer();
?>