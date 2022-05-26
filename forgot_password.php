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

        <a class="btn" href="login.php">Back</a>
    </header>
    <article>

        <section>
            <div class="center">
                <h3>Forgot Password?</h3>
                <form method="post" action="authenticate_email_forgot_password.php">
                    <div class="txt_field">
                        <input type="text" name="authenticate_email">
                        <label>Email</label>
                        <span></span>
                    </div>
                    <input type="submit" value="Submit">
                </form>

            </div>
        </section>
    </article>
    <footer>

    </footer>
</body>

</html>