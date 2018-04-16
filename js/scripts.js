$ =jQuery.noConflict();

// Fonction qui load quand touts les elements html sont loads
$(document).ready(function() {

    
    // Quand on click sur le a de la classe .mobile-menu
    $('.mobile-menu a').on('click', function() {
                            //Le param de toggle cest la rapidite
        $('nav.menu-sitio').toggle('slow');
    });

    // Reaccionar a Resize en la pantalla 
    var breakpoint = 768;
    $(window).resize(function() {

        ajustarCajas();

        if($(document).width() >= breakpoint){
            $('nav.menu-sitio').show();
        } else {
            $('nav.menu-sitio').hide();
        }

    });

    // Ajustar cajas segun size de imagen
    ajustarCajas();

});

// Ajustar cajas segun size de imagen
function ajustarCajas() {

    var imagenes = $('.imagen-caja');

     if($imagenes.length > 0){
         var altura = imagenes[0].height;
         var cajas = $('div.contenido-caja');

         $(cajas).each(function(i, elemento) {
            $(elemento).css({'height': altura + 'px'});
         });
     }
}