<?php
include_once 'database_connect.php';


mysqli_select_db($conn, $db);
if (isset($_POST['signup_email'])) {

    $email = $conn->real_escape_string($_POST['signup_email']);
    $username = $conn->real_escape_string($_POST['user_name']);
    $password = $conn->real_escape_string ($_POST['signup_password']);
    $confirm_password = $conn->real_escape_string($_POST['confirm_password']);


    $sql = "SELECT * FROM user_lamp_scholar WHERE user_name='" . $username . "' AND user_email='" . $email . "' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) < 1) {

        if ($password != $confirm_password) {
            echo "Error in password: " . $sql . "<br>" . mysqli_error($conn);
        } else {

            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO user_lamp_scholar( user_name, user_email, hashed_password) VALUES ( '$username', '$email', '$hashed_password')";

            if (mysqli_query($conn, $sql)) {
                header("Location: login.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    } else {
        echo "Error in query: " . $sql . "<br>" . mysqli_error($conn) . mysqli_num_rows($result);
    }
}
