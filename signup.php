<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $Gender = $_POST['Gender'];

    

$servername = "localhost";
$username = "root";
$password = "Or5$#12";
$dbname = "GuviDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql =  "INSERT INTO Signup1(Username, Password, Firstname,Lastname,Email,Gender,Mobile)
VALUES ("+$username+", "+$password+", "+$firstname+","+$lastname+","+$email+","+$Gender+","+$mobile+")";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    
  }




?>