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
    'term_name' => 'Home',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
));
$preview_work_category_2_id = ale_demo_category::add_term(array(
    'term_name' => 'Furniture',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
));
$preview_work_category_3_id = ale_demo_category::add_term(array(
    'term_name' => 'Presonal',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
));
$preview_work_category_4_id = ale_demo_category::add_term(array(
    'term_name' => 'Office',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
));

//Categories for Posts
$preview_post_cat_1_id = ale_demo_category::add_category(array(
    'category_name' => 'Furniture',
    'parent_id' => 0,
    'description' => '',
));


/**
 * Posts Settings
 */


// Works Posts
ale_demo_content::add_post(array(
    'title' => "Phasellus hendrerit",
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img1',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img1','ale_img2','ale_img3','ale_img4','ale_img5'),
));
ale_demo_content::add_post(array(
    'title' => "Proin mi quam",
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_2_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img2',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img2','ale_img3','ale_img4','ale_img5','ale_img6'),
));
ale_demo_content::add_post(array(
    'title' => "Suspen disse potenti",
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_3_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img3',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img3','ale_img4','ale_img5','ale_img6','ale_img7'),
));
ale_demo_content::add_post(array(
    'title' => "Sed gravida ornare",
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_4_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work4',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_work4','ale_img5','ale_img6','ale_img7','ale_img8'),
));
ale_demo_content::add_post(array(
    'title' => "Suspendisse ultrices",
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work3',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_work3','ale_img6','ale_img7','ale_img8','ale_img9'),
));
ale_demo_content::add_post(array(
    'title' => "Praesent ac mollis",
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_2_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img6',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img6','ale_img7','ale_img8','ale_img9','ale_img10'),
));
ale_demo_content::add_post(array(
    'title' => "Sed lacinia orci",
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_3_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img7',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img7','ale_img8','ale_img9','ale_img10','ale_img11'),
));
ale_demo_content::add_post(array(
    'title' => "Cras massa nunc",
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_4_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img8',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img8','ale_img9','ale_img10','ale_img11','ale_img1'),
));
ale_demo_content::add_post(array(
    'title' => "Suspen disse feugiat",
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_4_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img9',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img9','ale_img10','ale_img11','ale_img1','ale_img2'),
));
ale_demo_content::add_post(array(
    'title' => "Aenean tinci dunt",
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work2',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_work2','ale_img11','ale_img1','ale_img3','ale_img2'),
));
ale_demo_content::add_post(array(
    'title' => "Praesent egestas",
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_2_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work1',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_work1','ale_img1','ale_img2','ale_img3','ale_img4'),
));


//Blog posts
ale_demo_content::add_post(array(
    'title' => "Proin porta odio sagittis",
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img8',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Donec orci quam, consectetur",
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img7',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Nullam suscipit ac urna ",
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img6',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Duis sodales finibus finibus",
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img5',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "In ut aliquam magna eget",
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img4',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Nulla libero arcu pulvinar",
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img3',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "In quis ante est",
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img2',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Phasellus placerat efficitur",
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img1',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
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
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/about.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'in_heading',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheadingwithdefaults',
));

//Contact page
$ale_contact_id = ale_demo_content::add_page(array(
    'title' => 'Contact',
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/contact.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'in_heading',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheadingwithdefaults',
));



//Home page
$ale_homepage_id = ale_demo_content::add_page(array(
    'title' => 'Home',
    'homepage' => true,
    'file' => get_template_directory() . '/aletheme/demos/furniture/data/home.dat',
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
    'title' => 'About us',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_about_id,
    'parent_id' => ''
));
ale_demo_menus::add_post_type(array(
    'title' => 'Furniture',
    'add_to_menu_id' => $ale_demo_header_menu,
    'post_type' => 'works',
    'parent_id' => '',
));
ale_demo_menus::add_page(array(
    'title' => 'Blog',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_blog_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Contacts',
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
    'title' => 'Furniture',
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
    'title' => 'Contact',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_contact_id,
    'parent_id' => ''
));

// Update Options
ale_demo_options::update_tagline('Furniture');
ale_demo_options::update_posts_per_page(6);

$om4_cpt_editor_data = unserialize('a:2:{s:7:"version";i:1;s:8:"settings";a:1:{s:5:"types";a:1:{s:5:"works";a:1:{s:6:"labels";a:12:{s:4:"name";s:9:"Furniture";s:13:"singular_name";s:9:"Furniture";s:12:"add_new_item";s:17:"Add New Furniture";s:9:"edit_item";s:4:"Edit";s:8:"new_item";s:13:"New Furniture";s:9:"view_item";s:4:"View";s:9:"not_found";s:19:"No Furnitures Found";s:18:"not_found_in_trash";s:28:"No Furnitures found in Trash";s:9:"all_items";s:10:"Furnitures";s:8:"archives";s:10:"Furnitures";s:9:"menu_name";s:10:"Furnitures";s:14:"name_admin_bar";s:9:"Furniture";}}}}}');
ale_demo_options::update_om4_cpt_editor($om4_cpt_editor_data);

ale_demo_options::import_rev_slider('http://alethemes.com/olins_base/media/furniture/furniture.zip');