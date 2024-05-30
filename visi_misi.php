<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi, Misi, dan Tujuan SMK Makarya Tangerang</title>
    <link rel="icon" type="image/x-icon" href="logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.0/dist/flowbite.min.css" rel="stylesheet"/>
</head>
<body>
    <nav class="bg-gray-800">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <div class="flex-shrink-0">
                <img class="max-h-16 w-auto" src="logo.png" alt="Logo">
            </div>
            <div class="hidden sm:block">
                <div class="flex space-x-4">
                    <a href="landingpage.html" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <!-- Dropdown for Informasi Sekolah -->
                    <div class="relative">
                        <button onclick="this.nextElementSibling.classList.toggle('hidden');" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                            Informasi Sekolah <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                            <a href="sejarah.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sejarah</a>
                            <a href="visi_misi.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Visi dan Misi</a>
                            <a href="strukturorganisasi.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Struktur Organisasi</a>
                        </div>
                    </div>
                    <!-- Dropdown for Program Keahlian -->
                    <div class="relative">
                        <button onclick="this.nextElementSibling.classList.toggle('hidden');" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                            Program Keahlian <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                            <a href="akuntansi.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Akuntansi Keuangan Lembaga</a>
                            <a href="bisnis.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Bisnis Daring & Pemasaran</a>
                        </div>
                    </div>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Kegiatan</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Fasilitas</a>
                    <a href="kontak.html" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Kontak</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pendaftaran</a>
                    <?php if ($isLoggedIn): ?>
                        <span class="text-gray-300 px-3 py-2 rounded-md text-sm font-medium">Welcome, <?php echo $_SESSION['username']; ?></span>
                    <?php else: ?>
                        <a href="login.html" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">SIGN IN</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
    <header class="bg-blue-800 text-white p-4 text-center">
        <h1 class="text-3xl font-bold">Visi, Misi, dan Tujuan SMK Makarya Tangerang</h1>
    </header>
    <div class="container mx-auto p-4">
        <section class="mb-4">
            <div class="card bg-white shadow-lg rounded-lg p-4">
                <img src="logo.jpg" alt="Visi, Misi, dan Tujuan SMK Makarya Tangerang" class="rounded-full w-20 h-20 mx-auto mb-4">
                <h2 class="text-2xl font-bold text-center mb-2">Visi</h2>
                <p class="text-gray-600 text-center">"Menjadi lembaga pendidikan dan pelatihan yang mampu menghasilkan output yang beriman, terampil, berilmu, menguasai teknologi, dan beretika."</p>
            </div>
        </section>
        <section class="mb-4">
            <div class="card bg-white shadow-lg rounded-lg p-4">
                <h2 class="text-2xl font-bold text-center mb-2">Misi</h2>
                <ul class="list-disc pl-5 text-gray-600">
                    <li>Melaksanakan pembelajaran berwawasan keunggulan untuk menghasilkan tamatan yang bertakwa.</li>
                    <li>Melaksanakan pembelajaran untuk menghasilkan tamatan yang mempunyai unjuk kerja dan kemampuan untuk meningkatkan kualitas kehidupannya.</li>
                    <li>Melaksanakan pembelajaran yang menghasilkan tamatan yang mempunyai disiplin diri.</li>
                    <li>Mengembangkan budaya saling kunjung dan saling bantu.</li>
                    <li>Membiasakan tegur sapa antar siswa dan guru.</li>
                </ul>
            </div>
        </section>
        <section class="mb-4">
            <div class="card bg-white shadow-lg rounded-lg p-4">
                <h2 class="text-2xl font-bold text-center mb-2">Tujuan</h2>
                <ul class="list-disc pl-5 text-gray-600">
                    <li>Mempersiapkan tamatan yang memiliki kepribadian dan berakhlak mulia sebagai tenaga kerja tingkat menengah yang kompeten sesuai Paket Keahlian pilihan peserta didik.</li>
                    <li>Membekali peserta didik untuk berkarir, mandiri dan mampu beradaptasi di lingkungan kerja sesuai dengan bidangnya dan mampu menghadapi perubahan yang terjadi di masyarakat.</li>
                    <li>Membekali peserta didik dengan sikap profesional untuk mengembangkan diri dan mampu berkompetisi.</li>
                </ul>
            </div>
        </section>
    </div>
</body>
</html>
