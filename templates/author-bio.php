	<div class="archiveblog_left ">
	  <?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
	  
	  <h5><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></h5>
	  <p class="postdate"><?php the_time( get_option( 'date_format' ) ); ?></p>
	  
	  <?php if( get_the_author_meta('description') ): ?>
		<p class="bio_title"><strong><?php _e('About the author :', 'wpf-authority');?></strong> <?php echo get_the_author_meta('description');?></p>							
	 <?php endif; ?>
	  
	</div>