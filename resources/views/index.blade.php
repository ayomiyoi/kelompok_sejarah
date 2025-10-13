<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pahlawan Sejarah Indonesia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .pinterest-grid {
            columns: 4 300px;
            column-gap: 1.5rem;
            padding: 2rem 0;
        }
        .pinterest-grid > * {
            break-inside: avoid;
            margin-bottom: 1.5rem;
            background: white;
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }
        .pinterest-grid > *:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 1024px) { .pinterest-grid { columns: 3 250px; } }
        @media (max-width: 768px) { .pinterest-grid { columns: 2 200px; } }
        @media (max-width: 480px) { .pinterest-grid { columns: 1 100%; } }
        .fade-in { animation: fadeIn 0.6s ease-out; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .search-overlay {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border-radius: 0 0 0.5rem 0.5rem;
            max-height: 200px;
            overflow-y: auto;
            z-index: 10;
            display: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .search-overlay.show { display: block; }
        .pin-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 215, 0, 0.9);
            display: none;
            align-items: center;
            justify-content: center;
            color: black;
            font-size: 1.5rem;
        }
        .pin-overlay.show { display: flex; }
        .yellow-accent { color: #FFD700; }
        .gray-text { color: #6B7280; }
        .black-bg { background: #000; }
        .white-bg { background: white; }
        
        /* Marquee Animation - Perbaikan untuk infinite loop yang benar-benar smooth */
        .marquee-container {
            overflow: hidden;
            margin-top: 4rem;
            position: relative;
            background: linear-gradient(to right, rgba(255,255,255,0.1) 0%, transparent 50%, rgba(255,255,255,0.1) 100%);
            padding: 1rem 0;
        }
        .marquee-wrapper {
            display: flex;
            width: fit-content;
        }
        .marquee-content {
            display: flex;
            animation: marquee 40s linear infinite;
        }
        .marquee-item {
            width: 140px;
            height: 140px;
            margin-right: 1.5rem;
            border-radius: 1rem;
            overflow: hidden;
            flex-shrink: 0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .marquee-item:hover {
            transform: scale(1.1) rotate(2deg);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }
        .marquee-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: grayscale(100%) brightness(0.8);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .marquee-item:hover img {
            filter: grayscale(0%) brightness(1);
        }
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }
        /* Pause on hover for smoother interaction */
        .marquee-container:hover .marquee-content {
            animation-play-state: paused;
        }
        
        /* Perbaikan layout grid untuk foto */
        .featured-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-auto-rows: minmax(150px, auto);
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        .featured-grid > * {
            border-radius: 0.5rem;
            overflow: hidden;
            position: relative;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .featured-grid > *:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        .featured-grid img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: grayscale(100%);
            transition: filter 0.3s ease;
        }
        .featured-grid > *:hover img {
            filter: grayscale(0%);
        }
        .grid-item-1 {
            grid-column: span 2;
            grid-row: span 2;
        }
        .grid-item-2, .grid-item-3, .grid-item-5 {
            grid-column: span 1;
            grid-row: span 1;
        }
        .grid-item-4 {
            grid-column: span 2;
            grid-row: span 1;
        }
        .grid-item-6 {
            grid-column: span 1;
            grid-row: span 2;
        }
        .grid-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
            color: white;
            padding: 1rem;
            transform: translateY(5px);
            opacity: 0;
            transition: all 0.3s ease;
        }
        .featured-grid > *:hover .grid-caption {
            transform: translateY(0);
            opacity: 1;
        }
        
        /* Responsive grid */
        @media (max-width: 768px) {
            .featured-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .grid-item-1, .grid-item-4 {
                grid-column: span 2;
            }
            .grid-item-6 {
                grid-column: span 2;
                grid-row: span 1;
            }
        }
        @media (max-width: 480px) {
            .featured-grid {
                grid-template-columns: 1fr;
            }
            .grid-item-1, .grid-item-4, .grid-item-6 {
                grid-column: span 1;
            }
        }
    </style>
</head>
<body class="bg-white text-black min-h-screen">
    <!-- Header -->
    <header class="bg-white sticky top-0 z-50 border-b border-gray-200">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <h1 class="text-2xl font-bold yellow-accent">Pahlawan</h1>
                <span class="text-yellow-500">•</span>
            </div>
            <ul class="flex space-x-8 text-gray-600">
                <li><a href="#feed" class="hover:text-black transition">Galeri</a></li>
                <li><a href="#artikel" class="hover:text-black transition">Artikel</a></li>
                <li><a href="#" class="hover:text-black transition">Kisah</a></li>
            </ul>
            <div class="relative flex items-center space-x-4">
                <div class="relative">
                    <input type="text" id="searchInput" placeholder="Cari pahlawan..." class="px-4 py-2 border border-gray-300 rounded-lg outline-none w-48 focus:w-64 transition-all duration-300 text-sm">
                    <i class="fas fa-search absolute right-3 top-3 text-gray-400"></i>
                    <div id="searchResults" class="search-overlay">
                        <!-- Hasil pencarian akan diisi oleh JS -->
                    </div>
                </div>
                <div class="flex items-center space-x-2 text-sm">
                    <button class="bg-yellow-500 text-black px-3 py-1 rounded font-medium hover:bg-yellow-400 transition">Premium</button>
                    <i class="fas fa-bell text-gray-400"></i>
                    <i class="fas fa-user-circle text-gray-400"></i>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="relative py-20 bg-white">
        <div class="container mx-auto px-6 text-center">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-6xl font-bold mb-4 leading-tight">SELAMAT DATANG DI</h2>
                <h1 class="text-7xl font-bold mb-8 yellow-accent">PAHLAWAN SEJARAH</h1>
                <p class="text-xl gray-text mb-12 max-w-2xl mx-auto">Platform eksklusif untuk memamerkan kisah kepahlawanan sejarah dari para tokoh bangsa Indonesia. Jelajahi galeri dan artikel inspiratif.</p>
                <div class="flex justify-center space-x-6">
                    <button onclick="loadMorePins()" class="black-bg text-white px-8 py-4 rounded-lg font-semibold hover:opacity-90 transition">Jelajahi Kisah</button>
                    <button class="border border-black text-black px-8 py-4 rounded-lg font-semibold hover:bg-black hover:text-white transition">Gabung Komunitas</button>
                </div>
            </div>
            <!-- Marquee Animation - Perbaikan untuk infinite loop yang smooth -->
            <div class="marquee-container">
                <div class="marquee-wrapper">
                    <div class="marquee-content" id="marquee-content">
                        <!-- Gambar akan diisi oleh JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Grid (Inspired by reference) -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold mb-12 text-center black">Kisah Unggulan</h3>
            
            <!-- Grid Layout yang Lebih Terstruktur -->
            <div class="featured-grid">
                <div class="grid-item-1 bg-gray-100">
                    <img src="https://picsum.photos/800/600?random=1" alt="Proklamasi">
                    <div class="grid-caption">
                        <h4 class="text-2xl font-bold">Proklamasi</h4>
                        <p class="text-sm">Soekarno</p>
                    </div>
                </div>
                <div class="grid-item-2 bg-gray-100">
                    <img src="https://picsum.photos/400/300?random=2" alt="Diponegoro">
                    <div class="grid-caption">
                        <h4 class="font-semibold">Perang Jawa</h4>
                        <p class="text-sm">Diponegoro</p>
                    </div>
                </div>
                <div class="grid-item-3 bg-gray-100">
                    <img src="https://picsum.photos/400/300?random=3" alt="Kartini">
                    <div class="grid-caption">
                        <h4 class="font-semibold">Emansipasi</h4>
                        <p class="text-sm">Kartini</p>
                    </div>
                </div>
                <div class="grid-item-4 bg-gray-100">
                    <img src="https://picsum.photos/800/400?random=4" alt="Gerilya">
                    <div class="grid-caption">
                        <h4 class="text-2xl font-bold">Gerilya Aceh</h4>
                        <p class="text-sm">Cut Nyak Dhien</p>
                    </div>
                </div>
                <div class="grid-item-5 bg-gray-100">
                    <img src="https://picsum.photos/400/300?random=5" alt="Hatta">
                    <div class="grid-caption">
                        <h4 class="font-semibold">Ekonomi Bangsa</h4>
                        <p class="text-sm">Hatta</p>
                    </div>
                </div>
                <div class="grid-item-6 bg-gray-100">
                    <img src="https://picsum.photos/400/600?random=6" alt="Gajah Mada">
                    <div class="grid-caption">
                        <h4 class="text-xl font-bold">Sumpah Palapa</h4>
                        <p class="text-sm">Gajah Mada</p>
                    </div>
                </div>
            </div>

            <!-- Pinterest-style Feed -->
            <div id="feed" class="pinterest-grid">
                <!-- Pins akan diisi oleh JS -->
            </div>
            <div id="loading" class="text-center mt-8 hidden">
                <i class="fas fa-spinner fa-spin text-yellow-500 text-2xl"></i>
                <p class="gray-text mt-2">Memuat kisah lebih banyak...</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 mt-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <h3 class="text-2xl font-bold yellow-accent mb-4">Pahlawan Sejarah</h3>
                    <p class="gray-text mb-6">Platform untuk mengenang dan mempelajari kisah kepahlawanan tokoh-tokoh bangsa Indonesia. Inspirasi dari masa lalu untuk masa depan.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-yellow-500 transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-yellow-500 transition"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-yellow-500 transition"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-yellow-500 transition"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold mb-4 yellow-accent">Tautan Cepat</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-yellow-500 transition">Galeri Pahlawan</a></li>
                        <li><a href="#" class="hover:text-yellow-500 transition">Artikel Sejarah</a></li>
                        <li><a href="#" class="hover:text-yellow-500 transition">Kontribusi</a></li>
                        <li><a href="#" class="hover:text-yellow-500 transition">Tentang Kami</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4 yellow-accent">Kontak</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-envelope mr-2"></i>info@pahlawansejarah.id</li>
                        <li><i class="fas fa-phone mr-2"></i>+62 21 12345678</li>
                        <li><a href="#" class="hover:text-yellow-500 transition">Kebijakan Privasi</a></li>
                        <li><a href="#" class="hover:text-yellow-500 transition">Syarat Layanan</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Pahlawan Sejarah Indonesia. Semua hak dilindungi. Dibuat dengan <i class="fas fa-heart text-yellow-500"></i> untuk bangsa.</p>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center z-50 p-4">
        <div class="bg-white rounded-lg max-w-4xl max-h-screen overflow-y-auto w-full text-black relative">
            <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-500 text-2xl hover:text-black transition">&times;</button>
            <div id="modal-content" class="p-8">
                <!-- Konten modal akan diisi oleh JS -->
            </div>
        </div>
    </div>

    <!-- Toast -->
    <div id="toast" class="fixed bottom-4 right-4 bg-yellow-500 text-black px-6 py-3 rounded-lg shadow-lg hidden z-50 font-medium">
        Kisah disimpan!
    </div>

    <script>
        // Data heroes (dengan gambar dummy Picsum)
        const allHeroes = [
            {
                id: 'sukarno',
                title: "Ir. Soekarno",
                image: "https://picsum.photos/400/600?random=7",
                type: 'galeri',
                desc: "Proklamator Kemerdekaan: Kisah perjuangan bangsa.",
                content: `
                    <img src="https://picsum.photos/800/400?random=8" alt="Soekarno" class="w-full h-64 object-cover rounded mb-6 grayscale">
                    <h2 class="text-3xl font-bold mb-4 yellow-accent">Ir. Soekarno: Bapak Bangsa</h2>
                    <p class="mb-4 gray-text">Ir. Soekarno lahir pada 6 Juni 1901 di Surabaya. Ia memproklamasikan kemerdekaan Indonesia pada 17 Agustus 1945 bersama Mohammad Hatta.</p>
                    <p class="mb-4 gray-text">Visi Pancasila-nya menjadi dasar negara, dan Konferensi Asia-Afrika 1955 memperkuat peran Indonesia di dunia.</p>
                    <p class="mb-6 gray-text">Semangat persatuan yang ia junjung tetap menginspirasi hingga kini.</p>
                    <div class="flex space-x-4 mt-6">
                        <button onclick="savePin('sukarno')" class="bg-black text-white px-4 py-2 rounded hover:opacity-90 transition"><i class="fas fa-save mr-2"></i>Simpan</button>
                        <button onclick="sharePin('sukarno')" class="border border-black text-black px-4 py-2 rounded hover:bg-black hover:text-white transition"><i class="fas fa-share mr-2"></i>Bagikan</button>
                    </div>
                `
            },
            {
                id: 'diponegoro',
                title: "Pangeran Diponegoro",
                image: "https://picsum.photos/400/500?random=9",
                type: 'artikel',
                desc: "Pemimpin Perang Jawa: 5 tahun perlawanan heroik.",
                content: `
                    <img src="https://picsum.photos/800/400?random=10" alt="Diponegoro" class="w-full h-64 object-cover rounded mb-6 grayscale">
                    <h2 class="text-3xl font-bold mb-4 yellow-accent">Pangeran Diponegoro: Pejuang Islam</h2>
                    <p class="mb-4 gray-text">Pangeran Diponegoro (1785-1855) memimpin perlawanan melawan Belanda dari 1825-1830, melibatkan jutaan rakyat Jawa.</p>
                    <p class="mb-4 gray-text">Strategi gerilya dan semangat jihadnya menjadi inspirasi nasionalisme modern.</p>
                    <p class="mb-6 gray-text">Diasingkan ke Makassar, warisannya abadi sebagai simbol perjuangan.</p>
                    <div class="flex space-x-4 mt-6">
                        <button onclick="savePin('diponegoro')" class="bg-black text-white px-4 py-2 rounded hover:opacity-90 transition"><i class="fas fa-save mr-2"></i>Simpan</button>
                        <button onclick="sharePin('diponegoro')" class="border border-black text-black px-4 py-2 rounded hover:bg-black hover:text-white transition"><i class="fas fa-share mr-2"></i>Bagikan</button>
                    </div>
                `
            },
            // Tambahkan lebih banyak data jika diperlukan, dengan Picsum random
            {
                id: 'kartini',
                title: "R.A. Kartini",
                image: "https://picsum.photos/400/600?random=11",
                type: 'galeri',
                desc: "Pelopor Emansipasi: Surat-surat inspiratif.",
                content: `
                    <img src="https://picsum.photos/800/400?random=12" alt="Kartini" class="w-full h-64 object-cover rounded mb-6 grayscale">
                    <h2 class="text-3xl font-bold mb-4 yellow-accent">R.A. Kartini: Suara Perempuan</h2>
                    <p class="mb-4 gray-text">Raden Ajeng Kartini (1879-1904) memperjuangkan pendidikan dan hak perempuan melalui surat-suratnya 'Habis Gelap Terbitlah Terang'.</p>
                    <p class="mb-6 gray-text">Ia mendirikan sekolah pertama untuk wanita di Jepara, menjadi inspirasi Hari Kartini.</p>
                    <div class="flex space-x-4 mt-6">
                        <button onclick="savePin('kartini')" class="bg-black text-white px-4 py-2 rounded hover:opacity-90 transition"><i class="fas fa-save mr-2"></i>Simpan</button>
                        <button onclick="sharePin('kartini')" class="border border-black text-black px-4 py-2 rounded hover:bg-black hover:text-white transition"><i class="fas fa-share mr-2"></i>Bagikan</button>
                    </div>
                `
            }
        ];

        let currentPins = [];
        let savedPins = JSON.parse(localStorage.getItem('savedPins')) || [];
        let loadedCount = 0;
        const pinsPerLoad = 3;

        // Inisialisasi Marquee dengan infinite loop yang benar-benar smooth
        function initMarquee() {
            const marqueeContent = document.getElementById('marquee-content');
            const images = [
                'https://picsum.photos/140/140?random=1',
                'https://picsum.photos/140/140?random=2',
                'https://picsum.photos/140/140?random=3',
                'https://picsum.photos/140/140?random=4',
                'https://picsum.photos/140/140?random=5',
                'https://picsum.photos/140/140?random=6',
                'https://picsum.photos/140/140?random=7',
                'https://picsum.photos/140/140?random=8'
            ];
            
            // Duplikasi gambar untuk membuat efek loop yang mulus
            const duplicatedImages = [...images, ...images, ...images];
            
            marqueeContent.innerHTML = duplicatedImages.map((img, index) => 
                `<div class="marquee-item"><img src="${img}" alt="Image ${index + 1}"></div>`
            ).join('');
        }

        // Render pin (dengan grayscale filter)
        function renderPin(hero, index) {
            const isSaved = savedPins.includes(hero.id);
            const pinClass = hero.type === 'galeri' ? 'h-72' : 'max-h-96 overflow-hidden';
            const descClass = hero.type === 'galeri' ? 'text-sm mb-0' : 'text-sm mb-4';
            const hasButton = hero.type === 'artikel';

            return `
                <div class="w-full ${pinClass}" onclick="openModal('${hero.id}')" style="animation-delay: ${index * 0.2}s;">
                    <div class="pin-overlay" id="overlay-${hero.id}">
                        <i class="fas fa-eye"></i>
                    </div>
                    <img src="${hero.image}" alt="${hero.title}" class="w-full object-cover grayscale hover:grayscale-0 transition">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-semibold">${hero.title}</h3>
                            <button onclick="event.stopPropagation(); savePin('${hero.id}')" class="text-yellow-500 hover:text-yellow-700 transition">
                                <i class="fas fa-${isSaved ? 'heart' : 'heart-o'}"></i>
                            </button>
                        </div>
                        <p class="${descClass} gray-text">${hero.desc}</p>
                        ${hasButton ? `<button class="yellow-accent text-sm font-medium mt-2 hover:underline">Baca Lebih Lanjut</button>` : ''}
                    </div>
                </div>
            `;
        }

        // Load initial
        function loadInitialPins() {
            currentPins = allHeroes.slice(0, pinsPerLoad);
            document.getElementById('feed').innerHTML = currentPins.map((hero, index) => renderPin(hero, index)).join('');
            addFadeIn();
        }

        // Load more
        function loadMorePins() {
            const loading = document.getElementById('loading');
            loading.classList.remove('hidden');
            setTimeout(() => {
                const nextPins = allHeroes.slice(loadedCount, loadedCount + pinsPerLoad);
                if (nextPins.length > 0) {
                    document.getElementById('feed').innerHTML += nextPins.map((hero, index) => renderPin(hero, currentPins.length + index)).join('');
                    currentPins = currentPins.concat(nextPins);
                    loadedCount += pinsPerLoad;
                    addFadeIn();
                }
                loading.classList.add('hidden');
            }, 1200);
        }

        function addFadeIn() {
            document.querySelectorAll('#feed > div').forEach((pin, index) => {
                pin.classList.add('fade-in');
            });
        }

        // Search
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const query = e.target.value.toLowerCase();
            const results = document.getElementById('searchResults');
            if (query.length < 2) {
                results.classList.remove('show');
                return;
            }
            const filtered = allHeroes.filter(hero => hero.title.toLowerCase().includes(query) || hero.desc.toLowerCase().includes(query));
            results.innerHTML = filtered.slice(0, 5).map(hero => `
                <div class="p-3 border-b border-gray-200 cursor-pointer hover:bg-gray-50" onclick="openModal('${hero.id}'); document.getElementById('searchInput').value=''; results.classList.remove('show');">
                    <h4 class="font-semibold yellow-accent">${hero.title}</h4>
                    <p class="text-sm gray-text">${hero.desc}</p>
                </div>
            `).join('');
            results.classList.add('show');
        });

        // Modal functions
        function openModal(heroId) {
            const hero = allHeroes.find(h => h.id === heroId);
            if (hero) {
                document.getElementById('modal-content').innerHTML = hero.content;
                document.getElementById('modal').classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Save & Share
        function savePin(id) {
            if (savedPins.includes(id)) {
                savedPins = savedPins.filter(p => p !== id);
            } else {
                savedPins.push(id);
                showToast();
            }
            localStorage.setItem('savedPins', JSON.stringify(savedPins));
            location.reload(); // Sederhana untuk update icon
        }

        function sharePin(id) {
            const hero = allHeroes.find(h => h.id === id);
            if (navigator.share) {
                navigator.share({ title: hero.title, url: window.location.href });
            } else {
                navigator.clipboard.writeText(hero.title + ' - ' + window.location.href);
                showToast('Tautan disalin!');
            }
        }

        function showToast(msg = 'Kisah disimpan!') {
            const toast = document.getElementById('toast');
            toast.textContent = msg;
            toast.classList.remove('hidden');
            setTimeout(() => toast.classList.add('hidden'), 2500);
        }

        // Events
        document.getElementById('modal').addEventListener('click', (e) => { if (e.target === this) closeModal(); });
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', (e) => {
                e.preventDefault();
                document.querySelector(anchor.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
            });
        });

        // Hover overlay
        document.addEventListener('mouseover', (e) => {
            if (e.target.closest('.pinterest-grid > div')) {
                const pin = e.target.closest('.pinterest-grid > div');
                const overlay = pin.querySelector('.pin-overlay');
                if (overlay) overlay.classList.add('show');
            }
        });
        document.addEventListener('mouseout', (e) => {
            if (e.target.closest('.pinterest-grid > div')) {
                const pin = e.target.closest('.pinterest-grid > div');
                const overlay = pin.querySelector('.pin-overlay');
                if (overlay) overlay.classList.remove('show');
            }
        });

        // Init
        initMarquee();
        loadInitialPins();
    </script>
</body>
</html>