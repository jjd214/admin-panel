<?php

class signup extends config {

    public function signup(){

        if (isset($_POST['submit'])){

            $firstname = $_POST['fname'];
            $lastname = $_POST['lname'];
            $age = $_POST['age'];
            $phone_number = $_POST['phone_num'];
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            if ($this->check_username_exist($username) == 0){
                $connection = $this->openConnection();
                $stmt = $connection->prepare("INSERT INTO `tbl_users` (`firstname`,`lastname`,`age`,`phone_number`,`username`,`password`) VALUES (?,?,?,?,?,?)");
                $stmt->execute([$firstname,$lastname,$age,$phone_number,$username,$password]);
                $result = $stmt->rowCount();

                if ($result == 1){
                    header("Location: admin_login.php");
                }
            } else {
                echo "username already exist";
            }

        }
    }
    public function check_username_exist($username){

        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM `tbl_users` WHERE `username` = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();
        $result = $stmt->rowCount();

        if ($result > 0){
            return $result;
        }
    }
}
?>