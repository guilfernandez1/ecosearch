<?php include("conexao_db.php"); ?>
<?php include("banco_usuario.php"); ?>
<?php
    $usuarios = listaUsuario($conexao);
?>
<?php foreach ($usuarios as $usuario) : ?>
    <tr>
        <td><?=$usuario['nm_usuario']?></td>
        <td><?=$usuario['lg_usuario']?></td>
        <td><?=$usuario['tp_usuario']?></td>
        <td>
            <button class="btn btn-danger"  onclick="if (confirm('Tem certeza que deseja remover este usuario?')) 
            {
                remove_usuario_lista(<?=$usuario['cd_usuario']?>);
            }">Remover
            </button>
        </td>
    </tr>
<?php endforeach ?>