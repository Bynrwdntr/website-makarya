<?php
session_start();
require '../db/conn.php';

if (!isset($_SESSION["user_id"])) {
    header("Location: http://localhost/website-makarya/auth/login.php");
    exit();
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto mt-10 flex flex-col md:flex-row">
        <!-- Sidebar -->
        <aside class="w-full md:w-1/4 bg-white p-6 rounded shadow-md mb-6 md:mb-0">
            <h2 class="text-2xl mb-4">Admin Menu</h2>
            <nav class="space-y-4">
                <a href="../crud/manage_news.php" class="block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">News</a>
                <a href="../crud/manage_users.php" class="block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Users</a>
                <a href="../auth/logout.php" class="block bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Log Out</a>
                <!-- Add more menu items here -->
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="w-full md:w-3/4 bg-white p-6 rounded shadow-md md:ml-6">
            <h1 class="text-3xl mb-6">Admin Panel</h1>
            <p>Welcome to the admin panel. Use the sidebar to manage news and users.</p>
        </main>
    </div>
</body>

</html>
