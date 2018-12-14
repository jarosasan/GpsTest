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
 $preview_work_category_1_id = ale_demo_category::add_term(array(
     'term_name' => 'Branding',
     'taxonomy'=>'work-category',
     'parent_id' => 0,
     'description' => '',
 ));

/**
 * Posts Settings
 */

//Works Posts
 ale_demo_content::add_post(array(
     'title' => "Phasellus hendrerit",
     'file' => get_template_directory() . '/aletheme/demos/cv/data/post_default.dat',
     'taxonomy_id_array' => array($preview_work_category_1_id),
     'taxonomy_name' => 'work-category',
     'comment_status' => '',
     'post_excerpt' => '',
     'featured_image_ale_id' => 'ale_img1',
     'post_type' => 'works',
     'ale_maskonheading' => 'disable',
     'ale_featuredimagecover' => 'on',
     'ale_post_pre_title' => '',
     'ale_post_title_position' => 'afterheading',
     'ale_post_info_line' => 'before_content',
     'ale_author_info' => 'disable',
     'ale_gallery_slider' => 'thumbs_grid',
     'ale_featured_position' => 'in_heading',
     'gallery_images' => array('ale_img2','ale_img6','ale_img3','ale_img4','ale_img5'),
 ));
 ale_demo_content::add_post(array(
     'title' => "Vestibulum sodales finibus",
     'file' => get_template_directory() . '/aletheme/demos/cv/data/post_default.dat',
     'taxonomy_id_array' => array($preview_work_category_1_id),
     'taxonomy_name' => 'work-category',
     'comment_status' => '',
     'post_excerpt' => '',
     'featured_image_ale_id' => 'ale_img2',
     'post_type' => 'works',
     'ale_maskonheading' => 'disable',
     'ale_featuredimagecover' => 'on',
     'ale_post_pre_title' => '',
     'ale_post_title_position' => 'afterheading',
     'ale_post_info_line' => 'before_content',
     'ale_author_info' => 'disable',
     'ale_gallery_slider' => 'thumbs_grid',
     'ale_featured_position' => 'in_heading',
     'gallery_images' => array('ale_img6','ale_img5','ale_img4','ale_img3','ale_img1'),
 ));
 ale_demo_content::add_post(array(
     'title' => "Pellentesque habitant morbi",
     'file' => get_template_directory() . '/aletheme/demos/cv/data/post_default.dat',
     'taxonomy_id_array' => array($preview_work_category_1_id),
     'taxonomy_name' => 'work-category',
     'comment_status' => '',
     'post_excerpt' => '',
     'featured_image_ale_id' => 'ale_img3',
     'post_type' => 'works',
     'ale_maskonheading' => 'disable',
     'ale_featuredimagecover' => 'on',
     'ale_post_pre_title' => '',
     'ale_post_title_position' => 'afterheading',
     'ale_post_info_line' => 'before_content',
     'ale_author_info' => 'disable',
     'ale_gallery_slider' => 'thumbs_grid',
     'ale_featured_position' => 'in_heading',
     'gallery_images' => array('ale_img2','ale_img1','ale_img4','ale_img7','ale_img6'),
 ));
 ale_demo_content::add_post(array(
     'title' => "Donec sed metus sit",
     'file' => get_template_directory() . '/aletheme/demos/cv/data/post_default.dat',
     'taxonomy_id_array' => array($preview_work_category_1_id),
     'taxonomy_name' => 'work-category',
     'comment_status' => '',
     'post_excerpt' => '',
     'featured_image_ale_id' => 'ale_img4',
     'post_type' => 'works',
     'ale_maskonheading' => 'disable',
     'ale_featuredimagecover' => 'on',
     'ale_post_pre_title' => '',
     'ale_post_title_position' => 'afterheading',
     'ale_post_info_line' => 'before_content',
     'ale_author_info' => 'disable',
     'ale_gallery_slider' => 'thumbs_grid',
     'ale_featured_position' => 'in_heading',
     'gallery_images' => array('ale_img2','ale_img1','ale_img3','ale_img7','ale_img6'),
 ));
 ale_demo_content::add_post(array(
     'title' => "Nullam iaculis accumsan gravida",
     'file' => get_template_directory() . '/aletheme/demos/cv/data/post_default.dat',
     'taxonomy_id_array' => array($preview_work_category_1_id),
     'taxonomy_name' => 'work-category',
     'comment_status' => '',
     'post_excerpt' => '',
     'featured_image_ale_id' => 'ale_img5',
     'post_type' => 'works',
     'ale_maskonheading' => 'disable',
     'ale_featuredimagecover' => 'on',
     'ale_post_pre_title' => '',
     'ale_post_title_position' => 'afterheading',
     'ale_post_info_line' => 'before_content',
     'ale_author_info' => 'disable',
     'ale_gallery_slider' => 'thumbs_grid',
     'ale_featured_position' => 'in_heading',
     'gallery_images' => array('ale_img1','ale_img2','ale_img3','ale_img7','ale_img6'),
 ));
 ale_demo_content::add_post(array(
     'title' => "Suspendisse potenti dot",
     'file' => get_template_directory() . '/aletheme/demos/cv/data/post_default.dat',
     'taxonomy_id_array' => array($preview_work_category_1_id),
     'taxonomy_name' => 'work-category',
     'comment_status' => '',
     'post_excerpt' => '',
     'featured_image_ale_id' => 'ale_img6',
     'post_type' => 'works',
     'ale_maskonheading' => 'disable',
     'ale_featuredimagecover' => 'on',
     'ale_post_pre_title' => '',
     'ale_post_title_position' => 'afterheading',
     'ale_post_info_line' => 'before_content',
     'ale_author_info' => 'disable',
     'ale_gallery_slider' => 'thumbs_grid',
     'ale_featured_position' => 'in_heading',
     'gallery_images' => array('ale_img5','ale_img4','ale_img3','ale_img7','ale_img1'),
 ));



/**
 * Pages
 */

//Home page
$ale_homepage_id = ale_demo_content::add_page(array(
    'title' => 'Home',
    'homepage' => true,
    'file' => get_template_directory() . '/aletheme/demos/cv/data/home.dat',
    'template' => 'template-fullwidth.php',
));

/**
 * Navigation Settings
 */
$ale_demo_left_menu = ale_demo_menus::create_menu('Header Left Menu', 'header_left_menu');


//Header Menu
ale_demo_menus::add_link(array(
    'title' => 'Home',
    'add_to_menu_id' => $ale_demo_left_menu,
    'url' => '#home',
    'xfn' => 'm_PageScroll2id'
));
ale_demo_menus::add_link(array(
    'title' => 'Project',
    'add_to_menu_id' => $ale_demo_left_menu,
    'url' => '#project',
    'xfn' => 'm_PageScroll2id'
));
ale_demo_menus::add_link(array(
    'title' => 'Experience',
    'add_to_menu_id' => $ale_demo_left_menu,
    'url' => '#experience',
    'xfn' => 'm_PageScroll2id'
));
ale_demo_menus::add_link(array(
    'title' => 'Skill',
    'add_to_menu_id' => $ale_demo_left_menu,
    'url' => '#skill',
    'xfn' => 'm_PageScroll2id'
));
ale_demo_menus::add_link(array(
    'title' => 'Contact',
    'add_to_menu_id' => $ale_demo_left_menu,
    'url' => '#contact',
    'xfn' => 'm_PageScroll2id'
));



//WP Options Settings
ale_demo_options::update_tagline('Olins CV');
ale_demo_options::update_posts_per_page(6);

ale_demo_options::import_rev_slider('http://alethemes.com/olins_base/media/cv/olinscv.zip');