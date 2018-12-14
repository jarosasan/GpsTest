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
    'category_name' => 'Arts&Crafts',
    'parent_id' => 0,
    'description' => '',
));


$preview_work_category_1_id = ale_demo_category::add_term(array(
    'term_name' => 'Arts Design',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
));

/**
 * Posts Settings
 */

// Blog posts
ale_demo_content::add_post(array(
    'title' => "Awesome Design",
    'file' => get_template_directory() . '/aletheme/demos/pixel/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img6',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
    'ale_related_posts' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Perfect Pixel",
    'file' => get_template_directory() . '/aletheme/demos/pixel/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img5',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
    'ale_related_posts' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Packaging Design",
    'file' => get_template_directory() . '/aletheme/demos/pixel/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img4',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
    'ale_related_posts' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Awesome Work",
    'file' => get_template_directory() . '/aletheme/demos/pixel/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img3',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
    'ale_related_posts' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Awesome Packaging",
    'file' => get_template_directory() . '/aletheme/demos/pixel/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img2',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
    'ale_related_posts' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Perfect Design",
    'file' => get_template_directory() . '/aletheme/demos/pixel/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img1',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
    'ale_related_posts' => 'disable',
));


// Works Posts
ale_demo_content::add_post(array(
    'title' => "Creative Product Packaging",
    'file' => get_template_directory() . '/aletheme/demos/pixel/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work4',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'after_content',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'creative_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_single','ale_work1','ale_work2','ale_work3','ale_work4'),
));
ale_demo_content::add_post(array(
    'title' => "Creative Little Bag Packaging",
    'file' => get_template_directory() . '/aletheme/demos/pixel/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work3',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'after_content',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'creative_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_single','ale_work1','ale_work2','ale_work3','ale_work4'),
));
ale_demo_content::add_post(array(
    'title' => "Awesome Design & Packaging",
    'file' => get_template_directory() . '/aletheme/demos/pixel/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work2',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'after_content',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'creative_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_single','ale_work1','ale_work2','ale_work3','ale_work4'),
));
ale_demo_content::add_post(array(
    'title' => "Creative New Product Design",
    'file' => get_template_directory() . '/aletheme/demos/pixel/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work1',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'after_content',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'creative_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_single','ale_work1','ale_work2','ale_work3','ale_work4'),
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
    'file' => get_template_directory() . '/aletheme/demos/pixel/data/contact.dat',
    'ale_maskonheading' => 'disable',
    'featured_image_ale_id' => '',
    'ale_featured_position' => 'in_heading',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
));

//About Us page
$ale_about_id = ale_demo_content::add_page(array(
    'title' => 'About',
    'file' => get_template_directory() . '/aletheme/demos/pixel/data/about.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featured_position' => 'in_heading',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
));

//Home page
$ale_homepage_id = ale_demo_content::add_page(array(
    'title' => 'Home',
    'homepage' => true,
    'file' => get_template_directory() . '/aletheme/demos/pixel/data/home.dat',
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


//WP Options Settings
ale_demo_options::update_tagline('Creative Portfolio');
ale_demo_options::update_posts_per_page(6);