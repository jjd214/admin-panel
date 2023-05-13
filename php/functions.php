<?php

function view() {
    $view = new view();
    $view->view();

}
function view_users() {
    $view = new view();
    $view->view_users();

}
function view_userpanel () {
    $user_id = $_GET['id'];
    $view = new view();
    $view->view_userpanel($user_id);
}
function logout () {
    $logout = new login();
    $logout->logout();
}
function delete () {
    
    if (isset($_GET['delete'])) {
        $delete = new delete($_GET['delete']);
        $delete->delete();
        if ($delete->delete()) {
            echo '<div class=" col-md-9 alert alert-success alert-dismissible fade show" role="alert">
            <strong></strong> Deleted Data Successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';

        } else {
            echo '<div class=" col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong></strong> Deleted Task Error!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                 </div>';            
        }
    }
}

function edit () {

    if (isset($_GET['edit'])) {
        $edit = new edit($_GET['edit']);
        $edit->edit();
    }
    
}

function login() {
    $login = new login();
    $login->login();
}
function userlogin() {
    $userlogin = new login();
    $userlogin->user_login();
}
function signup() {
    $signup = new signup();
    $signup->signup();
}

function access() {
    
    $login = new login();
    $access = $login->get_session();

    if (isset($access)) {

        if ($access['access'] != "admin") {
            header("Location: user_login.php");
        }
    } else {
        header("Location: user_login.php");
    }
}
function access_userpanel() {

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // Do something with $id
        $login = new login();
        $access = $login->get_session();

        if (isset($access)) {
            
        } else {
            header("Location: user_login.php");
        }
    } else {
        header("Location: user_login.php");
    }
}

?>