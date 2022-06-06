<?php
    session_start();
?>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "cruddatabase";

	$con = mysqli_connect($servername, $username, $password, $database);
		if (!$con)

  		{
  			die('Could not connect: ' . mysqli_connect_error());
  		}
	mysqli_select_db($con, $database);
	$sql = "SELECT * FROM `tbl_studentprofile`";
	$result = mysqli_query($con, $sql);
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

	<div class = "body">
		<table id = "tblmain">
			<tr>
				<td><h2>Scholar</h2></td>
			</tr>
			<?php  while($row = mysqli_fetch_assoc($result)) { ?>
			<tr>
				<td>Name : </td>
				<td><?php echo $row['student_name']; ?></td>
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
			<?php } ?>
		</table>
	</div>
</body>
</html>