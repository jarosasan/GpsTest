<?php



/**
 * Sidebar Settings
 */

//Remove Widgets from all sidebars
ale_preview_widget::remove_widgets_from_sidebar('main-sidebar');

//Add widgets to Main Sidebar
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'recent-posts', array ('title' => 'Recent Posts','number'=>'5',));
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'recent-comments', array ('title' => 'Comments','number'=>'5',));
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'archives', array ('title' => 'Archives'));
ale_preview_widget::add_widget_to_sidebar('main-sidebar', 'categories', array ('title' => 'Categories'));




/**
 * Categories and Custom Taxonomies
 */

//Categories for Posts
$preview_post_cat_1_id = ale_demo_category::add_category(array(
    'category_name' => 'Fashion',
    'parent_id' => 0,
    'description' => '',
));


//Categories for WooCommerce Shop
$preview_shop_cat_1_id = ale_demo_category::add_term(array(
    'term_name' => 'Winter',
    'taxonomy'=>'product_cat',
    'parent_id' => 0,
    'description' => '',
));
$preview_shop_cat_2_id = ale_demo_category::add_term(array(
    'term_name' => 'Summer',
    'taxonomy'=>'product_cat',
    'parent_id' => 0,
    'description' => '',
));

/**
 * Posts Settings
 */

// Blog posts
ale_demo_content::add_post(array(
    'title' => "Proin porta odio",
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img1',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'comment_status' => 'close',
    'ale_sidebar_position' => 'right_third'
));
ale_demo_content::add_post(array(
    'title' => "Praesent sodales et",
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img2',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'comment_status' => 'close',
    'ale_sidebar_position' => 'right_third'
));
ale_demo_content::add_post(array(
    'title' => "Aenean pulvinar nunc ",
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img3',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'comment_status' => 'close',
    'ale_sidebar_position' => 'right_third'
));
ale_demo_content::add_post(array(
    'title' => "Suspendisse vestibulum",
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img4',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'comment_status' => 'close',
    'ale_sidebar_position' => 'right_third'
));
ale_demo_content::add_post(array(
    'title' => "Class aptent taciti",
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img5',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'comment_status' => 'close',
    'ale_sidebar_position' => 'right_third'
));
ale_demo_content::add_post(array(
    'title' => "Nullam elit metus",
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_img6',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterfeaturedimage',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'in_content',
    'ale_author_info' => 'disable',
    'comment_status' => 'close',
    'ale_sidebar_position' => 'right_third'
));


//WooCommerce Products
ale_demo_content::add_post(array(
    'title' => "Etiam blandit dolor",
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel. Nulla ac ligula feugiat, bibendum odio at, hendrerit augue. Vestibulum id lorem lectus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop1',
    'post_type' => 'product',
    '_regular_price' => '160',
    '_price' => '160',
    '_sale_price' => '',
    '_sku' => '0011',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop2','ale_shop3','ale_shop4'),
));
ale_demo_content::add_post(array(
    'title' => "Nunc et felis ut",
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel. Nulla ac ligula feugiat, bibendum odio at, hendrerit augue. Vestibulum id lorem lectus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop2',
    'post_type' => 'product',
    '_regular_price' => '150',
    '_price' => '150',
    '_sale_price' => '110',
    '_sku' => '0012',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop1','ale_shop3','ale_shop4'),
));
ale_demo_content::add_post(array(
    'title' => "Donec eu enim iaculis",
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel. Nulla ac ligula feugiat, bibendum odio at, hendrerit augue. Vestibulum id lorem lectus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop3',
    'post_type' => 'product',
    '_regular_price' => '150',
    '_price' => '150',
    '_sale_price' => '',
    '_sku' => '0013',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop1','ale_shop2','ale_shop4'),
));
ale_demo_content::add_post(array(
    'title' => "Mauris tincidunt sapie",
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel. Nulla ac ligula feugiat, bibendum odio at, hendrerit augue. Vestibulum id lorem lectus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop4',
    'post_type' => 'product',
    '_regular_price' => '170',
    '_price' => '170',
    '_sale_price' => '',
    '_sku' => '0014',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop6','ale_shop2','ale_shop3'),
));
ale_demo_content::add_post(array(
    'title' => "Duis ut pretium purus",
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel. Nulla ac ligula feugiat, bibendum odio at, hendrerit augue. Vestibulum id lorem lectus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop5',
    'post_type' => 'product',
    '_regular_price' => '160',
    '_price' => '160',
    '_sale_price' => '',
    '_sku' => '0015',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop6','ale_shop2','ale_shop3'),
));
ale_demo_content::add_post(array(
    'title' => "Cras venenatis ante",
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel. Nulla ac ligula feugiat, bibendum odio at, hendrerit augue. Vestibulum id lorem lectus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop6',
    'post_type' => 'product',
    '_regular_price' => '160',
    '_price' => '160',
    '_sale_price' => '',
    '_sku' => '0016',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop5','ale_shop4','ale_shop7'),
));
ale_demo_content::add_post(array(
    'title' => "In ante mi, ornare vit",
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel. Nulla ac ligula feugiat, bibendum odio at, hendrerit augue. Vestibulum id lorem lectus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop7',
    'post_type' => 'product',
    '_regular_price' => '120',
    '_price' => '120',
    '_sale_price' => '',
    '_sku' => '0017',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop5','ale_shop4','ale_shop6'),
));
ale_demo_content::add_post(array(
    'title' => "Maecenas viverra scel",
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel. Nulla ac ligula feugiat, bibendum odio at, hendrerit augue. Vestibulum id lorem lectus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop8',
    'post_type' => 'product',
    '_regular_price' => '130',
    '_price' => '130',
    '_sale_price' => '',
    '_sku' => '0018',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop9','ale_shop1','ale_shop6'),
));
ale_demo_content::add_post(array(
    'title' => "Proin gravida ante",
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/product.dat',
    'post_excerpt' => 'Aliquam enim sem, finibus ut consectetur non, venenatis sed augue. Donec non felis sed enim posuere consectetur. Mauris pellentesque sed lacus vel iaculis. Nunc eu lorem elit. Vestibulum mollis nibh eros, sit amet ornare purus imperdiet a. Mauris ultricies, est et gravida pulvinar, turpis ligula varius risus, non vestibulum enim risus a lacus. Quisque vestibulum ante in elit ornare, ac bibendum lorem pellentesque. Sed imperdiet metus non ex efficitur, eu malesuada nibh suscipit. Proin ornare odio leo, sed facilisis diam fringilla vel. Nulla ac ligula feugiat, bibendum odio at, hendrerit augue. Vestibulum id lorem lectus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_shop9',
    'post_type' => 'product',
    '_regular_price' => '180',
    '_price' => '180',
    '_sale_price' => '',
    '_sku' => '0019',
    '_visibility' => 'visible',
    '_product_image_gallery' => array('ale_shop2','ale_shop8','ale_shop6'),
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
    'title' => 'Olins Contact',
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/contact.dat',
    'ale_maskonheading' => 'disable',
    'featured_image_ale_id' => '',
    'ale_featured_position' => 'no',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'Contact Us',
    'ale_post_title_position' => 'onheadingfeatured',
));

//About Us page
$ale_about_id = ale_demo_content::add_page(array(
    'title' => 'Olins the Brand',
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/about.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featured_position' => 'no',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => 'OUR IDENTITY',
    'ale_post_title_position' => 'onheadingfeatured',
    'template' => 'template-fullwidth.php',
));

//WooCommerce Page
$ale_shop_id = ale_demo_content::add_page(array(
    'title' => 'Shop',
));
$ale_cart_id = ale_demo_content::add_page(array(
    'title' => 'Cart',
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/cart.dat',
));
$ale_checkout_id = ale_demo_content::add_page(array(
    'title' => 'Checkout',
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/checkout.dat',
));
$ale_my_account_id = ale_demo_content::add_page(array(
    'title' => 'My Account',
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/my_account.dat',
));


//Home page
$ale_homepage_id = ale_demo_content::add_page(array(
    'title' => 'Home',
    'homepage' => true,
    'file' => get_template_directory() . '/aletheme/demos/fashion/data/home.dat',
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
    'title' => 'Journal',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_blog_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Shop',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_shop_id,
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
    'title' => 'About',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_about_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Journal',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_blog_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Shop',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_shop_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Contact',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_contact_id,
    'parent_id' => ''
));



//WP Options Settings
ale_demo_options::update_shop_cart($ale_cart_id);
ale_demo_options::update_shop_checkout($ale_checkout_id);
ale_demo_options::update_shop_account($ale_my_account_id);

ale_demo_options::update_tagline('Fashion Store');
ale_demo_options::update_posts_per_page(6);

ale_demo_options::import_rev_slider('http://alethemes.com/olins_base/media/fashion/olinsfashion.zip');
