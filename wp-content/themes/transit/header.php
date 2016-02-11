<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package transit
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'transit' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
            
        <?php get_search_form ( ) ?>
            
		<div class="site-branding">
                    
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<?php if ( get_header_image() ) : ?>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                        <img class="site-logo" src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
                                </a>
                                <?php endif; // End header image check. ?>
			<?php else : ?>
				<?php if ( get_header_image() ) : ?>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                        <img class="site-logo" src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
                                </a>
                                <?php endif; // End header image check. ?>
			<?php
			endif;               
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                                <p class="sub-description">fresh content every weekday</p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

<!--		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'transit' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav> #site-navigation -->
	</header><!-- #masthead -->
        
        <?php if ( is_front_page() && is_home() ) {
           get_template_part('featured'); 
        }
         ?>

	<div id="content" class="site-content">
