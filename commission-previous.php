<?php /* Template Name: Commission previous */ get_header(); ?>
			
	<main id="main">
		<div class="page-title"><?php the_title(); ?></div>
		
		<div class="sidebar-page-wrap">
			<section id="section" class="col-lg-8">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php the_content(); ?>
						<br class="clear">
						
						<div class="commission-list">
							<?php query_posts('post_type=portfolio&category_name=portfolio&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
							<?php if( have_posts() ): ?>
							<?php while( have_posts() ): the_post(); ?>
							
								<div id="post-<?php the_ID(); ?>" class="row commission-list-item">
									<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
										<h3><?php the_title(); ?></h3>
										<h4>
											<?php
											$currentlang = get_bloginfo('language');
											if($currentlang=="en-US"): ?>
												Owner :
											<?php else: ?>
												Ägare :
											<?php endif; ?>
											
											<?php if( get_field('portfolio_owner') ): ?><?php the_field('portfolio_owner'); ?><?php endif; ?>
										</h4>
										<?php the_content(); ?>
									</div>
									<div class="commission-example col-xs-12 col-sm-4 col-md-4 col-lg-4">
										<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
										<a href="<?php echo "$feat_image"; ?>" data-lightbox="<?php the_title(); ?>" data-title="<?php the_title(); ?>. <?php echo get_post(get_post_thumbnail_id())->post_excerpt;?>">
											<div class="commission-thumbnail" style="background-image: url(<?php echo "$feat_image"; ?>);"></div>
										</a>
										
										<div class="commission-gallery">
											<?php
											$images = get_field('portfolio_gallery');
											if( $images ): ?>
												<?php foreach( $images as $image ): ?>
												
													<a href="<?php echo $image['url']; ?>" data-lightbox="<?php the_title(); ?>" data-title="<?php the_title(); ?>. <?php echo $image['alt']; ?>">
														 <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
													</a>
													
												<?php endforeach; ?>
											<?php endif; ?>
										</div>
										
									</div>
								</div>
								<hr />  
							<?php endwhile; ?>
							<?php else: ?>
							
								<p><?php _e('Nothing here yet.','example'); ?></p>
								
							<?php endif; wp_reset_query(); ?>
						</div>
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