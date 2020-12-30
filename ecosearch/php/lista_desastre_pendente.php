<?php include("conexao_db.php"); ?>
<?php include("banco_desastre.php"); ?>
<?php
    $desastres = listaDesastrePendente($conexao);
?>
<?php foreach ($desastres as $desastre) : ?>
    <tr>
        <td><?=$desastre['nm_desastre']?></td>
        <td><?=$desastre['nm_evento']?></td>
        <td><?=$desastre['nm_pais']?></td>
        <td><?=$desastre['nm_usuarioCriador']?></td>
        <td>
            <button class="btn btn-success"  onclick="if (confirm('Tem certeza que deseja publicar este evento?')) 
                {
                    publica_desastre(<?=$desastre['cd_desastre']?>);
                }">Publicar
            </button>
        </td>
        <td><a class="btn btn-primary" href="formulario_altera_desastre.html?id=<?=$desastre["cd_desastre"]?>">Alterar</a></td>
        <td>
            <button class="btn btn-danger"  onclick="if (confirm('Tem certeza que deseja remover este evento?')) 
            {
                remove_desastre_lista(<?=$desastre['cd_desastre']?>);
            }">Remover
            </button>
        </td>
    </tr>
<?php endforeach ?>