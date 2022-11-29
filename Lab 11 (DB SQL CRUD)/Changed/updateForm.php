<?php
$uid=$name=$address=$email=$salary="";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $getdata=explode("**",$_POST["updatedata"]);
  $uid = $getdata[0];
  $name = $getdata[1];
  $address = $getdata[2];
  $email = $getdata[3];
  $salary = $getdata[4];
}
?>
<!DOCTYPE html>
<html>
<head>
 
  <title></title>
  <style>
table, th, td {
  border: 1px solid;
  text-align: center;
}

table {
  width: 100%;
}
</style>
</head>
<body>
<a href="insertForm.php">Add Data</a> </br></br>
<a href="updateForm.php">Update Data</a> </br></br>
<form name = "Update" method="post" action="update.php">
  Id: <input type="number" name="uid" value="<?php echo $uid ?>"><br><br>
  Name: <input type="text" name="uname" value="<?php echo $name ?>"><br><br>
  Adress: <input type="text" name="address" value="<?php echo $address ?>"><br><br>
  Email: <input type="email" name="email"  value="<?php echo $email ?>"><br><br>
  Salary: <input type="int" name="salary"  value="<?php echo $salary ?>"><br><br>
  <input type="submit" name="submitDelete" value="Update">
</form>



<?php
include 'conn.php';
 // select or read data start
$sql = "SELECT * FROM table1";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
  ?>
  <table>
    <tr>
      <td>ID</td>
      <td>Name</td>
      <td>Address</td>
      <td>Email</td>
      <td>Salary</td>
    </tr>
    <?php
    while($row = $result->fetch_assoc())
    {
      ?>
      <tr>
        <td><?php echo $row["id"]?></td>
        <td><?php echo $row["name"]?></td>
        <td><?php echo $row["address"]?></td>
        <td><?php echo $row["email"]?></td>
        <td><?php echo $row["salary"]?></td>
        <td>
          <form action="updateForm.php" method="post">
            <?php 
            $updatedata="{$row["id"]}**{$row["name"]}**{$row["address"]}**{$row["email"]}**{$row["salary"]}";
            ?>
            <button name="updatedata" value="<?php echo $updatedata ?>">
              Update
            </button>
          </form>
        </td>
        <td>
          <form action="delete.php" method="post">
            <button name="deletedata" value="<?php echo $row["id"] ?>">
              Delete
            </button>
          </form>
        </td>
      </tr>
      <?php
    }
    ?>
  </table>;
  <?php
}
else 
{
    echo "0 results";
}
?>
</body>
</html>