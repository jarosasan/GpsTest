<?php
$args = array(
	'icon'   => '',
	'price'      => '',
	'currency'    => '',
	'title'      => '',
	'link'      => '',
	'content' => '',
	'price_color' => '',
	'title_color' => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$image_src = '';

$the_link = vc_build_link( $link );

if (is_numeric($icon)) {
	$image_src = wp_get_attachment_url($icon);
} ?>

<div class="olins_price_element">

	<?php if($image_src){ ?>
		<div class="image_holder">
			<?php if($the_link['url']){ ?>
				<a href="<?php echo esc_url($the_link['url']); ?>" <?php if($the_link['target']){ echo 'target="'.esc_attr($the_link['target']).'"';} if($the_link['rel']){ echo 'rel="'.esc_attr($the_link['rel']).'"';} ?> >
					<img src="<?php echo esc_url($image_src); ?>" alt="<?php echo esc_attr($the_link['title']); ?>" title="<?php echo esc_attr($the_link['title']); ?>" />
				</a>
			<?php } else { ?>
				<img src="<?php echo esc_url($image_src); ?>" alt="<?php echo esc_attr($title); ?>" title="<?php echo esc_attr($title); ?>" />
			<?php } ?>
		</div>
	<?php } ?>

	<?php if($price){?>
		<div class="price_holder font_one" <?php if($price_color){ echo 'style="color:'.esc_attr($price_color).'; "';} ?>>
			<?php echo esc_attr($price); ?>
			<?php if($currency){
				echo '<span class="currency">'.esc_attr($currency).'</span>';
			} ?>
		</div>
	<?php } ?>

	<?php if($title){ ?>
		<div class="title_holder">
			<h3 <?php if($title_color){ echo 'style="color:'.esc_attr($title_color).'; "';} ?> class="font_one"><?php echo esc_attr($title); ?></h3>
		</div>
	<?php } ?>

	<?php if($content){
		echo '<div class="description_holder">'.$content.'</div>';
	} ?>
</div>
