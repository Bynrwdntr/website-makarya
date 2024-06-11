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
    <link rel="icon" type="image/x-icon" href="../img/logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.0/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<?php require_once '../layout/header.php';?>
<body>
<main class="container mx-auto my-5">
    <div class="text-center">
        <h1 class="text-3xl font-bold underline">Program Keahlian Bisnis Daring dan Pemasaran</h1>
    </div>

    <div class="flex justify-center items-center my-5">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg" src="../img/fotokosong.jpg" alt="Foto Ketua Program" />
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
 <?php include '../layout/footer.php';?>
<script src="https://unpkg.com/flowbite@1.5/dist/flowbite.min.js"></script>
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
