<?php get_header(); ?>

			<main id="main" class="archivepage">
			
				<div class="pagetitle"><?php _e( 'Archives', 'html5blank' ); ?> - <?php the_title(); ?></div>
				
				<section id="section">

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>

				</section>
				
			</main>
			
		</div>
		<!-- /wrapper -->

		<?php get_footer(); ?>
		<?php wp_footer(); ?>
	</body>
</html>
