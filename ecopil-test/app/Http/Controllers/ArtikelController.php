<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Daftar artikel — hardcoded.
     * Ganti dengan query Eloquent kalau sudah ada tabel articles di database:
     *   \App\Models\Article::all()->toArray()
     */
    private function allArticles(): array
    {
        return [
            [
                'slug'        => 'cara-memilih-sabun-cuci-piring-aman-keluarga-lingkungan',
                'image'       => 'images/artikel/artikel-1.png',
                'alt'         => 'Tips memilih sabun cuci piring aman untuk keluarga dan lingkungan',
                'label'       => 'Tips Keluarga',
                'title'       => 'Cara Memilih Sabun Cuci Piring yang Aman untuk Keluarga dan Lingkungan',
                'excerpt'     => 'Sabun cuci piring bukan sekadar soal bersih. Kenali bahan berbahaya yang perlu dihindari dan temukan pilihan yang aman untuk kulit dan lingkungan.',
                'description' => 'Panduan lengkap memilih sabun cuci piring yang aman untuk kulit sensitif dan ramah lingkungan. Ketahui bahan berbahaya yang harus dihindari.',
                'keywords'    => 'sabun cuci piring aman, sabun ramah lingkungan, sabun untuk kulit sensitif, sabun alami, ECOPIL',
            ],
            [
                'slug'        => 'sabun-cuci-piring-alami-vs-kimia-untuk-keluarga',
                'image'       => 'images/artikel/artikel-2.png',
                'alt'         => 'Perbandingan sabun cuci piring alami dan kimia untuk keluarga',
                'label'       => 'Edukasi',
                'title'       => 'Sabun Cuci Piring Alami vs Kimia: Mana yang Lebih Baik untuk Keluarga?',
                'excerpt'     => 'Bingung pilih sabun alami atau kimia? Simak perbandingan lengkapnya dari segi keamanan, efektivitas, dan dampak lingkungan sebelum memutuskan.',
                'description' => 'Perbandingan sabun alami dan kimia: keamanan, efektivitas, dan dampak lingkungan. Ketahui mana pilihan terbaik untuk keluarga Anda.',
                'keywords'    => 'sabun alami vs kimia, sabun cuci piring kimia, sabun natural, bahan kimia berbahaya, eco-friendly',
            ],
            [
                'slug'        => 'tanda-sabun-cuci-piring-tidak-aman-cara-menggantinya',
                'image'       => 'images/artikel/artikel-3.png',
                'alt'         => 'Tanda sabun cuci piring tidak aman: tangan kering dan iritasi kulit',
                'label'       => 'Kesehatan',
                'title'       => 'Tanda Sabun Cuci Piring Kamu Tidak Aman — dan Cara Menggantinya',
                'excerpt'     => 'Tangan sering kering setelah cuci piring? Bisa jadi sabun kamu mengandung bahan berbahaya. Kenali 5 tandanya dan temukan alternatif yang lebih baik.',
                'description' => '5 tanda sabun cuci piring tidak aman untuk kesehatan dan cara menggantinya dengan produk yang lebih baik. Lindungi kulit keluarga Anda.',
                'keywords'    => 'sabun tidak aman, tangan kering, iritasi kulit, bahan kimia sabun, sabun sehat',
            ],
            [
                'slug'        => 'kulit-tangan-kering-setelah-cuci-piring-ganti-sabun-alami',
                'image'       => 'images/artikel/artikel-4.png',
                'alt'         => 'Kulit tangan kering pecah-pecah setelah cuci piring dengan sabun keras',
                'label'       => 'Tips Keluarga',
                'title'       => 'Sering Merasa Kulit Tangan Kering Setelah Cuci Piring? Yuk, Mulai Ganti Sabunmu',
                'excerpt'     => 'Kulit tangan sering terasa kering atau ketarik setelah cuci piring? Bisa jadi sabunmu terlalu keras. Kenali penyebabnya dan temukan sabun alami yang lebih lembut.',
                'description' => 'Kenapa kulit tangan kering setelah cuci piring? Pelajari penyebabnya dan temukan solusi dengan sabun alami yang lebih lembut untuk tangan.',
                'keywords'    => 'kulit tangan kering, sabun lembut, sabun untuk tangan sensitif, perawatan tangan, sabun alami',
            ],
            [
                'slug'        => 'mitos-busa-sabun-cuci-piring-bersih',
                'image'       => 'images/artikel/artikel-5.png',
                'alt'         => 'Mitos busa melimpah membuat piring lebih bersih - fakta vs mitos sabun',
                'label'       => 'Fakta & Mitos',
                'title'       => 'Mitos Sabun Cuci Piring: Benarkah Busa Melimpah Bikin Piring Lebih Bersih?',
                'excerpt'     => 'Busa melimpah berarti lebih bersih? Belum tentu. Kenali fakta di balik mitos busa sabun cuci piring dan temukan alternatif yang lebih aman untuk keluarga.',
                'description' => 'Debunk mitos busa sabun cuci piring. Pelajari fakta tentang kebersihan piring, keamanan, dan pilihan sabun yang lebih baik untuk keluarga.',
                'keywords'    => 'mitos busa sabun, kebersihan piring, sabun cuci piring, efektivitas sabun, fakta mitos',
            ],
        ];
    }

    /**
     * Halaman daftar semua artikel (opsional — dipakai tombol "Lihat Semua Artikel")
     */
    public function index()
    {
        $articles = $this->allArticles();

        return view('artikel.index', compact('articles'));
    }

    /**
     * Halaman detail artikel berdasarkan slug
     */
    public function show(string $slug)
    {
        $articles = $this->allArticles();

        // Cari artikel dengan slug yang cocok
        $article = collect($articles)->firstWhere('slug', $slug);

        // Kalau slug tidak ditemukan → 404
        if (! $article) {
            abort(404);
        }

        // Artikel lain (selain yang sedang dibuka) untuk bagian "Artikel Lainnya"
        $otherArticles = collect($articles)
            ->reject(fn($a) => $a['slug'] === $slug)
            ->values()
            ->all();

        return view('artikel.show', compact('article', 'otherArticles'));
    }
}
