<?php
require '../db/conn.php';
session_start();

// if (!isset($_SESSION['user_id'])) {
//     header("Location: index.php");
//     exit();
// }

// Tentukan direktori upload
$upload_dir = 'C:/xampp/htdocs/website-makarya-main/uploads/';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];
    $author = $_POST["author"];

    // Periksa apakah file gambar baru diunggah
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        // Mengunggah gambar baru
        $allowed_ext = array("jpg", "jpeg", "png", "gif");
        $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
        if (in_array($ext, $allowed_ext)) {
            // Generate unique name for the image to prevent overwriting existing images
            $image_name = uniqid() . '.' . $ext;
            $image_path = "../uploads/". $image_name;
            // Move uploaded image to specified location
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $image_path)) {
                // Image uploaded successfully, continue with database operations

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Query untuk menyimpan data berita baru ke database
                $sql = "INSERT INTO news (title, content, author, image) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssss", $title, $content, $author, $image_path);

                if ($stmt->execute()) {
                    header("Location: manage_news.php");
                    exit();
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
                $conn->close();
            } else {
                echo "Error uploading image.";
                exit();
            }
        } else {
            echo "Invalid file format. Only JPG, JPEG, PNG, and GIF are allowed.";
            exit();
        }
    } else {
        echo "Image file is required.";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add News</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto mt-10 flex flex-col md:flex-row">
        <!-- Sidebar -->
        <aside class="w-full md:w-1/4 bg-white p-6 rounded shadow-md mb-6 md:mb-0">
            <h2 class="text-2xl mb-4">Admin Menu</h2>
            <nav class="space-y-4">
                <a href="../crud/manage_news.php" class="block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Manage News</a>
                <a href="../crud/manage_users.php" class="block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Manage Users</a>
                <!-- Add more menu items here -->
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="w-full md:w-3/4 bg-white p-6 rounded shadow-md md:ml-6">
            <h1 class="text-3xl mb-6">Add News</h1>
            <form action="create_news.php" method="post" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="title" class="block text-gray-700">Title:</label>
                    <input type="text" id="title" name="title" class="w-full px-4 py-2 border rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="content" class="block text-gray-700">Content:</label>
                    <textarea id="content" name="content" rows="4" class="w-full px-4 py-2 border rounded-md" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="author" class="block text-gray-700">Author:</label>
                    <input type="text" id="author" name="author" class="w-full px-4 py-2 border rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-gray-700">Image:</label>
                    <input type="file" id="image" name="image" class="w-full px-4 py-2 border rounded-md" accept="image/*" required>
                </div>
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add</button>
            </form>
        </main>
    </div>
</body>

</html>
