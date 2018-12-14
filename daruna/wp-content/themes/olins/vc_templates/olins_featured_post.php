<?php
$args = array(
	"ids" => ""
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );


echo '<div class="olins_featured_post">';
if($ids) {
	$ids = explode( ', ', $ids );


	foreach ( $ids as $id ) {
		$args = array(
			'p'    => $id,
		);
		$recent_post = new WP_Query( $args );

		if ( $recent_post->have_posts() ) {

			while ( $recent_post->have_posts() ) {
				$recent_post->the_post(); ?>

				<figure class="image_holder">
					<?php echo get_the_post_thumbnail(get_the_ID(),'post-simpletin'); ?>
					<figcaption class="post_data">
						<span class="date font_two"><?php echo esc_attr(get_the_date('')); ?></span>
						<h2 class="title"><a href="<?php echo esc_url(get_the_permalink()); ?>" title="<?php echo esc_attr(get_the_title()); ?>"><?php echo esc_attr(get_the_title()); ?></a></h2>
						<div class="desc"><?php echo ale_limit_excerpt(10); ?></div>
						<div class="post_link">
							<a href="<?php echo esc_url(get_the_permalink()); ?>" class="ale_button font_two" title="<?php echo esc_attr(get_the_title()); ?>"><?php esc_html_e('Take a Look','olins'); ?></a>
						</div>
					</figcaption>
				</figure>

			<?php
			}
			wp_reset_postdata();
		} else {
			echo esc_html_e('Create a post in Dashboard.','olins');
		} ?>

	<?php }


} else {
	$args = array(
		'posts_per_page'    => '1',
		'post_type'         => 'post',
	);
	$recent_post = new WP_Query( $args );

	if ( $recent_post->have_posts() ) {

		while ( $recent_post->have_posts() ) {
			$recent_post->the_post(); ?>

			<figure class="image_holder">
				<?php echo get_the_post_thumbnail(get_the_ID(),'post-simpletin'); ?>
				<figcaption class="post_data">
					<span class="date font_two"><?php echo esc_attr(get_the_date('')); ?></span>
					<h2 class="title"><a href="<?php echo esc_url(get_the_permalink()); ?>" title="<?php echo esc_attr(get_the_title()); ?>"><?php echo esc_attr(get_the_title()); ?></a></h2>
					<div class="desc"><?php echo ale_limit_excerpt(10); ?></div>
					<div class="post_link">
						<a href="<?php echo esc_url(get_the_permalink()); ?>" class="ale_button font_two" title="<?php echo esc_attr(get_the_title()); ?>"><?php esc_html_e('Take a Look','olins'); ?></a>
					</div>
				</figcaption>
			</figure>

			<?php
		}
		wp_reset_postdata();
	} else {
		echo esc_html_e('Create a post in Dashboard.','olins');
	}
}

echo '</div>';