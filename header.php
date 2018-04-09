<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <title>Pizzeria</title>
        <?php wp_head(); ?>
    </head>
<body>

    <header class="encabezado-sitio">
        <div class="contenedor">

            <div class="logo">
                <!-- Link para el home page con esc_url que permite sanization-->
                <a href="<?php esc_url( home_url('/') ); ?>">
                    <!-- Link para logo -->
                    <img class="logotipo" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg">    
                </a>
            </div> <!-- .logo -->

            <div class="informacion-encabezado">
                <div class="redes-sociales">
                    <?php
                        // Arguments pour le menu
                        $args = array(
                            'theme_location' => 'social-menu',
                            'container' => 'nav',
                            'container_class' => 'sociales',
                            'container_id' => 'sociales',
                            'link_before' => '<span class="sr-text">',
                            'linl_after' => '</span>'
                        );

                        // Function pour print le menu
                        wp_nav_menu( $args );
                    ?>
                </div> <!-- .redes-sociales -->

                <div class="direction">
                    <p>8908 Rue Marco, California , USA</p>
                    <p>Tel: 33-33-22-11</p>
                </div>
            </div>

        </div> <!-- .contenedor -->
    </header>

    <div class="menu-principal">

        <div class="mobile-menu">
            <a href="#" class="mobile"> <i class="fa fa-bars" aria-hidden="true"></i> Menu </a>
        </div>


        <div class="contenedor navegacion">
            <?php
                // Arguments pour le menu
                $args = array(
                    'theme_location' => 'header-menu',
                    'container' => 'nav',
                    'container_class' => 'menu-sitio'
                );

                // Function pour print le menu
                wp_nav_menu( $args );
            ?>
        </div> <!-- .contenedor navegacion -->
    </div> <!-- .menu-principal -->

    