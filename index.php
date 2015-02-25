<!DOCTYPE html>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>

<body>
    <?php
        if ($_SERVER['SERVER_NAME'] != "dias11.cs.trinity.edu") {
            echo "<p>You must access this page from on campus through dias11.</p>";
            die ();
        }
    ?>

    <?php
        session_start();
        if ((isset($_SESSION['id_user']) && $_SESSION['id_user'] != ''))
            echo "Welcome, " . $_SESSION['user_fname'] . ". Login as different user?";
    ?>
    <span> <a href="./php/logout.php">Logout</a> </span>

    <h1>Online Task List</h1>

    <?php
        if (!(isset($_SESSION['id_user']) && $_SESSION['id_user'] != '')) header ("Location: ./php/login.php");
        else include("./php/populate_tasks.php");
    ?>

    <h3>Add Task</h3>
    <form action= "./php/add_task.php" method="post">
        Task Priority: <input type="text" name="task_priority"><br>
        Task Info: <input type="text" name="task_info"><br>
        <input type="submit" value="Add">
    </form>

    <h3>Delete Task</h3>
    <form action= "./php/delete_task.php" method="post">
        Task ID: <input type="text" name="task_id"><br>
        <input type="submit" value="Delete">
    </form>

</body>

</html>