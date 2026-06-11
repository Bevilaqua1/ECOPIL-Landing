<section id="features" class="bg-[#2e7d32] py-20 text-white relative overflow-hidden">
    {{-- Elemen dekoratif latar belakang untuk kedalaman visual --}}
    <div class="absolute top-0 left-0 w-64 h-64 bg-white/5 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-black/10 rounded-full translate-x-1/3 translate-y-1/3 blur-3xl"></div>

    <div class="max-w-6xl mx-auto px-6 relative z-10">
        {{-- Judul Section dengan Badge --}}
        <div class="text-center mb-16 animate-fade-in">
            <span class="inline-block px-4 py-1 rounded-full bg-white/10 border border-white/20 text-green-100 text-xs font-bold uppercase tracking-[0.2em] mb-4">
                Keunggulan Produk
            </span>
            <h2 class="text-2xl md:text-4xl font-extrabold tracking-tight">
                Mengapa Beralih ke ECOPIL? <br class="hidden md:block">
            </h2>
            <p class="text-green-100/85 text-sm md:text-lg max-w-2xl mx-auto leading-relaxed mt-4">
                Bukan sekadar sabun biasa ECOPIL diformulasikan dari alam untuk memberikan perlindungan ekstra bagi keluarga dan bumi kita.
            </p>
        </div>

        {{-- Grid: 2 kolom di mobile, 2 kolom di sm, 4 kolom di xl --}}
        <div class="grid grid-cols-2 xl:grid-cols-4 gap-3 md:gap-6 text-center">
            {{-- Feature 1: Non-Iritan --}}
            <div class="group flex flex-col items-center p-4 md:p-6 rounded-3xl hover:bg-white/5 transition-all duration-300">
                <div class="w-14 h-14 md:w-20 md:h-20 bg-white/10 group-hover:bg-[#FFA02E] rounded-[2rem] flex items-center justify-center mb-4 md:mb-6 text-2xl md:text-4xl shadow-inner transition-all duration-500 group-hover:rotate-12 transform" aria-hidden="true">
                    💧
                </div>
                <h3 class="font-bold text-base md:text-xl mb-1 md:mb-2">Non-Iritan</h3>
                <p class="text-xs md:text-sm text-green-100/80 leading-relaxed">Sangat aman untuk kulit sensitif & tangan tetap halus.</p>
            </div>

            {{-- Feature 2: Eco-Enzyme --}}
            <div class="group flex flex-col items-center p-4 md:p-6 rounded-3xl hover:bg-white/5 transition-all duration-300">
                <div class="w-14 h-14 md:w-20 md:h-20 bg-white/10 group-hover:bg-[#FFA02E] rounded-[2rem] flex items-center justify-center mb-4 md:mb-6 text-2xl md:text-4xl shadow-inner transition-all duration-500 group-hover:rotate-12 transform" aria-hidden="true">
                    🌿
                </div>
                <h3 class="font-bold text-base md:text-xl mb-1 md:mb-2">Eco-Enzyme</h3>
                <p class="text-xs md:text-sm text-green-100/80 leading-relaxed">Hasil fermentasi alami buah & sayur terbaik.</p>
            </div>

            {{-- Feature 3: Zero Waste --}}
            <div class="group flex flex-col items-center p-4 md:p-6 rounded-3xl hover:bg-white/5 transition-all duration-300">
                <div class="w-14 h-14 md:w-20 md:h-20 bg-white/10 group-hover:bg-[#FFA02E] rounded-[2rem] flex items-center justify-center mb-4 md:mb-6 text-2xl md:text-4xl shadow-inner transition-all duration-500 group-hover:rotate-12 transform" aria-hidden="true">
                    ♻️
                </div>
                <h3 class="font-bold text-base md:text-xl mb-1 md:mb-2">Zero Waste</h3>
                <p class="text-xs md:text-sm text-green-100/80 leading-relaxed">Berdayakan limbah lokal jadi manfaat nyata.</p>
            </div>

            {{-- Feature 4: Premium --}}
            <div class="group flex flex-col items-center p-4 md:p-6 rounded-3xl hover:bg-white/5 transition-all duration-300">
                <div class="w-14 h-14 md:w-20 md:h-20 bg-white/10 group-hover:bg-[#FFA02E] rounded-[2rem] flex items-center justify-center mb-4 md:mb-6 text-2xl md:text-4xl shadow-inner transition-all duration-500 group-hover:rotate-12 transform" aria-hidden="true">
                    ✨
                </div>
                <h3 class="font-bold text-base md:text-xl mb-1 md:mb-2">Premium</h3>
                <p class="text-xs md:text-sm text-green-100/80 leading-relaxed">Kualitas terstandarisasi untuk keluarga Anda.</p>
            </div>
        </div>
    </div>
</section>