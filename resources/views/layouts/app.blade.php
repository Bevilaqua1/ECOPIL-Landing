<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- SEO & Metadata --}}
    <meta name="theme-color" content="#2e7d32">
    @php
        $metaTitle = trim($__env->yieldContent('og_title') ?: $__env->yieldContent('title') ?: 'ECOPIL | Sabun Cuci Piring Alami - Lembut di Tangan');
        $metaDescription = trim($__env->yieldContent('og_description') ?: $__env->yieldContent('description') ?: 'Bosan tangan kasar? Pakai ECOPIL. Sabun cuci piring alami dari sabut pinang & lerak.');
        $metaKeywords = trim($__env->yieldContent('keywords')) ?: 'sabun cuci piring ramah lingkungan jambi, ecopil, sabun cuci piring alami';
        $metaHeadline = trim($__env->yieldContent('page_headline')) ?: 'Cuci Piring Bersih - Tangan Tetap Lembut dengan Kekuatan Alam';
        $metaSection = trim($__env->yieldContent('page_section')) ?: 'Pilih Varian Sabun Cuci Piring Ramah Lingkungan ECOPIL';
        $metaImage = trim($__env->yieldContent('og_image')) ?: asset('images/Ecopil.png');
    @endphp

    <title>{{ $__env->yieldContent('title', 'ECOPIL | Sabun Cuci Piring Alami - Lembut di Tangan') }}</title>
    <meta name="description" content="{{ $__env->yieldContent('description', 'Bosan tangan kasar? Pakai ECOPIL. Sabun cuci piring alami dari sabut pinang & lerak.') }}" />
    <meta name="keywords" content="{{ $metaKeywords }}" />
    <meta name="headline" content="{{ $metaHeadline }}" />
    <meta name="section" content="{{ $metaSection }}" />

    {{-- Open Graph Meta Tags --}}
    <meta property="og:title" content="{{ $metaTitle }}" />
    <meta property="og:description" content="{{ $metaDescription }}" />
    <meta property="og:image" content="{{ $metaImage }}" />
    <meta property="og:type" content="website" />

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    {{-- Tailwind & Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Poppins', sans-serif; }
        
        /* Animasi Kustom yang Tidak Ada di Tailwind Default */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in { animation: fadeIn 0.8s ease-out forwards; }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }
        .animate-float { animation: float 3s ease-in-out infinite; }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #2e7d32; border-radius: 10px; }
    </style>
    
    @yield('meta')
</head>
<body class="text-slate-800 antialiased bg-white selection:bg-[#2e7d32] selection:text-white">

    {{-- Navbar Component --}}
    @include('components.navbar')

    {{-- Main Content Space --}}
    <main id="main-content">
        @yield('content')
    </main>

    {{-- Footer Component --}}
    @include('components.footer')

    {{-- Global Scripts --}}
    <script>
        /**
         * Fungsi Universal untuk FAQ & Accordion
         * Memastikan elemen yang diklik tampil/sembunyi dengan halus
         */
        function toggleAccordion(contentId, iconId) {
            const content = document.getElementById(contentId);
            const icon = document.getElementById(iconId);
            
            if (content) {
                const isHidden = content.classList.contains('hidden');
                
                // Reset semua FAQ lain jika ingin sistem "one-at-a-time" (opsional)
                // document.querySelectorAll('[id^="faq"]').forEach(el => el.classList.add('hidden'));

                if (isHidden) {
                    content.classList.remove('hidden');
                    if(icon) icon.classList.add('rotate-180');
                } else {
                    content.classList.add('hidden');
                    if(icon) icon.classList.remove('rotate-180');
                }
            }
        }

        // Aliasing agar tetap kompatibel dengan panggilan fungsi lama
        window.toggleFaq = toggleAccordion;
        window.toggleSection = toggleAccordion;

        /**
         * Efek Navbar saat di-scroll
         */
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (nav) {
                if (window.scrollY > 20) {
                    nav.classList.add('shadow-lg', 'bg-white/90', 'backdrop-blur-md', 'py-2');
                    nav.classList.remove('py-4');
                } else {
                    nav.classList.remove('shadow-lg', 'bg-white/90', 'backdrop-blur-md', 'py-2');
                    nav.classList.add('py-4');
                }
            }
        });
    </script>
    
    @stack('scripts')

</body>
</html>