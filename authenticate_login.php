<?php
session_start();
include_once 'database_connect.php';

mysqli_select_db($conn, $db);
if (isset($_POST['login_username'])) {
    $login_username = $_POST['login_username'];
    $login_password = $_POST['login_password'];
    $sql = "SELECT * FROM user_lampp_scholar WHERE user_name='" . $login_username . "'AND user_password='" . $login_password . "' ";


    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['User'] = $_POST['login_username'];
        if ($_POST['login_username'] == $login_username && $_POST['login_password'] == 'admin') { #This check the username and password if it matches the admin
            header("Location: admin_homepage.php"); #For admin users
        } else {
            header("Location: scholar_homepage.php"); #For scholar users
        }
    } else {    #Need to apply 3 login attempts then user will wait for a 30 seconds to login again

    }
}
