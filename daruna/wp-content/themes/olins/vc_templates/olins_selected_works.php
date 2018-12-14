<?php
$args = array(
	"ids" => "",
	"tax" => ""
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

if($tax == 'yes'){
	echo '<div class="olins_tax_links cf">';
	$works_categories = get_terms(array('taxonomy' => 'work-category','hide_empty' => false,));

	if(!empty($works_categories)){
		echo '<ul class="font_two cf">';
		foreach($works_categories as $cat){
			echo '<li><a href="'.get_term_link($cat,'work-category').'">'.$cat->name.'</a></li>';

		}
		echo '</ul>';
	}
	echo '</div>';
}

echo '<div class="olins_selected_works cf">';

if($ids) {
	$ids = explode( ', ', $ids );
	$i = '0';

	foreach ( $ids as $id ) {
		if($i<5){?>
		<div class="item_work">
			<div class="mask_opacity">
				<a href="<?php echo esc_url(the_permalink($id)); ?>" class="work_single_page">
					<?php echo get_the_post_thumbnail($id,'works-vertical'); ?>
				</a>
				<div class="mask_bg">
					<div class="inner_mask"></div>
				</div>
				<div class="mask_data">
					<div class="inner_container">
						<span class="plus_button">
							<a href="<?php echo esc_url(the_permalink($id)); ?>"> <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
						</span>
						<h3 class="title"><a href="<?php echo esc_url(the_permalink($id)); ?>"><?php echo esc_attr(get_the_title($id)); ?></a></h3>
						<span class="category">
							<?php $type_terms = get_the_terms( $id, "work-category" );
							if(!empty($type_terms)){
								$i = '0';
								foreach($type_terms as $term){
									if($i>0){
										echo esc_attr(", ");
									}
									echo esc_attr($term->name);
									$i++;
								}
							}?>
						</span>
					</div>
				</div>
			</div>
		</div>
		<?php }
		$i++;
	}
} else {
	$args = array(
		'posts_per_page'    => '5',
		'post_type'         => 'works',
	);
	$recent_works = new WP_Query( $args );
	$i = '0';
	if ( $recent_works->have_posts() ) {

		while ( $recent_works->have_posts() ) {
			$recent_works->the_post(); ?>

			<div class="item_work">
				<div class="mask_opacity">
					<a href="<?php echo esc_url(the_permalink()); ?>" class="work_single_page">
						<?php echo get_the_post_thumbnail(get_the_ID(),'works-vertical'); ?>
					</a>
					<div class="mask_bg">
						<div class="inner_mask"></div>
					</div>
					<div class="mask_data">
						<div class="inner_container">
						<span class="plus_button">
							<a href="<?php echo esc_url(the_permalink()); ?>"> <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
						</span>
							<h3 class="title"><a href="<?php echo esc_url(the_permalink()); ?>"><?php echo esc_attr(get_the_title()); ?></a></h3>
						<span class="category">
							<?php $type_terms = get_the_terms( get_the_ID(), "work-category" );
							if(!empty($type_terms)){
								$i = '0';
								foreach($type_terms as $term){
									if($i>0){
										echo esc_attr(", ");
									}
									echo esc_attr($term->name);
									$i++;
								}
							}?>
						</span>
						</div>
					</div>
				</div>
			</div>

			<?php
			$i++;
		}
		wp_reset_postdata();
	} else {
		echo esc_html_e('Add some posts in Works Post Type section','olins');
	}
}

echo '</div>';