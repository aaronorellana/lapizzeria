$ =jQuery.noConflict();

// Fonction qui load quand touts les elements html sont loads
$(document).ready(function() {

    // Quand on click sur le a de la classe .mobile-menu
    $('.mobile-menu a').on('click', function() {
                            //Le param de toggle cest la rapidite
        $('nav.menu-sitio').toggle('slow');
    });

    var breakpoint = 768;

    $(window).resize(function() {

        if($(document).width() >= breakpoint){
            $('nav.menu-sitio').show();
        } else {
            $('nav.menu-sitio').hide();
        }
        
    });
});