<?php
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	global $woocommerce;  ?>
		<div class="ale_shop_cart">
			<?php if(OLINS_DESIGN_STYLE == 'creative'){ ?>
				<i class="fa fa-shopping-basket" aria-hidden="true"></i>
			<?php } else if(OLINS_DESIGN_STYLE == 'rosi') {
			    echo "<span>";
			    echo esc_html_e('CART','olins');
			    echo "</span>";
            } else { ?>
				<i class="fa fa-shopping-bag" aria-hidden="true"></i>
			<?php } ?>
			<?php  echo '<a href="' . esc_url(wc_get_cart_url()) . '" title="' . esc_html__( 'Cart','olins' ) . '" class="cart_link ale_cart_link_location"><span>'.esc_attr(WC()->cart->get_cart_contents_count()).'</span></a>'; ?>
        </div>
	<?php
} ?>