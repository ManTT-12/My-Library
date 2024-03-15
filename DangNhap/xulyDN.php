<?php
include('./includes/dbconnect.php');
if (isset($_POST['dangnhap'])) {
    $username = $_POST['username'];
    $password - $_POST['pass'];
    if (empty($username)) {
        array_push($error, "Username is required");
    } else {
        array_push($error, "Password is required");
    };
}
