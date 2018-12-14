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
    'category_name' => 'Couples',
    'parent_id' => 0,
    'description' => '',
));

//Categories for Works
$preview_work_category_1_id = ale_demo_category::add_term(array(
    'term_name' => 'Couples',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
    'ale_type_icon' => 'ale_cat6',
));


/**
 * Posts Settings
 */

//Blog Posts
ale_demo_content::add_post(array(
    'title' => "Andy and Rebeca",
    'file' => get_template_directory() . '/aletheme/demos/brigitte/data/post_default.dat',
    'post_excerpt' => '',
    'post_format' => 'gallery',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img1',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'grid_line',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
    'ale_related_posts' => 'disable',
    'gallery_images' => array('ale_img3','ale_img1'),
));
ale_demo_content::add_post(array(
    'title' => "Sidney and Alex",
    'file' => get_template_directory() . '/aletheme/demos/brigitte/data/post_default.dat',
    'post_excerpt' => '',
    'post_format' => 'gallery',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img2',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'grid_line',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
    'ale_related_posts' => 'disable',
    'gallery_images' => array('ale_img6','ale_img2'),
));
ale_demo_content::add_post(array(
    'title' => "Julia and Cristian",
    'file' => get_template_directory() . '/aletheme/demos/brigitte/data/post_default.dat',
    'post_excerpt' => '',
    'post_format' => 'gallery',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img3',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'grid_line',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
    'ale_related_posts' => 'disable',
    'gallery_images' => array('ale_img63','ale_img7'),
));
ale_demo_content::add_post(array(
    'title' => "Elene and Alex",
    'file' => get_template_directory() . '/aletheme/demos/brigitte/data/post_default.dat',
    'post_excerpt' => '',
    'post_format' => 'gallery',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img4',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'grid_line',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
    'ale_related_posts' => 'disable',
    'gallery_images' => array('ale_img4','ale_img5'),
));
ale_demo_content::add_post(array(
    'title' => "Anna and Collins",
    'file' => get_template_directory() . '/aletheme/demos/brigitte/data/post_default.dat',
    'post_excerpt' => '',
    'post_format' => 'gallery',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img5',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'grid_line',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
    'ale_related_posts' => 'disable',
    'gallery_images' => array('ale_img6','ale_img5'),
));
ale_demo_content::add_post(array(
    'title' => "Lisa and Bobby",
    'file' => get_template_directory() . '/aletheme/demos/brigitte/data/post_default.dat',
    'post_excerpt' => '',
    'post_format' => 'gallery',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img6',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'grid_line',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
    'ale_related_posts' => 'disable',
    'gallery_images' => array('ale_img6','ale_img7'),
));


// Works Posts
ale_demo_content::add_post(array(
    'title' => "Alex & Linda",
    'file' => get_template_directory() . '/aletheme/demos/brigitte/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work6',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'brigitte_slider',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img1','ale_img2','ale_img11','ale_img3'),
));
ale_demo_content::add_post(array(
    'title' => "Bobby & Rebeca",
    'file' => get_template_directory() . '/aletheme/demos/brigitte/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work5',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'brigitte_slider',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img3','ale_img4','ale_img10','ale_img5'),
));
ale_demo_content::add_post(array(
    'title' => "Julia & Cristian",
    'file' => get_template_directory() . '/aletheme/demos/brigitte/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work4',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'brigitte_slider',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img5','ale_img1','ale_img9','ale_img6'),
));
ale_demo_content::add_post(array(
    'title' => "Anna & David",
    'file' => get_template_directory() . '/aletheme/demos/brigitte/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work3',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'brigitte_slider',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img6','ale_img4','ale_img8','ale_img5'),
));
ale_demo_content::add_post(array(
    'title' => "Kate & Bill",
    'file' => get_template_directory() . '/aletheme/demos/brigitte/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work2',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'brigitte_slider',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img1','ale_img4','ale_img9','ale_img2'),
));
ale_demo_content::add_post(array(
    'title' => "Lissy and Alex",
    'file' => get_template_directory() . '/aletheme/demos/brigitte/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work1',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'brigitte_slider',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img6','ale_img5','ale_img4','ale_img3'),
));


/**
 * Pages
 */

//Blog page
$ale_blog_id = ale_demo_content::add_page(array(
    'title' => 'Journal',
    'template' => 'index.php',
    'postspage'=>true,
));

//Contact page
$ale_contact_id = ale_demo_content::add_page(array(
    'title' => 'Contact',
    'file' => get_template_directory() . '/aletheme/demos/brigitte/data/contact.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'no',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
));

//About Us page
$ale_about_id = ale_demo_content::add_page(array(
    'title' => 'About',
    'file' => get_template_directory() . '/aletheme/demos/brigitte/data/about.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'no',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
));


//Home page
$ale_homepage_id = ale_demo_content::add_page(array(
    'title' => 'Home',
    'homepage' => true,
    'file' => get_template_directory() . '/aletheme/demos/brigitte/data/home.dat',
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
    'title' => 'Blogs',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_blog_id,
    'parent_id' => ''
));
ale_demo_menus::add_post_type(array(
    'title' => 'Portfolio',
    'add_to_menu_id' => $ale_demo_header_menu,
    'post_type' => 'works',
    'parent_id' => '',
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
    'title' => 'Blogs',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_blog_id,
    'parent_id' => ''
));
ale_demo_menus::add_post_type(array(
    'title' => 'Portfolio',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'post_type' => 'works',
    'parent_id' => '',
));
ale_demo_menus::add_page(array(
    'title' => 'Contact',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_contact_id,
    'parent_id' => ''
));

// Update Options
ale_demo_options::update_tagline('Bigitte Tahn');
ale_demo_options::update_posts_per_page(6);
