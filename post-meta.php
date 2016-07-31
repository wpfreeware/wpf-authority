  <div class="post_commentbox">
	<i class="fa fa-bars"></i> <?php the_category(', '); ?>
	<?php if ( comments_open() ) :  ?> <i class="fa fa-comments"></i> <?php comments_popup_link( __('No Comment', 'wpf-authority'), __('1 Comment', 'wpf-authority'), __('% Comments', 'wpf-authority')); endif; ?> <?php edit_post_link(__('Edit', 'wpf-authority'), ' &#124; ', ''); ?>

  </div>
  <div class="clearfix"></div>