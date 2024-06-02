<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <form method="POST" action="/login">
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
    <a href="/register">Register</a>
</body>

</html>