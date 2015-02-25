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
    $id_user = $_SESSION['id_user'];

    // Prepare SQL Query
    $qry = "SELECT * FROM tasks WHERE id_user = :id_user";
    $stmt = $conn->prepare($qry);

    // bind parameters
    $stmt->bindParam(':id_user', $id_user);

    // Execute prepared statement
    $stmt->execute();

    // Check if exactly one matching result
    $noRows = $stmt->rowCount();

    $table = "<table border='1' cellspacing='2'><thead><tr><td>Task ID</td><td>Task Priority</td><td>Task Info</td></tr></thead>";
    $table .= "<tbody>";

    if($noRows > 0) {
        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($arr as $row) {
            $table .= "<tr>";
            $table .= "<td>" . $row['id_task'] . "</td>";
            $table .= "<td>" . $row['priority']. "</td>";
            $table .= "<td>" . $row['info']. "</td>";
            $table .= "</tr>";
        }
    }
    else {
        echo "No tasks to show...";
    }
    $table .= "</tbody></table>";
    echo $table;

    $conn = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}