<!DOCTYPE html>
<html>

<head>
    <title>Criar Andar</title>
</head>

<body>
    <h1>Criar Novo Andar</h1>
    <form action="?controller=andar&action=create" method="post">
        <label for="idEstacionamento">ID Estacionamento:</label>
        <input type="text" id="idEstacionamento" name="idEstacionamento">
        <label for="nomeSetor">Nome do Setor:</label>
        <input type="text" id="nomeSetor" name="nomeSetor">
        <button type="submit">Criar</button>
    </form>
</body>

</html>