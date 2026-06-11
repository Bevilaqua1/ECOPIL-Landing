
@extends('layouts.app')

@section('title', 'Artikel & Edukasi ECOPIL | Tips Sabun Cuci Piring Ramah Lingkungan')
@section('description', 'Baca artikel edukasi tentang sabun cuci piring alami, tips kebersihan rumah, dan solusi ramah lingkungan. Cari tahu cara memilih sabun yang aman untuk keluarga.')
@section('keywords', 'artikel sabun cuci piring, edukasi kebersihan rumah, tips mencuci piring, sabun alami, sabun ramah lingkungan, ECOPIL')
@section('og_title', 'Artikel & Edukasi ECOPIL - Tips Sabun Cuci Piring')
@section('og_description', 'Pelajari tentang sabun cuci piring alami, keamanan produk, dan gaya hidup ramah lingkungan melalui artikel edukatif ECOPIL.')

@section('content')

<main class="bg-gray-50 min-h-screen">

    {{-- ── Hero Header ── --}}
    <section class="bg-white border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-6 py-16 text-center">

            {{-- Breadcrumb --}}
            <nav class="flex items-center justify-center gap-2 text-xs text-gray-400 mb-6">
                <a href="{{ url('/') }}" class="hover:text-[#2e7d32] transition-colors">Beranda</a>
                <span>/</span>
                <span class="text-gray-600">Artikel</span>
            </nav>

            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight mb-4">
                Artikel & Edukasi ECOPIL
            </h1>

            <p class="text-gray-600 max-w-2xl mx-auto text-lg leading-relaxed">
                Pelajari lebih dalam tentang gaya hidup bersih, ramah lingkungan, dan pilihan produk yang tepat untuk keluarga Anda.
            </p>

        </div>
    </section>

    {{-- ── Daftar Artikel ── --}}
    <section class="max-w-6xl mx-auto px-6 py-16">

        {{-- Filter Kategori dengan Functionality --}}
        <div class="flex flex-wrap justify-center gap-2 md:gap-3 mb-12 px-2">
            <button onclick="filterArticlesIndex('all')" data-category="all" class="kategori-btn-index px-4 md:px-5 py-2 bg-[#2e7d32] text-white rounded-full text-xs md:text-sm font-semibold hover:bg-[#1b5e20] transition-all duration-200 shadow-sm">Semua</button>
            <button onclick="filterArticlesIndex('Tips Keluarga')" data-category="Tips Keluarga" class="kategori-btn-index px-4 md:px-5 py-2 bg-white border-2 border-[#2e7d32] text-[#2e7d32] rounded-full text-xs md:text-sm font-semibold hover:bg-green-50 transition-all duration-200">Tips Keluarga</button>
            <button onclick="filterArticlesIndex('Edukasi')" data-category="Edukasi" class="kategori-btn-index px-4 md:px-5 py-2 bg-white border-2 border-[#2e7d32] text-[#2e7d32] rounded-full text-xs md:text-sm font-semibold hover:bg-green-50 transition-all duration-200">Edukasi</button>
            <button onclick="filterArticlesIndex('Kesehatan')" data-category="Kesehatan" class="kategori-btn-index px-4 md:px-5 py-2 bg-white border-2 border-[#2e7d32] text-[#2e7d32] rounded-full text-xs md:text-sm font-semibold hover:bg-green-50 transition-all duration-200">Kesehatan</button>
            <button onclick="filterArticlesIndex('Fakta & Mitos')" data-category="Fakta & Mitos" class="kategori-btn-index px-4 md:px-5 py-2 bg-white border-2 border-[#2e7d32] text-[#2e7d32] rounded-full text-xs md:text-sm font-semibold hover:bg-green-50 transition-all duration-200">Fakta & Mitos</button>
        </div>

        {{-- Grid Artikel --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($articles as $article)
                <a href="{{ route('artikel.show', $article['slug']) }}"
                   data-label="{{ $article['label'] }}"
                   class="group bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden
                          hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">

                    {{-- Thumbnail --}}
                    <div class="relative overflow-hidden h-52 bg-gray-100 flex-shrink-0">
                        <img src="{{ asset($article['image']) }}"
                             alt="{{ $article['alt'] }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">

                        {{-- Placeholder saat gambar belum ada --}}
                        <div class="absolute inset-0 bg-gradient-to-br from-green-50 to-green-100
                                    items-center justify-center text-[#2e7d32] opacity-50"
                             style="display:none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                      d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586
                                         a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6
                                         a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>

                        {{-- Badge label --}}
                        <span class="absolute top-3 left-3 bg-[#2e7d32] text-white text-xs
                                     font-semibold px-3 py-1 rounded-full shadow">
                            {{ $article['label'] }}
                        </span>
                    </div>

                    {{-- Konten Card --}}
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-gray-900 font-bold text-lg leading-snug mb-3
                                   group-hover:text-[#2e7d32] transition-colors duration-200 line-clamp-2">
                            {{ $article['title'] }}
                        </h3>

                        <p class="text-gray-500 text-sm leading-relaxed line-clamp-3 flex-grow">
                            {{ $article['excerpt'] }}
                        </p>

                        {{-- Tombol Read More --}}
                        <div class="mt-5">
                            <span class="inline-flex items-center gap-1 text-sm font-semibold
                                         text-white bg-[#2e7d32] hover:bg-[#1b5e20]
                                         px-5 py-2.5 rounded-xl transition-colors duration-200 shadow-sm">
                                Baca Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                                </svg>
                            </span>
                        </div>
                    </div>

                </a>
            @endforeach
        </div>

        {{-- Back to Home --}}
        <div class="text-center mt-16">
            <a href="{{ url('/') }}"
               class="inline-flex items-center gap-2 text-[#2e7d32] hover:text-[#1b5e20]
                      font-semibold px-6 py-3 border-2 border-[#2e7d32] hover:border-[#1b5e20]
                      rounded-xl transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali ke Beranda
            </a>
        </div>

    </section>

</main>

@endsection

<script>
    function filterArticlesIndex(category) {
        const cards = document.querySelectorAll('a[data-label]');
        const buttons = document.querySelectorAll('.kategori-btn-index');

        // Update tombol styling
        buttons.forEach(button => {
            const btnCategory = button.getAttribute('data-category');
            if (btnCategory === category) {
                // Tombol aktif
                button.classList.remove('bg-white', 'border-2', 'border-[#2e7d32]', 'text-[#2e7d32]');
                button.classList.add('bg-[#2e7d32]', 'text-white', 'hover:bg-[#1b5e20]', 'shadow-md');
            } else {
                // Tombol tidak aktif
                button.classList.remove('bg-[#2e7d32]', 'text-white', 'hover:bg-[#1b5e20]', 'shadow-md');
                button.classList.add('bg-white', 'border-2', 'border-[#2e7d32]', 'text-[#2e7d32]');
            }
        });

        // Filter artikel cards
        cards.forEach(card => {
            const cardLabel = card.getAttribute('data-label');
            if (category === 'all' || cardLabel === category) {
                card.style.display = 'block';
                card.classList.add('animate-fade-in');
            } else {
                card.style.display = 'none';
            }
        });
    }

    // Initialize filter saat halaman selesai dimuat
    document.addEventListener('DOMContentLoaded', function () {
        filterArticlesIndex('all');
    });
</script>