					  
					  
    <?php 
	$orig_post = $post;
    global $post;
    $categories = get_the_category($post->ID);
    if ($categories) {
    $category_ids = array();
    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

    $args=array(
    'category__in' => $category_ids,
    'post__not_in' => array($post->ID),
    'posts_per_page'=> 2, 
    'ignore_sticky_posts'=>1  
    );

    $related_posts_query = new WP_Query( $args );
    if( $related_posts_query->have_posts() ) {
    echo '<div class="similar_post">
						<h2>'.__('Related Posts', 'wpf-authority').'</h2>
						<ul class="small_catg similar_nav">';
    while( $related_posts_query->have_posts() ) {
    $related_posts_query->the_post();?>

		<li>
		  <div class="media">
			<a href="<?php the_permalink()?>" class="media-left related-img">
			  <?php the_post_thumbnail('wpf-authority-related-post-image', array('alt' => esc_attr( get_the_title() ))); ?>
			</a>
			<div class="media-body">
			  <h4 class="media-heading"><a href="<?php the_permalink()?>"><?php the_title();?></a></h4> 
			  <p class="postdate"><?php the_time( get_option( 'date_format' ) ); ?></p>
			</div>
		  </div>
		</li>
	  
	
    <?php
    }
    echo '</ul></div>';
    }
    }
    $post = $orig_post;
    wp_reset_query(); ?>					  