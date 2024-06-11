<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Kegiatan SMK Makarya Tangerang</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.0/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<?php require_once '../layout/header.php';?>
<body class="bg-gray-100 text-gray-800">
    <main class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold text-center mb-8">Galeri Kegiatan SMK Makarya Tangerang</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="../img/paskibra.jpg" alt="Kegiatan 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Paskibra</h3>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="../img/classmeeting.jpg" alt="Kegiatan 2" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Class Meeting</h3>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="../img/beautyclass.jpg" alt="Kegiatan 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Beauty Class</h3>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="../img/santunan.jpg" alt="Kegiatan 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Santunan</h3>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="../img/lcc.jpg" alt="Kegiatan 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Lomba Cerdas Cermat</h3>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="../img/magang.jpg" alt="Kegiatan 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Magang Mahasiswa</h3>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="../img/maulidnabi.jpg" alt="Kegiatan 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Maulid Nabi</h3>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="../img/mpls.jpg" alt="Kegiatan 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">MPLS</h3>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="../img/pemberian beasiswa siswa berprestasi.jpg" alt="Kegiatan 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Pemberian Beasiswa Siswa Berprestasi</h3>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="../img/pembinaan siswa.jpg" alt="Kegiatan 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Pembinaan Siswa</h3>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="../img/penyuluhan dinas kesehatan.jpg" alt="Kegiatan 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Penyuluhan dari Dinas Kesehatan</h3>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="../img/perpisahan.jpg" alt="Kegiatan 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Pelepasan dan Wisuda</h3>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="../img/ujikompetensi.jpeg" alt="Kegiatan 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Uji Kompetensi</h3>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="../img/upacara.jpg" alt="Kegiatan 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Upacara Bendera</h3>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="../img/lombakompetensi.jpg" alt="Kegiatan 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Lomba Kompetensi Siswa</h3>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="../img/kegiatankesiswaan.jpg" alt="Kegiatan 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Kegiatan Kesiswaan SMK</h3>
                </div>
            </div>
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
