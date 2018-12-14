<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' );
if(ale_get_option('woosingletitlebg')){
	get_template_part('partials/page_heading');
}

//Sidebar position based on theme options
$ale_sidebar_position = ale_get_option('woo_sidebar_position');
$sidebar_class = '';

if($ale_sidebar_position){
	$sidebar_class = 'sidebar_position_'. $ale_sidebar_position;
}

//Style Class
$variant_style = '';
if(ale_get_option('woo_grid_style')){
	$variant_style = ale_get_option('woo_grid_style').'-item-style';
}
?>

<div class="content_wrapper flex_container <?php  echo esc_attr($variant_style).' '.esc_attr($sidebar_class); ?> cf">

	<?php if($ale_sidebar_position  !== 'no'){

		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );

	} ?>
	<section class="story ale_blog_archive content ale_single_product_page cf">

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
	</section>


</div>

<?php get_footer( 'shop' );
