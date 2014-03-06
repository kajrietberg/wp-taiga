<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="apple-mobile-web-app-title" content="" />
    <meta name="msapplication-TileImage" content="windows-icon.png" />
    <meta name="msapplication-TileColor" content="#4fca96" />
    

    <title><?php hybrid_document_title(); ?></title>
    <meta name="description" content="" />
    <meta name="author" content="" />
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <link href="<?php echo get_stylesheet_uri(); ?>" type="text/css" rel="stylesheet">
     <link href="<?php echo get_template_directory_uri(); ?>/stylesheets/.........css" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="apple-icon.png" />

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
      
        <header class="header">
            <hgroup class="branding">
                <h1 class="site-title"><a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                <?php bloginfo( 'name' ); ?></a></h1>
                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            </hgroup><!-- #branding -->
            <?php get_template_part( 'menu', 'primary' ); // Loads the menu-primary.php template. ?>
        </header><!-- #header -->
        
        <div class="l-container">
            <?php get_template_part( 'menu', 'secondary' ); // Loads the menu-secondary.php template. ?> 
            