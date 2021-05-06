<?php
/**
 * prime functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package prime
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'prime_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function prime_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on prime, use a find and replace
		 * to change 'prime' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'prime', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'prime' ),
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
				'prime_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'prime_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function prime_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'prime_content_width', 640 );
}
add_action( 'after_setup_theme', 'prime_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function prime_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'prime' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'prime' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'prime_widgets_init' );

wp_deregister_script( 'jquery' );

/**
 * Enqueue scripts and styles.
 */
function prime_scripts() {

	wp_enqueue_style( 'global', get_template_directory_uri() . '/assets/css/global.css', array(), '1.1', 'all');
	wp_enqueue_style( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.1', 'all');
	wp_enqueue_script( 'jquery351', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1', true );
	wp_enqueue_script( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'fontawesome', '//kit.fontawesome.com/b2594f8c09.js', array (), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'prime_scripts' );

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



/**
 * Display taxonomy selection as dropdown
 * https://codebriefly.com/amp/display-wordpress-custom-taxonomy-dropdown/
 * @param WP_Post $post
 * @param array $box
 */
function prime_taxonomy_select_meta_box($post, $box) 
{
  $defaults = array('taxonomy' => 'category');
  
  if (!isset($box['args']) || !is_array($box['args']))
      $args = array();
  else
      $args = $box['args'];
  
  extract(wp_parse_args($args, $defaults), EXTR_SKIP);
  
  $tax = get_taxonomy($taxonomy);
  $selected = wp_get_object_terms($post->ID, $taxonomy, array('fields' => 'ids'));
  $hierarchical = $tax->hierarchical;
  ?>
  <div id="taxonomy-<?php echo $taxonomy; ?>" class="selectdiv">
    <?php 
      if (current_user_can($tax->cap->edit_terms)): 
        if ($hierarchical) {
          wp_dropdown_categories(array(
           	'taxonomy' => $taxonomy,
           	'class' => 'widefat',
         	'hide_empty' => 0, 
           	'name' => "tax_input[$taxonomy][]",
           	'selected' => count($selected) >= 1 ? $selected[0] : '',
           	'orderby' => 'name', 
           	'hierarchical' => 1, 
           	'show_option_all' => " "
          ));
        } else {?>
          <select name="<?php echo "tax_input[$taxonomy][]"; ?>" class="widefat">
            <option value="0"></option>
            <?php foreach (get_terms($taxonomy, array('hide_empty' => false)) as $term): ?>
              <option value="<?php echo esc_attr($term->slug); ?>" <?php echo selected($term->term_id, count($selected) >= 1 ? $selected[0] : ''); ?>><?php echo esc_html($term->name); ?></option>
            <?php endforeach; ?>
          </select>
        <?php 
        }
      endif; 
    ?>
  </div>
  <?php
}

