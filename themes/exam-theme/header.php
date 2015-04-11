<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?> style="margin:0 !important;">
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel='stylesheet' id='main-style'  href='<?php echo get_stylesheet_uri(); ?>' type='text/css' media='all' />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
	<div class="wrap">
	<header class="header">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'nav','container_class' => 'nav', 'menu_class' => 'nav-menu' ) ); ?>
		<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" ></a>
		
		<div class="page-title">
			<h1><?php wp_title(); ?></h1>
		</div>
	</header>