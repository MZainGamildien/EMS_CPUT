<?php

$Email=$_POST['Email'];
$password=$_POST['password'];

// Database connection
$conn = new mysqli('localhost','root','','ems_db');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(firstName, lastName, studentEmail, phoneNumber, password) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi",  $Email,$password);
    $execval = $stmt->execute();
    echo $execval;
    echo "Login successfully...";
    $stmt->close();
    $conn->close();
}

?>
