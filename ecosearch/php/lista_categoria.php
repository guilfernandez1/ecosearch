<?php include("conexao_db.php"); ?>
<?php include("banco_evento.php"); ?>
<?php
    $eventos = listaEvento($conexao);
?>
<?php foreach ($eventos as $evento) : ?>
    <tr>
        <td><?=$evento['nm_evento']?></td>
        <td>
            <button class="btn btn-danger"  onclick="if (confirm('Tem certeza que deseja remover esta categoria?')) 
            {
                remove_evento_lista(<?=$evento['cd_evento']?>);
            }">Remover
            </button>
        </td>
    </tr>
<?php endforeach ?>