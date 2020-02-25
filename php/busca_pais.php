<?php include("conexao_db.php"); ?>
<?php include("banco_desastre.php"); ?>
<?php
    $desastres = listaPaises($conexao); 
?>

<option value="">Todos</option>
<?php foreach($desastres as $desastre) : ?>
<option value="<?=$desastre['nm_pais']?>"><?=$desastre['nm_pais']?></option>
<?php endforeach ?>