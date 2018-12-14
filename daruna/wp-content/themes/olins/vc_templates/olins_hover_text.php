<?php
$args = array(
	'image'         => '',
	'text_one'      => '',
	'text_two'      => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts ); ?>

<div class="olins_hover_text">
	<div class="item_hover_text">
		<div class="data_holder">
			<?php if($text_one){?><div class="text_one font_two animated"><?php echo esc_attr($text_one); ?></div><?php } ?>
			<?php if($text_two){?><div class="text_two font_two animated"><?php echo esc_attr($text_two); ?></div><?php } ?>
		</div>
		<div class="hover_holder" style="background-image: url(<?php echo esc_url(wp_get_attachment_url($image));?>);"></div>
	</div>
</div>