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
    <link rel="icon" type="image/x-icon" href="../img/logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.0/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<?php $baseurl="/page"; include '../layout/header.php';?>
    <body>
    <main class="flex-grow">
        <!-- Pimpinan Sekolah -->
        <section class="mb-12">
        <header class="bg-blue-800 text-white p-4 text-center">
        <h1 class="text-3xl font-bold">Struktur Organisasi SMK MAKARYA TANGERANG</h1>
        </header>
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Pimpinan Sekolah SMK MAKARYA TANGERANG</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Mulyadi, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Mulyadi, S.Pd</h5>
                        <p class="font-normal text-gray-700">Kepala Sekolah</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Dra. Sri Wahyuni">
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
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Ratih Sayekti, SE">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Ratih Sayekti, SE</h5>
                        <p class="font-normal text-gray-700">Kepala Program Bisnis Daring dan Pemasaran</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Wahyuliana, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Wahyuliana, S.Pd</h5>
                        <p class="font-normal text-gray-700">Kepala Program Akuntansi dan Keuangan Lembaga</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Euis Sri Sugiarti, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Euis Sri Sugiarti, S.Pd</h5>
                        <p class="font-normal text-gray-700">Guru</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Euis Sri Sugiarti, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Gatot Pramono,S.Si</h5>
                        <p class="font-normal text-gray-700">Guru, Pemb OSIS</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Euis Sri Sugiarti, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">M. Sholeh,S.Ag</h5>
                        <p class="font-normal text-gray-700">Guru</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Euis Sri Sugiarti, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Cicik Tri Mulyani,S.PdI</h5>
                        <p class="font-normal text-gray-700">Guru</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Euis Sri Sugiarti, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Nurefi Sukardaningsih,S.Pdi</h5>
                        <p class="font-normal text-gray-700">Guru</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Euis Sri Sugiarti, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Nico Istyoprabowo</h5>
                        <p class="font-normal text-gray-700">Guru</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Euis Sri Sugiarti, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Al Hafiz Abdillah</h5>
                        <p class="font-normal text-gray-700">Guru</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Euis Sri Sugiarti, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Maulana Zaenal W,S.Kom</h5>
                        <p class="font-normal text-gray-700">Guru</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Euis Sri Sugiarti, S.Pd">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Gita Ciptaningtyas,M.Pd</h5>
                        <p class="font-normal text-gray-700">Guru</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Euis Sri Sugiarti, S.Pd">
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
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Nama Staff 1">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Cipto Wasono, S.Pd</h5>
                        <p class="font-normal text-gray-700">Staff Tata Usaha</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Nama Staff 2">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Dika Prasatria, S.Pd</h5>
                        <p class="font-normal text-gray-700">Sie Perpustakaan</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Nama Staff 3">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Anjar Wahid</h5>
                        <p class="font-normal text-gray-700">Tendik Layanan Khusus</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Nama Staff 3">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Awang Latifurrohman</h5>
                        <p class="font-normal text-gray-700">Tendik Layanan Khusus</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Nama Staff 3">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Ayu Rudiningtyas,SE</h5>
                        <p class="font-normal text-gray-700">Bendahara Sekolah</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Nama Staff 3">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Banu Cahyoningtyas</h5>
                        <p class="font-normal text-gray-700">Kepala Tata Usaha</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img class="w-full h-48 object-cover" src="../img/fotokosong.jpg" alt="Nama Staff 3">
                    <div class="p-6">
                        <h5 class="text-gray-900 font-bold text-xl mb-2">Defri Prasetya</h5>
                        <p class="font-normal text-gray-700">Kesiswaan</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

   <!-- Footer Section -->
<?php include '../layout/footer.php';?>

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
