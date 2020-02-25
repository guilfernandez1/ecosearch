function chamaListaUsuario(tbody){
    $.ajax({
        type: "GET",
        url: "php/lista_usuario.php",
        data: null,
    })
    .done(function(retorno){
        $(tbody).html(retorno);
    });
}