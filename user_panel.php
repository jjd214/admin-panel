<?php
require_once('php/init.php');
access_userpanel();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>UserPanel</title>
</head>
<body>
    
    <div class="container-fluid bg-dark">
        <nav class="navbar navbar-expand-md navbar-dark"> <h5 style="color:white;">User Panel</h5>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="logout.php">Logout</a>
                </div>
            </div>
        </nav>
    </div>
    

    <div class="container mt-5">
        <form action="" method="GET">
            <div class="row">
            <div class="col-md-9 form-group">
                <input class="form-control" type="text" name="search" placeholder="Search" required/>
            </div>
            <div class="col-md">
                <input class="btn btn-success"type="submit" name="submit" value="Enter"/>
            </div>
            </div>
        </form>
    </div>

    <div class="container mt-5">
        <?php view_userpanel(); ?>
    </div>

    <div class="col-md mt-5">
        <form action="pdf_admin.php" method="POST" target="_blank">
            <input class="btn btn-dark mybtn"type="submit" value="Download PDF"/>
        </form>
    </div>

    <script src="js/boostrap.min.js"></script>
</body>
</html>