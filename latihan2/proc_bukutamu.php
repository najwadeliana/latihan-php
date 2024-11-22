<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buku Tamu</title>
</head>
<body>
	<?php
	$nama=$_POST["nama"];
	$email=$_POST["email"];
	$komentar=$_POST["komentar"];
	?>

	<h1>Data Buku Tamu</h1>
	<hr>
	Nama anda		: <?php echo $nama?>
	<br>
	Email address 	: <?php echo $email?>
	<br>
	Komentar		: 
	<taxtarea name="komentar" cols="40" rows="5"><?php echo $komentar?></taxtarea>
	<br>
</body>
</html>