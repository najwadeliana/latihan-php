<!DOCTYPE html>
<html lang="en">
<head>
<title>Seleksi if-else</title>
</head>
<body>
	<h2>Form Input Nilai Mahasiswa</h2>

<!-- Form Input Nilai -->
<form action="" method="POSTd    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama" required><br><br>

    <label for="nilai">Nilai:</label><br>
    <input type="number" id="nilai" name="nilai" required><br><br>

    <input type="submit" value="Cek Kelulusan">
</form>

<?php
// Mengecek apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];

    // Menentukan kelulusan berdasarkan nilai
    if ($nilai >= 90) {
        $status = "Nilai Anda A";
    } 
    elseif ($nilai>=75){
        $status = "Nilai Anda B";
    }
     elseif ($nilai>=60){
        $status = "Nilai Anda c";
    }

    // Menampilkan hasil
    echo "<h2>Hasil Kelulusan:</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "Nilai: " . $nilai . "<br>";
    echo "Status: " . $status . "<br>";
}
?>

</body>
</html>