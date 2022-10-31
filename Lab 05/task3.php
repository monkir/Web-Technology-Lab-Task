<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=2>
        <tr>
            <td>
                home
            </td>
            <td>
                about
            </td>
            <td>
                cont
            </td>
            <td>
                <?php
                    if(isset($_SESSION["username"])) 
                    { 
                        echo $_SESSION["username"]; 
                    }
                    else
                    {
                        echo "log in";
                    }
                ?>
            </td>
        </tr>
    </table>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input name="username" type="text" ><br>
        Password: <input name="password" type="password"><br>
        <input type="submit" value="Login"> <br>
    </form>
    <?php
        if(isset($_POST["username"]) && isset($_POST["password"])) 
        { 
            $_SESSION["username"]=$_POST["username"]; 
            $_SESSION["password"]=$_POST["password"];
            echo "User Name: ".$_SESSION["username"]."<br>"; 
            echo "Password: ".$_SESSION["password"]."<br>";
            echo "<button name=\"logout\">Log out</button> <br>";
            echo "<a href=\"task3_2.php\">LOOGG OUT</a>";
        }
        if(isset($_POST["logout"]))
        {
            session_start();
            session_unset();
            session_destroy();
        }
        
    ?>
    
</body>
</html>