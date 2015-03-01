<!DOCTYPE html>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>

<body>

    <?php
        session_start();

        if (!(isset($_SESSION['login']) && $_SESSION['login'] != ''))
        {
            header ("Location: ./php/login.php");
        }
    ?>

    <h1>Online Task List</h1>




</body>

</html>