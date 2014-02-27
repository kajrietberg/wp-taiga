<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package wp-taiga
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
		<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
	</header><!-- .page-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'wp-taiga' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

    <footer class="page-footer">

        <?php the_tags( '<span class="tags">' . __( 'Tags:', 'wp-taiga' ) . '</span> ', ', ', '' ); ?><?php edit_post_link( __( 'Edit', 'wp-taiga' ), '<span class="edit-link">', '</span>' ); ?>

    </footer><!-- .page-footer -->

</article><!-- #post-## -->