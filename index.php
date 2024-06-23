<?php
require 'db/conn.php';
session_start();
$isLoggedIn = isset($_SESSION['username']);

// Periksa koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query SQL untuk mengambil 3 data berita terbaru
$sql = "SELECT * FROM news ORDER BY created_at DESC LIMIT 3";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">
    <title>Smk Makarya Tangerang</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.1/flowbite.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>

<header class="shadow-md bg-gray-800 sticky top-0 z-50">
        <nav class="container mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center py-4">
            <div class="flex items-center space-x-4">
                <img class="max-h-16 w-auto" src="./img/logo.png" alt="Logo">
            </div>
            <div class="hidden sm:flex space-x-4 ml-auto">
                <a href="/website-makarya" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                <div class="relative">
                    <button onclick="this.nextElementSibling.classList.toggle('hidden');" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium flex items-center">
                        Informasi Sekolah
                        <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50">
                        <a href="page/sejarah.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sejarah</a>
                        <a href="page/visi_misi.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Visi dan Misi</a>
                        <a href="page/strukturorganisasi.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Struktur Organisasi</a>
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
                        <a href="page/akuntansi.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Akuntansi dan Keuangan Lembaga</a>
                        <a href="page/bisnis.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Bisnis Daring dan Pemasaran</a>
                    </div>
                </div>
                <a href="page/kegiatan.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Kegiatan</a>
                <a href="page/fasilitas.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Fasilitas</a>
                <a href="page/kontak.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Kontak</a>
                <a href="page/pendaftaran.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pendaftaran</a>
                <a href="page/berita.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Berita</a>
                <?php if ($isLoggedIn) : ?>
                    <span class="text-gray-300 px-3 py-2 rounded-md text-sm font-medium">Welcome, <?php echo $_SESSION['username']; ?></span>
                <?php else : ?>
                    <a href="auth/login.php" class="bg-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">SIGN IN</a>
                <?php endif; ?>
            </div>
            <button class="sm:hidden flex items-center text-gray-300" id="mobile-menu-button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </nav>
        <div class="sm:hidden hidden" id="mobile-menu">
            <a href="index.php" class="block text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
            <button onclick="this.nextElementSibling.classList.toggle('hidden');" class="block text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium w-full text-left">Informasi Sekolah</button>
            <div class="hidden">
                <a href="page/sejarah.php" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-100">Sejarah</a>
                <a href="page/visi_misi.php" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-100">Visi dan Misi</a>
                <a href="page/strukturorganisasi.php" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-100">Struktur Organisasi</a>
            </div>
            <button onclick="this.nextElementSibling.classList.toggle('hidden');" class="block text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium w-full text-left">Program Keahlian</button>
            <div class="hidden">
                <a href="page/akuntansi.php" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-100">Akuntansi dan Keuangan Lembaga</a>
                <a href="page/bisnis.php" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-100">Bisnis Daring dan Pemasaran</a>
            </div>
            <a href="page/kegiatan.php" class="block text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Kegiatan</a>
            <a href="page/fasilitas.php" class="block text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Fasilitas</a>
            <a href="page/kontak.php" class="block text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Kontak</a>
            <a href="page/pendaftaran.php" class="block text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pendaftaran</a>
            <a href="page/berita.php" class="block text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Berita</a>
            <?php if ($isLoggedIn) : ?>
                <span class="block text-gray-300 px-3 py-2 rounded-md text-sm font-medium">Welcome, <?php echo $_SESSION['username']; ?></span>
            <?php else : ?>
                <a href="auth/login.php" class="block bg-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">SIGN IN</a>
            <?php endif; ?>
        </div>
    </header>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
    <main class="flex-grow">
        <div id="gallery" class="relative w-full" data-carousel="slide">
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/gerbang.jpg" class="absolute block w-full h-auto top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" alt="Image 1">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/foto lapangan makarya.png" class="absolute block w-full h-auto top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" alt="Image 2">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/labkom.jpg" class="absolute block w-full h-auto top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" alt="Image 3">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/perpus.jpg" class="absolute block w-full h-auto top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" alt="Image 4">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/ruangkelas.jpg" class="absolute block w-full h-auto top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" alt="Image 5">
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
                SMK MAKARYA TANGERANG adalah lembaga pendidikan kejuruan yang berkomitmen untuk menghasilkan lulusan yang kompeten dan siap kerja di bidang Akuntansi dan Bisnis Daring & Pemasaran.
            </p>
        </section>

        <section id="programs" class="py-16 bg-gray-200" data-aos="fade-up">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-bold mb-8">Program Kami</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                        <h3 class="text-xl font-bold mb-4">Akuntansi dan Keuangan Lembaga</h3>
                        <p>Program studi yang mempersiapkan siswa dalam akuntansi, keuangan, dan perpajakan.</p>
                        <a href="page/akuntansi.php" class="text-blue-600 hover:underline">Read more</a>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                        <h3 class="text-xl font-bold mb-4">Bisni Daring & Pemasaran</h3>
                        <p>Program studi yang mempersiapkan siswa dalam pemasaran digital, e-commerce, dan manajemen bisnis.</p>
                        <a href="page/bisnis.php" class="text-blue-600 hover:underline">Read more</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16 bg-white" data-aos="fade-up">
            <div class="container mx-auto text-left">
                <h2 class="text-3xl font-bold mb-8 text-center">Latest News</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-3">
                    <?php
                    // Inisialisasi variabel hitung
                    $count = 0;
                    // Looping melalui data berita
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Memeriksa apakah jumlah berita sudah mencapai 3
                        if ($count >= 3) {
                            break; // Hentikan loop jika sudah mencapai 3
                        }
                        // Menambahkan satu ke variabel hitung
                        $count++;
                    ?>
                        <div class="bg-gray-100 p-8 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                            <?php if (isset($row['image']) && $row['image'] != '') : ?>
                                <img src="<?php echo substr( $row['image'],3); ?>" alt="News Image" class="w-full h-48 object-cover mb-4 rounded">
                            <?php endif; ?>
                            <h3 class="text-xl font-bold mb-4"><?php echo $row['title']; ?></h3>
                            <p class="overflow-hidden text-ellipsis whitespace-nowrap"><?php echo $row['content']; ?></p>
                            <a href="page/news_detail.php?id=<?php echo $row['id']; ?>" class="text-blue-600 hover:underline">Read more</a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-- <section class="py-16 bg-white" data-aos="fade-up">
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
        </section> -->
    </main>


    <!-- Footer Section -->
    <?php include './layout/footer.php';?>
</body>
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
        document.getElementById('mobile-menu-button').onclick = function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        };
    </script>


<?php
// Tutup koneksi ke database
mysqli_close($conn);
?>

</html>