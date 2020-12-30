<?php include("conexao_db.php"); ?>
<?php include("banco_desastre.php"); ?>
<?php
    $id = $_POST['id'];
    if(publicaDesastre($conexao, $id)) :
    ?>
        <p class="text-success">Evento foi publicado com sucesso!</p>
    <?php
        else :
        $msg = mysqli_error($conexao);
    ?>
        <p class="text-danger">Não foi possivel publicar o evento!</p>
    <?php
        endif
    ?>