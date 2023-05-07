<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="loginstyle.css">
    </head>

    <body>
        <div class="login-form">
            <form action="index.php" method="post">
                    <h2>Login</h2>
                    <label for="email">Email</label>
                    <br>
                    <input type="email" name="email" id="email" placeholder="you@example.com" required>
                    <br>
                    <label for="password">Password</label>
                    <br>
                    <input type="password" name="password" id="password" placeholder="Enter 8 characters or more" required>
                    <br>
                    <label for="rememberMe">Remember Me?</label>
                    <input type="checkbox" name="rememberMe" id="rememberMe">
                    <br>
                    <input type="submit" value="Login">
                    <br>
                    <input type="submit" value="Create Account">
                    <br>
                    <a href="login.php">Forgot password?</a>
            </form>
        </div>

        <div class="footer">
            <p>2023 Example Login Page. All Rights Reserved.</p>
        </div>
    </body>
</html>
