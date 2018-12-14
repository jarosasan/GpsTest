<?php
$args = array(
	"name" => "",
	"position" => "",
	"desc" => "",
	"link" => "",
	"photo" => ""
);

extract(shortcode_atts($args, $atts));

//An array with Link data
$slide_button_link = vc_build_link( $link );

if($photo){ ?>
	<li class="cf">
		<div class="col-6">
			<div class="image_holder">
				<?php echo wp_get_attachment_image($photo,'full') ?>
			</div>
		</div>
		<div class="col-6">
			<div class="member_data">
				<?php if($name){ ?><h3 class="member_name"><?php echo esc_attr($name); ?></h3><?php } ?>
				<?php if($position){ ?><div class="member_position"><?php echo esc_attr($position); ?></div><?php } ?>
				<?php if($desc){ ?><div class="member_description"><p><?php echo esc_attr($desc); ?></div></p><?php } ?>
				<?php if($slide_button_link['url']){ ?>
					<div class="member_link">
						<a class="ale_button font_two" href="<?php echo esc_url($slide_button_link['url']); ?>" <?php if($slide_button_link['target']){ echo 'target="'.esc_attr($slide_button_link['target']).'"';} if($slide_button_link['rel']){ echo 'rel="'.esc_attr($slide_button_link['rel']).'"';} ?> >
							<?php if($slide_button_link['title']){
								echo esc_attr($slide_button_link['title']);
							} else {
								echo esc_html_e('details','olins');
							} ?>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>

	</li>
<?php } ?>

