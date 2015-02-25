
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


<div class="loginForm">
    <h3>Login</h3>
    <form action= "./validate_login.php" method="post">
        Email: <input type="text" name="email"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</div>

</body>

</html>

<a href="./register.php"> Register</a>

