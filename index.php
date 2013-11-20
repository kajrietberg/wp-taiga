<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h2>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to 
			<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h2>
			<p><?php the_category(', '); ?></p>		 					
			<div class="entry">
				<?php the_content('read more'); ?>
			</div>
 					
 	<?php endwhile; ?>						

			<div class="navigation">
 				<?php posts_nav_link('<<>>','Newer','Older'); ?>
 			</div>	
	<?php else : ?>
 			<h2 class="center">Not Found</h2>
 			<p class="center">
			<?php _e("Sorry, but you are looking for something that isn't here."); ?></p>

	<?php endif; ?>			

<?php get_footer(); ?>