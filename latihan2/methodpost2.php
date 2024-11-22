<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contoh Form dengan POST</title>
</head>
<body>
<form action="proc_login.php" method="post">
	<h1>Only for authorized user</h1>
	<hr>
	Username : <input type="text" name="username">
	<br>
	Password : <input type="password" name="password">
	<br>
	<input type="submit" value="login">
</form>
</body>
</html>