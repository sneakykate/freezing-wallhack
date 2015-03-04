<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */
?>
<div id="secondary">
	<div id="bio_widget">
		<img src="http://localhost:8888/wordpress/wp-content/uploads/2014/10/Emily2.jpg" />
		<p> I’m Emily, the lead developer at Skillcrush as well as an instr </p>
	</div>
	<?php if (is_active_sidebar('sidebar-1')): ?>
		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
			<?php dynamic_sidebar('sidebar-1'); ?>
			<h2 class="wigettitle">Categories</h2>
			<div id="category-menu"><?php wp_nav_menu(array('theme_location' => 'category-menu')); ?></div>
		</div><!-- #primary-sidebar -->
	<?php endif; ?>
</div><!-- #secondary -->
