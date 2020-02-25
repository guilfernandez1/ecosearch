function chamaLinhaDoTempo(div, callback) {
    $.ajax({
        type: "GET",
        url: "php/linha_do_tempo.php",
        data: null,
    })
    .done(function(retorno){
        $(div).html(retorno);
        callback();
    });
}

function chamaLinhaDoTempoPais(div, _pais, _evento, callback) {
    $.ajax({
        type: "GET",
        url: "php/linha_do_tempo_pais.php",
        data: {pais: _pais,
               evento: _evento},
    })
    .done(function(retorno){
        $(div).html(retorno);
        callback();
    });
}

function listaEventos(select) {
    $.ajax({
        type: "GET",
        url: "php/busca_evento.php",
        data: null,
        })
        .done(function(retorno){
        $(select).html(retorno);
    });
}

function listaPaises(select) {
    $.ajax({
        type: "GET",
        url: "php/busca_pais.php",
        data: null,
        })
        .done(function(retorno){
        $(select).html(retorno);
    });
}