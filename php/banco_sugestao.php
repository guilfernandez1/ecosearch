<?php

    function listaSugestao($conexao) {
        $desastres = array();
        $query = "select s.cd_sugestao, s.ds_sugestao, d.nm_desastre, s.nm_usuario
        from tb_sugestao as s
        join tb_desastre as d
        on d.cd_desastre=s.cd_desastre";
        $resultado = mysqli_query($conexao, $query);
        while($desastre = mysqli_fetch_assoc($resultado)) {
            array_push($desastres, $desastre);
        }
        return $desastres;
    }

    function listaSugestaoUsuario($conexao, $loginUser) {
        $desastres = array();
        $query = "select s.cd_sugestao, s.ds_sugestao, d.nm_desastre
        from tb_sugestao as s
        join tb_desastre as d
        on d.cd_desastre=s.cd_desastre
        where s.nm_usuario = '{$loginUser}'";
        $resultado = mysqli_query($conexao, $query);
        while($desastre = mysqli_fetch_assoc($resultado)) {
            array_push($desastres, $desastre);
        }
        return $desastres;
    }

    function insereSugestao($conexao, $descricao, $idEvento, $loginUser) {
        $query = "insert into tb_sugestao (ds_sugestao, cd_desastre, nm_usuario) values ('{$descricao}', {$idEvento}, '{$loginUser}')";
        return mysqli_query($conexao, $query);
    }

    function removeSugestao($conexao, $id) {
        $query = "delete from tb_sugestao where cd_sugestao={$id}";
        return mysqli_query($conexao, $query);
    }