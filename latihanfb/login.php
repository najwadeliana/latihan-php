<?php
session_start();

// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'coba');
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Handle proses pendaftaran
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $gender = $_POST['gender'];

    // Validasi password cocok
    if ($password !== $repassword) {
        echo "Password tidak cocok!";
    } else {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Simpan ke database
        $sql = "INSERT INTO login (username, password, gender) VALUES ('$username', '$hashed_password', '$gender')";

        if ($conn->query($sql) === TRUE) {
            echo "User berhasil terdaftar!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Handle proses login
if (isset($_POST['login'])) {
    $username = $_POST['login_username'];
    $password = $_POST['login_password'];

    // Cek user di database
    $sql = "SELECT * FROM login WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
            exit();
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login dan Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 800px;
            background-color: white;
            padding: 30px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
        }
        form {
            display: grid;
            gap: 15px;
        }
        .form-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .form-group label {
            width: 30%;
        }
        .form-group input {
            width: 65%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group input[type="radio"] {
            width: auto;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        hr {
            margin: 30px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Proses Login</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label>Username :</label>
            <input type="text" name="login_username" required>
        </div>
        <div class="form-group">
            <label>Password :</label>
            <input type="password" name="login_password" required>
        </div>
        <input type="submit" name="login" value="Login">
    </form>

    <hr>

    <h2>Pendaftaran User</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label>Username :</label>
            <input type="text" name="username" required>
        </div>
        <div class="form-group">
            <label>Password :</label>
            <input type="password" name="password" required>
        </div>
        <div class="form-group">
            <label>Re-type Password :</label>
            <input type="password" name="repassword" required>
        </div>
        <div class="form-group">
            <label>Gender :</label>
            <input type="radio" name="gender" value="Laki-laki" required> Laki-laki
            <input type="radio" name="gender" value="Perempuan" required> Perempuan
        </div>
        <input type="submit" name="signup" value="Sign Up">
    </form>
</div>

</body>
</html>
