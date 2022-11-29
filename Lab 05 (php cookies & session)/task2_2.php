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
    if(isset($_COOKIE["username"]) && isset($_COOKIE["password"])) 
    {
        setcookie ("username", "", time() - (2*60), "/");
        setcookie ("password", "", time() - (2*60), "/");
        echo "Log out Successfully";
    }
    ?>
    <a href="task2.php"><button>Log in</button></a>
</body>
</html>

