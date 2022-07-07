<?php
	include_once 'database_connect.php';

	mysqli_select_db($conn, $db);
	if(isset($_POST['update'])){
		$student_contact = $_POST['student_contact'];
		$student_address = $_POST['student_address'];
		$guardian_contact = $_POST['guardian_contact'];
		$student_id = $_POST['student_id'];

		$sql = "SELECT * FROM tbl_studentdata WHERE student_id ='" . $student_id . "' ";
		$sql = "UPDATE tbl_studentdata SET student_contact = $student_contact, student_address = $student_address, guardian_contact = $guardian_contact
		WHERE student_id = $student_id"; 
		mysqli_query($conn, $sql);

    }

?>
