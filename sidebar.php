<div class="col-lg-4 col-md-4 <?php if( get_theme_mod( 'wpf_authority_sidebar_settings', 'right') == 'left' ): echo "col-md-pull-8"; endif; ?> ">
 <div class="blog_sidebar">
	
	<?php 
		
		if ( is_page() ):	
			dynamic_sidebar('page-sidebar'); // Appear only pages
		else:
			dynamic_sidebar('primary-sidebar'); // Appear everywhere except pages
		endif;	
	
	?>		
  
 </div>
</div>