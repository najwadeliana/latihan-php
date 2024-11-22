<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

echo "<h2>Login anda: $username</h2>";
echo "<p>Ini di halaman utama</p>";
echo '<a href="logout.php">Logout</a>';
?>
