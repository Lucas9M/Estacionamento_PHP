<?php
session_start();

// Verificar se o usuário está logado
$is_logged_in = isset($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Página Inicial</title>
</head>

<body>
    <?php if ($is_logged_in) : ?>
        <h1>Bem-vindo ao Sistema de Estacionamento</h1>
        <nav>
            <ul>
                <li><a href="?controller=estacionamento&action=index">Estacionamentos</a></li>
                <li><a href="?controller=andar&action=index">Andares</a></li>
                <li><a href="?controller=vagas&action=index">Vagas</a></li>
                <li><a href="?controller=usuario&action=list_users">Usuários</a></li>
                <li><a href="?controller=usuario&action=logout">Logout</a></li>
            </ul>
        </nav>
    <?php else : ?>
        <h1>Login</h1>
        <form method="POST" action="?controller=usuario&action=login">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <label for="remember">Remember me:</label>
            <input type="checkbox" id="remember" name="remember">
            <br>
            <button type="submit">Login</button>
        </form>
        <a href="?controller=usuario&action=register">Register</a>
    <?php endif; ?>
</body>

</html>