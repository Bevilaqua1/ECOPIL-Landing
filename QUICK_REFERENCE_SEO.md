# 🎯 QUICK REFERENCE - DIMANA LETAK SETIAP ELEMEN SEO

## 🌍 VISUALISASI HALAMAN ARTIKEL

```
┌─────────────────────────────────────────────────────────────┐
│  BROWSER TAB                                                 │
│  ┌─────────────────────────────────────────────────────────┐│
│  │ 📄 Cara Memilih Sabun Cuci Piring... — ECOPIL           ││
│  └─────────────────────────────────────────────────────────┘│
│     ↓ Dari: $article['title'] di ArtikelController.php      │
└─────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────┐
│  SEARCH ENGINE (Google)                                      │
│  ┌─────────────────────────────────────────────────────────┐│
│  │ 🔗 Cara Memilih Sabun Cuci Piring... — ECOPIL           ││
│  │     ↑ Dari: $article['title']                           ││
│  │                                                          ││
│  │ 📄 Panduan lengkap memilih sabun cuci piring yang       ││
│  │    aman untuk kulit sensitif dan ramah lingkungan...    ││
│  │     ↑ Dari: $article['description']                     ││
│  │                                                          ││
│  │ 🌐 ecopil-test.local/artikel/cara-memilih...           ││
│  │     ↑ Dari: $article['slug']                            ││
│  └─────────────────────────────────────────────────────────┘│
└─────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────┐
│  HALAMAN ARTIKEL (Web)                                       │
│  ┌─────────────────────────────────────────────────────────┐│
│  │                                                          ││
│  │  Breadcrumb: Beranda / Artikel / Cara Memilih...        ││
│  │                                                          ││
│  │  [Tips Keluarga] ← Category Label                        ││
│  │                                                          ││
│  │  H1  Cara Memilih Sabun Cuci Piring yang Aman...       ││
│  │      ↑ Dari: $article['title']                         ││
│  │      ↑ Dalam: <h1>{{ $article['title'] }}</h1>        ││
│  │                                                          ││
│  │  ┌────────────────────────────────────────────────────┐││
│  │  │ [Gambar Thumbnail Artikel]                         │││
│  │  │ Alt: "Panduan lengkap cara memilih sabun cuci..."  │││
│  │  │      ↑ Dari: $article['alt']                       │││
│  │  └────────────────────────────────────────────────────┘││
│  │                                                          ││
│  │  H2  Kenapa Sabun Cuci Piring yang Kamu Pakai...      ││
│  │      Isi konten...                                      ││
│  │                                                          ││
│  │  H2  Bahaya Tersembunyi di Balik Sabun...             ││
│  │      H3  Kandungan Kimia yang Perlu Diwaspadai        ││
│  │      Isi konten...                                      ││
│  │      H3  Dampaknya ke Lingkungan                       ││
│  │      Isi konten...                                      ││
│  │                                                          ││
│  │  ┌────────────────────────────────────────────────────┐││
│  │  │ [Gambar Inline]                                    │││
│  │  │ Alt: "Checklist tips memilih sabun cuci piring...  │││
│  │  └────────────────────────────────────────────────────┘││
│  │                                                          ││
│  │  H2  Tips Memilih Sabun Cuci Piring...                ││
│  │      Isi konten...                                      ││
│  │                                                          ││
│  │  H2  ECOPIL: Sabun Cuci Piring yang Aman...           ││
│  │      Isi konten...                                      ││
│  │                                                          ││
│  │  H2  Kesimpulan                                         ││
│  │      Isi konten...                                      ││
│  │                                                          ││
│  └─────────────────────────────────────────────────────────┘│
└─────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────┐
│  SOCIAL MEDIA PREVIEW                                        │
│  (Facebook, WhatsApp, LinkedIn, dll)                        │
│  ┌─────────────────────────────────────────────────────────┐│
│  │  ┌─────────────────────────────────────────────────────┐│
│  │  │ [Gambar Thumbnail]                                  ││
│  │  │ ↑ Dari: og:image = $article['image']               ││
│  │  └─────────────────────────────────────────────────────┘│
│  │                                                          ││
│  │  Cara Memilih Sabun Cuci Piring...                    ││
│  │  ↑ Dari: og:title = $article['title']                 ││
│  │                                                          ││
│  │  Panduan lengkap memilih sabun cuci piring yang       ││
│  │  aman untuk kulit sensitif dan ramah lingkungan...    ││
│  │  ↑ Dari: og:description = $article['description']    ││
│  │                                                          ││
│  │  ecopil-test.local/artikel/cara-memilih...           ││
│  └─────────────────────────────────────────────────────────┘│
└─────────────────────────────────────────────────────────────┘
```

---

## 📍 CHECKLIST CEPAT: DIMANA LETAK APA

### 1️⃣ **TITLE (Judul di Tab Browser + Google Search)**
```
📍 LOKASI:
   ├─ File: app/Http/Controllers/ArtikelController.php
   │  └─ Field: 'title' => 'Cara Memilih Sabun Cuci Piring...'
   │
   ├─ File: resources/views/artikel/show.blade.php
   │  └─ @section('title', $article['title'] . ' — ECOPIL | Sabun Cuci Piring Alami')
   │
   └─ Rendering:
      └─ <h1>{{ $article['title'] }}</h1>

🎯 STANDAR:
   • Panjang: 50-60 karakter
   • Format: [Keyword] - [Deskripsi] — Brand
   • Contoh: "Cara Memilih Sabun Cuci Piring... — ECOPIL | Sabun Cuci Piring Alami"
```

### 2️⃣ **META DESCRIPTION (Teks di Hasil Google Search)**
```
📍 LOKASI:
   ├─ File: app/Http/Controllers/ArtikelController.php
   │  └─ Field: 'description' => 'Panduan lengkap memilih sabun cuci piring...'
   │
   ├─ File: resources/views/artikel/show.blade.php
   │  └─ @section('description', $article['description'])
   │
   └─ HTML Output:
      └─ <meta name="description" content="...">

🎯 STANDAR:
   • Panjang: 60-160 karakter
   • Mulai dengan: Verb (Pelajari, Ketahui, Temukan, Panduan, dll)
   • Sertakan keyword utama di awal
   • Contoh: "Panduan lengkap memilih sabun cuci piring yang aman untuk kulit sensitif dan ramah lingkungan..."
```

### 3️⃣ **KEYWORDS (Meta Keywords)**
```
📍 LOKASI:
   ├─ File: app/Http/Controllers/ArtikelController.php
   │  └─ Field: 'keywords' => 'sabun cuci piring aman, sabun ramah lingkungan, ...'
   │
   ├─ File: resources/views/artikel/show.blade.php
   │  └─ @section('keywords', $article['keywords'])
   │
   └─ HTML Output:
      └─ <meta name="keywords" content="...">

🎯 STANDAR:
   • Jumlah: 5-10 keywords
   • Dipisahkan: Koma
   • Urutan: Main keyword dulu, lalu supporting keywords
   • Contoh: "sabun cuci piring aman, sabun ramah lingkungan, sabun untuk kulit sensitif, sabun alami, ECOPIL"
```

### 4️⃣ **OPEN GRAPH TAGS (Social Media Sharing)**
```
📍 LOKASI:
   ├─ File: resources/views/artikel/show.blade.php
   │  ├─ @section('og_title', $article['title'])
   │  ├─ @section('og_description', $article['description'])
   │  └─ @section('og_image', asset($article['image']))
   │
   └─ HTML Output:
      ├─ <meta property="og:title" content="...">
      ├─ <meta property="og:description" content="...">
      └─ <meta property="og:image" content="...">

🎯 GUNANYA:
   • Ketika dibagikan di Facebook, WhatsApp, LinkedIn, dll
   • Menentukan gambar, judul, deskripsi yang tampil
   • Penting untuk social media reach & CTR
```

### 5️⃣ **H1 HEADING (Judul Utama Artikel)**
```
📍 LOKASI:
   ├─ File: resources/views/artikel/show.blade.php
   │  └─ <h1 class="text-3xl md:text-4xl font-extrabold ...">
   │     {{ $article['title'] }}
   │     </h1>
   │
   └─ Harus sama dengan: $article['title']

🎯 ATURAN:
   ✅ HANYA 1 PER HALAMAN
   ✅ Harus unik di halaman
   ✅ Gunakan keyword utama
   ✅ Panjang: 50-60 karakter
```

### 6️⃣ **H2 HEADINGS (Subheading Utama)**
```
📍 LOKASI:
   ├─ File: resources/views/artikel/show.blade.php
   │  ├─ <h2>Kenapa Sabun Cuci Piring yang Kamu Pakai Itu Penting?</h2>
   │  ├─ <h2>Bahaya Tersembunyi di Balik Sabun Cuci Piring Biasa</h2>
   │  ├─ <h2>Tips Memilih Sabun Cuci Piring yang Lebih Aman</h2>
   │  ├─ <h2>ECOPIL: Sabun Cuci Piring yang Aman dan Ramah Lingkungan</h2>
   │  └─ <h2>Kesimpulan</h2>

🎯 ATURAN:
   ✅ 2-5 H2 per artikel (optimal: 4)
   ✅ Sertakan keyword supporting
   ✅ Gunakan natural language (bukan keyword stuffing)
   ✅ Panjang: 8-12 kata per H2
```

### 7️⃣ **H3 HEADINGS (Sub-Subheading)**
```
📍 LOKASI:
   ├─ File: resources/views/artikel/show.blade.php
   │  ├─ <h3>Kandungan Kimia yang Perlu Diwaspadai</h3>
   │  └─ <h3>Dampaknya ke Lingkungan</h3>

🎯 ATURAN:
   ✅ H3 hanya di bawah H2 (jangan standalone)
   ✅ Optimal: 1-3 H3 per H2
   ✅ Untuk breakdown/details dari H2
```

### 8️⃣ **ALT TEXT (Deskripsi Gambar)**
```
📍 LOKASI GAMBAR THUMBNAIL:
   ├─ File: resources/views/artikel/show.blade.php
   │  └─ <img src="{{ asset($article['image']) }}"
   │         alt="{{ $article['alt'] }}"
   │         class="w-full h-full object-cover">
   │
   ├─ File: resources/views/artikel/index.blade.php
   │  └─ <img src="{{ asset($article['image']) }}"
   │         alt="{{ $article['alt'] }}"
   │         class="w-full h-full object-cover">
   │
   └─ Dari: app/Http/Controllers/ArtikelController.php
      └─ Field: 'alt' => 'Panduan lengkap cara memilih sabun...'

📍 LOKASI GAMBAR INLINE:
   ├─ File: resources/views/artikel/show.blade.php
   │  └─ <img src="{{ asset('images/artikel/artikel-1-inline.png') }}"
   │         alt="Checklist tips memilih sabun cuci piring aman..."
   │         class="w-full object-cover">

🎯 STANDAR:
   • Panjang: 10-15 kata (minimal descriptive)
   • Deskripsi: Apa isi gambar, bukan sekadar "gambar"
   • Keyword-rich: Masukkan keyword jika relevan
   • Contoh BAIK: "Checklist tips memilih sabun cuci piring aman: baca label, hindari kimia keras"
   • Contoh BURUK: "gambar", "foto", "image123"
```

### 9️⃣ **CATEGORY LABEL (Badge Kategori)**
```
📍 LOKASI:
   ├─ File: app/Http/Controllers/ArtikelController.php
   │  └─ Field: 'label' => 'Tips Keluarga'
   │
   ├─ File: resources/views/artikel/show.blade.php
   │  └─ <span class="...">{{ $article['label'] }}</span>
   │
   └─ File: resources/views/artikel/index.blade.php
      └─ <span class="...">{{ $article['label'] }}</span>

🎯 KATEGORI YANG TERSEDIA:
   • Tips Keluarga
   • Edukasi
   • Kesehatan
   • Fakta & Mitos
```

### 🔟 **EXCERPT (Ringkasan Pendek)**
```
📍 LOKASI:
   ├─ File: app/Http/Controllers/ArtikelController.php
   │  └─ Field: 'excerpt' => 'Sabun cuci piring bukan cuma soal bersih. Kenali bahan berbahaya...'
   │
   └─ Ditampilkan di:
      • Halaman daftar artikel (index.blade.php)
      • Landing page section artikel (components/article.blade.php)

🎯 STANDAR:
   • Panjang: 120-160 karakter
   • Ringkas dan menarik
   • Jangan sama persis dengan description
```

---

## 🎨 TABEL RINGKAS LOKASI SETIAP FIELD

| Elemen | File Backend | Field | File Frontend | HTML Tag |
|--------|--------------|-------|----------------|----------|
| **Title** | ArtikelController.php | `title` | show.blade.php | `<h1>` & `<title>` |
| **Description** | ArtikelController.php | `description` | show.blade.php | `<meta name="description">` |
| **Keywords** | ArtikelController.php | `keywords` | show.blade.php | `<meta name="keywords">` |
| **OG Title** | ArtikelController.php | `title` | show.blade.php | `<meta property="og:title">` |
| **OG Description** | ArtikelController.php | `description` | show.blade.php | `<meta property="og:description">` |
| **OG Image** | ArtikelController.php | `image` | show.blade.php | `<meta property="og:image">` |
| **Alt Text (Thumbnail)** | ArtikelController.php | `alt` | show.blade.php, index.blade.php | `<img alt="...">` |
| **Alt Text (Inline)** | Manual di template | - | show.blade.php | `<img alt="...">` |
| **H1 Heading** | ArtikelController.php | `title` | show.blade.php | `<h1>` |
| **H2 Headings** | Manual di template | - | show.blade.php | `<h2>` |
| **H3 Headings** | Manual di template | - | show.blade.php | `<h3>` |
| **Category Label** | ArtikelController.php | `label` | show.blade.php, index.blade.php, article.blade.php | `<span>` badge |
| **Excerpt** | ArtikelController.php | `excerpt` | index.blade.php, article.blade.php | `<p>` text |

---

## 🚀 FLOW BAGAIMANA DATA SAMPAI KE BROWSER

```
1. USER BUKA ARTIKEL
   ↓
2. Browser minta: /artikel/cara-memilih-sabun-cuci-piring...
   ↓
3. Laravel route ke: ArtikelController@show($slug)
   ↓
4. Controller cari di array: allArticles() 
   → Menggunakan slug sebagai key
   ↓
5. Data artikel ($article) dikirim ke: show.blade.php
   ↓
6. Blade template render:
   • @section('title', $article['title']) 
     → <title>{{ $article['title'] }}</title>
   
   • @section('description', $article['description'])
     → <meta name="description" content="...">
   
   • <h1>{{ $article['title'] }}</h1>
     → Heading H1 di halaman
   
   • <img alt="{{ $article['alt'] }}">
     → Alt text di gambar
   
   ↓
7. HTML lengkap dikirim ke browser
   ↓
8. Browser render halaman + tampilkan meta tags
   ↓
9. Search engine (Google) crawl:
   ├─ <title> tag
   ├─ <meta name="description">
   ├─ <h1>, <h2>, <h3> tags
   ├─ <img alt> attributes
   ├─ <meta property="og:*"> tags
   └─ URL/slug
   ↓
10. Google index artikel dengan SEO yang optimal! ✅
```

---

## ✅ QUICK CHECK: APAKAH SUDAH BENAR?

Buka halaman artikel, kemudian:

1. **Lihat judul tab:** Apakah sudah "[Keyword] — ECOPIL | Sabun..."?
   - ✅ BENAR - ambil dari `$article['title']`
   - ❌ SALAH - check @section title di show.blade.php

2. **Klik kanan → View Page Source:** Cari `<meta name="description">`
   - ✅ BENAR - ada deskripsi 60-160 karakter
   - ❌ SALAH - check `$article['description']` di controller

3. **Cari `<h1>` tag:**
   - ✅ BENAR - hanya 1 per halaman
   - ❌ SALAH - pastikan judul artikel di H1

4. **Cek semua `<img>` tags:**
   - ✅ BENAR - setiap img punya alt text
   - ❌ SALAH - tambah alt attribute

5. **Cari `<h2>` dan `<h3>` tags:**
   - ✅ BENAR - struktur heading teratur
   - ❌ SALAH - reorganisir heading hierarchy

---

**Dokumentasi ini dibuat untuk mempermudah team lead Anda memahami dan memverifikasi SEO artikel. Setiap elemen sudah diterapkan dan siap untuk production! 🚀**
