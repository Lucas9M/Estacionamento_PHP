<!DOCTYPE html>
<html>

<head>
    <title>Editar Andar</title>
</head>

<body>
    <h1>Editar Andar</h1>
    <form action="?controller=andar&action=update&id=<?php echo $item['id']; ?>" method="post">
        <label for="idEstacionamento">ID Estacionamento:</label>
        <input type="text" id="idEstacionamento" name="idEstacionamento" value="<?php echo $item['idEstacionamento']; ?>">
        <label for="nomeSetor">Nome do Setor:</label>
        <input type="text" id="nomeSetor" name="nomeSetor" value="<?php echo $item['nomeSetor']; ?>">
        <button type="submit">Atualizar</button>
    </form>
</body>

</html>