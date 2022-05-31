<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Profile</title>

	<style>
		* {
 			 box-sizing: border-box;
		}
		.whole: after{
				content: "";
  			display: table;
 				clear: both;
		}
		.column {
 				float: left;
  			padding: 0px;
  			height: 850px;
		}
		.left {
				padding-left: 20px;
  			width: 20%;
  			background-color: #404040;
		}
		.right {
  			width: 80%;
		}
		.header{
				background-color: #087830;
				padding: 20px;
		}
		.body{
			background-color: white;
		}
		.content_title{
			padding-top: 50px;
			padding-left: 40px;
		}
		h6{
			color: white;
		}
		h1{
			color: gray;
		}
		#student{
			border-collapse: collapse;
			border-color: black;
			border-width: 1px solid black;
			width: 50%;
		}
		#student th{
			padding: 12px;
			text-align: left;
		}
	</style>
</head>
<body>
	<div class="whole">
		<div class="column left">
			<h6>LOGO</h6><br>
			<h6>Profile</h6><br>
			<h6>Dashboard</h6><br>
			<h6>Summary</h6><br>
		</div>

		<div class="column right">
			<div class="header">
				LOGO Reimagine Education
			</div>

			<div class="body">
				<div class="content_title">
					<h1>Student Profile</h1>
				</div>

				<table id="student">
					<tr>
					Scholar
					</tr>
					<tr>
						<td>Name</td>
						<td>Juan M. Cruz</td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>Female</td>
					</tr>
					<tr>
						<td>Scholarship</td>
						<td>Febres</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>juan_cruz@dlsl.edu.ph</td>
					</tr>
					<tr>
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>