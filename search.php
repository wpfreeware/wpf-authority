<?php get_header();?>
  
 
<?php get_template_part('templates/banner');?>
  

  <section id="blogArchive">
    <div class="container">
	  
	<div class="row">
		
	  <div class="col-lg-12 col-md-12 col-sm-12">
			<h1 class="archive_title"><?php printf( __( 'Results for <span> %s</span>', 'wpf-authority' ),'<span>' . get_search_query() . '</span>'); ?></h1>
		</div>			
	</div>
	 
      <div class="row">  
		
	  
		<?php get_template_part('templates/content-area'); ?>

		 <!-- start sidebar -->
		 <?php get_sidebar(); ?>
		 <!-- end sidebar --> 		
		
		
      </div>
    </div>
  </section>
  <!-- End image editing  -->
      
<?php get_footer(); ?>