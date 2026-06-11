<nav class="bg-white/80 backdrop-blur-md py-4 sticky top-0 z-50 transition-all duration-300 border-b border-gray-100">
    <div class="max-w-6xl mx-auto px-6 flex justify-between items-center">
        {{-- Logo Section --}}
        <a href="/" class="flex items-center gap-3 group">
            <div class="relative">
                <img src="{{ asset('images/logo_ecopil.jpg') }}"
                     alt="Logo ECOPIL – sabun cuci piring ramah lingkungan"
                     class="w-12 h-12 rounded-full object-cover border-2 border-[#2e7d32] group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 rounded-full shadow-inner"></div>
            </div>
            <span class="font-extrabold text-2xl text-[#2e7d32] tracking-tighter">ECOPIL</span>
        </a>

        {{-- Desktop Navigation --}}
        <div class="hidden md:flex items-center space-x-8 font-semibold text-sm">
            <a href="{{ url('/') . '#beranda' }}" class="text-gray-600 hover:text-[#2e7d32] transition-colors relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-[#2e7d32] hover:after:w-full after:transition-all">Beranda</a>
            <a href="{{ url('/') . '#produk' }}" class="text-gray-600 hover:text-[#2e7d32] transition-colors relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-[#2e7d32] hover:after:w-full after:transition-all">Produk</a>
            <a href="{{ url('/') . '#artikel' }}" class="text-gray-600 hover:text-[#2e7d32] transition-colors relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-[#2e7d32] hover:after:w-full after:transition-all">Artikel</a>
            <a href="{{ url('/') . '#testimoni' }}" class="text-gray-600 hover:text-[#2e7d32] transition-colors relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-[#2e7d32] hover:after:w-full after:transition-all">Testimoni</a>
            <a href="{{ url('/') . '#faq' }}" class="text-gray-600 hover:text-[#2e7d32] transition-colors relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-[#2e7d32] hover:after:w-full after:transition-all">FAQ</a>
            
            {{-- Tombol CTA Desktop --}}
            <a href="{{ url('/') . '#pesan' }}" class="bg-[#2e7d32] hover:bg-[#1b5e20] text-white px-6 py-2.5 rounded-xl font-bold transition-all shadow-md hover:shadow-lg hover:-translate-y-0.5 active:scale-95">
                Cara Pesan
            </a>
        </div>

        {{-- Mobile Menu Button --}}
        <div class="md:hidden">
            <button id="mobile-menu-button" type="button" aria-controls="mobile-menu" aria-expanded="false" class="text-[#2e7d32] focus:outline-none p-2">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu Dropdown --}}
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 px-6 py-6 space-y-4 shadow-xl">
        <a href="{{ url('/') . '#beranda' }}" class="block text-lg font-bold text-gray-800 hover:text-[#2e7d32]">Beranda</a>
        <a href="{{ url('/') . '#produk' }}" class="block text-lg font-bold text-gray-800 hover:text-[#2e7d32]">Produk</a>
        <a href="{{ url('/') . '#artikel' }}" class="block text-lg font-bold text-gray-800 hover:text-[#2e7d32]">Artikel</a>
        <a href="{{ url('/') . '#testimoni' }}" class="block text-lg font-bold text-gray-800 hover:text-[#2e7d32]">Testimoni</a>
        <a href="{{ url('/') . '#faq' }}" class="block text-lg font-bold text-gray-800 hover:text-[#2e7d32]">FAQ</a>
        <a href="{{ url('/') . '#pesan' }}" class="block w-full text-center bg-[#FFA02E] text-white py-3 rounded-xl font-extrabold shadow-md">
            Pesan Via WhatsApp
        </a>
    </div>
</nav>

<script>
    // Logic untuk toggle mobile menu
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');

    if (btn && menu) {
        btn.addEventListener('click', () => {
            const isOpen = !menu.classList.contains('hidden');
            menu.classList.toggle('hidden');
            btn.setAttribute('aria-expanded', String(!isOpen));
        });

        // Menutup menu saat link di-klik (untuk mobile)
        const mobileLinks = menu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
                btn.setAttribute('aria-expanded', 'false');
            });
        });
    }
</script>