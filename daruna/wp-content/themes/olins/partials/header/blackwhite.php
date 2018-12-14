<?php
$font_style = 'font_one';
if(ale_get_option('design_variant') == 'stephanie'){
    $font_style = 'font_two';
}
?>
<header class="ale_header ale_header_blackwhite <?php echo esc_attr($font_style); ?> cf">
    <div class="content_wrapper desktop_header cf">
        <div class="header_left">
            <?php if ( has_nav_menu( 'header_left_menu' ) ) { ?>
                <!-- Main Menu header -->
                <nav class="navigation left_nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'=> 'header_left_menu',
                        'menu'			=> 'Header Left Menu',
                        'menu_class'	=> 'menu left-menu-header ',
                        'walker'		=> new Aletheme_Nav_Walker(),
                        'container'		=> '',
                    )); ?>
                </nav>
                <?php
            } ?>
        </div>
        <div class="header_center">
            <a href="<?php echo esc_url(home_url("/")); ?>" class="logo">
                <?php if(ale_get_option('sitelogo')){?>
                    <img src="<?php echo esc_url(ale_get_option('sitelogo')); ?>" alt="logo" />
                <?php } else { ?>
                    <h1><?php esc_attr(bloginfo('title')); ?></h1>
                <?php } ?>
            </a>
        </div>
        <div class="header_right">
            <?php if ( has_nav_menu( 'header_right_menu' ) ) { ?>
                <!-- Main Menu header -->
                <nav class="navigation right_nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'=> 'header_right_menu',
                        'menu'			=> 'Header Right Menu',
                        'menu_class'	=> 'menu right-menu-header ',
                        'walker'		=> new Aletheme_Nav_Walker(),
                        'container'		=> '',
                    )); ?>
                    <?php if(ale_get_option('design_variant') == 'blackwhite'){
                        get_template_part('partials/header/cart_link');
                    } ?>
                </nav>
            <?php } ?>
        </div>
    </div>
    <div class="content_wrapper mobile_header">
        <div class="logo_container">
            <a href="<?php echo esc_url(home_url("/")); ?>" class="logo">
                <?php if(ale_get_option('sitelogo')){?>
                    <img src="<?php echo esc_url(ale_get_option('sitelogo')); ?>" alt="logo" />
                <?php } else { ?>
                    <h1><?php esc_attr(bloginfo('title')); ?></h1>
                <?php } ?>
            </a>
        </div>
        <div class="navigation_container cf">
            <?php
            if ( has_nav_menu( 'mobile_menu' ) ) {
                wp_nav_menu(array(
                    'theme_location'=> 'mobile_menu',
                    'menu'   => 'Mobile Menu',
                    'menu_class' => 'mobilemenu',
                    'container'  => '',
                    'items_wrap' => '<select id="%1$s" class="%2$s drop">%3$s</select>',
                    'indent_string' => '&ndash;&nbsp;',
                    'indent_after' => '',
                    'walker' => new Aletheme_Dropdown_Nav_Walker(),
                ));
            } ?>

            <?php if(ale_get_option('design_variant') == 'blackwhite'){
                get_template_part('partials/header/cart_link');
            } ?>
        </div>
    </div>
</header>