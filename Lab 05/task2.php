<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_COOKIE["username"])) 
        { 
            echo "User Name: ".$_COOKIE["username"]."<br>"; 
        }
        if(isset($_COOKIE["password"])) 
        { 
            echo "Password: ".$_COOKIE["password"]."<br>";
        }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input name="username" type="text" ><br>
        Password: <input name="password" type="password"><br>
        <input type="checkbox" name="remember" /> Remember me <br>
        <input type="submit" value="Login"> <br>
    </form>
    <?php
        if(!empty($_POST["remember"])) 
        {
            setcookie ("username", $_POST["username"], time() + (2*60), "/");
            setcookie ("password", $_POST["password"], time() + (2*60), "/");
            echo "Cookies Set Successfuly";
        } 
        else 
        {
            setcookie("username","");
            setcookie("password","");
            echo "Cookies Not Set <br>";
        }
    ?>
    <?php
        if(isset($_COOKIE["username"]) && isset($_COOKIE["password"])) 
        {
            echo "<a href=\"task2_2.php\"><button name=\"logout\">Log out</button></a>";
        }
    ?>
</body>
</html>