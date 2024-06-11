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
    <link rel="icon" type="image/x-icon" href="../img/logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.0/dist/flowbite.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<?php $baseurl="/page"; include '../layout/header.php';?>
    <header class="bg-blue-800 text-white p-4 text-center">
        <h1 class="text-3xl font-bold">Visi, Misi, dan Tujuan SMK Makarya Tangerang</h1>
    </header>
    <body>
    <div class="container mx-auto p-4">
        <section class="mb-4">
            <div class="card bg-white shadow-lg rounded-lg p-4">
                <img src="../img/logo.jpg" alt="Visi, Misi, dan Tujuan SMK Makarya Tangerang" class="rounded-full w-20 h-20 mx-auto mb-4">
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
</body>
</html>
