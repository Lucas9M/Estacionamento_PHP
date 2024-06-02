<!DOCTYPE html>
<html>

<head>
    <title>Deletar Andar</title>
</head>

<body>
    <h1>Deletar Andar</h1>
    <p>Tem certeza que deseja deletar <?php echo $item['nomeSetor']; ?>?</p>
    <form action="?controller=andar&action=delete&id=<?php echo $item['id']; ?>" method="post">
        <button type="submit">Deletar</button>
    </form>
    <a href="?controller=andar&action=index">Cancelar</a>
</body>

</html>