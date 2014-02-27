<?php get_header(); ?>

<div id="content">

	 <div class="l-two-third l-first">

	    <?php if ( current_theme_supports( 'breadcrumb-trail' ) ) breadcrumb_trail( array( 'container' => 'nav', 'separator' => '>', 'before' => __( 'You are here:', 'wp-taiga' ) ) ); ?>  
	          
		<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'wp-taiga' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" role="article">

			<header class="article-header">
				<h2>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to 
					<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h2>
					<p class="byline"><?php the_category(', '); ?></p>	
			</header>

				<div class="entry">
					<?php the_content( __('read more', 'wp-taiga') ); ?>
				</div>
 		</article>	

 		<div class="search">
 			<h2><?php _e("Didn't find what you're looking for, keep searching!", 'wp-taiga'); ?></h2>
				<p><?php get_search_form(); ?></p>
		</div>

		<?php endwhile; ?>						

			<nav class="navigation">
 				<?php posts_nav_link('<<>>','Newer','Older'); ?>
 			</nav>	

		<?php else : ?>

 			<h2 class="center">Not Found</h2>
 			<p class="center">
			<?php _e("Sorry, but I think the Taiga Wolf ate the content that supposed to be here!", 'wp-taiga'); ?></p>

			<div class="search">
 				<h2><?php _e("You could try another word to search for.", 'wp-taiga'); ?></h2>
				<p><?php get_search_form(); ?></p>
			</div>
		<?php endif; ?>		

	</div><!--.l-two-third-->

	<?php get_sidebar( 'primary' ); // Loads the sidebar-primary.php template. ?>			
</div>

<?php get_footer(); ?>