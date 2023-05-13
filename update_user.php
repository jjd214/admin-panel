<?php
require_once('php/init.php');
access();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark shadow">
      <span class="navbar-brand mb-0 h1">DashBoard</span>
    </nav>

    <div class="container mt-5">

    <?php edit(); ?>

    <form method="POST">
    <table class="table table-responsive mytable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">INFORMATION</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">First Name</th>
      <td><input type="text" name="fname" id="fname"></td>
    </tr>
    <tr>
      <th scope="row">Last Name</th>
      <td><input type="text" name="lname" id="lname"></td>
    </tr>
    <tr>
      <th scope="row">Age</th>
      <td><input type="number" name="age" id="age"></td>
    </tr>
    <tr>
      <th scope="row">Phone Number</th>
      <td><input type="text" name="phone_num" id="phone_num"></td>
    </tr>
    <tr>
      <th scope="row">Username</th>
      <td><input type="text" name="username" id="username"></td>
    </tr>
    <tr>
      <th scope="row">Access</th>
      <td><select class="dropdown" name="access" id="access">
            <option>user</option>
            <option>admin</option>
        </select></td>
    </tr>
  </tbody>
</table>
    <input class="btn btn-info mybtn" name="submit_update" type="submit" value="Update"/>
    </form>


    </div>
    
    <script src="js/boostrap.min.js"></script>
</body>
</html>