<?php get_header(); ?>

<div id="content">

	 <div class="l-two-third l-first">

	    <?php if ( current_theme_supports( 'breadcrumb-trail' ) ) breadcrumb_trail( array( 'container' => 'nav', 'separator' => '>', 'before' => __( 'You are here:', 'wp-taiga' ) ) ); ?>  
	          
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
				<h1 class="page-title">
				<?php
				if ( is_category() ) :
				single_cat_title();

				elseif ( is_tag() ) :
				single_tag_title();

				elseif ( is_author() ) :
				printf( __( 'Author: %s', 'wp-taiga' ), '<span class="vcard">' . get_the_author() . '</span>' );

				elseif ( is_day() ) :
				printf( __( 'Day: %s', 'wp-taiga' ), '<span>' . get_the_date() . '</span>' );

				elseif ( is_month() ) :
				printf( __( 'Month: %s', 'wp-taiga' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'wp-taiga' ) ) . '</span>' );

				elseif ( is_year() ) :
				printf( __( 'Year: %s', 'wp-taiga' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'wp-taiga' ) ) . '</span>' );

				else :
				_e( 'Archives', 'wp-taiga' );

				endif;
				?>
				</h1>
				</header><!-- .page-header -->
				<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php endwhile; ?>
				<nav class="navigation">
 				<?php posts_nav_link('<<>>','Newer','Older'); ?>
 				</nav>	

				<?php else : ?>

	 			<h2 class="center">Not Found</h2>
	 			<p class="center">
				<?php _e("Sorry, but I think the Taiga Wolf ate the content that supposed to be here!", 'wp-taiga'); ?></p>

			<?php endif; ?>		

	</div><!--.l-two-third-->

	<?php get_sidebar( 'primary' ); // Loads the sidebar-primary.php template. ?>			
</div>

<?php get_footer(); ?>