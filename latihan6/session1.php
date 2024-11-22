<?php
session_start(); // Mulai session

// Mengecek apakah 'count' sudah ada di dalam session
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1; // Inisialisasi pertama kali
} else {
    $_SESSION['count']++; // Tambahkan setiap kali halaman di-refresh
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Session 1</title>
</head>
<body>
    <h1>Demo Session 1</h1>
    <p>
        <?php
        echo "Anda telah mengakses halaman ini sebanyak: {$_SESSION['count']} kali.";
        ?>
    </p>
</body>
</html>
