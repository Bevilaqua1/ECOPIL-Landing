<section id="pesan" class="bg-gradient-to-b from-white to-green-50 py-12 md:py-24 relative overflow-hidden">
    {{-- Gradient pembatas dari section sebelumnya --}}
    <div class="absolute -top-20 left-0 right-0 h-20 bg-gradient-to-b from-transparent to-white/5 md:hidden"></div>
    
    {{-- Dekorasi Latar Belakang --}}
    <div class="absolute top-0 right-0 w-96 h-96 bg-[#FFA02E]/5 rounded-full blur-3xl -mr-48"></div>
    
    <div class="max-w-6xl mx-auto px-6 relative z-10">
        <div class="bg-white rounded-[2.5rem] p-1 shadow-2xl shadow-green-900/5 border border-gray-100 overflow-hidden">
            
            {{-- Header Order dengan Toggle --}}
            <div class="p-8 md:p-12">
                <button onclick="toggleSection('pesan-content', 'pesan-icon')" 
                        class="w-full flex justify-between items-center text-left focus:outline-none group gap-6">
                    <div class="space-y-2 flex-1">
                        <span class="inline-block px-3 py-1 rounded-full bg-orange-100 text-[#FFA02E] text-xs font-bold uppercase tracking-wider">
                            Pesan Sekarang
                        </span>
                        <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900 group-hover:text-[#2e7d32] transition-colors duration-300 leading-tight">
                            Cara Mudah Dapatkan Sabun <br class="hidden md:block">
                            Cuci Piring Alami <span class="text-[#2e7d32]">ECOPIL</span>
                        </h2>
                    </div>
                    <div id="pesan-icon-container" class="bg-green-50 group-hover:bg-[#2e7d32] text-[#2e7d32] group-hover:text-white w-12 h-12 md:w-14 md:h-14 rounded-2xl flex items-center justify-center transition-all duration-500 shadow-sm transform group-hover:rotate-180 flex-shrink-0">
                        <span id="pesan-icon" class="text-xl md:text-2xl font-bold transition-transform duration-300">▼</span>
                    </div>
                </button>

                {{-- Konten Grid yang Muncul Saat Di-toggle --}}
                <div id="pesan-content" class="hidden animate-fade-in pt-12 border-t border-gray-100 mt-10">
                    <p class="text-center text-gray-600 mb-10 max-w-xl mx-auto">
                        Pilih platform favorit Anda untuk memesan. Kami siap melayani pengiriman ke seluruh Indonesia dengan aman.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
                        <!-- Shopee -->
                        <a href="https://shopee.co.id/ecopil.id" target="_blank" rel="noopener noreferrer" 
                           class="relative block bg-orange-50 hover:bg-white border border-orange-100 hover:border-[#FFA02E] p-8 rounded-3xl text-center transition-all duration-300 group shadow-sm hover:shadow-xl hover:-translate-y-2">
                            <div class="w-20 h-20 bg-white rounded-2xl mx-auto mb-6 flex items-center justify-center shadow-md group-hover:shadow-[#FFA02E]/20 transition-all">
                                <img src="{{ asset('images/Shopee_icon.png') }}" alt="Shopee ECOPIL" class="w-10 h-10 object-contain group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <h4 class="font-extrabold text-gray-900 text-xl">Shopee</h4>
                            <p class="text-sm text-gray-600 mt-3 leading-relaxed">Nikmati promo <strong>bebas ongkir</strong> dan keamanan transaksi marketplace.</p>
                            <div class="mt-6 text-[#FFA02E] font-bold text-sm flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                Buka Toko <span>→</span>
                            </div>
                        </a>

                        <!-- Linktree -->
                        <a href="https://linktr.ee/ECOPIL" target="_blank" rel="noopener noreferrer" 
                           class="relative block bg-green-50 hover:bg-white border border-green-100 hover:border-[#2e7d32] p-8 rounded-3xl text-center transition-all duration-300 group shadow-sm hover:shadow-xl hover:-translate-y-2">
                            <div class="w-20 h-20 bg-white rounded-2xl mx-auto mb-6 flex items-center justify-center shadow-md group-hover:shadow-[#2e7d32]/20 transition-all">
                                <span class="text-3xl group-hover:scale-110 transition-transform duration-500">🔗</span>
                            </div>
                            <h4 class="font-extrabold text-gray-900 text-xl">Linktree</h4>
                            <p class="text-sm text-gray-600 mt-3 leading-relaxed">Akses satu pintu ke semua kanal media sosial dan katalog resmi kami.</p>
                            <div class="mt-6 text-[#2e7d32] font-bold text-sm flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                Lihat Semua Link <span>→</span>
                            </div>
                        </a>

                        <!-- WhatsApp -->
                        <a href="https://wa.me/6287743198186" target="_blank" rel="noopener noreferrer" 
                           class="relative block bg-emerald-50 hover:bg-white border border-emerald-100 hover:border-emerald-500 p-8 rounded-3xl text-center transition-all duration-300 group shadow-sm hover:shadow-xl hover:-translate-y-2">
                            <div class="w-20 h-20 bg-white rounded-2xl mx-auto mb-6 flex items-center justify-center shadow-md group-hover:shadow-emerald-500/20 transition-all">
                                <img src="{{ asset('images/WhatsApp_icon.png') }}" alt="WhatsApp ECOPIL" class="w-10 h-10 object-contain group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <h4 class="font-extrabold text-gray-900 text-xl">WhatsApp</h4>
                            <p class="text-sm text-gray-600 mt-3 leading-relaxed">Konsultasi gratis dan pemesanan cepat langsung via Admin ramah kami.</p>
                            <div class="mt-6 text-emerald-600 font-bold text-sm flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                Chat Sekarang <span>→</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>