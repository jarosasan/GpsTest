<?php wp_enqueue_script( 'tabslet' );

preg_match_all( '/olins_icon_tabs_item([^\]]+)/i', $content, $matches, PREG_OFFSET_CAPTURE );
$tab_titles = array();

if ( isset( $matches[1] ) ) {
	$tab_titles = $matches[1];
}



?>
<div class="olins_icon_tabs">
	<div class='tabs'>
		<ul class="cf">
			<?php
			$i='1';
			foreach ( $tab_titles as $tab ) {
				$tab_atts = shortcode_parse_atts( $tab[0] );
				if ( isset( $tab_atts['icon'] ) ) { ?>
					<li>
						<figure class="tab-icon">
							<a class="font_two" href="#tab-<?php echo esc_attr(str_replace(' ','-',$tab_atts['unique_id'])); ?>">
								<?php if(!empty($tab_atts['icon'])){
									echo '<img src="'.esc_url(wp_get_attachment_url($tab_atts['icon'])).'" alt= />';
								} ?>
								<figcaption>
									<?php if(!empty($tab_atts['hover'])){
										echo '<img src="'.esc_url(wp_get_attachment_url($tab_atts['hover'])).'" alt= />';
									} ?>
								</figcaption>
							</a>
						</figure>
					</li>
					<?php
					$i++;
				}
			}
			?>
		</ul>
		<?php echo do_shortcode($content); ?>
	</div>
</div>