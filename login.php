<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="loginstyle.css">
        <link rel="stylesheet" href="loadingDiv.css">
        <script src="loading.js"></script>
    <title>Login</title>
    </head>

    <body>
        <div id="loadingPreview" class="loading-preview">
            <div class="loading-spinner"></div>
        </div>
        <div class="login-form">
            <form action="login.php" method="post">
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
                    <input type="submit" name="submit" id="submit" value="Login">
                    <br>
                    
            </form>
            <form method="post" action="createAcc.php">
                <input type="submit" name="createAcc" value="Create Account">
            </form>
            <form>
                <a href="login.php">Forgot password?</a>
            </form>
        </div>

        <div class="footer">
            <p>2023 Example Login Page. All Rights Reserved.</p>
        </div>
        <script src="loading.js"></script>
    </body>
</html>

<?php 


    
    if($_SERVER['REQUEST_METHOD'] == "POST" &&  isset($_POST['submit'])) {

        include("connections.php");

        

        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $query = "SELECT password FROM users WHERE username = '{$email}'; ";
       


        try {
            
            
    
        } catch (mysqli_sql_exception) {
            echo "Error: " . mysqli_error($conn);
        }
    
    } 
    

    

?>
