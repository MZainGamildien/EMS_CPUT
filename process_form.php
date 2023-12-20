<?php
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$studentEmail=$_POST['studentEmail'];
$phoneNumber=$_POST['phoneNumber'];
$password=$_POST['password'];

// Database connection
$conn = new mysqli('localhost','root','password','ems_db');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(firstName, lastName, studentEmail, phoneNumber, password) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $firstName, $lastName, $studentEmail, $phoneNumber, $password);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}

?>
