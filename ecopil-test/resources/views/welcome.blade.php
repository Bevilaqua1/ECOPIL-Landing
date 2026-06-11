@extends('layouts.app')

{{-- SEO Meta: Fokus pada Solusi "Tangan Lembut" untuk meningkatkan Klik --}}
@section('title', 'ECOPIL | Sabun Cuci Piring Ramah Lingkungan dari Jambi')
@section('description', 'ECOPIL merupakan sabun cuci piring alami berbahan sabut pinang dan lerak yang aman untuk kulit, efektif mengangkat lemak, dan ramah lingkungan.')
@section('keywords', 'sabun cuci piring alami, sabun ramah lingkungan, sabun lerak, sabun sabut pinang, ECOPIL Jambi')
@section('og_title', 'ECOPIL - Sabun Cuci Piring Alami Ramah Lingkungan')
@section('og_description', 'Gunakan ECOPIL untuk mencuci piring lebih bersih tanpa membuat tangan kasar.')
@section('og_image', asset('images/Ecopil.png'))
@section('content')
    {{-- Pembungkus utama dengan animasi masuk agar tidak membosankan --}}
    <div class="animate-fade-in">
        
        {{-- Hero Section: Pintu utama penentu konversi --}}
        @include('components.hero')

        {{-- Features: Memberikan alasan logis untuk tetap scroll --}}
        <div class="relative overflow-hidden">
            {{-- Dekorasi latar belakang lembut untuk memecah kebosanan --}}
            <div class="absolute top-0 left-0 w-full h-20 bg-gradient-to-b from-white to-gray-50"></div>
            @include('components.features')
        </div>

        {{-- Products: Menampilkan varian dan harga --}}
        @include('components.products')

        {{-- Order: Call to Action utama --}}
        <div class="bg-gray-50 py-10">
            @include('components.order')
        </div>

        {{-- Testimonials: Membangun kepercayaan (Social Proof) --}}
        @include('components.testimonials')

        {{-- Article: Konten edukasi tentang ECOPIL --}}
        @include('components.article')

        {{-- FAQ: Menghilangkan keraguan terakhir sebelum beli --}}
        <div class="bg-white">
            @include('components.faq')
        </div>

    </div>
@endsection

@push('scripts')
<script>
    // Script tambahan khusus halaman beranda jika diperlukan
    document.addEventListener('DOMContentLoaded', function() {
        console.log('ECOPIL Landing Page Loaded with Fresh Design');
    });
</script>
@endpush