<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Daniel Cowen
 * @since 0.1
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <div id="nav-above" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link' ) . '</span>' ); ?></div>
				</div><!-- #nav-above -->
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_date('m/d/y:'); ?></h1>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->
<?php endwhile; // end of the loop. ?>
            </div><!-- #content -->
		</div><!-- #container -->


