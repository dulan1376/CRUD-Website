<?php
session_start();
include_once 'database_connect.php';

	$sql = "SELECT * FROM `tbl_studentdata`";
	$result = mysqli_query($con, $sql);
	?>