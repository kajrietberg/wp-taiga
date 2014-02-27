<?php

/* Load the core theme framework. */
require_once( trailingslashit( get_template_directory() ) . 'library/hybrid.php' );
new Hybrid();

/* Theme PHP code will go here. */
add_action( 'after_setup_theme', 'wp_taiga_theme_setup', 10 );

function wp_taiga_theme_setup() {
	

	/*** Theme-supported features go here. ***/
	/* Add theme support for the framework widgets. */
	add_theme_support( 'hybrid-core-widgets' );

	/* Allows theme developers to easily load the framework’s JavaScript files. */
	add_theme_support(
		 'hybrid-core-scripts',
		  array( 'drop-downs' )	 
	);

	/* Add theme support for the framework shortcodes. */
	add_theme_support( 'hybrid-core-shortcodes' );

	/*A dd theme support for the Hybrid Template Hierarchy which is more flexible */
	add_theme_support( 'hybrid-core-template-hierarchy' );

	/* Register sidebars from Hybrid core or put in yourself but then further down. */
	add_theme_support( 
		'hybrid-core-sidebars',
		 array( 'primary', 'secondary', 'subsidiary' ) 
	);

	/* Add theme support for the framework menus */
	add_theme_support(
		 'hybrid-core-menus',
		  array( 'primary', 'secondary', 'subsidiary' )
	);


	/*** Add theme support for framework extensions. ***/
	/* Add theme support for breadcrumbs */
	add_theme_support( 'breadcrumb-trail' );

	/* The best thumbnail/image script ever. */
	add_theme_support( 'get-the-image' );

	/* Add theme support for Hybrid core stylesheets */
	add_theme_support(
		 'hybrid-core-styles',
		  array( 'drop-downs', 'gallery' ) 
	 );

	/* Nicer [gallery] shortcode implementation. */
	add_theme_support( 'cleaner-gallery' );

		/*** Action and filters go here. ***/
	/* Register your own sidebars here and put in the actually code further below */
	add_action( 'widgets_init', 'wp_taiga_register_sidebars', 11 );

	apply_filters( 'get_theme_layout', $l );

	add_theme_support(
		'theme-layouts',
			array( 'full', 'one-third', 'two-third', 'half' ),
			array( 'default' => 'full', 'customize' => true )
	);

}

/*** register your own functionality from here ***/

/*
*function wp_taiga_register_sidebars() {
*
*	/* Register the 'Name' sidebar. */
/*
*	register_sidebar(
*		array(
*			'id' => 'Name',
*			'name' => __( 'Name' ),
*			'description' => __( 'A short description of the sidebar.' ),
*			'before_widget' => '<div id="%1$s" class="widget %2$s">',
*			'after_widget' => '</div>',
*			'before_title' => '<h3 class="widget-title">',
*			'after_title' => '</h3>'
*		)
*	);
*	/* Repeat register_sidebar() code for additional sidebars. */
/*
}
*/

?>