<?php

$host ="localhost";
$username = "root";
$password ="";
$database ="form_db";

//connect DB
$conn = new mysqli($host, $username, $password, $database);

//check if connected
if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

//Get user data
$username = $_POST['uname'];
$password = $_POST['psw'];

//Insert to DB

$sql = "INSERT INTO form_tbl (username, password) VALUES ('$username', '$password')";

if ($conn ->query($sql)===TRUE){
  echo "Form Submitted Successfully";
}
else {
  echo "Error: " .$sql. "<br>" .$conn->error;
}
?>