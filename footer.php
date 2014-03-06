	<footer class="footer l-full">
		<div class="footer-content">
			<?php echo apply_atomic_shortcode( 'footer_content', '<p class="credit">' . __( 'Copyright &copy; [the-year] [site-link]. Powered by [wp-link] and <a href="http://www.taigaboilerplate.com">Taiga Boilerplate</a>. Put together by <a href="http://kajrietberg.nl">Kaj Rietberg</a>.', 'wp-taiga' ) . '</p>' ); ?>
		</div><!-- .footer-content -->
	</footer>		
	<!-- Scripts -->
    <script src="scripts/interface.js"></script>
	<?php wp_footer(); ?>    
 </body>
</html>