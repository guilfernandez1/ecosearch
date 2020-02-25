<?php include("conexao_db.php"); ?>
<?php include("banco_usuario.php"); ?>
<?php
    $id = $_POST['id'];
    if(removeUsuario($conexao, $id)) :
    ?>
        <p class="text-success">Usuario foi removido com sucesso!</p>
    <?php
        else :
        $msg = mysqli_error($conexao);
    ?>
        <p class="text-danger">Não foi possivel remover o usuario!</p>
    <?php
        endif
    ?>