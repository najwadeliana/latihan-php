<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Koneksi Database PHP-MYSQL</title>
</head>
<body>
<h2>Akses tabel dosen dari database kampus2</h2>
	<?php
		// Koneksi ke database kampus1
		$conn = mysqli_connect('localhost', 'root', '', 'kampus1');
		
		// Cek koneksi
		if (!$conn) {
			die('Koneksi gagal: ' . mysqli_connect_error());
		}
		
		// Query untuk tabel dosen dari database kampus1
		$hasil = mysqli_query($conn, 'SELECT Kdmatkul, nmmatkul FROM mata_kuliah');
		
		// Tampilkan data dari hasil query
		while ($row = mysqli_fetch_array($hasil)) {
			// Tampilkan NPP dan Nama Dosen tanpa simbol *
			echo 'Kdmatkul: ' . $row['nmmatkul'];
			echo ' dengan nama: ' . $row['nmmatkul'];
			echo '<br>';
		}

		// Tutup koneksi
		mysqli_close($conn);
	?>
</body>
</html>