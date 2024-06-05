<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Keahlian Bisnis Daring dan Pemasaran</title>
    <link rel="icon" type="image/x-icon" href="logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5/dist/flowbite.min.css" />
</head>
<body>

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

<main class="container mx-auto my-5">
    <div class="text-center">
        <h1 class="text-3xl font-bold underline">Program Keahlian Bisnis Daring dan Pemasaran</h1>
    </div>

    <div class="flex justify-center items-center my-5">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg" src="fotokosong.jpg" alt="Foto Ketua Program" />
            <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Ketua Program</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ratih Sayekti, SE</p>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h2 class="text-2xl font-bold">Deskripsi</h2>
        <p class="mt-2 text-gray-700">Program keahlian Bisnis Daring dan Pemasaran adalah bidang studi yang dirancang untuk mengembangkan keterampilan dan pengetahuan dalam menjalankan bisnis secara online serta menerapkan strategi pemasaran modern. Program ini mencakup berbagai aspek penting, seperti e-commerce yang mengajarkan cara membangun dan mengelola toko online, serta digital marketing yang fokus pada strategi pemasaran digital seperti SEO, SEM, media sosial, konten pemasaran, dan email marketing. Selain itu, program ini juga mencakup manajemen bisnis, di mana siswa mempelajari dasar-dasar perencanaan bisnis, pengelolaan sumber daya, dan pengambilan keputusan. Analisis data diajarkan untuk mengukur kinerja pemasaran, memahami perilaku konsumen, dan membuat keputusan berbasis data. Kewirausahaan menjadi bagian integral, mengembangkan kemampuan untuk merancang, memulai, dan mengelola usaha baru dalam dunia digital. Siswa juga mempelajari Customer Relationship Management (CRM) untuk mengelola hubungan dengan pelanggan dan meningkatkan loyalitas serta kepuasan mereka. Program ini bertujuan menghasilkan profesional yang mampu beradaptasi dengan cepat dalam dunia bisnis digital yang terus berkembang, memiliki keterampilan dalam memanfaatkan teknologi digital untuk pemasaran, dan mampu mengelola serta mengembangkan bisnis daring secara efektif, dengan pemahaman mendalam tentang tren digital terbaru dan kemampuan menerapkan strategi pemasaran inovatif.</p>
    </div>

    <div class="mt-5">
        <h2 class="text-2xl font-bold">Visi</h2>
        <p class="mt-2 text-gray-700">“Menjadi Kompetensi Keahlian yang mampu menghasilkan output yang beriman terampil, dan berilmu dalam bidang Bisnis Daring dan Pemasaran, menguasai teknologi Bisnis Daring dan Pemasaran dan beretika.”</p>
    </div>

    <div class="mt-5">
        <h2 class="text-2xl font-bold">Misi</h2>
        <ul class="list-disc pl-5 mt-2 text-gray-700">
            <li class="mb-2">Melaksanakan pembelajaran Kompetensi Keahlian Bisnis Daring dan Pemasaran yang berwawasan keunggulan untuk menghasilkan tamatan yang bertakwa.</li>
            <li class="mb-2">Melaksanakan pembelajaran Kompetensi Keahlian Bisnis Daring dan Pemasaran untuk menghasilkan tamatan yang mempunyai unjuk kerja dan kemampuan bidang Bisnis Daring dan Pemasaran untuk meningkatkan kualitas kehidupannya.</li>
            <li class="mb-2">Melaksanakan pembelajaran Kompetensi Keahlian Bisnis Daring dan Pemasaran yang menghasilkan tamatan yang mempunyai disiplin diri.</li>
            <li class="mb-2">Mengembangkan budaya saling kunjung dan saling bantu.</li>
            <li class="mb-2">Membiasakan tegur sapa antar siswa dan guru.</li>
        </ul>
    </div>
    
</main>
 <!-- Footer Section -->
 <footer class="bg-gray-800 text-gray-300 mt-8">
        <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row justify-between">
            <div class="w-full sm:w-auto sm:px-4 mb-4 sm:mb-0">
                <h2 class="title-font font-medium text-gray-400 tracking-widest text-sm mb-3">HUBUNGI KAMI:</h2>
                <nav class="list-none mb-10">
                    <li>
                        <a href="https://wa.me/1234567890" class="text-gray-400 hover:text-gray-200">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.477 2 2 6.477 2 12c0 1.919.542 3.705 1.478 5.241L2 22l4.887-1.269A9.953 9.953 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a8.947 8.947 0 01-4.753-1.361L7 18l-.264.077A7.973 7.973 0 014 12c0-4.418 3.582-8 8-8s8 3.582 8 8-3.582 8-8 8zm3.97-5.273l-1.204-.551a1.122 1.122 0 00-1.126.095 4.99 4.99 0 01-1.676.659c-1.238.256-2.297-.121-3.182-1.009-1.56-1.558-2.289-3.145-2.187-4.757a4.95 4.95 0 01.704-2.4 1.118 1.118 0 00-.28-1.408L7.27 7.28a1.121 1.121 0 00-1.271-.08 6.345 6.345 0 00-1.723 1.28A7.947 7.947 0 002 12c0 4.418 3.582 8 8 8a7.95 7.95 0 004.632-1.482 6.342 6.342 0 001.28-1.723 1.119 1.119 0 00-.087-1.27z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:smkm@makarya.sch.id" class="text-gray-400 hover:text-gray-200">smkm@makarya.sch.id</a>
                    </li>
                </nav>
            </div>
            <div class="w-full sm:w-auto sm:px-4 mb-4 sm:mb-0 text-center">
                <h2 class="title-font font-medium text-gray-400 tracking-widest text-sm mb-3">IKUTI KAMI:</h2>
                <nav class="list-none mb-10 flex justify-center space-x-4">
                    <li>
                    <a href="https://www.instagram.com/smk.makaryalarangan/" class="text-gray-400 hover:text-gray-200">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19.615 3.184c-2.108-1.298-5.527-1.531-7.568-1.531s-5.462.234-7.568 1.531c-2.13 1.304-3.147 3.437-3.147 6.416v4.801c0 2.98 1.017 5.112 3.147 6.416 2.108 1.298 5.527 1.531 7.568 1.531s5.462-.234 7.568-1.531c2.13-1.304 3.147-3.437 3.147-6.416v-4.801c0-2.98-1.017-5.112-3.147-6.416zm-7.615 12.919c-3.151 0-5.682-2.531-5.682-5.682s2.531-5.682 5.682-5.682 5.682 2.531 5.682 5.682-2.531 5.682-5.682 5.682zm6.448-10.573c-.737 0-1.335-.598-1.335-1.335s.598-1.335 1.335-1.335 1.335.598 1.335 1.335-.598 1.335-1.335 1.335zm-6.448 1.946c-2.025 0-3.674 1.649-3.674 3.674s1.649 3.674 3.674 3.674 3.674-1.649 3.674-3.674-1.649-3.674-3.674-3.674z"/>
                    </svg>
                </a>
                <a href="https://www.youtube.com/@smkmakaryatangerang4734" class="text-gray-400 hover:text-gray-200">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22.54 6.42c-.2-1.42-.85-2.72-2.26-3.33-2.05-.91-10.26-.91-10.26-.91s-8.21 0-10.26.91c-1.41.61-2.06 1.91-2.26 3.33-.23 1.63-.23 5.03-.23 5.03s0 3.39.23 5.03c.2 1.42.85 2.72 2.26 3.33 2.05.91 10.26.91 10.26.91s8.21 0 10.26-.91c1.41-.61 2.06-1.91 2.26-3.33.23-1.63.23-5.03.23-5.03s0-3.39-.23-5.03zm-13.95 8.99v-7.86l6.15 3.93-6.15 3.93z"/>
                    </svg>
                </a>
                    </li>
                </nav>
            </div>
            <div class="w-full sm:w-auto sm:px-4 text-right">
                <h2 class="title-font font-medium text-gray-400 tracking-widest text-sm mb-3">ALAMAT:</h2>
                <nav class="list-none mb-10">
                    <li>
                        <span class="text-gray-400">Kp Blok Wareng No.58, RT.003/RW.004, Larangan Selatan</span>
                    </li>
                    <li>
                        <span class="text-gray-400">Kecamatan Larangan, Kota Tangerang, Banten</span>
                    </li>
                    <li>
                        <span class="text-gray-400">Kode Pos 15154</span>
                    </li>
                </nav>
            </div>
        </div>
          <div class="mt-4 text-center">
                <p class="text-gray-300">&copy; 2023 SMK MAKARYA 3 TANGERANG. All rights reserved.</p>
            </div>
        </div>
    </footer>
<script src="https://unpkg.com/flowbite@1.5/dist/flowbite.min.js"></script>

</body>
</html>
