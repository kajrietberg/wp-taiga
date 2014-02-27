<?php get_header(); ?>

<div id="content">

	 <div class="l-two-third l-first">
	          
		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'content', 'single' );


				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			endwhile;
		?>

		</div><!--.l-two-third-->

		<?php get_sidebar( 'primary' ); // Loads the sidebar-primary.php template. ?>	
</div><!--#content-->

<?php get_footer(); ?>