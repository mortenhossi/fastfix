<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <?php wp_head(); ?>
    </head>
    <body>

    <div class="navigation <?php echo is_admin_bar_showing() ? "adminbar-on" : ""; ?>">
        <div class="topnav">
            <div class="container">
                <div class="contact-details">
                    <a href="tel:+45 42 42 07 18"> <i class="fas fa-phone"></i> +45 42 42 07 18</a>
                    <p> <i class="fas fa-map-marker-alt"></i> Frederiks Allé 134, 8000 Aarhus C</p>
                </div>

                <p> <i class="far fa-clock"></i> Man-Fre: 10:00 - 17:30 Lørdag: Lukket</p>
            </div>
        </div>

        <div class="container">
            <nav class="">
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
    </div>
