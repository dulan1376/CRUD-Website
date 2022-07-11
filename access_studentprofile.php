<?php
session_start();
	include_once 'database_connect.php';
	$sql = "SELECT * FROM tbl_studentdata WHERE student_id = '".$_SESSION['ID']."' ";
	$result = mysqli_query($conn, $sql);
?>