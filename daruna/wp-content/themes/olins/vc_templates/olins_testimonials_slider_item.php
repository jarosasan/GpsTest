<?php
$args = array(
	"name" => "",
	"testimonial" => "",
	"link" => ""
);

extract(shortcode_atts($args, $atts));


//An array with Link data
$testimonial_link = vc_build_link( $link );

if($name) {
	echo '<li class="font_one">';
		echo '<div class="testimonial_name">'.esc_attr($name).'</div>';
		if($testimonial){
			echo '<div class="testimonial">'.$testimonial.'</div>';
		}

		if($testimonial_link['url']){ ?>
			<div class="testimonial_link">
				<a href="<?php echo esc_url($testimonial_link['url']); ?>" <?php if($testimonial_link['target']){ echo 'target="'.esc_attr($testimonial_link['target']).'"';} if($testimonial_link['rel']){ echo 'rel="'.esc_attr($testimonial_link['rel']).'"';} ?> >
					<?php if($testimonial_link['title']){
						echo esc_attr($testimonial_link['title']);
					} else {
						echo esc_html_e('Details','olins');
					} ?>
				</a>
			</div>
		<?php }

	echo '</li>';
}