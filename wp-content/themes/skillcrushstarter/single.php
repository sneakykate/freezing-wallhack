<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>
	
	<div id="main-content" class="main-content">
		<div id="content" class="site-content" role="main">

		</div>
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
		<div class="navigation">
 			<?php previous_post_link(); ?>
    		<?php next_post_link(); ?>
		</div>
		</div><!-- #content -->
	</div><!-- #main-content -->

<?php
get_sidebar();
?>
		</div><!-- #main -->
		</body>
</html>
