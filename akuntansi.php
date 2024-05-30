<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Keahlian Akuntansi dan Keuangan Lembaga</title>
    <link rel="icon" type="image/x-icon" href="logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5/dist/flowbite.min.css" />
</head>
<body>

<header>
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
                    <?php if ($isLoggedIn): ?>
                    <span class="text-gray-300 px-3 py-2 rounded-md text-sm font-medium">Welcome, <?php echo $_SESSION['username']; ?></span>
                <?php else: ?>
                    <a href="login.php" class="bg-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">SIGN IN</a>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</header>

<main class="container mx-auto my-5">
    <div class="text-center">
        <h1 class="text-3xl font-bold underline">Program Keahlian Akuntansi dan Keuangan Lembaga</h1>
    </div>

    <div class="flex justify-center items-center my-5">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg" src="fotokosong.jpg" alt="Foto Ketua Program" />
            <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Ketua Program</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Wahyuliana, S.Pd</p>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h2 class="text-2xl font-bold">Deskripsi</h2>
        <p class="mt-2 text-gray-700">Program keahlian Akuntansi dan Keuangan Lembaga adalah bidang studi yang dirancang untuk memberikan pengetahuan dan keterampilan yang dibutuhkan dalam mengelola keuangan dan akuntansi di berbagai organisasi, termasuk perusahaan, lembaga keuangan, dan pemerintahan. Program ini mencakup berbagai komponen utama, seperti akuntansi keuangan yang mengajarkan penyusunan dan analisis laporan keuangan, serta akuntansi manajemen yang fokus pada penggunaan data keuangan untuk perencanaan dan pengambilan keputusan. Selain itu, perpajakan juga menjadi bagian penting, di mana siswa mempelajari peraturan perpajakan dan penerapannya dalam laporan pajak. Aspek audit dan pemeriksaan keuangan melatih siswa untuk menilai keandalan laporan keuangan, sementara sistem informasi akuntansi memperkenalkan penggunaan teknologi dalam pengelolaan data keuangan. Manajemen keuangan, yang mencakup perencanaan, pengelolaan, dan pengendalian sumber daya keuangan, juga merupakan bagian integral dari program ini. Dengan kurikulum yang komprehensif, program ini bertujuan menghasilkan profesional yang kompeten, memiliki keterampilan analitis dan pemecahan masalah yang baik, serta menjunjung tinggi integritas dan etika profesional dalam praktik akuntansi dan keuangan.</p>
    </div>

    <div class="mt-5">
        <h2 class="text-2xl font-bold">Visi</h2>
        <p class="mt-2 text-gray-700">“Menjadi Program Keahlian yang mampu menghasilkan output yang beriman, terampil, dan berilmu dalam bidang Akuntansi, menguasai teknologi Akuntansi dan beretika.”</p>
    </div>

    <div class="mt-5">
        <h2 class="text-2xl font-bold">Misi</h2>
        <ul class="list-disc pl-5 mt-2 text-gray-700">
            <li class="mb-2">Melaksanakan pembelajaran program keahlian Akuntansi yang berwawasan keunggulan untuk menghasilkan tamatan yang bertakwa.</li>
            <li class="mb-2">Melaksanakan pembelajaran program keahlian Akuntansi untuk menghasilkan tamatan yang mempunyai unjuk kerja dan kemampuan bidang Akuntansi untuk meningkatkan kualitas kehidupannya.</li>
            <li class="mb-2">Melaksanakan pembelajaran program keahlian Akuntansi yang menghasilkan tamatan yang mempunyai disiplin diri.</li>
            <li class="mb-2">Mengembangkan budaya saling kunjung dan saling bantu.</li>
            <li class="mb-2">Membiasakan tegur sapa antar siswa dan guru.</li>
        </ul>
    </div>
</main>

<script src="https://unpkg.com/flowbite@1.5/dist/flowbite.min.js"></script>

</body>
</html>
