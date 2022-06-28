<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Profile</title>

	<style>
		.subheader{
			padding-top: 50px;
			padding-left: 100px;
		}
		h1{
			color: gray;
		}
		#tblmain{
			padding-left: 250px;
			border: solid 1px black;
		}
	</style>
</head>

<body>
	<div class = "header">
		<a href="#default" class="logo">LOGO</a>
		<div class="header-right">
   		<a class="active" href="#logout">Logout</a>
  	</div>

	<div class = "subheader">
		<h1>Student Profile</h1>
	</div>
	
	<form action = "studentprofile.php" method = "POST">
		<div class = "body">
			<table id = "tblmain">
				<tr>
					<td><h2>Scholar</h2></td>
				</tr>
				<?php  while($row = mysqli_fetch_assoc($result)) { ?>
				<tr>
					<td>Name : </td>
					<td><input class = "txtbox" type = "text" name = "student_name<?php echo $row['student_name']?>" readonly></td>
				</tr>
				<tr>
					<td>Student ID : </td>
					<td><?php echo $row['student_id']; ?></td>
				</tr>
				<tr>
					<td>Type of Scholarship : </td>
					<td><?php echo $row['student_scholarship']; ?></td>
				</tr>
				<tr>
					<td>Gender : </td>
					<td><?php echo $row['student_gender']; ?></td>
				</tr>
				<tr>
					<td>Contact Number : </td>
					<td><?php echo $row['student_contact']; ?></td>
				</tr>
				<tr>
					<td>Address : </td>
					<td><?php echo $row['student_address']; ?></td>
				</tr>
				<tr>
					<td>Guardian Contact Number : </td>
					<td><?php echo $row['guardian_contact']; ?></td>
				</tr>
				<?php } ?>
			</table>
		</div>
</body>
</html>
