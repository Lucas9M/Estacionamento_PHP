<!DOCTYPE html>
<html>

<head>
    <title>Detalhes do Andar</title>
</head>

<body>
    <h1>Detalhes do Andar</h1>
    <p><strong>ID Estacionamento:</strong> <?php echo $item['idEstacionamento']; ?></p>
    <p><strong>Nome do Setor:</strong> <?php echo $item['nomeSetor']; ?></p>
    <a href="?controller=andar&action=index">Voltar</a>
</body>

</html>