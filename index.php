<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <div class="login-container">
            <h2>Login</h2>
            <form action = "login_process.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Login">
            </form>
        </div>
    </body>
</html>