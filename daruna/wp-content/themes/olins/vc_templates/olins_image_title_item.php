<?php
$args = array(
	"image" => "",
	"title" => "",
	"subtitle" => "",
	"link" => ""
);

extract(shortcode_atts($args, $atts));

//An array with Link data
$the_link = vc_build_link( $link );

if($image){?>
	<figure class="image_box_holder">
		<img src="<?php echo esc_url(wp_get_attachment_url($image)); ?>" alt="<?php echo esc_attr($title); ?>" title="<?php echo esc_attr($title); ?>" />
		<figcaption class="title_box">
			<?php if($the_link){ ?>
				<a  href="<?php echo esc_url($the_link['url']); ?>" <?php if($the_link['target']){ echo 'target="'.esc_attr($the_link['target']).'"';} if($the_link['rel']){ echo 'rel="'.esc_attr($the_link['rel']).'"';} ?> >
			<?php } ?>

				<?php if($title){ ?>
					<h3 class="title"><?php echo esc_attr($title); ?></h3>
				<?php } ?>

			<?php if($the_link){ ?>
				</a>
			<?php } ?>

			<?php if($subtitle){ ?>
				<span class="subtitle"><?php echo esc_attr($subtitle); ?></span>
			<?php } ?>
		</figcaption>
	</figure>
<?php } ?>