<?php
wp_enqueue_script( 'ale-appear' );
$args = array(
	"image" => "",
	"title" => "",
	"desc" => ""
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
?>

<div class="olins_service_block">
	<div class="image_holder">
		<?php if($image){ echo '<img class="animated" src="'.esc_url(wp_get_attachment_url($image)).'" alt="" />'; } ?>
	</div>
	<div class="data_holder">
		<?php if($title){
			echo '<div class="title">'.esc_attr($title).'</div>';
		}
		if($desc){
			echo '<div class="description">'.esc_attr($desc).'</div>';
		} ?>
	</div>
</div>