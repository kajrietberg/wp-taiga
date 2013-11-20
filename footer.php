						
		</div><!--.l-full -->

		<footer class="footer">
			<div class="l-full">
				<div class="footer-content">
					<?php echo apply_atomic_shortcode( 'footer_content', '<p class="credit">' . __( 'Copyright &copy; [the-year] [site-link]. Powered by [wp-link] and <a href="http://www.taigaboilerplate.com">Taiga Boilerplate</a>.', 'wp-taiga' ) . '</p>' ); ?>
				</div><!-- .footer-content -->
			</div>
		</footer><!-- .footer -->

	</div><!--.l-container -->

	<!-- Scripts -->
    <script src="scripts/jquery-2.0.3.min.js"></script>
    <script src="scripts/interface.js"></script>

	<?php wp_footer(); ?>
 </body>

</html>