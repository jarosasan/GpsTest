<?php wp_enqueue_script( 'tabslet' );

preg_match_all( '/olins_tabs_item([^\]]+)/i', $content, $matches, PREG_OFFSET_CAPTURE );
$tab_titles = array();

if ( isset( $matches[1] ) ) {
	$tab_titles = $matches[1];
}



?>
<div class="olins_tabs">
	<div class='tabs'>
		<ul class="cf">
			<?php
				$i='1';
				foreach ( $tab_titles as $tab ) {
				$tab_atts = shortcode_parse_atts( $tab[0] );
				if ( isset( $tab_atts['tab'] ) ) { ?>
					<li><a class="font_two" href="#tab-<?php echo esc_attr(str_replace(' ','-',$tab_atts['tab'])); ?>"><?php echo esc_attr($tab_atts['tab']); ?></a></li>
				<?php $i++;
				}
			}
			?>
		</ul>
		<?php echo do_shortcode($content); ?>
	</div>
</div>