<?php 
    session_start(); 
    if (isset($_SESSION["EcoSearch"]["logado"]) && $_SESSION["EcoSearch"]["logado"] == true) {$logado = true;} else {$logado = false; }

    include("conexao_db.php"); 
    include("banco_desastre.php"); 

    $nomeUser = $_SESSION['EcoSearch']['nomeUser'];
?>
<?php
    $desastres = listaDesastreTodos($conexao, $nomeUser);
?>
<?php foreach ($desastres as $desastre) : ?>
    <tr>
        <td><?=$desastre['nm_desastre']?></td>
        <td><?=$desastre['nm_evento']?></td>
        <td><?=$desastre['nm_pais']?></td>
        <?php if($desastre['pd_desastre'] == 1) : ?>
        <td>Pendente</td>
        <?php elseif($desastre['pd_desastre'] == 0) : ?>
        <td>Publicado</td>
        <?php endif ?>
    </tr>
<?php endforeach ?>