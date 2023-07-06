<?php

namespace App\Models;



class Post
{
    private static $blog_posts =[
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fajrin Hidayattussyalikin",
            "body" => "Sistem Pengendalian Intern Pemerintah (SPIP) ditujukan untuk memberikan keyakinan yang memadai bagi tercapainya efektivitas dan efisiensi pencapaian tujuan Penyelenggaraan Pemerintah Negara, Keandalan Pelaporan Keuangan, Pengamanan Aset Negara, dan Ketaatan Terhadap Peraturan PerundangUndangan. Berdasarkan Peraturan Pemerintah Nomor 60 Tahun 2008 tentang SPIP, terdapat 5 (lima) unsur yaitu, Lingkungan Pengendalian, Penilaian Risiko, Kegiatan Pengendalian, Informasi dan Komunikasi, serta Pemantauan Pengendalian Intern yang dijadikan indikator pencapaian tujuan tersebut di atas. Lembaga Pembinaan Khusus Anak Kelas II Pangkal Pinang sebagai Satuan Kerja yang bernaung dibawah Kementerian Hukum dan Hak Asasi Manusia Republik Indonesia mempunyai kewajiban untuk menerapkan unsur-unsur dalam SPIP untuk menjamin tercapainya tujuan dan sasaran serta mewujudkan Visi dan Misi Kementerian Hukum dan Hak Asasi Manusia Republik Indonesia"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Hambara",
            "body" => "Penerapan Manajemen Risiko pada Lembaga Pembinaan Khusus Anak Kelas II Pangkal Pinang dimaksudkan untuk membangun dan memperkuat unsur-unsur Sistem Pengendalian Internal Pemerintah (SPIP) guna tercapainya tujuan dan sasaran strategis yang telah ditetapkan"
        ] 
        ];

        public static function all() {
            return collect (self ::$blog_posts);
        }

        public static function find($slug) {
            $posts = static::all();
            // $post = [];
            // foreach($posts as $p) {
            //     if($p["slug"] === $slug) {
            //     $post = $p;
            //     }
            // }

            return $posts->firstWhere('slug', $slug);
        }
}
