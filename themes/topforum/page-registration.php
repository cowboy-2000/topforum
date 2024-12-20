<?php
/* Template Name: Registration */
	get_header();
?>
	<main id="primary" class="site-main">
		<section class="registration">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="registration__title">2 &nbsp;EASY STEPS TO REGISTER</h2>
						<a href="#" class="registration__step">FILL IN THE FORM IN ENGLISH</a>
						<img class="registration__next" src="<?php echo bloginfo('template_url'); ?>/assets/images/07_REGISTRATION_01.png" alt="">
						<a href="#" class="registration__step">READ THOROUGHLY TERMS&amp;CONDITIONS</a>
					</div><!-- .col-md-12 -->
				</div><!-- .row -->
				<?php echo do_shortcode('[form_registration]'); ?>
					
				
			</div><!-- .container -->
		</section><!-- .registration -->
	</main>
<?php
	get_footer();
?>