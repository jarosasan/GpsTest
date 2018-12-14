<?php
$args = array(
	'title'  => '',
	'currency'  => '',
	'price'  => '',
	'preion'  => '',
	'description' => '',
	'link' => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

//An array with Link data
$button_link = vc_build_link( $link );
?>

<div class="olins_pricing_table">
	<div class="data_holder">
		<?php if($title){
			echo '<div class="title font_two">'.esc_attr($title).'</div>';
		} ?>

		<?php if($price){ ?>
			<div class="price font_two">
				<?php if($currency){
					echo '<span class="currency">'.esc_attr($currency).'</span>';
				}
				echo '<span class="the_price">'.esc_attr($price).'</span>'; ?>
			</div>
		<?php } ?>

		<?php if($preion){
			echo '<div class="period">'.esc_attr($preion).'</div>';
		} ?>

		<?php if($description){
			echo '<p class="description">'.esc_attr($description).'</p>';
		} ?>

		<?php if($button_link['url']){ ?>
            <div class="one_button">
			<a class="ale_button font_two" href="<?php echo esc_url($button_link['url']); ?>" <?php if($button_link['target']){ echo 'target="'.esc_attr($button_link['target']).'"';} if($button_link['rel']){ echo 'rel="'.esc_attr($button_link['rel']).'"';} ?> >
				<?php if($button_link['title']){
					echo esc_attr($button_link['title']);
				} else {
					echo esc_html_e('Details','olins');
				} ?>
			</a>
			</div>
        <?php } ?>
	</div>
</div>