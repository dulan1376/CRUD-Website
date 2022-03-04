<?php

?>

<!DOCTYPE html>
<html lang="en">
 <head>
 <link rel="stylesheet" href="style.css"> //This can be changed depending on the name of the file
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
					<li><a href="#">Home</a></li>
					<li><a href="#">Login</a></li>
					<li><a href="#">Sign up</a></li>
				</ul>
			</nav>
			<a class="cta" href="#"><button class = "btn">Contact</button></a>
	</header>
	<section>
		
		<article>
			<div class ="center">
				<h1>Login</h1>
				<form methos="post">
					<div class="txt_field">
						<input type="text" required>
						<label>Username</label>
						<span></span>
					</div>
					<div class="txt_field">
						<input type="password" required>
						<label>Password</label>
						<span></span>
					</div>
					<div class = "pass">Forgot Password?</div>
					<input type="submit" value="Login">
					<div class = "signup_link">
						Not a member? <a href="#">Signup</a>
					</div>
				</form>
			</div>
		</article>
	</section>
	<footer>
	
	</footer>
</body>
</html>
