<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:url" content="https://www.writeathon.ca" />
			<meta property="og:type" content="website" />
			<meta property="og:title" content="Write for Rights, Amnesty International Canada" />
			<meta property="og:description" content="Write For Rights with Amnesty International Canada to free prisoners of conscience, support human rights defenders and end urgent cases of human rights abuse." />
			<meta property="og:image" content="http://www.amnesty.ca/sites/amnesty/files/writeathon-og-image2.png" />
			<!-- sharing thumbnail image -->
			<link rel="image_src" href="http://www.amnesty.ca/sites/amnesty/files/writeathon-og-image2.png">
			<meta property="og:updated_time" content="<?=time()?>" />
			<meta attribute="author" content="Stephanie Tran, Amnesty International Canada" />
			<meta attribute="keywords" content="Amnesty, Amnesty International, Canada, Amnesty International Canada, human rights, writeathon, write for rights" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
			
<a id="nav-logo"  href="https://amnesty.ca/"><img alt="Amnesty International Canada" src="https://testing.stephanietran.ca/wp-content/uploads/2018/07/ai-canada-logo.jpg" /></a> 
	
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
