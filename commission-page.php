<?php get_header();
/*
Template Name: Commission page
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
						
						<div id="commission-prices">
							<div class="commission-filters">
								<button class="button filter-button active" id="filter-none">
									<?php
									 $currentlang = get_bloginfo('language');
									 if($currentlang=="en-US"):?>
										Show all
									<?php else: ?>
										Visa alla
									<?php endif; ?>
								</button>
								
								<button class="button filter-button" data-filter="Art" id="Art">
									<?php
									 $currentlang = get_bloginfo('language');
									 if($currentlang=="en-US"):?>
										Art
									<?php else: ?>
										Konst
									<?php endif; ?>
								</button>
								
								<button class="button filter-button" data-filter="Cosplay" id="Cosplay">
									Cosplay
								</button>
								
								<button class="button filter-button" data-filter="Other" id="Other">
									<?php
									 $currentlang = get_bloginfo('language');
									 if($currentlang=="en-US"):?>
										Other
									<?php else: ?>
										Annat
									<?php endif; ?>
								</button>
							</div>
							
							<hr/>
							
							<ul class="list commission-list">
								<?php 
								$servicelistTitle = get_sub_field('prices_sub_title');
								$formatedServicelistTitle = preg_replace("/[^A-Za-z0-9]/", "", $servicelistTitle);
								?>
							
								<?php if( have_rows('prices_repeater') ): ?>
									<?php while( have_rows('prices_repeater') ): the_row(); ?>
										
										<li id="<?php echo $formatedServicelistTitle; ?>" class="row commission-list-item" data-attribute="<?php the_sub_field('prices_sub_type'); ?>">
											<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
												<?php if( get_sub_field('prices_sub_title') ): ?><h3><?php the_sub_field('prices_sub_title'); ?></h3><?php endif; ?>
												<?php if( get_sub_field('prices_sub_price') ): ?><h4><?php the_sub_field('prices_sub_price'); ?> kr</h4><?php endif; ?>
												<?php if( get_sub_field('price_sub_description') ): ?><?php the_sub_field('price_sub_description'); ?><?php endif; ?>
												<span class="type"><?php the_sub_field('prices_sub_type'); ?></span>
												<a href="/commission-request" title="Send me a request" class="button">Send me a request</a>
											</div>
											<div class="commission-example col-xs-12 col-sm-4 col-md-4 col-lg-4">
												<?php if( get_sub_field('prices_sub_image') ): ?>
													<div class="commission-thumbnail" style="background-image: url(<?php the_sub_field('prices_sub_image'); ?>);">
														<div class="commission-example-lable">Example</div>
													</div>
												<?php endif; ?>
											</div>
										</li>
										
									<?php endwhile; ?>
								<?php endif; ?>
							</ul>
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