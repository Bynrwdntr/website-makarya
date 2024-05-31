<?php
include 'config.php';

$email = 'admin@gmail.com';
$password = 'admin'; // Password plain text yang akan di-hash
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO users (email, password) VALUES (?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ss", $email, $hashed_password);

if (mysqli_stmt_execute($stmt)) {
    echo "User added successfully.";
} else {
    echo "Error: " . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
