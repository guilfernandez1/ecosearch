function chamaListaDesastre(tbody){
    $.ajax({
        type: "GET",
        url: "php/lista_desastre_pendente.php",
        data: null,
    })
    .done(function(retorno){
        $(tbody).html(retorno);
    });
}