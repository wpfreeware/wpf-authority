<?php get_header();?>
  
 
<?php get_template_part('templates/banner');?>
  
  

  <section id="blogArchive">
    <div class="container">
      <div class="row">
	  
	  
	<?php if(have_posts()) : ?>
		<h1 class="archive_title">
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php /* If this is a category archive */ if (is_category()) { ?>
				<?php _e('Archive for the', 'wpf-authority'); ?> <span><?php echo single_cat_title(); ?></span> <?php _e('category', 'wpf-authority'); ?>
			<?php /* If this is a tag archive */  } elseif( is_tag() ) { ?>
				<?php _e('Archive for the', 'wpf-authority'); ?> <span><?php single_tag_title(); ?></span> <?php _e('tag', 'wpf-authority'); ?>
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<?php _e('Archive for', 'wpf-authority'); ?> <span><?php the_time('F jS, Y'); ?></span>										
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<?php _e('Archive for', 'wpf-authority'); ?> <span><?php the_time('F, Y'); ?></span>									
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<?php _e('Archive for', 'wpf-authority'); ?> <span><?php echo date('Y'); ?></span>										
			<?php /* If this is a search */ } elseif (is_search()) { ?>
				<?php _e('Search Results', 'wpf-authority'); ?>					
			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<?php _e('Posted by', 'wpf-authority'); ?>	<span><?php the_author(); ?></span>									
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<?php _e('Blog Archives', 'wpf-authority'); ?>										
		<?php } ?>
		</h1>

		
        <div class="col-lg-8 col-md-8 <?php if( get_theme_mod( 'wpf_authority_sidebar_settings', 'right') == 'left' ): echo "col-md-push-4"; endif; ?>">
		
			 <div class="blogArchive_area">
			 			 
				
				
				<?php while(have_posts())  : the_post(); ?>

					<?php get_template_part('post-excerpt');?>
					
				<?php endwhile; ?>

				<?php wpf_authority_page_navi(); ?>

				<?php else : ?>
					<h2 class="not_found"><?php _e('Sorry! Nothing Found', 'wpf-authority'); ?></h2>
				<?php endif; ?>					
			 

			 </div>

        </div>		
			
		
		
		 <!-- start sidebar -->
		 <?php get_sidebar(); ?>
		 <!-- end sidebar --> 		
		
		
      </div>
    </div>
  </section>
  <!-- End image editing  -->
      
<?php get_footer(); ?>