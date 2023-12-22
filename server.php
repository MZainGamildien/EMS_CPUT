<?php

$email=$_POST['Email'];
$password=$_POST['password'];


if (empty($email) || empty($password)) {
    echo "Please fill in all fields.";
} elseif (!filter_var($studentEmail, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
}
else{
    $conn = new mysqli('localhost', 'root', '', 'ems_db');
        if ($conn->connect_error) {
            echo "$conn->connect_error";
            die("Connection Failed : " . $conn->connect_error);
        } else {
            // Database connection
            $stmt = $conn->prepare("insert into login(Email, password) values(?, ?)");
            $stmt->bind_param("sssssi",  $Email,$password);
            $execval = $stmt->execute();
            echo $execval;
            echo "Login successfully...";
            $stmt->close();
            $conn->close();
    
        }


    }


?>
