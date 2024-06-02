<!DOCTYPE html>
<html>

<head>
    <title>Detalhes da Vaga</title>
</head>

<body>
    <h1>Detalhes da Vaga</h1>
    <p><strong>ID Andar:</strong> <?php echo $item['idAndar']; ?></p>
    <p><strong>Quantidade Total:</strong> <?php echo $item['quantidadeTotal']; ?></p>
    <p><strong>Quantidade Ocupada:</strong> <?php echo $item['quantidadeOcupada']; ?></p>
    <p><strong>Quantidade Disponível:</strong> <?php echo $item['quantidadeDisponivel']; ?></p>
    <a href="?controller=vagas&action=index">Voltar</a>
</body>

</html>