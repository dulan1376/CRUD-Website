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
        <a href="login.php"><button>Back</button></a>
    </header>
    <section>
        <article>
            <div class="center_signup">
                <h1>Sign up</h1>
                <form method="POST" action="submit_signup.php">
                    <div class="txt_field">
                        
                        <input type="text" name="first_name" required>
                        <label>First Name</label>

                    </div>

                    <div class="txt_field">
                        <input type="text" name="last_name" required>
                        <label>Last Name</label>

                    </div>

                    <div class="txt_field">
                        <input type="text" name="gender" required>
                        <label>Gender</label>
                        <span></span>
                    </div>

                    <div class="txt_field">
                        <input type="text" name="student_id" required>
                        <label>Student ID</label>
                        <span></span>
                    </div>

                    <div class="txt_field">
                        <input type="text" name="scholarship" required>
                        <label>Type of Scholarship</label>
                        <span></span>
                    </div>

                    <div class="txt_field">
                        <input type="text" name="contact_num" required>
                        <label>Contact Number</label>
                        <span></span>
                    </div>

                    <div class="txt_field">
                        <input type="text" name="guardian_num" required>
                        <label>Guardian's Contact Number</label>
                        <span></span>
                    </div>

                    <div class="txt_field">
                        <input type="text" name="address" required>
                        <label>Address</label>
                        <span></span>
                    </div>

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

                    <input type="submit" value="Sign Up">

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