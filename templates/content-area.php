	<div class="col-lg-8 col-md-8 <?php if( get_theme_mod( 'wpf_authority_sidebar_settings', 'right') == 'left' ): echo "col-md-push-4"; endif; ?>">
	
		 <div class="blogArchive_area">
					 
		 
			<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>

				<?php get_template_part('post-excerpt');?>
				
			<?php endwhile; ?>

			<?php wpf_authority_page_navi(); ?>

			<?php else : ?>
				<h2 class="not_found"><?php _e('Sorry! Nothing Found', 'wpf-authority'); ?></h2>
			<?php endif; ?>					
		 

		 </div>

	</div>