<?php include("conexao_db.php"); ?>
<?php include("banco_sugestao.php"); ?>
<?php
    $id = $_POST['id'];
    if(removeSugestao($conexao, $id)) :
    ?>
        <p class="text-success">Sugestão foi removido com sucesso!</p>
    <?php
        else :
        $msg = mysqli_error($conexao);
    ?>
        <p class="text-danger">Não foi possivel remover a sugestão!</p>
    <?php
        endif
    ?>