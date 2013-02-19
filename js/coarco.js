jQuery(document).ready(function($){
    jQuery(".ofertas_block h2,.pinterest .field-name-field-subtitulo-destacado").each( function(){
        jQuery(this).append("<div class='block_left_wing'></div>");
        jQuery(this).append("<div class='block_right_wing'></div>");
        jQuery(this).append("<div class='block_left_expand'></div>");
        jQuery(this).append("<div class='block_right_expand'></div>");
    });
    jQuery(".view-slideshow-portada .views-field-field-subtitulo-slideshow").each( function(){
        jQuery(this).append("<div class='block_right_wing'></div>");
    });
    jQuery(".view-slideshow-portada .views-field-title").each( function(){
        jQuery(this).append("<div class='block_left_wing'></div>");
    });
    
    jQuery("#om-menu-productos .om-maximenu-content").hover(
        function(){
           jQuery("#om-menu-productos .om-link").addClass("over"); 
        },
        function(){
           jQuery("#om-menu-productos .om-link").removeClass("over"); 
        }
    );
    jQuery("#om-menu-mi-cuenta .om-maximenu-content").hover(
        function(){
           jQuery("#om-menu-mi-cuenta .om-link").addClass("over"); 
        },
        function(){
           jQuery("#om-menu-mi-cuenta .om-link").removeClass("over"); 
        }
    );
});