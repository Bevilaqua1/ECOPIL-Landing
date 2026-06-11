{{-- =====================================================
     SECTION ARTIKEL — resources/views/sections/artikel.blade.php
     Include di landing page: @include('sections.artikel')
     ===================================================== --}}

<section id="artikel" class="max-w-7xl mx-auto px-6 py-12 md:py-24 relative">

    {{-- Gradient pembatas dari section sebelumnya --}}
    <div class="absolute -top-20 left-0 right-0 h-20 bg-gradient-to-b from-transparent to-white/5 md:hidden"></div>

    {{-- Header --}}
    <div class="text-center mb-12 animate-fade-in">
        <span class="text-[#2e7d32] font-bold text-sm uppercase tracking-widest">Artikel ECOPIL</span>
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-2 leading-tight">
            Tips & Informasi Seputar Kebersihan Rumah Tangga
        </h2>
        <p class="text-gray-600 mt-4 max-w-2xl mx-auto text-base leading-relaxed">
            Pelajari lebih banyak tentang gaya hidup bersih, ramah lingkungan, dan pilihan produk yang tepat untuk keluarga.
        </p>
    </div>

    @php
        $articles = [
            [
                'slug'    => 'cara-memilih-sabun-cuci-piring-aman-keluarga-lingkungan',
                'image'   => 'images/artikel/artikel-1.png',
                'alt'     => 'Panduan lengkap cara memilih sabun cuci piring aman untuk keluarga dan lingkungan - ECOPIL',
                'label'   => 'Tips Keluarga',
                'title'   => 'Cara Memilih Sabun Cuci Piring yang Aman untuk Keluarga dan Lingkungan',
                'excerpt' => 'Sabun cuci piring bukan cuma soal bersih. Kenali bahan berbahaya yang perlu dihindari dan temukan pilihan yang aman untuk kulit dan lingkungan kamu.',
            ],
            [
                'slug'    => 'sabun-cuci-piring-alami-vs-kimia-untuk-keluarga',
                'image'   => 'images/artikel/artikel-2.png',
                'alt'     => 'Perbandingan lengkap sabun cuci piring alami vs kimia: keamanan, efektivitas, dan dampak lingkungan',
                'label'   => 'Edukasi',
                'title'   => 'Sabun Cuci Piring Alami vs Kimia: Mana yang Lebih Baik untuk Keluarga?',
                'excerpt' => 'Bingung pilih sabun alami atau kimia? Simak perbandingan lengkapnya dari segi keamanan, efektivitas, dan dampak lingkungan sebelum memutuskan.',
            ],
            [
                'slug'    => 'tanda-sabun-cuci-piring-tidak-aman-cara-menggantinya',
                'image'   => 'images/artikel/artikel-3.png',
                'alt'     => 'Tanda-tanda sabun cuci piring tidak aman: tangan kering, iritasi, dan pecah-pecah karena bahan kimia keras',
                'label'   => 'Kesehatan',
                'title'   => 'Tanda Sabun Cuci Piring Kamu Tidak Aman — dan Cara Menggantinya',
                'excerpt' => 'Tangan sering kering setelah cuci piring? Bisa jadi sabunmu mengandung bahan berbahaya. Kenali 5 tandanya dan temukan alternatif yang lebih baik.',
            ],
            [
                'slug'    => 'kulit-tangan-kering-setelah-cuci-piring-ganti-sabun-alami',
                'image'   => 'images/artikel/artikel-4.png',
                'alt'     => 'Solusi kulit tangan kering setelah mencuci piring: beralih ke sabun alami dan lembut - ECOPIL',
                'label'   => 'Tips Keluarga',
                'title'   => 'Sering Merasa Kulit Tangan Kering Setelah Cuci Piring? Yuk, Mulai Ganti Sabunmu',
                'excerpt' => 'Kulit tangan sering terasa kering atau ketarik setelah cuci piring? Bisa jadi sabunmu terlalu keras. Kenali penyebabnya dan temukan sabun alami yang lebih lembut.',
            ],
            [
                'slug'    => 'mitos-busa-sabun-cuci-piring-bersih',
                'image'   => 'images/artikel/artikel-5.png',
                'alt'     => 'Mitos fakta: benarkah busa sabun cuci piring melimpah membuat piring lebih bersih?',
                'label'   => 'Fakta & Mitos',
                'title'   => 'Mitos Sabun Cuci Piring: Benarkah Busa Melimpah Bikin Piring Lebih Bersih?',
                'excerpt' => 'Busa melimpah berarti lebih bersih? Belum tentu. Kenali fakta di balik mitos busa sabun cuci piring dan temukan alternatif yang lebih aman untuk keluarga.',
            ],
        ];
    @endphp

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8 relative z-10">
        @foreach ($articles as $article)
            <a href="{{ route('artikel.show', $article['slug']) }}"
               data-article-category="{{ $article['label'] }}"
               class="article-card group block bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden
                      hover:shadow-2xl hover:-translate-y-2 transition-all duration-300
                      focus:outline-none focus:ring-2 focus:ring-[#2e7d32] focus:ring-offset-2"
               title="{{ $article['title'] }}">

                <div class="relative overflow-hidden h-48 sm:h-52 md:h-60 bg-gray-100 flex-shrink-0">
                    <img src="{{ asset($article['image']) }}"
                         alt="{{ $article['alt'] }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">

                    <div class="absolute inset-0 bg-gradient-to-br from-green-50 to-green-100
                                items-center justify-center text-[#2e7d32] opacity-50"
                         style="display:none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586
                                     a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6
                                     a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>

                    <span class="absolute top-3 left-3 bg-[#2e7d32] text-white text-xs
                                 font-semibold px-3 py-1 rounded-full shadow-md">
                        {{ $article['label'] }}
                    </span>
                </div>

                <div class="p-5 md:p-6 flex flex-col min-h-[280px] md:min-h-[320px]">
                    <h3 class="text-gray-900 font-bold text-base md:text-lg leading-snug mb-2 md:mb-3
                               group-hover:text-[#2e7d32] transition-colors duration-200 line-clamp-2">
                        {{ $article['title'] }}
                    </h3>

                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed line-clamp-3 flex-grow mb-5">
                        {{ $article['excerpt'] }}
                    </p>

                    <div class="mt-auto">
                        <span class="inline-flex items-center gap-2 text-xs md:text-sm font-semibold
                                     text-white bg-[#2e7d32] group-hover:bg-[#1b5e20]
                                     px-4 md:px-5 py-2 md:py-2.5 rounded-xl transition-colors duration-200 shadow-sm">
                            Baca Selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </div>
                </div>

            </a>
        @endforeach
    </div>

    {{-- Tombol See More --}}
    <div class="text-center mt-12">
        <a href="{{ route('artikel.index') }}"
           class="inline-block border-2 border-[#2e7d32] text-[#2e7d32] hover:bg-[#2e7d32]
                  hover:text-white font-semibold px-8 py-3 rounded-xl transition-all duration-200">
            Lihat Semua Artikel
        </a>
    </div>

</section>

<script>
    function filterArticles(category) {
        const cards = document.querySelectorAll('.article-card');
        const buttons = document.querySelectorAll('.kategori-btn');

        buttons.forEach(button => {
            const buttonCategory = button.dataset.category;
            if (buttonCategory === category) {
                button.classList.add('bg-[#2e7d32]', 'text-white', 'hover:bg-[#1b5e20]');
                button.classList.remove('border-2', 'text-[#2e7d32]', 'bg-white', 'hover:text-white');
            } else {
                button.classList.remove('bg-[#2e7d32]', 'text-white', 'hover:bg-[#1b5e20]');
                button.classList.add('border-2', 'text-[#2e7d32]');
            }
        });

        cards.forEach(card => {
            const cardCategory = card.dataset.articleCategory;
            if (category === 'all' || cardCategory === category) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        filterArticles('all');
    });
</script>
