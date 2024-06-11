<?php
$servername = "localhost";
$username = "admin";  // Ganti dengan pengguna MySQL Anda
$password = "bayu030702";      // Ganti dengan password MySQL Anda
$dbname = "mydatabase";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = 'admin@gmail.com';
$password = 'admin123'; // Password plain text yang akan di-hash
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO users (email, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $hashed_password);

if ($stmt->execute()) {
    echo "User added successfully.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
