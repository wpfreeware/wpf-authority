<?php
/*
 *	The comments page for WpF-Authority
 */

// don't load it if you can't comment
if ( post_password_required() ) {
  return;
}

?>

<?php // You can start editing here. ?>

<?php if ( have_comments() ) : ?>

<div id="comments" class="clearfix"></div>

	<h3 id="comments-title" class="h2">
		<?php comments_number( __( 'No Comments', 'wpf-authority' ), __( '1 Comment', 'wpf-authority' ), _n( '% Comment', '% Comments', get_comments_number(), 'wpf-authority' ) );?>
	</h3>
	
	<ul class="commentlist">
		
		<!-- comment link -->
	      <?php
	        wp_list_comments( array(
	          'style'             => 'ul',
	          'short_ping'        => true,
	          'avatar_size'       => 100,
	          'callback'          => 'wpf_authority_custom_comments',
	          'type'              => 'all',
	          'reply_text'        => 'Reply',
	          'page'              => '',
	          'per_page'          => '',
	          'reverse_top_level' => null,
	          'reverse_children'  => ''
	        ) );
	      ?>
	</ul>  
	
	<!--numeric comment pagination-->
    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    	<nav class="navigation comment_navigation" role="navigation">
			  <?php paginate_comments_links(); ?> 
    	</nav>
    <?php endif; ?>
	
	

    <?php if ( ! comments_open() ) : ?>
    	<p class="no-comments"><?php _e( 'Comments are closed' , 'wpf-authority' ); ?></p>
    <?php endif; ?>
	
	

  <?php endif; // if ( have_comments() ) ?>
  
<div class="clearfix"></div>  
<?php comment_form(); ?> 

  