<?php include("conexao_db.php"); ?>
<?php include("banco_desastre.php"); ?>
<?php
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $pais = $_POST['country'];
    $estado = $_POST['state'];
    $cidade = $_POST['city'];
    $evento_id = $_POST['evento_id'];
    $referencia = $_POST['referencia'];

    if(alteraDesastre($conexao, $id, $nome, $descricao, $data, $pais, $estado, $cidade, $evento_id, $referencia)) : 
    ?>
        <p class="text-success">Evento <?=$nome?> foi alterado com sucesso!</p>
    <?php
        else :
        $msg = mysqli_error($conexao);
    ?>
        <p class="text-danger">Não foi possivel alterar <?=$nome?></p>
    <?php
    endif
    ?>