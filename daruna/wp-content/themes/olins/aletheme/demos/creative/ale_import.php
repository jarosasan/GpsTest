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
    'category_name' => 'Creative',
    'parent_id' => 0,
    'description' => '',
));


$preview_work_category_1_id = ale_demo_category::add_term(array(
    'term_name' => 'Branding',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
));
$preview_work_category_2_id = ale_demo_category::add_term(array(
    'term_name' => 'Creative',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
));
$preview_work_category_3_id = ale_demo_category::add_term(array(
    'term_name' => 'Minimal',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
));
$preview_work_category_4_id = ale_demo_category::add_term(array(
    'term_name' => 'Product',
    'taxonomy'=>'work-category',
    'parent_id' => 0,
    'description' => '',
));

/**
 * Posts Settings
 */

// Blog posts
ale_demo_content::add_post(array(
    'title' => "Nullam feugiat augue",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/post_default.dat',
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
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'disable'
));
ale_demo_content::add_post(array(
    'title' => "Praesent auctor lacus",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/post_default.dat',
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
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'disable'
));
ale_demo_content::add_post(array(
    'title' => "Sed in tincidunt",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/post_default.dat',
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
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'disable'
));
ale_demo_content::add_post(array(
    'title' => "Nullam eu sollicitu",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/post_default.dat',
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
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'disable'
));
ale_demo_content::add_post(array(
    'title' => "Curabitur maximus",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/post_default.dat',
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
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'disable'
));
ale_demo_content::add_post(array(
    'title' => "Morbi leo tortor",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/post_default.dat',
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
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'disable'
));
ale_demo_content::add_post(array(
    'title' => "Suspendisse bibendum",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/post_default.dat',
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
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'disable'
));
ale_demo_content::add_post(array(
    'title' => "Praesent id enim",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/post_default.dat',
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
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'disable'
));
ale_demo_content::add_post(array(
    'title' => "Fusce euismod ac",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img9',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'disable'
));
ale_demo_content::add_post(array(
    'title' => "Nulla et odio non",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img10',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'disable',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'right_third',
    'ale_related_posts' => 'disable'
));


// Works Posts
ale_demo_content::add_post(array(
    'title' => "Phasellus hendrerit",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img1',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Vestibulum neque ligula',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'right_column',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'creative_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img1','ale_img2','ale_img3','ale_img4','ale_img5'),
));
ale_demo_content::add_post(array(
    'title' => "Duis sed justo",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img2',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Vestibulum neque ligula',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'right_column',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'creative_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img2','ale_img3','ale_img4','ale_img5','ale_img6'),
));
ale_demo_content::add_post(array(
    'title' => "Sed nec ex semper",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_1_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img3',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Vestibulum neque ligula',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'right_column',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'creative_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img3','ale_img4','ale_img5','ale_img6','ale_img7'),
));
ale_demo_content::add_post(array(
    'title' => "Sed a porttitor",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_2_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img4',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Vestibulum neque ligula',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'right_column',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'creative_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img4','ale_img5','ale_img6','ale_img7','ale_img8'),
));
ale_demo_content::add_post(array(
    'title' => "Sed a porttitor",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_2_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img5',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Vestibulum neque ligula',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'right_column',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'creative_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img5','ale_img6','ale_img7','ale_img8','ale_img9'),
));
ale_demo_content::add_post(array(
    'title' => "Cras eu dolor",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_2_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img6',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Vestibulum neque ligula',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'right_column',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'creative_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img6','ale_img7','ale_img8','ale_img9','ale_img10'),
));
ale_demo_content::add_post(array(
    'title' => "Aliquam ullamcorper ",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_3_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img7',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Vestibulum neque ligula',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'right_column',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'creative_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img7','ale_img6','ale_img5','ale_img4','ale_img3'),
));
ale_demo_content::add_post(array(
    'title' => "Etiam sed lobortis",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_3_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img8',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Vestibulum neque ligula',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'right_column',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'creative_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img8','ale_img9','ale_img10','ale_img11','ale_img12'),
));
ale_demo_content::add_post(array(
    'title' => "Cras lobortis sapien",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_3_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img9',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Vestibulum neque ligula',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'right_column',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'creative_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img9','ale_img10','ale_img11','ale_img12','ale_img1'),
));
ale_demo_content::add_post(array(
    'title' => "Vivamus malesuada",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_4_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img10',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Vestibulum neque ligula',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'right_column',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'creative_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img10','ale_img9','ale_img8','ale_img7','ale_img6'),
));
ale_demo_content::add_post(array(
    'title' => "Nulla rhoncus",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_4_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img11',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Vestibulum neque ligula',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'right_column',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'creative_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img11','ale_img10','ale_img9','ale_img8','ale_img7'),
));
ale_demo_content::add_post(array(
    'title' => "Curabitur nibh ante",
    'file' => get_template_directory() . '/aletheme/demos/creative/data/work.dat',
    'taxonomy_id_array' => array($preview_work_category_4_id),
    'taxonomy_name' => 'work-category',
    'comment_status' => 'close',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_img12',
    'post_type' => 'works',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Vestibulum neque ligula',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'right_column',
    'ale_author_info' => 'disable',
    'ale_gallery_slider' => 'creative_grid',
    'ale_featured_position' => 'no',
    'gallery_images' => array('ale_img12','ale_img11','ale_img10','ale_img9','ale_img8'),
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
    'file' => get_template_directory() . '/aletheme/demos/creative/data/contact.dat',
    'ale_maskonheading' => 'disable',
    'featured_image_ale_id' => 'ale_contact_heading',
    'ale_featured_position' => 'in_heading',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'Minimal Designed Products',
    'ale_post_title_position' => 'onheadingfeatured',
));

//About Us page
$ale_about_id = ale_demo_content::add_page(array(
    'title' => 'About Us',
    'file' => get_template_directory() . '/aletheme/demos/creative/data/about.dat',
    'featured_image_ale_id' => 'ale_about_heading',
    'ale_maskonheading' => 'disable',
    'ale_featured_position' => 'in_heading',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'Sed eget libero diam. Aenean risus tellus, ultrices quis egestas et,  vestibulum quis dui.',
    'ale_post_title_position' => 'onheadingfeatured',
    'template' => 'template-fullwidth.php',
));

//Services page
$ale_services_id = ale_demo_content::add_page(array(
    'title' => 'Services',
    'file' => get_template_directory() . '/aletheme/demos/creative/data/services.dat',
    'featured_image_ale_id' => 'ale_services_heading',
    'ale_maskonheading' => 'disable',
    'ale_featured_position' => 'in_heading',
    'ale_featuredimagecover' => 'on',
    'ale_post_pre_title' => 'Sed eget libero diam. Aenean risus tellus, ultrices quis egestas et,  vestibulum quis dui.',
    'ale_post_title_position' => 'onheadingfeatured',
    'template' => 'template-fullwidth.php',
));

//Home page
$ale_homepage_id = ale_demo_content::add_page(array(
    'title' => 'Home',
    'homepage' => true,
    'file' => get_template_directory() . '/aletheme/demos/creative/data/home.dat',
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
    'title' => 'About Us',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_about_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Services',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_services_id,
    'parent_id' => ''
));
ale_demo_menus::add_post_type(array(
    'title' => 'Portfolio',
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
    'title' => 'Services',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_services_id,
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
ale_demo_options::update_tagline('olins creative');
ale_demo_options::update_posts_per_page(12);

$om4_cpt_editor_data = unserialize('a:2:{s:7:"version";i:1;s:8:"settings";a:1:{s:5:"types";a:1:{s:5:"works";a:1:{s:6:"labels";a:13:{s:4:"name";s:9:"Portfolio";s:13:"singular_name";s:9:"Portfolio";s:12:"add_new_item";s:17:"Add New Portfolio";s:9:"edit_item";s:4:"Edit";s:8:"new_item";s:13:"New Portfolio";s:9:"view_item";s:4:"View";s:12:"search_items";s:16:"Search Portfolio";s:9:"not_found";s:18:"No Portfolio Found";s:18:"not_found_in_trash";s:27:"No Portfolio found in Trash";s:9:"all_items";s:9:"Portfolio";s:8:"archives";s:9:"Portfolio";s:9:"menu_name";s:9:"Portfolio";s:14:"name_admin_bar";s:9:"Portfolio";}}}}}');
ale_demo_options::update_om4_cpt_editor($om4_cpt_editor_data);

ale_demo_options::import_rev_slider('http://alethemes.com/olins_base/media/creative/olinscreative.zip');