<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name');?></title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" >

         <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

        <?php wp_head(); ?> 

    </head>

    <body <?php body_class(); ?>>
        <nav class="container">
            <div class="navbar">
                <div class="nav-logo">
                    <?php if(has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <h1><?php bloginfo('name'); ?></h1>
                    <?php endif; ?>
                </div>

                <i id="open-menu" class="fas fa-plus"></i>

                <i id="close-menu" class="fas fa-minus"></i>

                <?php
                    wp_nav_menu(array(
                    'theme_location'  => 'primary',
                    'depth'           => 2,
                    'container'       => false,
                    'menu_class'      => 'nav-items'
                    ));
                ?>
              
            </div>
        </nav>
