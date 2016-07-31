			  <!-- start single archive post -->
			  
			  
			  <div id="post-<?php the_ID(); ?>" <?php post_class('single_archiveblog wow fadeIn'); ?> >
			  
				<div class="archiveblog_left">

				  <?php echo get_avatar( get_the_author_meta( 'ID' ), 150 ); ?>					
				  <h5 class="author_name"><?php the_author(); ?></h5>
				  <p class="postdate"><?php the_time( get_option( 'date_format' ) ); ?></p>
				  
				</div>          

				<div class="archiveblog_right">
				  <?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				  <div class="post_commentbox">
					<i class="fa fa-bars"></i> <?php the_category(', '); ?>
					<?php if ( comments_open() ) :  ?> <i class="fa fa-comments"></i> <?php comments_popup_link( __('No Comment', 'wpf-authority'), __('1 Comment', 'wpf-authority'), __('% Comments', 'wpf-authority')); endif; ?>

				  </div>
				  
					<?php
					// if post has featured image to display
					if ( has_post_thumbnail() ) :
						the_post_thumbnail('wpf-authority-post-image', array('alt' => esc_attr( get_the_title() )));
						
					endif;
					
					?>					  


				 <?php // conditional statement for displaying excerpt or full content
					if( get_theme_mod( 'wpf_authority_excerpt_content_settings', 'excerpt' ) == 'excerpt' ):
					
						the_excerpt(); ?>
						<a class="read_more" href="<?php the_permalink();?>"> <?php _e('Read more', 'wpf-authority');?> <i class="fa fa-long-arrow-right"></i></a>

				<?php	
					else:

					the_content(); 
					
					endif;
				?>
				</div>
			  </div>
			  <!-- End single archive post -->