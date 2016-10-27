<?php get_header(); ?>

	<main id="main">
		<div class="startpuff">
		
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; else: endif;?>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></div>
			
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-7')) ?>
			</div>
			
			<div class="clear"></div>
		</div>
		
		<div class="g-ad">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Black Sticky Design - Frontpage Top -->
			<ins class="adsbygoogle"
				 style="display:block"
				 data-ad-client="ca-pub-3081266473109341"
				 data-ad-slot="9820476910"
				 data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
		
		<section id="product-list" class="section">
			 <h2 class="product-list-title">
				<?php
				 $currentlang = get_bloginfo('language');
				 if($currentlang=="en-US"):?>
					<a href="/shop">New arrivals in my shop</a>
				<?php else: ?>
					<a href="/butik">Nytt i min butik</a>
				<?php endif; ?>
			</h2>
			<ul>
				<?php
					$args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 8, 'orderby' =>'date','order' => 'DESC' );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

						<li id="product-list-product">
							<a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<div class="price product-list-price"><?php echo $product->get_price_html(); ?></div>

								<?php if (has_post_thumbnail( $loop->post->ID )) { echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); }  else { ?> <img src="<?php echo get_template_directory_uri(); ?>/woocommerce/placeholder.png"/> <?php } ?>
							</a>
							<div class="product-list-wrap">
								<div class="product-list-name"><?php the_title(); ?></div>
								<div class="product-list-cart">
									<?php
									echo apply_filters( 'woocommerce_loop_add_to_cart_link',
										sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="button %s product_type_%s"></a>',
											esc_url( $product->add_to_cart_url() ),
											esc_attr( $product->id ),
											esc_attr( $product->get_sku() ),
											esc_attr( isset( $quantity ) ? $quantity : 1 ),
											$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
											esc_attr( $product->product_type ),
											esc_html( $product->add_to_cart_text() )
										),
									$product );
									?>
								</div>
							</div>
						</li>

				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
				<br class="clear" />
			</ul>
		</section>
		
	</main>
	
<?php get_footer( 'shop' ); ?>