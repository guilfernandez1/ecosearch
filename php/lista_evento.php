<?php include("conexao_db.php"); ?>
<?php include("banco_evento.php"); ?>
<?php
    $eventos = listaEvento($conexao); 
?>

<option value="">Selecione um evento</option>
<?php foreach($eventos as $evento) : ?>
<option value="<?=$evento['cd_evento']?>"><?=$evento['nm_evento']?></option>
<?php endforeach ?>