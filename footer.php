<?php
/**
 * The footer template
 */
?>
	
	<div id="footer-widget-area">
		
	<!-- Footer -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			
			<div id="tertiary" class="sidebar-container" role="complementary">
				<?php if (is_active_sidebar( 'f1-widgets' ) || is_active_sidebar( 'f2-widgets' ) || is_active_sidebar( 'f3-widgets' ) || is_active_sidebar( 'f4-widgets' ) ) { ?>
					<div class="container_16">
						
						<?php if ( is_active_sidebar( 'f1-widgets' ) ) : ?>
							<!-- First Widget Area -->
							<div class="grid_4">
								<?php dynamic_sidebar( 'f1-widgets' ); ?>
							</div>
						<?php endif; ?>

						<?php if ( is_active_sidebar( 'f2-widgets' ) ) : ?>
							<!-- Second Widget Area -->
							<div class="grid_4">
								<?php dynamic_sidebar( 'f2-widgets' ); ?>
							</div>
						<?php endif; ?>

						<?php if ( is_active_sidebar( 'f3-widgets' ) ) : ?>
							<!-- Third Widget Area -->
							<div class="grid_4">
								<?php dynamic_sidebar( 'f3-widgets' ); ?>
							</div>
						<?php endif; ?>

						<?php if ( is_active_sidebar( 'f4-widgets' ) ) : ?>
							<!-- Forth Widget Area -->
							<div class="grid_4">
								<?php dynamic_sidebar( 'f4-widgets' ); ?>
							</div>
						<?php endif; ?>

						<div class="clear"></div>
					</div>
				<?php }	?>

			</div>

			<!-- Site Info -->
			<div class="site-info">
				<div class="container_16">
					
					<!-- CopyRight -->
					<div class="grid_8">
						<p class="copy">
							<?php if ( get_theme_mod('wplook_copy') ){ echo esc_html(get_theme_mod('wplook_copy') ); } ?>
						</p>
					</div>
					
					<!-- Design By -->
					<div class="grid_8">
                        <p class="designby">
                            <?php _e('Web Design by', 'charitas-lite'); ?> <a href="http://clblamires.github.io" title="<?php _e('Casey Blamires', 'charitas-lite'); ?>" target="_blank">Casey Blamires</a> | 
                            <i class="fa fa-lock"></i> 
                            <a href="https://www.ywcaidaho.org/wp-admin">Admin</a>
                        </p>
					</div>

					<div class="clear"></div>
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon .site-footer -->

	</div>
	<!-- /#page -->
	<?php wp_footer(); ?>
</body>
</html>