        
        <footer>
            <?php 
                // Arguments pour le menu
                $args = array(
                    'theme_location' => 'header-menu',
                    'container' => 'nav',
                    'after' => '<span class"separador"> | </span>',
                );

                // Function pour print le menu
                wp_nav_menu( $args );
            ?>

            <div class="ubicacion">
                <p>8908 Rue Marco, California , USA</p>
                <p>Tel: 33-33-22-11</p>
            </div>

            <p class="copyright">Todos los derechos reservados <?php echo date('Y')?> </p>
        </footer>
        
        <?php wp_footer(); ?>
    </body>
</html>