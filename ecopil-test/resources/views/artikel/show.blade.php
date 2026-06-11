{{-- =====================================================
     HALAMAN DETAIL ARTIKEL
     resources/views/artikel/show.blade.php
     ===================================================== --}}

@extends('layouts.app')

{{-- ═══════════════════════════════════════════════════════════════
     SEO Meta Tags untuk Setiap Artikel
     ═══════════════════════════════════════════════════════════════ --}}
@section('title', $article['title'] . ' — ECOPIL | Sabun Cuci Piring Alami')
@section('description', $article['description'])
@section('keywords', $article['keywords'])
@section('og_title', $article['title'])
@section('og_description', $article['description'])
@section('og_image', asset($article['image']))

@section('content')

<main class="bg-gray-50 min-h-screen">

    {{-- ── Hero Header ── --}}
    <section class="bg-white border-b border-gray-100">
        <div class="max-w-4xl mx-auto px-6 py-14">

            {{-- Breadcrumb --}}
            <nav class="flex items-center gap-2 text-xs text-gray-400 mb-8">
                <a href="{{ url('/') }}" class="hover:text-[#2e7d32] transition-colors">Beranda</a>
                <span>/</span>
                <a href="{{ route('artikel.index') }}" class="hover:text-[#2e7d32] transition-colors">Artikel</a>
                <span>/</span>
                <span class="text-gray-600 line-clamp-1">{{ $article['title'] }}</span>
            </nav>

            <span class="inline-block bg-green-50 text-[#2e7d32] text-xs font-bold
                         uppercase tracking-widest px-3 py-1 rounded-full mb-4">
                {{ $article['label'] }}
            </span>

            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight mb-4">
                {{ $article['title'] }}
            </h1>

            <p class="text-gray-500 text-sm">
                Diterbitkan oleh <span class="font-semibold text-gray-700">Tim ECOPIL</span>
            </p>
        </div>
    </section>

    {{-- ── Thumbnail Utama ── --}}
    <div class="max-w-4xl mx-auto px-6 pt-8">
        <div class="rounded-2xl overflow-hidden shadow-md bg-gray-100 h-72 md:h-96 flex items-center justify-center">
            <img src="{{ asset($article['image']) }}"
                 alt="{{ $article['alt'] }}"
                 class="w-full h-full object-cover"
                 onerror="this.style.display='none'">
        </div>
    </div>

    {{-- ── Isi Artikel ── --}}
    <article class="max-w-4xl mx-auto px-6 py-12">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 md:p-12
                    prose prose-lg max-w-none text-gray-700 leading-relaxed
                    prose-headings:text-[#2e7d32] prose-headings:font-bold
                    prose-a:text-[#2e7d32] prose-a:no-underline hover:prose-a:underline
                    prose-strong:text-gray-800 prose-ol:text-gray-700 prose-ul:text-gray-700">

            {{-- ============================================================
                 Konten per artikel berdasarkan slug
                 Ganti placeholder gambar inline dengan path PNG kamu:
                 public/images/artikel/artikel-X-inline.png
                 ============================================================ --}}

            @if ($article['slug'] === 'cara-memilih-sabun-cuci-piring-aman-keluarga-lingkungan')
            {{-- ══════════════════════════════════════════════════════════
                 ARTIKEL 1: Cara Memilih Sabun Cuci Piring yang Aman
                 ══════════════════════════════════════════════════════════ --}}

                <h2>Kenapa Sabun Cuci Piring yang Kamu Pakai Itu Penting?</h2>
                <p>
                    Pernah nggak sih, habis cuci piring tangan langsung terasa kering dan kasar? Atau mungkin kamu
                    mulai kepikiran — sebenarnya sabun yang kita pakai setiap hari itu aman nggak ya buat kulit dan
                    lingkungan?
                </p>
                <p>
                    Pertanyaan sederhana ini ternyata punya jawaban yang cukup penting. Sabun cuci piring bukan cuma
                    soal bersih atau nggak. Ini soal apa yang bersentuhan langsung dengan kulit kita setiap hari —
                    dan soal limbah yang mengalir ke lingkungan setelahnya.
                </p>
                <p>
                    Buat kamu yang peduli sama kesehatan keluarga dan mulai peduli soal gaya hidup ramah lingkungan,
                    memilih sabun cuci piring yang tepat adalah langkah kecil yang dampaknya besar.
                </p>

                <h2>Bahaya Tersembunyi di Balik Sabun Cuci Piring Biasa</h2>
                <h3>Kandungan Kimia yang Perlu Diwaspadai</h3>
                <p>
                    Banyak sabun cuci piring konvensional mengandung bahan seperti Sodium Lauryl Sulfate (SLS),
                    paraben, dan pewangi sintetis. Bahan-bahan ini memang bikin busa melimpah dan wangi kuat.
                    Tapi efek sampingnya bisa terasa di kulit — terutama kalau kamu mencuci tanpa sarung tangan.
                </p>
                <p>
                    SLS misalnya, dikenal bisa menghilangkan minyak alami di kulit. Akibatnya? Tangan jadi kering,
                    pecah-pecah, dan kadang terasa perih. Kalau dibiarkan terus-menerus, ini bisa jadi masalah kulit
                    yang lebih serius.
                </p>
                <h3>Dampaknya ke Lingkungan</h3>
                <p>
                    Limbah sabun yang mengandung bahan kimia keras nggak langsung hilang begitu saja. Zat-zat ini
                    mengalir ke saluran air, dan sebagian besar sulit terurai secara alami. Dalam jangka panjang,
                    ini bisa mencemari sumber air dan mengganggu ekosistem di sekitar kita.
                </p>
                <p>
                    Bayangkan — setiap kali kita mencuci piring, ada jejak kecil yang kita tinggalkan untuk bumi.
                    Pertanyaannya, jejak seperti apa yang mau kita berikan?
                </p>

                <h2>Tips Memilih Sabun Cuci Piring yang Lebih Aman</h2>
                <p>Kalau kamu sudah mulai sadar pentingnya memilih sabun yang aman, berikut beberapa tips yang bisa jadi panduan:</p>
                <ol>
                    <li><strong>Cek komposisinya.</strong> Pilih sabun yang menggunakan bahan alami dan biodegradable — artinya bisa terurai dengan mudah di alam. Bahan seperti lerak, eco enzyme, atau sabut pinang adalah contoh bahan alami yang sudah terbukti efektif.</li>
                    <li><strong>Hindari pewarna dan pewangi sintetis berlebihan.</strong> Wangi yang menyengat bukan tanda bersih — justru sering jadi pemicu iritasi.</li>
                    <li><strong>Pilih brand yang transparan soal kandungan produknya.</strong> Brand yang bertanggung jawab nggak akan sembunyi-sembunyi soal apa yang ada di dalam botolnya.</li>
                    <li><strong>Perhatikan kemasannya.</strong> Produk eco-friendly biasanya juga peduli soal kemasan yang minimalis dan ramah lingkungan.</li>
                </ol>

                {{-- Gambar inline artikel 1 --}}
                <div class="my-8 rounded-xl overflow-hidden bg-gray-50 border border-gray-100 not-prose">
                    <img src="{{ asset('images/artikel/artikel-1-inline.png') }}"
                         alt="Checklist tips memilih sabun cuci piring aman: baca label, hindari kimia keras, pilih bahan alami biodegradable"
                         class="w-full object-cover rounded-xl"
                         loading="lazy"
                         onerror="this.closest('div').style.display='none'">
                </div>

                <h2>ECOPIL: Sabun Cuci Piring yang Aman dan Ramah Lingkungan</h2>
                <p>
                    Kalau kamu cari sabun cuci piring ramah lingkungan yang beneran aman dan nyaman dipakai
                    sehari-hari, ECOPIL bisa jadi jawabannya.
                </p>
                <p>
                    ECOPIL dibuat dari bahan alami seperti sabut pinang, lerak, dan eco enzyme. Jadi nggak cuma
                    bersih, tapi juga lembut di tangan. Cocok banget buat kamu yang sering cuci piring tanpa sarung
                    tangan dan kulit mudah kering.
                </p>
                <p>
                    Tersedia dalam dua ukuran: <strong>250 ml (Rp 17.999)</strong> dan
                    <strong>500 ml (Rp 29.999)</strong>. Harga yang terjangkau untuk produk yang peduli sama kamu
                    dan lingkungan.
                </p>

                <h2>Kesimpulan</h2>
                <p>
                    Memilih sabun cuci piring bukan hal sepele. Ini tentang melindungi kulit tangan kamu, menjaga
                    kesehatan keluarga, dan mengurangi dampak negatif ke lingkungan. Dengan sedikit perhatian pada
                    komposisi dan brand yang kamu pilih, kamu sudah berkontribusi untuk perubahan yang lebih baik.
                </p>
                <p>
                    Karena hal besar selalu dimulai dari langkah kecil. Dan langkah kecil itu bisa dimulai dari
                    tempat yang paling dekat — dapur rumahmu.
                </p>

            @elseif ($article['slug'] === 'sabun-cuci-piring-alami-vs-kimia-untuk-keluarga')
            {{-- ══════════════════════════════════════════════════════════
                 ARTIKEL 2: Sabun Cuci Piring Alami vs Kimia
                 ══════════════════════════════════════════════════════════ --}}

                {{-- Placeholder gambar split alami vs kimia --}}
                <div class="mb-8 rounded-xl overflow-hidden bg-gray-50 border border-gray-100 not-prose">
                    <img src="{{ asset('images/artikel/artikel-2-inline.png') }}"
                         alt="Perbandingan sabun cuci piring alami dan kimia"
                         class="w-full object-cover rounded-xl"
                         onerror="this.closest('div').style.display='none'">
                </div>

                <h2>Sehari-hari Kita Pakai, Tapi Jarang Diperhatikan</h2>
                <p>
                    Mencuci piring itu aktivitas yang hampir nggak pernah kita pikirkan dua kali. Tinggal pencet
                    sabun, gosok, bilas — selesai. Tapi pernah nggak kepikiran, sabun yang kita pakai setiap hari
                    itu terbuat dari apa?
                </p>
                <p>
                    Di pasaran ada dua jenis utama: sabun cuci piring berbahan kimia sintetis dan sabun berbahan
                    alami. Keduanya sama-sama bisa membersihkan. Tapi dari segi keamanan, kenyamanan, dan dampak
                    lingkungan — ada perbedaan besar yang perlu kamu tahu.
                </p>

                <h2>Apa Bedanya Sabun Alami dan Sabun Kimia?</h2>
                <h3>Sabun Berbahan Kimia Sintetis</h3>
                <p>
                    Sabun cuci piring konvensional umumnya menggunakan surfaktan sintetis seperti SLS (Sodium Lauryl
                    Sulfate), ditambah pewangi buatan dan pewarna. Formula ini memang bikin busa banyak dan daya
                    potong lemak terasa cepat.
                </p>
                <p>
                    Tapi di balik busa yang melimpah, ada risiko yang sering dilupakan. SLS bisa menghilangkan
                    minyak alami di kulit tangan, bikin kering, dan kadang menyebabkan iritasi — terutama kalau
                    kamu mencuci berkali-kali dalam sehari.
                </p>
                <h3>Sabun Berbahan Alami</h3>
                <p>
                    Sabun cuci piring alami menggunakan bahan dari alam — seperti lerak, sabut pinang, eco enzyme,
                    atau minyak kelapa. Bahan-bahan ini punya sifat pembersih alami yang sudah dipakai sejak lama.
                </p>
                <p>
                    Busanya memang nggak sebanyak sabun kimia. Tapi busa sedikit bukan berarti kurang bersih. Sabun
                    alami modern sudah diformulasikan agar tetap efektif mengangkat lemak tanpa harus keras di kulit.
                </p>

                <h2>Perbandingan dari 4 Sisi Penting</h2>
                <h3>1. Keamanan untuk Kulit</h3>
                <p>
                    Sabun alami jelas lebih unggul di sini. Bahan-bahannya lembut dan nggak menyebabkan iritasi.
                    Cocok banget untuk kamu yang punya kulit sensitif atau sering merasakan tangan kering setelah
                    cuci piring.
                </p>
                <p>
                    Sabun kimia? Bisa aman kalau kamu selalu pakai sarung tangan. Tapi jujur — berapa sering sih
                    kita benar-benar pakai sarung tangan saat cuci piring di rumah?
                </p>
                <h3>2. Efektivitas Membersihkan</h3>
                <p>
                    Sabun kimia memang punya daya bersih yang agresif. Lemak langsung terangkat. Tapi sabun alami
                    modern seperti ECOPIL juga sudah diformulasikan untuk bisa membersihkan dengan efektif —
                    tanpa harus keras.
                </p>
                <h3>3. Dampak Lingkungan</h3>
                <p>
                    Ini yang jadi pembeda besar. Sabun alami bersifat biodegradable — mudah terurai dan nggak
                    mencemari air. Sabun kimia? Butuh waktu lama untuk terurai, dan limbahnya bisa mengganggu
                    ekosistem akuatik.
                </p>
                <h3>4. Harga</h3>
                <p>
                    Sabun kimia konvensional memang biasanya lebih murah. Tapi kalau dihitung ulang, investasi pada
                    sabun alami itu investasi untuk kesehatan kulit jangka panjang dan lingkungan yang lebih bersih.
                    Apalagi sekarang sudah ada produk lokal berkualitas dengan harga terjangkau.
                </p>

                <h2>Kenapa Keluarga Modern Mulai Beralih ke Sabun Alami?</h2>
                <p>
                    Tren ini bukan sekadar ikut-ikutan. Makin banyak keluarga yang sadar bahwa produk rumah tangga
                    yang mereka gunakan setiap hari punya dampak langsung — ke kulit, ke anak-anak yang makan dari
                    piring itu, dan ke air yang mengalir kembali ke alam.
                </p>
                <p>
                    Keluarga modern ingin memberikan yang terbaik. Mereka mulai baca label, mulai cari tahu, dan
                    mulai memilih produk yang nggak cuma bersih, tapi juga aman.
                </p>

                <h2>ECOPIL: Pilihan Sabun Alami yang Tepat untuk Keluargamu</h2>
                <p>
                    ECOPIL adalah sabun cuci piring alami yang dibuat dari sabut pinang, lerak, dan eco enzyme.
                    Tanpa SLS, tanpa pewangi sintetis berlebihan. Lembut di tangan, efektif membersihkan, dan ramah
                    untuk lingkungan.
                </p>
                <p>
                    Tersedia dalam kemasan <strong>250 ml (Rp 17.500)</strong> dan
                    <strong>500 ml (Rp 25.000)</strong>. Bukti bahwa produk ramah lingkungan nggak harus mahal.
                </p>

                {{-- Placeholder foto produk ECOPIL --}}
                <div class="my-8 rounded-xl overflow-hidden bg-gray-50 border border-gray-100 not-prose">
                    <img src="{{ asset('images/artikel/artikel-2-produk.png') }}"
                         alt="Produk sabun cuci piring alami ECOPIL 250ml dan 500ml"
                         class="w-full object-cover rounded-xl"
                         onerror="this.closest('div').style.display='none'">
                </div>

                <h2>Kesimpulan</h2>
                <p>
                    Sabun alami dan kimia memang punya kelebihan masing-masing. Tapi kalau kamu mengutamakan
                    keamanan kulit, kesehatan keluarga, dan kepedulian terhadap lingkungan — sabun alami adalah
                    pilihan yang lebih bijak.
                </p>
                <p>
                    Dan perubahannya nggak harus besar. Cukup ganti satu produk di dapur. Satu langkah kecil
                    yang berdampak besar.
                </p>

            @elseif ($article['slug'] === 'tanda-sabun-cuci-piring-tidak-aman-cara-menggantinya')
            {{-- ══════════════════════════════════════════════════════════
                 ARTIKEL 3: Tanda Sabun Tidak Aman
                 ══════════════════════════════════════════════════════════ --}}

                <h2>Hal Kecil yang Sering Diabaikan di Dapur</h2>
                <p>
                    Setiap hari kita mencuci piring. Kadang dua kali, kadang tiga kali. Rasanya jadi rutinitas yang
                    nggak pernah dipertanyakan. Tapi pernahkah kamu berhenti sejenak dan memperhatikan — apa yang
                    terjadi pada tangan kamu setelah mencuci?
                </p>
                <p>
                    Kalau jawabannya tangan terasa kering, kasar, atau bahkan perih — itu bukan hal normal. Itu
                    bisa jadi sinyal bahwa sabun cuci piring yang kamu pakai ternyata nggak seaman yang kamu kira.
                </p>

                <h2>Lima Tanda Sabun Cuci Piring Kamu Tidak Aman</h2>
                <h3>1. Tangan Terasa Kering dan Kasar Setelah Mencuci</h3>
                <p>
                    Ini adalah tanda paling umum. Kalau setiap kali selesai cuci piring tangan langsung terasa
                    kering dan kasar, kemungkinan besar sabun kamu mengandung surfaktan keras seperti SLS yang
                    menghilangkan minyak alami kulit.
                </p>
                <h3>2. Kulit Tangan Sering Mengelupas atau Pecah-pecah</h3>
                <p>
                    Kalau sudah sampai tahap mengelupas, artinya paparan bahan kimia sudah cukup intens. Ini
                    terutama terjadi kalau kamu mencuci beberapa kali sehari tanpa sarung tangan.
                </p>
                <h3>3. Muncul Rasa Gatal atau Kemerahan</h3>
                <p>
                    Pewangi dan pewarna sintetis bisa memicu reaksi alergi pada kulit sensitif. Kalau kamu
                    merasakan gatal atau melihat kemerahan setelah mencuci, itu bukan kebetulan.
                </p>

                {{-- Placeholder infografis 5 tanda --}}
                <div class="my-8 rounded-xl overflow-hidden bg-gray-50 border border-gray-100 not-prose">
                    <img src="{{ asset('images/artikel/artikel-3-inline.png') }}"
                         alt="Infografis 5 tanda sabun cuci piring tidak aman untuk kulit"
                         class="w-full object-cover rounded-xl"
                         onerror="this.closest('div').style.display='none'">
                </div>

                <h3>4. Wangi Sabun Terlalu Menyengat</h3>
                <p>
                    Wangi yang terlalu kuat biasanya berasal dari pewangi sintetis dalam konsentrasi tinggi. Selain
                    berpotensi mengiritasi kulit, pewangi sintetis juga sulit terurai di lingkungan.
                </p>
                <h3>5. Residu Sabun Sulit Dibilas</h3>
                <p>
                    Kalau setelah dibilas berkali-kali masih terasa licin atau ada residu — itu tanda bahwa sabun
                    mengandung bahan yang nggak mudah larut. Bayangkan residu itu ada di piring tempat kamu makan
                    setiap hari.
                </p>

                <h2>Kenapa Ini Penting untuk Diperhatikan?</h2>
                <p>
                    Mungkin terlihat sepele. Toh cuma tangan kering, kan? Tapi kalau kita berpikir lebih jauh —
                    sabun itu bersentuhan langsung dengan kulit kita. Residunya bisa tertinggal di piring yang kita
                    pakai untuk makan. Dan limbahnya mengalir ke air yang kembali ke alam.
                </p>
                <p>
                    Ini bukan soal lebay atau overthinking. Ini soal kesadaran kecil yang bisa melindungi kesehatan
                    keluarga dan lingkungan dalam jangka panjang.
                </p>

                <h2>Cara Mulai Beralih ke Sabun yang Lebih Aman</h2>
                <p>Kabar baiknya, beralih ke sabun yang lebih aman itu nggak ribet. Kamu bisa mulai dengan langkah-langkah sederhana:</p>
                <ol>
                    <li><strong>Mulai baca label.</strong> Cek komposisi sabun yang biasa kamu pakai. Kalau ada SLS, paraben, atau pewangi sintetis dalam daftar utama — itu red flag.</li>
                    <li><strong>Coba produk alternatif berbahan alami.</strong> Nggak harus langsung ganti total. Coba dulu, rasakan perbedaannya di tangan kamu.</li>
                    <li><strong>Pilih brand yang transparan dan punya nilai.</strong> Brand yang peduli lingkungan biasanya juga peduli sama konsumennya — mereka nggak segan menjelaskan apa yang ada di dalam produknya.</li>
                </ol>

                <h2>ECOPIL: Alternatif Sabun Aman yang Dekat dengan Keseharianmu</h2>
                <p>
                    ECOPIL hadir untuk kamu yang ingin beralih ke sabun cuci piring yang lebih aman tanpa ribet.
                    Dibuat dari bahan alami — sabut pinang, lerak, dan eco enzyme — ECOPIL lembut di tangan tapi
                    tetap efektif membersihkan.
                </p>
                <p>
                    Nggak ada SLS. Nggak ada pewangi sintetis berlebihan. Yang ada cuma sabun yang bersih, aman,
                    dan nyaman dipakai setiap hari. Dengan harga mulai dari
                    <strong>Rp 17.500 (250 ml)</strong> dan <strong>Rp 25.000 (500 ml)</strong>, beralih ke pilihan
                    yang lebih baik nggak harus mahal.
                </p>

                <h2>Kesimpulan</h2>
                <p>
                    Tangan kering setelah cuci piring bukan hal yang harus diterima begitu saja. Itu sinyal bahwa
                    ada yang perlu diganti. Dan menggantinya nggak harus sulit — cukup mulai dari satu langkah
                    kecil di dapur.
                </p>
                <p>Karena keluarga kamu layak mendapat yang terbaik. Termasuk dari hal sesederhana sabun cuci piring.</p>

            @elseif ($article['slug'] === 'kulit-tangan-kering-setelah-cuci-piring-ganti-sabun-alami')
            {{-- ══════════════════════════════════════════════════════════
                 ARTIKEL 4: Kulit Tangan Kering Setelah Cuci Piring
                 ══════════════════════════════════════════════════════════ --}}

                <h2>Kenapa Tangan Terasa Kering atau Ketarik Setelah Cuci Piring?</h2>
                <p>
                    Kamu pasti pernah merasakannya. Baru selesai cuci piring, tangan langsung terasa kering,
                    kencang, dan kayak ketarik. Kadang sampai perlu langsung pakai hand cream supaya nggak makin
                    kering.
                </p>
                <p>
                    Rasa ketarik itu bukan hal normal, lho. Itu sinyal dari kulitmu bahwa ada sesuatu yang terlalu
                    keras — dan biasanya penyebab utamanya ada di sabun yang kamu pakai setiap hari.
                </p>
                <p>
                    Tapi tenang, kamu nggak sendirian. Banyak ibu rumah tangga yang mengalami hal yang sama tanpa
                    sadar kalau akar masalahnya bisa diperbaiki dengan satu langkah sederhana.
                </p>

                <h3>Surfaktan Keras yang Bekerja Terlalu Agresif</h3>
                <p>
                    Sebagian besar sabun cuci piring konvensional menggunakan surfaktan sintetis seperti SLS (Sodium
                    Lauryl Sulfate). Tugas SLS sederhana: mengangkat lemak dan kotoran. Tapi cara kerjanya terlalu
                    agresif — dia nggak cuma mengangkat lemak dari piring, tapi juga minyak alami yang melindungi
                    kulit tanganmu.
                </p>
                <p>
                    Minyak alami di kulit itu penting banget. Fungsinya menjaga kelembapan dan elastisitas kulit.
                    Kalau lapisan ini terus-terusan hilang setiap kali kamu cuci piring, wajar kalau tangan terasa
                    kering, kasar, dan ketarik.
                </p>

                {{-- Placeholder ilustrasi cara SLS menghilangkan minyak kulit --}}
                <div class="my-8 rounded-xl overflow-hidden bg-gray-50 border border-gray-100 not-prose">
                    <img src="{{ asset('images/artikel/artikel-4-inline.png') }}"
                         alt="Ilustrasi surfaktan SLS menyebabkan kulit tangan kering"
                         class="w-full object-cover rounded-xl"
                         onerror="this.closest('div').style.display='none'">
                </div>

                <h3>Kebiasaan Cuci Tanpa Pelindung</h3>
                <p>
                    Jujur aja — berapa sering sih kita benar-benar pakai sarung tangan saat cuci piring? Kebanyakan
                    dari kita langsung kontak dengan sabun tanpa pelindung, apalagi kalau sedang buru-buru.
                </p>
                <p>
                    Kebiasaan ini bikin kulit tangan terpapar bahan kimia secara langsung dan berulang. Lama-lama,
                    kulit kehilangan kemampuan alaminya untuk memulihkan diri. Hasilnya? Tangan yang makin kering
                    dari hari ke hari.
                </p>

                <h2>Dampak Jangka Panjang yang Sering Diabaikan</h2>
                <p>
                    Mungkin kamu berpikir, "Ah, cuma tangan kering aja kok." Tapi kalau dibiarkan terus tanpa
                    perubahan, efeknya bisa lebih dari sekadar kulit kering.
                </p>
                <p>
                    Kulit yang terus-menerus terpapar surfaktan keras bisa mengalami dermatitis kontak — kondisi
                    di mana kulit menjadi meradang, gatal, kemerahan, bahkan mengelupas. Ini bukan cerita
                    menakut-nakuti, tapi kenyataan yang banyak dialami orang tanpa sadar penyebabnya.
                </p>
                <p>
                    Belum lagi soal residu. Sabun yang sulit dibilas sempurna bisa meninggalkan jejak di piring
                    dan peralatan makan. Artinya, residu itu ikut kontak dengan makanan yang kamu sajikan untuk
                    keluarga setiap hari.
                </p>

                {{-- Placeholder infografis dampak jangka panjang --}}
                <div class="my-8 rounded-xl overflow-hidden bg-gray-50 border border-gray-100 not-prose">
                    <img src="{{ asset('images/artikel/artikel-4-dampak.png') }}"
                         alt="Infografis dampak jangka panjang sabun kimia pada kesehatan kulit"
                         class="w-full object-cover rounded-xl"
                         onerror="this.closest('div').style.display='none'">
                </div>

                <h2>Ciri Sabun Cuci Piring yang Lebih Lembut dan Aman</h2>
                <p>Kalau kamu sudah mulai merasa nggak nyaman dengan sabun yang sekarang, ini waktu yang tepat untuk mulai cari alternatif. Berikut cara membedakan sabun yang beneran lebih aman:</p>
                <ol>
                    <li><strong>Cek daftar komposisinya.</strong> Sabun yang lebih lembut biasanya menggunakan bahan alami seperti lerak, eco enzyme, atau surfaktan nabati yang bisa membersihkan tanpa mengikis minyak alami kulit.</li>
                    <li><strong>Perhatikan sensasi setelah pemakaian.</strong> Sabun yang aman nggak akan bikin tanganmu terasa ketarik atau kering. Justru setelah dibilas, kulit masih terasa normal dan nyaman.</li>
                    <li><strong>Cari yang mudah dibilas.</strong> Sabun yang baik nggak meninggalkan residu berlebihan di piring maupun di tangan.</li>
                    <li><strong>Pilih yang wanginya nggak menyengat.</strong> Wangi lembut dari bahan alami jauh lebih aman dibanding pewangi sintetis yang kuat dan berpotensi mengiritasi.</li>
                </ol>

                <h2>ECOPIL: Sabun yang Bersih Tanpa Bikin Tangan Kering</h2>
                <p>
                    Nah, kalau kamu lagi cari sabun cuci piring yang bisa menjawab semua kekhawatiran tadi, coba
                    kenalan sama ECOPIL.
                </p>
                <p>
                    ECOPIL adalah sabun cuci piring yang dibuat dari bahan alami — sabut pinang, lerak, dan eco
                    enzyme. Tanpa SLS, tanpa pewangi sintetis berlebihan. Formulanya dirancang supaya tetap efektif
                    mengangkat lemak dan kotoran, tapi lembut di kulit.
                </p>
                <p>
                    Banyak yang bilang, perbedaannya langsung terasa. Setelah cuci piring pakai ECOPIL, tangan
                    nggak lagi terasa ketarik atau kering. Rasanya lebih nyaman — seperti mencuci tanpa beban.
                </p>

                {{-- Placeholder foto produk ECOPIL --}}
                <div class="my-8 rounded-xl overflow-hidden bg-gray-50 border border-gray-100 not-prose">
                    <img src="{{ asset('images/artikel/artikel-4-produk.png') }}"
                         alt="Sabun cuci piring alami ECOPIL lembut di tangan"
                         class="w-full object-cover rounded-xl"
                         onerror="this.closest('div').style.display='none'">
                </div>

                <p>
                    ECOPIL tersedia dalam dua ukuran yang pas untuk kebutuhan rumah tangga: kemasan
                    <strong>250 ml seharga Rp 17.500</strong> dan kemasan <strong>500 ml seharga Rp 25.000</strong>.
                    Harga yang ramah untuk sabun yang ramah juga di kulit dan lingkungan.
                </p>
                <p>
                    Dan yang bikin tenang — karena bahannya alami dan biodegradable, limbahnya nggak mencemari air.
                    Jadi setiap kali kamu cuci piring pakai ECOPIL, kamu juga ikut menjaga lingkungan.
                </p>

                <h2>Kesimpulan</h2>
                <p>
                    Kulit tangan yang terasa ketarik setelah cuci piring itu bukan hal yang harus kamu terima
                    begitu saja. Itu sinyal dari tubuhmu bahwa ada yang perlu diganti.
                </p>
                <p>
                    Beralih ke sabun cuci piring alami bukan berarti ribet. Cukup ganti satu produk di dapur, dan
                    rasakan sendiri perbedaannya. Tangan lebih nyaman, piring tetap bersih, dan lingkungan ikut
                    terjaga.
                </p>
                <p>
                    Karena merawat keluarga itu dimulai dari hal-hal kecil. Termasuk dari sabun yang kamu pilih
                    di dapur.
                </p>

            @elseif ($article['slug'] === 'mitos-busa-sabun-cuci-piring-bersih')
            {{-- ══════════════════════════════════════════════════════════
                 ARTIKEL 5: Mitos Busa Sabun Cuci Piring
                 ══════════════════════════════════════════════════════════ --}}

                <h2>Dari Mana Mitos "Busa Banyak = Lebih Bersih" Berasal?</h2>
                <p>
                    Kita tumbuh dengan satu keyakinan yang nggak pernah dipertanyakan: kalau busanya banyak, berarti
                    sabunnya bagus. Kalau busanya sedikit, pasti kurang bersih. Familiar, kan?
                </p>
                <p>
                    Mitos ini sebenarnya terbentuk dari kebiasaan dan iklan selama puluhan tahun. Produsen sabun
                    konvensional memang sengaja membuat formula dengan busa melimpah karena secara psikologis, busa
                    memberikan "rasa puas" saat mencuci. Otak kita mengasosiasikan busa dengan proses pembersihan.
                </p>
                <p>Tapi apakah busa benar-benar menentukan kebersihan? Jawabannya mungkin mengejutkan kamu.</p>

                <h2>Fakta: Busa Bukan Penentu Kebersihan</h2>
                <h3>Apa Sebenarnya Fungsi Busa?</h3>
                <p>
                    Busa itu cuma efek samping dari reaksi antara surfaktan (zat pembersih dalam sabun) dengan air
                    dan udara. Busa sendiri nggak punya kemampuan membersihkan. Yang benar-benar bekerja mengangkat
                    lemak dan kotoran adalah surfaktan — bukan gelembung busanya.
                </p>
                <p>
                    Jadi, sabun yang menghasilkan sedikit busa bukan berarti nggak bisa membersihkan. Selama
                    surfaktan di dalamnya bekerja dengan baik, piring tetap bersih — dengan atau tanpa busa
                    yang berlebihan.
                </p>

                {{-- Placeholder infografis cara kerja surfaktan vs busa --}}
                <div class="my-8 rounded-xl overflow-hidden bg-gray-50 border border-gray-100 not-prose">
                    <img src="{{ asset('images/artikel/artikel-5-inline.png') }}"
                         alt="Infografis cara kerja surfaktan vs busa dalam membersihkan piring"
                         class="w-full object-cover rounded-xl"
                         onerror="this.closest('div').style.display='none'">
                </div>

                <h3>Bahan di Balik Busa Melimpah</h3>
                <p>
                    Busa yang melimpah biasanya berasal dari surfaktan sintetis seperti SLS (Sodium Lauryl Sulfate)
                    atau SLES (Sodium Laureth Sulfate). Bahan ini memang juara bikin busa. Tapi sayangnya, cara
                    kerjanya terlalu keras.
                </p>
                <p>
                    SLS nggak cuma mengangkat lemak dari piring — dia juga menghilangkan minyak alami di kulit
                    tanganmu. Itulah kenapa setelah cuci piring pakai sabun berbusa banyak, tangan sering terasa
                    kering dan ketarik.
                </p>
                <p>
                    Sementara itu, sabun berbahan alami menggunakan surfaktan nabati yang lebih lembut. Busanya
                    memang nggak sedramatis sabun kimia, tapi daya bersihnya tetap bisa diandalkan.
                </p>

                <h2>Dampak Tersembunyi dari Sabun yang Terlalu Banyak Busa</h2>
                <p>Selain bikin tangan kering, sabun dengan busa berlebihan punya beberapa dampak yang jarang dibicarakan:</p>
                <ol>
                    <li><strong>Lebih sulit dibilas.</strong> Sabun berbusa banyak butuh lebih banyak air untuk membilasnya sampai benar-benar bersih — artinya konsumsi air lebih boros setiap harinya.</li>
                    <li><strong>Residu lebih mudah tertinggal.</strong> Kalau pembilasan kurang sempurna, jejak sabun bisa tertinggal di permukaan piring dan bersentuhan dengan makanan yang kita sajikan untuk keluarga.</li>
                    <li><strong>Limbahnya lebih berat bagi lingkungan.</strong> Surfaktan sintetis yang menghasilkan busa melimpah lebih sulit terurai secara alami — butuh waktu lama untuk bisa diuraikan oleh alam.</li>
                </ol>

                {{-- Placeholder ilustrasi limbah sabun ke saluran air --}}
                <div class="my-8 rounded-xl overflow-hidden bg-gray-50 border border-gray-100 not-prose">
                    <img src="{{ asset('images/artikel/artikel-5-limbah.png') }}"
                         alt="Ilustrasi dampak lingkungan limbah sabun cuci piring berbusa banyak"
                         class="w-full object-cover rounded-xl"
                         onerror="this.closest('div').style.display='none'">
                </div>

                <h2>Sabun Sedikit Busa Tapi Tetap Bersih — Memang Ada?</h2>
                <p>
                    Ada, dan justru semakin banyak yang mulai beralih ke sana. Sabun cuci piring berbahan alami
                    memang menghasilkan busa yang lebih sedikit dibanding sabun konvensional. Tapi itu bukan
                    kelemahan — justru itu kelebihannya.
                </p>
                <p>
                    Kenapa? Karena busa yang sedikit artinya lebih mudah dibilas, lebih hemat air, dan nggak
                    meninggalkan residu berlebihan. Kulit tangan pun nggak terasa kering atau ketarik setelah
                    mencuci.
                </p>
                <p>
                    Sabun alami menggunakan surfaktan dari tumbuhan yang bekerja lebih gentle. Lemak tetap
                    terangkat, kotoran tetap hilang — tapi tanpa efek samping yang nggak perlu.
                </p>
                <p>
                    Jadi, lain kali kalau kamu lihat sabunmu nggak berbusa banyak, jangan buru-buru bilang kurang
                    bersih. Coba rasakan hasilnya di piring — dan di tanganmu.
                </p>

                <h2>ECOPIL: Bersih Tanpa Harus Berbusa Berlebihan</h2>
                <p>
                    ECOPIL adalah sabun cuci piring alami yang membuktikan bahwa bersih nggak harus pakai busa
                    berlimpah. Dibuat dari sabut pinang, lerak, dan eco enzyme, ECOPIL membersihkan dengan cara
                    yang lebih lembut — tapi tetap efektif.
                </p>
                <p>
                    Yang sering jadi feedback dari pengguna ECOPIL: tangannya nggak lagi kering setelah cuci piring,
                    bilasannya cepat bersih, dan pirnya tetap kinclong meski busanya nggak sedramatis sabun biasa.
                </p>

                {{-- Placeholder foto produk ECOPIL --}}
                <div class="my-8 rounded-xl overflow-hidden bg-gray-50 border border-gray-100 not-prose">
                    <img src="{{ asset('images/artikel/artikel-5-produk.png') }}"
                         alt="Sabun cuci piring alami ECOPIL bersih tanpa busa berlebihan"
                         class="w-full object-cover rounded-xl"
                         onerror="this.closest('div').style.display='none'">
                </div>

                <p>
                    ECOPIL tersedia dalam kemasan <strong>250 ml (Rp 17.500)</strong> dan
                    <strong>500 ml (Rp 25.000)</strong>. Harga yang wajar untuk sabun yang nggak cuma bersih, tapi
                    juga aman buat kulit dan lingkungan.
                </p>
                <p>
                    Karena ECOPIL berbahan alami dan biodegradable, limbahnya mudah terurai. Setiap kali kamu cuci
                    piring pakai ECOPIL, kamu juga ikut mengurangi beban lingkungan. Satu langkah kecil yang
                    dampaknya besar.
                </p>

                <h2>Kesimpulan</h2>
                <p>
                    Busa melimpah bukan tanda sabun yang lebih bersih. Itu cuma mitos yang sudah terlalu lama kita
                    percaya tanpa pernah dipertanyakan. Yang benar-benar menentukan kebersihan adalah surfaktan —
                    dan surfaktan nggak harus keras untuk bisa bekerja.
                </p>
                <p>
                    Sabun alami dengan busa yang lebih sedikit justru punya banyak kelebihan: lebih lembut di
                    tangan, lebih mudah dibilas, lebih hemat air, dan lebih ramah lingkungan.
                </p>
                <p>
                    Jadi, yuk mulai lepaskan mitos lama dan pilih sabun berdasarkan apa yang benar-benar penting —
                    kebersihan yang aman untuk keluarga dan bumi kita.
                </p>

            @endif

            {{-- ── CTA dalam artikel ── --}}
            <div class="mt-10 p-6 bg-gradient-to-r from-green-50 to-orange-50 rounded-xl
                        border border-green-100 text-center not-prose">
                <p class="text-gray-700 font-semibold mb-4">
                    Siap beralih ke sabun cuci piring yang lebih aman dan ramah lingkungan?
                </p>
                <a href="{{ url('/#produk') }}"
                   class="inline-block bg-[#FFA02E] hover:bg-[#e68a1a] text-white font-bold
                          py-3 px-8 rounded-xl transition duration-300 shadow-lg hover:shadow-xl
                          hover:-translate-y-1">
                    Pilih Varian ECOPIL Sekarang →
                </a>
            </div>

        </div>
    </article>

    {{-- ── Artikel Lainnya ── --}}
    <section class="max-w-4xl mx-auto px-6 pb-20">
        <h2 class="text-2xl font-bold text-gray-900 mb-8">Artikel Lainnya</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            @foreach ($otherArticles as $other)
                <a href="{{ route('artikel.show', $other['slug']) }}"
                   class="group flex gap-4 bg-white rounded-xl p-4 border border-gray-100
                          shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-200">
                    <div class="w-20 h-20 flex-shrink-0 rounded-lg overflow-hidden bg-gray-100">
                        <img src="{{ asset($other['image']) }}"
                             alt="{{ $other['alt'] }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                             onerror="this.style.display='none'">
                    </div>
                    <div class="flex flex-col justify-center">
                        <span class="text-[#2e7d32] text-xs font-semibold uppercase tracking-wide mb-1">
                            {{ $other['label'] }}
                        </span>
                        <p class="text-gray-800 font-semibold text-sm leading-snug
                                  group-hover:text-[#2e7d32] transition-colors line-clamp-2">
                            {{ $other['title'] }}
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

</main>

@endsection
