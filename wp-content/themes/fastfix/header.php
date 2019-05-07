<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>

    <div class="container">
        <nav class="<?php echo is_admin_bar_showing() ? "adminbar-on" : ""; ?>">
            <?php if ( function_exists( 'the_custom_logo' ) ) { ?>
                <div class="logo">
                    <?php the_custom_logo(); ?>
                </div>
            <?php } ?>

            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>

            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
    </div>
