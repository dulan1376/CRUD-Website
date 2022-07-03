<?php
	include_once 'access_studentprofile.php';
	include_once 'update_studentprofile.php';
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
					<td><input class = "txtbox" type = "text" name = "student_name" value = "<?php echo $row['student_fname']," ",$row['student_lname']?>" readonly></td>
				</tr>
				<tr>
					<td>Student ID : </td>
					<td><input class = "txtbox" type = "text" name = "student_number" value = "<?php echo $row['student_id']?>" readonly></td>
				</tr>
				<tr>
					<td>Type of Scholarship : </td>
					<td><input class = "txtbox" type = "text" name = "student_scholarship" value ="<?php echo $row['student_scholarship']?>" readonly></td>
				</tr>
				<tr>
					<td>Gender : </td>
					<td><input class = "txtbox" type = "text" name = "student_gender" value = "<?php echo $row['student_gender']?>" readonly></td>
				</tr>
				<tr>
					<td>Contact Number : </td>
					<td><input class = "txtbox" type = "text" name = "contact_num" value = "<?php echo $row['student_contact']?>"></td>
				</tr>
				<tr>
					<td>Address : </td>
					<td><input class = "txtbox" type = "text" name = "address" value = "<?php echo $row['student_address']?>"></td>
				</tr>
				<tr>
					<td>Guardian Contact Number : </td>
					<td><input class = "txtbox" type = "text" name = "guardian" value = "<?php echo $row['guardian_contact']?>"></td>
				</tr>
				<td><input class = "button-right button-style" type = submit name = "update" value = "Update" formaction = "studentprofile.php"> </td>
				<?php } ?>

			</table>
		</div>
	</form>

</body>
</html>
