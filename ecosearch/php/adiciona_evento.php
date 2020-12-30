<?php include("conexao_db.php"); ?>
<?php include("banco_evento.php"); ?>
<?php
    $evento = $_POST['evento'];

    if(insereEvento($conexao, $evento)) : ?>
        <p class="text-success">Evento <?=$evento?> cadastrado com sucesso!</p>
        <?php
            else :
            $msg = mysqli_error($conexao);
        ?> 
        <p class="text-danger">Evento <?=$evento?> não foi cadastrado!</p>
        <?php
            endif
        ?>