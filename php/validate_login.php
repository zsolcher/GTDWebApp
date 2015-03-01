<?php

echo "hello world";

//  Define connection variables/constants
$dbhost = '127.0.0.1';
$dbname = 'zsolcher';
$dbuser = 'zsolcher';
$dbpass = '0752847';

try {
    // Use a PHP data object (PDO) for security
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $qry = "SELECT * FROM users WHERE email = :email AND password = :password";

    $user_email = trim($_POST['email']);
    $user_password = trim($_POST['password']);

    $stmt = $conn->prepare($qry);
    $stmt->execute(array(':email' => $user_email, ':password'=> $user_password));

    $num=$stmt->rowCount();
    if($num > 0) header("location: index.php");
    else header("location: login.php");

    $conn = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
