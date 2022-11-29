<?php
include 'conn.php';

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
// insert start

if(isset($_POST['submit'])){
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$salary = $_POST['salary'];

$sql = "INSERT INTO table1 (name, address, email, salary)
VALUES ('$name', '$address', '$email', '$salary')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully <br>";
  session_start();
  $_SESSION["notification"]="New record created successfully <br>";
  // select or read data start
header("Location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
// insert end



}
$conn->close();
}
?>