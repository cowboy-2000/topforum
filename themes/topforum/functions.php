<?php
/**
 * Topforum functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Topforum
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function topforum_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Topforum, use a find and replace
		* to change 'topforum' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'topforum', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'topforum' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'topforum_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'topforum_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function topforum_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'topforum_content_width', 640 );
}
add_action( 'after_setup_theme', 'topforum_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function topforum_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'topforum' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'topforum' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'topforum_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function topforum_scripts() {
	wp_enqueue_style( 'topforum-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'topforum-style', 'rtl', 'replace' );

	wp_enqueue_script( 'topforum-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'topforum-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'topforum-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
	wp_enqueue_style( 'topforum-itc-slider', get_template_directory_uri() . '/assets/css/itc-slider.css' );
	wp_enqueue_style( 'topforum-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:100,300,500,400,700,900' );
	wp_enqueue_script( 'topforum-jquery', get_template_directory_uri() . '/assets/js/jquery-1.9.1.min.js' );
	wp_enqueue_script( 'topforum-ui-totop', get_template_directory_uri() . '/assets/js/jquery.ui.totop.js', array(), false, true );
	wp_enqueue_script( 'topforum-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), false, true );
	wp_enqueue_script( 'topforum-itc-slider', get_template_directory_uri() . '/assets/js/itc-slider.js', array(), false, true );
	wp_enqueue_script( 'topforum-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), false, true );
	wp_enqueue_script( 'topforum-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', array(), false, true );
	wp_enqueue_script( 'topforum-script', get_template_directory_uri() . '/assets/js/script.js', array(), false, true );
} );
add_action( 'wp_enqueue_scripts', 'topforum_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_filter( 'nav_menu_css_class', 'change_menu_item_css_classes', 10, 4 );

function change_menu_item_css_classes( $classes, $item, $args, $depth ) {
		$classes[] = 'nav-item';

	return $classes;
}

function delegate_package_shortcode() {
	$output = '<span  class="for_select delegate_package">';
	$posts = get_posts( array(
	    'numberposts' => -1,
	    'category' => '16',
	    'orderby' => 'date',
	    'order' => 'ASC',
	    'post_type' => 'post',
	    'suppress_filters' => true,
	) );
	foreach ($posts as $post) {
		setup_postdata($post);
		$output .= '<span class="delegate_package__item">' . get_the_title($post) . '</span>';

	}
	wp_reset_postdata();
	$output .= '</span>';
	return $output;
}

add_shortcode('delegate_package', 'delegate_package_shortcode');

function method_of_payment_shortcode() {
	$output = '<span  class="for_select method_of_payment">';
	$posts = get_posts( array(
	    'numberposts' => -1,
	    'category' => '17',
	    'orderby' => 'date',
	    'order' => 'ASC',
	    'post_type' => 'post',
	    'suppress_filters' => true,
	) );
	foreach ($posts as $post) {
		setup_postdata($post);
		if (has_post_thumbnail($post)) {
			$output .= '<span class="method_of_payment__item"><img class="method_of_payment__image" src="' . get_the_post_thumbnail_url($post) . '" alt=""></span>';
		}
		else {
			$output .= '<span class="method_of_payment__item">' . get_the_title($post) . '</span>';
		}

	}
	wp_reset_postdata();
	$output .= '</span>';
	return $output;
}

add_shortcode('method_of_payment', 'method_of_payment_shortcode');

function header_shortcode() {
	$output = '<ul class="header-bottom__list">';
		$posts = get_posts( array(
		    'numberposts' => -1,
		    'category' => '3',
		    'orderby' => 'date',
		    'order' => 'ASC',
		    'post_type' => 'post',
		    'suppress_filters' => true,
		) );
		foreach ($posts as $post) {
			setup_postdata($post);
			$output .= '<li class="header-bottom__item">
			    <a class="header-bottom__link" href="' . get_the_permalink($post) . '">
                    <img class="header-bottom__image" src="' . get_the_post_thumbnail_url($post) . '" alt="">' . get_the_title($post) . '
                </a>
            </li>';
		}
		wp_reset_postdata();
		$output .= '</ul>';
    return $output;
}

add_shortcode('header', 'header_shortcode');

function select_1_shortcode() {
	$output = '<div class="conference__select select"><div class="select__header"><span class="select__current">';
		$posts = get_posts( array(
	        'numberposts' => -1,
	        'category' => '12',
	        'orderby' => 'date',
	        'order' => 'ASC',
	        'post_type' => 'post',
	        'suppress_filters' => true,
	    ) );
	    $output .= get_the_title($posts[0]) . '</span></div><!-- .select__header --><div class="select__body">';
	    foreach($posts as $post) {
	    	setup_postdata($post);
	    	$output .= '<div class="select__item"><span>' . get_the_title($post) . '</span></div><!-- .select__item -->';
	    }
	    wp_reset_postdata();
		$output .= '</div><!-- .select__body --></div><!-- .select -->';
	return $output;
}

add_shortcode('select_1', 'select_1_shortcode');

function select_2_shortcode() {
    $output = '<div class="select"><div class="select__header"><span class="select__current">Forex companies</span></div><!-- .select__header -->';
    $output .= '<div class="select__body">';
    $output .= '<div class="select__item"><span>Forex companies</span></div><!-- .select__item -->';
    $output .= '</div><!-- .select__body --></div><!-- .select -->';
    return $output;
}

add_shortcode('select_2', 'select_2_shortcode');

function form_registration_shortcode() {
	ob_start();
	$text = do_shortcode('[contact-form-7 id="1082" title="Registration"]');
	$text = str_replace('echo_select-1', do_shortcode('[select_1]'), $text);
	$text = str_replace('echo_delegate_package', do_shortcode('[delegate_package]'), $text);
	$text = str_replace('echo_select-2', do_shortcode('[select_2]'), $text);
	$text = str_replace('echo_method_of_payment', do_shortcode('[method_of_payment]'), $text);
	echo $text;
	return ob_get_clean();
}

add_shortcode('form_registration', 'form_registration_shortcode');

function changeText_shortcode() {
	$text = do_shortcode('[form_registration]');
	$lines = explode("\n", $text);
	foreach ($lines as &$line) {
		if ((strpos($line, '</label>') !== false) && (strpos($line, 'input type="checkbox" name="checkbox-905[]"') === false)) {
			$line = str_replace('</label>', '</label></div><!-- .label-block --><div class="registration__field">', $line);
			$line = '<div class="row"><div class="label-block">' . $line . '</div><!-- .registration__field --></div><!-- .row -->';
		}
	}
	$bText = implode("\n", $lines);
	return $bText;
}
add_shortcode('changeText', 'changeText_shortcode');
add_filter( 'wpcf7_autop_or_not', '__return_false' );
function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function custom_excerpt_more( $more ) {
    return '.';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );
add_filter('the_content', 'my_the_content');
function my_the_content($content) {
    return strip_tags($content);
}
add_filter('the_excerpt', 'my_the_excerpt');
function my_the_excerpt($content) {
    return strip_tags($content);
}

add_filter( 'nav_menu_css_class', 'special_nav_class', 10, 4 );
function special_nav_class($classes, $item, $args, $depth) {
    if ($args->menu_id === 'primary-menu') {
        $classes[] = 'navbar__item';
        if ($depth > 0) {
            $classes[] = 'navbar__item--submenu';
        }
    }
    else {
        $classes[] = 'top_forum__item';
                if ($depth > 0) {
                    $classes[] = 'top_forum__item--submenu';
                }
    }
    return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'special_nav_submenu_class', 10, 3 );
function special_nav_submenu_class($classes, $args, $depth) {
    if ($args->menu_id === 'primary-menu') {
        $classes[] = 'navbar__list navbar__list--submenu';
    }
    else {
        $classes[] = 'top_forum__list top_forum__list--submenu';
    }
    return $classes;
}
add_filter( 'nav_menu_link_attributes', 'special_nav_link_attributes', 10, 4 );
function special_nav_link_attributes($atts, $item, $args, $depth) {
    if ($args->menu_id === 'primary-menu') {
        $atts['class'] = 'navbar__link';
        if ($depth > 0) {
            $atts['class'] = 'navbar__link navbar__link--submenu';
			if ($item->type === 'post_type' && $item->object === 'post') {
				if (has_term(12, 'category', $item->object_id)) {
					$atts['href'] = '#';
				}
			}
        }
    }
    else {
        $atts['class'] = 'top_forum__link';
                if ($depth > 0) {
                    $atts['class'] = 'top_forum__link top_forum__link--submenu';
                }
    }
    return $atts;
}