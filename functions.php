<?php

/////////////////////
// Load enqueue
//////////////////////


include_once( 'inc/enqueue.php' );


////////////////////////
// customizer 
////////////////////////

include_once( 'inc/customizer.php' );


///////////////////////////////////////
// push header if toolbar is showing 
////////////////////////////////////////

if ( is_admin_bar_showing() ) {

function wpf_authority_push_bottom_header_area(){

    ?>
	
	<style type="text/css">
		.navbar{margin-top:30px;}
	</style>
	
	<?php

}
add_action( 'wp_head', 'wpf_authority_push_bottom_header_area' );

}


/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since WpF Authority 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 540;
}


if ( ! function_exists( 'wpf_authority_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since WpF Authority 1.0
 */
function wpf_authority_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain('wpf-authority', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	/*
	 * Enable custom logo
	 */		
	add_theme_support( 'custom-logo', array(
		'height'      => 66,
		'flex-height' => false,
		'flex-width'  => true,
		'class'		  => 'navbar-brand',
	) );	
	
	/*
	 * Custom background image support
	 */		
	add_theme_support( 'custom-background', array( 'default-color' => '#F0F0F0') );	
	
	
	/*
	 * Custom Header image support
	 */	
	 
	$header_img_args = array(
		'width'                  => 1900,
		'height'                 => 350,
		'flex-height'            => true,
		'flex-width'             => true,
		'uploads'                => true,
		'random-default'         => true,
	);
	add_theme_support( 'custom-header', $header_img_args );		
	
	
	/**
	 * Apply theme's stylesheet to the visual editor.
	 *
	 * @uses add_editor_style() Links a stylesheet to visual editor
	 * @uses get_stylesheet_uri() Returns URI of theme stylesheet
	 */
	 

	add_theme_support('editor_style');
	add_editor_style( 'css/editor-style.css' );

	

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
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 590, 350, true ); // default size
	add_image_size( 'wpf-authority-post-image', 590, 200, true ); // post-thumb
	add_image_size( 'wpf-authority-related-post-image', 102, 71, true ); // related post-thumb

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	
	
	///////////////////////////
	// menu register
	///////////////////////////

	register_nav_menu( 'primary-menu', __( 'Primary Menu', 'wpf-authority' ) );	
	


}
endif; // wpf_authority_setup
add_action( 'after_setup_theme', 'wpf_authority_setup' );



/**
 * Register widget area.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
 
function wpf_authority_widgets_init() {	
	
	
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'wpf-authority' ),
		'id'            => 'primary-sidebar',
		'description'   => __( 'Add your desire widgets here.', 'wpf-authority' ),
		'before_widget' => '<div class="single_sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'wpf-authority' ),
		'id'            => 'page-sidebar',
		'description'   => __( 'Add widgets here to appear in your page sidebar', 'wpf-authority' ),
		'before_widget' => '<div class="single_sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widgets', 'wpf-authority' ),
		'id'            => 'footer-widgets',
		'description'   => __( 'Add widgets here to appear in your footer area', 'wpf-authority' ),
		'before_widget' => '<div class="col-lg-4 col-md-4 col-sm-4"><div class="single_footer_top">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );	
}
add_action( 'widgets_init', 'wpf_authority_widgets_init' );



///////////////////////////////
// credits
//////////////////////////////
 
function wpf_authority_footer_credit() {
  global $wpf_authority_footer_credit;
  printf( esc_html__( 'Powered by %1$s | Theme by %2$s', 'wpf-authority' ) , '<a href="http://wordpress.org/" target="_blank">WordPress</a>', '<a href="http://www.wpfreeware.com/" target="_blank">WpFreeware</a>');
}


///////////////////////
//PAGE NAVI
///////////////////////

// Numeric Page Navi (built into the theme by default)
function wpf_authority_page_navi() {
  global $wp_query, $paged;
  $bignum = 999999999;
  if ( $wp_query->max_num_pages <= 1 )
    return;
  echo '<nav class="pagination">';
  echo paginate_links( array(
    'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
    'format'       => '',
    'current'      => max( 1, get_query_var('paged') ),
    'total'        => $wp_query->max_num_pages,
    'prev_text'    => '<i class="fa fa-chevron-left"></i>',
    'next_text'    => '<i class="fa fa-chevron-right"></i>',
    'type'         => 'list',
    'end_size'     => 3,
    'mid_size'     => 3
  ) );
  echo '</nav>';
} /* end page navi */


///////////////////////////////////////	
// Register Custom Navigation Walker
//////////////////////////////////////

require_once('inc/wp_bootstrap_navwalker.php');


////////////////////////////////////
// added classes into post nav links
/////////////////////////////////////

add_filter('next_post_link', 'wpf_authority_post_link_attributes_next');
add_filter('previous_post_link', 'wpf_authority_post_link_attributes_previous');

function wpf_authority_post_link_attributes_next($output) {
    $injection = 'class="next_nav wow fadeInRight"';
    return str_replace('<a href=', '<a '.$injection.' href=', $output);
}

function wpf_authority_post_link_attributes_previous($output) {
    $injection = 'class="previous_nav wow fadeInLeft"';
    return str_replace('<a href=', '<a '.$injection.' href=', $output);
}


////////////////////////////////////
// comments lists
/////////////////////////////////////

include_once( 'inc/wp_list_comments.php' );