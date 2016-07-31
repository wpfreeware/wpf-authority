<?php


function wpf_authority_scripts() {


	////////////////////////////////
	// jquery scripts
	/////////////////////////////////
	
   // comment reply js
   if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );   
   
	// bootstrap js
	wp_enqueue_script( 'wpf_authority_bootstrapjs', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '3.3.4', true );
	
	// wow animation js
	wp_enqueue_script( 'wpf_authority_wowjs', get_template_directory_uri() . '/js/wow.js', false, '1.1.2' , true );	
	wp_enqueue_script( 'wpf_authority_wow_active', get_template_directory_uri() . '/js/custom.js', false, null, true );
	
	// IE Fallbacks
	wp_enqueue_script( 'ie_html5shiv', get_template_directory_uri(). '/js/html5shiv.js', false, '3.7.3', false);
	wp_script_add_data( 'ie_html5shiv', 'conditional', 'lt IE 9' );
	wp_enqueue_script( 'ie_respond', get_template_directory_uri(). '/js/respond.js', false, null, false);
	wp_script_add_data( 'ie_respond', 'conditional', 'lt IE 9' );
	
	

	////////////////////////////////
	// Css styles
	/////////////////////////////////	
	
	// bootstrap style
    wp_enqueue_style( 'wpf_authority_bootstrapmin', get_template_directory_uri() . '/css/bootstrap.css','all' );
	// font-awesome
    wp_enqueue_style( 'wpf_authority_fontawesome', get_template_directory_uri() . '/css/font-awesome.css','all' );
	// wow animation styles
    wp_enqueue_style( 'wpf_authority_animation', get_template_directory_uri() . '/css/animate.css','all' );
    // google fonts
    $protocol = is_ssl() ? 'https' : 'http';
	wp_enqueue_style( 'wpf_authority_googlefont_opensans',"$protocol://fonts.googleapis.com/css?family=Open+Sans",'all' );
    wp_enqueue_style( 'wpf_authority_googlefont_raleway',"$protocol://fonts.googleapis.com/css?family=Raleway",'all' );	
	// theme main styles
	wp_enqueue_style( 'wpf_authority_rtl', get_template_directory_uri() . '/rtl.css','all' );	
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css','all' );		

}


if (!is_admin()) add_action("wp_enqueue_scripts", "wpf_authority_scripts", 11);






?>