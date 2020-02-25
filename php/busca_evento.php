<?php include("conexao_db.php"); ?>
<?php include("banco_desastre.php"); ?>
<?php
    $eventos = listaEventos($conexao); 
?>

<option value="">Todos</option>
<?php foreach($eventos as $evento) : ?>
<option value="<?=$evento['evento_id']?>"><?=$evento['nm_evento']?></option>
<?php endforeach ?>
