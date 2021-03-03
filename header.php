<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<!--  -->

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">



		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

		<!-- <script src="//cdn.jsdelivr.net/npm/jquery.marquee@1.5.0/jquery.marquee.min.js" type="text/javascript" defer></script> -->

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container" style="position:relative;">
      <div class="background-gradient">

			<header class="header-desktop">
				<div class="w-100 x-padding d-flex justify-content-between">
        			<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-liminal.svg ?>" alt=""></div>
						<nav id="nav-desktop" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<?php wp_nav_menu(array(
								'container' => false,                           // remove nav container
								'container_class' => '',                 		// class of container (should you choose to use it)
								'menu' => 'Main Menu',                          // nav name
								'menu_class' => 'd-flex text-xs',               // adding custom nav class
								'theme_location' => 'main-nav',                 // where it's located in the theme
								'before' => '<span class="section-dot"></span>',// before the menu
								'after' => '',                                  // after the menu
								'link_before' => '',                            // before each link
								'link_after' => '',                             // after each link
								'depth' => 0,                                   // limit the depth of the nav
								'fallback_cb' => ''                             // fallback function (if there is one)
							)); ?>
						</nav>
				</div>
			</header>
			<header class="header-mobile">
				<div class="x-padding d-flex justify-content-between" style="width:100%;">
					<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-liminal.svg ?>" alt=""></div>
					<div class="icon-menu"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-menu.png" alt=""></div>
					<nav id="nav-mobile" class="border-b" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
						'container' => false,                           // remove nav container
						'container_class' => '',                 // class of container (should you choose to use it)
						'menu' => 'Main Menu',                          // nav name
						'menu_class' => 'd-flex text-xs',               // adding custom nav class
						'theme_location' => 'main-nav',                 // where it's located in the theme
						'before' => '<span class="section-dot"></span>',                                 // before the menu
						'after' => '',                                  // after the menu
						'link_before' => '',                            // before each link
						'link_after' => '',                             // after each link
						'depth' => 0,                                   // limit the depth of the nav
						'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>
					</nav>
				</div>
			</header>
<!--       <div class="menu-line"></div> -->



