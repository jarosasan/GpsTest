<?php
wp_enqueue_script( 'ale-appear' );
wp_enqueue_script( 'ale-counter' );

$args = array(
	'value'            => '',
	'value_color'            => '',
	'title'             => '',
	'title_color'             => '',
	'icon'            => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

if (is_numeric($icon)) {
	$image_src = wp_get_attachment_url($icon);
}
$color_for_value = '#FFF';
$color_for_title = '#FFF';
if(!empty($value_color)){
	$color_for_value = $value_color;
}
if(!empty($title_color)){
	$color_for_title = $title_color;
}
?>


<div class="ale_counter font_one">
	<span class="counter fromzero" style="color:<?php echo esc_attr($color_for_value); ?>"><?php echo esc_attr($value); ?></span>
	<?php if(!empty($title)){
		echo '<span class="counter_title" style="color:'.esc_attr($color_for_title).'">'.esc_attr($title).'</span>';
	}
	if(!empty($image_src)){
		echo '<span class="counter_icon"><img src="'.esc_url($image_src).'" alt="icon" /></span>';
	}
	?>
</div>