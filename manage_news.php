<?php
require 'conn.php';
session_start();

// if (!isset($_SESSION['user_id'])) {
//     header("Location: index.php");
//     exit();
// }

// Fetch news from the database
$newsQuery = "SELECT * FROM news";
$newsResult = $conn->query($newsQuery);

// Tentukan direktori upload
$upload_dir = 'C:/xampp/htdocs/website-makarya-main/uploads/';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage News</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto mt-10 flex">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-white p-6 rounded shadow-md">
            <h2 class="text-2xl mb-4">Admin Menu</h2>
            <nav class="space-y-4">
                <a href="manage_news.php" class="block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">News</a>
                <a href="manage_users.php" class="block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Users</a>
                <!-- Add more menu items here -->
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="w-3/4 bg-white p-6 rounded shadow-md ml-6">
            <h1 class="text-3xl mb-6">Manage News</h1>
            <a href="create_news.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Add News</a>
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Author</th>
                        <th class="px-4 py-2">Image</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $newsResult->fetch_assoc()) : ?>
                        <tr>
                            <td class="border px-4 py-2"><?php echo $row['id']; ?></td>
                            <td class="border px-4 py-2"><?php echo $row['title']; ?></td>
                            <td class="border px-4 py-2"><?php echo $row['author']; ?></td>
                            <td class="border px-4 py-2">
                                <?php if (isset($row['image']) && $row['image']) : ?>
                                    <?php
                                    // Mengonversi alamat file absolut menjadi URL yang dapat diakses dari web
                                    $image_url = $row['image'];
                                    ?>
                                    <img src="<?php echo $image_url; ?>" alt="News Image" class="h-12 w-12 object-cover">
                                <?php else : ?>
                                    No Image
                                <?php endif; ?>
                            </td>
                            <td class="border px-4 py-2">
                                <a href="edit_news.php?id=<?php echo $row['id']; ?>" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                <a href="delete_news.php?id=<?php echo $row['id']; ?>" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </main>
    </div>
</body>

</html>