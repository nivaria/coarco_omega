jQuery(document).ready(function($){
    jQuery(".ofertas_block h2,.highlight_block h2,.pinterest .field-name-field-subtitulo-destacado").each( function(){
        jQuery(this).append("<div class='block_left_wing'></div>");
        jQuery(this).append("<div class='block_right_wing'></div>");
        jQuery(this).append("<div class='block_left_expand'></div>");
        jQuery(this).append("<div class='block_right_expand'></div>");
    });
    /*jQuery(".pinterest").each( function(index){
       jQuery(this).addClass("count"+(index+1));
    });
});