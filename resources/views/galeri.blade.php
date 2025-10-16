<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - Pahlawan Sejarah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .yellow-accent { color: #FFD700; }
        .gray-text { color: #6B7280; }
        .black-bg { background: #000; }
        .white-bg { background: white; }
        .hero-section {
            background: linear-gradient(to bottom, rgba(0,0,0,0.3), transparent), url('https://upload.wikimedia.org/wikipedia/commons/4/4f/Raden_Saleh_-_Diponegoro_arrest.jpg') center/cover;
            background-attachment: fixed;
        }
        .article-section { max-width: 1100px; margin: 0 auto; padding: 0 1rem; }
        .article-title { font-size: 2.5rem; font-weight: 700; margin-bottom: 0.5rem; line-height: 1.2; }
        .gallery-grid { display: grid; grid-template-columns: repeat(3, minmax(0,1fr)); gap: 1rem; }
        .gallery-item { overflow: hidden; border-radius: .5rem; cursor: pointer; position: relative; }
        .gallery-item img { width: 100%; height: 240px; object-fit: cover; display: block; transition: transform .3s ease; }
        .gallery-item:hover img { transform: scale(1.05); }
        .caption { position: absolute; left: 0; right: 0; bottom: 0; padding: .75rem 1rem; background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.6) 100%); color: #fff; font-weight: 600; }
        .section-padding { padding: 4rem 0; }
        .modal-backdrop { position: fixed; inset: 0; background: rgba(0,0,0,0.6); display: none; align-items: center; justify-content: center; z-index: 60; }
        .modal { background: white; width: 90%; max-width: 900px; border-radius: .5rem; overflow: hidden; }
        .modal img { width: 100%; height: auto; display: block; }
        .modal-header { display: flex; justify-content: space-between; align-items: center; padding: 1rem; border-bottom: 1px solid #eee; }
        .modal-body { padding: 0; }
        @media (max-width: 1024px) { .gallery-grid { grid-template-columns: repeat(2, minmax(0,1fr)); } }
        @media (max-width: 640px) { .gallery-grid { grid-template-columns: 1fr; } .article-title { font-size: 1.75rem; } }
    </style>
</head>
<body class="bg-white text-black min-h-screen">
    <!-- Header -->
    <header class="bg-white sticky top-0 z-50 border-b border-gray-200 shadow-sm">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <h1 class="text-2xl font-bold yellow-accent">Pahlawan</h1>
                <span class="text-yellow-500">•</span>
                <span class="text-sm font-medium">Galeri Sejarah Indonesia</span>
            </div>
            <div class="flex items-center space-x-4">
                <i class="fas fa-user-circle text-gray-400 text-xl"></i>
            </div>
        </nav>
    </header>

    <!-- Hero -->
    <section class="hero-section text-center text-white relative section-padding">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto hero-text">
                <h2 class="text-4xl font-bold mb-4 leading-tight">GALERI PAHLAWAN</h2>
                <p class="text-lg mb-6 max-w-2xl mx-auto">Kumpulan foto Perang Jawa dan potret Pangeran Diponegoro. Klik gambar untuk melihat ukuran penuh.</p>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="bg-white section-padding">
        <div class="article-section">
            <h1 class="article-title yellow-accent">Galeri: Perang Jawa & Pangeran Diponegoro</h1>
            <p class="article-subtitle">Arsip foto historis dan ilustrasi — sumber publik dan koleksi arsip.</p>

            {{-- Expect a $images array passed from controller. Each item: ['url'=>..., 'title'=>..., 'source'=>...] --}}
            @php
                if(!isset($images) || empty($images)) {
                    $images = [
                        ['url' => 'https://upload.wikimedia.org/wikipedia/commons/4/4f/Raden_Saleh_-_Diponegoro_arrest.jpg', 'title' => 'Penangkapan Diponegoro (Raden Saleh)', 'source' => 'Wikimedia'],
                        ['url' => 'https://i.pinimg.com/736x/78/19/09/781909c53d60e8c72817cc0ed5363181.jpg', 'title' => 'Potret Pangeran Diponegoro', 'source' => 'Pinterest'],
                        ['url' => 'https://sultansinindonesieblog.wordpress.com/wp-content/uploads/2020/07/perang-diiponegoro-pp.jpg', 'title' => 'Ilustrasi Pertempuran Perang Jawa', 'source' => 'SultansinIndonesie'],
                        ['url' => 'https://upload.wikimedia.org/wikipedia/commons/1/1c/Perang_Jawa_%281825-1830%29.jpg', 'title' => 'Perang Jawa - Ilustrasi', 'source' => 'Arsip'],
                        ['url' => 'https://upload.wikimedia.org/wikipedia/commons/7/72/Diponegoro_portrait.jpg', 'title' => 'Potret Diponegoro (studio)', 'source' => 'Wikimedia'],
                        ['url' => 'https://share.google/images/WyBAvPhoON8XGgPS6', 'title' => 'Adegan Pertempuran Jawa', 'source' => 'Arsip Sejarah']
                    ];
                }
            @endphp

            <div class="gallery-grid mt-8">
                @foreach($images as $index => $img)
                    <div class="gallery-item" tabindex="0" data-index="{{ $index }}" onclick="openModal({{ $index }})" onkeypress="if(event.key==='Enter') openModal({{ $index }})">
                        <img src="{{ $img['url'] }}" alt="{{ $img['title'] }}">
                        <div class="caption">{{ $img['title'] }}</div>
                    </div>
                @endforeach
            </div>

            <div class="fact-box mt-10">
                <h4 class="font-semibold yellow-accent"><i class="fas fa-lightbulb mr-2"></i>Catatan</h4>
                <p class="text-sm gray-text">Sumber gambar berasal dari koleksi publik atau arsip tertulis. Jika Anda adalah pemilik foto yang ingin dicantumkan sumber atau menghapus gambar, hubungi admin.</p>
            </div>

            <div class="article-buttons mt-6">
                <a href="{{ url('/') }}" class="border border-black text-black hover:bg-black hover:text-white px-6 py-3 rounded-lg">Kembali ke Beranda</a>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div id="modalBackdrop" class="modal-backdrop">
        <div class="modal">
            <div class="modal-header">
                <div class="flex items-center gap-3">
                    <h3 id="modalTitle" class="font-semibold"></h3>
                    <span id="modalSource" class="text-sm text-gray-500"></span>
                </div>
                <div>
                    <button onclick="closeModal()" aria-label="Tutup" class="px-3 py-1 rounded hover:bg-gray-100"><i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="modal-body">
                <img id="modalImage" src="" alt="">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 mt-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-2xl font-bold yellow-accent mb-4">Pahlawan Sejarah</h3>
                    <p class="gray-text mb-6">Platform untuk mengenang kisah kepahlawanan tokoh-tokoh bangsa Indonesia. Inspirasi dari masa lalu untuk masa depan.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-yellow-500 transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-yellow-500 transition"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-yellow-500 transition"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold mb-4 yellow-accent">Tautan Cepat</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-yellow-500 transition">Galeri Pahlawan</a></li>
                        <li><a href="#" class="hover:text-yellow-500 transition">Artikel Sejarah</a></li>
                        <li><a href="#" class="hover:text-yellow-500 transition">Tentang Kami</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4 yellow-accent">Kontak</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-envelope mr-2"></i>info@pahlawansejarah.id</li>
                        <li><i class="fas fa-phone mr-2"></i>+62 21 12345678</li>
                        <li><a href="#" class="hover:text-yellow-500 transition">Kebijakan Privasi</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Pahlawan Sejarah Indonesia. Semua hak dilindungi. Dibuat dengan <i class="fas fa-heart text-yellow-500"></i> untuk bangsa.</p>
            </div>
        </div>
    </footer>

    <script>
        const images = @json($images);
        const modalBackdrop = document.getElementById('modalBackdrop');
        const modalImage = document.getElementById('modalImage');
        const modalTitle = document.getElementById('modalTitle');
        const modalSource = document.getElementById('modalSource');

        function openModal(index) {
            const item = images[index];
            modalImage.src = item.url;
            modalImage.alt = item.title || '';
            modalTitle.textContent = item.title || '';
            modalSource.textContent = item.source ? ' • ' + item.source : '';
            modalBackdrop.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modalBackdrop.style.display = 'none';
            modalImage.src = '';
            document.body.style.overflow = '';
        }

        // close modal on backdrop click
        modalBackdrop.addEventListener('click', function(e) {
            if (e.target === modalBackdrop) closeModal();
        });

        // keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (modalBackdrop.style.display === 'flex') {
                if (e.key === 'Escape') closeModal();
            }
        });
    </script>
</body>
</html>
