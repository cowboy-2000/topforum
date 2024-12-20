<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Topforum
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> onload="intializePlayer()">
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'topforum' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-2">
						<nav class="site-navigation navbar navbar-expand-lg">
							<div class="container-fluid">
								<button class="navbar__toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar__toggler-icon navbar-toggler-icon"></span>
                                </button>
								<?php
									wp_nav_menu(
										array(
											'menu_id'         => 'primary-menu',
											'container_class' => 'navbar__collapse collapse navbar-collapse',
											'menu_class'      => 'navbar__list navbar-nav',
											'container_id'    => 'navbarSupportedContent',
											'theme_location'  => 'menu-1',
										)
									);
								?>
							</div><!-- .container-fluid -->
						</nav><!-- .site-navigation -->
					</div><!-- .col-lg-10 .col-2 -->
					<div class="col-10 col-lg-2">
						<a class="header-top__button button" href="#">TOP FORUM CLUB</a>
					</div><!-- .col-10 .col-lg-2 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .header-top -->
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="logo col-md-4 col-lg-4 col-xl-2">
						<?php the_custom_logo(); ?>
					</div><!-- .logo col-md-4 col-lg-4 col-xl-2 -->
					<div class="col-md-8 col-lg-6 col-xl-8">
						<?php echo do_shortcode('[header]'); ?>
					</div><!-- .col-md-8 col-lg-6 col-xl-8 -->
					<div class="col-lg-2">
						<a class="header-bottom__button button" href="/registration">REGISTER NOW</a>
					</div><!-- .col-md-2 col-lg-2 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .header-bottom -->
	</header><!-- #masthead -->