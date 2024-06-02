<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Makarya 3 Tangerang</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.1/flowbite.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body class="font-sans antialiased">
    <!-- Sticky Navbar -->
    <nav class="bg-blue-600 text-white sticky top-0 z-50 shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="logo.png" class="text-2xl font-bold">SMK Makarya 3</a>
            <button id="mobile-menu-button" class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
            <ul id="mobile-menu" class="hidden md:flex space-x-4">
                <li><a href="#programs" class="hover:text-gray-300">Programs</a></li>
                <li><a href="#testimonials" class="hover:text-gray-300">Testimonials</a></li>
                <li><a href="#faq" class="hover:text-gray-300">FAQ</a></li>
                <li><a href="#contact" class="hover:text-gray-300">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-blue-600 text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold mb-4">Welcome to SMK Makarya 3 Tangerang</h1>
            <p class="text-lg mb-8">Preparing Future Leaders with Quality Education</p>
            <a href="#contact" class="bg-white text-blue-600 font-bold py-2 px-4 rounded-lg hover:bg-gray-200 transition duration-300">Get in Touch</a>
        </div>
        <div class="absolute top-0 left-0 w-full h-full bg-blue-900 opacity-50"></div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="py-16 bg-gray-200" data-aos="fade-up">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Our Programs</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                    <h3 class="text-xl font-bold mb-4">Accounting</h3>
                    <p>Program studi yang mempersiapkan siswa dalam akuntansi, keuangan, dan perpajakan.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                    <h3 class="text-xl font-bold mb-4">Digital Business Marketing</h3>
                    <p>Program studi yang mempersiapkan siswa dalam pemasaran digital, e-commerce, dan manajemen bisnis.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                    <h3 class="text-xl font-bold mb-4">Office Management</h3>
                    <p>Program studi yang mempersiapkan siswa dalam manajemen administrasi perkantoran dan teknologi informasi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
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

    <!-- Testimonials Section -->
    <section class="py-16 bg-white" data-aos="fade-up">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Testimonials</h2>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
                            <p class="text-lg italic mb-4">"SMK Makarya 3 has provided me with the best education and support. I am ready for the future!"</p>
                            <h4 class="font-bold">John Doe</h4>
                            <p class="text-gray-600">Alumni 2023</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
                            <p class="text-lg italic mb-4">"The teachers are very supportive and the curriculum is up to date with industry standards."</p>
                            <h4 class="font-bold">Jane Smith</h4>
                            <p class="text-gray-600">Alumni 2022</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
                            <p class="text-lg italic mb-4">"Great environment and excellent facilities. I highly recommend this school to everyone."</p>
                            <h4 class="font-bold">Alex Johnson</h4>
                            <p class="text-gray-600">Alumni 2021</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-16 bg-gray-200" data-aos="fade-up">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8 text-center">Frequently Asked Questions</h2>
            <div x-data="{ selected: null }" class="space-y-4">
                <div>
                    <h3 @click="selected !== 1 ? selected = 1 : selected = null" class="cursor-pointer bg-white p-4 rounded-lg shadow-md flex justify-between items-center">
                        <span>What programs does SMK Makarya 3 offer?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                        </svg>
                    </h3>
                    <div x-show="selected === 1" class="p-4 bg-gray-100 rounded-lg shadow-inner">
                        <p>We offer Accounting, Digital Business Marketing, and Office Management programs.</p>
                    </div>
                </div>
                <div>
                    <h3 @click="selected !== 2 ? selected = 2 : selected = null" class="cursor-pointer bg-white p-4 rounded-lg shadow-md flex justify-between items-center">
                        <span>How can I apply for admission?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                        </svg>
                    </h3>
                    <div x-show="selected === 2" class="p-4 bg-gray-100 rounded-lg shadow-inner">
                        <p>You can apply for admission by filling out the online application form on our website.</p>
                    </div>
                </div>
                <div>
                    <h3 @click="selected !== 3 ? selected = 3 : selected = null" class="cursor-pointer bg-white p-4 rounded-lg shadow-md flex justify-between items-center">
                        <span>What are the admission requirements?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                        </svg>
                    </h3>
                    <div x-show="selected === 3" class="p-4 bg-gray-100 rounded-lg shadow-inner">
                        <p>The admission requirements include completing the online application, providing academic transcripts, and attending an interview.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-white" data-aos="fade-up">
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

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-8">
        <div class="container mx-auto text-center">
            <p class="mb-4">© 2024 SMK Makarya 3 Tangerang. All rights reserved.</p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="hover:text-gray-300"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.04c-5.5 0-10 4.5-10 10.02 0 4.41 3.6 8.19 8.2 8.75v-6.2H8.23v-2.55H10.2V9.5c0-1.93 1.13-3.05 2.85-3.05.82 0 1.7.15 1.7.15v1.9H13.4c-1.1 0-1.44.68-1.44 1.36v1.6h2.54l-.41 2.56H12v6.2c4.6-.56 8.2-4.34 8.2-8.75 0-5.52-4.5-10.02-10-10.02z"/></svg></a>
                <a href="#" class="hover:text-gray-300"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2c-5.5 0-10 4.5-10 10 0 4.41 3.6 8.2 8.2 8.75v-6.2h-2.6v-2.55h2.6v-1.95c0-1.93 1.12-3.05 2.84-3.05.82 0 1.7.15 1.7.15v1.9H13.4c-1.1 0-1.45.68-1.45 1.36v1.6h2.55l-.41 2.56H12v6.2c4.6-.55 8.2-4.34 8.2-8.75 0-5.5-4.5-10-10-10z"/></svg></a>
                <a href="#" class="hover:text-gray-300"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.41 3.6 8.2 8.2 8.75v-6.2h-2.6v-2.55h2.6v-1.95c0-1.93 1.12-3.05 2.84-3.05.82 0 1.7.15 1.7.15v1.9H13.4c-1.1 0-1.45.68-1.45 1.36v1.6h2.55l-.41 2.56H12v6.2c4.6-.55 8.2-4.34 8.2-8.75 0-5.52-4.5-10-10-10z"/></svg></a>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        AOS.init();
        const swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
