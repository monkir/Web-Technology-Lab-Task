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
  <?php
  $notification = "";
  session_start();
  if(isset($_SESSION["notification"]))
  {
    $notification= $_SESSION["notification"];
    session_unset();
    session_destroy();
  }
  ?>
  <a href="insertForm.php">Add Data</a> </br></br>
  <a href="updateForm.php">Update Data</a> </br></br>

  <form name = "delete" method="post" action="delete.php">
    Id: <input type="number" name="uid">
    <input type="submit" name="submitDelete" value="Delete">
  </form><br><br>

  <h1 style="color: red;"><?php echo $notification; ?></h1>

  <?php
  include 'conn.php';
  // select or read data start
  $sql = "SELECT id, name, address, email, salary FROM table1";
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