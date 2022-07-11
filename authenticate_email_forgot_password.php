<?php
include_once 'database_connect.php';


mysqli_select_db($conn, $db);
if (isset($_POST['authenticate_email'])) {
    $user_email = $_POST['authenticate_email'];
    $sql = "SELECT * FROM user_lamp_scholar WHERE user_email='" . $user_email . "' ";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        if ($_POST['authenticate_email'] == $user_email) {
            echo $user_email;
            header("Location: change_password.php");
        } else if ($_POST['authenticate_email'] != $user_email) {
            echo "Error " . $user_email . " not found.";
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
