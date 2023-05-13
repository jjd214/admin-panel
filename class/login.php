<?php
class login extends config {

    public function login(){

        if (isset($_POST['submit'])){

            $username = $_POST['username'];
            $password = md5($_POST['password']);
            
            $connection = $this->openConnection();
            $stmt = $connection->prepare("SELECT * FROM `tbl_users` WHERE `username` = ? AND `password` = ?");
            $stmt->execute([$username,$password]);
            $user = $stmt->fetch();
            $result = $stmt->rowCount();

            if ($result == 1) {
                $this->set_session($user);
                header("Location: index.php");
            } else {
                echo '<div class=" col-md-4 alert alert-danger alert-dismissible fade show myalert" role="alert">
                    <strong></strong> Incorrect Username or Password!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                 </div>'; 
            }
        }
    }
    public function user_login() {
        
        if (isset($_POST['submit_user'])) {

            $username = $_POST['username'];
            $password = md5($_POST['password']);
            

            $connection = $this->openConnection();
            $stmt = $connection->prepare("SELECT * FROM `tbl_users` WHERE `username` = ? AND `password` = ?");
            $stmt->execute([$username,$password]);
            $data = $stmt->fetch();
            $result = $stmt->rowCount();

            if ($result == 1) {
                if (is_array($data)) { // check if $data is an array
                    $user_id = $data['id'];
                    $this->set_session($data);
                    header("Location: user_panel.php?id=$user_id");
                } else {
                    // handle error here
                    echo '<div class="col-md-4 alert alert-danger alert-dismissible fade show myalert" role="alert">
                            <strong></strong> An error occurred. Please try again.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                         </div>'; 
                }
            } else {
                echo '<div class="col-md-4 alert alert-danger alert-dismissible fade show myalert" role="alert">
                        <strong></strong> Incorrect Username or Password!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>'; 
            }
        }
    }
    # Session
    public function set_session($array){

        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['userdata'] = array (
            "fullname" => $array['firstname']." ".$array['lastname'],
            "access" => $array['access']
        );
        return $_SESSION['userdata'];
    }
    public function get_session(){

        if (!isset($_SESSION)) {
            session_start();
        }
        if (isset($_SESSION['userdata'])) {
            return $_SESSION['userdata'];
        } else {
            return null;
        }
    }
    public function logout() {
        
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['userdata'] = null;
        unset($_SESSION['userdata']);
    }

}
?>