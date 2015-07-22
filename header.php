<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Daniel Cowen
 * @since .01
 */
$note_meta = 'header-note';
$note_value = '1';

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="global-nav">
    <img usemap="#nav-map" src="<?php bloginfo('stylesheet_directory'); ?>/images/headers/top_buttons.png">
    <map name="nav-map">
        <area shape="rect" coords="4,0,82,22" href="<?php echo home_url( '/' ); ?>resume/Daniel-Cowen-Resume.pdf">
        </area>
        <area shape="rect" coords="88,0,173,22" href="mailto:dc@danielcowen.com" alt="Contact"></area>
        <area shape="rect" coords="178,0,306,22" href="<?php echo home_url( '/' ); ?>wp-admin" alt="Client Login"></area>
    </map>
</div>
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			<div id="branding" role="banner">
				<div id="site-logo">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                <img src="<?php 
					/* This is where you specify the name of the logo.*/
					 bloginfo('stylesheet_directory'); ?>/images/headers/logo.png" 
				/></a>
				</div>
				<div id="site-description">
					<?php bloginfo( 'description' ); ?>
					<div id="site-note">
						<?php 
						/* Page title is statically set to "Note". Changing the content
						 * of that post will change that content which is under the 
						 * 'description' on the site header.
						 */							
						echo danielcowen_display_meta( $note_value, $note_meta )->post_content;?>
					</div><!-- #site-note -->
				</div><!-- #site-description -->
			</div><!-- #branding -->
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">
