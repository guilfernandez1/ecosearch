function chamaListaTiposEventos(div){
    $.ajax({
        type: "GET",
        url: "php/lista_evento.php",
        data: null,
    })
    .done(function(retorno){
        $(div).html(retorno);
    });
}