<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?ver=<?php echo custom_latest_timestamp(); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/icon-touch.png"/>

    <!--Make Microsoft Internet Explorer behave like a standards-compliant browser. http://code.google.com/p/ie7-js/-->
    <!--[if lt IE 9]>
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <![endif]-->

    <?php get_template_part('parts/og-tags'); ?>
    <?php get_template_part('parts/schema'); ?>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>

	<div id="container">

	    <header>
	    	<?php if ( is_front_page() ) : ?>
	        	<div id="tagline" aria-hidden="true"><p><?php bloginfo('description'); ?></p></div>
	        <?php endif;?>

            <nav>
    			<?php
    				$menuArgs = array(
    				    'container'         => 'false',
    				    'menu'              => 'Main Menu',
    				    'menu_id'           => 'main-menu',
    				    'menu_class'        => 'main-menu menu'
    				);
    				wp_nav_menu($menuArgs);
    	        ?>
            </nav>

	        <a id="logo" aria-label="Home" href="<?php bloginfo('url'); ?>">
	            <img class="svg " src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
	        </a>

	        <?php get_template_part('parts/breadcrumb'); ?>

	    </header>
