<!DOCTYPE HTML>
<html lang="nl">

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
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="apple-icon.png" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php wp_head(); ?>
</head>

<body>
    <div class="l-container">
        <?php get_template_part( 'menu', 'primary' ); // Loads the menu-primary.php template. ?>

        <header id="header">
            <hgroup id="branding">
                <h1 id="site-title"><a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                <?php bloginfo( 'name' ); ?></a></h1>
                <h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
            </hgroup><!-- #branding -->
        </header><!-- #header -->

        <?php get_template_part( 'menu', 'secondary' ); // Loads the menu-secondary.php template. ?>
        
        <div class="l-full">

            <?php if ( current_theme_supports( 'breadcrumb-trail' ) ) breadcrumb_trail( array( 'container' => 'nav', 'separator' => '>', 'before' => __( 'You are here:', 'wp-taiga' ) ) ); ?>  
            
