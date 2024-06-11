<?php
require '../db/conn.php';
session_start();
$isLoggedIn = isset($_SESSION['username']);

// Periksa koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query Database
$sql = "SELECT * FROM news";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Sekolah</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.jpg">
    <!-- Menggunakan CDN Flowbite untuk tata letak dan Tailwind CSS untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.0/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<?php require_once '../layout/header.php';?>  
        <header class="bg-blue-800 text-white p-4 text-center">
        <h1 class="text-3xl font-bold">Berita SMK MAKARYA TANGERANG</h1>
        </header>
        <body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <?php
                // Looping melalui data berita
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="bg-gray-100 p-8 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                        <?php if (isset($row['image']) && $row['image'] != '') : ?>
                            <img src="../<?php echo substr( $row['image'],3); ?>" alt="News Image" class="w-full h-48 object-cover mb-4 rounded">
                        <?php endif; ?>
                        <h3 class="text-xl font-bold mb-4"><?php echo $row['title']; ?></h3>
                        <p class="overflow-hidden text-ellipsis whitespace-nowrap"><?php echo $row['content']; ?></p>
                        <a href="news_detail.php?id=<?php echo $row['id']; ?>" class="text-blue-600 hover:underline">Read more</a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

<?php include '../layout/footer.php';?>

<script src="https://unpkg.com/flowbite@1.5/dist/flowbite.min.js"></script>
<script>
        document.getElementById('mobile-menu-button').onclick = function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        };
    </script>
         <script>
        AOS.init();
        document.getElementById('mobile-menu-button').onclick = function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        };
    </script>

    </body>

</html>