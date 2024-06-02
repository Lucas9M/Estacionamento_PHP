<!DOCTYPE html>
<html>

<head>
    <title>Listagem de Estacionamentos</title>
</head>

<body>
    <h1>Listagem de Estacionamentos</h1>
    <?php if (!empty($items)) : ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>CNPJ</th>
                <th>Preço por Hora</th>
                <th>Admin ID</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($items as $item) : ?>
                <tr>
                    <td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['nome']; ?></td>
                    <td><?php echo $item['endereco']; ?></td>
                    <td><?php echo $item['CNPJ']; ?></td>
                    <td><?php echo $item['precoHora']; ?></td>
                    <td><?php echo $item['admin_id']; ?></td>
                    <td>
                        <a href="?controller=estacionamento&action=show&id=<?php echo $item['id']; ?>">Ver</a>
                        <a href="?controller=estacionamento&action=edit&id=<?php echo $item['id']; ?>">Editar</a>
                        <a href="?controller=estacionamento&action=delete&id=<?php echo $item['id']; ?>">Deletar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <p>Nenhum estacionamento encontrado.</p>
    <?php endif; ?>
</body>

</html>
