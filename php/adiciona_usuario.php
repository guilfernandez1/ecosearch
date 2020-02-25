<?php include("conexao_db.php"); ?>
<?php include("banco_usuario.php"); ?>
<?php
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if(buscaUsuario($conexao, $login) == true) : 
    ?>
        <p class="text-danger">Login <?=$login?> já existente!</p>
    <?php 
    elseif(insereUsuario($conexao, $nome, $login, $senha)) : 
    ?>
        <p class="text-success">Login <?=$login?> cadastrado com sucesso!</p>
        <?php
        else :
            $msg = mysqli_error($conexao);
        ?>  
            <p class="text-danger">Erro ao cadastrar <?=$login?>!</p>
    <?php endif ?>