jQuery(document).ready(function($){
    jQuery(".pinterest .add-to-cart-expandable").addClass("hidden");
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
    /*jQuery(".pinterest.node-product-display").each(function(){
        jQuery(this).find("h2").addClass("title-with-stock").before(
            jQuery(this).find(".field-name-commerce-stock")
        );
    });*/
    if( jQuery("body").hasClass("front") ){
        var a1=jQuery("<div style='width:318px;float:left;' ></div>");
        var a2=jQuery("<div style='width:318px;float:right;' ></div>");
        
        var count=1;
        
        jQuery(".views-row","#block-views-productos-home-block").each( function(){
            if( count<5 ){
                a1.append( jQuery(this) );
            } else {
                a2.append( jQuery(this) );
            }
            count++;
        });
        
        jQuery(".view-productos-home .view-content","#block-views-productos-home-block").append(
            a1,
            a2
        );
    }
    if( jQuery("body").hasClass("page-productos") ){
        var a1=jQuery("<div style='width:232px;float:left;' ></div>");
        var a2=jQuery("<div style='width:232px;float:left;' ></div>");
        var a3=jQuery("<div style='width:232px;float:right;' ></div>");
        
        var count=1;
        
        jQuery(".views-row","#block-system-main").each( function(){
            if( count<4 ){
                a1.append( jQuery(this) );
            } else if( count>3 && count<7 ){
                a2.append( jQuery(this) );
            } else {
                a3.append( jQuery(this) );
            }
            count++;
        });
        
        jQuery(".view-product-search .view-content","#block-system-main").append(
            a1,
            a2,
            a3
        );
    }
});