<!DOCTYPE html>
<html>

<head>
    <title>Listagem de Vagas</title>
</head>

<body>
    <h1>Listagem de Vagas</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>ID Andar</th>
            <th>Quantidade Total</th>
            <th>Quantidade Ocupada</th>
            <th>Quantidade Disponível</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($items as $item) : ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['idAndar']; ?></td>
                <td><?php echo $item['quantidadeTotal']; ?></td>
                <td><?php echo $item['quantidadeOcupada']; ?></td>
                <td><?php echo $item['quantidadeDisponivel']; ?></td>
                <td>
                    <a href="?controller=vagas&action=show&id=<?php echo $item['id']; ?>">Ver</a>
                    <a href="?controller=vagas&action=edit&id=<?php echo $item['id']; ?>">Editar</a>
                    <a href="?controller=vagas&action=delete&id=<?php echo $item['id']; ?>">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>