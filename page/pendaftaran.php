<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Pendaftaran - SMK Makarya Tangerang</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<?php $baseurl="/page"; include '../layout/header.php';?>
    <body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
    <main class="flex-grow">
        <section class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Informasi Pendaftaran SMK Makarya Tangerang</h1>
            <div class="max-w-4xl mx-auto">
                <p class="text-gray-700 text-lg mb-6">Pendaftaran peserta didik baru SMK Makarya Tangerang telah dibuka. Berikut adalah informasi mengenai prosedur pendaftaran:</p>
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Prosedur Pendaftaran</h2>
                <ol class="list-decimal list-inside text-gray-700 text-lg mb-6">
                    <li>Isi formulir pendaftaran yang tersedia di sekolah.</li>
                    <li>Lengkapi formulir pendaftaran sesuai dengan petunjuk yang tertera.</li>
                    <li>Setelah mengisi formulir, serahkan formulir pendaftaran beserta dokumen pendukung ke bagian administrasi sekolah.</li>
                    <li>Tunggu konfirmasi dari pihak sekolah mengenai jadwal tes masuk dan proses seleksi.</li>
                    <li>Ikuti tahapan tes masuk sesuai dengan jadwal yang telah ditentukan.</li>
                    <li>Tunggu pengumuman hasil seleksi dari pihak sekolah.</li>
                    <li>Jika diterima, lengkapi proses administrasi dan pembayaran biaya pendidikan.</li>
                </ol>
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Persyaratan Pendaftaran</h2>
                <ul class="list-disc list-inside text-gray-700 text-lg mb-6">
                    <li>FC Kartu Keluarga (KK).</li>
                    <li>FC Akta Kelahiran.</li>
                    <li>FC Raport (untuk pendaftar kelas berikutnya).</li>
                    <li>FC Ijazah (untuk pendaftar kelas berikutnya).</li>
                    <li>Pas Foto berwarna terbaru ukuran 3x4 (2 lembar).</li>
                </ul>
                <p class="text-gray-700 text-lg mb-6">Untuk informasi lebih lanjut, silakan hubungi bagian administrasi sekolah.</p>
            </div>
        </section>
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
