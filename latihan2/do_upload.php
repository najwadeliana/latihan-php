<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Simpan file yang diupload</h1>
<br>
<?php
if ($file1!="none"){
	copy ("$file1","hasilupload.txt") or die ("No files");
}
else {
	die("Tidak ada file yang diupload");
}
?>
</body>
</html>>