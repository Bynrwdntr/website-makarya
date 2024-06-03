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
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.0/dist/flowbite.min.css" rel="stylesheet" />
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
        <!-- Pimpinan Sekolah -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Pimpinan Sekolah SMK MAKARYA TANGERANG</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Mulyadi, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Mulyadi, S.Pd</h5>
                        <p class="font-normal text-gray-700">Kepala Sekolah</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Dra. Sri Wahyuni">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Dra. Sri Wahyuni</h5>
                        <p class="font-normal text-gray-700">Wakil Kepala Sekolah</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Guru -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Guru SMK MAKARYA TANGERANG</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Ratih Sayekti, SE">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Ratih Sayekti, SE</h5>
                        <p class="font-normal text-gray-700">Kepala Program Bisnis Daring dan Pemasaran</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Wahyuliana, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Wahyuliana, S.Pd</h5>
                        <p class="font-normal text-gray-700">Kepala Program Akuntansi dan Keuangan Lembaga</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Euis Sri Sugiarti, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Euis Sri Sugiarti, S.Pd</h5>
                        <p class="font-normal text-gray-700">Guru</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Euis Sri Sugiarti, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Gatot Pramono,S.Si</h5>
                        <p class="font-normal text-gray-700">Guru, Pemb OSIS</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Euis Sri Sugiarti, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">M. Sholeh,S.Ag</h5>
                        <p class="font-normal text-gray-700">Guru</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Euis Sri Sugiarti, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Cicik Tri Mulyani,S.PdI</h5>
                        <p class="font-normal text-gray-700">Guru</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Euis Sri Sugiarti, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Nurefi Sukardaningsih,S.Pdi</h5>
                        <p class="font-normal text-gray-700">Guru</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Euis Sri Sugiarti, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Nico Istyoprabowo</h5>
                        <p class="font-normal text-gray-700">Guru</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Euis Sri Sugiarti, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Al Hafiz Abdillah</h5>
                        <p class="font-normal text-gray-700">Guru</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Euis Sri Sugiarti, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Maulana Zaenal W,S.Kom</h5>
                        <p class="font-normal text-gray-700">Guru</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Euis Sri Sugiarti, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Gita Ciptaningtyas,M.Pd</h5>
                        <p class="font-normal text-gray-700">Guru</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Euis Sri Sugiarti, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Ayu Zuliaty Indiana</h5>
                        <p class="font-normal text-gray-700">Guru</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Staff -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Staff SMK MAKARYA TANGERANG</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Nama Staff 1">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Cipto Wasono, S.Pd</h5>
                        <p class="font-normal text-gray-700">Staff Tata Usaha</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Nama Staff 2">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Dika Prasatria, S.Pd</h5>
                        <p class="font-normal text-gray-700">Sie Perpustakaan</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Nama Staff 3">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Anjar Wahid</h5>
                        <p class="font-normal text-gray-700">Tendik Layanan Khusus</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Nama Staff 3">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Awang Latifurrohman</h5>
                        <p class="font-normal text-gray-700">Tendik Layanan Khusus</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Nama Staff 3">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Ayu Rudiningtyas,SE</h5>
                        <p class="font-normal text-gray-700">Bendahara Sekolah</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Nama Staff 3">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Banu Cahyoningtyas</h5>
                        <p class="font-normal text-gray-700">Kepala Tata Usaha</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="fotokosong.jpg" alt="Nama Staff 3">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Defri Prasetya</h5>
                        <p class="font-normal text-gray-700">Kesiswaan</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-4 mt-auto">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 SMK Makarya Tangerang. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.0/dist/flowbite.js"></script>
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
