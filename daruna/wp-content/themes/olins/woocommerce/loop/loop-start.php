<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
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
 * @version     3.3.0
 */
//Columns Settings
$ale_blog_columns = ale_get_option('woo_columns');
$ale_columns_class = '';
if($ale_blog_columns){
	$ale_columns_class = 'ale_blog_columns_'.$ale_blog_columns;
}
$ale_shop_variant_grid = '';
$ale_grid = 'grid';
if(ale_get_option('woo_grid_style')){
	$ale_shop_variant_grid = 'shop_grid_'.esc_attr(ale_get_option('woo_grid_style'));
	if(ale_get_option('woo_grid_style') == 'minimal'){
		$ale_grid = '';
	}
}


?>
<div class="products <?php echo esc_attr($ale_grid).' '.esc_attr($ale_shop_variant_grid).' '.esc_attr($ale_columns_class); ?>">
	<div class="grid-sizer"></div>
	<div class="gutter-sizer"></div>
