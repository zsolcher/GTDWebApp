<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/styles.css" type="text/css">
</head>

<body>

<h1>Online Task List</h1>

<div class="loginForm">
    <h3>Login</h3>
    <form action= "./validate_login.php" method="post">
        Email: <input type="text" name="email" value="mlewis@trinity.edu"><br>
        Password: <input type="text" name="password" value="scalaislife"><br>
        <input type="submit">
    </form>
</div>

</body>

</html>

<a href="./php/register.php"> Register</a>

<?php
if ($_SERVER['SERVER_NAME'] != "dias11.cs.trinity.edu") {
    echo "<p>You must access this page from on campus through dias11.</p>";
    die ();
}
?>