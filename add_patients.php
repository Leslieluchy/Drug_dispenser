<?php
require_once("connection.php");

$first_name ="Leslie";
$email ="leslie@gmail.com";
$phone ="0725903334";
$age ="19";


$sql = "INSERT INTO patient (Name, Age, Email_address, Phone_Number)
VALUES ('$first_name','$age',' $email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  ?>
