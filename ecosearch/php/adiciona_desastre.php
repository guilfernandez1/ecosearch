<?php 
    session_start(); 
    if (isset($_SESSION["EcoSearch"]["logado"]) && $_SESSION["EcoSearch"]["logado"] == true) {$logado = true;} else {$logado = false; }

    include("conexao_db.php"); 
    include("banco_desastre.php"); 
?>
<?php
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $pais = $_POST['country'];
    $estado = $_POST['state'];
    $cidade = $_POST['city'];
    $evento_id = $_POST['evento'];
    $referencia = $_POST['referencia'];
    $nomeUser = $_SESSION['EcoSearch']['nomeUser'];

    if(insereDesastre($conexao, $nome, $descricao, $data, $pais, $estado, $cidade, $evento_id, $referencia, $nomeUser)) : ?>
        <p class="text-success">Evento <?=$nome?> cadastrado com sucesso!</p>
        <?php
            else :
            $msg = mysqli_error($conexao);
        ?> 
        <p class="text-danger">Evento <?=$nome?> não foi cadastrado!</p>
        <?php
            endif
        ?>