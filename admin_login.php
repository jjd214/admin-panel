<?php
require_once('php/init.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/outer.css">
    <title>Login</title>
</head>
<body>
    <?php login(); ?>
    <div class="container">
        <div class="box form-box">
            <header>Log In as Admin</header>
        <form method="POST">
        
        <div class="field input">
            <label>Username</label>
            <input type="text" name="username" id="username" placeholder="Enter your Username"><br>
        </div>

        <div class="field input">
            <label>Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your Password"><br>
        </div> 
        
        <div class="field">
            <div class="button">
                <input type="submit" class="btn" name="submit" value="Log In">
            </div>

        <div class="link">
        <p>don't have account? <a class="sign" href="signup.php">Sign Up</a></p>
        </div> 
        </div>
        <div class="link">
        <a class="sign" href="admin_login.php">Admin</a><p> Or </p> <a class="sign" href="user_login.php">User</a> 
        </div> 

    </form>
        </div>
    </div>

    <script src="js/boostrap.min.js"></script>
</body>
</html>