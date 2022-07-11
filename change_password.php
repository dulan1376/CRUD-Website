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
                <h3>Change Password?</h3>
                <form method="post" action="authenticate_change_password.php">
                    <div class="txt_field">
                        <input type="text" name="user_name">
                        <label>Username</label>
                        <span></span>
                    </div>
                    <div class="txt_field">
                        <input type="password" name="new_password">
                        <label>New Password</label>
                        <span></span>
                    </div>
                    <div class="txt_field">
                        <input type="password" name="confirm_new_password">
                        <label>Confirm New Password</label>
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