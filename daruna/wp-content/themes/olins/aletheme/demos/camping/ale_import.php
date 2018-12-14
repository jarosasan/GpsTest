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
 * Pages
 */

//Contact page
$ale_contact_id = ale_demo_content::add_page(array(
    'title' => 'Contact us',
    'file' => get_template_directory() . '/aletheme/demos/camping/data/contact.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'in_heading',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
));

//About Us page
$ale_about_id = ale_demo_content::add_page(array(
    'title' => 'About',
    'file' => get_template_directory() . '/aletheme/demos/camping/data/about.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'in_heading',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
));

//reservation
$ale_reservation_id = ale_demo_content::add_page(array(
    'title' => 'Our Offers',
    'file' => get_template_directory() . '/aletheme/demos/camping/data/offers.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'in_heading',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'onheadingfeatured',
));

//Cottage
$ale_cottage_id = ale_demo_content::add_page(array(
    'title' => 'Holiday',
    'file' => get_template_directory() . '/aletheme/demos/camping/data/cottage.dat',
    'featured_image_ale_id' => '',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_featured_position' => 'in_heading',
    'ale_post_pre_title' => 'relaxing',
    'ale_post_title_position' => 'onheadingfeatured',
));

//Home page
$ale_homepage_id = ale_demo_content::add_page(array(
    'title' => 'Home',
    'homepage' => true,
    'file' => get_template_directory() . '/aletheme/demos/camping/data/home.dat',
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
    'title' => 'Cottage',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_cottage_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Reservation',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_reservation_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Contact',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_contact_id,
    'parent_id' => ''
));


// Update Options
ale_demo_options::update_tagline('Awesome Camping');
ale_demo_options::update_posts_per_page(6);