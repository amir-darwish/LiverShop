<?php
session_start();


$admins = ["AMIR"];
$password_def = "m123321";
if ($_SERVER['REQUEST_METHOD'] == "POST"){

    $user = $_POST['username'];
    $password = $_POST['password'];
    if (in_array($user, $admins) && (string)$password == $password_def){
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $password;
        header('Location: controlArea.php');
    exit();
    }
    else {
        echo 'ERROR In The USERNAME OR PASSWORD :( !';
    }

} else {
    echo "ERORR";
}


?>