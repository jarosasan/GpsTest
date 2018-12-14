<?php
$args = array(
	"name" => "",
	"position" => "",
	"link" => "",
	"image" => ""
);

extract(shortcode_atts($args, $atts));

//An array with Link data
$slide_button_link = vc_build_link( $link );

if($image){ ?>
	<li class="cf">
		<div class="team_member_item">
			<div class="name font_two">
				<?php if($name){ ?><span class="member_name"><?php echo esc_attr($name); ?></span><?php } ?>
			</div>
			<div class="photo">
				<div class="image_holder">
					<?php if($slide_button_link['url']){ ?>
						<a href="<?php echo esc_url($slide_button_link['url']); ?>" <?php if($slide_button_link['target']){ echo 'target="'.esc_attr($slide_button_link['target']).'"';} if($slide_button_link['rel']){ echo 'rel="'.esc_attr($slide_button_link['rel']).'"';} ?> >
							<?php echo wp_get_attachment_image($image,'full') ?>
						</a>
					<?php } else {?>
						<?php echo wp_get_attachment_image($image,'full') ?>
					<?php } ?>
				</div>
			</div>
			<div class="position font_two">
				<?php if($position){ ?><span class="member_position"><?php echo esc_attr($position); ?></span><?php } ?>
			</div>
		</div>
	</li>
<?php } ?>

