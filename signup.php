<?php
require_once('php/init.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/outer.css">
    <title>Document</title>
</head>
<body>
    <?php signup(); ?>
    <div class="container">

        <div class="box form-box">
            <div class="field input">
        <form action="" method="POST" onsubmit="return validateSignUpForm()">

        <div class="field input">  
        <label>First Name</label>
            <input type="text" name="fname" id="fname" placeholder="Enter your Firstname"><br>
         </div>
            
        <div class="field input">
        <label>Last Name</label>
            <input type="text" name="lname" id="lname" placeholder="Enter your Lastname"><br>
        </div>
            
        <div class="field input">
        <label>Age</label>
            <input type="number" name="age" id="age" placeholder="Enter your Age"><br>
            </div>   
         
         <div class="field input">
         <label>Phone Number</label>
            <input type="text" name="phone_num" id="phone_num" placeholder="Enter your Phone Number"><br>
        </div>
        
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
            <input type="submit" class="btn" name="submit" value="Sign Up">
       
        </div>

        <div class="link">
        <p>Already have account? <a href="user_login.php">Sign in</a></p>
        </div>
        </div>

     </form>
     </div>
    </div>
    <script src="index.js"></script>
</body>
</html>