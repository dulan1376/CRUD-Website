<?php
session_start();
	include_once 'database_connect.php';
	$sql = "SELECT * FROM tbl_studentdata WHERE id = '".$data['id']."' ";
	$result = mysqli_query($conn, $sql);
?>