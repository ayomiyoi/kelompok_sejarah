<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pahlawan Sejarah - Pangeran Diponegoro</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
    body { font-family: 'Inter', sans-serif; }
    .yellow-accent { color: #FFD700; }
    .hero-section {
      background: linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
      url('https://upload.wikimedia.org/wikipedia/commons/4/4f/Raden_Saleh_-_Diponegoro_arrest.jpg') center/cover;
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
  <section class="hero-section text-center text-white relative py-24">
    <div class="container mx-auto px-6">
      <h1 class="text-5xl font-bold mb-2">SELAMAT DATANG DI</h1>
      <h2 class="text-6xl font-extrabold text-yellow-400 mb-6">PAHLAWAN SEJARAH</h2>
      <p class="max-w-2xl mx-auto mb-8 text-lg">
        Fokus pada kisah kepahlawanan Pangeran Diponegoro: Perlawanan heroik melawan penjajahan Belanda
        yang menginspirasi nasionalisme modern.
      </p>
      
      <button 
        onclick="window.location.href='{{ url('/') }}';"
        class="bg-yellow-400 text-black px-8 py-4 rounded-lg font-semibold hover:bg-yellow-500 transition">
        Kembali ke Beranda
      </button>
    </div>
  </section>

  <!-- Artikel -->
  <section id="kisah" class="max-w-3xl mx-auto py-16 px-6">
    <h2 class="text-3xl font-bold text-yellow-500 mb-2">
      Pangeran Diponegoro: Pemimpin Perang Jawa
    </h2>
    <p class="text-gray-500 mb-6">
      Perlawanan Heroik Melawan Penjajah Belanda (1825–1830)
    </p>

    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 italic mb-8 rounded-md shadow">
      “Aku adalah pejuang! Sebagai pejuang, tugasku adalah berjuang. Soal kalah atau menang, itu bukan urusanku,
      karena tugasku adalah berjuang.”
      <p class="text-right font-semibold mt-2 text-gray-600">– Pangeran Diponegoro</p>
    </div>

    <img src="https://i.pinimg.com/736x/78/19/09/781909c53d60e8c72817cc0ed5363181.jpg" 
         alt="Perang Diponegoro" class="rounded-lg shadow-md mb-8">

    <p class="text-gray-700 leading-relaxed mb-8">
      Pangeran Diponegoro, lahir pada 11 November 1785 di Yogyakarta, adalah seorang bangsawan Jawa yang menjadi
      simbol perjuangan melawan kolonialisme Belanda. Ia memimpin Perang Jawa, salah satu pemberontakan terbesar
      di Hindia Belanda, yang berlangsung dari 1825 hingga 1830. Perang ini melibatkan jutaan rakyat Jawa dan
      menyebabkan kerugian besar bagi pihak Belanda, termasuk biaya perang yang mencapai ratusan juta gulden.
    </p>

    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 mb-10 rounded-md">
      <h3 class="font-semibold text-yellow-600 mb-4 flex items-center">
        <i class="fas fa-clock mr-2"></i> Garis Waktu Perang Jawa
      </h3>
      <ul class="space-y-2 text-gray-700">
        <li>🔸 1785: Kelahiran Pangeran Diponegoro di Yogyakarta.</li>
        <li>🔸 20 Juli 1825: Dimulainya perlawanan besar terhadap Belanda.</li>
        <li>🔸 1825–1830: Pertempuran gerilya di Jawa Tengah dan Timur.</li>
        <li>🔸 28 Maret 1830: Diponegoro ditangkap dan diasingkan ke Makassar.</li>
        <li>🔸 1855: Wafatnya Pangeran Diponegoro di pengasingan.</li>
      </ul>
    </div>

    <p class="text-gray-700 leading-relaxed mb-8">
      Latar belakang perlawanan Diponegoro berakar pada ketidakpuasan terhadap kebijakan Belanda yang merampas
      tanah dan mengganggu tradisi keagamaan. Sebagai pemimpin spiritual dan rakyat, Diponegoro memimpin perjuangan
      suci melawan penjajahan. Strategi gerilyanya yang inovatif membuat pasukannya sulit ditaklukkan di wilayah
      pegunungan Jawa Tengah.
    </p>

    <img src="https://sultansinindonesieblog.wordpress.com/wp-content/uploads/2020/07/perang-diiponegoro-pp.jpg" 
         alt="Pegunungan Jawa" class="rounded-lg shadow mb-8">

    <p class="text-gray-700 leading-relaxed mb-8">
      Meskipun akhirnya tertangkap melalui tipu muslihat dan diasingkan ke Makassar hingga wafat pada 1855,
      warisan perjuangan Diponegoro tetap hidup. Kisahnya menjadi inspirasi gerakan nasionalisme modern Indonesia.
    </p>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 p-6 rounded-md mb-10">
      <h3 class="font-semibold text-yellow-700 mb-3 flex items-center">
        <i class="fas fa-lightbulb mr-2"></i> Fakta Menarik
      </h3>
      <ul class="list-disc ml-6 text-gray-700 space-y-1">
        <li>Perang Jawa menguras biaya Belanda hingga 200 juta gulden.</li>
        <li>Diponegoro memimpin hingga 200.000 pasukan rakyat.</li>
        <li>Kisahnya menjadi inspirasi gerakan perlawanan kolonial selanjutnya.</li>
      </ul>
    </div>

    <div class="text-center flex flex-col md:flex-row justify-center gap-4">
      <button onclick="shareArticle()" 
              class="border border-gray-400 hover:bg-gray-200 transition px-4 py-2 rounded-lg text-sm">
        📤 Bagikan Kisah
      </button>
      
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-12 mt-20">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div>
          <h3 class="text-2xl font-bold yellow-accent mb-4">Pahlawan Sejarah</h3>
          <p class="text-gray-400 mb-6">
            Platform untuk mengenang kisah kepahlawanan tokoh-tokoh bangsa Indonesia.
            Inspirasi dari masa lalu untuk masa depan.
          </p>
        </div>
        <div>
          <h4 class="font-semibold mb-4 yellow-accent">Tautan Cepat</h4>
          <ul class="space-y-2 text-gray-400">
            <li><a href="{{ url('/') }}" class="hover:text-yellow-500 transition">Beranda</a></li>
            <li><a href="{{ url('/artikel') }}" class="hover:text-yellow-500 transition">Artikel Sejarah</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-semibold mb-4 yellow-accent">Kontak</h4>
          <ul class="space-y-2 text-gray-400">
            <li><i class="fas fa-envelope mr-2"></i> info@pahlawansejarah.id</li>
            <li><i class="fas fa-phone mr-2"></i> +62 21 12345678</li>
          </ul>
        </div>
      </div>
      <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
        <p>&copy; 2025 Pahlawan Sejarah Indonesia. Semua hak dilindungi.</p>
      </div>
    </div>
  </footer>

  <!-- Toast -->
  <div id="toast" class="fixed bottom-4 right-4 bg-yellow-500 text-black px-6 py-3 rounded-lg shadow-lg hidden z-50 font-medium">
    Tautan disalin!
  </div>

  <script>
    function shareArticle() {
      const title = 'Pangeran Diponegoro: Pemimpin Perang Jawa';
      if (navigator.share) {
        navigator.share({ title: title, url: window.location.href });
      } else {
        navigator.clipboard.writeText(title + ' - ' + window.location.href);
        showToast('Tautan disalin!');
      }
    }

    function showToast(msg) {
      const toast = document.getElementById('toast');
      toast.textContent = msg;
      toast.classList.remove('hidden');
      setTimeout(() => toast.classList.add('hidden'), 2500);
    }
  </script>

</body>
</html>
