function chamaListaSugestao(tbody){
    $.ajax({
        type: "GET",
        url: "php/lista_sugestao.php",
        data: null,
    })
    .done(function(retorno){
        $(tbody).html(retorno);
    });
}