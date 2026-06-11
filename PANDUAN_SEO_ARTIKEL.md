# 📄 PANDUAN STRUKTUR SEO ARTIKEL ECOPIL

## 🎯 Pengenalan
Dokumen ini menjelaskan struktur **meta tag**, **heading hierarchy (H1, H2, H3)**, **description**, **keywords**, dan **alt text** untuk setiap artikel ECOPIL agar memenuhi standar SEO yang baik.

---

## 📍 LOKASI SEMUA ELEMEN SEO

### 1️⃣ **DATA ARTIKEL MASTER** 
**File:** `app/Http/Controllers/ArtikelController.php`

Semua data artikel disimpan dalam array di method `allArticles()`. Setiap artikel memiliki field:

```php
[
    'slug'        => 'URL-slug-artikel',              // URL friendly
    'image'       => 'images/artikel/artikel-1.png', // Path gambar
    'alt'         => 'Deskripsi alt text gambar',    // Alt text untuk gambar
    'label'       => 'Kategori Artikel',             // Badge kategori
    'title'       => 'Judul Artikel Lengkap',        // Judul artikel (dipakai jadi H1)
    'excerpt'     => 'Ringkasan pendek artikel',     // Preview di halaman daftar
    'description' => 'Meta description (60-160 char)',// Untuk <meta name="description">
    'keywords'    => 'keyword1, keyword2, ...',       // Untuk <meta name="keywords">
]
```

**Contoh Artikel 1:**
```php
[
    'slug'        => 'cara-memilih-sabun-cuci-piring-aman-keluarga-lingkungan',
    'image'       => 'images/artikel/artikel-1.png',
    'alt'         => 'Panduan lengkap cara memilih sabun cuci piring aman untuk keluarga dan lingkungan - ECOPIL',
    'label'       => 'Tips Keluarga',
    'title'       => 'Cara Memilih Sabun Cuci Piring yang Aman untuk Keluarga dan Lingkungan',
    'excerpt'     => 'Sabun cuci piring bukan sekadar soal bersih. Kenali bahan berbahaya yang perlu dihindari dan temukan pilihan yang aman untuk kulit dan lingkungan.',
    'description' => 'Panduan lengkap memilih sabun cuci piring yang aman untuk kulit sensitif dan ramah lingkungan. Ketahui bahan berbahaya yang harus dihindari.',
    'keywords'    => 'sabun cuci piring aman, sabun ramah lingkungan, sabun untuk kulit sensitif, sabun alami, ECOPIL',
]
```

---

### 2️⃣ **META TAGS DI HALAMAN DETAIL ARTIKEL**
**File:** `resources/views/artikel/show.blade.php`

Meta tags ada di **bagian atas file** (setelah `@extends`):

```blade
@extends('layouts.app')

{{-- ═══════════════════════════════════════════════════════════════
     SEO Meta Tags untuk Setiap Artikel
     ═══════════════════════════════════════════════════════════════ --}}
@section('title', $article['title'] . ' — ECOPIL | Sabun Cuci Piring Alami')
@section('description', $article['description'])
@section('keywords', $article['keywords'])
@section('og_title', $article['title'])
@section('og_description', $article['description'])
@section('og_image', asset($article['image']))
```

**Penjelasan:**
| Meta Tag | Fungsi | Contoh |
|----------|--------|---------|
| `title` | Judul di tab browser & Google | "Cara Memilih Sabun Cuci Piring... — ECOPIL \| Sabun Cuci Piring Alami" |
| `description` | Deskripsi di hasil pencarian Google | "Panduan lengkap memilih sabun cuci piring..." |
| `keywords` | Kata kunci pencarian | "sabun cuci piring aman, sabun ramah lingkungan..." |
| `og_title` | Judul saat dibagikan di sosial media | "Cara Memilih Sabun Cuci Piring..." |
| `og_description` | Deskripsi saat dibagikan di sosial media | "Panduan lengkap memilih sabun cuci piring..." |
| `og_image` | Gambar saat dibagikan di sosial media | URL gambar artikel |

---

### 3️⃣ **HEADING HIERARCHY (H1, H2, H3)**
**File:** `resources/views/artikel/show.blade.php`

Struktur heading dalam konten artikel:

```blade
<article class="...">
    <div class="...">
        {{-- H1: Judul Utama (dari $article['title']) --}}
        <h1 class="text-3xl md:text-4xl font-extrabold ...">
            {{ $article['title'] }}
        </h1>

        {{-- H2: Subheading utama --}}
        <h2>Kenapa Sabun Cuci Piring yang Kamu Pakai Itu Penting?</h2>

        {{-- H3: Subheading level 2 --}}
        <h3>Kandungan Kimia yang Perlu Diwaspadai</h3>

        {{-- H3: Subheading level 2 (lainnya) --}}
        <h3>Dampaknya ke Lingkungan</h3>

        {{-- H2: Subheading utama (lainnya) --}}
        <h2>Tips Memilih Sabun Cuci Piring yang Lebih Aman</h2>

        {{-- H2: Kesimpulan --}}
        <h2>Kesimpulan</h2>
    </div>
</article>
```

**Aturan Heading:**
- ✅ **H1**: Hanya 1 per halaman (judul artikel utama)
- ✅ **H2**: Untuk bagian utama konten (2-5 per artikel)
- ✅ **H3**: Untuk sub-bagian di dalam H2 (0-3 per H2)
- ❌ **Jangan**: Skip dari H1 ke H3 langsung

---

### 4️⃣ **ALT TEXT DI SEMUA GAMBAR**
**File:** Berbagai file (artikel/show.blade.php, artikel/index.blade.php, components/article.blade.php)

#### **A. Gambar Thumbnail Utama di Halaman Detail**
```blade
<img src="{{ asset($article['image']) }}"
     alt="{{ $article['alt'] }}"
     class="w-full h-full object-cover"
     loading="lazy">
```

**Contoh Alt Text:**
```
"Panduan lengkap cara memilih sabun cuci piring aman untuk keluarga dan lingkungan - ECOPIL"
```

#### **B. Gambar Inline di Dalam Artikel**
```blade
<img src="{{ asset('images/artikel/artikel-1-inline.png') }}"
     alt="Checklist tips memilih sabun cuci piring aman: baca label, hindari kimia keras, pilih bahan alami biodegradable"
     class="w-full object-cover rounded-xl"
     loading="lazy">
```

#### **C. Gambar di Halaman Daftar Artikel**
```blade
<img src="{{ asset($article['image']) }}"
     alt="{{ $article['alt'] }}"
     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
     loading="lazy">
```

#### **D. Gambar di Landing Page (Components)**
```blade
<img src="{{ asset($article['image']) }}"
     alt="{{ $article['alt'] }}"
     class="w-full h-full object-cover"
     loading="lazy">
```

**Standar Alt Text:**
- 📝 Deskriptif dan detail (tidak hanya 1-2 kata)
- 🎯 Jelaskan isi/konteks gambar, bukan "gambar"
- 🔑 Masukkan keyword jika relevan
- ✅ Panjang ideal: 10-15 kata

---

## 📋 CHECKLIST SEO ARTIKEL

Untuk setiap artikel baru, pastikan:

### **Di `ArtikelController.php`:**
- [ ] `slug` - URL friendly, gunakan kebab-case
- [ ] `image` - Path gambar ada di folder `public/images/artikel/`
- [ ] `alt` - Deskripsi detail gambar (15-20 kata)
- [ ] `label` - Kategori artikel (Tips Keluarga/Edukasi/Kesehatan/Fakta & Mitos)
- [ ] `title` - Judul menarik dengan keyword (50-60 karakter)
- [ ] `excerpt` - Ringkasan 120-160 karakter
- [ ] `description` - Meta description 60-160 karakter, mengandung keyword
- [ ] `keywords` - 5-10 keyword dipisahkan koma

### **Di View `artikel/show.blade.php`:**
- [ ] Meta tags di bagian atas (@section)
- [ ] H1 untuk judul utama
- [ ] H2 untuk bagian utama (2-5 bagian)
- [ ] H3 untuk sub-bagian jika ada
- [ ] Alt text di semua gambar
- [ ] Loading="lazy" di semua img tag
- [ ] Gambar inline memiliki alt text yang detail

### **Di View `artikel/index.blade.php`:**
- [ ] Alt text di thumbnail gambar

### **Di View `components/article.blade.php` (Landing Page):**
- [ ] Alt text di card artikel

---

## 🔍 CONTOH STRUKTUR LENGKAP ARTIKEL 1

### **1. Data Controller:**
```php
[
    'slug'        => 'cara-memilih-sabun-cuci-piring-aman-keluarga-lingkungan',
    'image'       => 'images/artikel/artikel-1.png',
    'alt'         => 'Panduan lengkap cara memilih sabun cuci piring aman untuk keluarga dan lingkungan - ECOPIL',
    'label'       => 'Tips Keluarga',
    'title'       => 'Cara Memilih Sabun Cuci Piring yang Aman untuk Keluarga dan Lingkungan',
    'excerpt'     => 'Sabun cuci piring bukan sekadar soal bersih. Kenali bahan berbahaya yang perlu dihindari dan temukan pilihan yang aman untuk kulit dan lingkungan.',
    'description' => 'Panduan lengkap memilih sabun cuci piring yang aman untuk kulit sensitif dan ramah lingkungan. Ketahui bahan berbahaya yang harus dihindari.',
    'keywords'    => 'sabun cuci piring aman, sabun ramah lingkungan, sabun untuk kulit sensitif, sabun alami, ECOPIL',
]
```

### **2. Meta Tags di Browser:**
- 📌 **Page Title:** "Cara Memilih Sabun Cuci Piring... — ECOPIL | Sabun Cuci Piring Alami"
- 📌 **Meta Description:** "Panduan lengkap memilih sabun cuci piring yang aman untuk kulit sensitif dan ramah lingkungan..."
- 📌 **Meta Keywords:** "sabun cuci piring aman, sabun ramah lingkungan, sabun untuk kulit sensitif, sabun alami, ECOPIL"

### **3. Heading Structure:**
```
H1: Cara Memilih Sabun Cuci Piring yang Aman untuk Keluarga dan Lingkungan
  H2: Kenapa Sabun Cuci Piring yang Kamu Pakai Itu Penting?
  H2: Bahaya Tersembunyi di Balik Sabun Cuci Piring Biasa
    H3: Kandungan Kimia yang Perlu Diwaspadai
    H3: Dampaknya ke Lingkungan
  H2: Tips Memilih Sabun Cuci Piring yang Lebih Aman
  H2: ECOPIL: Sabun Cuci Piring yang Aman dan Ramah Lingkungan
  H2: Kesimpulan
```

### **4. Alt Text di Gambar:**
- 📷 **Thumbnail:** "Panduan lengkap cara memilih sabun cuci piring aman untuk keluarga dan lingkungan - ECOPIL"
- 📷 **Inline 1:** "Checklist tips memilih sabun cuci piring aman: baca label, hindari kimia keras, pilih bahan alami biodegradable"

---

## 🚀 TIPS OPTIMASI SEO LEBIH LANJUT

1. **Internal Linking:** Tautkan artikel satu sama lain jika relevan
   ```blade
   <a href="{{ route('artikel.show', 'sabun-cuci-piring-alami-vs-kimia-untuk-keluarga') }}">
       Baca perbandingan sabun alami vs kimia
   </a>
   ```

2. **Meta Description:** Usahakan muncul di Google SERP
   - Panjang: 60-160 karakter
   - Mulai dengan verb (Pelajari, Ketahui, Temukan, dll)
   - Masukkan keyword utama di awal

3. **Keyword Research:**
   - Gunakan tools: Google Keyword Planner, Ubersuggest, SEMrush
   - Target 1 keyword utama per artikel
   - Sisipkan di: title (H1), description, keywords, 2-3x di body

4. **Image Optimization:**
   - Ukuran file: < 100 KB untuk web
   - Resolusi: 800x600 minimal
   - Format: PNG/JPG (teroptimasai)
   - Alt text: detail dan keyword-rich

5. **Structured Data (Future):**
   - Tambahkan JSON-LD Schema untuk Article
   - Bantu Google memahami konten lebih baik
   - Tingkatkan CTR di search results

---

## 📞 PERTANYAAN YANG SERING DIAJUKAN

**Q: Berapa panjang ideal meta description?**
A: 60-160 karakter. Jika terlalu panjang, Google akan potong.

**Q: Boleh H1 lebih dari 1?**
A: Sebaiknya hanya 1 H1 per halaman untuk SEO yang optimal.

**Q: Alt text perlu panjang?**
A: Ya, minimal 10-15 kata untuk deskripsi yang baik. Hindari keyword stuffing.

**Q: Apakah keywords masih penting?**
A: Masih, tapi tidak seberat dulu. Fokus pada content quality dan user experience.

**Q: Bagaimana kalau gambar inline tidak ada?**
A: Tetap buat dulu, atau gunakan placeholder sampai gambar ready.

---

## 📝 NOTES UNTUK TEAM LEADER

✅ **Sekarang sudah diterapkan:**
- Meta tags lengkap di setiap artikel
- H1, H2, H3 terstruktur dengan benar
- Alt text deskriptif di semua gambar
- Description & keywords di setiap artikel
- Open Graph tags untuk social sharing
- Loading="lazy" untuk performa

📊 **Metrik SEO yang bisa diukur:**
- Gunakan Google Search Console untuk track ranking
- Monitor CTR, impressions, average position
- Analisis dengan Google Analytics 4

🎯 **Target:** Artikel bisa ranking di halaman 1 Google dalam 2-3 bulan jika strategi keyword tepat.

---

*Panduan ini last updated: 14 Mei 2026*
*Untuk update lebih lanjut, hubungi tim development.*
