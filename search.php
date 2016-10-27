<?php get_header(); ?>

			<main id="main" class="searchpage">
			
				<div class="pagetitle"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></div>
			
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
