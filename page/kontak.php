<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.0/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<?php $baseurl="/page"; include '../layout/header.php';?>
    <body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
    <!-- Contact Section -->
    <section class="container mx-auto px-5 py-24">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-medium text-gray-900 mb-4">Peta Alamat</h1>
            <p class="text-base leading-relaxed">Hubungi kami melalui form di bawah ini atau kunjungi lokasi sekolah kami yang tercantum di peta.</p>
        </div>
        <div class="flex justify-center">
            <!-- Google Map Embed -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1125326046563!2d106.7269287!3d-6.248899399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fa77d582a96f%3A0x5d82a7661fb0d3c4!2sSMK%20Makarya!5e0!3m2!1sid!2sid!4v1717398720684!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

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
