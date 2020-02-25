<?php include("conexao_db.php"); ?>
<?php include("banco_desastre.php"); ?>
<?php
    $desastres = listaDesastre($conexao);
?>
<?php foreach ($desastres as $desastre) : ?>
    <tr>
        <td><?=$desastre['nm_desastre']?></td>
        <td><?=$desastre["dt_desastre_format"]?></td>
        <td><?=$desastre['nm_evento']?></td>
        <td><?=$desastre['nm_pais']?></td>
        <td><?=$desastre['nm_estado']?></td>
        <td><?=$desastre['nm_cidade']?></td>
        <td><a class="btn btn-primary" href="formulario_altera_desastre.html?id=<?=$desastre["cd_desastre"]?>">Alterar</a></td>
        <td>
            <button class="btn btn-danger"  onclick="
            if (confirm('Tem certeza que deseja remover este evento?')) 
            {
                remove_desastre_lista(<?=$desastre['cd_desastre']?>);
            }">Remover
            </button>
        </td>
    </tr>
<?php endforeach ?>