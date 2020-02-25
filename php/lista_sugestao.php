<?php include("conexao_db.php"); ?>
<?php include("banco_sugestao.php"); ?>
<?php
    $sugestoes = listaSugestao($conexao);
?>
<?php foreach ($sugestoes as $sugestao) : ?>
    <tr>
        <td><?=$sugestao['nm_desastre']?></td>
        <td><?=$sugestao['ds_sugestao']?></td>
        <td><?=$sugestao['nm_usuario']?></td>
        <td>
            <button class="btn btn-danger"  onclick="if (confirm('Tem certeza que deseja remover esta sugestao?')) 
            {
                remove_sugestao_lista(<?=$sugestao['cd_sugestao']?>);
            }">Remover
            </button>
        </td>
    </tr>
<?php endforeach ?>