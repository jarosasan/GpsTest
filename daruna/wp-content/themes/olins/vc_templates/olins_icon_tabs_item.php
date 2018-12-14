<?php
$args = array(
	"icon" => "",
	"hover" => "",
	"title" => "",
	"text" => "",
	"unique_id" => ""
);

extract(shortcode_atts($args, $atts)); ?>

<div id='tab-<?php echo esc_attr(str_replace(' ','-',$unique_id)); ?>' style="display: none;" class="olins-tab-container">
	<div class="tab_content">

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
