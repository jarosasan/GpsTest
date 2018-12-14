<?php

/**
 * Sidebar Settings
 */

//Remove Widgets from all sidebars
ale_preview_widget::remove_widgets_from_sidebar('main-sidebar');

//Add widgets to Main Sidebar

ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'ale_about_widget', array ('title' => 'About Me','image'=>'','text'=>'Etiam vel turpis ac nibh venenatis pretium eget in risus. Vestibulum diam massa, efficitur sit amet libero in, rutrum rutrum elit. Ut justo dolor, ullamcorper id feugiat in, bibendum at nulla. Donec elementum finibus augue, a lobortis velit dignissim ullamcorper. '));
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'search', array ('title' => 'Search'));
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'ale_blog_widget', array ('title' => 'Recent Posts','number'=>'2',));




/**
 * Categories and Custom Taxonomies
 */

//Categories for Posts
$preview_post_cat_1_id = ale_demo_category::add_category(array(
    'category_name' => 'Lifestyle',
    'parent_id' => 0,
    'description' => '',
));


$preview_work_category_1_id = ale_demo_category::add_term(array(
    'term_name' => 'Fashion',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
));

/**
 * Posts Settings
 */

// Blog posts
ale_demo_content::add_post(array(
    'title' => "FRENCH &  STYLE",
    'file' => get_template_directory() . '/aletheme/demos/cameron/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img4',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
    'ale_related_posts' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Russian & Beauty",
    'file' => get_template_directory() . '/aletheme/demos/cameron/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img3',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
    'ale_related_posts' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Italian & Sexy",
    'file' => get_template_directory() . '/aletheme/demos/cameron/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img2',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
    'ale_related_posts' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "FRENCH &  STYLE",
    'file' => get_template_directory() . '/aletheme/demos/cameron/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img1',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
    'ale_related_posts' => 'disable',
));


// Works Posts
ale_demo_content::add_post(array(
    'title' => "Phasellus hendrerit",
    'file' => get_template_directory() . '/aletheme/demos/cameron/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work11',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'top_full',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img1','ale_img2','ale_img3'),
));
ale_demo_content::add_post(array(
    'title' => "Fusce fermentum turpis",
    'file' => get_template_directory() . '/aletheme/demos/cameron/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work10',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'top_full',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img1','ale_img2','ale_img3'),
));
ale_demo_content::add_post(array(
    'title' => "Ut aliquet sem non pharetra ",
    'file' => get_template_directory() . '/aletheme/demos/cameron/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work9',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'top_full',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img1','ale_img2','ale_img3'),
));
ale_demo_content::add_post(array(
    'title' => "Vestibulum pretium sem",
    'file' => get_template_directory() . '/aletheme/demos/cameron/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work8',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'top_full',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img1','ale_img2','ale_img3'),
));
ale_demo_content::add_post(array(
    'title' => "Aliquam quis efficitur sapien",
    'file' => get_template_directory() . '/aletheme/demos/cameron/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work7',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'top_full',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img1','ale_img2','ale_img3'),
));
ale_demo_content::add_post(array(
    'title' => "Cras aliquet quis nisl ut",
    'file' => get_template_directory() . '/aletheme/demos/cameron/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work6',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'top_full',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img1','ale_img2','ale_img3'),
));
ale_demo_content::add_post(array(
    'title' => "Ut viverra sed arcu vel",
    'file' => get_template_directory() . '/aletheme/demos/cameron/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work5',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'top_full',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img1','ale_img2','ale_img3'),
));
ale_demo_content::add_post(array(
    'title' => "Sed ac gravida risus",
    'file' => get_template_directory() . '/aletheme/demos/cameron/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work4',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'top_full',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img1','ale_img2','ale_img3'),
));
ale_demo_content::add_post(array(
    'title' => "Donec tincidunt volutpat",
    'file' => get_template_directory() . '/aletheme/demos/cameron/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work3',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'top_full',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img1','ale_img2','ale_img3'),
));
ale_demo_content::add_post(array(
    'title' => "Mauris sodales, nulla et ",
    'file' => get_template_directory() . '/aletheme/demos/cameron/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work2',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'top_full',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img1','ale_img2','ale_img3'),
));
ale_demo_content::add_post(array(
    'title' => "Nam at convallis risus",
    'file' => get_template_directory() . '/aletheme/demos/cameron/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work1',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'before_content',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'top_full',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img1','ale_img2','ale_img3'),
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
    'file' => get_template_directory() . '/aletheme/demos/cameron/data/contact.dat',
    'ale_maskonheading' => 'disable',
    'featured_image_ale_id' => '',
    'ale_featured_position' => 'in_heading',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'disable',
));

//About Us page
$ale_about_id = ale_demo_content::add_page(array(
    'title' => 'About',
    'file' => get_template_directory() . '/aletheme/demos/cameron/data/about.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featured_position' => 'in_heading',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'disable',
));

//Home page
$ale_homepage_id = ale_demo_content::add_page(array(
    'title' => 'Home',
    'homepage' => true,
    'file' => get_template_directory() . '/aletheme/demos/cameron/data/home.dat',
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
    'title' => 'About Us',
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
    'title' => 'Contact',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_contact_id,
    'parent_id' => ''
));



//WP Options Settings
ale_demo_options::update_tagline('Cameron Photo');
ale_demo_options::update_posts_per_page(3);