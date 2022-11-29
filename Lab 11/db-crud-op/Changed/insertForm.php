<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<a href="index.php">Goto index Page</a><br><br>
	Fill up data<br><br>
	<form method="post" action="insertData.php">
		Name: <input type="text" name="name"><br>
		Address: <input type="text" name="address"><br>
		Email: <input type="email" name="email"><br>
		Salary: <input type="number" name="salary"><br>
		<input type="submit" name="submit" value="Sumbit">
	</form>
</body>
</html>