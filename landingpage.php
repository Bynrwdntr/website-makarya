<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK MAKARYA 3 TANGERANG</title>
    <link rel="icon" type="image/x-icon" href="logo.jpg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.1/flowbite.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
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
        <div id="gallery" class="relative w-full" data-carousel="slide">
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" class="absolute block w-full h-auto top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" alt="Image 1">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" class="absolute block w-full h-auto top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" alt="Image 2">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" class="absolute block w-full h-auto top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" alt="Image 3">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" class="absolute block w-full h-auto top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" alt="Image 4">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" class="absolute block w-full h-auto top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" alt="Image 5">
                </div>
            </div>
            <button type="button" class="absolute top-1/2 left-0 z-50 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none transform -translate-y-1/2" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 group-hover:bg-black/50 group-focus:ring-4 group-focus:ring-black group-focus:outline-none">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-1/2 right-0 z-50 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none transform -translate-y-1/2" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 group-hover:bg-black/50 group-focus:ring-4 group-focus:ring-black group-focus:outline-none">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <section class="mt-8">
            <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">Tentang Kami</h2>
            <p class="text-gray-600 text-center max-w-3xl mx-auto">
                SMK MAKARYA 3 TANGERANG adalah lembaga pendidikan kejuruan yang berkomitmen untuk menghasilkan lulusan yang kompeten dan siap kerja di bidang Akuntansi dan Bisnis Daring & Pemasaran.
            </p>
        </section>

    <section id="programs" class="py-16 bg-gray-200" data-aos="fade-up">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Our Programs</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                    <h3 class="text-xl font-bold mb-4">Akuntansi dan Keuangan Lembaga</h3>
                    <p>Program studi yang mempersiapkan siswa dalam akuntansi, keuangan, dan perpajakan.</p>
                    <a href="akuntansi.php" class="text-blue-600 hover:underline">Read more</a>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                    <h3 class="text-xl font-bold mb-4">Bisni Daring & Pemasaran</h3>
                    <p>Program studi yang mempersiapkan siswa dalam pemasaran digital, e-commerce, dan manajemen bisnis.</p>
                    <a href="bisnis.php" class="text-blue-600 hover:underline">Read more</a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white" data-aos="fade-up">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Latest News</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-100 p-8 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                    <h3 class="text-xl font-bold mb-4">News Title 1</h3>
                    <p>Brief description of the news article to give visitors an idea of what it is about.</p>
                    <a href="#" class="text-blue-600 hover:underline">Read more</a>
                </div>
                <div class="bg-gray-100 p-8 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                    <h3 class="text-xl font-bold mb-4">News Title 2</h3>
                    <p>Brief description of the news article to give visitors an idea of what it is about.</p>
                    <a href="#" class="text-blue-600 hover:underline">Read more</a>
                </div>
                <div class="bg-gray-100 p-8 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                    <h3 class="text-xl font-bold mb-4">News Title 3</h3>
                    <p>Brief description of the news article to give visitors an idea of what it is about.</p>
                    <a href="#" class="text-blue-600 hover:underline">Read more</a>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="py-16 bg-gray-200" data-aos="fade-up">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Contact Us</h2>
            <form action="#" method="POST" class="space-y-4 max-w-md mx-auto">
                <div>
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200" required>
                </div>
                <div>
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200" required>
                </div>
                <div>
                    <label for="message" class="block text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="4" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200" required></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Send Message</button>
            </form>
        </div>
    </section>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-auto">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row justify-center space-x-4">
            <h4 class="text-lg font-bold mb-4">Sosial Media</h4>
                <div class="flex space-x-4 mb-4 sm:mb-0">
                <a href="https://www.instagram.com/smk.makaryalarangan/" class="text-gray-400 hover:text-gray-200">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19.615 3.184c-2.108-1.298-5.527-1.531-7.568-1.531s-5.462.234-7.568 1.531c-2.13 1.304-3.147 3.437-3.147 6.416v4.801c0 2.98 1.017 5.112 3.147 6.416 2.108 1.298 5.527 1.531 7.568 1.531s5.462-.234 7.568-1.531c2.13-1.304 3.147-3.437 3.147-6.416v-4.801c0-2.98-1.017-5.112-3.147-6.416zm-7.615 12.919c-3.151 0-5.682-2.531-5.682-5.682s2.531-5.682 5.682-5.682 5.682 2.531 5.682 5.682-2.531 5.682-5.682 5.682zm6.448-10.573c-.737 0-1.335-.598-1.335-1.335s.598-1.335 1.335-1.335 1.335.598 1.335 1.335-.598 1.335-1.335 1.335zm-6.448 1.946c-2.025 0-3.674 1.649-3.674 3.674s1.649 3.674 3.674 3.674 3.674-1.649 3.674-3.674-1.649-3.674-3.674-3.674z"/>
                    </svg>
                </a>
                <a href="https://www.youtube.com/@smkmakaryatangerang4734" class="text-gray-400 hover:text-gray-200">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22.54 6.42c-.2-1.42-.85-2.72-2.26-3.33-2.05-.91-10.26-.91-10.26-.91s-8.21 0-10.26.91c-1.41.61-2.06 1.91-2.26 3.33-.23 1.63-.23 5.03-.23 5.03s0 3.39.23 5.03c.2 1.42.85 2.72 2.26 3.33 2.05.91 10.26.91 10.26.91s8.21 0 10.26-.91c1.41-.61 2.06-1.91 2.26-3.33.23-1.63.23-5.03.23-5.03s0-3.39-.23-5.03zm-13.95 8.99v-7.86l6.15 3.93-6.15 3.93z"/>
                    </svg>
                </a>
                </div>
            </div>
            <div class="mt-4 text-center">
                <p class="text-gray-300">&copy; 2023 SMK MAKARYA 3 TANGERANG. All rights reserved.</p>
            </div>
        </div>
        
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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