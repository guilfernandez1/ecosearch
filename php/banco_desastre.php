<?php
    function insereDesastre($conexao, $nome, $descricao, $data, $pais, $estado, $cidade, $evento_id, $referencia, $nomeUser) {
        $query = "insert into tb_desastre (nm_desastre, ds_desastre, dt_desastre, nm_pais, nm_estado, nm_cidade, evento_id, lk_nome, pd_desastre, nm_usuarioCriador) values ('{$nome}', '{$descricao}', '{$data}', '{$pais}', '{$estado}', '{$cidade}', {$evento_id}, '{$referencia}', 1, '{$nomeUser}')";
        return mysqli_query($conexao, $query);
    }

    function listaDesastre($conexao) {
        $desastres = array();
        $query = "select d.cd_desastre, d.nm_desastre, d.ds_desastre, date_format(d.dt_desastre, '%d/%m/%Y') as dt_desastre_format, d.nm_pais, d.nm_estado, d.nm_cidade, e.nm_evento, d.lk_nome
        from tb_desastre as d
        join tb_evento as
        e on e.cd_evento=d.evento_id
        where pd_desastre = 0
        order by dt_desastre asc";
        $resultado = mysqli_query($conexao, $query);
        while($desastre = mysqli_fetch_assoc($resultado)) {
            array_push($desastres, $desastre);
        }
        return $desastres;
    }

    function listaDesastreTodos($conexao, $nomeUser) {
        $desastres = array();
        $query = "select d.cd_desastre, d.nm_desastre, d.nm_pais, e.nm_evento, d.pd_desastre
        from tb_desastre as d
        join tb_evento as
        e on e.cd_evento=d.evento_id
        where nm_usuarioCriador = '{$nomeUser}'
        order by dt_desastre asc";
        $resultado = mysqli_query($conexao, $query);
        while($desastre = mysqli_fetch_assoc($resultado)) {
            array_push($desastres, $desastre);
        }
        return $desastres;
    }

    function listaDesastrePendente($conexao) {
        $desastres = array();
        $query = "select d.cd_desastre, d.nm_desastre, d.ds_desastre, date_format(d.dt_desastre, '%d/%m/%Y') as dt_desastre_format, d.nm_pais, d.nm_estado, d.nm_cidade, e.nm_evento, d.lk_nome, d.nm_usuarioCriador
        from tb_desastre as d
        join tb_evento as
        e on e.cd_evento=d.evento_id
        where pd_desastre = 1
        order by dt_desastre asc";
        $resultado = mysqli_query($conexao, $query);
        while($desastre = mysqli_fetch_assoc($resultado)) {
            array_push($desastres, $desastre);
        }
        return $desastres;
    }

    function listaDesastreUmPaisTodosEventos($conexao, $pais) {
        $desastresPais = array();
        $query = "select d.cd_desastre, d.nm_desastre, d.ds_desastre, date_format(d.dt_desastre, '%d/%m/%Y') as dt_desastre_format, d.nm_pais, d.nm_estado, d.nm_cidade, e.nm_evento, d.lk_nome
        from tb_desastre as d
        join tb_evento as
        e on e.cd_evento=d.evento_id
        where nm_pais='{$pais}'";
        $resultado = mysqli_query($conexao, $query);
        while($desastre = mysqli_fetch_assoc($resultado)) {
            array_push($desastresPais, $desastre);
        }
        return $desastresPais;
    }

    function listaDesastreTodosPaisUmEventos($conexao, $evento) {
        $desastresPais = array();
        $query = "select d.cd_desastre, d.nm_desastre, d.ds_desastre, date_format(d.dt_desastre, '%d/%m/%Y') as dt_desastre_format, d.nm_pais, d.nm_estado, d.nm_cidade, e.nm_evento, d.lk_nome
        from tb_desastre as d
        join tb_evento as
        e on e.cd_evento=d.evento_id
        where evento_id={$evento}";
        $resultado = mysqli_query($conexao, $query);
        while($desastre = mysqli_fetch_assoc($resultado)) {
            array_push($desastresPais, $desastre);
        }
        return $desastresPais;
    }

    function listaDesastreUmPaisUmEventos($conexao, $pais, $evento) {
        $desastresPais = array();
        $query = "select d.cd_desastre, d.nm_desastre, d.ds_desastre, date_format(d.dt_desastre, '%d/%m/%Y') as dt_desastre_format, d.nm_pais, d.nm_estado, d.nm_cidade, e.nm_evento, d.lk_nome
        from tb_desastre as d
        join tb_evento as
        e on e.cd_evento=d.evento_id
        where evento_id={$evento} AND nm_pais='{$pais}'";
        $resultado = mysqli_query($conexao, $query);
        while($desastre = mysqli_fetch_assoc($resultado)) {
            array_push($desastresPais, $desastre);
        }
        return $desastresPais;
    }

    function listaPaises($conexao) {
        $paises = array();
        $query = "select distinct(nm_pais) from tb_desastre";
        $resultado = mysqli_query($conexao, $query);
        while($pais = mysqli_fetch_assoc($resultado)) {
            array_push($paises, $pais);
        }
        return $paises;
    }

    function listaEventos($conexao) {
        $eventos = array();
        $query = "select distinct(e.nm_evento), d.evento_id from tb_desastre as d
        join tb_evento as e
        on e.cd_evento=d.evento_id";
        $resultado = mysqli_query($conexao, $query);
        while($evento = mysqli_fetch_assoc($resultado)) {
            array_push($eventos, $evento);
        }
        return $eventos;
    }

    function removeDesastre($conexao, $id) {
        $query = "delete from tb_desastre where cd_desastre={$id}";
        return mysqli_query($conexao, $query);
    }

    function buscaDesastre($conexao, $id) {
        $query = "select * from tb_desastre where cd_desastre={$id}";
        $resultado = mysqli_query($conexao, $query);
        return mysqli_fetch_assoc($resultado);
    }

    function alteraDesastre($conexao, $id, $nome, $descricao, $data, $pais, $estado, $cidade, $evento_id, $referencia) {
        $query = "update tb_desastre set nm_desastre='{$nome}', ds_desastre='{$descricao}', dt_desastre='{$data}', nm_pais='{$pais}', nm_estado='{$estado}', nm_cidade='{$cidade}', evento_id={$evento_id}, lk_nome='{$referencia}' where cd_desastre={$id}";
        return mysqli_query($conexao, $query);
    }

    function publicaDesastre($conexao, $id) {
        $query = "update tb_desastre set pd_desastre = 0 where cd_desastre={$id}";
        return mysqli_query($conexao, $query);
    }