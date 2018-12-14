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

//Works
$preview_work_category_1_id = ale_demo_category::add_term(array(
    'term_name' => 'Portraits',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
));
$preview_work_category_2_id = ale_demo_category::add_term(array(
    'term_name' => 'Wedding',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
));


/**
 * Posts Settings
 */

// Works Posts
ale_demo_content::add_post(array(
    'title' => "Alex & Elene",
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_2_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img8',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Photos from the Wedding',
    'ale_post_title_position' => 'fullwidthwedding',
    'ale_post_info_line' => 'thumbs_line',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'no',
));
ale_demo_content::add_post(array(
    'title' => "Tim & Rebecca",
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img7',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Photos from the Wedding',
    'ale_post_title_position' => 'fullwidthwedding',
    'ale_post_info_line' => 'thumbs_line',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'no',
));
ale_demo_content::add_post(array(
    'title' => "Cristian & Tia",
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_2_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img6',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Photos from the Wedding',
    'ale_post_title_position' => 'fullwidthwedding',
    'ale_post_info_line' => 'thumbs_line',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'no',
));
ale_demo_content::add_post(array(
    'title' => "Tom & Linda",
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img5',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Photos from the Wedding',
    'ale_post_title_position' => 'fullwidthwedding',
    'ale_post_info_line' => 'thumbs_line',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'no',
));
ale_demo_content::add_post(array(
    'title' => "Ashley & Dana",
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_2_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img4',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Photos from the Wedding',
    'ale_post_title_position' => 'fullwidthwedding',
    'ale_post_info_line' => 'thumbs_line',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'no',
));
ale_demo_content::add_post(array(
    'title' => "Dida & Anna",
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img3',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Photos from the Wedding',
    'ale_post_title_position' => 'fullwidthwedding',
    'ale_post_info_line' => 'thumbs_line',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'no',
));
ale_demo_content::add_post(array(
    'title' => "Andy & Alisa",
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_2_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img2',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Photos from the Wedding',
    'ale_post_title_position' => 'fullwidthwedding',
    'ale_post_info_line' => 'thumbs_line',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'no',
));
ale_demo_content::add_post(array(
    'title' => "David & Rebecca",
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img1',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Photos from the Wedding',
    'ale_post_title_position' => 'fullwidthwedding',
    'ale_post_info_line' => 'thumbs_line',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'before_content',
    'ale_featured_position' => 'no',
));


//Blog Posts
ale_demo_content::add_post(array(
    'title' => "Proin porta odio sagittis",
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img15',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Wedding Journal ',
    'ale_post_title_position' => 'fullwidthwedding',
    'ale_post_info_line' => 'thumbs_line',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Quisque faucibus impe",
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img14',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Wedding Journal ',
    'ale_post_title_position' => 'fullwidthwedding',
    'ale_post_info_line' => 'thumbs_line',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Sed id dolor et urna",
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img13',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Wedding Journal ',
    'ale_post_title_position' => 'fullwidthwedding',
    'ale_post_info_line' => 'thumbs_line',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Donec vel eros males",
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img12',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Wedding Journal ',
    'ale_post_title_position' => 'fullwidthwedding',
    'ale_post_info_line' => 'thumbs_line',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Fusce mauris augue",
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img11',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Wedding Journal ',
    'ale_post_title_position' => 'fullwidthwedding',
    'ale_post_info_line' => 'thumbs_line',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Aenean rutrum quis",
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img10',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Wedding Journal ',
    'ale_post_title_position' => 'fullwidthwedding',
    'ale_post_info_line' => 'thumbs_line',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Ut sed luctus turpis",
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img9',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Wedding Journal ',
    'ale_post_title_position' => 'fullwidthwedding',
    'ale_post_info_line' => 'thumbs_line',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Duis vulputate felis",
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img8',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Wedding Journal ',
    'ale_post_title_position' => 'fullwidthwedding',
    'ale_post_info_line' => 'thumbs_line',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Curabitur et euis",
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img7',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Wedding Journal ',
    'ale_post_title_position' => 'fullwidthwedding',
    'ale_post_info_line' => 'thumbs_line',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Nullam pretium fauc",
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img6',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Wedding Journal ',
    'ale_post_title_position' => 'fullwidthwedding',
    'ale_post_info_line' => 'thumbs_line',
    'ale_featured_position' => 'in_heading',
    'ale_author_info' => 'disable',
));
ale_demo_content::add_post(array(
    'title' => "Mauris egestas",
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img5',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Wedding Journal ',
    'ale_post_title_position' => 'fullwidthwedding',
    'ale_post_info_line' => 'thumbs_line',
    'ale_featured_position' => 'in_heading',
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
    'title' => 'About Elissa Winter',
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/about.dat',
    'featured_image_ale_id' => 'ale_about_heading',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'in_heading',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
));

//Contact page
$ale_contact_id = ale_demo_content::add_page(array(
    'title' => 'Send Me A Note',
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/contact.dat',
    'featured_image_ale_id' => 'ale_contact_heading',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'in_heading',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheading',
));

//Home page
$ale_homepage_id = ale_demo_content::add_page(array(
    'title' => 'Home',
    'homepage' => true,
    'file' => get_template_directory() . '/aletheme/demos/wedding/data/home.dat',
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


// Update Options
ale_demo_options::update_tagline('Elissa Winter');
ale_demo_options::update_posts_per_page(8);

ale_demo_options::import_rev_slider('http://alethemes.com/olins_base/media/wedding/homeslider.zip');