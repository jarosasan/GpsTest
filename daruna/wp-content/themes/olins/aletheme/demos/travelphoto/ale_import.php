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
    'category_name' => 'Travel',
    'parent_id' => 0,
    'description' => '',
));

//Works
$preview_work_category_1_id = ale_demo_category::add_term(array(
    'term_name' => 'Travel Art',
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
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
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
    'gallery_images' => array('ale_work1','ale_work2','ale_work3','ale_work4','ale_work5'),
));
ale_demo_content::add_post(array(
    'title' => "Class aptent taciti ",
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/work.dat',
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
    'gallery_images' => array('ale_work2','ale_work3','ale_work4','ale_work5','ale_work6'),
));
ale_demo_content::add_post(array(
    'title' => "Nullam cursus mauris",
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/work.dat',
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
    'gallery_images' => array('ale_work3','ale_work4','ale_work5','ale_work6','ale_work7'),
));
ale_demo_content::add_post(array(
    'title' => "Donec venenatis eu",
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/work.dat',
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
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_work4','ale_work5','ale_work6','ale_work7','ale_work8'),
));
ale_demo_content::add_post(array(
    'title' => "In egestas accum",
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work5',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_work5','ale_work6','ale_work7','ale_work8','ale_work9'),
));
ale_demo_content::add_post(array(
    'title' => "Mauris facilisis odio",
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work6',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_work6','ale_work7','ale_work8','ale_work9','ale_work10'),
));
ale_demo_content::add_post(array(
    'title' => "Vestibulum ante ",
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work7',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_work7','ale_work8','ale_work9','ale_work10','ale_work11'),
));
ale_demo_content::add_post(array(
    'title' => "Nulla venenatis ante",
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work10',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_work10','ale_work11','ale_work12','ale_work13','ale_work14'),
));
ale_demo_content::add_post(array(
    'title' => "Nulla volutpat",
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work9',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_work9','ale_work10','ale_work11','ale_work12','ale_work13'),
));
ale_demo_content::add_post(array(
    'title' => "Donec faucibus mau",
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work8',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_work8','ale_work9','ale_work10','ale_work11','ale_work12'),
));
ale_demo_content::add_post(array(
    'title' => "Phasellus cursus",
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work11',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_work11','ale_work12','ale_work13','ale_work14','ale_work1'),
));
ale_demo_content::add_post(array(
    'title' => "Nulla rhoncus vulpu",
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work12',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_work12','ale_work13','ale_work14','ale_work1','ale_work2'),
));
ale_demo_content::add_post(array(
    'title' => "Donec nibh libero",
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work13',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_work13','ale_work14','ale_work1','ale_work2','ale_work3'),
));
ale_demo_content::add_post(array(
    'title' => "Donec at dui sapien",
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_work14',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'thumbs_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_work14','ale_work13','ale_work12','ale_work2','ale_work3'),
));


//Blog Posts
ale_demo_content::add_post(array(
    'title' => "Proin porta, odio at sagittis vehicula",
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/work.dat',
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
    'ale_sidebar_position' => 'right_fourth'
));
ale_demo_content::add_post(array(
    'title' => "Vestibulum vestibulum faucibus nisl",
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/work.dat',
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
    'ale_sidebar_position' => 'right_fourth'
));
ale_demo_content::add_post(array(
    'title' => "Aenean tempor tortor purus, non tempor",
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/work.dat',
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
    'ale_sidebar_position' => 'right_fourth'
));
ale_demo_content::add_post(array(
    'title' => "Nunc vel massa fermentum, cursus dui",
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/work.dat',
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
    'ale_sidebar_position' => 'right_fourth'
));
ale_demo_content::add_post(array(
    'title' => "Phasellus ut rhoncus metus, quis convallis",
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/work.dat',
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
    'ale_sidebar_position' => 'right_fourth'
));
ale_demo_content::add_post(array(
    'title' => "Nulla rhoncus eros eros, sit amet facilisis",
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/work.dat',
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
    'ale_sidebar_position' => 'right_fourth'
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
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/contact.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'in_heading',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'template' => 'template-fullwidth.php',
));

//About Us page
$ale_about_id = ale_demo_content::add_page(array(
    'title' => 'About',
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/about.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'in_heading',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
));

// Our Works page
$ale_works_id = ale_demo_content::add_page(array(
    'title' => 'Our Works',
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/works.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'in_heading',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'template' => 'template-fullwidth.php',
));

//Home page
$ale_homepage_id = ale_demo_content::add_page(array(
    'title' => 'Home',
    'homepage' => true,
    'file' => get_template_directory() . '/aletheme/demos/travelphoto/data/home.dat',
    'template' => 'template-fullwidth.php',
));

/**
 * Navigation Settings
 */
$ale_demo_header_left_menu = ale_demo_menus::create_menu('Header Menu', 'header_left_menu');
$ale_demo_mobile_menu = ale_demo_menus::create_menu('Mobile Menu', 'mobile_menu');


//Header Menu
ale_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $ale_demo_header_left_menu,
    'page_id' => $ale_homepage_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'About us',
    'add_to_menu_id' => $ale_demo_header_left_menu,
    'page_id' => $ale_about_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Our Works',
    'add_to_menu_id' => $ale_demo_header_left_menu,
    'page_id' => $ale_works_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Blog',
    'add_to_menu_id' => $ale_demo_header_left_menu,
    'page_id' => $ale_blog_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Contacts',
    'add_to_menu_id' => $ale_demo_header_left_menu,
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
    'title' => 'About us',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_about_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Our Works',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_works_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Blog',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_blog_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Contacts',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_contact_id,
    'parent_id' => ''
));


// Update Options
ale_demo_options::update_tagline('travel photography');
ale_demo_options::update_posts_per_page(6);