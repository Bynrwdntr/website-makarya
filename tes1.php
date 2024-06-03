<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK MAKARYA 3 TANGERANG</title>
    <link rel="icon" type="image/x-icon" href="logo.jpg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.1/flowbite.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        .swiper-container {
            width: 100%;
            height: 100%;
        }
        .swiper-slide img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
    </style>
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
                    <button onclick="this.nextElementSibling.classList.toggle('hidden');" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium flex items-center">
                        Informasi Sekolah
                        <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50">
                        <a href="sejarah.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sejarah</a>
                        <a href="visi_misi.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Visi dan Misi</a>
                        <a href="strukturorganisasi.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Struktur Organisasi</a>
                    </div>
                </div>
                <div class="relative">
                    <button onclick="this.nextElementSibling.classList.toggle('hidden');" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium flex items-center">
                        Program Keahlian
                        <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50">
                        <a href="akuntansi.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Akuntansi Keuangan Lembaga</a>
                        <a href="bisnis.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Bisnis Daring & Pemasaran</a>
                    </div>
                </div>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Kegiatan</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Fasilitas</a>
                <a href="kontak.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Kontak</a>
                <a href="pendaftaran.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pendaftaran</a>
                <?php if ($isLoggedIn): ?>
                    <span class="text-gray-300 px-3 py-2 rounded-md text-sm font-medium">Welcome, <?php echo $_SESSION['username']; ?></span>
                <?php else: ?>
                    <a href="login.php" class="bg-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">SIGN IN</a>
                <?php endif; ?>
            </div>
            <button class="sm:hidden flex items-center text-gray-300" id="mobile-menu-button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </nav>
        <div class="sm:hidden hidden" id="mobile-menu">
            <a href="landingpage.php" class="block text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
            <button onclick="this.nextElementSibling.classList.toggle('hidden');" class="block text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium w-full text-left">Informasi Sekolah</button>
            <div class="hidden">
                <a href="sejarah.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sejarah</a>
                <a href="visi_misi.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Visi dan Misi</a>
                <a href="strukturorganisasi.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Struktur Organisasi</a>
            </div>
            <button onclick="this.nextElementSibling.classList.toggle('hidden');" class="block text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium w-full text-left">Program Keahlian</button>
            <div class="hidden">
                <a href="akuntansi.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Akuntansi Keuangan Lembaga</a>
                <a href="bisnis.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Bisnis Daring & Pemasaran</a>
            </div>
            <a href="#" class="block text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Kegiatan</a>
            <a href="#" class="block text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Fasilitas</a>
            <a href="kontak.php" class="block text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Kontak</a>
            <a href="pendaftaran.php" class="block text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pendaftaran</a>
            <?php if ($isLoggedIn): ?>
                <span class="block text-gray-300 px-3 py-2 rounded-md text-sm font-medium">Welcome, <?php echo $_SESSION['username']; ?></span>
            <?php else: ?>
                <a href="login.php" class="block bg-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">SIGN IN</a>
            <?php endif; ?>
        </div>
    </header>
    <main class="flex-grow">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="foto lapangan makarya.png" alt="Slide 1">
                </div>
                <div class="swiper-slide">
                    <img src="slide2.jpg" alt="Slide 2">
                </div>
                <div class="swiper-slide">
                    <img src="slide3.jpg" alt="Slide 3">
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </main>
    <footer class="bg-gray-800 text-gray-300 py-4">
        <div class="container mx-auto px-4">
            <p class="text-center">&copy; 2023 SMK MAKARYA 3 TANGERANG. All rights reserved.</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.1/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        AOS.init();

        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        var swiper = new Swiper('.swiper-container', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
</html>
