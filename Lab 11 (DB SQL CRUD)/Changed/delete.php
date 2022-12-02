<?php

use function PHPSTORM_META\elementType;

include 'conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if(isset($_POST['uid']))
  {
    $uid = $_POST["uid"];
    if($uid != "")
    {
      // sql to delete a record
      $sql = "DELETE FROM table1 WHERE id= '{$uid}'";
      if ($conn->query($sql) === TRUE) 
      {
        session_start();
        $_SESSION["notification"]="Record of ID: ".$uid. " is deleted successfully <br>";
      } 
      else 
      {
        session_start();
        $_SESSION["notification"]="Error deleting record: " . $conn->error. "<br>";
      }
      $conn->close();
    }
    else
    {
      session_start();
      $_SESSION["notification"]="Insert The ID to Delete! <br>";
    }
    
  }
  else if(isset($_POST['deletedata']))
  {
    $uid = $_POST["deletedata"];
    // sql to delete a record
    $sql = "DELETE FROM table1 WHERE id= $uid";
    if ($conn->query($sql) === TRUE) 
    {
      session_start();
      $_SESSION["notification"]="Record of ID ".$uid. " deleted successfully <br>";
    } 
    else 
    {
      session_start();
      $_SESSION["notification"]="Error deleting record: " . $conn->error. "<br>";
    }
    $conn->close();
  }
  else
  {
    session_start();
    $_SESSION["notification"]="Error deleting record: " . $conn->error. "<br>";
  }
}
header("Location: index.php");

?>