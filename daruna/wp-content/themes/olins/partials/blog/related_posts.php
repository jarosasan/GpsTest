<div class="related_posts_box">
	<?php
	//Columns Settings
	$ale_blog_columns = ale_get_option('default_blog_columns');
	$ale_columns_class = '';
	if($ale_blog_columns){
		$ale_columns_class = 'ale_blog_columns_'.$ale_blog_columns;
	}
	//Text Align Settings
	$ale_blog_text_align = ale_get_option('default_blog_text_align');
	$ale_text_align_class = '';
	if($ale_blog_text_align){
		$ale_text_align_class = 'ale_blog_text_align_'.$ale_blog_text_align;
	}
	//Grid type
	$blog_grid_type = 'blog_grid grid';

	$title = '';
	$posts_count = ale_get_option('default_blog_columns');
	if(ale_get_meta('related_posts_title')){
		$title = ale_get_meta('related_posts_title');
	}
	if(ale_get_meta('related_posts_count')){
		$posts_count = intval(ale_get_meta('related_posts_count'));
	}
	?>
	<?php if(!empty($title)){
		echo '<h3 class="related_title">'.esc_attr($title).'</h3>';
	}

	$related_posts = new WP_Query(array('post_type' => 'post','orderby' => 'rand', 'posts_per_page' => $posts_count));
	?>
	<div class="<?php echo esc_attr($blog_grid_type)." ".esc_attr($ale_columns_class)." ".esc_attr($ale_text_align_class); ?>">
		<div class="grid-sizer"></div>
		<div class="gutter-sizer"></div>
		<?php if ($related_posts->have_posts()) : while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
			<?php get_template_part('partials/postpreview' ); ?>
		<?php endwhile; else: ?>
			<?php get_template_part('partials/notfound')?>
		<?php endif; wp_reset_postdata(); ?>
	</div>
</div>