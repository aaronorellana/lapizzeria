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

<?php get_footer(); ?>