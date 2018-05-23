<?php
/**
 * Template Name: No Sidebar - Full Width
 *
 * Description: A Page Template without a sidebar.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary" class="showcase">
			<div id="content" role="main">
			
			<style>
				.singular .entry-header, 
				.singular .entry-content, 
				.singular footer.entry-meta, 
				.singular #comments-title {width: auto;}
			</style>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>