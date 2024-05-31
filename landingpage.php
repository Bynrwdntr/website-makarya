<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK MAKARYA 3 TANGERANG</title>
    <link rel="icon" type="image/x-icon" href="logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5/dist/flowbite.min.css" />
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
<header class="shadow-md bg-gray-800">
        <nav class="container mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center py-4">
            <div class="flex items-center space-x-4">
                <img class="max-h-16 w-auto" src="logo.png" alt="Logo">
            </div>
            <div class="hidden sm:flex space-x-4 ml-auto">
                <a href="landingpage.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                <div class="relative">
                    <button onclick="this.nextElementSibling.classList.toggle('hidden');"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium flex items-center">
                        Informasi Sekolah
                        <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50">
                        <a href="sejarah.php"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sejarah</a>
                        <a href="visi_misi.php"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Visi dan Misi</a>
                        <a href="strukturorganisasi.php"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Struktur Organisasi</a>
                    </div>
                </div>
                <div class="relative">
                    <button onclick="this.nextElementSibling.classList.toggle('hidden');"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium flex items-center">
                        Program Keahlian
                        <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round
                            d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50">
                        <a href="akuntansi.php"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Akuntansi Keuangan
                            Lembaga</a>
                        <a href="bisnis.php"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Bisnis Daring &
                            Pemasaran</a>
                    </div>
                </div>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Kegiatan</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Fasilitas</a>
                <a href="kontak.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Kontak</a>
                <a href="pendaftaran.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pendaftaran</a>
                <?php if ($isLoggedIn): ?>
                    <span class="text-gray-300 px-3 py-2 rounded-md text-sm font-medium">Welcome, <?php echo $_SESSION['username']; ?></span>
                    <a href="logout.php" class="bg-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">LOG OUT</a>
                <?php else: ?>
                    <a href="login.php" class="bg-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">SIGN IN</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>

    <main class="flex-grow">
        <div id="gallery" class="relative w-full" data-carousel="slide">
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg"
                        class="absolute block w-full h-auto top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                        alt="Image 1">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg"
                        class="absolute block w-full h-auto top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                        alt="Image 2">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg"
                        class="absolute block w-full h-auto top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                        alt="Image 3">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg"
                        class="absolute block w-full h-auto top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                        alt="Image 4">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg"
                        class="absolute block w-full h-auto top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                        alt="Image 5">
                </div>
            </div>
            <button type="button"
                class="absolute top-1/2 left-0 z-50 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none transform -translate-y-1/2"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 group-hover:bg-black/50 group-focus:ring-4 group-focus:ring-black group-focus:outline-none">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 19l-7-7 7-7"></path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-1/2 right-0 z-50 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none transform -translate-y-1/2"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 group-hover:bg-black/50 group-focus:ring-4 group-focus:ring-black group-focus:outline-none">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <section class="mt-8">
            <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">Tentang Kami</h2>
            <p class="text-gray-600 text-center max-w-3xl mx-auto">
                SMK MAKARYA 3 TANGERANG adalah lembaga pendidikan kejuruan yang berkomitmen untuk menghasilkan lulusan yang kompeten dan siap kerja di bidang Akuntansi dan Bisnis Daring & Pemasaran.
            </p>
        </section>

        <section class="mt-8">
            <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">Program Keahlian</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold mb-4 text-center text-gray-800">Akuntansi Keuangan Lembaga</h3>
                    <p class="text-gray-600 text-center">
                        Pelajari dasar-dasar akuntansi, pengelolaan keuangan lembaga, dan pelaporan keuangan.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold mb-4 text-center text-gray-800">Bisnis Daring & Pemasaran</h3>
                    <p class="text-gray-600 text-center">
                        Kuasai strategi pemasaran digital, pembuatan konten kreatif, dan pengelolaan bisnis online.
                    </p>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-auto">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-300 hover:text-white">Facebook</a>
                    <a href="https://www.instagram.com/smk.makaryalarangan/" class="text-gray-300 hover:text-white">Instagram</a>
                    <a href="#" class="text-gray-300 hover:text-white">Twitter</a>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-300 hover:text-white">Kontak</a>
                    <a href="#" class="text-gray-300 hover:text-white">Pendaftaran</a>
                    <a href="#" class="text-gray-300 hover:text-white">FAQ</a>
                </div>
            </div>
            <div class="mt-4 text-center">
                <p class="text-gray-300">&copy; 2023 SMK MAKARYA 3 TANGERANG. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
