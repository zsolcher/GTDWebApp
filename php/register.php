<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/styles.css" type="text/css">
</head>

<body>
    <?php
        if ($_SERVER['SERVER_NAME'] != "dias11.cs.trinity.edu") {
            echo "<p>You must access this page from on campus through dias11.</p>";
            die ();
        }
    ?>

    <?php
        if ($_SERVER['SERVER_NAME'] != "dias11.cs.trinity.edu") {
            echo "<p>You must access this page from on campus through dias11.</p>";
            die ();
        }
    ?>

    <header>
        Already a user? <a href="../index.php">Back to login...</a>
    </header>


    <h3>New User Registration</h3>

    <form action= "./validate_registration.php" method="post">
        First Name: <input type="text" name="new_user_fname"><br>
        Last Name: <input type="text" name="new_user_lname"><br>
        Email: <input type="text" name="new_user_email"><br>
        Password: <input type="password" name="new_user_pwd1"><br>
        Re-Enter Password: <input type="password" name="new_user_pwd2"><br>
        <input type="submit" value="Register now!">
    </form>

</body>

</html>

