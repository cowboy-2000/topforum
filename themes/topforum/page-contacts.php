<?php
/* Template Name: Contacts */
	get_header();
?>
	<main id="primary" class="site-main">
		<section class="contacts">
			<div class="container">
				<div class="row">
					<div class="col-xl-8">
						<img class="contacts__map" src="<?php echo bloginfo('template_url'); ?>/assets/images/06_contacts_01 (2).jpg" alt="">
					</div><!-- .col-xl-8 -->
					<div class="col-xl-4">
						<?php
							$posts = get_posts( array(
                                'numberposts' => -1,
                                'category' => '9',
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'post_type' => 'post',
                                'suppress_filters' => true,
                            ) );
                            foreach ($posts as $post) {
                                setup_postdata($post); ?>
                                <div class="contact">
                                	<p class="contact__text contact__text--header"><?php the_field('contact_header'); ?></p>
                                	<p class="contact__text contact__text--name"><?php the_field('contact_name'); ?></p>
                                	<p class="contact__text">E: <a class="contact__link contact__link--email" href="mailto:<?php the_field('contact_email'); ?>"><?php the_field('contact_email'); ?></a></p>
                                	<p class="contact__text">P: <a class="contact__link contact__link--phone" href="tel:<?php the_field('contact_phone'); ?>"><?php the_field('contact_phone'); ?></a></p>
                                </div><!-- .contact -->
                            <?php }
                            wp_reset_postdata();
                        ?>
					</div><!-- .col-xl-4 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .contacts -->
		<section class="feedback">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="feedback__title">FEEDBACK</h2>
					</div><!-- .col-md-12 -->
				</div><!-- .row -->
				<div class="row">
					<div class="col-md-6">
						<?php echo do_shortcode('[contact-form-7 id="512" title="FEEDBACK"]'); ?>
					</div><!-- .col-md-6 -->
					<div class="col-md-6 questions">
						<p class="questions__text questions__text--fw-500">You can also ask questions by phone of a hot line:</p>
						<p class="questions__text questions__text--fw-600"><?php the_field('telephone', 2); ?>
						<p class="questions__text questions__text--fw-400">The answers to many questions already in our <a class="questions__link" href="#">FAQ</a></p>
						<p class="questions__text questions__text--fw-300">All suggestions and comments are considered mandatory!</p>
					</div><!-- .col-md-6 .questions -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- .feedback -->
	</main>
<?php
	get_footer();
?>