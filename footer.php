  <!-- start footer -->
 <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="footer_top">
            <div class="row">

				<?php dynamic_sidebar('footer-widgets'); ?>
			  
            </div>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="footer_bottom">
		  
			<?php get_template_part('templates/footer-social');?>
			
            <div class="copyright">
			
			<?php if( get_theme_mod('wpf_authority_footer_text') ): ?>
				<p><?php echo esc_html( get_theme_mod('wpf_authority_footer_text') ); ?></p>
			<?php endif;?>				
			
            </div>	
			
          </div>
        </div>
		
		
		<?php 
			if ( is_home() || is_front_page() ):
				get_template_part('templates/credit');
			endif;	
		?>
		
      </div>
    </div>
  </footer>
  <!-- End footer -->

	
	<?php wp_footer();?>
  </body>
</html>