<!-- Hero Section -->
<section id="beranda" class="relative bg-white py-10 md:py-16 px-6 overflow-hidden">
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-green-50 rounded-full blur-3xl opacity-60 -z-10"></div>
    <div class="absolute top-1/2 -right-20 w-80 h-80 bg-orange-50 rounded-full blur-3xl opacity-40 -z-10"></div>

    <div class="mx-auto max-w-screen-xl flex flex-col md:flex-row items-center gap-8 md:gap-12 relative z-10">

        {{-- Sisi Teks --}}
        <div class="w-full md:w-1/2 animate-fade-in text-center md:text-left">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-green-50 text-[#2e7d32] text-sm font-bold mb-4 border border-green-100 shadow-sm">
                <span class="flex h-2 w-2 rounded-full bg-[#2e7d32] animate-pulse"></span>
                Proteksi Nyaman untuk Tangan Sensitif
            </span>

            <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 leading-tight mb-4 tracking-tight">
                Cuci Piring Bersih <br>
                <span class="text-[#2e7d32]">Tangan Tetap Lembut</span><br>
                dengan Kekuatan Alam.
            </h1>

            {{-- Gambar Mobile --}}
            <div class="md:hidden relative flex justify-center items-center my-6">
                <div class="absolute inset-0 bg-gradient-to-tr from-green-100/40 to-orange-100/40 rounded-full scale-75 blur-2xl -z-10"></div>
                <img src="{{ asset('images/Ecopil.png') }}"
                     alt="Sabun cuci piring alami ECOPIL ramah lingkungan"
                     class="w-48 mx-auto drop-shadow-[0_20px_20px_rgba(46,125,50,0.2)] rounded-2xl">
            </div>

            <p class="text-sm md:text-base text-slate-600 mb-8 leading-relaxed max-w-md mx-auto md:mx-0">
                Bersih maksimal, tetap nyaman di tangan. ECOPIL hadir dengan formula Sabut Pinang & Lerak yang membantu membersihkan lemak tanpa membuat kulit terasa kasar atau iritasi.
            </p>

        </div>

        {{-- Sisi Gambar Desktop --}}
        <div class="hidden md:flex md:w-1/2 relative justify-center items-center">
            <div class="absolute inset-0 bg-gradient-to-tr from-green-100/40 to-orange-100/40 rounded-full scale-75 blur-2xl -z-10"></div>
            <div class="relative group">
                <img src="{{ asset('images/500ml.png') }}"
                     alt="Sabun Cuci Piring Alami Ecopil 500ml"
                     class="w-full max-w-[260px] md:max-w-xs mx-auto drop-shadow-[0_35px_35px_rgba(46,125,50,0.25)] rounded-2xl animate-float transition-transform duration-700 group-hover:scale-105">

                <div class="absolute -bottom-4 -left-4 bg-white p-3 rounded-2xl shadow-lg border border-green-50 animate-bounce hidden md:block">
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Bahan Utama</p>
                    <p class="text-[#2e7d32] font-extrabold text-sm">100% Organik</p>
                </div>
            </div>
        </div>
    </div>
</section>