<section id="produk" class="max-w-6xl mx-auto px-6 py-12 md:py-24 relative">
    {{-- Dekorasi Latar Belakang agar tidak membosankan --}}
    <div class="absolute top-20 left-0 -z-10 w-64 h-64 bg-green-50 rounded-full blur-3xl opacity-70"></div>
    <div class="absolute bottom-10 right-0 -z-10 w-72 h-72 bg-orange-50 rounded-full blur-3xl opacity-50"></div>

    <div class="text-center mb-16 animate-fade-in">
        {{-- Badge Kategori --}}
        
        {{-- H2: judul section produk dengan penekanan warna --}}
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4 tracking-tight">
            Pilih Varian Sabun Cuci Piring <br class="hidden md:block">
            <span class="text-[#2e7d32]">Ramah Lingkungan ECOPIL</span>
        </h2>
        <p class="text-gray-600 max-w-2xl mx-auto text-lg">Tersedia dalam dua ukuran untuk memenuhi kebutuhan rumah tangga Anda. Bersih maksimal, tangan tetap lembut.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-5 max-w-6xl mx-auto relative z-10">
        <!-- 250ml -->
        <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 group flex flex-col">
            <div class="h-80 bg-gradient-to-br from-gray-50 to-green-50/50 rounded-2xl mb-8 flex items-center justify-center overflow-hidden p-4 relative">
                {{-- Alt text spesifik produk 250ml --}}
                <img src="{{ asset('images/250ml.png') }}"
                     alt="ECOPIL sabun cuci piring ramah lingkungan kemasan 250ml – Rp 17.999"
                     class="h-full object-contain group-hover:scale-110 transition duration-500 drop-shadow-[0_20px_20px_rgba(46,125,50,0.15)]"
                     loading="lazy">
            </div>
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 gap-4 sm:gap-0">
                <div>
                    {{-- H3: nama produk --}}
                    <h3 class="text-lg md:text-2xl font-bold text-gray-900">ECOPIL 250ml</h3>
                    <p class="text-sm text-[#2e7d32] font-semibold mt-1">Kemasan Praktis</p>
                </div>
                <span class="text-xl font-extrabold text-[#2e7d32] bg-green-50 border border-green-100 px-4 py-1.5 rounded-xl shadow-sm">Rp 17.999</span>
            </div>
            <p class="text-gray-600 text-sm leading-relaxed mb-8 flex-grow">Sabun cuci piring ramah lingkungan ukuran praktis. Mengandung saponin, flavonoid, dan asam organik.</p>
        </div>

        <!-- 500ml -->
        <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 group flex flex-col relative">
            <div class="h-80 bg-gradient-to-br from-gray-50 to-green-50/50 rounded-2xl mb-8 flex items-center justify-center overflow-hidden p-4 relative">
                {{-- Alt text spesifik produk 500ml --}}
                <img src="{{ asset('images/500ml.png') }}"
                     alt="ECOPIL sabun cuci piring ramah lingkungan kemasan 500ml – Rp 28.999"
                     class="h-full object-contain group-hover:scale-110 transition duration-500 drop-shadow-[0_20px_20px_rgba(46,125,50,0.15)]"
                     loading="lazy">
            </div>
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 gap-4 sm:gap-0">
                <div>
                    <h3 class="text-lg md:text-2xl font-bold text-gray-900">ECOPIL 500ml</h3>
                    <p class="text-sm text-[#2e7d32] font-semibold mt-1">Kemasan Keluarga</p>
                </div>
                <span class="text-xl font-extrabold text-[#2e7d32] bg-green-50 border border-green-100 px-4 py-1.5 rounded-xl shadow-sm">Rp 28.999</span>
            </div>
            <p class="text-gray-600 text-sm leading-relaxed mb-8 flex-grow">Ukuran hemat untuk pemakaian rutin. Aman di tangan, efektif mengangkat lemak, dan 100% eco-friendly.</p>
        </div>
    </div>
</section>