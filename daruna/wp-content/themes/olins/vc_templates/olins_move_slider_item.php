<?php
$args = array(
	"slide_image" => "",
	"slide_pre_title" => "",
	"slide_title" => "",
	"slide_button_link" => ""
);

extract(shortcode_atts($args, $atts));

//An array with Link data
$slide_button_link = vc_build_link( $slide_button_link );

if($slide_image){ ?>
	<li>
		<figure style="background-image: url(<?php echo esc_url(wp_get_attachment_url($slide_image)); ?>);">

			<figcaption class="slide_data">
				<div class="slide_meta">
					<?php if($slide_title){ ?><div class="slider_one_title font_two"><?php echo esc_attr($slide_title); ?></div><?php } ?>
					<?php if($slide_pre_title){ ?><div class="slider_one_pre_title font_one"><?php echo esc_attr($slide_pre_title); ?></div><?php } ?>
					<?php if($slide_button_link['url']){ ?><div class="slider_one_button">
						<a class="ale_button font_two" href="<?php echo esc_url($slide_button_link['url']); ?>" <?php if($slide_button_link['target']){ echo 'target="'.esc_attr($slide_button_link['target']).'"';} if($slide_button_link['rel']){ echo 'rel="'.esc_attr($slide_button_link['rel']).'"';} ?> >
							<?php if($slide_button_link['title']){
								echo esc_attr($slide_button_link['title']);
							} else {
								echo esc_html_e('details','olins');
							} ?>
						</a>
						</div><?php } ?>
				</div>
			</figcaption>
		</figure>
	</li>
<?php } ?>

