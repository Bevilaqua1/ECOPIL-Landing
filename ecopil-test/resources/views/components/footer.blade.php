    <footer class="bg-slate-950 py-12 md:py-16 text-white mt-10 relative overflow-hidden">
        {{-- Gradient pembatas dari section sebelumnya --}}
        <div class="absolute top-0 left-0 right-0 h-20 bg-gradient-to-b from-white/5 to-transparent hidden md:block"></div>
        
        {{-- Aksen dekoratif tipis di latar belakang --}}
        <div class="absolute bottom-0 right-0 w-64 h-64 bg-[#2e7d32]/10 rounded-full blur-3xl -mb-32 -mr-32"></div>

        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-12 mb-8 md:mb-12 border-b border-slate-800 pb-8 md:pb-12 relative z-10">
            {{-- Kolom 1: Branding --}}
            <div>
                <div class="flex items-center gap-3 mb-6 group">
                    <img src="{{ asset('images/logo_ecopil.jpg') }}"
                        alt="Logo ECOPIL sabun cuci piring ramah lingkungan Jambi"
                        class="w-10 h-10 rounded-full object-cover border border-slate-700 group-hover:border-[#2e7d32] transition-colors">
                    <h3 class="font-extrabold text-2xl text-[#2e7d32] tracking-tighter">ECOPIL</h3>
                </div>
                <p class="text-slate-400 text-sm leading-relaxed pr-0 md:pr-6">
                    Sabun cuci piring natural, clean, & fresh. Solusi ramah lingkungan untuk kebersihan rumah tangga Anda dengan memanfaatkan potensi sumber daya lokal seperti sabut pinang dan lerak.
                </p>
            </div>

            {{-- Kolom 2: Navigasi --}}
            <div>
                <h4 class="font-bold mb-6 text-lg text-white">Navigasi</h4>
                <ul class="space-y-3 text-sm text-slate-400">
                    <li><a href="{{ url('/') . '#beranda' }}" class="hover:text-[#FFA02E] transition-colors flex items-center gap-2"><span>›</span> Beranda</a></li>
                    <li><a href="{{ url('/') . '#produk' }}" class="hover:text-[#FFA02E] transition-colors flex items-center gap-2"><span>›</span> Katalog Produk</a></li>
                    <li><a href="{{ url('/') . '#artikel' }}" class="hover:text-[#FFA02E] transition-colors flex items-center gap-2"><span>›</span> Artikel</a></li>
                    <li><a href="{{ url('/') . '#testimoni' }}" class="hover:text-[#FFA02E] transition-colors flex items-center gap-2"><span>›</span> Testimoni</a></li>
                    <li><a href="{{ url('/') . '#faq' }}" class="hover:text-[#FFA02E] transition-colors flex items-center gap-2"><span>›</span> FAQ</a></li>
                    <li><a href="{{ url('/') . '#pesan' }}" class="hover:text-[#FFA02E] transition-colors flex items-center gap-2"><span>›</span> Pesan</a></li>
                </ul>
            </div>

            {{-- Kolom 3: Kontak --}}
            <div>
                <h4 class="font-bold mb-6 text-lg text-white">Hubungi Kami</h4>
                <ul class="space-y-5 text-sm text-slate-400">
                    <li class="flex items-start gap-3">
                        <span class="text-[#FFA02E] text-lg">📍</span>
                        <a href="https://www.google.com/maps/place/Jl.+Sunan+Bonang+No.54,+RT.18,+Simpang+III+Sipin,+Kec.+Kota+Baru,+Kota+Jambi,+Jambi+36129/@-1.6301685,103.5910558,17z/..." 
                           target="_blank" 
                           class="hover:text-white transition-colors leading-relaxed">
                            Jalan Sunan Bonang No.54, RT.18/RW.5, Simpang III Sipin, Kota Baru, Jambi
                        </a>
                    </li>
                    <li class="flex items-center gap-3 group">
                        <div class="p-1.5 bg-slate-800 rounded-lg group-hover:bg-[#2e7d32] transition-colors">
                            <img src="{{ asset('images/Instagram_icon.png') }}" alt="Instagram ECOPIL" class="w-5 h-5 object-contain">
                        </div>
                        <a href="https://instagram.com/ecopil.id" target="_blank" class="hover:text-white transition-colors">@ecopil.id</a>
                    </li>
                    <li class="flex items-center gap-3 group">
                        <div class="p-1.5 bg-slate-800 rounded-lg group-hover:bg-[#2e7d32] transition-colors">
                            <img src="{{ asset('images/Gmail_icon.png') }}" alt="Gmail ECOPIL" class="w-5 h-5 object-contain">
                        </div>
                        <p class="group-hover:text-white transition-colors">hello.ecopil@gmail.com</p>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Bottom Footer --}}
        <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center text-xs text-slate-500 uppercase tracking-widest font-medium">
            <p>&copy; 2026 ECOPIL Jambi. Seluruh hak cipta dilindungi.</p>
        </div>
    </footer>