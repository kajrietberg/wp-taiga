<?php
/**
 * The template used for displaying page content in single.php
 *
 * @package wp-taiga
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="article-header">
		<h1 class="article-title"><?php the_title(); ?></h1>
			<p class="byline"><?php _e( 'Posted on: ', 'wp-taiga' ) ?><?php echo get_the_date() ?>, <?php _e( 'by: ', 'wp-taiga' ) ?><?php echo get_the_author() ?></p>
	</header><!-- .page-header -->

	<div class="article-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'wp-taiga' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

    <footer class="article-footer">

        <?php the_tags( '<span class="tags">' . __( 'Tags:', 'wp-taiga' ) . '</span> ', ', ', '' ); ?>. <?php edit_post_link( __( 'Edit post', 'wp-taiga' ), '<span class="edit-link button-soft right">', '</span>' ); ?>

    </footer><!-- .article-footer -->

</article><!-- #post-## -->