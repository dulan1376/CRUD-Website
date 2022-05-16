<?php
include_once 'database_connect.php';


mysqli_select_db($conn, $db);
if (!isset($_POST['Submit'])) {

    $email = $_POST['signup_email'];
    $username = $_POST['user_name'];
    $password = $_POST['signup_password'];
    $confirm_password = $_POST['confirm_password'];

    //check to see if username and email is taken//
    if ($password != $confirm_password) {

        header("Location: signup.php?error=password_is_not_equal_to_confirm_password");
    } else {

        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $signup_token = bin2hex(openssl_random_pseudo_bytes(16));
        $sql = "INSERT INTO user_lampp_scholar( user_name, user_email, hashed_password, unique_token) VALUES ( '$username', '$email', '$hashed_password', '$signup_token')";

        if (mysqli_query($conn, $sql)) {
            header("Location: signup.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
