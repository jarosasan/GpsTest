<header class="ale_header ale_header_viaje font_one cf">
	<div class="content_wrapper desktop_header cf">
		<div class="logo_container">
			<a href="<?php echo esc_url(home_url("/")); ?>" class="logo">
				<?php if(ale_get_option('sitelogo')){?>
					<img src="<?php echo esc_url(ale_get_option('sitelogo')); ?>" alt="logo" />
				<?php } else { ?>
					<h1><?php esc_attr(bloginfo('title')); ?></h1>
				<?php } ?>
			</a>
		</div>
		<div class="navigation_container">
			<div class="top_nav_line">
				<?php if ( has_nav_menu( 'header_left_menu' ) ) { ?>
					<nav class="navigation header_nav">
						<?php
						wp_nav_menu(array(
							'theme_location'=> 'header_left_menu',
							'menu'			=> 'Header Left Menu',
							'menu_class'	=> 'menu menu-left-header ',
							'walker'		=> new Aletheme_Nav_Walker(),
							'container'		=> '',
						)); ?>
					</nav>
				<?php } ?>
				<div class="search_header">
					<form class="search" role="search" method="get" id="header_search_form" action="<?php echo site_url()?>" >
						<fieldset>
							<input type="submit" id="searchsubmit" class="closed headerfont" data-status="closed" value="&#xf002" />
							<input type="text" class="searchinput" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php esc_html_e('Type here...', 'olins')?>" />
						</fieldset>
					</form>
				</div>

			</div>
			<div class="bottom_nav_line">
				<?php if ( has_nav_menu( 'header_menu' ) ) { ?>
					<nav class="navigation header_nav">
						<?php
						wp_nav_menu(array(
							'theme_location'=> 'header_menu',
							'menu'			=> 'Header Menu',
							'menu_class'	=> 'menu menu-header ',
							'walker'		=> new Aletheme_Nav_Walker(),
							'container'		=> '',
						)); ?>
					</nav>
				<?php } ?>
			</div>
		</div>
		<div class="mobile_menu_container">
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
		</div>
	</div>
</header>