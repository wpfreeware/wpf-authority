<?php

/*-----------------------------------------------------------------------------------*/
# Custom Comments Template
/*-----------------------------------------------------------------------------------*/

function wpf_authority_custom_comments($comment, $args, $depth) {
    $isByAuthor = false;

    if($comment->comment_author_email == get_the_author_meta('email')) {
        $isByAuthor = true;
    }

   $GLOBALS['comment'] = $comment; ?>
	
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		 <div id="comment-<?php comment_ID(); ?>" class="<?php if($isByAuthor){ echo 'author-comment';}?> comment_list_container">
		 
		 <?php if($isByAuthor){ _e('<span class="author_lebel">Author</span>','wpf-authority');}?>
		  <div class="comment_author_section vcard">
			 <?php echo get_avatar( $comment->comment_author_email, 52 ); ?>
			 <span class="author-name"><?php esc_url( comment_author_link() );?></span>
			 <span><?php _e(' on ', 'wpf-authority') ?> <?php comment_date( get_option( 'date_format') ); ?> <span>
			 <?php edit_comment_link(__('(Edit)', 'wpf-authority'),'  ','') ?>

		  </div>
		  
		  <?php if ($comment->comment_approved == '0') : ?>
			 <em><?php _e('Your comment is awaiting moderation', 'wpf-authority') ?></em>
			 <br />
		  <?php endif; ?>
		  
		  <div class="comment_text"><?php comment_text() ?></div>

		  <div class="reply">
			 <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		  </div>
		 </div>
    </li>
<?php
}


?>