  <!-- start banner area -->
  
<?php  if( get_header_image() ) : ?>

  <section id="imgbanner">
	      
  	<img src="<?php echo esc_url( get_header_image() ); ?>" alt="<?php esc_attr( bloginfo( 'description' ) ) ; ?>" />
   
  </section>		
	
<?php endif; ?>  
  
  <!-- End banner area -->