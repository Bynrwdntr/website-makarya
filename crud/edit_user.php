<?php
require '../db/conn.php';
session_start();

// if (!isset($_SESSION['user_id'])) {
//     header("Location: index.php");
//     exit();
// }

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Fetch user details
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();
} else {
    header("Location: manage_users.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("UPDATE users SET username = ?, password = SHA2(?, 256) WHERE id = ?");
    $stmt->bind_param("ssi", $username, $password, $id);

    if ($stmt->execute()) {
        header("Location: manage_users.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto mt-10 flex">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-white p-6 rounded shadow-md">
            <h2 class="text-2xl mb-4">Admin Menu</h2>
            <nav class="space-y-4">
                <a href="manage_news.php" class="block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Manage News</a>
                <a href="manage_users.php" class="block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Manage Users</a>
                <!-- Add more menu items here -->
            </nav>
        </aside>
        <!-- Main Content -->
        <main class="w-3/4 bg-white p-6 rounded shadow-md ml-6">
            <h1 class="text-3xl mb-6">Edit User</h1>
            <form action="edit_user.php?id=<?php echo $id; ?>" method="post" class="bg-white">
                <div class="mb-4">
                    <label for="username" class="block text-gray-700">Username:</label>
                    <input type="text" id="username" name="username" class="w-full px-4 py-2 border rounded-md" value="<?php echo $user['username']; ?>" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password:</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-md" required>
                </div>
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Update</button>
            </form>
        </main>
    </div>
</body>

</html>