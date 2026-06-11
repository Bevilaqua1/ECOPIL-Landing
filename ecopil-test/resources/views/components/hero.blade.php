<!-- Hero Section -->
<section id="beranda" class="relative bg-white py-16 md:py-24 px-6 overflow-hidden">
    {{-- Elemen Dekoratif Latar Belakang --}}
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-green-50 rounded-full blur-3xl opacity-60 -z-10"></div>
    <div class="absolute top-1/2 -right-20 w-80 h-80 bg-orange-50 rounded-full blur-3xl opacity-40 -z-10"></div>

    <div class="mx-auto max-w-screen-xl flex flex-col md:flex-row items-center gap-12 relative z-10">
        {{-- Sisi Teks --}}
        <div class="w-full md:w-1/2 animate-fade-in text-center md:text-left">
            <!-- Badge Kepercayaan -->
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-green-50 text-[#2e7d32] text-xs md:text-sm font-bold mb-6 border border-green-100 shadow-sm">
                <span class="flex h-2 w-2 rounded-full bg-[#2e7d32] animate-pulse"></span>
                    Proteksi Nyaman untuk Tangan Sensitif
            </span>
            
            <!-- H1: Headline Utama dengan Penekanan Warna -->
            <h1 class="text-3xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-tight mb-6 tracking-tight">
                Cuci Piring Bersih <br>
                <span class="text-[#2e7d32]">Tangan Tetap Lembut</span><br>
                <span class="relative">dengan Kekuatan Alam.</span>
            </h1>

            {{-- Sisi Gambar Produk (Posisi Tengah untuk Mobile) --}}
            <div class="md:hidden relative flex justify-center items-center mb-8">
                <!-- Background Ornamen Lingkaran -->
                <div class="absolute inset-0 bg-gradient-to-tr from-green-100/40 to-orange-100/40 rounded-full scale-75 blur-2xl -z-10"></div>

                <!-- Gambar Produk dengan Animasi Float & Shadow Khusus -->
                <div class="relative group">
                    <img
                src="{{ asset('images/Ecopil.png') }}"
                alt="Sabun cuci piring alami ECOPIL ramah lingkungan"
                class="..." >
                </div>
            </div>
            
            <p class="text-base md:text-lg text-slate-600 mb-10 leading-relaxed max-w-xl mx-auto md:mx-0">
                Bersih maksimal, tetap nyaman di tangan.
                ECOPIL hadir dengan formula Sabut Pinang & Lerak yang membantu membersihkan lemak tanpa membuat kulit terasa kasar atau iritasi.
            </p>
            
            {{-- Tombol Aksi (CTA) --}}
            <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                <a href="#produk" class="group bg-[#FFA02E] hover:bg-[#e68a1a] text-white font-bold py-4 px-8 sm:px-10 rounded-2xl transition duration-300 shadow-xl shadow-orange-200 flex items-center justify-center gap-2 transform hover:-translate-y-1">
                    Lihat Produk
                </a>
                <a href="#features" class="flex items-center justify-center gap-2 text-[#2e7d32] font-bold py-4 px-8 rounded-2xl border-2 border-[#2e7d32]/20 hover:border-[#2e7d32] hover:bg-green-50 transition duration-300">
                    Kenapa Harus Coba?
                </a>
            </div>

            {{-- Social Proof Ringkas --}}
            <div class="mt-10 flex items-center justify-center md:justify-start gap-4 opacity-80">
                <div class="flex -space-x-3">
                    <div class="w-8 h-8 rounded-full bg-[#2e7d32] border-2 border-white flex items-center justify-center text-[10px] text-white font-bold">1k+</div>
                </div>
                <p class="text-sm font-medium text-slate-500">Lorem ipsum dolor sit amet</p>
            </div>
        </div>

        {{-- Sisi Gambar Produk Desktop --}}
        <div class="hidden md:flex md:w-1/2 relative justify-center items-center">
            <!-- Background Ornamen Lingkaran -->
            <div class="absolute inset-0 bg-gradient-to-tr from-green-100/40 to-orange-100/40 rounded-full scale-75 blur-2xl -z-10"></div>

            <!-- Gambar Produk dengan Animasi Float & Shadow Khusus -->
            <div class="relative group">
                <img src="{{ asset('images/500ml.png') }}" 
                     alt="Sabun Cuci Piring Alami Ecopil 500ml"
                     class="w-full max-w-[240px] md:max-w-md mx-auto drop-shadow-[0_35px_35px_rgba(46,125,50,0.25)] animate-float transition-transform duration-700 group-hover:scale-105">

                {{-- Floating Badge pada Gambar --}}
                <div class="absolute -bottom-4 -left-4 bg-white p-4 rounded-2xl shadow-lg border border-green-50 animate-bounce transition-all hidden md:block">
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Bahan Utama</p>
                    <p class="text-[#2e7d32] font-extrabold">100% Organik</p>
                </div>
            </div>
        </div>
    </div>
</section>