<?php get_header(); ?>
			
	<main id="main">
		<div class="page-title"><?php the_title(); ?></div>
		
		<section id="section">
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
	</main>

<?php get_footer(); ?>