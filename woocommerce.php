<?php get_header(); ?>
	<main id="main">
		<div class="page-title">
			<?php
			$currentlang = get_bloginfo('language');
			if($currentlang=="en-US"): ?>
				The Shop ★ My handmade crafts and art
			<?php else: ?>
				Butiken ★ Mina handgjorda prylar
			<?php endif; ?>
		</div>
				
		<div class="shopmenu">
					
			<div class="shopmenu-mini">
				<?php
				$currentlang = get_bloginfo('language');
				if($currentlang=="en-US"): ?>
					Shop menu
				<?php else: ?>
					Butiksmeny
				<?php endif; ?>
			</div>
					
			<div class="mobile">
				<div class="mobile-btn shopmenu-tggl"></div>
			</div>
		
			<div class="shopmenu-wrap">
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
				
				<div class="shopsearch">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-3')) ?>
				</div>
				
				<div class="woo-mini-cart">
					<?php echo WC()->cart->get_cart_subtotal(); ?>
				</div>
				
				<div class="clear"></div>
			</div>
			
			<div class="woo-mini-cart-wrap"><?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?></div>
		</div>
	
		<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
		?>
			<?php woocommerce_content(); ?>
		</section>
	</main>

<?php get_footer(); ?>