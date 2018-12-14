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
    'category_name' => 'Wedding',
    'parent_id' => 0,
    'description' => '',
));

//Categories for Works
$preview_work_category_1_id = ale_demo_category::add_term(array(
    'term_name' => 'New York',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
));

/**
 * Posts Settings
 */

// Blog posts
ale_demo_content::add_post(array(
    'title' => "Proin porta, odio at sagittis vehicula",
    'file' => get_template_directory() . '/aletheme/demos/stephanie/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_gal4',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Photos from ceremony',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'disable',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
));

ale_demo_content::add_post(array(
    'title' => "Ut convallis euismod turpis",
    'file' => get_template_directory() . '/aletheme/demos/stephanie/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_gal5',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Photos from ceremony',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'disable',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
));



// Works Posts
ale_demo_content::add_post(array(
    'title' => "Alex & Anastasia",
    'file' => get_template_directory() . '/aletheme/demos/stephanie/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img1',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'disable',
    'ale_post_info_line' => 'disable',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Tom & Rebeca",
    'file' => get_template_directory() . '/aletheme/demos/stephanie/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img2',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'disable',
    'ale_post_info_line' => 'disable',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Andy & Ellene",
    'file' => get_template_directory() . '/aletheme/demos/stephanie/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img3',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'disable',
    'ale_post_info_line' => 'disable',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Bill & Stephanie",
    'file' => get_template_directory() . '/aletheme/demos/stephanie/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img4',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'disable',
    'ale_post_info_line' => 'disable',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Christian & Julia",
    'file' => get_template_directory() . '/aletheme/demos/stephanie/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img5',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'disable',
    'ale_post_info_line' => 'disable',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Donald & Melania",
    'file' => get_template_directory() . '/aletheme/demos/stephanie/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img6',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'disable',
    'ale_post_info_line' => 'disable',
    'ale_featured_position' => 'no',
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

//Contact page
$ale_contact_id = ale_demo_content::add_page(array(
    'title' => 'Contact',
    'file' => get_template_directory() . '/aletheme/demos/stephanie/data/contact.dat',
    'featured_image_ale_id' => '',
    'ale_featured_position' => 'in_heading',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
));

//About Us page
$ale_about_id = ale_demo_content::add_page(array(
    'title' => 'About us',
    'file' => get_template_directory() . '/aletheme/demos/stephanie/data/about.dat',
    'featured_image_ale_id' => '',
    'ale_featured_position' => 'in_heading',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'disable',
));

//Home page
$ale_homepage_id = ale_demo_content::add_page(array(
    'title' => 'Home',
    'homepage' => true,
    'file' => get_template_directory() . '/aletheme/demos/stephanie/data/home.dat',
    'template' => 'template-fullwidth.php',
));

/**
 * Navigation Settings
 */
$ale_demo_right_menu = ale_demo_menus::create_menu('Header Right Menu', 'header_right_menu');
$ale_demo_left_menu = ale_demo_menus::create_menu('Header Left Menu', 'header_left_menu');
$ale_demo_mobile_menu = ale_demo_menus::create_menu('Mobile Menu', 'mobile_menu');

//Header Right Menu
ale_demo_menus::add_page(array(
    'title' => 'Blog',
    'add_to_menu_id' => $ale_demo_left_menu,
    'page_id' => $ale_blog_id,
    'parent_id' => ''
));
ale_demo_menus::add_post_type(array(
    'title' => 'Portfolio',
    'add_to_menu_id' => $ale_demo_left_menu,
    'post_type' => 'works',
    'parent_id' => '',
));

ale_demo_menus::add_page(array(
    'title' => 'About',
    'add_to_menu_id' => $ale_demo_right_menu,
    'page_id' => $ale_about_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Contact',
    'add_to_menu_id' => $ale_demo_right_menu,
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
    'title' => 'Portfolio',
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



//WP Options Settings
ale_demo_options::update_tagline('Wedding Photographer');
ale_demo_options::update_posts_per_page(6);