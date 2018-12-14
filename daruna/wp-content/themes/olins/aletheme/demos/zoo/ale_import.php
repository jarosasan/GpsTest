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


$preview_work_category_1_id = ale_demo_category::add_term(array(
    'term_name' => 'Wolf',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
    'ale_type_icon' => 'ale_cat6',
));
$preview_work_category_2_id = ale_demo_category::add_term(array(
    'term_name' => 'Monkey',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
    'ale_type_icon' => 'ale_cat5',
));
$preview_work_category_3_id = ale_demo_category::add_term(array(
    'term_name' => 'Squirrel',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
    'ale_type_icon' => 'ale_cat4',
));
$preview_work_category_4_id = ale_demo_category::add_term(array(
    'term_name' => 'Lion',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
    'ale_type_icon' => 'ale_cat3',
));
$preview_work_category_5_id = ale_demo_category::add_term(array(
    'term_name' => 'Bear',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
    'ale_type_icon' => 'ale_cat2',
));
$preview_work_category_6_id = ale_demo_category::add_term(array(
    'term_name' => 'Roe',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
    'ale_type_icon' => 'ale_cat1',
));


/**
 * Posts Settings
 */


// Works Posts
ale_demo_content::add_post(array(
    'title' => "Wild Wolf",
    'file' => get_template_directory() . '/aletheme/demos/zoo/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work6',
    'post_type' => 'works',
    'ale_maskonheading' => 'black_40',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'top_full',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_gal1','ale_gal2','ale_gal3'),
));
ale_demo_content::add_post(array(
    'title' => "Little Monkey",
    'file' => get_template_directory() . '/aletheme/demos/zoo/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_2_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work5',
    'post_type' => 'works',
    'ale_maskonheading' => 'black_40',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'top_full',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_gal3','ale_gal4','ale_gal5'),
));
ale_demo_content::add_post(array(
    'title' => "Pretty Squirrel",
    'file' => get_template_directory() . '/aletheme/demos/zoo/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_3_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work4',
    'post_type' => 'works',
    'ale_maskonheading' => 'black_40',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'top_full',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_gal5','ale_gal6','ale_gal7'),
));
ale_demo_content::add_post(array(
    'title' => "Lion King",
    'file' => get_template_directory() . '/aletheme/demos/zoo/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_4_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work3',
    'post_type' => 'works',
    'ale_maskonheading' => 'black_40',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'top_full',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_gal7','ale_gal8','ale_gal9'),
));
ale_demo_content::add_post(array(
    'title' => "Grizzly Bear",
    'file' => get_template_directory() . '/aletheme/demos/zoo/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_5_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work2',
    'post_type' => 'works',
    'ale_maskonheading' => 'black_40',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'top_full',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_gal9','ale_gal10','ale_gal11'),
));
ale_demo_content::add_post(array(
    'title' => "Wild Roe",
    'file' => get_template_directory() . '/aletheme/demos/zoo/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_6_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work1',
    'post_type' => 'works',
    'ale_maskonheading' => 'black_40',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'top_full',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_gal11','ale_gal12','ale_gal1'),
));


//Form post for MailChimp
$subscribe_post_id = ale_demo_content::add_post(array(
    'title' => "Subscribe Form",
    'file' => get_template_directory() . '/aletheme/demos/zoo/data/mailchimp.dat',
    'post_excerpt' => '',
    'post_type' => 'mc4wp-form',
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

//About Us page
$ale_about_id = ale_demo_content::add_page(array(
    'title' => 'About',
    'file' => get_template_directory() . '/aletheme/demos/zoo/data/about.dat',
    'featured_image_ale_id' => 'ale_about_heading',
    'ale_maskonheading' => 'black_40',
    'ale_featuredimagecover' => 'on',
    'ale_featured_position' => 'in_heading',
    'ale_post_pre_title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    'ale_post_title_position' => 'onheadingfeatured',
));

//Contact page
$ale_contact_id = ale_demo_content::add_page(array(
    'title' => 'Contact',
    'file' => get_template_directory() . '/aletheme/demos/zoo/data/contact.dat',
    'featured_image_ale_id' => 'ale_contact_heading',
    'ale_maskonheading' => 'black_40',
    'ale_featuredimagecover' => 'on',
    'ale_featured_position' => 'in_heading',
    'ale_post_pre_title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    'ale_post_title_position' => 'onheadingfeatured',
));

//Pricing page
$ale_price_id = ale_demo_content::add_page(array(
    'title' => 'Pricing',
    'file' => get_template_directory() . '/aletheme/demos/zoo/data/price.dat',
    'featured_image_ale_id' => 'ale_price_heading',
    'ale_maskonheading' => 'black_40',
    'ale_featuredimagecover' => 'on',
    'ale_featured_position' => 'in_heading',
    'ale_post_pre_title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    'ale_post_title_position' => 'onheadingfeatured',
));



//Home page
$ale_homepage_id = ale_demo_content::add_page(array(
    'title' => 'Home',
    'homepage' => true,
    'file' => get_template_directory() . '/aletheme/demos/zoo/data/home.dat',
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
ale_demo_menus::add_post_type(array(
    'title' => 'Gallery',
    'add_to_menu_id' => $ale_demo_header_menu,
    'post_type' => 'works',
    'parent_id' => '',
));
ale_demo_menus::add_page(array(
    'title' => 'Price',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_price_id,
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
ale_demo_menus::add_post_type(array(
    'title' => 'Gallery',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'post_type' => 'works',
    'parent_id' => '',
));
ale_demo_menus::add_page(array(
    'title' => 'Price',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_price_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Contact',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_contact_id,
    'parent_id' => ''
));

// Update Options
ale_demo_options::update_tagline('We love Animals');
ale_demo_options::update_posts_per_page(6);

$om4_cpt_editor_data = unserialize('a:2:{s:7:"version";i:1;s:8:"settings";a:1:{s:5:"types";a:1:{s:5:"works";a:1:{s:6:"labels";a:13:{s:4:"name";s:9:"Galleries";s:13:"singular_name";s:7:"Gallery";s:12:"add_new_item";s:15:"Add New Gallery";s:9:"edit_item";s:4:"Edit";s:8:"new_item";s:11:"New Gallery";s:9:"view_item";s:4:"View";s:12:"search_items";s:16:"Search Galleries";s:9:"not_found";s:18:"No Galleries Found";s:18:"not_found_in_trash";s:26:"No Galeries found in Trash";s:9:"all_items";s:8:"Galeries";s:8:"archives";s:7:"Gallery";s:9:"menu_name";s:8:"Galeries";s:14:"name_admin_bar";s:7:"Gallery";}}}}}');
ale_demo_options::update_om4_cpt_editor($om4_cpt_editor_data);
ale_demo_options::mc4wp_default_form_id($subscribe_post_id);

ale_demo_options::import_rev_slider('http://alethemes.com/olins_base/media/zoo/zoo.zip');