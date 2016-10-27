<?php get_header();
/*
Template Name: Woocommerce page
*/
?>
	<main id="main">
		<div class="page-title"><?php the_title(); ?></div>
				
		<div class="shopmenu">
					
			<div class="mobile">
				<div class="mobile-btn shopmenu-tggl"></div>
			</div>
		
			<div class="shopmenu-wrap">
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
				
				<div class="woo-mini-cart">
					<?php echo WC()->cart->get_cart_subtotal(); ?>
				</div>
				
				<div class="clear"></div>
			</div>
			
			<div class="woo-mini-cart-wrap"><?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?></div>
		</div>
	
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