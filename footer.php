			<footer id="footer" role="contentinfo">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="footer-menu">
							<?php
							$currentlang = get_bloginfo('language');
							if($currentlang=="en-US"):
							?>
								<h4>Menu</h4>
							<?php else: ?>
								<h4>Meny</h4>
							<?php endif; ?>
							
							<?php html5blank_footer_nav(); ?>
						</div>
						
						<div class="fb-like" data-href="https://www.facebook.com/blackstickycrafts/" data-width="250" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 instagram">
						<a href="https://www.instagram.com/smallblacksticky" target="_blank" title="Black Sticky Design on Instagram"><h4>Instagram</h4></a>
						<!-- SnapWidget -->
						<script src="https://snapwidget.com/js/snapwidget.js"></script>
						<iframe src="https://snapwidget.com/embed/182211" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-5')) ?>
					</div>
				</div>
				<div class="copyright">&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?></div>
			</footer>
		</div>
		<!-- /wrapper -->
		
		<?php wp_footer(); ?>
	</body>
</html>