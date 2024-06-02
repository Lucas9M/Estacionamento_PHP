<!DOCTYPE html>
<html>

<head>
    <title>Listagem de Andares</title>
</head>

<body>
    <h1>Listagem de Andares</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>ID Estacionamento</th>
            <th>Nome do Setor</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($items as $item) : ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['idEstacionamento']; ?></td>
                <td><?php echo $item['nomeSetor']; ?></td>
                <td>
                    <a href="?controller=andar&action=show&id=<?php echo $item['id']; ?>">Ver</a>
                    <a href="?controller=andar&action=edit&id=<?php echo $item['id']; ?>">Editar</a>
                    <a href="?controller=andar&action=delete&id=<?php echo $item['id']; ?>">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>