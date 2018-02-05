
$(document).ready(function() {

    // ajouter le produit aux panier et envoyer une requette post pour créer une cart
    $('.my-cart-b').click(function(event) {

        // get the form data
        var name=$(this).attr("product-name");
        var price =$(this).attr("product-price");
        var id=$(this).attr("product-id");

        var formData = {
            'name'              : name,
            'price'             : price,
            'id'                :id
        };

        $.post( "back.php", formData)
            .done(function( data ) {
                //alert(data);
                $( ".showresults" ).append( "<p id='cart_id'>"+name+" :   <b>$"+price+"</b></p>" );
            });
    });

    //pour vider la panier et envoyer une requette post pour créer la commande
    $('.order').click(function(event) {

        $.post( "back.php", {'order':'go'})
            .done(function( data ) {
                $("p").remove("#cart_id")
            });
    });
});

