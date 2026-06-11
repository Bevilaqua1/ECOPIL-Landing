<footer class="bg-slate-950 py-10 md:py-16 text-white mt-10 relative overflow-hidden">
    {{-- Aksen dekoratif tipis di latar belakang --}}
    <div class="absolute bottom-0 right-0 w-64 h-64 bg-[#2e7d32]/10 rounded-full blur-3xl -mb-32 -mr-32"></div>

    <div
        class="max-w-6xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-6 gap-y-6 md:gap-12 mb-8 md:mb-12 border-b border-slate-800 pb-8 md:pb-12 relative z-10">
        {{-- Kolom 1: Branding (full width di mobile, 1 kolom di desktop) --}}
        <div class="col-span-1 sm:col-span-2 md:col-span-1">
            <div class="flex items-center gap-2.5 mb-3 md:mb-6 group">
                <img src="{{ asset('images/logo_ecopil.jpg') }}"
                    alt="Logo ECOPIL sabun cuci piring ramah lingkungan Jambi"
                    class="w-8 h-8 md:w-10 md:h-10 rounded-full object-cover border border-slate-700 group-hover:border-[#2e7d32] transition-colors">
                <h3 class="font-extrabold text-xl md:text-2xl text-[#2e7d32] tracking-tighter">ECOPIL</h3>
            </div>
            <p class="text-slate-400 text-xs md:text-sm leading-relaxed pr-0 md:pr-6">
                Sabun cuci piring natural, clean, & fresh. Solusi ramah lingkungan untuk kebersihan rumah tangga Anda
                dengan memanfaatkan potensi sumber daya lokal seperti sabut pinang dan lerak.
            </p>
        </div>

        {{-- Kolom 2: Navigasi --}}
        <div>
            <h4 class="font-bold mb-3 md:mb-6 text-base md:text-lg text-white">Navigasi</h4>
            <ul class="space-y-2 md:space-y-3 text-xs md:text-sm text-slate-400">
                <li><a href="{{ request()->is('/') ? '#beranda' : '/#beranda' }}"
                        class="hover:text-[#FFA02E] transition-colors flex items-center gap-2"><span>›</span>
                        Beranda</a></li>
                <li><a href="{{ request()->is('/') ? '#produk' : '/#produk' }}"
                        class="hover:text-[#FFA02E] transition-colors flex items-center gap-2"><span>›</span> Katalog
                        Produk</a></li>
                <li><a href="{{ request()->is('/') ? '#testimoni' : '/#testimoni' }}"
                        class="hover:text-[#FFA02E] transition-colors flex items-center gap-2"><span>›</span>
                        Testimoni</a></li>
                <li><a href="{{ request()->is('/') ? '#faq' : '/#faq' }}"
                        class="hover:text-[#FFA02E] transition-colors flex items-center gap-2"><span>›</span> FAQ</a>
                </li>
            </ul>
        </div>

        {{-- Kolom 3: Kontak --}}
        <div>
            <h4 class="font-bold mb-3 md:mb-6 text-base md:text-lg text-white">Hubungi Kami</h4>
            <ul class="space-y-3 md:space-y-5 text-xs md:text-sm text-slate-400">
                <li class="flex items-start gap-2.5 md:gap-3">
                    <span class="text-[#FFA02E] text-base md:text-lg shrink-0">📍</span>
                    <a href="https://www.google.com/maps/place/Jl.+Sunan+Bonang+No.54,+RT.18,+Simpang+III+Sipin,+Kec.+Kota+Baru,+Kota+Jambi,+Jambi+36129/@-1.6306725,103.5903906,17z/data=!4m6!3m5!1s0x2e25862a6887cead:0xd9e5c505f8c6e5ba!8m2!3d-1.6301685!4d103.5936307!16s%2Fg%2F11pvmlt269?entry=ttu&g_ep=EgoyMDI2MDYwMy4xIKXMDSoASAFQAw%3D%3D"
                        target="_blank" class="hover:text-white transition-colors leading-relaxed">
                        Jalan Sunan Bonang No.54, RT.18/RW.5, Simpang III Sipin, Kota Baru, Jambi
                    </a>
                </li>
                <li class="flex items-center gap-2.5 md:gap-3 group">
                    <div class="p-1 md:p-1.5 bg-slate-800 rounded-lg group-hover:bg-[#2e7d32] transition-colors shrink-0">
                        <img src="{{ asset('images/Instagram_icon.png') }}" alt="Instagram ECOPIL"
                            class="w-4 h-4 md:w-5 md:h-5 object-contain">
                    </div>
                    <a href="https://instagram.com/ecopil.id" target="_blank"
                        class="hover:text-white transition-colors">@ecopil.id</a>
                </li>
                <li class="flex items-center gap-2.5 md:gap-3 group">
                    <div class="p-1 md:p-1.5 bg-slate-800 rounded-lg group-hover:bg-[#2e7d32] transition-colors shrink-0">
                        <img src="{{ asset('images/Gmail_icon.png') }}" alt="Gmail ECOPIL"
                            class="w-4 h-4 md:w-5 md:h-5 object-contain">
                    </div>
                    <p class="group-hover:text-white transition-colors">hello.ecopil@gmail.com</p>
                </li>
            </ul>
        </div>
    </div>

    {{-- Bottom Footer --}}
    <div
        class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center text-[10px] md:text-xs text-slate-500 uppercase tracking-widest font-medium">
        <p>&copy; 2026 ECOPIL Jambi. Seluruh hak cipta dilindungi.</p>
    </div>
</footer>