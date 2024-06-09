<?php
require 'conn.php';
session_start();

// if (!isset($_SESSION['user_id'])) {
//     header("Location: index.php");
//     exit();
// }

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: manage_users.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    header("Location: manage_users.php");
    exit();
}
