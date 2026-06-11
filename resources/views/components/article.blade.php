<section id="artikel" class="max-w-7xl mx-auto px-6 py-12 md:py-16 relative overflow-hidden">

    {{-- Dekorasi latar --}}
    <div class="absolute top-0 right-0 -z-10 w-80 h-80 bg-green-50 rounded-full blur-3xl opacity-50 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 -z-10 w-64 h-64 bg-orange-50 rounded-full blur-3xl opacity-40 pointer-events-none"></div>

    {{-- Header --}}
    <div class="text-center mb-12">
        <span class="inline-block text-[#2e7d32] font-bold text-xs uppercase tracking-widest
                     bg-green-50 px-4 py-1.5 rounded-full mb-4">
            Artikel ECOPIL
        </span>
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-2 leading-tight">
            Tips & Informasi Seputar<br class="hidden md:block">
            Kebersihan Rumah Tangga
        </h2>
        <p class="text-gray-500 mt-4 max-w-xl mx-auto text-base leading-relaxed">
            Pelajari lebih banyak tentang gaya hidup bersih, ramah lingkungan,
            dan pilihan produk yang tepat untuk keluarga Anda.
        </p>
    </div>

    @php
    $articles = [
        [
            'slug'     => 'cara-memilih-sabun-cuci-piring-aman-kulit-sensitif',
            'image'    => 'images/artikel/artikel-1.png',
            'alt'      => 'Cara memilih sabun cuci piring yang aman untuk kulit sensitif dan lingkungan',
            'label'    => 'Tips Keluarga',
            'color'    => 'bg-emerald-500',
            'title'    => 'Cara Memilih Sabun Cuci Piring yang Aman untuk Keluarga dan Lingkungan',
            'excerpt'  => 'Kenali cara memilih sabun terbaik yang lembut di tangan, bebas SLS, dan tidak merusak lingkungan sekitar kita.',
        ],
        [
            'slug'     => 'bahaya-sabun-cuci-piring-kimia-vs-alami-untuk-keluarga',
            'image'    => 'images/artikel/artikel-2.png',
            'alt'      => 'Perbandingan bahaya sabun cuci piring kimia dan alami untuk keluarga',
            'label'    => 'Edukasi',
            'color'    => 'bg-blue-500',
            'title'    => 'Sabun Cuci Piring Alami vs Kimia: Mana yang Lebih Baik untuk Keluarga?',
            'excerpt'  => 'Waspadai bahaya sabun cuci piring kimia! Simak perbandingan sabun alami vs kimia dan dampaknya bagi lingkungan.',
        ],
        [
            'slug'     => 'ciri-ciri-sabun-cuci-piring-baik-tanda-tidak-aman',
            'image'    => 'images/artikel/artikel-3.png',
            'alt'      => 'Ciri-ciri sabun cuci piring yang baik vs tanda tidak aman untuk kesehatan',
            'label'    => 'Kesehatan',
            'color'    => 'bg-rose-500',
            'title'    => 'Tanda Sabun Cuci Piring Kamu Tidak Aman — dan Cara Menggantinya',
            'excerpt'  => 'Tangan kering, perih, atau mengelupas setelah cuci piring? Bisa jadi sabunmu mengandung bahan berbahaya.',
        ],
    ];
    @endphp

    {{-- Grid artikel --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 relative z-10">
        @foreach ($articles as $i => $article)
        <a href="{{ route('artikel.show', $article['slug']) }}"
           class="group flex flex-col bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden
                  hover:shadow-xl hover:-translate-y-1 transition-all duration-300
                  focus:outline-none focus-visible:ring-2 focus-visible:ring-[#2e7d32] focus-visible:ring-offset-2"
           title="{{ $article['title'] }}">

            {{-- Gambar --}}
            <div class="relative overflow-hidden h-48 md:h-56 bg-gray-100 shrink-0">
                <img src="{{ asset($article['image']) }}"
                     alt="{{ $article['alt'] }}"
                     loading="lazy"
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">

                {{-- Fallback placeholder --}}
                <div class="absolute inset-0 bg-green-50 items-center justify-center text-green-300"
                     style="display:none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586
                                 a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6
                                 a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>

                {{-- Label kategori --}}
                <span class="absolute top-3 left-3 {{ $article['color'] }} text-white
                             text-xs font-semibold px-3 py-1 rounded-full shadow-sm">
                    {{ $article['label'] }}
                </span>

            </div>

            {{-- Konten teks --}}
            <div class="flex flex-col flex-1 p-5">
                <h3 class="font-bold text-gray-900 text-base leading-snug mb-2
                           group-hover:text-[#2e7d32] transition-colors duration-200 line-clamp-2">
                    {{ $article['title'] }}
                </h3>

                <p class="text-gray-500 text-sm leading-relaxed line-clamp-2 flex-1 mb-4">
                    {{ $article['excerpt'] }}
                </p>

                {{-- CTA --}}
                <div class="mt-auto flex items-center gap-1.5 text-[#2e7d32] font-semibold text-sm
                            group-hover:gap-2.5 transition-all duration-200 border-t border-gray-100 pt-4">
                    Baca Selengkapnya
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                    </svg>
                </div>
            </div>

        </a>
        @endforeach
    </div>

    {{-- Tombol lihat semua --}}
    <div class="text-center mt-12">
        <a href="{{ route('artikel.index') }}"
           class="inline-flex items-center gap-2 bg-[#2e7d32] hover:bg-[#1b5e20] text-white font-semibold
                  px-8 py-3 rounded-xl transition-all duration-200 text-sm md:text-base shadow-md hover:shadow-lg hover:-translate-y-0.5">
            Lihat Semua Artikel
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
        </a>
    </div>

</section>