<?php

    function listaEvento($conexao) {
        $eventos = array();
        $query = "select cd_evento, nm_evento from tb_evento";
        $resultado = mysqli_query($conexao, $query);
        while($evento = mysqli_fetch_assoc($resultado)) {
            array_push($eventos, $evento);
        }
        return $eventos;
    }

    function insereEvento($conexao, $evento) {
        $query = "insert into tb_evento (nm_evento) values ('{$evento}')";
        return mysqli_query($conexao, $query);
    }

    function removeEvento($conexao, $id) {
        $query = "delete from tb_evento where cd_evento={$id}";
        return mysqli_query($conexao, $query);
    }