<?php 

/*

Template Name: Right Sidebar Page

*/

get_header();?>
  
 
<?php get_template_part('templates/banner');?>
  
  
  <section id="blogArchive">
    <div class="container">
      <div class="row">
	  
	  

	  
        <div class="col-lg-8 col-md-8 col-sm-12">
		
						 
			  
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
						
						<div class="blogArchive_area">	
						
							 <!-- start single post content-->
							  <div class="single_archiveblog">

								<div class="archiveblog_right page_left">
														
								
								
								  <h2><?php the_title(); ?></h2>
								  
								  <?php the_content();?>
								  
								  <?php 
								  
									wp_link_pages( array(
										'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'wpf-authority' ) . '</span>',
										'after'       => '</div>',
										'link_before' => '',
										'link_after'  => '',
									) );								  
								  
								  ?>
								  
								</div>

							  </div>
							  <!-- End single post content-->	
						  
						</div>

						
						  <?php 
								
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;	
								

						  ?>							
						
						
					  							
						
				<?php endwhile; ?>
				
				 <?php else : ?>
				 
				 <h2 class="not_found"><?php _e('Sorry! Nothing Found', 'wpf-authority'); ?></h2>
				
				<?php endif; ?>						
				
				
							

        </div>
		
		<!-- sidebar -->
		<?php get_sidebar('right');?>		
		
		
      </div>
    </div>
  </section>
  <!-- End image editing  -->
      
<?php get_footer(); ?>