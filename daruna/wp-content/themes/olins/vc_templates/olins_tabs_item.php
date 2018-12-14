<?php
$args = array(
	"tab" => "",
	"image" => "",
	"title" => "",
	"text" => ""
);

extract(shortcode_atts($args, $atts)); ?>

<div id='tab-<?php echo esc_attr(str_replace(' ','-',$tab)); ?>' style="display: none;" class="olins-tab-container">
	<div class="tab_content">
		<?php if(!empty($image)){ ?>
			<div class="image">
				<img src="<?php echo esc_url(wp_get_attachment_url($image)); ?>" alt="" />
			</div>
		<?php } ?>
		<div class="text cf">
			<?php if(!empty($title)){ ?>
				<div class="title font_two">
					<?php echo esc_attr($title); ?>
				</div>
			<?php } ?>
			<?php if(!empty($text)){ ?>
			<p>
				<?php echo esc_attr($text); ?>
			</p>
			<?php } ?>
		</div>
	</div>
</div>
