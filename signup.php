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
                <li><a href="homepage.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Sign up</a></li>
            </ul>
        </nav>
        <a class="cta" href="#"><button class="btn">Contact</button></a>
    </header>
    <section>

        <article>
            <div class="center">
                <h1>Sign up</h1>
                <form method="POST" action="submit_signup.php">
                    <div class="txt_field">
                        <input type="text" name="signup_email" required>
                        <label>Email</label>
                        <span></span>
                    </div>
                    <div class="txt_field">
                        <input type="text" name="user_name" required>
                        <label>Username</label>
                        <span></span>
                    </div>
                    <div class="txt_field">
                        <input type="password" minlength="8" name="signup_password" required>
                        <label>Password</label>
                        <span></span>
                    </div>

                    <div class="txt_field">
                        <input type="password" minlength="8" name="confirm_password" required>
                        <label>Confirm Password</label>
                        <span></span>
                    </div>

                    <input type="submit" value="Submit">

                    <div class="signup_link">

                    </div>
                </form>
            </div>
        </article>
    </section>
    <footer>

    </footer>
</body>

</html>