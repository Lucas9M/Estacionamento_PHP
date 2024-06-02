<!DOCTYPE html>
<html>
head>
<title>Editar Vaga</title>
</head>

<body>
    <h1>Editar Vaga</h1>
    <form action="?controller=vagas&action=update&id=<?php echo $item['id']; ?>" method="post">
        <label for="idAndar">ID Andar:</label>
        <input type="text" id="idAndar" name="idAndar" value="<?php echo $item['idAndar']; ?>">
        <label for="quantidadeTotal">Quantidade Total:</label>
        <input type="text" id="quantidadeTotal" name="quantidadeTotal" value="<?php echo $item['quantidadeTotal']; ?>">
        <label for="quantidadeOcupada">Quantidade Ocupada:</label>
        <input type="text" id="quantidadeOcupada" name="quantidadeOcupada" value="<?php echo $item['quantidadeOcupada']; ?>">
        <label for="quantidadeDisponivel">Quantidade Disponível:</label>
        <input type="text" id="quantidadeDisponivel" name="quantidadeDisponivel" value="<?php echo $item['quantidadeDisponivel']; ?>">
        <button type="submit">Atualizar</button>
    </form>
</body>

</html>