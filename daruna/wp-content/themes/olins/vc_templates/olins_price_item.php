<?php
$args = array(
	'image'   => '',
	'amount'      => '',
	'title'      => '',
	'description'      => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$image_src = '';


if (is_numeric($image)) {
	$image_src = wp_get_attachment_url($image);
} ?>

<div class="olins_pricing_element">

	<?php if($image_src){ ?>
		<div class="image_holder">
			<img src="<?php echo esc_url($image_src); ?>" alt="<?php echo esc_attr($title); ?>" title="<?php echo esc_attr($title); ?>" />
		</div>
	<?php } ?>
	<div class="data_holder">
		<?php if($amount){?>
			<div class="price_holder font_one">
				<?php echo esc_attr($amount); ?>
			</div>
		<?php } ?>

		<?php if($title){ ?>
			<div class="title_holder">
				<?php echo esc_attr($title); ?>
			</div>
		<?php } ?>

		<?php if($description){
			echo '<div class="description_holder">'.$description.'</div>';
		} ?>
	</div>

</div>