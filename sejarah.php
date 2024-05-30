<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
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
<nav class="bg-gray-800">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
        <div class="flex-shrink-0">
            <img class="max-h-16 w-auto" src="logo.png" alt="Logo">
        </div>
        <div class="hidden sm:block">
            <div class="flex space-x-4">
                <a href="landingpage.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                <!-- Dropdown for Informasi Sekolah -->
                <div class="relative">
                    <button onclick="this.nextElementSibling.classList.toggle('hidden');" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                        Informasi Sekolah <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                        <a href="sejarah.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sejarah</a>
                        <a href="visi_misi.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Visi dan Misi</a>
                        <a href="strukturorganisasi.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Struktur Organisasi</a>
                    </div>
                </div>
                <!-- Dropdown for Program Keahlian -->
                <div class="relative">
                    <button onclick="this.nextElementSibling.classList.toggle('hidden');" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                        Program Keahlian <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                        <a href="akuntansi.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Akuntansi Keuangan Lembaga</a>
                        <a href="bisnis.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Bisnis Daring & Pemasaran</a>
                    </div>
                </div>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Kegiatan</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Fasilitas</a>
                <a href="kontak.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Kontak</a>
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pendaftaran</a>
            </div>
        </div>
        <div class="login flex items-center">
            <?php if ($username == 'Guest'): ?>
                <a href="login.php" class="block px-4 py-2 text-sm text-green-600 hover:bg-gray-100">
                    <button>SIGN IN</button>
                </a>
            <?php else: ?>
                <span class="text-white mr-4">Welcome, <?php echo htmlspecialchars($username); ?></span>
                <a href="logout.php" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                    <button>LOGOUT</button>
                </a>
            <?php endif; ?>
        </div>
    </div>
</nav>
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
<script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.0/dist/flowbite.min.js"></script>
</body>
</html>
