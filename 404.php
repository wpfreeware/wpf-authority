<?php get_header();?>
  
 
<?php get_template_part('templates/banner');?>
  
  
  <!-- start image editing  -->
  <section id="blogArchive">
    <div class="container">
      <div class="row">
		
		<div class="col-lg-12 col-md-12 col-sm-12">
		
		
						
						<div class="blogArchive_area">	
						
							 <!-- start single post content-->
							  <div class="single_archiveblog four_zero_four">

								<div class="archiveblog_right page_left">
														
								
									<h2><?php _e('Opps Not Found!', 'wpf-authority');?></h2>
									<p><?php _e( 'The article you were looking for was not found. You may want to check your link or perhaps that page does not exist anymore.', 'wpf-authority' ); ?></p>
									
								  
								</div>
								<div class="clearfix"></div>
								<div class="search_form">
									<p><?php get_search_form(); ?></p>
								</div>								

							  </div>
							  <!-- End single post content-->	
						  
						</div>							
						
						
					  												
				
			</div>	
									
		
      </div>
    </div>
  </section>
  <!-- End image editing  -->
      
<?php get_footer(); ?>