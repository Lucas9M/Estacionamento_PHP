<!DOCTYPE html>
<html>

<head>
    <title>Deletar Estacionamento</title>
</head>

<body>
    <h1>Deletar Estacionamento</h1>
    <p>Tem certeza que deseja deletar <?php echo $item['nome']; ?>?</p>
    <form action="?controller=estacionamento&action=delete&id=<?php echo $item['id']; ?>" method="post">
        <button type="submit">Deletar</button>
    </form>
    <a href="?controller=estacionamento&action=index">Cancelar</a>
</body>

</html>