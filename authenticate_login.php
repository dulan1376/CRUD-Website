<?php
session_start();
include_once 'database_connect.php';

mysqli_select_db($conn, $db);
if (isset($_POST['login_username'])) {
    $login_username =  $conn->real_escape_string($_POST['login_username']);
    $login_password =  $conn->real_escape_string($_POST['login_password']);
    $sql = "SELECT * FROM user_lamp_scholar WHERE user_name= '" . $login_username . "' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_array($result);
        if (password_verify($login_password, $data['hashed_password'])){
            $_SESSION['User'] = $data['user_name'];
            $_SESSION['ID'] = $data['student_id'];
            if($data['user_name'] == "admin"){
                header("Location: http://localhost/LAMP-DATABASE-MONITORING-WEBSITE/dashboard.php");
                exit();
            }
            else{
                header("Location: http://localhost/LAMP-DATABASE-MONITORING-WEBSITE/studentprofile.php");
                exit();
            }
        }
        else{
            header("Wrong inputs");
        }
    } else {    #Need to apply 3 login attempts then user will wait for a 30 seconds to login again
    }
}
