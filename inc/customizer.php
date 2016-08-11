<?php
/*
 *	This file contains theme customizer settings.
 *	
 *	@since wpf authority 1.0
 */
?>
<?php 

function wpf_authority_customizer_register( $wp_customize ) {
   
 
$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';

////////////////////////////   
// theme option panel
///////////////////////////
   
$wp_customize->add_panel( 'wpf_authority_theme_option', array(
    'title' => __('Theme Options', 'wpf-authority'),
    'description' => __('Change theme settings from below like logo,banner,colors, social, footer texts etc', 'wpf-authority'),
    'priority' => 10,
) );
   

///////////////////
// logo section 
////////////////////


$wp_customize->add_section( 'wpf_authority_logo_favicon_section' , array(
    'title'      => __( 'Logo', 'wpf-authority' ),
	'panel' => 'wpf_authority_theme_option',
) );


// logo settings
$wp_customize->add_setting( 'wpf_authority_logo_uploader' , array(
	'default'     => '',
	'sanitize_callback' => 'esc_url_raw',
) );


$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpf_authority_logo_uploader', array(
	'label'        => __( 'Upload Your Logo. Best size: Height: 66px', 'wpf-authority' ),
	'section'    => 'wpf_authority_logo_favicon_section',
	'settings'   => 'wpf_authority_logo_uploader',
) ) );


/////////////////////////////////
// Full content or excerpt
//////////////////////////////////



$wp_customize->add_section( 'wpf_authority_content_or_excerpt' , array(
    'title'      => __( 'Excerpt or Full content', 'wpf-authority' ),
  'panel' => 'wpf_authority_theme_option',
) );


$wp_customize->add_setting(
    'wpf_authority_excerpt_content_settings',
    array(
        'default' => 'excerpt',
        'sanitize_callback' => 'wpf_authority_sanitize_choices',
    )
);
 
$wp_customize->add_control(
    'wpf_authority_excerpt_content_settings',
    array(
        'type' => 'radio',
        'label' => __( 'Display excerpt or full content.', 'wpf-authority' ),
        'section' => 'wpf_authority_content_or_excerpt',
        'settings'   => 'wpf_authority_excerpt_content_settings',
        'choices' => array(
            'excerpt' => __( 'Excerpt', 'wpf-authority' ),
            'fcontent' => __( 'Full content', 'wpf-authority' ),
        ),
    )
);


/////////////////////////////////
// Sidebar Settings
//////////////////////////////////



$wp_customize->add_section( 'wpf_authority_sidebar' , array(
    'title'      => __( 'Choose Sidebar', 'wpf-authority' ),
	'panel' => 'wpf_authority_theme_option',
) );


$wp_customize->add_setting(
    'wpf_authority_sidebar_settings',
    array(
        'default' => 'right',
		'sanitize_callback' => 'wpf_authority_sanitize_choices',
    )
);
 
$wp_customize->add_control(
    'wpf_authority_sidebar_settings',
    array(
        'type' => 'radio',
        'label' => __( 'Select your sidebar', 'wpf-authority' ),
        'section' => 'wpf_authority_sidebar',
		'settings'   => 'wpf_authority_sidebar_settings',
        'choices' => array(
            'left' => __( 'Left', 'wpf-authority' ),
            'right' => __( 'Right', 'wpf-authority' ),
        ),
    )
);


/////////////////////////
// Theme Color section
/////////////////////////

$wp_customize->add_section( 'wpf_authority_theme_color_section' , array(
    'title'      => __( 'Theme Color', 'wpf-authority' ),
	'panel' => 'wpf_authority_theme_option',
) );


// main color settings
$wp_customize->add_setting( 'wpf_authority_theme_color' , array(
	'default'     => '#ca3643',
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpf_authority_theme_color', array(
	'label'        => __( 'Select Theme Color', 'wpf-authority' ),
	'section'    => 'wpf_authority_theme_color_section',
	'settings'   => 'wpf_authority_theme_color',
) ) );




////////////////////
// Footer section
////////////////////

$wp_customize->add_section( 'wpf_authority_footer_section' , array(
    'title'      => __( 'Footer Setting', 'wpf-authority' ),
	'panel' => 'wpf_authority_theme_option',
) );


// footer text 

$wp_customize->add_setting( 'wpf_authority_footer_text' , array(
	'default'     => '',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wpf_authority_footer_text', array(
	'label'        => __( 'Put your footer text here.', 'wpf-authority' ),
	'section'    => 'wpf_authority_footer_section',
	'settings'   => 'wpf_authority_footer_text',
) ) );



// footer Social links


// facebook
$wp_customize->add_setting( 'wpf_authority_footer_social_facebook' , array(
	'default'     => '',
	'sanitize_callback' => 'esc_url_raw',
) );


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wpf_authority_footer_social_facebook', array(
	'label'        => __( 'Facebook url', 'wpf-authority' ),
	'section'    => 'wpf_authority_footer_section',
	'settings'   => 'wpf_authority_footer_social_facebook',
) ) );

//twitter
$wp_customize->add_setting( 'wpf_authority_footer_social_twitter' , array(
	'default'     => '',
	'sanitize_callback' => 'esc_url_raw',
) );


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wpf_authority_footer_social_twitter', array(
	'label'        => __( 'Twitter url', 'wpf-authority' ),
	'section'    => 'wpf_authority_footer_section',
	'settings'   => 'wpf_authority_footer_social_twitter',
) ) );


//google+ 
$wp_customize->add_setting( 'wpf_authority_footer_social_googleplus' , array(
	'default'     => '',
	'sanitize_callback' => 'esc_url_raw',
) );


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wpf_authority_footer_social_googleplus', array(
	'label'        => __( 'Google+ url', 'wpf-authority' ),
	'section'    => 'wpf_authority_footer_section',
	'settings'   => 'wpf_authority_footer_social_googleplus',
) ) );


//youtube 
$wp_customize->add_setting( 'wpf_authority_footer_social_youtube' , array(
	'default'     => '',
	'sanitize_callback' => 'esc_url_raw',
) );


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wpf_authority_footer_social_youtube', array(
	'label'        => __( 'Youtube url', 'wpf-authority' ),
	'section'    => 'wpf_authority_footer_section',
	'settings'   => 'wpf_authority_footer_social_youtube',
) ) );


//linkedin 
$wp_customize->add_setting( 'wpf_authority_footer_social_linkin' , array(
	'default'     => '',
	'sanitize_callback' => 'esc_url_raw',
) );


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wpf_authority_footer_social_linkin', array(
	'label'        => __( 'LinkedIn url', 'wpf-authority' ),
	'section'    => 'wpf_authority_footer_section',
	'settings'   => 'wpf_authority_footer_social_linkin',
) ) );


   
}

add_action( 'customize_register', 'wpf_authority_customizer_register' );



////////////////////////////////////
// sanitizing radio values
////////////////////////////////////

function wpf_authority_sanitize_choices( $input, $setting ) {
    global $wp_customize;
 
    $control = $wp_customize->get_control( $setting->id );
 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}





function wpf_authority_customize_css()
{	
	
/*
	if( get_header_image() ):
    ?>
         <style type="text/css">
             #imgbanner{ background-image: url("<?php echo esc_url( get_header_image() ); ?>") !important;}
         </style>
    <?php
	endif;
*/
	
	//theme color scheme
	$theme_color = '<style type="text/css">
	
	
.search_form form input[type=submit]{
  background-color: '.esc_html( esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ) ).';
  color: #fff;
}

.navbar-brand span,.credit_links a{
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.sticky_post,.sticky{border-bottom:2px solid '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';}

.navbar-default .navbar-nav > li > a:hover,.navbar-default .navbar-nav > li > a:focus{
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';  
}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
  background: none;
}
.dropdown-menu > li > a:hover,.dropdown-menu > li > a:focus{  
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}

.testimonial_content blockquote:before {
  background-color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.dropdown-menu>.active>a {
	
	background: none !important;
	color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';	
}
.dropdown-menu>.active>a:hover{
	color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).' !important;
}  
.service_icon:hover{
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.read_more:hover{
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
  border-bottom: 1px dotted '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.howworks_featured .media-left:hover{
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).'; 
}
.featured_btn:hover,.featured_btn:focus{
  background-color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
  border:1px solid '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';  
}
.price_badge {
  background: none repeat scroll 0 0 '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}

.single_footer_top ul li a:hover{
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.contact_mail p>span,.contact_mail p>a, .navbar-header .logo-text , .navbar-header .navbar-brand:hover,.navbar-header .navbar-brand:focus,.navbar-header .navbar-brand:active{
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.single_footer_middle>h2:hover{
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.social_nav li a:hover{
  border-color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
#banner h2,.bio_title strong {
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.imgedit_heading .panel-title > a, #cancel-comment-reply-link, .single_footer_top a {
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.expand_icon {
  background-color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.imgedit_panel .panel-default {  
  border-color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.imgedit_contactinfo p>a, .author_lebel{
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.term_cond_info>a{
  color:'.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.manual_btn {
  background-color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.support_btn{
  background-color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.submitphot_content > p>span{
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.archiveblog_right > h2 a{
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.post_commentbox a:hover, .post_commentbox span:hover{
  color:'.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).'; 
}
.pagination li a,.comment_navigation a.page-numbers,.page-links a{
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.pagination li a:hover,.pagination li a:focus,.comment_navigation a.page-numbers:hover,.comment_navigation a.page-numbers:focus{
  background-color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.single_sidebar > h2 {
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.single_sidebar ul li a:hover{
  color:'.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).'; 
}
.catg_nav li > a:hover{
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.tags_nav li a:hover,.tags_nav li a:focus,.tagcloud a:hover, .tagcloud a:focus{
  background-color:'.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.archiveblog_right h1,.archiveblog_right h2,.archiveblog_right h3,.archiveblog_right h4,.archiveblog_right h5,.archiveblog_right h6{
  color:'.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).'; 
}

.next_nav,.previous_nav{
  background-color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
  color:#ffffff;
}
.next_nav:hover,.previous_nav:hover {

  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
  background-color:#F0F0F0;
}

.slick-dots li.slick-active button:before {
  border: 2px solid '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.price_nav li:hover .price_heading{
    background-color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
} 
.price_nav li:hover .price_img_inner{
    border: 2px solid '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
} 
.price_nav li:hover .price_img_inner{
    border: 2px solid '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
} 
.price_nav li:hover .price_count{
    background-color:  '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.price_nav li:hover .get_button{
    background-color:  '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
    border-color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.slides-pagination a {
  border: 2px solid '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.slider_caption > h2 span{ 
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).'; 
}
.slider_btn {
  border: 1px solid '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';  
}
.slider_btn:hover,.slider_btn:focus{
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';  
}
.slick-slide:hover .team_name{
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.team_social a:hover{
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
  border-color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.wpcf7-submit,#respond .form-submit #submit {
  background-color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}  
.wpcf7-submit:hover,#respond .form-submit #submit:hover{
  background-color: #fff; 
  color:'.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}
.similar_post h2>i, #respond #commentform #form-allowed-tags code{
  color: '.esc_html( get_theme_mod('wpf_authority_theme_color', '#ca3643') ).';
}	
	
	
	
	</style>';
	
	echo $theme_color;
}
add_action( 'wp_head', 'wpf_authority_customize_css');


/**
 * This outputs the javascript needed to automate the live settings preview.
 * Also keep in mind that this function isn't necessary unless your settings 
 * are using 'transport'=>'postMessage' instead of the default 'transport'
 * => 'refresh'
 * 
 * Used by hook: 'customize_preview_init'
 */



function wpf_authority_customizer_live_preview() {
	
	wp_enqueue_script( 'wpf_authority_live_customizer', get_template_directory_uri() . '/js/theme_live_customizer.js', array( 'jquery' ), null, true );	

} 
add_action( 'customize_preview_init', 'wpf_authority_customizer_live_preview' );