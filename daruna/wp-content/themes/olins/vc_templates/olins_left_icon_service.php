<?php
$args = array(
	'image' => '',
	'title'  => '',
	'description' => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

if($image){ ?>
	<div class="olins_left_icon_service cf">
		<div class="icon_holder">
			<img src="<?php echo esc_url(wp_get_attachment_url($image));?>" alt=""/>
		</div>
		<div class="data_holder">
			<?php if($title){
				echo '<span class="title font_two">'.esc_attr($title).'</span>';
			}
			if($description){
				echo '<span class="description">'.esc_attr($description).'</span>';
			} ?>
		</div>
	</div>
<?php }?>

