<?php include("conexao_db.php"); ?>
<?php include("banco_evento.php"); ?>
<?php
    $id = $_POST['id'];
    if(removeEvento($conexao, $id)) :
    ?>
        <p class="text-success">Categoria foi removida com sucesso!</p>
    <?php
        else :
        $msg = mysqli_error($conexao);
    ?>
        <p class="text-danger">Não foi possivel remover a categoria!</p>
    <?php
        endif
    ?>