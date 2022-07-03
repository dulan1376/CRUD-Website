<?php
	include_once 'database_connect.php';

	if(isset($_POST['update'])){

		$student_contact = $_POST['contact_num'];
		$student_address = $_POST['address'];
		$guardian_contact = $_POST['guardian'];


		$sql = "UPDATE tbl_studentdata SET 'contact_num' = '$student_contact', 'address' = '$student_address', 'guardian' = '$guardian_contact'
		WHERE 'student_number' = '$student_id'"; 
		mysqli_query($conn, $sql);

    }

?>