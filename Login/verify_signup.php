<?php
session_start();
?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ussets";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hardcoded user credentials for demonstration
    $valid_email = "ezekielU675@gmail.com";
    $valid_password = "12345";

    if ($email === $valid_email && $password === $valid_password) {
        $_SESSION['email'] = $email;
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['error'] = "Incorrect email or password";  // Set the error message in session
        header("Location: frontlog.php");
        exit();
}
}