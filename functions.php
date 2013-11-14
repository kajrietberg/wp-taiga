<?php

/* Load the core theme framework. */
require_once( trailingslashit( get_template_directory() ) . 'library/hybrid.php' );
new Hybrid();

/* Theme PHP code will go here. */
add_action( 'after_setup_theme', 'wp_taiga_theme_setup', 10 );

function wp_taiga_theme_setup() {
	
	/* Theme-supported features go here. */
	/* Add theme support for the framework widgets. */
	add_theme_support( 'hybrid-core-widgets' );

	/* Add theme support for the framework shortcodes. */
	add_theme_support( 'hybrid-core-shortcodes' );

	/*Add theme support for the Hybrid Template Hierarchy which is more flexible */
	add_theme_support( 'hybrid-core-template-hierarchy' );

	/** Register sidebars from Hrybrid core or put in yourself but then further down. 
	*	primary: (Typically shown on the side of the page as the main sidebar.)
	*	secondary:(Typically shown on the side of the page within three-column layouts or as an alternative 
	*	to the primary sidebar.)
	*	subsidiary:(Typically shown somewhere above, within, or below the footer area.
	*	header:(Easy enough. Put it within the header.)
	*	before-content:(Should be shown directly before the post content on a page.)
	*	after-content: (Should be shown directly after the post content on a page.)
	*	after-singular: (all post types that are displayed on the front end of the site.) 
	**/

	add_theme_support( 
		'hybrid-core-sidebars', 
		array( 'primary', 'secondary', 'subsidiary' ) 
	);


	/* Add theme support for framework extensions. */
	/* Add theme support for breadcrumbs */
	add_theme_support( 'breadcrumb-trail' );

	/*   */
	add_theme_support( 'get-the-image' );

	/*  */


	/* Enable theme layouts (need to add stylesheet support). */
	add_theme_support( 
		'theme-layouts', 
		array( '1c', '2c-l', '2c-r' ), 
		array( 'default' => '1c', 'customizer' => true ) 
	);
	/*  */


	/* Action and filters go here. */
	/* Register sidebars */
	add_action( 'widgets_init', 'wp_taiga_register_sidebars', 11 );


}


/*register your own sidebars here, put in a Name you think is handy */

function wp_taiga_register_sidebars() {

	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id' => 'Name',
			'name' => __( 'Name' ),
			'description' => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* Repeat register_sidebar() code for additional sidebars. */

?>