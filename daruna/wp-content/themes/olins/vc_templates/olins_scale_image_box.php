<?php
wp_enqueue_script( 'ale-appear' );
$args = array(
	'image'         => '',
	'text_one'      => '',
	'text_two'      => '',
	'icon'          => '',
	'link'          => '',
);


$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$link = vc_build_link( $link );
?>
<div class="olins_scale_image_box">
	<div class="scale_image">
		<div class="image_holder" style="background-image: url(<?php echo esc_url(wp_get_attachment_url($image));?>);"></div>
		<div class="mask"></div>
		<div class="data_holder">
			<?php if($icon){?><div class="box-logo"><img src="<?php echo esc_url(wp_get_attachment_url($icon)); ?>" alt="pic" /></div><?php } ?>
			<?php if($text_one){?><div class="text_one font_two animated"><?php echo esc_attr($text_one); ?></div><?php } ?>
			<?php if($text_two){?><div class="text_two font_two animated"><?php echo esc_attr($text_two); ?></div><?php } ?>

			<?php if($link['url']){ ?>
				<div class="slider_one_button">
					<a class="ale_button font_two" href="<?php echo esc_url($link['url']); ?>" <?php if($link['target']){ echo 'target="'.esc_attr($link['target']).'"';} if($link['rel']){ echo 'rel="'.esc_attr($link['rel']).'"';} ?> >
						<?php if($link['title']){
							echo esc_attr($link['title']);
						} else {
							echo esc_html_e('Details','olins');
						} ?>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</div>