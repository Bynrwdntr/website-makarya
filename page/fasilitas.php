<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas SMK Makarya Tangerang</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.0/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<?php require_once '../layout/header.php';?>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
    <main class="container mx-auto py-8 flex-grow">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Fasilitas SMK Makarya Tangerang</h1>
        <div class="gallery-wrap grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <div class="relative">
                <img src="../img/foto lapangan makarya.png" alt="Kegiatan 1" class="w-full h-64 object-cover">
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-center py-2">Lapangan</div>
            </div>
            <div class="relative">
                <img src="../img/ruangkelas.jpg" alt="Kegiatan 2" class="w-full h-64 object-cover">
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-center py-2">Kelas</div>
            </div>
            <div class="relative">
                <img src="../img/labkom.jpg" alt="Kegiatan 3" class="w-full h-64 object-cover">
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-center py-2">Laboratorium Komputer</div>
            </div>
            <div class="relative">
                <img src="../img/perpus.jpg" alt="Kegiatan 3" class="w-full h-64 object-cover">
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-center py-2">Perpustakaan</div>
            </div>
            <div class="relative">
                <img src="../img/gerbang.jpg" alt="Kegiatan 3" class="w-full h-64 object-cover">
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-center py-2">Gedung</div>
            </div>
            <!-- Add more images as needed -->
        </div>
    </main>

<?php include '../layout/footer.php';?>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.0/dist/flowbite.min.js"></script>
    <script>
        function toggleDropdown(dropdownId) {
            var dropdown = document.getElementById(dropdownId);
            dropdown.classList.toggle('hidden');
        }

        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
