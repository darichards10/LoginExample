<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="createAcc.css">
        <link rel="stylesheet" href="loadingDiv.css">
        <script src="loading.js"></script>
    </head>

    <body>
        <div id="loadingPreview" class="loading-preview">
            <div class="loading-spinner"></div>
        </div>
        <div class="createAccForm">
            <form method="post" action="">
                    <h2>Create Account</h2>
                    <label for="email">Email</label>
                    <br>
                    <input type="email" name="email" id="email" placeholder="you@example.com" required>
                    <br>
                    <label for="password">Password</label>
                    <br>
                    <input type="password" name="password" id="password" placeholder="Enter 8 characters or more" required>
                    <br>
                    <label for="password">Re-type Password</label>
                    <br>
                    <input type="password" name="passwordRetype" id="passwordRetype" placeholder="Enter 8 characters or more" required>
                    <br>
                    <br>
                    <input type="submit" name="submit" id="submit" value="Create">
                    <br>

            </form>
        </div>
    </body>
</html>

<?php

    


?>