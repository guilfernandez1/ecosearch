<?php include("conexao_db.php"); ?>
<?php include("banco_sugestao.php"); ?>
<?php
    $descricao = $_POST['descricao'];
    $idEvento = $_POST['idEvento'];
    $loginUser = $_POST['loginUser'];

    if(insereSugestao($conexao, $descricao, $idEvento, $loginUser)) : ?>
        <p class="text-success">Sugestão de alteração enviada com sucesso!</p>
        <?php
            else :
            $msg = mysqli_error($conexao);
        ?> 
        <p class="text-danger">Sua sugestão não foi enviada!</p>
        <?php
            endif
        ?>