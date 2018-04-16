<?php 

/*
* Template Name: Especialidades
*/

?>



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

    <?php endwhile; ?> <!-- Fin de la boucle while -->

    <div class="nuestras-especialidades contenedor">
        <h3 class="texto-rojo">Pizzas</h3>

        <div class="contenor-grid">
            <?php
                $args=array(
                    'post_type' => 'especialidades',
                    'posts_per_page' => -1,
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'category_name' => 'pizzas'
                );

                $pizzas = new WP_Query($args);
                while($pizzas->have_posts()): $pizzas->the_post();
            ?>

            <div class="">
                <?php the_post_thumbnail('especialidades'); ?>

                <div class="texto-especialidad">
                    <h4> <?php the_title(); ?> <span> $ <?php the_field('precio'); ?></span> </h4>
                    <?php the_content(); ?>
                </div>
            </div>

            <!-- QUAND JE FINIS MA BOUCLE ET J'UTILISE WP_QUERY(); -->
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>

<?php get_footer(); ?>


