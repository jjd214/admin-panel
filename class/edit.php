<?php
class edit extends config {

    public $id;

    public function __construct($id) {
        $this->id = $id;
    }

    public function edit () {

        if (isset($_POST['submit_update'])) {

            $firstname = $_POST['fname'];
            $lastname = $_POST['lname'];
            $age = $_POST['age'];
            $phone_number = $_POST['phone_num'];
            $username = $_POST['username'];
            $access = $_POST['access'];

            $connection = $this->openConnection();
            $stmt = $connection->prepare("UPDATE `tbl_users` SET `firstname` = '$firstname', `lastname` = '$lastname', `age` = '$age', `phone_number` = '$phone_number', `username` = '$username', `access` = '$access' WHERE `id` = '$this->id'");
            $stmt->execute();
            $count = $stmt->rowCount();

            if ($count == 1) {
                header("Location: index.php");
                echo '<div class=" col-md-5 alert alert-info alert-dismissible fade show myalert" role="alert">
                    <strong></strong> Edited Data Successfully!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            } else {
                echo '<div class=" col-md-9 alert alert-success alert-dismissible fade show" role="alert">
                    <strong></strong> Edited Data Error!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            }
        }
    }
}
?>