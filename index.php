<?php get_header();?>
  
 
<?php get_template_part('templates/banner');?>
  
  
  <section id="blogArchive">
    <div class="container">
      <div class="row">
		 
		<!-- Content -->
		<?php get_template_part('templates/content-area'); ?>
		<!-- Content -->
		
		<!-- start sidebar -->
		<?php get_sidebar(); ?>
		<!-- end sidebar --> 		
		
		
      </div>
    </div>
  </section>
  <!-- End image editing  -->
      
<?php get_footer(); ?>