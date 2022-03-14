<?php
    

    include_once 'Database_Connect.php';

    mysqli_select_db($conn, $db);
    if(isset($_POST['login_username']))
    {
        $login_username=$_POST['login_username'];
        $login_password=$_POST['login_password'];
        $sql = "SELECT * FROM user_lampp_scholar WHERE user_name='".$login_username."'AND user_password='".$login_password."' ";

        $result=mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)>0)
        {
            $_SESSION['User'] = $_POST['login_username'];
            header("location: Homepage.php");
        }
        else
        {
            header("location: Login.php?Invalid= Incorrect Password");
        }
        
    }
