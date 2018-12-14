 <?php

/**
 * Sidebar Settings
 */

//Remove Widgets from all sidebars
ale_preview_widget::remove_widgets_from_sidebar('main-sidebar');
ale_preview_widget::remove_widgets_from_sidebar('footer-one-sidebar');
ale_preview_widget::remove_widgets_from_sidebar('footer-two-sidebar');
ale_preview_widget::remove_widgets_from_sidebar('footer-three-sidebar');

//Add widgets to Main Sidebar
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'ale_about_widget', array ('title' => 'About Me','image'=>'','text'=>'Etiam vel turpis ac nibh venenatis pretium eget in risus. Vestibulum diam massa, efficitur sit amet libero in, rutrum rutrum elit. Ut justo dolor, ullamcorper id feugiat in, bibendum at nulla. Donec elementum finibus augue, a lobortis velit dignissim ullamcorper. '));
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'search', array ('title' => 'Search'));
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'ale_blog_widget', array ('title' => 'Recent Posts','number'=>'2',));

//Footer One Sidebar
ale_preview_widget::add_widget_to_sidebar('footer-one-sidebar', 'ale_about_widget', array ('title' => 'About Me','image'=>'','text'=>'Suspendisse nisl lectus, ultrices dictum dacbibendumse eget, sollicitudin quis orci. Pelentesqusede sapin jusseto pharetra at iaculis non, aucibus uert arcu. Fusce rhon'));
ale_preview_widget::add_widget_to_sidebar('footer-one-sidebar', 'text', array ('title' => '','text'=>'<a href="http://alethemes.com" target="_blank" class="footer_button">Know more</a>'));

//Footer Two Sidebar
ale_preview_widget::add_widget_to_sidebar('footer-two-sidebar', 'ale_blog_widget', array ('title' => 'Recent posts','number'=>'3',));

//Footer Three Sidebar
ale_preview_widget::add_widget_to_sidebar('footer-three-sidebar', 'ale_about_widget', array ('title' => 'Contact Us','image'=>'','text'=>'2401 Olins road, Corporate, Seattle, WA 90022-1090 Phone: (305)444-2244 E-Mail: Olins@example.com'));
ale_preview_widget::add_widget_to_sidebar('footer-three-sidebar', 'search', array ('title' => ''));

/**
 * Categories and Custom Taxonomies
 */

//Categories for Posts
$preview_post_cat_1_id = ale_demo_category::add_category(array(
    'category_name' => 'Corporate',
    'parent_id' => 0,
    'description' => '',
));


/**
 * Posts Settings
 */

// Blog posts
ale_demo_content::add_post(array(
    'title' => "Sed sagittis, sem",
    'file' => get_template_directory() . '/aletheme/demos/corporate/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img1',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
    'ale_related_posts' => 'disable'
));
ale_demo_content::add_post(array(
    'title' => "In volutpat lacus et",
    'file' => get_template_directory() . '/aletheme/demos/corporate/data/post_default.dat',
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
    'ale_sidebar_position' => 'no',
    'ale_related_posts' => 'disable'
));
ale_demo_content::add_post(array(
    'title' => "Maecenas tristique diam",
    'file' => get_template_directory() . '/aletheme/demos/corporate/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img3',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
    'ale_related_posts' => 'disable'
));



/**
 * Pages
 */

//Home page
$ale_homepage_id = ale_demo_content::add_page(array(
    'title' => 'Home',
    'homepage' => true,
    'file' => get_template_directory() . '/aletheme/demos/corporate/data/home.dat',
    'template' => 'template-fullwidth.php',
));

/**
 * Navigation Settings
 */
$ale_demo_header_menu = ale_demo_menus::create_menu('Header Menu', 'header_menu');


//Header Menu
ale_demo_menus::add_link(array(
    'title' => 'Home',
    'add_to_menu_id' => $ale_demo_header_menu,
    'url' => '#home',
    'xfn' => 'm_PageScroll2id'
));
ale_demo_menus::add_link(array(
    'title' => 'Service',
    'add_to_menu_id' => $ale_demo_header_menu,
    'url' => '#service',
    'xfn' => 'm_PageScroll2id'
));
ale_demo_menus::add_link(array(
    'title' => 'Our Team',
    'add_to_menu_id' => $ale_demo_header_menu,
    'url' => '#team',
    'xfn' => 'm_PageScroll2id'
));
ale_demo_menus::add_link(array(
    'title' => 'News',
    'add_to_menu_id' => $ale_demo_header_menu,
    'url' => '#news',
    'xfn' => 'm_PageScroll2id'
));
ale_demo_menus::add_link(array(
    'title' => 'About Us',
    'add_to_menu_id' => $ale_demo_header_menu,
    'url' => '#about',
    'xfn' => 'm_PageScroll2id'
));
ale_demo_menus::add_link(array(
    'title' => 'Partners',
    'add_to_menu_id' => $ale_demo_header_menu,
    'url' => '#partners',
    'xfn' => 'm_PageScroll2id'
));



//WP Options Settings
ale_demo_options::update_tagline('Olins Corporate');
ale_demo_options::update_posts_per_page(3);

ale_demo_options::import_rev_slider('http://alethemes.com/olins_base/media/corporate/olinscorporate.zip');