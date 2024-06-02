<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>

<body>
    <h1>Register</h1>
    <form method="POST" action="?controller=usuario&action=register">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="role">Role:</label>
        <select id="role" name="role">
            <option value="admin">Admin</option>
            <option value="cliente">Cliente</option>
        </select>
        <br>
        <button type="submit">Register</button>
    </form>
    <a href="?controller=usuario&action=login">Login</a>
</body>

</html>