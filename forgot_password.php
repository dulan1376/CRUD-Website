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
    <header>
        <a class="btn" href="login.php"><button>Back</button></a>
    </header>
    <article>

        <section>
            <div class="center_forgot">
                <h3 class="h3">Forgot Password?</h3>
                <form method="post" action="authenticate_email_forgot_password.php">
                    <div class="txt_field">
                        <input type="text" name="authenticate_email">
                        <label>Email</label>
                        <span></span>
                    </div>
                    <input type="submit" value="Send">
                </form>

            </div>
        </section>
    </article>
    <footer>

    </footer>
</body>

</html>