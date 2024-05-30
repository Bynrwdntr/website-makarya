<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi SMK Makarya Tangerang</title>
    <link rel="icon" type="image/x-icon" href="logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.0/dist/flowbite.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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
                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pendaftaran</a>
                <?php if ($isLoggedIn): ?>
                    <span class="text-gray-300 px-3 py-2 rounded-md text-sm font-medium">Welcome, <?php echo $_SESSION['username']; ?></span>
                <?php else: ?>
                    <a href="login.php" class="bg-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">SIGN IN</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>

    <main class="flex-grow">
        <!-- Pimpinan Sekolah -->
        <section class="mb-6">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Pimpinan Sekolah SMK MAKARYA TANGERANG</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <div class="p-4">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img class="w-full h-40 object-cover" src="fotokosong.jpg" alt="Foto Pimpinan Sekolah">
                        <div class="p-4">
                            <h5 class="text-gray-900 font-bold text-xl mb-2">Mulyadi, S.Pd</h5>
                            <p class="font-normal text-gray-700">Kepala Sekolah</p>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img class="w-full h-40 object-cover" src="fotokosong.jpg" alt="Foto Pimpinan Sekolah">
                        <div class="p-4">
                            <h5 class="text-gray-900 font-bold text-xl mb-2">Dra. Sri Wahyuni</h5>
                            <p class="font-normal text-gray-700">Wakil Kepala Sekolah</p>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img class="w-full h-40 object-cover" src="fotokosong.jpg" alt="Foto Pimpinan Sekolah">
                        <div class="p-4">
                            <h5 class="text-gray-900 font-bold text-xl mb-2">Euis Sri Sugiarti, S.Pd</h5>
                            <p class="font-normal text-gray-700">Wakil Kepala Sekolah</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Guru -->
        <section class="mb-6">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Guru SMK MAKARYA TANGERANG</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <div class="p-4">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img class="w-full h-40 object-cover" src="fotokosong.jpg" alt="Foto Guru 1">
                        <div class="p-4">
                            <h5 class="text-gray-900 font-bold text-xl mb-2">Ratih Sayekti, SE</h5>
                            <p class="font-normal text-gray-700">Kepala Program Bisnis Daring dan Pemasaran</p>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img class="w-full h-40 object-cover" src="fotokosong.jpg" alt="Foto Guru 1">
                        <div class="p-4">
                            <h5 class="text-gray-900 font-bold text-xl mb-2">Wahyuliana, S.Pd</h5>
                            <p class="font-normal text-gray-700">Kepala program Akuntansi dan Keuangan Lembaga</p>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img class="w-full h-40 object-cover" src="fotokosong.jpg" alt="Foto Guru 1">
                        <div class="p-4">
                            <h5 class="text-gray-900 font-bold text-xl mb-2">Hasanah Salamah, S.Pd</h5>
                            <p class="font-normal text-gray-700">Guru Akuntansi</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Staff -->
        <section class="mb-6">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Staff SMK MAKARYA TANGERANG</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <div class="p-4">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img class="w-full h-40 object-cover" src="fotokosong.jpg" alt="Foto Staff 1">
                        <div class="p-4">
                            <h5 class="text-gray-900 font-bold text-xl mb-2">Euis Siti Aisyah</h5>
                            <p class="font-normal text-gray-700">TU</p>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img class="w-full h-40 object-cover" src="fotokosong.jpg" alt="Foto Staff 1">
                        <div class="p-4">
                            <h5 class="text-gray-900 font-bold text-xl mb-2">Dedi Iskandar</h5>
                            <p class="font-normal text-gray-700">Satpam</p>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img class="w-full h-40 object-cover" src="fotokosong.jpg" alt="Foto Staff 1">
                        <div class="p-4">
                            <h5 class="text-gray-900 font-bold text-xl mb-2">Susanti, SE</h5>
                            <p class="font-normal text-gray-700">TU</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-6 mt-6">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <div>
                <p>&copy; 2023 SMK MAKARYA TANGERANG. All rights reserved.</p>
            </div>
            <div>
                <a href="#" class="text-white hover:text-gray-400 mx-2">Privacy Policy</a>
                <a href="#" class="text-white hover:text-gray-400 mx-2">Terms of Service</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.0/dist/flowbite.min.js"></script>
</body>
</html>
