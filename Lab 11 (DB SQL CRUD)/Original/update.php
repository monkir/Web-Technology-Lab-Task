
<?php
include 'conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $uid = $_POST["uid"];
  $name =$_POST["uname"];
  $address =$_POST["address"];
  $email =$_POST["email"];
  $salary =$_POST["salary"];
// sql to update a record
$sql = "UPDATE table1 SET name='$name', address = '$address', email = '$email', salary = '$salary' WHERE id= $uid";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  session_start();
  $_SESSION["notification"]="Record updated successfully <br>";
  header("Location: index.php");

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
  

}

?>