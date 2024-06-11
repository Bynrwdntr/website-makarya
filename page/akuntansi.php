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
    <link rel="icon" type="image/x-icon" href="../img/logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.0/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<?php require_once '../layout/header.php';?>
    <body>
<main class="container mx-auto my-5">
    <div class="text-center">
        <h1 class="text-3xl font-bold underline">Program Keahlian Akuntansi dan Keuangan Lembaga</h1>
    </div>

    <div class="flex justify-center items-center my-5">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg" src="../img/fotokosong.jpg" alt="Foto Ketua Program" />
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
