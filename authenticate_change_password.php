<?php
include_once 'database_connect.php';


mysqli_select_db($conn, $db);
if (isset($_POST['user_name'])) {
    $user_new_password = $_POST['new_password'];
    $user_confirm_new_password = $_POST['confirm_new_password'];
    $user_name = $_POST['user_name'];
    $sql = "SELECT * FROM user_lamp_scholar WHERE user_name='" . $user_name . "' ";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        if ($user_new_password != $user_confirm_new_password) {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        } else if ($user_new_password == $user_confirm_new_password) {
            $new_hashed_password = password_hash($user_new_password, PASSWORD_DEFAULT);
            $sql = "UPDATE user_lamp_scholar SET hashed_password = '$new_hashed_password' WHERE user_name = '$user_name'";
            mysqli_query($conn, $sql);

            header("Location: login.php");
        } else {
            echo "Error in uploading the new password: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Error in connecting db or POST : " . $sql . "<br>" . mysqli_error($conn);
    }
}
