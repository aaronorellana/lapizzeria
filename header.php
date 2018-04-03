<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ex</title>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg">    
                </a>
            </div> <!-- .logo -->
        </div> <!-- .contenedor -->
    </header>