<?php if(isset($_POST['contact'])) { $error = ale_send_contact($_POST['contact']); }?>
<!doctype html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <?php get_template_part('partials/preloader'); ?>

    <div class="wrapper olins_site_container"><!-- Wrapper start -->
        <?php
        /*
         * Show the Header based on Theme Options Settings.
         */

        if(OLINS_DESIGN_STYLE){
            switch (OLINS_DESIGN_STYLE){
                case 'zoo' :
                case 'furniture' :
                case 'magazine' :
                    get_template_part('partials/header/zoo');
                    break;
                case 'blackwhite' :
                case 'stephanie' :
                    get_template_part('partials/header/blackwhite');
                    break;
                case 'bakery' :
                    get_template_part('partials/header/bakery');
                    break;
                case 'photography' :
                case 'camping' :
                case 'pixel' :
                    get_template_part('partials/header/photography');
                    break;
                case 'luxuryshoes' :
                    get_template_part('partials/header/luxuryshoes');
                    break;
                case 'travelphoto' :
                case 'cv' :
                    get_template_part('partials/header/travelphoto');
                    break;
                case 'viaje' :
                    get_template_part('partials/header/viaje');
                    break;
                case 'wedding' :
                    get_template_part('partials/header/wedding');
                    break;
                case 'creative' :
                case 'rosi' :
                    get_template_part('partials/header/creative');
                    break;
                case 'brigitte' :
                case 'corporate' :
                case 'fashion' :
                case 'pastel' :
                case 'cameron' :
                case 'jade' :
                    get_template_part('partials/header/brigitte');
                    break;
            }
        } ?>

        <div class="ale_main_container cf"><!-- Main Container Start -->
            <div class="ale_container">

