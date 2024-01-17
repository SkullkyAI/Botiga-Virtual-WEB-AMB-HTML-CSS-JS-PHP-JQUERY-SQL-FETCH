

$(document).ready(function() {
    $('.dropdown-toggle').click(function() {
        $('.dropdown-menu').toggle();
    });
});

$(document).ready(function() {
    $('.categoria').click(function(event) {
        event.preventDefault();
        var id_categoria = $(this).attr('id');
        $.ajax({
            url: 'resource_llistat_productes.php',
            data: {id_categoria: id_categoria},
            success: function(response) {
                $('.categorias-container').html(response);
            }
        });
    });

});
$(document).ready(function() {
    $('.logout').click(function(event) {
        event.preventDefault();
        $.ajax({
            url: 'logout.php',
            success: function() {
                location.reload();
            }
        });
    });
});

$(document).ready(function() {
    $('.categorias-container').on('click', '.producto', function(event) {
        event.preventDefault();
        var id_producte = $(this).attr('id');
        $.ajax({
            url: 'resource_detalle.php',
            data: {id_producte: id_producte},
            success: function(response) {
                $('.productos-container').html(response);
            }
        });
    });
});
$(document).ready(function() {
    $('.cerca').on('click', '.producto', function(event) {
        event.preventDefault();
        var id_producte = $(this).attr('id');
        $.ajax({
            url: 'resource_detalle.php',
            data: {id_producte: id_producte},
            success: function(response) {
                $('.productos-container').html(response);
            }
        });
    });
});

$(document).ready(function() {
    $(document).on('submit', '#add-to-cart-form', function(e) {
        e.preventDefault();

        var productId = $(this).find('input[name="id_producte"]').val();
        var quantity = $(this).find('input[name="quantity"]').val();

        $.ajax({
            url: '/../Controller/producto_añadido.php',
            type: 'post',
            data: {
                id_producte: productId,
                quantity: quantity
            },
            success: function(response) {
                $('.product-description').html(response);
                $.ajax({
                    url: "/../Controller/footer.php", 
                    type: "get",
                    success: function(footerContent){
                        $("#footer").html(footerContent);
                    }
                });
            },
            error: function() {
                alert('Hubo un error al añadir el producto al carrito');
            }
        });
    });
});



window.onload = function() {
    var player = document.getElementById('musicPlayer');
    player.play();
    player.pause();
}


function musica() {
    document.getElementById('musicPlayer').play();
}


