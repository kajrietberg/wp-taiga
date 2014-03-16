<?php get_header(); ?>

 <div class="l-two-third l-first">

    <?php if ( current_theme_supports( 'breadcrumb-trail' ) ) breadcrumb_trail( array( 'container' => 'nav', 'separator' => '>', 'before' => __( 'You are here:', 'wp-taiga' ) ) ); ?>  
          
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" role="article">

			<header class="article-header">
				<h2>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to 
					<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h2>
					<p class="byline"><?php _e( 'Filed under: ', 'wp-taiga' ) ?><?php the_category(', '); ?></p>	
			</header>

				<div class="entry">
					<?php the_content( __('read more', 'wp-taiga') ); ?>
				</div>
 		</article>	
 				
 	<?php endwhile; ?>						

			<nav class="navigation pagination">
 				<?php 
 				global $wp_query;

				$big = 999999999; // need an unlikely integer
 				echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages
				) ); 
				?> 
 			</nav>	

	<?php else : ?>

 			<h2 class="center">Not Found</h2>
 			<p class="center">
			<?php _e("Sorry, but I think the Taiga Wolf ate the content that supposed to be here!", 'wp-taiga'); ?></p>

	<?php endif; ?>		

	</div><!--.l-two-third-->

		<?php get_sidebar( 'primary' ); // Loads the sidebar-primary.php template. ?>			

<?php get_footer(); ?>