<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menggunakan Tipe Data</title>
</head>
<body>
<?php
//Mendefinisikan variabel dengan berbagai macam tipe data
$nim = "12.22.0911";
$nama = "Najwa Deliana Multazima Hafiz";
$umur = "19";
$nilai ="92.25";
$status = "TRUE";

//Menampilkan Data
echo "NIM : " .$nim. "<br>";
echo "Nama : " .$nama. "<br>";
print "Umur : " .$umur. "<br>";
print "<br>";
printf("Nilai : %.3f<br>",$nilai);
if ($status)
	echo "Status : Aktif";
	else
	echo "Status : Tidak Aktif";

?>
</body>
</html>