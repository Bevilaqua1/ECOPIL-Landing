<section id="faq" class="max-w-6xl mx-auto px-4 md:px-6 py-8 md:py-12 relative" style="scroll-margin-top: 80px;">
    {{-- Gradient pembatas dari section sebelumnya --}}
    <div class="absolute -top-20 left-0 right-0 h-20 bg-gradient-to-b from-transparent to-white/5 md:hidden pointer-events-none -z-10"></div>
    <div class="text-center mb-8 md:mb-12 animate-fade-in">
            <span class="text-[#2e7d32] font-bold text-sm uppercase tracking-widest mb-2 md:mb-3 inline-block">Pusat Bantuan</span>
            <h2 class="text-lg sm:text-2xl md:text-3xl font-extrabold text-slate-900 mt-2 md:mt-3 leading-snug">
                Pertanyaan yang Sering Ditanyakan Seputar ECOPIL
            </h2>
            <p class="text-slate-600 mt-2 md:mt-3 max-w-2xl mx-auto text-sm md:text-base leading-relaxed">Jawaban atas pertanyaan yang paling sering diajukan mengenai ECOPIL untuk membantu Anda membuat keputusan terbaik.</p>
        </div>

    <div class="space-y-2 md:space-y-2.5 max-w-3xl mx-auto relative z-10">
        {{-- FAQ Item 1 --}}
        <div class="group bg-white border border-slate-200 rounded-lg md:rounded-xl overflow-hidden transition-all duration-300 hover:border-[#2e7d32]/30 hover:shadow-md">
            <button onclick="toggleFaq('faq1', 'icon1')" class="w-full text-left p-3.5 md:p-4 flex justify-between items-center gap-3 focus:outline-none transition-colors">
                <span class="font-bold text-slate-800 group-hover:text-[#2e7d32] transition-colors flex-1 text-sm md:text-base">Apakah ECOPIL aman untuk kulit sensitif?</span>
                <span id="icon1" class="transform transition-transform duration-300 font-bold text-[#2e7d32] bg-green-50 w-6 h-6 md:w-7 md:h-7 flex items-center justify-center rounded-full text-sm flex-shrink-0">▼</span>
            </button>
            <div id="faq1" class="hidden p-3.5 md:p-4 text-slate-600 text-sm leading-relaxed border-t border-slate-50 bg-slate-50/30">
                Ya, ECOPIL diformulasikan tanpa SLS (Non-Iritan) sehingga sangat lembut dan aman digunakan untuk tangan dengan kulit sensitif. Tidak menyebabkan kulit kering atau mengelupas.
            </div>
        </div>

        {{-- FAQ Item 2 --}}
        <div class="group bg-white border border-slate-200 rounded-lg md:rounded-xl overflow-hidden transition-all duration-300 hover:border-[#2e7d32]/30 hover:shadow-md">
            <button onclick="toggleFaq('faq2', 'icon2')" class="w-full text-left p-3.5 md:p-4 flex justify-between items-center gap-3 focus:outline-none transition-colors">
                <span class="font-bold text-slate-800 group-hover:text-[#2e7d32] transition-colors flex-1 text-sm md:text-base">Terbuat dari bahan apa saja ECOPIL?</span>
                <span id="icon2" class="transform transition-transform duration-300 font-bold text-[#2e7d32] bg-green-50 w-6 h-6 md:w-7 md:h-7 flex items-center justify-center rounded-full text-sm flex-shrink-0">▼</span>
            </button>
            <div id="faq2" class="hidden p-3.5 md:p-4 text-slate-600 text-sm leading-relaxed border-t border-slate-50 bg-slate-50/30">
                ECOPIL menggunakan bahan aktif alami berkualitas, yaitu ekstrak sabut pinang, buah lerak, dan eco-enzyme yang diproses secara terstandarisasi untuk menghasilkan daya cuci optimal.
            </div>
        </div>

        {{-- FAQ Item 3 --}}
        <div class="group bg-white border border-slate-200 rounded-lg md:rounded-xl overflow-hidden transition-all duration-300 hover:border-[#2e7d32]/30 hover:shadow-md">
            <button onclick="toggleFaq('faq3', 'icon3')" class="w-full text-left p-3.5 md:p-4 flex justify-between items-center gap-3 focus:outline-none transition-colors">
                <span class="font-bold text-slate-800 group-hover:text-[#2e7d32] transition-colors flex-1 text-sm md:text-base">Apakah sudah memiliki izin legalitas?</span>
                <span id="icon3" class="transform transition-transform duration-300 font-bold text-[#2e7d32] bg-green-50 w-6 h-6 md:w-7 md:h-7 flex items-center justify-center rounded-full text-sm flex-shrink-0">▼</span>
            </button>
            <div id="faq3" class="hidden p-3.5 md:p-4 text-slate-600 text-sm leading-relaxed border-t border-slate-50 bg-slate-50/30">
                Tentu, produk ECOPIL terjamin dan telah memiliki Nomor Induk Berusaha (NIB): 2805250057465, dan kami terus memproses perizinan edar resmi lainnya untuk keamanan konsumen.
            </div>
        </div>
    </div>
</section>

<script>
    function toggleFaq(id, iconId) {
        const content = document.getElementById(id);
        const icon = document.getElementById(iconId);
        if (!content) return;

        content.classList.toggle('hidden');
        if (icon) icon.classList.toggle('rotate-180');
    }
</script>