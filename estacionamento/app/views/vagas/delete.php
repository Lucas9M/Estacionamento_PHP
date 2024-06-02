<!DOCTYPE html>
<html>

<head>
    <title>Deletar Vaga</title>
</head>

<body>
    <h1>Deletar Vaga</h1>
    <p>Tem certeza que deseja deletar esta vaga?</p>
    <form action="?controller=vagas&action=delete&id=<?php echo $item['id']; ?>" method="post">
        <button type="submit">Deletar</button>
    </form>
    <a href="?controller=vagas&action=index">Cancelar</a>
</body>

</html>