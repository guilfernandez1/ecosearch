function chamaListaSugestao(tbody){
    $.ajax({
        type: "GET",
        url: "php/lista_sugestao_usuario.php",
        data: null,
    })
    .done(function(retorno){
        $(tbody).html(retorno);
    });
}