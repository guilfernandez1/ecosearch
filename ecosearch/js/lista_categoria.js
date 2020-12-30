function chamaListaEvento(tbody){
    $.ajax({
        type: "GET",
        url: "php/lista_categoria.php",
        data: null,
    })
    .done(function(retorno){
        $(tbody).html(retorno);
    });
}