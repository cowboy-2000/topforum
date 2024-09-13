<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package foxminded
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/assets/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" type="application/json" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css.map">
    <link rel="stylesheet" type="application/json" href="<?php bloginfo('template_url'); ?>/assets/css/style.css.map">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <script src="<?php echo bloginfo('template_url'); ?>/assets/js/jquery-1.9.1.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foxminded' ); ?></a>
    <div class="background"></div>
    <div class="wrapper"></div>
	<header id="masthead" class="site-header">
        <div class="container site-header__container">
            <div class="row site-header__row">
                <div class="col-md-7 site-header__col">
                        <div class="site-header__logo logo">
                        <a class="logo__link" href="<?php bloginfo('home'); ?>"><?php the_field('logo_header'); ?></a>
                    </div><!-- .logo -->
                </div><!-- .col-md-7 -->
                <div class="col-md-5 site-header__col">
                    <nav id="site-navigation" class="navbar navbar-expand-md site-header__navbar">
                        <div class="container-fluid navbar__container-fluid">
                            <button class="navbar navbar-toggler navbar__navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="primary-menu" aria-expanded="false">
                                <span class="navbar-toggler__icon-bar icon-bar"></span>
                                <span class="navbar-toggler__icon-bar icon-bar"></span>
                                <span class="navbar-toggler__icon-bar icon-bar"></span>
                            </button>
                            <?php
                                wp_nav_menu(
                                    array(
                                        'menu_id'         => 'primary-menu',
                                        'container_class' => 'collapse navbar-collapse navbar__collapse',
                                        'menu_class'      => 'navbar__list sf-menu navbar-nav',
                                        'container_id'    => 'navbarSupportedContent',
                                        'theme_location'  => 'menu-1',
                                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s <li class="navbar__item"><a href="#" class="navbar__link navbar__link--close">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="11.7889" width="1.98478" height="16.6721" rx="0.992388" transform="rotate(45 11.7889 0)" fill="#969595"/>
                                                <rect x="13.4731" y="11.7891" width="1.98478" height="16.6721" rx="0.992388" transform="rotate(135 13.4731 11.7891)" fill="#969595"/>
                                            </svg>
                                        </a></li></ul>',
                                    )
                                );
                                ?>
                        </div>
                    </nav>
                </div><!-- .col-md-5 -->
	</header><!-- #masthead -->
