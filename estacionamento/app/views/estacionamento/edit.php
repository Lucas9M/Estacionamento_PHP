<!DOCTYPE html>
<html>

<head>
    <title>Editar Estacionamento</title>
</head>

<body>
    <h1>Editar Estacionamento</h1>
    <form action="?controller=estacionamento&action=update&id=<?php echo $item['id']; ?>" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $item['nome']; ?>">
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" value="<?php echo $item['endereco']; ?>">
        <label for="CNPJ">CNPJ:</label>
        <input type="text" id="CNPJ" name="CNPJ" value="<?php echo $item['CNPJ']; ?>">
        <label for="precoHora">Preço por Hora:</label>
        <input type="text" id="precoHora" name="precoHora" value="<?php echo $item['precoHora']; ?>">
        <label for="admin_id">Admin ID:</label>
        <input type="text" id="admin_id" name="admin_id" value="<?php echo $item['admin_id']; ?>">
        <button type="submit">Atualizar</button>
    </form>
</body>

</html>