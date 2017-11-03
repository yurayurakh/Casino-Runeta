 <?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Casino_Wave
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header class="header">
        <div class="container">
            <div class="row">
								<div class="col-lg-4 col-sm-6 col-xs-8">
	                    <div class="red-block clearfix">
	                        <a href="<?php echo home_url()?>" class="logo">
														<?php if(ot_get_option('logo_upload')) {?>
																<img src="<?php echo ot_get_option('logo_upload') ?>" alt="logo">
														<?php } ?>
	                        </a>
	                        <div class="logo-sub-title hidden-xs">
														<?php if(ot_get_option('sub_logo_title')) {?>
                                <span><?php echo ot_get_option('sub_logo_title') ?></span>
                            <?php } else { ?>
                                <span>Вся правда о интернет-казино</span>
                            <?php } ?>
	                        </div>
	                    </div>
	                </div>

								<div class="col-lg-7 mobile-menu">
	                    <button class="hamburger hidden-lg">☰</button>
	                    <button class="cross hidden-lg" style="display: none;">˟</button>
											<?php

	                    $args = array(
	                        'theme_location'  => 'primary',
	                        'menu'            => '',
	                        'container'       => 'nav',
	                        'container_class' => 'header__nav nav',
	                        'container_id'    => '',
	                        'menu_class'      => 'nav__list',
	                        'menu_id'         => '',
	                        'echo'            => true,
	                        'fallback_cb'     => 'wp_page_menu',
	                        'before'          => '',
	                        'after'           => '',
	                        'link_before'     => '',
	                        'link_after'      => '',
	                        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
	                        'depth'           => 0,
	                        'walker'          => ''
	                    );

	                    wp_nav_menu($args);
	                    ?>
	                </div>
									<div class="col-lg-1 col-sm-6 col-xs-4 mobile-search">
	                    <div class="search">
	                        <span id="search-btn">
														<?php if(ot_get_option('search_icon')) {?>
																<img src="<?php echo ot_get_option('search_icon') ?>" alt="logo">
														<?php } ?>
	                        </span>
	                    </div>
	                </div>
            </div>
            <div class="search-block" id="search-block">
                <div class="row">
                    <div class="col-xs-12">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

	<div id="content" class="site-content">
