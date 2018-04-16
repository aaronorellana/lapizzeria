<?php get_header(); ?>

    <!-- Debut de la boucle while -->
    <?php while(have_posts()): the_post(); ?> 

        <!-- Thumbnail -->


        <div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
            <div class="contenido-hero">
                <div class="texto-hero">
                     <!-- Titre de la page-->
                     <?php the_title('<h1>', '</h1>'); ?>
                </div>
            </div>
        </div>
    
        <!-- Contenue -->
        <div class="principal contenedor">
            <main class="text-centrado contenido-paginas">
                <?php the_content(); ?>
            </main>
        </div>

        <div class="informacion-cajas contenedor clear">

            <!-- Box 1 -->
            <div class="caja">
               
                <?php 
                    $id_imagen = get_field('image_1');

                    // Va cherche le array de l'image et applique lui le size personalise 'nosotros'
                    $imagen = wp_get_attachment_image_src( $id_imagen, 'nosotros' );
                ?>

                <!-- Va cherche dans l'array de l'image l'url dans la valeur 0 -->
                <img src="<?php echo $imagen[0] ?>" class="imagen-caja">

                <div class="contenido-caja">
                    <?php the_field('description_1'); ?>
                </div>
            </div> <!-- .caja-->

             <!-- Box 2 -->
             <div class="caja">

               <div class="contenido-caja">
                   <?php the_field('description_2'); ?>
               </div>

               <?php 
                   $id_imagen = get_field('image_2');

                   // Va cherche le array de l'image et applique lui le size personalise 'nosotros'
                   $imagen = wp_get_attachment_image_src( $id_imagen, 'nosotros' );
               ?>

               <!-- Va cherche dans l'array de l'image l'url dans la valeur 0 -->
               <img src="<?php echo $imagen[0] ?>" class="imagen-caja">

           </div> <!-- .caja-->

            <!-- Box 3 -->
            <div class="caja">
               
                <?php 
                    $id_imagen = get_field('image_3');

                    // Va cherche le array de l'image et applique lui le size personalise 'nosotros'
                    $imagen = wp_get_attachment_image_src( $id_imagen, 'nosotros' );
                ?>

                <!-- Va cherche dans l'array de l'image l'url dans la valeur 0 -->
                <img src="<?php echo $imagen[0] ?>" class="imagen-caja">

                <div class="contenido-caja">
                    <?php the_field('description_3'); ?>
                </div>
            </div> <!-- .caja-->


        </div> <!-- .informacion-cajas-->

    <?php endwhile; ?> <!-- Fin de la boucle while -->

<?php get_footer(); ?>