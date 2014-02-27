<?php get_header(); ?>

<div id="content">

	 <div class="l-two-third l-first">

	    <?php if ( current_theme_supports( 'breadcrumb-trail' ) ) breadcrumb_trail( array( 'container' => 'nav', 'separator' => '>', 'before' => __( 'You are here:', 'wp-taiga' ) ) ); ?>  
	          
		<article id="post-not-found">
			<header class="page-header">
				<h1><?php _e( 'Epic 404 - Article Not Found', 'wp-taiga' ); ?></h1>
			</header><!-- .page-header -->

			<div class="entry-content">
					<p><?php _e( 'The Wolf ate the content of this page, At least we think he did, try searching this website!', 'wp-taiga' ); ?></p>
			</div><!-- .entry-content -->

			<div class="search">
				<p><?php get_search_form(); ?></p>
			</div>

			<div class="widget widget_categories">
				<h2 class="widgettitle"><?php _e( 'Look at our Most Used Categories', 'wp-taiga' ); ?></h2>
				<ul>
				<?php
				wp_list_categories( array(
				'orderby' => 'count',
				'order' => 'DESC',
				'show_count' => 1,
				'title_li' => '',
				'number' => 10,
				) );
				?>
				</ul>
			</div><!-- .widget -->
			<div class="widget widget_tag_cloud">
				<h2 class="widgettitle"><?php _e( 'Look at our Popular Tags', 'wp-taiga' ); ?></h2>
				<ul>
					<?php wp_tag_cloud('smallest=8&largest=22'); ?> 
			 	</ul>

		    <footer class="page-footer">

		        <p><?php _e( 'This is the 404.php template.', 'wp-taiga' ); ?></p>

		    </footer><!-- .page-footer -->

		</article><!-- #post-## -->

	</div><!--.l-two-third-->

	<?php get_sidebar( 'primary' ); // Loads the sidebar-primary.php template. ?>			
</div>

<?php get_footer(); ?>