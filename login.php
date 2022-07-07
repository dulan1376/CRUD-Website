<?php
include_once 'authenticate_login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
	<meta charset="UTF-8">
	<meta name="description" content="CRUD Project">
	<meta name="keywords" content="HTML, CSS, PHP">
	<meta name="author" content="Dylan Thomas Matocinos">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD Project</title>
</head>

<body>
	<article>
		<section>
			<div class="center">
				<img src="DLSL.png" alt="DLSL Logo" class="dlsl_logo">
				<h2 class="h2">Login</h2>
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
						<input type="submit" value="Login">
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