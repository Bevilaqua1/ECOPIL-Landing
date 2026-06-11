<section id="testimoni" class="max-w-7xl mx-auto px-6 py-16 md:py-24 relative overflow-hidden">
    <div class="absolute top-10 right-10 -z-10 w-72 h-72 bg-green-50 rounded-full blur-3xl opacity-60 pointer-events-none"></div>
    <div class="absolute bottom-10 left-10 -z-10 w-64 h-64 bg-orange-50 rounded-full blur-3xl opacity-50 pointer-events-none"></div>

    <div class="text-center mb-14">
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight">
            "Membersihkan maksimal,
            <span class="text-[#2e7d32]">tangan tetap lembut."</span>
        </h2>
        <p class="text-gray-500 mt-4 max-w-xl mx-auto text-base leading-relaxed">
            Jangan hanya percaya pada kami. Lihat apa kata mereka yang sudah membuktikan
            keampuhan ECOPIL untuk melindungi kulit sensitif dari bahan kimia keras.
        </p>
    </div>

    <div class="hidden md:grid grid-cols-3 gap-6 items-stretch">

        @php
        $testimonials = [
            [
                'initials'   => 'EI',
                'name'       => 'Eikel',
                'role'       => 'Mahasiswa',
                'quote'      => '"Produk ini sangat cocok untuk kulit saya yang cukup sensitif."',
                'avatar_bg'  => 'bg-green-100',
                'avatar_txt' => 'text-[#2e7d32]',
            ],
            [
                'initials'   => 'IR',
                'name'       => 'Ibu Reci',
                'role'       => 'Ibu Rumah Tangga',
                'quote'      => '"Pilihan tepat buat ibu rumah tangga yang peduli lingkungan. Bangga ada produk lokal berkualitas seperti Ecopil."',
                'avatar_bg'  => 'bg-orange-100',
                'avatar_txt' => 'text-[#FFA02E]',
            ],
            [
                'initials'   => 'AR',
                'name'       => 'Arzis',
                'role'       => 'Pengguna Aktif',
                'quote'      => '"Konsep zero wastenya juara. Mengolah limbah sabut pinang dan lerak jadi produk fungsional. Sangat direkomendasikan!"',
                'avatar_bg'  => 'bg-green-100',
                'avatar_txt' => 'text-[#2e7d32]',
            ],
        ];
        @endphp

        @foreach ($testimonials as $t)
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm
                    hover:shadow-lg hover:-translate-y-1 transition-all duration-300
                    flex flex-col p-8 relative overflow-hidden group">

            <span class="absolute top-4 right-5 text-7xl leading-none font-serif
                         text-gray-100 group-hover:text-green-50 transition-colors select-none"
                  aria-hidden="true">"</span>

            <div class="text-[#FFA02E] text-base tracking-widest mb-5">★★★★★</div>

            <p class="text-gray-700 text-base leading-relaxed flex-1 relative z-10">
                {{ $t['quote'] }}
            </p>

            <hr class="border-gray-100 my-6">

            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-full flex items-center justify-center
                            font-bold text-sm shrink-0
                            {{ $t['avatar_bg'] }} {{ $t['avatar_txt'] }}">
                    {{ $t['initials'] }}
                </div>
                <div>
                    <p class="font-bold text-gray-900 text-sm leading-tight">{{ $t['name'] }}</p>
                    <p class="text-xs text-[#2e7d32] mt-0.5">{{ $t['role'] }}</p>
                </div>
            </div>

        </div>
        @endforeach

    </div>

    <div class="md:hidden relative z-10">

        {{-- Track --}}
        <div class="overflow-hidden rounded-2xl">
            <div id="testimonial-carousel"
                 class="flex transition-transform duration-500 ease-out will-change-transform">

                @php $mobileTestimonials = $testimonials; @endphp

                @foreach ($mobileTestimonials as $i => $t)
                <div class="min-w-full px-1">
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex flex-col relative overflow-hidden">

                        <span class="absolute top-3 right-4 text-6xl leading-none font-serif
                                     text-gray-100 select-none" aria-hidden="true">"</span>

                        <div class="text-[#FFA02E] text-sm tracking-widest mb-4">★★★★★</div>

                        <p class="text-gray-700 text-base leading-relaxed flex-1 relative z-10 mb-6">
                            {{ $t['quote'] }}
                        </p>

                        <hr class="border-gray-100 mb-5">

                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-full flex items-center justify-center
                                        font-bold text-sm shrink-0
                                        {{ $t['avatar_bg'] }} {{ $t['avatar_txt'] }}">
                                {{ $t['initials'] }}
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 text-sm leading-tight">{{ $t['name'] }}</p>
                                <p class="text-xs text-[#2e7d32] mt-0.5">{{ $t['role'] }}</p>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>

        <div class="flex items-center justify-between mt-5 px-1">

            <button onclick="prevTestimonial()"
                    aria-label="Sebelumnya"
                    class="w-9 h-9 rounded-full bg-[#2e7d32] hover:bg-[#1f5a23]
                           text-white flex items-center justify-center
                           transition-colors shadow-md focus:outline-none focus-visible:ring-2 focus-visible:ring-[#2e7d32]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>

            <div class="flex gap-2" id="testimonial-dots">
                @foreach ($mobileTestimonials as $i => $t)
                <button onclick="goToTestimonial($i)"
                        aria-label="Testimoni {{ $i + 1 }}"
                        class="dot w-2 h-2 rounded-full transition-all duration-300
                               {{ $i === 0 ? 'bg-[#2e7d32] w-5' : 'bg-gray-300' }}">
                </button>
                @endforeach
            </div>

            <button onclick="nextTestimonial()"
                    aria-label="Berikutnya"
                    class="w-9 h-9 rounded-full bg-[#2e7d32] hover:bg-[#1f5a23]
                           text-white flex items-center justify-center
                           transition-colors shadow-md focus:outline-none focus-visible:ring-2 focus-visible:ring-[#2e7d32]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
            </button>

        </div>
    </div>

</section>

<script>
(function () {
    let current = 0;
    const total = 3;

    function updateCarousel() {
        const carousel = document.getElementById('testimonial-carousel');
        if (!carousel) return;
        carousel.style.transform = `translateX(-${current * 100}%)`;

        document.querySelectorAll('#testimonial-dots .dot').forEach((dot, i) => {
            if (i === current) {
                dot.classList.add('bg-[#2e7d32]', 'w-5');
                dot.classList.remove('bg-gray-300');
            } else {
                dot.classList.remove('bg-[#2e7d32]', 'w-5');
                dot.classList.add('bg-gray-300');
            }
        });
    }

    window.nextTestimonial = function () {
        current = (current + 1) % total;
        updateCarousel();
    };

    window.prevTestimonial = function () {
        current = (current - 1 + total) % total;
        updateCarousel();
    };

    window.goToTestimonial = function (index) {
        current = index;
        updateCarousel();
    };

    let autoplay = setInterval(window.nextTestimonial, 5000);

    const section = document.getElementById('testimonial-carousel');
    if (section) {
        section.addEventListener('touchstart', () => clearInterval(autoplay), { passive: true });
    }
})();
</script>