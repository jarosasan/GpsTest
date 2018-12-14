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
 * Categories
 */
$preview_post_cat_1_id = ale_demo_category::add_category(array(
    'category_name' => 'Travel',
    'parent_id' => 0,
    'description' => '',
));

//Works Categories
$preview_work_category_1_id = ale_demo_category::add_term(array(
    'term_name' => 'Travel',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
));


//Blog posts
ale_demo_content::add_post(array(
    'title' => "Proin portaodio",
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img11',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Quisque sollicitudin sapien eu",
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img10',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Class aptent taciti sociosqu",
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img9',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Quisque ornare in justo vitae",
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img8',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Praesent quis tempus ligula",
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img7',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Nam et arcu tincidunt, dignissim",
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img6',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Nullam sem turpis, tincidunt",
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img5',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Ut nulla quam, suscipit",
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img4',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Donec dignissim odio sit ",
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/work.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img3',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'after_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
));

// Works Posts
ale_demo_content::add_post(array(
    'title' => "Integer imperdiet",
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img1',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_img1','ale_img2'),
));
ale_demo_content::add_post(array(
    'title' => "Vivamus pretium",
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img2',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_img2','ale_img3'),
));
ale_demo_content::add_post(array(
    'title' => "Class aptent taciti",
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img3',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_img3','ale_img4'),
));
ale_demo_content::add_post(array(
    'title' => "Proin velit sem",
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img4',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_img4','ale_img5'),
));
ale_demo_content::add_post(array(
    'title' => "Quisque ornare",
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img5',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_img5','ale_img6'),
));
ale_demo_content::add_post(array(
    'title' => "Cras auctor susc",
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img6',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_img6','ale_img7'),
));
ale_demo_content::add_post(array(
    'title' => "Nam et arcu tin",
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img7',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_img7','ale_img8'),
));
ale_demo_content::add_post(array(
    'title' => "Fusce mollis",
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img8',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_img8','ale_img9'),
));
ale_demo_content::add_post(array(
    'title' => "Nullam sem turpis",
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img9',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_img9','ale_img10'),
));
ale_demo_content::add_post(array(
    'title' => "Ut neque mi",
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img10',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_img10','ale_img11'),
));
ale_demo_content::add_post(array(
    'title' => "Vivamus interdum",
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img11',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
    'ale_post_info_line' => 'disable',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'in_heading',
    'gallery_images' => array('ale_img11','ale_img1'),
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
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/about.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'in_heading',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'template' => 'template-fullwidth.php',
));

//Contact page
$ale_contact_id = ale_demo_content::add_page(array(
    'title' => 'Contact',
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/contact.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'in_heading',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
));

//Gallery page
$ale_gallery_id = ale_demo_content::add_page(array(
    'title' => 'Gallery',
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/gallery.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'in_heading',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'template' => 'template-fullwidth.php',
));

//Destinations page
$ale_destination_id = ale_demo_content::add_page(array(
    'title' => 'Destinations',
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/destination.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'in_heading',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'template' => 'template-fullwidth.php',
));

//Inspirations page
$ale_inspiration_id = ale_demo_content::add_page(array(
    'title' => 'Inspirations',
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/inspiration.dat',
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
    'file' => get_template_directory() . '/aletheme/demos/viaje/data/home.dat',
    'template' => 'template-fullwidth.php',
));

/**
 * Navigation Settings
 */
$ale_demo_header_menu = ale_demo_menus::create_menu('Header Menu', 'header_menu');
$ale_demo_header_left_menu = ale_demo_menus::create_menu('Header Left Menu', 'header_left_menu');
$ale_demo_mobile_menu = ale_demo_menus::create_menu('Mobile Menu', 'mobile_menu');


//Header Left Menu
ale_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $ale_demo_header_left_menu,
    'page_id' => $ale_homepage_id,
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


//Header Menu
ale_demo_menus::add_page(array(
    'title' => 'About',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_about_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Destinations',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_destination_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Inspirations',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_inspiration_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Gallery',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_gallery_id,
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
    'title' => 'Blog',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_blog_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'About',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_about_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Destinations',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_destination_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Inspirations',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_inspiration_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Gallery',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_gallery_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Contacts',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_contact_id,
    'parent_id' => ''
));


// Update Options
ale_demo_options::update_tagline('Travel Agency');
ale_demo_options::update_posts_per_page(9);

ale_demo_options::import_rev_slider('http://alethemes.com/olins_base/media/viaje/home-slider.zip');


