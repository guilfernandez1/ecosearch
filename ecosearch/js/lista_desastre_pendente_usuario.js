function chamaListaDesastre(tbody){
    $.ajax({
        type: "GET",
        url: "php/lista_desastre_pendente_usuario.php",
        data: null,
    })
    .done(function(retorno){
        $(tbody).html(retorno);
    });
}