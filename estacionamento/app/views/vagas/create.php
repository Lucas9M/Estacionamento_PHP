<!DOCTYPE html>
<html>

<head>
    <title>Criar Vaga</title>
</head>

<body>
    <h1>Criar Nova Vaga</h1>
    <form action="?controller=vagas&action=create" method="post">
        <label for="idAndar">ID Andar:</label>
        <input type="text" id="idAndar" name="idAndar">
        <label for="quantidadeTotal">Quantidade Total:</label>
        <input type="text" id="quantidadeTotal" name="quantidadeTotal">
        <label for="quantidadeOcupada">Quantidade Ocupada:</label>
        <input type="text" id="quantidadeOcupada" name="quantidadeOcupada">
        <label for="quantidadeDisponivel">Quantidade Disponível:</label>
        <input type="text" id="quantidadeDisponivel" name="quantidadeDisponivel">
        <button type="submit">Criar</button>
    </form>
</body>

</html>