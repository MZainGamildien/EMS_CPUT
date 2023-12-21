<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$studentEmail = $_POST['studentEmail'];
$phoneNumber = $_POST['phoneNumber'];
$password = $_POST['password'];

// Database connection
$conn = new mysqli('localhost', 'root', 'password', 'ems_db');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    // Corrected SQL query and prepare statement
    $stmt = $conn->prepare("INSERT INTO registration (firstName, lastName, studentEmail, phoneNumber, password) VALUES (?, ?, ?, ?, ?)");
    // Binding parameters to the prepared statement
    $stmt->bind_param("sssss", $firstName, $lastName, $studentEmail, $phoneNumber, $password);

    // Executing the prepared statement
    $execval = $stmt->execute();

    if ($execval) {
        header("Location: signup.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>