{{-- =====================================================
HALAMAN DETAIL ARTIKEL - ECOPIL
resources/views/artikel/show.blade.php
VERSI BARU: Full redesign, no prose plugin, responsive
===================================================== --}}

@extends('layouts.app')

@section('title', $article['title'] . ' | ECOPIL – Sabun Cuci Piring Alami')
@section('description', $article['description'])
@section('keywords', $article['keywords'])
@section('og_title', $article['title'])
@section('og_description', $article['description'])
@section('og_image', asset($article['image']))

@section('content')

    {{-- Reading Progress Bar --}}
    <div id="reading-progress" class="fixed top-0 left-0 h-1 bg-[#2e7d32] z-[999] transition-none" style="width:0%"></div>

    <div class="bg-gray-50 min-h-screen">

        {{-- ══════════════════════════════════════
        HERO HEADER
        ══════════════════════════════════════ --}}
        <header class="bg-white border-b border-gray-100">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 pt-8 pb-10">

                {{-- Breadcrumb --}}
                <nav aria-label="Breadcrumb" class="flex items-center flex-wrap gap-1.5 text-xs text-gray-400 mb-6">
                    <a href="{{ url('/') }}" class="hover:text-[#2e7d32] transition-colors flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Beranda
                    </a>
                    <svg class="w-3 h-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    <a href="{{ route('artikel.index') }}" class="hover:text-[#2e7d32] transition-colors">Artikel</a>
                    <svg class="w-3 h-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    <span class="text-gray-600 line-clamp-1 max-w-[200px] sm:max-w-xs">{{ $article['title'] }}</span>
                </nav>

                {{-- Badge + Title --}}
                <div class="max-w-3xl">
                    <span class="inline-flex items-center gap-1.5 bg-green-50 text-[#2e7d32] text-xs font-bold
                                 uppercase tracking-widest px-3 py-1.5 rounded-full mb-4 border border-green-100">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#2e7d32] inline-block"></span>
                        {{ $article['label'] }}
                    </span>

                    <h1
                        class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight mb-4 tracking-tight">
                        {{ $article['title'] }}
                    </h1>

                    {{-- Meta row --}}
                    <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-sm text-gray-500">
                        <div class="flex items-center gap-2">
                            <div
                                class="w-7 h-7 bg-[#2e7d32] rounded-full flex items-center justify-center text-white font-bold text-xs shrink-0">
                                E
                            </div>
                            <span>Tim <strong class="text-gray-700 font-semibold">ECOPIL</strong></span>
                        </div>
                        <span class="text-gray-200 hidden sm:inline">|</span>
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                            <span>{{ $article['label'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        {{-- ══════════════════════════════════════
        FEATURED IMAGE
        ══════════════════════════════════════ --}}
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-6">
            <div class="relative rounded-2xl overflow-hidden shadow-lg bg-gray-100" style="aspect-ratio:16/7;">
                <img src="{{ asset($article['image']) }}" alt="{{ $article['alt'] }}" class="w-full h-full object-cover"
                    onerror="this.closest('div').style.display='none'">
                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent pointer-events-none"></div>
            </div>
        </div>

        {{-- ══════════════════════════════════════
        MAIN LAYOUT: ARTIKEL + SIDEBAR
        ══════════════════════════════════════ --}}
        <div class="max-w-6xl mx-auto px-4 sm:px-6 pb-16">
            <div class="flex flex-col lg:flex-row gap-8 items-start">

                {{-- ─────────────────────────────
                ARTIKEL UTAMA (kiri)
                ───────────────────────────── --}}
                <article id="article-content" class="w-full lg:w-[65%] min-w-0">
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="p-6 sm:p-8 md:p-10 article-body">

                            {{-- ════════ ARTIKEL 1 ════════ --}}
                            @if ($article['slug'] === 'cara-memilih-sabun-cuci-piring-aman-kulit-sensitif')

                                <h2>Kenapa Sabun Cuci Piring yang Kamu Pakai Itu Penting?</h2>
                                <p>Pernah nggak sih, habis cuci piring tangan langsung terasa kering dan kasar? Atau mungkin
                                    kamu mulai kepikiran sebenarnya sabun yang kita pakai setiap hari itu aman nggak ya buat
                                    kulit sensitif dan lingkungan?</p>
                                <p>Pertanyaan sederhana ini ternyata punya jawaban yang cukup penting. Sabun cuci piring bukan
                                    cuma soal bersih atau nggak. Ini soal apa yang bersentuhan langsung dengan kulit tangan kita
                                    setiap hari dan soal limbah yang mengalir ke lingkungan setelahnya.</p>
                                <p>Buat kamu yang peduli sama kesehatan keluarga dan mulai peduli soal gaya hidup ramah
                                    lingkungan, memilih sabun cuci piring yang tepat adalah langkah kecil yang dampaknya besar.
                                </p>

                                <div class="callout callout-warning">
                                    <span class="callout-icon">⚠️</span>
                                    <div>
                                        <p class="callout-title">Tahukah Kamu?</p>
                                        <p>Rata-rata ibu rumah tangga mencuci piring 2–3 kali sehari. Artinya kulit tangan
                                            terpapar sabun lebih dari 700 kali dalam setahun.</p>
                                    </div>
                                </div>

                                <h2>Bahaya Tersembunyi di Balik Sabun Cuci Piring Biasa</h2>
                                <p>Banyak sabun cuci piring konvensional mengandung bahan seperti <strong>Sodium Lauryl Sulfate
                                        (SLS)</strong>, paraben, dan pewangi sintetis. Bahan-bahan ini memang bikin busa
                                    melimpah dan wangi kuat. Tapi efek sampingnya bisa terasa di kulit terutama kalau kamu punya
                                    kulit sensitif dan mencuci tanpa sarung tangan.</p>
                                <p>SLS misalnya, dikenal bisa menghilangkan minyak alami di kulit. Akibatnya? Tangan jadi
                                    kering, pecah-pecah, dan kadang terasa perih. Kalau dibiarkan terus-menerus, ini bisa jadi
                                    masalah kulit yang lebih serius.</p>

                                <h2>Dampaknya ke Lingkungan</h2>
                                <p>Limbah sabun yang mengandung bahan kimia keras nggak langsung hilang begitu saja. Zat-zat ini
                                    mengalir ke saluran air, dan sebagian besar sulit terurai secara alami. Dalam jangka
                                    panjang, ini bisa mencemari sumber air dan mengganggu ekosistem di sekitar kita.</p>

                                <h2>Tips Memilih Sabun Cuci Piring yang Aman</h2>
                                <p>Kalau kamu sudah mulai sadar pentingnya memilih sabun cuci piring yang aman untuk kulit
                                    sensitif, berikut beberapa tips yang bisa jadi panduan:</p>
                                <ol>
                                    <li>
                                        <div>
                                            <p class="num-title">Cek komposisinya.</p>
                                            <p class="num-desc">Pilih sabun yang menggunakan bahan alami dan biodegradable
                                                artinya bisa terurai dengan mudah di alam. Bahan seperti lerak, eco enzyme, atau
                                                sabut pinang adalah contoh bahan alami yang sudah terbukti efektif.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p class="num-title">Hindari pewarna dan pewangi sintetis berlebihan.</p>
                                            <p class="num-desc">Wangi yang menyengat bukan tanda bersih justru sering jadi
                                                pemicu iritasi pada kulit sensitif.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p class="num-title">Pilih brand yang transparan soal kandungannya.</p>
                                            <p class="num-desc">Brand yang bertanggung jawab nggak akan sembunyi-sembunyi soal
                                                apa yang ada di dalam botolnya.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p class="num-title">Perhatikan kemasannya.</p>
                                            <p class="num-desc">Produk eco-friendly biasanya juga peduli soal kemasan yang
                                                minimalis dan ramah lingkungan.</p>
                                        </div>
                                    </li>
                                </ol>

                                <div class="inline-img">
                                    <img src="{{ asset('images/artikel/artikel-1-inline.png') }}"
                                        alt="Tips memilih sabun cuci piring aman untuk keluarga dan lingkungan" loading="lazy"
                                        onerror="this.closest('div').style.display='none'">
                                </div>

                                <h2>ECOPIL: Pilihan Aman dan Ramah Lingkungan</h2>
                                <p>Kalau kamu cari sabun cuci piring terbaik yang beneran aman untuk kulit sensitif dan nyaman
                                    dipakai sehari-hari, <strong>ECOPIL</strong> bisa jadi jawabannya.</p>
                                <p>ECOPIL dibuat dari bahan alami seperti <strong>sabut pinang, lerak, dan eco enzyme</strong>.
                                    Tanpa SLS. Tanpa bahan kimia keras yang bisa memperparah kulit sensitif. Jadi nggak cuma
                                    bersih, tapi juga lembut di tangan.</p>

                                <h2>Kesimpulan</h2>
                                <p>Memilih sabun cuci piring bukan hal sepele terutama kalau kamu punya kulit sensitif. Ini
                                    tentang melindungi kulit tangan kamu, menjaga kesehatan keluarga, dan mengurangi dampak
                                    negatif ke lingkungan.</p>
                                <p>Karena hal besar selalu dimulai dari langkah kecil. Dan langkah kecil itu bisa dimulai dari
                                    tempat yang paling dekat dapur rumahmu.</p>

                                {{-- ════════ ARTIKEL 2 ════════ --}}
                            @elseif ($article['slug'] === 'bahaya-sabun-cuci-piring-kimia-vs-alami-untuk-keluarga')

                                <div class="inline-img">
                                    <img src="{{ asset('images/artikel/artikel-2-inline.png') }}"
                                        alt="Perbandingan sabun cuci piring alami dan kimia" loading="lazy"
                                        onerror="this.closest('div').style.display='none'">
                                </div>

                                <h2>Sehari-hari Kita Pakai, Tapi Jarang Diperhatikan</h2>
                                <p>Mencuci piring itu aktivitas yang hampir nggak pernah kita pikirkan dua kali. Tinggal pencet
                                    sabun, gosok, bilas selesai. Tapi pernah nggak kepikiran, sabun yang kita pakai setiap hari
                                    itu terbuat dari apa?</p>
                                <p>Di pasaran ada dua jenis utama: sabun cuci piring berbahan kimia sintetis dan sabun berbahan
                                    alami. Keduanya sama-sama bisa membersihkan. Tapi dari segi keamanan, kenyamanan, dan dampak
                                    lingkungan ada perbedaan besar yang perlu kamu tahu.</p>

                                <h2>Bahan Kimia Berbahaya dalam Sabun Cuci Piring</h2>
                                <h3>Sabun Berbahan Kimia Sintetis</h3>
                                <p>Sabun cuci piring konvensional umumnya menggunakan surfaktan sintetis seperti <strong>SLS
                                        (Sodium Lauryl Sulfate)</strong>, ditambah pewangi buatan dan pewarna. Formula ini
                                    memang bikin busa banyak dan daya potong lemak terasa cepat.</p>
                                <p>Tapi di balik busa yang melimpah, ada bahaya yang sering dilupakan. SLS bisa menghilangkan
                                    minyak alami di kulit tangan, bikin kering, dan kadang menyebabkan iritasi terutama kalau
                                    kamu mencuci berkali-kali dalam sehari.</p>

                                <h3>Sabun Berbahan Alami: Alternatif yang Lebih Aman</h3>
                                <p>Sabun cuci piring alami menggunakan bahan dari alam seperti <strong>lerak, sabut pinang, eco
                                        enzyme</strong>, atau minyak kelapa. Bahan-bahan ini punya sifat pembersih alami yang
                                    sudah dipakai sejak lama.</p>
                                <p>Busanya memang nggak sebanyak sabun kimia. Tapi busa sedikit bukan berarti kurang bersih.
                                    Sabun alami modern sudah diformulasikan agar tetap efektif mengangkat lemak tanpa harus
                                    keras di kulit.</p>

                                <h2>Sabun Alami vs Kimia: Perbandingan dari 4 Sisi Penting</h2>

                                <div class="comparison-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Aspek</th>
                                                <th class="th-green">🌿 Sabun Alami</th>
                                                <th class="th-red">⚗️ Sabun Kimia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="td-label">Keamanan Kulit</td>
                                                <td class="td-good">✅ Lembut, tidak iritasi</td>
                                                <td class="td-bad">❌ Bisa keringkan kulit</td>
                                            </tr>
                                            <tr>
                                                <td class="td-label">Efektivitas</td>
                                                <td class="td-good">✅ Efektif angkat lemak</td>
                                                <td class="td-good">✅ Sangat efektif</td>
                                            </tr>
                                            <tr>
                                                <td class="td-label">Lingkungan</td>
                                                <td class="td-good">✅ Biodegradable</td>
                                                <td class="td-bad">❌ Sulit terurai</td>
                                            </tr>
                                            <tr>
                                                <td class="td-label">Harga</td>
                                                <td class="td-mid">🟡 Sedikit lebih mahal</td>
                                                <td class="td-good">✅ Lebih murah</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <h2>Kenapa Keluarga Modern Mulai Beralih?</h2>
                                <p>Tren ini bukan sekadar ikut-ikutan. Makin banyak keluarga yang sadar bahwa produk rumah
                                    tangga yang mereka gunakan setiap hari punya dampak langsung ke kulit, ke anak-anak yang
                                    makan dari piring itu, dan ke air yang mengalir kembali ke alam.</p>
                                <p>Mereka mulai baca label, mulai cari tahu, dan mulai memilih produk yang nggak cuma bersih,
                                    tapi juga aman.</p>

                                <h2>ECOPIL: Sabun Ramah Lingkungan untuk Keluargamu</h2>
                                <p>ECOPIL adalah sabun cuci piring alami yang dibuat dari <strong>sabut pinang, lerak, dan eco
                                        enzyme</strong>. Tanpa SLS, tanpa pewangi sintetis berlebihan. Lembut di tangan, efektif
                                    membersihkan, dan ramah untuk lingkungan.</p>

                                <div class="inline-img">
                                    <img src="{{ asset('images/artikel/artikel-2-produk.png') }}"
                                        alt="Produk sabun cuci piring alami ECOPIL 250ml dan 500ml" loading="lazy"
                                        onerror="this.closest('div').style.display='none'">
                                </div>

                                <h2>Kesimpulan</h2>
                                <p>Sabun alami dan kimia memang punya kelebihan masing-masing. Tapi kalau kamu mengutamakan
                                    keamanan kulit, kesehatan keluarga, dan kepedulian terhadap lingkungan sabun alami adalah
                                    pilihan yang lebih bijak.</p>
                                <p>Dan perubahannya nggak harus besar. Cukup ganti satu produk di dapur. Satu langkah kecil yang
                                    berdampak besar.</p>

                                {{-- ════════ ARTIKEL 3 ════════ --}}
                            @elseif ($article['slug'] === 'ciri-ciri-sabun-cuci-piring-baik-tanda-tidak-aman')

                                <h2>Hal Kecil yang Sering Diabaikan di Dapur</h2>
                                <p>Setiap hari kita mencuci piring. Kadang dua kali, kadang tiga kali. Rasanya jadi rutinitas
                                    yang nggak pernah dipertanyakan. Tapi pernahkah kamu berhenti sejenak dan memperhatikan apa
                                    yang terjadi pada tangan kamu setelah mencuci?</p>
                                <p>Kalau jawabannya tangan terasa kering, kasar, atau bahkan perih itu bukan hal normal. Itu
                                    bisa jadi sinyal bahwa sabun cuci piring yang kamu pakai ternyata nggak seaman yang kamu
                                    kira.</p>

                                <div class="callout callout-danger">
                                    <span class="callout-icon">🚨</span>
                                    <div>
                                        <p class="callout-title">Perhatian!</p>
                                        <p>Tangan kering, perih, atau kulit mengelupas setelah cuci piring bukan hal normal. Itu
                                            bisa jadi tanda awal iritasi atau dermatitis kontak akibat bahan kimia keras.</p>
                                    </div>
                                </div>

                                <h2>Lima Tanda Sabun Cuci Piringmu Tidak Aman</h2>

                                <div class="numbered-list">
                                    <div class="numbered-item">
                                        <div class="num-badge" style="background:#fee2e2;color:#dc2626">1</div>
                                        <div>
                                            <p class="num-title">Tangan Kering &amp; Kasar Setelah Mencuci</p>
                                            <p class="num-desc">Tanda paling umum. Kemungkinan sabun kamu mengandung SLS yang
                                                menghilangkan minyak alami kulit.</p>
                                        </div>
                                    </div>
                                    <div class="numbered-item">
                                        <div class="num-badge" style="background:#ffedd5;color:#ea580c">2</div>
                                        <div>
                                            <p class="num-title">Kulit Mengelupas atau Pecah-Pecah</p>
                                            <p class="num-desc">Dampak negatif paparan bahan kimia berlebih, terutama jika
                                                mencuci 3+ kali sehari tanpa sarung tangan.</p>
                                        </div>
                                    </div>
                                    <div class="numbered-item">
                                        <div class="num-badge" style="background:#fef9c3;color:#ca8a04">3</div>
                                        <div>
                                            <p class="num-title">Muncul Rasa Gatal atau Kemerahan</p>
                                            <p class="num-desc">Pewangi dan pewarna sintetis bisa memicu reaksi alergi pada
                                                kulit sensitif.</p>
                                        </div>
                                    </div>
                                    <div class="numbered-item">
                                        <div class="num-badge" style="background:#f3e8ff;color:#9333ea">4</div>
                                        <div>
                                            <p class="num-title">Wangi Sabun Terlalu Menyengat</p>
                                            <p class="num-desc">Wangi kuat biasanya dari pewangi sintetis konsentrasi tinggi
                                                yang berpotensi mengiritasi dan sulit terurai di lingkungan.</p>
                                        </div>
                                    </div>
                                    <div class="numbered-item">
                                        <div class="num-badge" style="background:#dbeafe;color:#2563eb">5</div>
                                        <div>
                                            <p class="num-title">Residu Sabun Sulit Dibilas</p>
                                            <p class="num-desc">Residu yang tertinggal di piring bisa bersentuhan dengan makanan
                                                keluargamu setiap hari.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="inline-img">
                                    <img src="{{ asset('images/artikel/artikel-3-inline.png') }}"
                                        alt="Infografis 5 tanda sabun cuci piring tidak aman untuk kulit" loading="lazy"
                                        onerror="this.closest('div').style.display='none'">
                                </div>

                                <h2>Panduan Beralih ke Sabun yang Lebih Aman</h2>
                                <p>Kabar baiknya, beralih ke sabun yang lebih aman itu nggak ribet. Ini ciri-ciri sabun cuci
                                    piring yang baik yang bisa kamu jadikan panduan:</p>
                                <ol>
                                    <li>
                                        <div>
                                            <p class="num-title">Komposisinya jelas.</p>
                                            <p class="num-desc">Cek label. Sabun yang aman biasanya bebas dari SLS, paraben, dan
                                                pewangi sintetis berlebihan.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p class="num-title">Mudah dibilas.</p>
                                            <p class="num-desc">Sabun yang baik nggak meninggalkan residu berlebihan di piring
                                                maupun di tangan.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p class="num-title">Brand-nya transparan.</p>
                                            <p class="num-desc">Brand yang peduli lingkungan biasanya juga peduli sama
                                                konsumennya.</p>
                                        </div>
                                    </li>
                                </ol>

                                <h2>ECOPIL: Sabun yang Tidak Merusak Tangan</h2>
                                <p>ECOPIL hadir untuk kamu yang ingin beralih ke sabun cuci piring yang aman tanpa ribet. Dibuat
                                    dari bahan alami <strong>sabut pinang, lerak, dan eco enzyme</strong> ECOPIL lembut di
                                    tangan tapi tetap efektif membersihkan.</p>
                                <p>Nggak ada SLS. Nggak ada pewangi sintetis berlebihan. Yang ada cuma sabun yang bersih, aman,
                                    dan nyaman dipakai setiap hari.</p>

                                <h2>Kesimpulan</h2>
                                <p>Tangan kering setelah cuci piring bukan hal yang harus diterima begitu saja. Itu sinyal bahwa
                                    ada yang perlu diganti. Kenali ciri-ciri sabun cuci piring yang baik, waspadai efek
                                    sampingnya, dan ambil langkah kecil untuk berubah.</p>
                                <p>Karena keluarga kamu layak mendapat yang terbaik. Termasuk dari hal sesederhana sabun cuci
                                    piring.</p>

                                {{-- ════════ ARTIKEL 4 ════════ --}}
                            @elseif ($article['slug'] === 'tangan-kering-karena-sabun-cuci-piring-solusi-alami')

                                <h2>Kenapa Tangan Terasa Kering atau Ketarik Setelah Cuci Piring?</h2>
                                <p>Kamu pasti pernah merasakannya. Baru selesai cuci piring, tangan langsung terasa kering,
                                    kencang, dan kayak ketarik. Kadang sampai perlu langsung pakai hand cream supaya nggak makin
                                    kering.</p>
                                <p>Rasa ketarik itu bukan hal normal. Itu sinyal dari kulitmu bahwa ada sesuatu yang terlalu
                                    keras dan biasanya penyebab utamanya ada di sabun yang kamu pakai setiap hari.</p>

                                <h3>Surfaktan Keras yang Bekerja Terlalu Agresif</h3>
                                <p>Sebagian besar sabun cuci piring konvensional menggunakan surfaktan sintetis seperti
                                    <strong>SLS (Sodium Lauryl Sulfate)</strong>. Tugas SLS sederhana: mengangkat lemak dan
                                    kotoran. Tapi cara kerjanya terlalu agresif dia nggak cuma mengangkat lemak dari piring,
                                    tapi juga minyak alami yang melindungi kulit tanganmu.</p>
                                <p>Minyak alami di kulit itu penting banget. Fungsinya menjaga kelembapan dan elastisitas kulit.
                                    Kalau lapisan ini terus-terusan hilang setiap kali kamu cuci piring, wajar kalau tangan
                                    terasa kering, kasar, dan ketarik bahkan bisa menyebabkan tangan mengelupas.</p>

                                <div class="inline-img">
                                    <img src="{{ asset('images/artikel/artikel-4-inline.png') }}"
                                        alt="Ilustrasi surfaktan SLS menyebabkan kulit tangan kering" loading="lazy"
                                        onerror="this.closest('div').style.display='none'">
                                </div>

                                <h3>Kebiasaan Cuci Tanpa Pelindung</h3>
                                <p>Berapa sering kita benar-benar pakai sarung tangan saat cuci piring? Kebanyakan dari kita
                                    langsung kontak dengan sabun tanpa pelindung. Kebiasaan ini bikin kulit tangan terpapar
                                    bahan kimia secara langsung dan berulang. Lama-lama, kulit kehilangan kemampuan alaminya
                                    untuk memulihkan diri.</p>

                                <h2>Dampak Jangka Panjang yang Sering Diabaikan</h2>
                                <p>Mungkin kamu berpikir, "Ah, cuma tangan kering aja kok." Tapi kalau dibiarkan terus tanpa
                                    perubahan, efeknya bisa lebih dari sekadar kulit kering.</p>
                                <p>Tangan perih dan mengelupas setelah cuci piring adalah tanda-tanda awal <strong>dermatitis
                                        kontak</strong> kondisi di mana kulit menjadi meradang, gatal, kemerahan, bahkan
                                    mengelupas. Ini adalah dampak nyata dari penggunaan sabun cuci piring yang terlalu keras.
                                </p>

                                <div class="inline-img">
                                    <img src="{{ asset('images/artikel/artikel-4-dampak.png') }}"
                                        alt="Infografis dampak jangka panjang sabun kimia pada kesehatan kulit" loading="lazy"
                                        onerror="this.closest('div').style.display='none'">
                                </div>

                                <h2>Cara Mengatasi Tangan Kering Setelah Mencuci Piring</h2>
                                <p>Kalau kamu sudah mulai merasa nggak nyaman dengan sabun yang sekarang, ini waktu yang tepat
                                    untuk mulai cari alternatif:</p>
                                <ol>
                                    <li>
                                        <div>
                                            <p class="num-title">Ganti ke sabun cuci piring untuk tangan sensitif.</p>
                                            <p class="num-desc">Sabun yang aman biasanya menggunakan bahan alami seperti lerak,
                                                eco enzyme, atau surfaktan nabati.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p class="num-title">Perhatikan sensasi setelah pemakaian.</p>
                                            <p class="num-desc">Sabun yang aman nggak akan bikin tanganmu terasa ketarik atau
                                                kering setelah dibilas.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p class="num-title">Cari yang mudah dibilas.</p>
                                            <p class="num-desc">Sabun yang baik nggak meninggalkan residu berlebihan di piring
                                                maupun di tangan.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p class="num-title">Pilih yang wanginya nggak menyengat.</p>
                                            <p class="num-desc">Wangi lembut dari bahan alami jauh lebih aman dibanding pewangi
                                                sintetis yang kuat.</p>
                                        </div>
                                    </li>
                                </ol>

                                <h2>ECOPIL: Sabun untuk Tangan Sensitif</h2>
                                <p>ECOPIL dibuat dari bahan alami <strong>sabut pinang, lerak, dan eco enzyme</strong>. Tanpa
                                    SLS, tanpa pewangi sintetis berlebihan. Formulanya dirancang supaya tetap efektif mengangkat
                                    lemak dan kotoran, tapi lembut di kulit tangan sensitif.</p>

                                <div class="inline-img">
                                    <img src="{{ asset('images/artikel/artikel-4-produk.png') }}"
                                        alt="Sabun cuci piring alami ECOPIL lembut di tangan" loading="lazy"
                                        onerror="this.closest('div').style.display='none'">
                                </div>

                                <p>ECOPIL tersedia dalam kemasan <strong>250 ml (Rp 18.000)</strong> dan <strong>500 ml (Rp
                                        29.000)</strong>. Harga yang ramah untuk sabun yang ramah juga di kulit dan lingkungan.
                                </p>

                                <h2>Kesimpulan</h2>
                                <p>Kulit tangan yang terasa ketarik setelah cuci piring itu bukan hal yang harus kamu terima
                                    begitu saja. Itu sinyal dari tubuhmu bahwa ada yang perlu diganti.</p>
                                <p>Beralih ke sabun cuci piring alami bukan berarti ribet. Cukup ganti satu produk di dapur, dan
                                    rasakan sendiri perbedaannya. Tangan lebih nyaman, piring tetap bersih, dan lingkungan ikut
                                    terjaga.</p>

                                {{-- ════════ ARTIKEL 5 ════════ --}}
                            @elseif ($article['slug'] === 'sabun-cuci-piring-tanpa-busa-mitos-busa-melimpah')

                                <h2>Mitos Sabun Cuci Piring: Benarkah Busa Melimpah Bikin Piring Lebih Bersih?</h2>
                                <p>Kita tumbuh dengan satu keyakinan yang nggak pernah dipertanyakan: kalau busanya banyak,
                                    berarti sabunnya bagus. Mitos ini sebenarnya terbentuk dari kebiasaan dan iklan selama
                                    puluhan tahun.</p>
                                <p>Tapi apakah busa benar-benar menentukan kebersihan? Jawabannya mungkin mengejutkan kamu.</p>

                                <div class="callout callout-info">
                                    <span class="callout-icon">💡</span>
                                    <div>
                                        <p class="callout-title">Fakta Menarik</p>
                                        <p>Busa adalah efek samping reaksi kimia, bukan agen pembersih. Yang benar-benar
                                            mengangkat lemak adalah surfaktan bukan gelembung busanya.</p>
                                    </div>
                                </div>

                                <h2>Apakah Busa Sabun Menentukan Kebersihan? Ini Faktanya</h2>
                                <h3>Apa Sebenarnya Fungsi Busa?</h3>
                                <p>Busa itu cuma efek samping dari reaksi antara surfaktan dengan air dan udara. Busa sendiri
                                    nggak punya kemampuan membersihkan. Yang benar-benar bekerja mengangkat lemak adalah
                                    surfaktan bukan gelembung busanya.</p>

                                <h3>Bahan di Balik Busa Melimpah</h3>
                                <p>Busa yang melimpah biasanya berasal dari surfaktan sintetis seperti <strong>SLS atau
                                        SLES</strong>. Bahan ini memang juara bikin busa. Tapi cara kerjanya terlalu keras nggak
                                    cuma mengangkat lemak dari piring, dia juga menghilangkan minyak alami di kulit tanganmu.
                                </p>

                                <div class="inline-img">
                                    <img src="{{ asset('images/artikel/artikel-5-inline.png') }}"
                                        alt="Infografis cara kerja surfaktan vs busa dalam membersihkan piring" loading="lazy"
                                        onerror="this.closest('div').style.display='none'">
                                </div>

                                <h2>Dampak Tersembunyi dari Sabun Terlalu Banyak Busa</h2>
                                <ol>
                                    <li>
                                        <div>
                                            <p class="num-title">Lebih sulit dibilas.</p>
                                            <p class="num-desc">Sabun berbusa banyak butuh lebih banyak air untuk membilasnya
                                                sampai benar-benar bersih artinya konsumsi air lebih boros.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p class="num-title">Residu lebih mudah tertinggal.</p>
                                            <p class="num-desc">Kalau pembilasan kurang sempurna, jejak sabun bisa tertinggal di
                                                permukaan piring dan bersentuhan dengan makanan.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p class="num-title">Limbahnya lebih berat bagi lingkungan.</p>
                                            <p class="num-desc">Surfaktan sintetis yang menghasilkan busa melimpah lebih sulit
                                                terurai secara alami.</p>
                                        </div>
                                    </li>
                                </ol>

                                <div class="inline-img">
                                    <img src="{{ asset('images/artikel/artikel-5-limbah.png') }}"
                                        alt="Ilustrasi dampak lingkungan limbah sabun cuci piring berbusa banyak" loading="lazy"
                                        onerror="this.closest('div').style.display='none'">
                                </div>

                                <h2>Sabun Sedikit Busa Tapi Tetap Bersih Memang Ada?</h2>
                                <p>Ada, dan justru semakin banyak yang mulai beralih ke sana. Sabun cuci piring berbahan alami
                                    memang menghasilkan busa yang lebih sedikit dibanding sabun konvensional. Tapi itu bukan
                                    kelemahan justru itu kelebihannya.</p>
                                <p>Busa yang sedikit artinya lebih mudah dibilas, lebih hemat air, dan nggak meninggalkan residu
                                    berlebihan. Kulit tangan pun nggak terasa kering atau ketarik setelah mencuci.</p>

                                <h2>ECOPIL: Bersih Tanpa Harus Berbusa Berlebihan</h2>
                                <p>ECOPIL adalah sabun cuci piring alami yang membuktikan bahwa bersih nggak harus pakai busa
                                    berlimpah. Dibuat dari <strong>sabut pinang, lerak, dan eco enzyme</strong>, ECOPIL
                                    membersihkan dengan cara yang lebih lembut tapi tetap efektif.</p>

                                <div class="inline-img">
                                    <img src="{{ asset('images/artikel/artikel-5-produk.png') }}"
                                        alt="Sabun cuci piring alami ECOPIL bersih tanpa busa berlebihan" loading="lazy"
                                        onerror="this.closest('div').style.display='none'">
                                </div>

                                <p>ECOPIL tersedia dalam kemasan <strong>250 ml (Rp 18.000)</strong> dan <strong>500 ml (Rp
                                        29.000)</strong>. Harga yang wajar untuk sabun yang nggak cuma bersih, tapi juga aman
                                    buat kulit dan lingkungan.</p>

                                <h2>Kesimpulan</h2>
                                <p>Busa melimpah bukan tanda sabun yang lebih bersih. Itu cuma mitos yang sudah terlalu lama
                                    kita percaya tanpa pernah dipertanyakan. Yang benar-benar menentukan kebersihan adalah
                                    surfaktan dan surfaktan nggak harus keras untuk bisa bekerja.</p>
                                <p>Yuk mulai lepaskan mitos lama dan pilih sabun berdasarkan apa yang benar-benar penting
                                    kebersihan yang aman untuk keluarga dan bumi kita.</p>

                            @endif

                            {{-- ─── CTA dalam artikel ─── --}}
                            <div class="article-cta">
                                <div class="cta-icon">🌿</div>
                                <h3>Siap Beralih ke Sabun yang Lebih Aman?</h3>
                                <p>ECOPIL formula alami untuk keluarga dan lingkungan yang lebih sehat.</p>
                                <div class="cta-buttons">

                                </div>
                            </div>

                        </div>{{-- end article-body --}}
                    </div>
                </article>

                {{-- ─────────────────────────────
                SIDEBAR (kanan)
                ───────────────────────────── --}}
                <aside class="w-full lg:w-[35%] flex flex-col gap-5 lg:sticky lg:top-24 self-start">

                    {{-- Kartu Produk --}}
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4">Produk ECOPIL</p>
                        <div class="space-y-3">
                            <a href="https://wa.me/6287743198186?text=Halo%2C+saya+ingin+memesan+ECOPIL+250ml"
                                target="_blank" rel="noopener noreferrer" class="flex items-center gap-4 p-3 rounded-xl border border-gray-100 hover:border-[#2e7d32]
                                      hover:bg-green-50 transition-all duration-200 group">
                                <div
                                    class="w-14 h-14 bg-green-50 rounded-xl flex items-center justify-center shrink-0 overflow-hidden">
                                    <img src="{{ asset('images/250ml.png') }}" alt="ECOPIL 250ml"
                                        class="w-12 h-12 object-contain">
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900 text-sm group-hover:text-[#2e7d32] transition-colors">
                                        ECOPIL 250ml</p>
                                    <p class="text-[#2e7d32] font-extrabold text-sm">Rp 18.000</p>
                                    <span class="inline-block mt-1.5 bg-[#2e7d32] hover:bg-[#1b5e20] text-white text-xs font-bold py-1.5 px-4 rounded-lg transition-colors duration-200">Pesan Sekarang</span>
                                </div>
                            </a>
                            <a href="https://wa.me/6287743198186?text=Halo%2C+saya+ingin+memesan+ECOPIL+500ml"
                                target="_blank" rel="noopener noreferrer" class="flex items-center gap-4 p-3 rounded-xl border border-gray-100 hover:border-[#2e7d32]
                                      hover:bg-green-50 transition-all duration-200 group">
                                <div
                                    class="w-14 h-14 bg-green-50 rounded-xl flex items-center justify-center shrink-0 overflow-hidden">
                                    <img src="{{ asset('images/500ml.png') }}" alt="ECOPIL 500ml"
                                        class="w-12 h-12 object-contain">
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900 text-sm group-hover:text-[#2e7d32] transition-colors">
                                        ECOPIL 500ml</p>
                                    <p class="text-[#2e7d32] font-extrabold text-sm">Rp 29.000</p>
                                    <span class="inline-block mt-1.5 bg-[#2e7d32] hover:bg-[#1b5e20] text-white text-xs font-bold py-1.5 px-4 rounded-lg transition-colors duration-200">Pesan Sekarang</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    {{-- Keunggulan --}}
                    <div class="bg-[#2e7d32] rounded-2xl p-6 text-white">
                        <p class="text-xs font-bold text-green-200 uppercase tracking-widest mb-4">Mengapa ECOPIL?</p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3 text-sm">
                                <span class="text-lg shrink-0">💧</span>
                                <span class="text-green-100"><strong class="text-white">Non-Iritan</strong> aman untuk kulit
                                    sensitif</span>
                            </li>
                            <li class="flex items-start gap-3 text-sm">
                                <span class="text-lg shrink-0">🌿</span>
                                <span class="text-green-100"><strong class="text-white">Eco-Enzyme</strong> hasil fermentasi
                                    alami</span>
                            </li>
                            <li class="flex items-start gap-3 text-sm">
                                <span class="text-lg shrink-0">♻️</span>
                                <span class="text-green-100"><strong class="text-white">Biodegradable</strong> ramah
                                    lingkungan</span>
                            </li>
                            <li class="flex items-start gap-3 text-sm">
                                <span class="text-lg shrink-0">✨</span>
                                <span class="text-green-100"><strong class="text-white">Tanpa SLS</strong> bersih tanpa
                                    bahan keras</span>
                            </li>
                        </ul>
                    </div>

                    {{-- Share --}}
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4">Bagikan Artikel</p>
                        <div class="flex gap-2">
                            <a href="https://wa.me/?text={{ urlencode($article['title'] . ' - ' . url()->current()) }}"
                                target="_blank" rel="noopener noreferrer" class="flex-1 flex items-center justify-center gap-2 bg-green-500 hover:bg-green-600
                                      text-white text-sm font-semibold py-2.5 px-3 rounded-xl transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                                </svg>
                                WA
                            </a>
                            <button
                                onclick="navigator.clipboard.writeText('{{ url()->current() }}').then(()=>{ this.textContent=' Disalin!'; setTimeout(()=>this.textContent='🔗 Salin',2000) })"
                                class="flex-1 flex items-center justify-center gap-2 bg-gray-100 hover:bg-gray-200
                                           text-gray-700 text-sm font-semibold py-2.5 px-3 rounded-xl transition-colors">
                                🔗 Salin
                            </button>
                        </div>
                    </div>

                </aside>
            </div>
        </div>

        {{-- ══════════════════════════════════════
        ARTIKEL LAINNYA
        ══════════════════════════════════════ --}}
        <section class="bg-white border-t border-gray-100 py-14">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-xl md:text-2xl font-extrabold text-gray-900">Artikel Lainnya</h2>
                    <a href="{{ route('artikel.index') }}"
                        class="text-sm font-semibold text-[#2e7d32] hover:underline flex items-center gap-1">
                        Lihat Semua
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach ($otherArticles as $other)
                        <a href="{{ route('artikel.show', $other['slug']) }}"
                            class="group flex gap-4 bg-gray-50 hover:bg-white rounded-2xl p-4 border border-gray-100
                                  hover:border-green-100 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-200">
                            <div class="w-24 h-20 flex-shrink-0 rounded-xl overflow-hidden bg-gray-200">
                                <img src="{{ asset($other['image']) }}" alt="{{ $other['alt'] }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                    onerror="this.style.display='none'">
                            </div>
                            <div class="flex flex-col justify-center min-w-0">
                                <span class="inline-block text-[#2e7d32] text-xs font-bold uppercase tracking-wide mb-1.5
                                             bg-green-50 px-2 py-0.5 rounded-full w-fit">
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
            </div>
        </section>

    </div>{{-- end bg-gray-50 --}}

    @push('scripts')
        <script>
            // Reading progress bar
            window.addEventListener('scroll', function () {
                var article = document.getElementById('article-content');
                if (!article) return;
                var rect = article.getBoundingClientRect();
                var totalHeight = article.offsetHeight;
                var scrolled = -rect.top + window.innerHeight;
                var progress = Math.min(Math.max((scrolled / totalHeight) * 100, 0), 100);
                document.getElementById('reading-progress').style.width = progress + '%';
            });
        </script>
    @endpush

@endsection