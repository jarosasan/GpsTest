<?php
$args = array(
	'image' => '',
	'text'  => '',
	'text2' => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts ); ?>

<?php if($image){ ?>
<div class="olins_hover_team">
	<div class="image_holder">
		<img src="<?php echo esc_url(wp_get_attachment_url($image));?>" alt=""/>
		<?php if($text){?>
			<div class="hover_mask">
				<span class="text_one font_two"><?php echo esc_attr($text); ?></span>
				<?php if($text2){ ?>
					<span class="text_two"><?php echo esc_attr($text2); ?></span>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
</div>
<?php } ?>
