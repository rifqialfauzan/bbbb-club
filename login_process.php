<?php 
session_start();
include "connection/config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows == 1){
        $_SESSION['login'] = $username;
        // $_COOKIE['login'] = $username;
        echo "success";
    }else {
        echo "error";
    }
}

