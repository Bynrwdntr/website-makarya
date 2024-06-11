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
    <link rel="icon" type="image/x-icon" href="../img/logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.0/dist/flowbite.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<?php require_once '../layout/header.php';?>
<header class="bg-blue-800 text-white p-4 text-center">
    <h1 class="text-3xl font-bold">Sejarah SMK Makarya Tangerang</h1>
</header>
<body class="bg-gray-100">
<div class="container mx-auto my-5 p-5 bg-white shadow rounded">
    <section>
        <div class="text-center">
            <img src="../img/logo.jpg" alt="Logo Sekolah" class="mx-auto">
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
</body>
 <!-- Footer Section -->
<?php include '../layout/footer.php';?> 
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

</html>
