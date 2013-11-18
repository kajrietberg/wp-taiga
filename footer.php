<?php get_sidebar( 'primary' ); // Loads the sidebar-primary.php template. ?>

			<?php get_sidebar( 'secondary' ); // Loads the sidebar-secondary.php template. ?>

		</div><!--.l-full -->

		<?php get_sidebar( 'subsidiary' ); // Loads the sidebar-subsidiary.php template. ?>

		<?php get_template_part( 'menu', '.......' ); // Loads the menu-.........php template. ?>

		<footer class="footer">

			<div class="l-full">

				<div class="footer-content">
					<?php echo apply_atomic_shortcode( 'footer_content', '<p class="credit">' . __( 'Copyright &copy; [the-year] [site-link]. Powered by [wp-link] and [theme-link].', 'hybrid-base' ) . '</p>' ); ?>
				</div><!-- .footer-content -->

			</div>

		</footer><!-- .footer -->

	</div><!--.l-container -->

	<!-- Scripts -->
    <script src="scripts/jquery-2.0.3.min.js"></script>
    <script src="scripts/interface.js"></script>

	<?php wp_footer(); // wp_footer ?>
 </body>

</html>