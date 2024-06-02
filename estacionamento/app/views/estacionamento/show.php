<!DOCTYPE html>
<html>

<head>
    <title>Detalhes do Estacionamento</title>
</head>

<body>
    <h1><?php echo $item['nome']; ?></h1>
    <p><strong>Endereço:</strong> <?php echo $item['endereco']; ?></p>
    <p><strong>CNPJ:</strong> <?php echo $item['CNPJ']; ?></p>
    <p><strong>Preço por Hora:</strong> <?php echo $item['precoHora']; ?></p>
    <p><strong>Admin ID:</strong> <?php echo $item['admin_id']; ?></p>
    <a href="?controller=estacionamento&action=index">Voltar</a>
</body>

</html>