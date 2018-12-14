<?php

/**
 * Sidebar Settings
 */

//Remove Widgets from all sidebars
ale_preview_widget::remove_widgets_from_sidebar('main-sidebar');

//Add widgets to Main Sidebar
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'recent-posts', array ('title' => 'Recent Posts','number'=>'5',));
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'recent-comments', array ('title' => 'Comments','number'=>'5',));
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'ale_about_widget', array ('title' => 'About Me','image'=>'','text'=>'Etiam vel turpis ac nibh venenatis pretium eget in risus. Vestibulum diam massa, efficitur sit amet libero in, rutrum rutrum elit. Ut justo dolor, ullamcorper id feugiat in, bibendum at nulla. Donec elementum finibus augue, a lobortis velit dignissim ullamcorper. '));




/**
 * Categories and Custom Taxonomies
 */

//Categories for Posts
$preview_post_cat_1_id = ale_demo_category::add_category(array(
    'category_name' => 'Shoes',
    'parent_id' => 0,
    'description' => '',
));


//Categories for WooCommerce Shop
$preview_shop_cat_1_id = ale_demo_category::add_term(array(
    'term_name' => 'Handmade',
    'taxonomy'=>'product_cat',
    'parent_id' => 0,
    'description' => '',
));
$preview_shop_cat_2_id = ale_demo_category::add_term(array(
    'term_name' => 'Luxury',
    'taxonomy'=>'product_cat',
    'parent_id' => 0,
    'description' => '',
));

/**
 * Posts Settings
 */

// Blog posts
ale_demo_content::add_post(array(
    'title' => "Proin porta odio",
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img1',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_fourth'
));
ale_demo_content::add_post(array(
    'title' => "Cras finibus risus",
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img2',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_fourth'
));
ale_demo_content::add_post(array(
    'title' => "Donec scelerisque ali",
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img3',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_fourth'
));
ale_demo_content::add_post(array(
    'title' => "Vestibulum vitae jus",
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img4',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_fourth'
));
ale_demo_content::add_post(array(
    'title' => "Quisque pharetra orci",
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img5',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_fourth'
));
ale_demo_content::add_post(array(
    'title' => "Curabitur sit amet",
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img6',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_fourth'
));
ale_demo_content::add_post(array(
    'title' => "Sed eu elit ut turpis",
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img7',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_fourth'
));
ale_demo_content::add_post(array(
    'title' => "Sed imperdiet sag",
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img8',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_fourth'
));
ale_demo_content::add_post(array(
    'title' => "Ut molestie quam",
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img9',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_fourth'
));
ale_demo_content::add_post(array(
    'title' => "Nunc sollicitudin tortor",
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img10',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_fourth'
));



//WooCommerce Products
ale_demo_content::add_post(array(
    'title' => "Luxury Shoes",
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel.',
    'taxonomy_id_array' => array($preview_shop_cat_2_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop1',
    'post_type' => 'product',
    '_regular_price' => '29',
    '_price' => '29',
    '_sale_price' => '21',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop1','ale_shop2','ale_shop3'),
));
ale_demo_content::add_post(array(
    'title' => "Handmade Shoes",
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop2',
    'post_type' => 'product',
    '_regular_price' => '39',
    '_price' => '39',
    '_sale_price' => '39',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop2','ale_shop3','ale_shop4'),
));
ale_demo_content::add_post(array(
    'title' => "Premium Shoes",
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel.',
    'taxonomy_id_array' => array($preview_shop_cat_2_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop3',
    'post_type' => 'product',
    '_regular_price' => '49',
    '_price' => '49',
    '_sale_price' => '49',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop3','ale_shop4','ale_shop5'),
));
ale_demo_content::add_post(array(
    'title' => "Good Shoes",
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop4',
    'post_type' => 'product',
    '_regular_price' => '43',
    '_price' => '43',
    '_sale_price' => '39',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop4','ale_shop5','ale_shop6'),
));
ale_demo_content::add_post(array(
    'title' => "Awesome Shoes",
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel.',
    'taxonomy_id_array' => array($preview_shop_cat_2_id,$preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop5',
    'post_type' => 'product',
    '_regular_price' => '40',
    '_price' => '40',
    '_sale_price' => '40',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop5','ale_shop6','ale_shop7'),
));
ale_demo_content::add_post(array(
    'title' => "Men Shoes",
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id,$preview_shop_cat_2_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop6',
    'post_type' => 'product',
    '_regular_price' => '45',
    '_price' => '45',
    '_sale_price' => '45',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop6','ale_shop7','ale_shop8'),
));
ale_demo_content::add_post(array(
    'title' => "Shoes for Men",
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel.',
    'taxonomy_id_array' => array($preview_shop_cat_2_id,$preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop7',
    'post_type' => 'product',
    '_regular_price' => '49',
    '_price' => '49',
    '_sale_price' => '49',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop8','ale_shop7','ale_shop6'),
));
ale_demo_content::add_post(array(
    'title' => "Black Shoes",
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id,$preview_shop_cat_2_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop8',
    'post_type' => 'product',
    '_regular_price' => '39',
    '_price' => '39',
    '_sale_price' => '39',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop7','ale_shop6','ale_shop5'),
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
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/contact.dat',
    'ale_maskonheading' => 'disable',
    'featured_image_ale_id' => '',
    'ale_featured_position' => 'in_heading',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'template' => 'template-fullwidth.php',
));

//About Us page
$ale_about_id = ale_demo_content::add_page(array(
    'title' => 'About',
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/about.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featured_position' => 'in_heading',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'template' => 'template-fullwidth.php',
));

//WooCommerce Page
$ale_shop_id = ale_demo_content::add_page(array(
    'title' => 'Shop',
));
$ale_cart_id = ale_demo_content::add_page(array(
    'title' => 'Cart',
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/cart.dat',
));
$ale_checkout_id = ale_demo_content::add_page(array(
    'title' => 'Checkout',
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/checkout.dat',
));
$ale_my_account_id = ale_demo_content::add_page(array(
    'title' => 'My Account',
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/my_account.dat',
));


//Home page
$ale_homepage_id = ale_demo_content::add_page(array(
    'title' => 'Home',
    'homepage' => true,
    'file' => get_template_directory() . '/aletheme/demos/luxuryshoes/data/home.dat',
    'template' => 'template-fullwidth.php',
));

/**
 * Navigation Settings
 */
$ale_demo_header_menu = ale_demo_menus::create_menu('Header Menu', 'header_menu');
$ale_demo_mobile_menu = ale_demo_menus::create_menu('Mobile Menu', 'mobile_menu');

//Header Menu
ale_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_homepage_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'About',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_about_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Shop',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_shop_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Blog',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_blog_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Contact',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_contact_id,
    'parent_id' => ''
));

//Mobile Menu
ale_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_homepage_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'About',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_about_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Blog',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_blog_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Shop',
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



//WP Options Settings
ale_demo_options::update_shop_cart($ale_cart_id);
ale_demo_options::update_shop_checkout($ale_checkout_id);
ale_demo_options::update_shop_account($ale_my_account_id);

ale_demo_options::update_tagline('Luxury Shoes');
ale_demo_options::update_posts_per_page(8);