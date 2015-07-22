<?php 
    if (is_home()) {
        query_posts('posts_per_page=-1'); 
    }
?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>              
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <p class="entry-title"><?php echo get_the_date('m/d/y: '); ?><?php the_title(); ?></p>
                <div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->
<?php endwhile; ?>