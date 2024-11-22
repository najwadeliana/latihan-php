<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan2</title>
</head>
<body>

	<form name="login"action=""method="post">
	Password :
	<input type="password" name="psw" size="15" maxlength="10">
	<input type="submit" value="login" name="tlogin">
</form>
<?php
if (isset($_POST['tlogin'])){
	if ($_POST['psw']=="admin"){
		echo "login sukses";
	}else{
		echo "Anda tidak berhak menggunakan sistem";
		}
	}
?>
</body>
</html>>