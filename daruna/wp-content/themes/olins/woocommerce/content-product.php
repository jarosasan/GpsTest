<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<?php if(ale_get_option('woo_grid_style')=='vintage'){ ?>
	<div <?php post_class('grid-item vintage-item'); ?>>
		<?php

		echo '<div class="image_holder">';
			do_action( 'woocommerce_before_shop_loop_item_title' );
		echo '</div>';


		do_action( 'woocommerce_before_shop_loop_item' );
		add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 10 );
		do_action( 'woocommerce_shop_loop_item_title' );


		echo wc_get_product_category_list( '', ', ', '<span class="woo_category">', '</span>' );


		echo '<div class="shop_separator"></div>';

		echo '<div class="bottom_shop_item font_two">';

		//Remove the rating
		remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
		do_action( 'woocommerce_after_shop_loop_item_title' );


		//Remove the closing link tag
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
		do_action( 'woocommerce_after_shop_loop_item' );

		echo '</div>';

		?>
	</div>
<?php } else if(ale_get_option('woo_grid_style')=='minimal'){?>
	<div <?php post_class('minimal-item'); ?>>
		<?php

		echo '<div class="product_holder">';
		do_action( 'woocommerce_before_shop_loop_item_title' );

		echo '<div class="cart_hover font_two">';

		//Remove the closing link tag
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
		do_action( 'woocommerce_after_shop_loop_item' );

		echo '</div>';

		echo '</div>';



		do_action( 'woocommerce_before_shop_loop_item' );
		add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 10 );
		do_action( 'woocommerce_shop_loop_item_title' );




		//Remove the rating
		remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
		do_action( 'woocommerce_after_shop_loop_item_title' );



		?>
	</div>
<?php } else if(ale_get_option('woo_grid_style')=='fashion'){?>
    <div <?php post_class('grid-item fashion-item font_two'); ?>>
        <?php

        /**
         * woocommerce_before_shop_loop_item hook.
         *
         * @hooked woocommerce_template_loop_product_link_open - 10
         */
        do_action( 'woocommerce_before_shop_loop_item' );


        //Add a closing link tag
        add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 10 );

        add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_open', 15 );
        /**
         * woocommerce_before_shop_loop_item_title hook.
         *
         * @hooked woocommerce_show_product_loop_sale_flash - 10
         * @hooked woocommerce_template_loop_product_thumbnail - 10
         */
        do_action( 'woocommerce_before_shop_loop_item_title' );


        /**
         * woocommerce_shop_loop_item_title hook.
         *
         * @hooked woocommerce_template_loop_product_title - 10
         */
        do_action( 'woocommerce_shop_loop_item_title' );


        //Remove the rating
        remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

        /**
         * woocommerce_after_shop_loop_item_title hook.
         *
         * @hooked woocommerce_template_loop_rating - 5
         * @hooked woocommerce_template_loop_price - 10
         */
        add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 5 );

        do_action( 'woocommerce_after_shop_loop_item_title' );


        //Remove the closing link tag and add to cart button
        remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
        remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
        /**
         * woocommerce_after_shop_loop_item hook.
         *
         * @hooked woocommerce_template_loop_product_link_close - 5
         * @hooked woocommerce_template_loop_add_to_cart - 10
         */
        do_action( 'woocommerce_after_shop_loop_item' );


        ?>
    </div>
<?php } else { ?>
<div <?php post_class('grid-item'); ?>>
	<?php

	//Add border transition container start
	ale_hover_border_wrapper_start();

	/**
	 * woocommerce_before_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );


	//Add a closing link tag
	add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 10 );
	/**
	 * woocommerce_before_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );


	//Add border transition container end
	ale_hover_border_wrapper_end();


	echo wc_get_product_category_list('', ', ', '<span class="woo_category">', '</span>' );

	/**
	 * woocommerce_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );


	//Remove the rating
	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

	/**
	 * woocommerce_after_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );


	//Remove the closing link tag
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
	/**
	 * woocommerce_after_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );


	?>
</div>
<?php } ?>
