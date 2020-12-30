<?php
session_start();

include("conexao_db.php");
include("banco_usuario.php");

$login = $_POST["login"];
$senha = $_POST["senha"];

$retorno = verificaLogin($conexao, $login, $senha);

if(!$retorno == TRUE) {
    header ("Location: ../login.html");
} else {
    $_SESSION["EcoSearch"]["logado"] = TRUE;
    $_SESSION["EcoSearch"]["nomeUser"] = $retorno["nm_usuario"];
    $_SESSION["EcoSearch"]["loginUser"] = $retorno["lg_usuario"];
    $_SESSION["EcoSearch"]["tipoUser"] = $retorno["tp_usuario"];
    header ("Location: ../linha_do_tempo.html");
}
?>