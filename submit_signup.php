<?php
include_once 'database_connect.php';


mysqli_select_db($conn, $db);
if (isset($_POST['signup_email'])) {

    $email = $conn->real_escape_string($_POST['signup_email']);
    $username = $conn->real_escape_string($_POST['user_name']);
    $password = $conn->real_escape_string ($_POST['signup_password']);
    $confirm_password = $conn->real_escape_string($_POST['confirm_password']);
    $fname = $conn->real_escape_string($_POST['first_name']);
    $lname = $conn->real_escape_string($_POST['last_name']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $student_id = $conn->real_escape_string($_POST['student_id']);
    $scholarship = $conn->real_escape_string($_POST['scholarship']);
    $contact_num = $conn->real_escape_string($_POST['contact_num']);
    $guardian_num = $conn->real_escape_string($_POST['guardian_num']);
    $address = $conn->real_escape_string($_POST['address']);

    $sql = "SELECT * FROM user_lamp_scholar WHERE user_name='" . $username . "' AND user_email='" . $email . "' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) < 1) {

        if ($password != $confirm_password) {
            echo "Error in password: " . $sql . "<br>" . mysqli_error($conn);
        } else {

            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO signup_verify( student_lname, student_fname, student_id, student_scholarship, student_gender, 
            student_contact, student_address, guardian_contact, user_name, student_email, hashed_password) 
            VALUES ( '$lname', '$fname', '$student_id', '$scholarship', '$gender', '$contact_num', '$address',
             '$guardian_num','$username', '$email', '$hashed_password')";

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
