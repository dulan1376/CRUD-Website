<?php
include_once 'authenticate_login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
	<meta name="description" content="CRUD Project">
	<meta name="keywords" content="HTML, CSS, PHP">
	<meta name="author" content="Dylan Thomas Matocinos">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD Project</title>
</head>

<body>
	<header>
		<h1>LOGO</h1>
		<nav>
			<ul class="nav_links">
				<li><a href="#">NAV MENUS</a></li>
			</ul>
		</nav>
		<a class="cta" href="signup.php"><button class="btn">Signup</button></a>
	</header>
	<article>

		<section>
			<div class="center">
				<h2>Login</h2>
				<form method="post">
					<div class="txt_field">
						<input type="text" name="login_username" required>
						<label>Username</label>
						<span></span>
					</div>
					<div class="txt_field">
						<input type="password" name="login_password" required>
						<label>Password</label>
						<span></span>
					</div>
					<a href="forgot_password.php" class="pass">Forgot Password?</a>
					<div>
						<input type="submit" value="Submit">
					</div>
					<span></span>
				</form>
				<a href="signup.php" class="signup">Not a member yet? Create Account Now!</a>
				<span></span>
			</div>
		</section>
	</article>
	<footer>

	</footer>
</body>

</html>