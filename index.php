<?php get_header(); ?>

	<main id="main">
		<div class="page-title"><?php _e( 'Latest Posts', 'html5blank' ); ?></div>
		
		<section id="section">
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</section>
	</main>
	
	<?php get_sidebar(); ?>
			
<?php get_footer(); ?>