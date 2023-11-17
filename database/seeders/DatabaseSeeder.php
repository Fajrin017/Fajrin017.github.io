<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Sub;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post_Status;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Fajrin Hidayattussyalikin',
            'username' => 'fajrin',
            'email' => 'fajrinh@gmail.com',
            'password' => bcrypt('12345')
        ]);
        // User::create([
        //     'name' => 'Fajrin Hidayattussyalikin',
        //     'email' => 'idlanbazil0307@gmail.com',
        //     'username' => 'Fajrin'
        //     'password' => bcrypt(12345)
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Keuangan dan Perlengkapan',
            'slug' => 'keuangan-dan-perlengkapan'
        ]);
        Category::create([
            'name' => 'Kepegawaian dan TU',
            'slug' => 'kepegawaian-dan-tu'
        ]);
        Category::create([
            'name' => 'Pendidikan dan Bimbingan Kemasyarakatan',
            'slug' => 'pendidikan-dan-bimbingan-kemasyarakatan'
        ]);
        Category::create([
            'name' => 'Perawatan',
            'slug' => 'perawatan'
        ]);
        Category::create([
            'name' => 'Registrasi',
            'slug' => 'registrasi'
        ]);
        Category::create([
            'name' => 'Penilaian dan Klasifikasi',
            'slug' => 'penilaian-dan-klasifikasi'
        ]);
        Category::create([
            'name' => 'Administrasi Pengawasan Penegakan Disiplin',
            'slug' => 'administrasi-pengawasan-penegakan-disiplin'
        ]);
        
        Post::factory(20)->create();
        
        // Sub::factory(20)->create();

        Post_Status::create([
            'nama' => 'belum ditindaklanjuti',
        ]);

        Post_Status::create([
            'nama' => 'telah ditindaklanjuti',
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Tugas dari sub bagian Umum yang memiliki peran dan tanggung jawab dalam hal pengelolaan kerumahtanggaan',
        //     'body' => '<p>Dalam Kerangka Konseptual Akuntansi Pemerintahan, yang dimaksud dengan Prinsip Akuntansi dan Pelaporan Keuangan adalah ketentuan yang dipahami dan ditaati oleh pembuat standar akuntansi dalam menyusun standar, penyelenggara akuntansi dan pelaporan keuangan dalam melakukan kegiatannya, serta pengguna laporan keuangan dalam memahami laporan keuangan yang disajikan melalui laporan realisasi anggaran dalam satu periode tahun anggaran.</p><p>Laporan Realisasi Anggaran adalah laporan yang menyajikan informasi realisasi pendapatan, belanja, transfer, surplus/defisit, pembiayaan, dan sisa lebih/kurang pembiayaan anggaran, yang masing-masing diperbandingkan dengan anggarannya dalam satu periode.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);


        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Tugas dari sub bagian Umum yang memiliki peran dan tanggung jawab dalam hal pengelolaan kerumahtanggaan',
        //     'body' => 'Dalam Kerangka Konseptual Akuntansi Pemerintahan, yang dimaksud dengan Prinsip Akuntansi dan Pelaporan Keuangan adalah ketentuan yang dipahami dan ditaati oleh pembuat standar akuntansi dalam menyusun standar, penyelenggara akuntansi dan pelaporan keuangan dalam melakukan kegiatannya, serta pengguna laporan keuangan dalam memahami laporan keuangan yang disajikan melalui laporan realisasi anggaran dalam satu periode tahun anggaran. Laporan Realisasi Anggaran adalah laporan yang menyajikan informasi realisasi pendapatan, belanja, transfer, surplus/defisit, pembiayaan, dan sisa lebih/kurang pembiayaan anggaran, yang masing-masing diperbandingkan dengan anggarannya dalam satu periode.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Tugas dari sub bagian Umum yang memiliki peran dan tanggung jawab dalam hal pengelolaan kerumahtanggaan',
        //     'body' => 'Dalam Kerangka Konseptual Akuntansi Pemerintahan, yang dimaksud dengan Prinsip Akuntansi dan Pelaporan Keuangan adalah ketentuan yang dipahami dan ditaati oleh pembuat standar akuntansi dalam menyusun standar, penyelenggara akuntansi dan pelaporan keuangan dalam melakukan kegiatannya, serta pengguna laporan keuangan dalam memahami laporan keuangan yang disajikan melalui laporan realisasi anggaran dalam satu periode tahun anggaran. Laporan Realisasi Anggaran adalah laporan yang menyajikan informasi realisasi pendapatan, belanja, transfer, surplus/defisit, pembiayaan, dan sisa lebih/kurang pembiayaan anggaran, yang masing-masing diperbandingkan dengan anggarannya dalam satu periode.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
