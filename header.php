<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	
	<?php wp_head();?>
  </head>
  
  
<body <?php body_class(); ?> >


  
  
  <!-- start navbar -->
 <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
	
      <div class="navbar-header">
	      
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only"><?php _e('Toggle navigation','wpf-authority')?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
		
		
		<?php 
			if( function_exists( 'the_custom_logo' ) && has_custom_logo() ) :
			 
			$custom_logo_id 	= get_theme_mod( 'custom_logo' );
			$custom_logo 		= wp_get_attachment_image_src( $custom_logo_id , 'full' );		
		?>
			<!-- logo img -->			
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" >
				<img src="<?php echo $custom_logo[0]; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
			</a>			
		
		<?php  elseif( get_theme_mod( 'wpf_authority_logo_uploader', '' ) ) : ?>
			<!-- logo img -->
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" >
				<img src="<?php echo esc_url( get_theme_mod( 'wpf_authority_logo_uploader', '' ) );?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
			</a>

		<?php else : ?>
			<!-- logo text -->
			<a class="navbar-brand logo-text" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
			
		<?php endif; ?>		
		
		 
      </div>
	  
	  
      <div id="navbar" class="navbar-collapse collapse navbar_area"> 
	      		
			<?php /* Primary navigation */
			
					wp_nav_menu( array(
					  'theme_location' => 'primary-menu',
					  'depth' => 2,
					  'container' => false,
					  'fallback_cb' => '',
					  'menu_class' => 'nav navbar-nav navbar-right custom_nav',
					  'walker' => new wp_bootstrap_navwalker()
					  ) //Process nav menu using our custom nav walker
					);								
			?>	
			
		
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <!-- End navbar -->