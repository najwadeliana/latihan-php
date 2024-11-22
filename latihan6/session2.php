<?php
session_start(); // Memulai atau melanjutkan session
$idsession = session_id(); // Mendapatkan ID session

// Mengecek dan menginisialisasi nilai count
if (isset($_SESSION['count'])) {
    $count = $_SESSION['count'] + 1; // Increment jika sudah ada
} else {
    $count = 1; // Inisialisasi pertama kali
}

// Simpan nilai count ke session
$_SESSION['count'] = $count;

// Reset session jika ada parameter 'reset' di URL
if (isset($_GET['reset'])) {
    session_destroy(); // Menghancurkan session
    header("Location: session2.php"); // Redirect untuk menghindari sisa session
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Session – Destroy</title>
</head>
<body>
    <h1>Demo Session – Reset Nilai</h1>
    <p>
        <?php
        echo "<br> ID Session: " . $idsession;
        echo "<br> Anda mengakses server ini sebanyak: " . $count . " kali.";
        ?>
    </p>
    <a href="?reset=true">Reset Session</a>
</body>
</html>
