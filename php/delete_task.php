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
    echo "task_id = " . $_POST['task_id'];

    // Prepare SQL Query
    $qry = "DELETE FROM tasks WHERE id_task = :task_id;";
    $stmt = $conn->prepare($qry);

    // bind parameters
    $stmt->bindParam(':task_id', $_POST['task_id']);

    // Execute prepared statement
    $stmt->execute();
    $conn = null;
    header("location: ../index.php");

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}