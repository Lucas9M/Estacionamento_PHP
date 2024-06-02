<!DOCTYPE html>
<html>

<head>
    <title>Criar Estacionamento</title>
</head>

<body>
    <h1>Criar Novo Estacionamento</h1>
    <form action="?controller=estacionamento&action=create" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco">
        <label for="CNPJ">CNPJ:</label>
        <input type="text" id="CNPJ" name="CNPJ">
        <label for="precoHora">Preço por Hora:</label>
        <input type="text" id="precoHora" name="precoHora">
        <label for="admin_id">Admin ID:</label>
        <input type="text" id="admin_id" name="admin_id">
        <button type="submit">Criar</button>
    </form>
    
</body>

</html>