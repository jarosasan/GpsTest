<?php

/**
 * Sidebar Settings
 */

//Remove Widgets from all sidebars
ale_preview_widget::remove_widgets_from_sidebar('main-sidebar');

//Add widgets to Main Sidebar
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'ale_about_widget', array ('title' => 'Get Fresh','image'=>'','text'=>'Daceestibulum eu dui sed augue fringilla ornare. Cras sit amet scelerisque magna. Vivamus nec elit efficitur, bibendum ante'));
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'mc4wp_form_widget', array ('title' => 'SIGN UP FOR OUR NEWSLETTERS'));
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'categories', array ('title' => 'Categories','count'=>'checked'));
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'tag_cloud', array ('title' => 'Tags','taxonomy'=>'post_tag'));


/**
 * Categories and Custom Taxonomies
 */
$preview_post_cat_1_id = ale_demo_category::add_category(array(
    'category_name' => 'Food',
    'parent_id' => 0,
    'description' => '',
));
$preview_post_cat_2_id = ale_demo_category::add_category(array(
    'category_name' => 'Lifestyle',
    'parent_id' => 0,
    'description' => '',
));
$preview_post_cat_3_id = ale_demo_category::add_category(array(
    'category_name' => 'Travel',
    'parent_id' => 0,
    'description' => '',
));


/**
 * Posts Settings
 */
ale_demo_content::add_post(array(
    'title' => "Cras mollis arcu tortor id eui mollis arcu",
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img10',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'enable',
    'ale_related_posts_title' => 'You may also like',
    'ale_related_posts_count' => '2',
));
ale_demo_content::add_post(array(
    'title' => "Donec condimentum, mollis arcu tortor non",
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img11',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'enable',
    'ale_related_posts_title' => 'You may also like',
    'ale_related_posts_count' => '2',
));
ale_demo_content::add_post(array(
    'title' => "Aenean mollis arcu tristique elementum augue",
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img15',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'enable',
    'ale_related_posts_title' => 'You may also like',
    'ale_related_posts_count' => '2',
));
ale_demo_content::add_post(array(
    'title' => "Aenean nec nunc malesuada, mollis arcu congue",
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img18',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'enable',
    'ale_related_posts_title' => 'You may also like',
    'ale_related_posts_count' => '2',
));
ale_demo_content::add_post(array(
    'title' => "Vivamus nisl lorem, tincidunt mollis arcu vitae",
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img17',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'enable',
    'ale_related_posts_title' => 'You may also like',
    'ale_related_posts_count' => '2',
));
ale_demo_content::add_post(array(
    'title' => "Morbi pulvinar mollis arcu consequat lorem",
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img2',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'enable',
    'ale_related_posts_title' => 'You may also like',
    'ale_related_posts_count' => '2',
));
ale_demo_content::add_post(array(
    'title' => "Aliquam feugiat mollis arcu ex sit amet erat",
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_2_id),
    'featured_image_ale_id' => 'ale_img1',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'enable',
    'ale_related_posts_title' => 'You may also like',
    'ale_related_posts_count' => '2',
));
ale_demo_content::add_post(array(
    'title' => "Nunc eu quam sodales, mollis arcu luctus",
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_2_id),
    'featured_image_ale_id' => 'ale_img3',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'enable',
    'ale_related_posts_title' => 'You may also like',
    'ale_related_posts_count' => '2',
));
ale_demo_content::add_post(array(
    'title' => "Sed vulputate venen mollis arcu elit blandit",
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_2_id),
    'featured_image_ale_id' => 'ale_img4',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'enable',
    'ale_related_posts_title' => 'You may also like',
    'ale_related_posts_count' => '2',
));
ale_demo_content::add_post(array(
    'title' => "Aliquam porttitor mollis arcu urna eget tor",
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_2_id),
    'featured_image_ale_id' => 'ale_img5',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'enable',
    'ale_related_posts_title' => 'You may also like',
    'ale_related_posts_count' => '2',
));
ale_demo_content::add_post(array(
    'title' => "Mauris pharetra interdum mollis arcu elit",
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_2_id),
    'featured_image_ale_id' => 'ale_img6',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'enable',
    'ale_related_posts_title' => 'You may also like',
    'ale_related_posts_count' => '2',
));
ale_demo_content::add_post(array(
    'title' => "Praesent tincidunt sapien mollis arcu nec",
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_2_id),
    'featured_image_ale_id' => 'ale_img7',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'enable',
    'ale_related_posts_title' => 'You may also like',
    'ale_related_posts_count' => '2',
));
ale_demo_content::add_post(array(
    'title' => "Phasellus convallis imperdiet mollis arcu leo",
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_3_id),
    'featured_image_ale_id' => 'ale_img8',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'enable',
    'ale_related_posts_title' => 'You may also like',
    'ale_related_posts_count' => '2',
));
ale_demo_content::add_post(array(
    'title' => "Duis consequat elementum mollis arcu risus",
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_3_id),
    'featured_image_ale_id' => 'ale_img9',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'enable',
    'ale_related_posts_title' => 'You may also like',
    'ale_related_posts_count' => '2',
));
ale_demo_content::add_post(array(
    'title' => "Donec elementum mollis arcu augue eget",
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_3_id),
    'featured_image_ale_id' => 'ale_img12',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'enable',
    'ale_related_posts_title' => 'You may also like',
    'ale_related_posts_count' => '2',
));
ale_demo_content::add_post(array(
    'title' => "Proin porta, mollis arcu velit non condimentum",
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_3_id),
    'featured_image_ale_id' => 'ale_img13',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'enable',
    'ale_related_posts_title' => 'You may also like',
    'ale_related_posts_count' => '2',
));
ale_demo_content::add_post(array(
    'title' => "Curabitur mollis arcu rhoncus pharetra nisl",
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_3_id),
    'featured_image_ale_id' => 'ale_img14',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'enable',
    'ale_related_posts_title' => 'You may also like',
    'ale_related_posts_count' => '2',
));
ale_demo_content::add_post(array(
    'title' => "Praesent blandit mollis arcu erat in sodales tincid",
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/post.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_3_id),
    'featured_image_ale_id' => 'ale_img16',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'enable',
    'ale_related_posts_title' => 'You may also like',
    'ale_related_posts_count' => '2',
));


//Form post for MailChimp
$subscribe_post_id = ale_demo_content::add_post(array(
    'title' => "Subscribe Form",
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/mailchimp.dat',
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
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/about.dat',
    'featured_image_ale_id' => 'ale_about',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'in_content',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_sidebar_position' => 'right_third'
));

//Contact page
$ale_contact_id = ale_demo_content::add_page(array(
    'title' => 'Contact',
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/contact.dat',
    'featured_image_ale_id' => 'ale_contact',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'in_content',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_sidebar_position' => 'right_third'
));


//Home page
$ale_homepage_id = ale_demo_content::add_page(array(
    'title' => 'Home',
    'homepage' => true,
    'file' => get_template_directory() . '/aletheme/demos/magazine/data/home.dat',
    'template' => 'template-content_and_posts.php',
));

/**
 * Navigation Settings
 */
$ale_demo_header_menu = ale_demo_menus::create_menu('Header Menu', 'header_menu');
$ale_demo_footer_menu = ale_demo_menus::create_menu('Footer Menu', 'footer_menu');
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
ale_demo_menus::add_category(array(
    'title' => 'Food',
    'add_to_menu_id' => $ale_demo_header_menu,
    'category_id' => $preview_post_cat_1_id,
    'parent_id' => '',
));
ale_demo_menus::add_category(array(
    'title' => 'Lifestyle',
    'add_to_menu_id' => $ale_demo_header_menu,
    'category_id' => $preview_post_cat_2_id,
    'parent_id' => '',
));
ale_demo_menus::add_category(array(
    'title' => 'Travel',
    'add_to_menu_id' => $ale_demo_header_menu,
    'category_id' => $preview_post_cat_3_id,
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
ale_demo_menus::add_category(array(
    'title' => 'Food',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'category_id' => $preview_post_cat_1_id,
    'parent_id' => '',
));
ale_demo_menus::add_category(array(
    'title' => 'Lifestyle',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'category_id' => $preview_post_cat_2_id,
    'parent_id' => '',
));
ale_demo_menus::add_category(array(
    'title' => 'Travel',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'category_id' => $preview_post_cat_3_id,
    'parent_id' => '',
));
ale_demo_menus::add_page(array(
    'title' => 'Contact',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_contact_id,
    'parent_id' => ''
));

//Footer Menu
ale_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $ale_demo_footer_menu,
    'page_id' => $ale_homepage_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'About',
    'add_to_menu_id' => $ale_demo_footer_menu,
    'page_id' => $ale_about_id,
    'parent_id' => ''
));
ale_demo_menus::add_category(array(
    'title' => 'Food',
    'add_to_menu_id' => $ale_demo_footer_menu,
    'category_id' => $preview_post_cat_1_id,
    'parent_id' => '',
));
ale_demo_menus::add_category(array(
    'title' => 'Lifestyle',
    'add_to_menu_id' => $ale_demo_footer_menu,
    'category_id' => $preview_post_cat_2_id,
    'parent_id' => '',
));
ale_demo_menus::add_category(array(
    'title' => 'Travel',
    'add_to_menu_id' => $ale_demo_footer_menu,
    'category_id' => $preview_post_cat_3_id,
    'parent_id' => '',
));
ale_demo_menus::add_page(array(
    'title' => 'Contact',
    'add_to_menu_id' => $ale_demo_footer_menu,
    'page_id' => $ale_contact_id,
    'parent_id' => ''
));

// Update Options
ale_demo_options::update_tagline('Magazine');
ale_demo_options::update_posts_per_page(4);

ale_demo_options::mc4wp_default_form_id($subscribe_post_id);
