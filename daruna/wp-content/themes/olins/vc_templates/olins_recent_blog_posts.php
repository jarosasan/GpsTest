<?php
wp_enqueue_script( 'masonry' );
$args = array(
	'count'         => '',
	'grid'      => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$args = array(
	'posts_per_page'    => $count,
	'post_type'         => 'post',
);

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
if(ale_get_option('blog_grid_layout') == 'vintage'){
	$blog_grid_type = 'blog_grid vintage-grid';
} else if(ale_get_option('blog_grid_layout') == 'furniture'){
	$blog_grid_type = 'blog_grid furniture-grid';
}

$recent_posts = new WP_Query( $args ); ?>

<div class="<?php echo esc_attr($blog_grid_type)." ".esc_attr($ale_columns_class)." ".esc_attr($ale_text_align_class); ?>">
	<div class="grid-sizer"></div>
	<div class="gutter-sizer"></div>
	<?php if ($recent_posts->have_posts()) : while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
		<?php
		if(ale_get_option('blog_grid_layout') == 'vintage'){
			get_template_part('partials/blog/vintage_preview' );
		} elseif(ale_get_option('blog_grid_layout') == 'furniture'){
			get_template_part('partials/blog/furniture_preview' );
		} elseif(ale_get_option('blog_grid_layout') == 'brigitte'){
            get_template_part('partials/blog/brigitte_preview' );
        } elseif(ale_get_option('blog_grid_layout') == 'pixel'){
            get_template_part('partials/blog/pixel_preview' );
        } elseif(ale_get_option('blog_grid_layout') == 'jade'){
            get_template_part('partials/blog/jade_preview' );
        } else {
			get_template_part('partials/postpreview' );
		}?>
	<?php endwhile; wp_reset_postdata(); else: ?>
		<?php get_template_part('partials/notfound')?>
	<?php endif; ?>
</div>

