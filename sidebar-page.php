<?php get_header();
/*
Template Name: Page with sidebar
*/
?>	
	<main id="main">
		<div class="page-title"><?php the_title(); ?></div>
		
		<div class="sidebar-page-wrap">
			<section id="section" class="col-lg-8">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php the_content(); ?>
						<br class="clear">
					</article>

				<?php endwhile; ?>
				<?php else: ?>

					<article>
						<p><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></p>
					</article>

				<?php endif; ?>
			</section>
			
			<aside class="sidebar col-lg-4" role="complementary">
				<?php get_sidebar(); ?>
			</aside>
			<br class="clear">
		</div>
	</main>

<?php get_footer(); ?>