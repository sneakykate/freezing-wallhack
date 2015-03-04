<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<p> <?php the_date() ?><p>
		<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<?php the_post_thumbnail(); ?>
	</header>
	<?php the_content() ?>
	<footer>
		<p>Written By <?php echo the_author() ?> / Posted in: <?php
		$category = get_the_category();
		echo $category[0]->cat_name;
		?> / <?php echo get_comments_number() ?> comments <?php if (is_user_logged_in() && current_user_can('edit_posts')): echo '| <a href="' . get_edit_post_link() . '">Edit Post</a>'; endif; ?></p>
	</footer>
</article>