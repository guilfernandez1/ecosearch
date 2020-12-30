<?php 
    session_start(); 
    if (isset($_SESSION["EcoSearch"]["logado"]) && $_SESSION["EcoSearch"]["logado"] == true) {$logado = true;} else {$logado = false; }

    include("conexao_db.php"); 
    include("banco_sugestao.php"); 

    $loginUser = $_SESSION['EcoSearch']['loginUser'];
?>
<?php
    $sugestoes = listaSugestaoUsuario($conexao, $loginUser);
?>
<?php foreach ($sugestoes as $sugestao) : ?>
    <tr>
        <td><?=$sugestao['nm_desastre']?></td>
        <td><?=$sugestao['ds_sugestao']?></td>
    </tr>
<?php endforeach ?>