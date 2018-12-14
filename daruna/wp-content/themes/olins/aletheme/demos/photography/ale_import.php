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
    'category_name' => 'People',
    'parent_id' => 0,
    'description' => '',
));

//Works
$preview_work_category_1_id = ale_demo_category::add_term(array(
    'term_name' => 'Portraits',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
));
$preview_work_category_2_id = ale_demo_category::add_term(array(
    'term_name' => 'Views',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
));
$preview_work_category_3_id = ale_demo_category::add_term(array(
    'term_name' => 'People',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
));


/**
 * Posts Settings
 */


// Works Posts
ale_demo_content::add_post(array(
    'title' => "Cras finibus risus",
    'file' => get_template_directory() . '/aletheme/demos/photography/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id,$preview_work_category_2_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work1',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'grid_line',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_sw_1','ale_sw_2','ale_sw_3'),
));
ale_demo_content::add_post(array(
    'title' => "Donec scelerisque",
    'file' => get_template_directory() . '/aletheme/demos/photography/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_3_id,$preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work2',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'grid_line',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_sw_3','ale_sw_4','ale_sw_5'),
));
ale_demo_content::add_post(array(
    'title' => "Nunc sollicitudin tortor",
    'file' => get_template_directory() . '/aletheme/demos/photography/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_2_id,$preview_work_category_3_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work3',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'grid_line',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_sw_5','ale_sw_6','ale_sw_7'),
));
ale_demo_content::add_post(array(
    'title' => "Nunc ultrices nunc",
    'file' => get_template_directory() . '/aletheme/demos/photography/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work4',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'grid_line',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_sw_8','ale_sw_9','ale_sw_10'),
));
ale_demo_content::add_post(array(
    'title' => "Vivamus nec nisi",
    'file' => get_template_directory() . '/aletheme/demos/photography/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_3_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work5',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'grid_line',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_sw_10','ale_sw_8','ale_sw_4'),
));
ale_demo_content::add_post(array(
    'title' => "Cras justo elit",
    'file' => get_template_directory() . '/aletheme/demos/photography/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_2_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work6',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'grid_line',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_sw_9','ale_sw_3','ale_sw_6'),
));


//Blog Posts
ale_demo_content::add_post(array(
    'title' => "Proin porta, odio at sagittis vehicula",
    'file' => get_template_directory() . '/aletheme/demos/photography/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_sw_1',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'grid_line',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Donec finibus, dolor vitae sodales",
    'file' => get_template_directory() . '/aletheme/demos/photography/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_sw_2',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'grid_line',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Aliquam urna purus, viverra sed ornare id",
    'file' => get_template_directory() . '/aletheme/demos/photography/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_sw_3',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'grid_line',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Donec scelerisque aliquet arcu",
    'file' => get_template_directory() . '/aletheme/demos/photography/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_sw_4',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'grid_line',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Phasellus vitae pulvinar lorem",
    'file' => get_template_directory() . '/aletheme/demos/photography/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_sw_5',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'grid_line',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Suspendisse dignissim dolor",
    'file' => get_template_directory() . '/aletheme/demos/photography/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_sw_6',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'grid_line',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Curabitur ut ex et tortor tincidunt",
    'file' => get_template_directory() . '/aletheme/demos/photography/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_sw_7',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'grid_line',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Cras mollis arcu tortor id euismod ",
    'file' => get_template_directory() . '/aletheme/demos/photography/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_sw_8',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'grid_line',
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
    'file' => get_template_directory() . '/aletheme/demos/photography/data/about.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'in_heading',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
));

//Contact page
$ale_contact_id = ale_demo_content::add_page(array(
    'title' => 'Contact',
    'file' => get_template_directory() . '/aletheme/demos/photography/data/contact.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'in_heading',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
));

//Home page
$ale_homepage_id = ale_demo_content::add_page(array(
    'title' => 'Home',
    'homepage' => true,
    'file' => get_template_directory() . '/aletheme/demos/photography/data/home.dat',
    'template' => 'template-fullwidth.php',
));

/**
 * Navigation Settings
 */
$ale_demo_header_menu = ale_demo_menus::create_menu('Header Menu', 'header_menu');


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
    'title' => 'Works',
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
    'title' => 'Contact',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_contact_id,
    'parent_id' => ''
));


// Update Options
ale_demo_options::update_tagline('PHOTOGRAPHY AGENCY');
ale_demo_options::update_posts_per_page(6);