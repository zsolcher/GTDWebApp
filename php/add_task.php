<?php
    if ($_SERVER['SERVER_NAME'] != "dias11.cs.trinity.edu") {
        echo "<p>You must access this page from on campus through dias11.</p>";
        die ();
    }
?>

<?php

session_start();
include("connect.php");

try {
    // Prepare SQL Query
    $qry = "INSERT INTO tasks (id_user, priority, info) VALUES (:id_user, :priority, :info);";
    $stmt = $conn->prepare($qry);

    // bind parameters
    $stmt->bindParam(':id_user', $_SESSION['id_user']);
    $stmt->bindParam(':priority', $_POST['task_priority']);
    $stmt->bindParam(':info', $_POST['task_info']);

    // Execute prepared statement
    $stmt->execute();
    $conn = null;
    header("location: ../index.php");

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}