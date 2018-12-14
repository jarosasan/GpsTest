<?php
wp_enqueue_script( 'venobox' );

$args = array(
	'video'            => '',
	'title'            => '',
	'desc'             => '',
	'image'             => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

?>

<div class="olins_video_box">
	<div class="video_holder">
		<?php if(!empty($image)){
			echo '<img src="'.esc_url(wp_get_attachment_url($image)).'" alt="" />';
		} ?>
		<div class="video_data_mask">
			<a class="venobox" data-type="youtube" href="<?php echo esc_url($video); ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
			<div class="font_two video_title"><?php echo esc_attr($title); ?></div>
			<div class="font_one video_desc"><?php echo esc_attr($desc); ?></div>
		</div>
	</div>

</div>