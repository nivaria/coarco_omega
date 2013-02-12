jQuery(document).ready(function($){
    jQuery(".highlight_block h2,.view-mode-pinterest.product_block .field-name-field-subtitulo-destacado").each( function(){
        jQuery(this).append("<div class='block_left_wing'></div>");
        jQuery(this).append("<div class='block_right_wing'></div>");
        jQuery(this).append("<div class='block_left_expand'></div>");
        jQuery(this).append("<div class='block_right_expand'></div>");
    });
    jQuery(".product_block.view-mode-pinterest").each( function(index){
       jQuery(this).addClass("count"+(index+1));
    });
});