<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    private function allArticles(): array
    {
        return [
            [
                'slug'        => 'cara-memilih-sabun-cuci-piring-aman-kulit-sensitif',
                'image'       => 'images/artikel/artikel-1.png',
                'alt'         => 'Tips memilih sabun cuci piring aman untuk keluarga dan lingkungan',
                'label'       => 'Tips Keluarga',
                'title'       => 'Cara Memilih Sabun Cuci Piring yang Aman untuk Keluarga dan Lingkungan',
                'excerpt'     => 'Cari sabun cuci piring yang aman untuk kulit sensitif? Kenali cara memilih sabun terbaik yang lembut di tangan, bebas SLS, dan tidak merusak bumi.',
                'description' => 'Cari sabun cuci piring yang aman untuk kulit sensitif? Kenali cara memilih sabun terbaik yang lembut di tangan, bebas SLS, dan tidak merusak bumi.',
                'keywords'    => 'sabun cuci piring yang aman untuk kulit sensitif, sabun cuci piring yang aman untuk tangan, tips memilih sabun cuci piring, sabun cuci piring terbaik, apakah sabun cuci piring mengandung SLS',
            ],
            [
                'slug'        => 'bahaya-sabun-cuci-piring-kimia-vs-alami-untuk-keluarga',
                'image'       => 'images/artikel/artikel-2.png',
                'alt'         => 'Perbandingan sabun cuci piring alami dan kimia untuk keluarga',
                'label'       => 'Edukasi',
                'title'       => 'Sabun Cuci Piring Alami vs Kimia: Mana yang Lebih Baik untuk Keluarga?',
                'excerpt'     => 'Waspadai bahaya sabun cuci piring kimia! Simak perbandingan sabun alami vs kimia, bahan kimia berbahaya dalam sabun cuci piring, dan dampak lingkungan untuk keluarga.',
                'description' => 'Waspadai bahaya sabun cuci piring kimia! Simak perbandingan sabun alami vs kimia dari segi keamanan, efektivitas, dan dampak lingkungan untuk keluarga.',
                'keywords'    => 'bahaya sabun cuci piring kimia, sabun cuci piring alami vs kimia, bahan kimia berbahaya dalam sabun cuci piring, sabun cuci piring ramah lingkungan, efek sabun cuci piring pada tubuh',
            ],
            [
                'slug'        => 'ciri-ciri-sabun-cuci-piring-baik-tanda-tidak-aman',
                'image'       => 'images/artikel/artikel-3.png',
                'alt'         => 'Tanda sabun cuci piring tidak aman: tangan kering dan iritasi kulit',
                'label'       => 'Kesehatan',
                'title'       => 'Tanda Sabun Cuci Piring Kamu Tidak Aman — dan Cara Menggantinya',
                'excerpt'     => 'Tau ciri-ciri sabun cuci piring yang baik? Kenali tanda sabunmu tidak aman, ciri alergi sabun, dan efek sampingnya — plus cara mudah menggantinya.',
                'description' => 'Kenali tanda sabun cuci piring yang tidak aman: tangan kering, gatal, residu sulit dibilas, dan cara mudah beralih ke sabun yang lebih aman.',
                'keywords'    => 'ciri ciri sabun cuci piring yang baik, ciri ciri alergi sabun cuci piring, efek samping sabun cuci piring, sabun cuci piring yang tidak merusak tangan, dampak negatif sabun cuci piring berlebihan',
            ],
            [
                'slug'        => 'tangan-kering-karena-sabun-cuci-piring-solusi-alami',
                'image'       => 'images/artikel/artikel-4.png',
                'alt'         => 'Kulit tangan kering pecah-pecah setelah cuci piring dengan sabun keras',
                'label'       => 'Tips Keluarga',
                'title'       => 'Tangan Kering karena Sabun Cuci Piring? Yuk, Mulai Ganti Sabunmu dengan Opsi yang Lebih Ramah dan Alami',
                'excerpt'     => 'Tangan kering karena sabun cuci piring? Kenali penyebab tangan mengelupas dan perih setelah cuci piring, plus solusi sabun alami terbaik untuk tangan sensitif.',
                'description' => 'Pahami penyebab tangan kering setelah cuci piring dan cara mengatasinya dengan sabun cuci piring berbahan alami yang lebih lembut untuk kulit sensitif.',
                'keywords'    => 'tangan kering karena sabun cuci piring, cara mengatasi tangan kering setelah mencuci piring, tangan mengelupas setelah cuci piring, tangan perih setelah cuci piring, sabun cuci piring untuk tangan sensitif',
            ],
            [
                'slug'        => 'sabun-cuci-piring-tanpa-busa-mitos-busa-melimpah',
                'image'       => 'images/artikel/artikel-5.png',
                'alt'         => 'Mitos busa melimpah membuat piring lebih bersih - fakta vs mitos sabun',
                'label'       => 'Fakta & Mitos',
                'title'       => 'Mitos Sabun Cuci Piring: Benarkah Busa Melimpah Bikin Piring Lebih Bersih?',
                'excerpt'     => 'Sabun cuci piring tanpa busa bisa tetap bersih. Kupas mitos busa banyak, sabun non SLS, dan cara memilih sabun yang tidak membuat tangan kering.',
                'description' => 'Mitos sabun cuci piring: benarkah busa banyak membuat piring lebih bersih? Temukan fakta tentang sabun non SLS, busa, dan pilihan yang aman untuk keluarga.',
                'keywords'    => 'sabun cuci piring tanpa busa, apakah busa sabun menentukan kebersihan, sabun cuci piring non SLS, apakah sabun berfungsi tanpa busa, sabun cuci piring yang bagus apa',
            ],
        ];
    }

    public function index()
    {
        $articles = $this->allArticles();

        return view('artikel.index', compact('articles'));
    }

    public function show(string $slug)
    {
        $articles = $this->allArticles();

        $article = collect($articles)->firstWhere('slug', $slug);

        if (! $article) {
            abort(404);
        }

        $otherArticles = collect($articles)
            ->reject(fn($a) => $a['slug'] === $slug)
            ->values()
            ->all();

        return view('artikel.show', compact('article', 'otherArticles'));
    }
}
