<?php
$args = array(
	"ids" => ""
);

wp_enqueue_script( 'ale-modernizr-hoverdir' );
wp_enqueue_script( 'hoverdir' );

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

echo '<div class="olins_recent_works"><ul id="da-thumbs">';

if($ids) {
	$ids = explode( ', ', $ids );
	$i = '0';

	foreach ( $ids as $id ) {
		if($i<7){?>
			<li><a href="<?php echo esc_url(get_the_permalink($id)); ?>" class="single_work_link" title="<?php echo esc_attr(get_the_title($id)); ?>">
				<?php
				if($i == '3'){
					echo get_the_post_thumbnail($id,'works-linelarge');
				} else {
					echo get_the_post_thumbnail($id,'works-linesmall');
				} ?>
				<div class="hover_mask">
					<div class="top_line"></div>
					<div class="bottom_line"></div>
					<div class="left_line"></div>
					<div class="right_line"></div>
				</div>
			</a></li>
		<?php }
		$i++;
	}
} else {
	$args = array(
		'posts_per_page'    => '7',
		'post_type'         => 'works',
	);
	$recent_works = new WP_Query( $args );
	$i = '0';
	if ( $recent_works->have_posts() ) {

		while ( $recent_works->have_posts() ) {
			$recent_works->the_post(); ?>

			<li>
				<a href="<?php echo esc_url(the_permalink()); ?>" class="single_work_link" title="<?php echo esc_attr(the_title()); ?>">
					<?php
					if($i == '3'){
						echo get_the_post_thumbnail(get_the_ID(),'works-linelarge');
					} else {
						echo get_the_post_thumbnail(get_the_ID(),'works-linesmall');
					} ?>
					<div class="hover_mask">
						<div class="top_line"></div>
						<div class="bottom_line"></div>
						<div class="left_line"></div>
						<div class="right_line"></div>
					</div>
				</a>
			</li>

		<?php
		$i++;
		}
		wp_reset_postdata();
	} else {
		echo esc_html_e('Add some posts in Works Post Type section','olins');
	}
}

echo '</ul></div>';