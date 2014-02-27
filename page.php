<?php get_header(); ?>

<div id="content">

	 <div class="l-two-third l-first">

	    <?php if ( current_theme_supports( 'breadcrumb-trail' ) ) breadcrumb_trail( array( 'container' => 'nav', 'separator' => '>', 'before' => __( 'You are here:', 'wp-taiga' ) ) ); ?>  
	          
		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'content', 'page' );


				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			endwhile;
		?>

	</div><!--.l-two-third-->

	<?php get_sidebar( 'primary' ); // Loads the sidebar-primary.php template. ?>			
</div>

<?php get_footer(); ?>