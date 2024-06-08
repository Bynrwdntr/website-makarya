<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah SMK Makarya 3 Tangerang</title>
    <link rel="icon" type="image/x-icon" href="logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.0/dist/flowbite.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">    
<header class="shadow-md bg-gray-800 sticky top-0 z-50">
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
<header class="bg-blue-800 text-white p-4 text-center">
    <h1 class="text-3xl font-bold">Sejarah SMK Makarya Tangerang</h1>
</header>
<div class="container mx-auto my-5 p-5 bg-white shadow rounded">
    <section>
        <div class="text-center">
            <img src="logo.jpg" alt="Logo Sekolah" class="mx-auto">
        </div>
        <h2 class="text-2xl font-bold text-center mt-4">SEJARAH BERDIRINYA YAYASAN PENDIDIKAN MAKARYA</h2>
        <p class="text-justify mt-2">
            Sekolah Menengah Kejuruan (SMK) Makarya Tangerang telah menyelenggarakan pendidikan sejak tahun pelajaran 1996/1997. 
            Sekolah ini berlokasi di Jalan Masjid Raya No. 58, Larangan Selatan, Larangan, Tangerang, berdiri di atas tanah seluas 1200 m<sup>2</sup> 
            dengan status kepemilikan Milik Yayasan. SMK Makarya Tangerang merupakan anak cabang SMK Makarya Tanah Kusir (Pondok Pinang) 
            yang berada di bawah naungan Yayasan Pendidikan Makarya, sebuah Yayasan Pendidikan yang telah membuktikan eksistensinya di dunia 
            pendidikan sejak tahun 1981. SMK Makarya Tangerang mendapatkan izin Operasional dari Depdiknas Provinsi Jawa Barat melalui 
            SK No. 1788/I.02.1/Kep/OT/1999 dan terakreditasi oleh Badan Akreditasi Sekolah Provinsi Banten dengan predikat "B" dengan nilai 
            85 melalui SK No. 36.18.00478 tertanggal 12 Desember 2018 yang dikeluarkan oleh BAN S/M Provinsi Banten melalui Keputusan Nomor 
            039/BAN-SM-Prov/SK/2018; diperpanjang sampai 12 Desember 2028 dengan SK BAN S/M No 119/BAN-PDM/SK/2023 dengan Nomor Sertifikat 
            PD.00882/36/2023 tertanggal 12 Desember 2023.
        </p>
        <p class="text-justify">
            Dalam perjalanan pengabdiannya SMK Makarya Tangerang telah meluluskan sebanyak 25 kali sejak (1999/2000), di mana sebagian besar 
            lulusan telah diserap di berbagai instansi/dunia industri yang tersebar di wilayah Jabodetabek, dan sebagian lagi melanjutkan ke 
            perguruan tinggi baik negeri maupun swasta.
        </p>
        <p class="text-justify">
            SMK Makarya Tangerang menyediakan pendidikan dengan biaya terjangkau dan fasilitas serta sarana dan prasarana yang semakin ditingkatkan 
            dan dilengkapi. Sebagian besar staf pengajar SMK Makarya Tangerang telah memiliki Sertifikat Guru dalam Jabatan dari Pemerintah sesuai 
            dengan kualifikasi pendidikan masing-masing.
        </p>
    </section>
</div>
 <!-- Footer Section -->
 <footer class="bg-gray-900 text-gray-300 mt-8">
    <div class="container mx-auto py-6 px-5 flex flex-wrap sm:flex-nowrap justify-between items-start">
        <div class="w-full sm:w-1/3 mb-6 sm:mb-0">
            <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">HUBUNGI KAMI</h2>
            <nav class="list-none">
                <li class="mb-2">
                    <a href="https://wa.me/+6281311121465" class="flex items-center text-gray-400 hover:text-gray-200">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.477 2 2 6.477 2 12c0 1.919.542 3.705 1.478 5.241L2 22l4.887-1.269A9.953 9.953 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a8.947 8.947 0 01-4.753-1.361L7 18l-.264.077A7.973 7.973 0 014 12c0-4.418 3.582-8 8-8s8 3.582 8 8-3.582 8-8 8zm3.97-5.273l-1.204-.551a1.122 1.122 0 00-1.126.095 4.99 4.99 0 01-1.676.659c-1.238.256-2.297-.121-3.182-1.009-1.56-1.558-2.289-3.145-2.187-4.757a4.95 4.95 0 01.704-2.4 1.118 1.118 0 00-.28-1.408L7.27 7.28a1.121 1.121 0 00-1.271-.08 6.345 6.345 0 00-1.723 1.28A7.947 7.947 0 002 12c0 4.418 3.582 8 8 8a7.95 7.95 0 004.632-1.482 6.342 6.342 0 001.28-1.723 1.119 1.119 0 00-.087-1.27z"></path>
                        </svg>Sri Wahyuni
                    </a>
                    <a href="https://wa.me/+6282298743698" class="flex items-center text-gray-400 hover:text-gray-200">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.477 2 2 6.477 2 12c0 1.919.542 3.705 1.478 5.241L2 22l4.887-1.269A9.953 9.953 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a8.947 8.947 0 01-4.753-1.361L7 18l-.264.077A7.973 7.973 0 014 12c0-4.418 3.582-8 8-8s8 3.582 8 8-3.582 8-8 8zm3.97-5.273l-1.204-.551a1.122 1.122 0 00-1.126.095 4.99 4.99 0 01-1.676.659c-1.238.256-2.297-.121-3.182-1.009-1.56-1.558-2.289-3.145-2.187-4.757a4.95 4.95 0 01.704-2.4 1.118 1.118 0 00-.28-1.408L7.27 7.28a1.121 1.121 0 00-1.271-.08 6.345 6.345 0 00-1.723 1.28A7.947 7.947 0 002 12c0 4.418 3.582 8 8 8a7.95 7.95 0 004.632-1.482 6.342 6.342 0 001.28-1.723 1.119 1.119 0 00-.087-1.27z"></path>
                        </svg>Banu Cahyo
                    </a>
                    <a href="https://wa.me/+6285779019823" class="flex items-center text-gray-400 hover:text-gray-200">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.477 2 2 6.477 2 12c0 1.919.542 3.705 1.478 5.241L2 22l4.887-1.269A9.953 9.953 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a8.947 8.947 0 01-4.753-1.361L7 18l-.264.077A7.973 7.973 0 014 12c0-4.418 3.582-8 8-8s8 3.582 8 8-3.582 8-8 8zm3.97-5.273l-1.204-.551a1.122 1.122 0 00-1.126.095 4.99 4.99 0 01-1.676.659c-1.238.256-2.297-.121-3.182-1.009-1.56-1.558-2.289-3.145-2.187-4.757a4.95 4.95 0 01.704-2.4 1.118 1.118 0 00-.28-1.408L7.27 7.28a1.121 1.121 0 00-1.271-.08 6.345 6.345 0 00-1.723 1.28A7.947 7.947 0 002 12c0 4.418 3.582 8 8 8a7.95 7.95 0 004.632-1.482 6.342 6.342 0 001.28-1.723 1.119 1.119 0 00-.087-1.27z"></path>
                        </svg>Defri Prasetya
                    </a>
                </li>
                <li>
                    <a href="mailto:smk.makaryalarangan@gmail.com" class="text-gray-400 hover:text-gray-200">smk.makaryalarangan@gmail.com</a>
                </li>
            </nav>
        </div>
        <div class="w-full sm:w-1/3 mb-6 sm:mb-0 text-center">
            <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">IKUTI KAMI</h2>
            <nav class="list-none flex justify-center space-x-4">
                <li>
                    <a href="https://www.instagram.com/smk.makaryalarangan/" class="text-gray-400 hover:text-gray-200">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.615 3.184c-2.108-1.298-5.527-1.531-7.568-1.531s-5.462.234-7.568 1.531c-2.13 1.304-3.147 3.437-3.147 6.416v4.801c0 2.98 1.017 5.112 3.147 6.416 2.108 1.298 5.527 1.531 7.568 1.531s5.462-.234 7.568-1.531c2.13-1.304 3.147-3.437 3.147-6.416v-4.801c0-2.98-1.017-5.112-3.147-6.416zm-7.615 12.919c-3.151 0-5.682-2.531-5.682-5.682s2.531-5.682 5.682-5.682 5.682 2.531 5.682 5.682-2.531 5.682-5.682 5.682zm6.448-10.573c-.737 0-1.335-.598-1.335-1.335s.598-1.335 1.335-1.335 1.335.598 1.335 1.335-.598 1.335-1.335 1.335zm-6.448 1.946c-2.025 0-3.674 1.649-3.674 3.674s1.649 3.674 3.674 3.674 3.674-1.649 3.674-3.674-1.649-3.674-3.674-3.674z"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/@smkmakaryatangerang4734" class="text-gray-400 hover:text-gray-200">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.54 6.42c-.2-1.42-.85-2.72-2.26-3.33-2.05-.91-10.26-.91-10.26-.91s-8.21 0-10.26.91c-1.41.61-2.06 1.91-2.26 3.33-.23 1.63-.23 5.03-.23 5.03s0 3.39.23 5.03c.2 1.42.85 2.72 2.26 3.33 2.05.91 10.26.91 10.26.91s8.21 0 10.26-.91c1.41-.61 2.06-1.91 2.26-3.33.23-1.63.23-5.03.23-5.03s0-3.39-.23-5.03zm-13.95 8.99v-7.86l6.15 3.93-6.15 3.93z"/>
                        </svg>
                    </a>
                </li>
            </nav>
        </div>
        <div class="w-full sm:w-1/3 text-right">
            <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">ALAMAT</h2>
            <nav class="list-none">
                <li class="mb-2">
                    <span class="text-gray-400">Kp Blok Wareng No.58, RT.003/RW.004, Larangan Selatan</span>
                </li>
                <li class="mb-2">
                    <span class="text-gray-400">Kecamatan Larangan, Kota Tangerang, Banten</span>
                </li>
                <li>
                    <span class="text-gray-400">Kode Pos 15154</span>
                </li>
            </nav>
        </div>
    </div>
    <div class="mt-4 text-center">
        <p class="text-gray-400">&copy; 2023 SMK MAKARYA TANGERANG. All rights reserved.</p>
    </div>
</footer> 
<script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.0/dist/flowbite.min.js"></script>
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
