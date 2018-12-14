<?php
$args = array(
	"carousel_pre_title" => "",
	"carousel_title" => "",
	"ids" => ""
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {


	if($ids) {
		$ids = explode( ', ', $ids ); ?>

		<div class="olins_products_carousel">
			<div class="carousel_nav">
				<a href="#" class="flex-prev"><span><i class="fa fa-angle-left" aria-hidden="true"></i></span></a>
				<div class="carousel_tile">
					<div class="olins_carouser_pre_title font_two"><?php echo esc_attr( $carousel_pre_title ); ?></div>
					<div class="olins_carousel_title"><?php echo esc_attr( $carousel_title ); ?></div>
				</div>
				<a href="#" class="flex-next"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
			</div>

		<ul class="slides">

		<?php if ( $ids ) {
			foreach ( $ids as $id ) {
				echo "<li>";

				$product = wc_get_product( $id );

				?>

				<div class="carousel_product">
					<div class="border_style">
						<a href="<?php echo esc_url( get_permalink( $id ) ); ?>" class="product_link">
							<?php if ( has_post_thumbnail( $id ) ) {
					echo get_the_post_thumbnail( $id, array( 210, 255 ) );
				}?>
						</a>
						<div class="top_border"></div>
						<div class="bottom_border"></div>
						<div class="left_border"></div>
						<div class="right_border"></div>
					</div>
					<?php echo wc_get_product_category_list( '', ', ', '<span class="woo_category">', '</span>' ); ?>
					<h3 class="product_title"><?php echo esc_attr( $product->get_title() ); ?></h3>
					<span class="price">
						<?php echo ale_wp_kses($product->get_price_html()); ?>
					</span>
				</div>

			<?php
				echo "</li>";
			}
		}

		echo '</ul></div>';
	} else {
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 8
		);

		$products = new WP_Query( $args );
		if ( $products->have_posts() ) { ?>
			<div class="olins_products_carousel">
			<div class="carousel_nav">
				<a href="#" class="flex-prev"><span><i class="fa fa-angle-left" aria-hidden="true"></i></span></a>
				<div class="carousel_tile">
					<div class="olins_carouser_pre_title font_two"><?php echo esc_attr( $carousel_pre_title ); ?></div>
					<div class="olins_carousel_title"><?php echo esc_attr( $carousel_title ); ?></div>
				</div>
				<a href="#" class="flex-next"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
			</div>

			<ul class="slides">

			<?php while ( $products->have_posts() ) : $products->the_post();

			$product = wc_get_product( get_the_ID() )?>

				<li>
					<div class="carousel_product">
						<div class="border_style">
							<a href="<?php echo esc_url( the_permalink() ); ?>" class="product_link">
								<?php if ( has_post_thumbnail( get_the_ID() ) ) {
									echo get_the_post_thumbnail( get_the_ID(), array( 210, 255 ) );
								}?>
							</a>
							<div class="top_border"></div>
							<div class="bottom_border"></div>
							<div class="left_border"></div>
							<div class="right_border"></div>
						</div>
						<?php echo wc_get_product_category_list( '', ', ', '<span class="woo_category">', '</span>' ); ?>
						<h3 class="product_title"><?php echo esc_attr( $product->get_title() ); ?></h3>
					<span class="price">
						<?php echo ale_wp_kses($product->get_price_html()); ?>
					</span>
					</div>
				</li>

			<?php endwhile; ?>
			</ul></div>
		<?php } else {
			echo esc_html_e( 'No products found','olins' );
		}
		wp_reset_postdata();
	}
} else {
	echo esc_html_e('Install WooCommerce Plugin to be able to use the Products Carousel Slider','olins');
}

