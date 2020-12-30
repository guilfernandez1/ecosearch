<?php

    function insereUsuario($conexao, $nome, $login, $senha) {
        $query = "insert into tb_usuario (nm_usuario, lg_usuario, sn_usuario, tp_usuario) values ('{$nome}', '{$login}', '{$senha}', 1)";
        return mysqli_query($conexao, $query);
    }

    function buscaUsuario($conexao, $login) {
        $query = "select * from tb_usuario where lg_usuario='{$login}'";
        $resultado = mysqli_query($conexao, $query);
        return mysqli_fetch_assoc($resultado);
    }

    function verificaLogin($conexao, $login, $senha) {
        $query = "select nm_usuario, lg_usuario, tp_usuario from tb_usuario where lg_usuario='{$login}' AND sn_usuario='{$senha}'";
        $resultado = mysqli_query($conexao, $query);
        if(mysqli_num_rows($resultado) == 0) {
           return false; 
        } else {
            return mysqli_fetch_assoc($resultado);
        }
    }

    function listaUsuario($conexao) {
        $usuarios = array();
        $query = "select cd_usuario, nm_usuario, lg_usuario, tp_usuario from tb_usuario";
        $resultado = mysqli_query($conexao, $query);
        while($usuario = mysqli_fetch_assoc($resultado)) {
            array_push($usuarios, $usuario);
        }
        return $usuarios;
    }

    function removeUsuario($conexao, $id) {
        $query = "delete from tb_usuario where cd_usuario={$id}";
        return mysqli_query($conexao, $query);
    }