<?php
    query_posts('category_name=advice,uncategorized&order=ASC&orderby=title&year2014');
				if (have_posts()):
    				while (have_posts()):
    				    the_post();
    				    get_template_part('content', get_post_format());
   				 	endwhile; ?>
   				 <div id="navigation">
    				    <p><?php next_posts_link(); ?></p>
   				     <p><?php previous_posts_link(); ?></p>
   				 </div>
				<?php endif; ?>