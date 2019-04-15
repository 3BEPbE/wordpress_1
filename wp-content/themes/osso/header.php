<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package osso
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><?php bloginfo( 'name' ); ?></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
<!--            <ul class="navbar-nav ml-auto">-->
<!--                <li class="nav-item mx-0 mx-lg-1">-->
<!--                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a>-->
<!--                </li>-->
<!--                <li class="nav-item mx-0 mx-lg-1">-->
<!--                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>-->
<!--                </li>-->
<!--                <li class="nav-item mx-0 mx-lg-1">-->
<!--                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>-->
<!--                </li>-->
<!--            </ul>-->

            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
                'menu_class'     => 'navbar-nav ml-auto',
                'container_id'     => 'navbarResponsive',
                'container_class'  => 'nav-item mx-0 mx-lg-1'
            ) );
            ?>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
        <h1 class="text-uppercase mb-0">Start Bootstrap</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Web Developer - Graphic Artist - User Experience Designer</h2>
    </div>
</header>





































	<div id="content" class="site-content">
