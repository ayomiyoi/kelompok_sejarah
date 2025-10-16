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

        body {
            font-family: 'Inter', sans-serif;
        }

        .yellow-accent {
            color: #FFD700;
        }

        .gray-text {
            color: #6B7280;
        }

        .black-bg {
            background: #000;
        }

        .white-bg {
            background: white;
        }

        .hero-section {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), transparent), url('https://upload.wikimedia.org/wikipedia/commons/4/4f/Raden_Saleh_-_Diponegoro_arrest.jpg') center/cover;
            background-attachment: fixed;
        }

        .article-section {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .article-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            line-height: 1.2;
        }

        .article-subtitle {
            font-size: 1.25rem;
            font-weight: 500;
            margin-bottom: 3rem;
            color: #4B5563;
        }

        .article-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 0.5rem;
            margin: 2.5rem 0;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        .article-paragraph {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 2rem;
            color: #374151;
            text-align: justify;
        }

        .article-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 3rem;
            flex-wrap: wrap;
        }

        .article-buttons button {
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
            min-width: 150px;
        }

        .hero-text {
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.7);
        }

        .quote-box {
            background: linear-gradient(135deg, #fffaf0, #fef5e7);
            border-left: 4px solid #FFD700;
            padding: 2rem;
            border-radius: 0.5rem;
            margin: 3rem 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            position: relative;
        }

        .quote-box blockquote {
            font-style: italic;
            font-size: 1.3rem;
            color: #8B4513;
            margin: 0 0 1rem 0;
            position: relative;
            line-height: 1.5;
        }

        .quote-box blockquote::before {
            content: '"';
            font-size: 4rem;
            color: #FFD700;
            position: absolute;
            left: -0.5rem;
            top: -0.5rem;
            opacity: 0.8;
            font-family: serif;
        }

        .quote-author {
            text-align: right;
            font-weight: 600;
            color: #6B7280;
            font-size: 1rem;
            margin: 0;
        }

        .timeline {
            background: #f8f9fa;
            border-radius: 0.5rem;
            padding: 2rem;
            margin: 3rem 0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            position: relative;
        }

        .timeline::after {
            content: '';
            position: absolute;
            left: 20px;
            top: 40px;
            bottom: 20px;
            width: 2px;
            background: #FFD700;
            z-index: 0;
        }

        .timeline h4 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: #FFD700;
            display: flex;
            align-items: center;
            position: relative;
            z-index: 1;
            background: transparent;
        }

        .timeline-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
            padding-left: 0;
        }

        .timeline-icon {
            width: 12px;
            height: 12px;
            background: #FFD700;
            border-radius: 50%;
            margin-right: 1rem;
            margin-top: 0.5rem;
            flex-shrink: 0;
            position: relative;
            z-index: 2;
        }

        .timeline-text {
            flex: 1;
            color: #374151;
            font-size: 1rem;
            line-height: 1.6;
            background: transparent;
            padding: 0;
        }

        .fact-box {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 0.5rem;
            padding: 2rem;
            margin: 3rem 0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .fact-box h4 {
            color: #856404;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            font-size: 1.25rem;
        }

        .fact-list {
            list-style: none;
            padding: 0;
        }

        .fact-list li {
            padding: 0.75rem 0;
            border-bottom: 1px solid #ffeaa7;
            color: #856404;
            font-size: 1rem;
            line-height: 1.6;
            position: relative;
            padding-left: 1.5rem;
        }

        .fact-list li::before {
            content: '✦';
            position: absolute;
            left: 0;
            color: #FFD700;
        }

        .fact-list li:last-child {
            border-bottom: none;
        }

        .section-padding {
            padding: 4rem 0;
        }

        @media (max-width: 768px) {
            .hero-section {
                py-20;
            }

            .hero-text h2 {
                font-size: 3rem;
            }

            .hero-text h1 {
                font-size: 4rem;
            }

            .article-title {
                font-size: 2rem;
                margin-bottom: 0.75rem;
            }

            .article-subtitle {
                font-size: 1.1rem;
                margin-bottom: 2rem;
            }

            .article-paragraph {
                font-size: 1rem;
                margin-bottom: 1.5rem;
            }

            .article-image {
                height: 250px;
                margin: 2rem 0;
            }

            .article-buttons {
                flex-direction: column;
                align-items: center;
                gap: 0.75rem;
            }

            .quote-box {
                padding: 1.5rem;
                margin: 2rem 0;
            }

            .quote-box blockquote {
                font-size: 1.1rem;
            }

            .quote-box blockquote::before {
                font-size: 3rem;
                top: -0.75rem;
            }

            .timeline {
                padding: 1.5rem;
                margin: 2rem 0;
            }

            .timeline::after {
                left: 15px;
            }

            .timeline h4 {
                font-size: 1.1rem;
                margin-bottom: 1.5rem;
            }

            .timeline-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .timeline-icon {
                margin-right: 0;
                margin-bottom: 0.5rem;
                margin-left: 15px;
            }

            .timeline-text {
                background: none;
                padding: 0;
            }

            .fact-box {
                padding: 1.5rem;
                margin: 2rem 0;
            }

            .fact-list li {
                padding-left: 1.5rem;
                font-size: 0.95rem;
            }

            .section-padding {
                padding: 2rem 0;
            }
        }
    </style>
</head>

<body class="bg-white text-black min-h-screen">
    <!-- Header -->
    <header class="bg-white sticky top-0 z-50 border-b border-gray-200 shadow-sm">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <h1 class="text-2xl font-bold yellow-accent">Pahlawan</h1>
                <span class="text-yellow-500">•</span>
                <span class="text-sm font-medium">Sejarah Indonesia</span>
            </div>
            <div class="flex items-center space-x-4">
                <i class="fas fa-user-circle text-gray-400 text-xl"></i>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero-section text-center text-white relative section-padding">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto hero-text">
                <h2 class="text-5xl font-bold mb-4 leading-tight">SELAMAT DATANG DI</h2>
                <h1 class="text-6xl font-bold mb-8">PAHLAWAN SEJARAH</h1>
                <p class="text-xl mb-12 max-w-2xl mx-auto">Fokus pada kisah kepahlawanan Perang Diponegoro: Perlawanan
                    heroik melawan penjajah Belanda yang menginspirasi nasionalisme modern.</p>
                <div class="flex justify-center space-x-6">
                    <button onclick="document.querySelector('.article-section').scrollIntoView({behavior: 'smooth'});"
                        class="black-bg text-white px-8 py-4 rounded-lg font-semibold hover:opacity-90 transition">
                        Jelajahi Kisah
                    </button>


                    <button onclick="window.location.href='{{ url('/artikel') }}';"
                        class="bg-yellow-400 text-black px-8 py-4 rounded-lg font-semibold hover:bg-yellow-500 transition">
                        Artikel Lainnya
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Artikel Section -->
    <section class="bg-white section-padding">
        <div class="article-section">
            <h1 class="article-title yellow-accent">Pangeran Diponegoro: Pemimpin Perang Jawa</h1>
            <p class="article-subtitle">Perlawanan Heroik Melawan Penjajah Belanda (1825-1830)</p>

            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 italic mb-8 rounded-md shadow">
                “Aku adalah pejuang! Sebagai pejuang, tugasku adalah berjuang. Soal kalah atau menang, itu bukan
                urusanku,
                karena tugasku adalah berjuang.”
                <p class="text-right font-semibold mt-2 text-gray-600">– Pangeran Diponegoro</p>
            </div>

            <img src="https://i.pinimg.com/736x/78/19/09/781909c53d60e8c72817cc0ed5363181.jpg" alt="Pangeran Diponegoro"
                class="article-image">

            <p class="article-paragraph">Pangeran Diponegoro, lahir pada 11 November 1785 di Yogyakarta, adalah seorang
                bangsawan Jawa yang menjadi simbol perjuangan melawan kolonialisme Belanda. Ia memimpin Perang Jawa,
                salah satu pemberontakan terbesar di Hindia Belanda, yang berlangsung dari 1825 hingga 1830. Perang ini
                melibatkan jutaan rakyat Jawa dan menyebabkan kerugian besar bagi pihak Belanda, termasuk biaya perang
                yang mencapai ratusan juta gulden.</p>

            <div class="timeline">
                <h4><i class="fas fa-timeline mr-2"></i>Garis Waktu Perang Jawa</h4>
                <div class="timeline-item">
                    <div class="timeline-icon"></div>
                    <div class="timeline-text"><strong>1785:</strong> Kelahiran Pangeran Diponegoro di Yogyakarta.</div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon"></div>
                    <div class="timeline-text"><strong>20 Juli 1825:</strong> Dimulainya perlawanan dengan pengiriman
                        pasukan Belanda untuk menangkap Diponegoro.</div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon"></div>
                    <div class="timeline-text"><strong>1825-1830:</strong> Pertempuran gerilya di Jawa Tengah dan Timur,
                        melibatkan jutaan rakyat.</div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon"></div>
                    <div class="timeline-text"><strong>28 Maret 1830:</strong> Diponegoro ditangkap melalui tipu
                        muslihat dan diasingkan ke Makassar.</div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon"></div>
                    <div class="timeline-text"><strong>1855:</strong> Wafatnya Pangeran Diponegoro di pengasingan.</div>
                </div>
            </div>

            <p class="article-paragraph">Latar belakang perlawanan Diponegoro berakar pada ketidakpuasan terhadap
                kebijakan Belanda yang merampas tanah dan mengganggu tradisi keagamaan. Diponegoro, yang dikenal sebagai
                ulama dan pemimpin spiritual, melihat perjuangan ini sebagai jihad suci. Strategi gerilya yang
                inovatifnya memungkinkan pasukannya bertahan di pegunungan dan hutan Jawa Tengah, membuat Belanda
                kesulitan menekan pemberontakan.</p>

            <img src="https://sultansinindonesieblog.wordpress.com/wp-content/uploads/2020/07/perang-diiponegoro-pp.jpg"
                alt="Pertempuran Perang Jawa" class="article-image">

            <p class="article-paragraph">Meskipun akhirnya ditangkap melalui tipu muslihat pada 1830 dan diasingkan ke
                Makassar hingga wafatnya pada 1855, warisan Diponegoro tetap hidup. Perang Jawa menjadi inspirasi bagi
                gerakan nasionalisme Indonesia modern, menunjukkan kekuatan rakyat bersatu melawan penindas. Kisahnya
                mengajarkan nilai ketabahan, iman, dan semangat kemerdekaan yang tak tergoyahkan.</p>

            <div class="fact-box">
                <h4><i class="fas fa-lightbulb mr-2"></i>Fakta Menarik</h4>
                <ul class="fact-list">
                    <li>Perang Jawa menguras biaya Belanda hingga 200 juta gulden, setara dengan hutang besar bagi
                        kerajaan Belanda.</li>
                    <li>Diponegoro memimpin pasukan hingga 200.000 orang pada puncak perlawanan.</li>
                    <li>Perang ini menjadi inspirasi bagi pemberontakan selanjutnya di Indonesia melawan kolonialisme.
                    </li>
                </ul>
            </div>

            <div class="article-buttons">
                <button onclick="shareArticle()"
                    class="border border-black text-black hover:bg-black hover:text-white transition">
                    <i class="fas fa-share mr-2"></i>Bagikan Kisah
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 mt-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-2xl font-bold yellow-accent mb-4">Pahlawan Sejarah</h3>
                    <p class="gray-text mb-6">Platform untuk mengenang kisah kepahlawanan tokoh-tokoh bangsa Indonesia.
                        Inspirasi dari masa lalu untuk masa depan.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-yellow-500 transition"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-yellow-500 transition"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-yellow-500 transition"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold mb-4 yellow-accent">Tautan Cepat</h4>
                    <ul class="space-y-2 text-gray-400">
<<<<<<< HEAD
                        <li><a href="galeri.blade.php;" class="hover:text-yellow-500 transition">Galeri Pahlawan</a></li>
                        <li><a href="#" class="hover:text-yellow-500 transition">Artikel Sejarah</a></li>
=======
                        <li><a href="#" class="hover:text-yellow-500 transition">Galeri Pahlawan</a></li>
                        <li><a href="artikel.blade.php" class="hover:text-yellow-500 transition">Artikel Sejarah</a>
                        </li>
>>>>>>> c09fb3408d6917e181c067279aaa9e49dbed4f77
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
                <p>&copy; 2025 Pahlawan Sejarah Indonesia. Semua hak dilindungi. Dibuat dengan <i
                        class="fas fa-heart text-yellow-500"></i> untuk bangsa.</p>
            </div>
        </div>
    </footer>

    <!-- Toast -->
    <div id="toast"
        class="fixed bottom-4 right-4 bg-yellow-500 text-black px-6 py-3 rounded-lg shadow-lg hidden z-50 font-medium">
        Tautan disalin!
    </div>

    <script>
        // Share Article
        function shareArticle() {
            const title = 'Pangeran Diponegoro: Pemimpin Perang Jawa';
            if (navigator.share) {
                navigator.share({
                    title: title,
                    url: window.location.href
                });
            } else {
                navigator.clipboard.writeText(title + ' - ' + window.location.href);
                showToast('Tautan disalin!');
            }
        }

        function showToast(msg = 'Tautan disalin!') {
            const toast = document.getElementById('toast');
            toast.textContent = msg;
            toast.classList.remove('hidden');
            setTimeout(() => toast.classList.add('hidden'), 2500);
        }
    </script>
</body>

</html>
