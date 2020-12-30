function chamaFormularioAlteraDesastre(div, _id){
    $.ajax({
        type: "GET",
        url: "php/busca_desastre.php",
        data: {id: _id},
    })
    .done(function(retorno){
        $(div).html(retorno);
    });
}