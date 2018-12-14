<?php

/**
 * Sidebar Settings
 */

//Remove Widgets from all sidebars
ale_preview_widget::remove_widgets_from_sidebar('main-sidebar');

//Add widgets to Main Sidebar
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'search', array ('title' => '',));
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'recent-posts', array ('title' => 'Recent Posts','number'=>'5',));
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'recent-comments', array ('title' => 'Comments','number'=>'5',));
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'archives', array ('title' => ''));
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'categories', array ('title' => ''));




/**
 * Categories and Custom Taxonomies
 */

//Categories for Posts
$preview_post_cat_1_id = ale_demo_category::add_category(array(
    'category_name' => 'Casual',
    'parent_id' => 0,
    'description' => '',
));
$preview_post_cat_2_id = ale_demo_category::add_category(array(
    'category_name' => 'Street Style',
    'parent_id' => 0,
    'description' => '',
));


//Categories for WooCommerce Shop
$preview_shop_cat_1_id = ale_demo_category::add_term(array(
    'term_name' => 'Women',
    'taxonomy'=>'product_cat',
    'parent_id' => 0,
    'description' => '',
));
$preview_shop_cat_2_id = ale_demo_category::add_term(array(
    'term_name' => 'Men',
    'taxonomy'=>'product_cat',
    'parent_id' => 0,
    'description' => '',
));

/**
 * Posts Settings
 */

// Blog posts
ale_demo_content::add_post(array(
    'title' => "Proin porta, odio at sagittis vehicula",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img1',
    'post_type' => 'post',
    'ale_maskonheading' => 'blackwhite',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'Awesome blogpost by Olins theme',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Etiam fringilla urna non",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_2_id),
    'featured_image_ale_id' => 'ale_img2',
    'post_type' => 'post',
    'ale_maskonheading' => 'blackwhite',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'Awesome blogpost by Olins theme',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Maecenas porttitor tortor sit amet",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img3',
    'post_type' => 'post',
    'ale_maskonheading' => 'blackwhite',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'Awesome blogpost by Olins theme',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Curabitur justo sapien eleifend sed",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img4',
    'post_type' => 'post',
    'ale_maskonheading' => 'blackwhite',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'Awesome blogpost by Olins theme',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Praesent vel elementum turpis",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_2_id),
    'featured_image_ale_id' => 'ale_img5',
    'post_type' => 'post',
    'ale_maskonheading' => 'blackwhite',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'Awesome blogpost by Olins theme',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Vestibulum ante ipsum primis in faucibus",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img6',
    'post_type' => 'post',
    'ale_maskonheading' => 'blackwhite',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'Awesome blogpost by Olins theme',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Praesent mollis mi taro",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_2_id),
    'featured_image_ale_id' => 'ale_img7',
    'post_type' => 'post',
    'ale_maskonheading' => 'blackwhite',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'Awesome blogpost by Olins theme',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Sed et quam eget nibh convallis",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img8',
    'post_type' => 'post',
    'ale_maskonheading' => 'blackwhite',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'Awesome blogpost by Olins theme',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Aenean dapibus quam quis",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img9',
    'post_type' => 'post',
    'ale_maskonheading' => 'blackwhite',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'Awesome blogpost by Olins theme',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Suspendisse ut lacus enim",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img10',
    'post_type' => 'post',
    'ale_maskonheading' => 'blackwhite',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'Awesome blogpost by Olins theme',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
));


//WooCommerce Products
ale_demo_content::add_post(array(
    'title' => "Cool Women Blouse",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel. Nulla ac ligula feugiat, bibendum odio at, hendrerit augue. Vestibulum id lorem lectus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop1',
    'post_type' => 'product',
    '_regular_price' => '29',
    '_price' => '29',
    '_sale_price' => '21',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop1','ale_shop2'),
));
ale_demo_content::add_post(array(
    'title' => "Women Spring Style",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel. Nulla ac ligula feugiat, bibendum odio at, hendrerit augue. Vestibulum id lorem lectus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop2',
    'post_type' => 'product',
    '_regular_price' => '39',
    '_price' => '39',
    '_sale_price' => '',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop4','ale_shop3','ale_shop1'),
));
ale_demo_content::add_post(array(
    'title' => "Black White for Women",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel. Nulla ac ligula feugiat, bibendum odio at, hendrerit augue. Vestibulum id lorem lectus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop3',
    'post_type' => 'product',
    '_regular_price' => '19',
    '_price' => '19',
    '_sale_price' => '',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop9','ale_shop3','ale_shop8'),
));
ale_demo_content::add_post(array(
    'title' => "Spring Women Dress",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel. Nulla ac ligula feugiat, bibendum odio at, hendrerit augue. Vestibulum id lorem lectus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop4',
    'post_type' => 'product',
    '_regular_price' => '32',
    '_price' => '32',
    '_sale_price' => '',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop2','ale_shop4','ale_shop8'),
));
ale_demo_content::add_post(array(
    'title' => "Modern Men T-Shirt",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel. Nulla ac ligula feugiat, bibendum odio at, hendrerit augue. Vestibulum id lorem lectus.',
    'taxonomy_id_array' => array($preview_shop_cat_2_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop7',
    'post_type' => 'product',
    '_regular_price' => '19',
    '_price' => '19',
    '_sale_price' => '14',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop5','ale_shop6','ale_shop7'),
));
ale_demo_content::add_post(array(
    'title' => "Men Denim Shirt",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel. Nulla ac ligula feugiat, bibendum odio at, hendrerit augue. Vestibulum id lorem lectus.',
    'taxonomy_id_array' => array($preview_shop_cat_2_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop8',
    'post_type' => 'product',
    '_regular_price' => '29',
    '_price' => '29',
    '_sale_price' => '',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop6','ale_shop5','ale_shop7'),
));
ale_demo_content::add_post(array(
    'title' => "Men Jacket Style",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel. Nulla ac ligula feugiat, bibendum odio at, hendrerit augue. Vestibulum id lorem lectus.',
    'taxonomy_id_array' => array($preview_shop_cat_2_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop9',
    'post_type' => 'product',
    '_regular_price' => '49',
    '_price' => '49',
    '_sale_price' => '',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop7','ale_shop6','ale_shop5'),
));
ale_demo_content::add_post(array(
    'title' => "Street Women Wear",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel. Nulla ac ligula feugiat, bibendum odio at, hendrerit augue. Vestibulum id lorem lectus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop5',
    'post_type' => 'product',
    '_regular_price' => '39',
    '_price' => '39',
    '_sale_price' => '',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop10','ale_shop9','ale_shop8'),
));
ale_demo_content::add_post(array(
    'title' => "Women Business Style",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel. Nulla ac ligula feugiat, bibendum odio at, hendrerit augue. Vestibulum id lorem lectus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop6',
    'post_type' => 'product',
    '_regular_price' => '30',
    '_price' => '30',
    '_sale_price' => '',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop2','ale_shop9','ale_shop3'),
));
ale_demo_content::add_post(array(
    'title' => "Casual Women Style",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel. Nulla ac ligula feugiat, bibendum odio at, hendrerit augue. Vestibulum id lorem lectus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop10',
    'post_type' => 'product',
    '_regular_price' => '40',
    '_price' => '40',
    '_sale_price' => '30',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop1','ale_shop8','ale_shop2'),
));


// Works Posts
ale_demo_content::add_post(array(
    'title' => "Praesent dictum dui",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/post_default.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work1',
    'post_type' => 'works',
    'ale_maskonheading' => 'blackwhite',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'created with passion',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
    'gallery_images' => array('ale_work3','ale_work8','ale_work2'),
));
ale_demo_content::add_post(array(
    'title' => "Pellentesque euismod nibh",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/post_default.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work2',
    'post_type' => 'works',
    'ale_maskonheading' => 'blackwhite',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'created with passion',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
    'gallery_images' => array('ale_work1','ale_work3','ale_work4'),
));
ale_demo_content::add_post(array(
    'title' => "Aenean turpis ipsum",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/post_default.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work3',
    'post_type' => 'works',
    'ale_maskonheading' => 'blackwhite',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'created with passion',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
    'gallery_images' => array('ale_work2','ale_work4','ale_work5'),
));
ale_demo_content::add_post(array(
    'title' => "Nullam vitae sodales urna",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/post_default.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work4',
    'post_type' => 'works',
    'ale_maskonheading' => 'blackwhite',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'created with passion',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
    'gallery_images' => array('ale_work1','ale_work4','ale_work5'),
));
ale_demo_content::add_post(array(
    'title' => "Donec blandit nec metus quis",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/post_default.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work5',
    'post_type' => 'works',
    'ale_maskonheading' => 'blackwhite',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'created with passion',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
    'gallery_images' => array('ale_work7','ale_work6','ale_work8'),
));
ale_demo_content::add_post(array(
    'title' => "Maecenas maximus porttitor ex",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/post_default.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work6',
    'post_type' => 'works',
    'ale_maskonheading' => 'blackwhite',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'created with passion',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
    'gallery_images' => array('ale_work7','ale_work1','ale_work9'),
));
ale_demo_content::add_post(array(
    'title' => "Nullam pulvinar tellus",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/post_default.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work7',
    'post_type' => 'works',
    'ale_maskonheading' => 'blackwhite',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'created with passion',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
    'gallery_images' => array('ale_work2','ale_work9','ale_work4'),
));
ale_demo_content::add_post(array(
    'title' => "Etiam nec urna vitae nulla",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/post_default.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work8',
    'post_type' => 'works',
    'ale_maskonheading' => 'blackwhite',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'created with passion',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
    'gallery_images' => array('ale_work3','ale_work4','ale_work5'),
));
ale_demo_content::add_post(array(
    'title' => "Proin sit amet lacinia lacus",
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/post_default.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work9',
    'post_type' => 'works',
    'ale_maskonheading' => 'blackwhite',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'created with passion',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
    'gallery_images' => array('ale_work4','ale_work5','ale_work6'),
));



/**
 * Pages
 */

//Blog page
$ale_blog_id = ale_demo_content::add_page(array(
    'title' => 'Blog',
    'template' => 'index.php',
    'postspage'=>true,
));

//Contact page
$ale_contact_id = ale_demo_content::add_page(array(
    'title' => 'Contact',
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/contact.dat',
    'featured_image_ale_id' => 'ale_contact_heading',
    'ale_featured_position' => 'in_heading',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Get in touch with us',
    'ale_post_title_position' => 'onheadingfeatured',
));

//About Us page
$ale_about_id = ale_demo_content::add_page(array(
    'title' => 'About us',
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/about.dat',
    'featured_image_ale_id' => 'ale_about_heading',
    'ale_featured_position' => 'in_heading',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'some words and facts',
    'ale_post_title_position' => 'onheadingfeatured',
));

//WooCommerce Page
$ale_shop_id = ale_demo_content::add_page(array(
    'title' => 'Shop',
));
$ale_cart_id = ale_demo_content::add_page(array(
    'title' => 'Cart',
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/cart.dat',
));
$ale_checkout_id = ale_demo_content::add_page(array(
    'title' => 'Checkout',
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/checkout.dat',
));
$ale_my_account_id = ale_demo_content::add_page(array(
    'title' => 'My Account',
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/my_account.dat',
));


//Home page
$ale_homepage_id = ale_demo_content::add_page(array(
    'title' => 'Home',
    'homepage' => true,
    'file' => get_template_directory() . '/aletheme/demos/blackwhite/data/home.dat',
));

/**
 * Navigation Settings
 */
$ale_demo_right_menu = ale_demo_menus::create_menu('Header Right Menu', 'header_right_menu');
$ale_demo_left_menu = ale_demo_menus::create_menu('Header Left Menu', 'header_left_menu');
$ale_demo_mobile_menu = ale_demo_menus::create_menu('Mobile Menu', 'mobile_menu');
$ale_demo_footer_menu = ale_demo_menus::create_menu('Footer Menu', 'footer_menu');

//Header Right Menu
ale_demo_menus::add_page(array(
    'title' => 'Blog',
    'add_to_menu_id' => $ale_demo_right_menu,
    'page_id' => $ale_blog_id,
    'parent_id' => ''
));
$store_item = ale_demo_menus::add_page(array(
    'title' => 'Store',
    'add_to_menu_id' => $ale_demo_right_menu,
    'page_id' => $ale_shop_id,
    'parent_id' => ''
));
ale_demo_menus::add_tax_page(array(
    'title' => 'Women',
    'add_to_menu_id' => $ale_demo_right_menu,
    'tax_id' => $preview_shop_cat_1_id,
    'term' => 'product_cat',
    'parent_id' => $store_item
));
ale_demo_menus::add_tax_page(array(
    'title' => 'Men',
    'add_to_menu_id' => $ale_demo_right_menu,
    'tax_id' => $preview_shop_cat_2_id,
    'term' => 'product_cat',
    'parent_id' => $store_item
));
ale_demo_menus::add_page(array(
    'title' => 'Contact',
    'add_to_menu_id' => $ale_demo_right_menu,
    'page_id' => $ale_contact_id,
    'parent_id' => ''
));

//Header Left Menu
ale_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $ale_demo_left_menu,
    'page_id' => $ale_homepage_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'About us',
    'add_to_menu_id' => $ale_demo_left_menu,
    'page_id' => $ale_about_id,
    'parent_id' => ''
));
ale_demo_menus::add_post_type(array(
    'title' => 'Works',
    'add_to_menu_id' => $ale_demo_left_menu,
    'post_type' => 'works',
    'parent_id' => '',
));

//Mobile Menu
ale_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_homepage_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'About us',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_about_id,
    'parent_id' => ''
));
ale_demo_menus::add_post_type(array(
    'title' => 'Works',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'post_type' => 'works',
    'parent_id' => '',
));
ale_demo_menus::add_page(array(
    'title' => 'Blog',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_blog_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Store',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_shop_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Contact',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_contact_id,
    'parent_id' => ''
));

//Footer Menu

ale_demo_menus::add_page(array(
    'title' => 'Blog',
    'add_to_menu_id' => $ale_demo_footer_menu,
    'page_id' => $ale_blog_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Store',
    'add_to_menu_id' => $ale_demo_footer_menu,
    'page_id' => $ale_shop_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Contact',
    'add_to_menu_id' => $ale_demo_footer_menu,
    'page_id' => $ale_contact_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $ale_demo_footer_menu,
    'page_id' => $ale_homepage_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'About us',
    'add_to_menu_id' => $ale_demo_footer_menu,
    'page_id' => $ale_about_id,
    'parent_id' => ''
));
ale_demo_menus::add_post_type(array(
    'title' => 'Works',
    'add_to_menu_id' => $ale_demo_footer_menu,
    'post_type' => 'works',
    'parent_id' => '',
));


//WP Options Settings
ale_demo_options::update_shop_cart($ale_cart_id);
ale_demo_options::update_shop_checkout($ale_checkout_id);
ale_demo_options::update_shop_account($ale_my_account_id);
ale_demo_options::update_tagline('With Love');
ale_demo_options::update_posts_per_page(9);