<header class="ale_header ale_menu_left">
    <a href="<?php echo esc_url(home_url("/")); ?>" class="logo">
        <?php if(ale_get_option('sitelogo')){?>
            <img src="<?php echo esc_url(ale_get_option('sitelogo')); ?>" alt="logo" />
        <?php } else { ?>
            <h1><?php esc_attr(bloginfo('title')); ?></h1>
        <?php } ?>
    </a>

    <?php
    if ( has_nav_menu( 'header_menu' ) ) { ?>
        <!-- Main Menu header -->
        <nav class="navigation">
            <?php
            wp_nav_menu(array(
                'theme_location'=> 'header_menu',
                'menu'			=> 'Header Menu',
                'menu_class'	=> 'menu menu-header ',
                'walker'		=> new Aletheme_Nav_Walker(),
                'container'		=> '',
            )); ?>
        </nav>
        <?php
    }
    ?>
</header>