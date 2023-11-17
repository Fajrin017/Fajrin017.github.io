<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Sub;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminUserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('home', [
    "title" => "Home",
    "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "active" => 'about',
        "name" => "Lembaga Pembinaan Khusus Anak Kelas II Pangkal Pinang",
        "email" => "lpkapangkalpinang@gmail.com",
        "image" => "logopas.jpeg"
    ]);
});

    

Route::get('/posts' , [PostController::class, 'index']);


//halaman single post

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
        return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
        ]);
});


// Route::get('/categories/{category:slug}', function(Category $category){
//         return view('posts', [
//         'title' => "Post by Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author'),
//         // 'category' => $category->name
//         ]);
//     });  (diganti oleh query di post(model)) 

//  Route::get('/authors/{author:username}', function(User $author){
//         return view('posts', [
//         'title' => "Post by Author : $author->name",
//         'active' => 'posts',
//         'posts' => $author->posts->load('category', 'author'),
//         ]);
//     });  (diganti oleh query di post(model)) 

// Route::get('posts/{slug}', function($slug) {
    // $blog_posts = [
    //     [
    //         "title" => "Judul Post Pertama",
    //         "slug" => "judul-post-pertama",
    //         "author" => "Fajrin Hidayattussyalikin",
    //         "body" => "Sistem Pengendalian Intern Pemerintah (SPIP) ditujukan untuk memberikan keyakinan yang memadai bagi tercapainya efektivitas dan efisiensi pencapaian tujuan Penyelenggaraan Pemerintah Negara, Keandalan Pelaporan Keuangan, Pengamanan Aset Negara, dan Ketaatan Terhadap Peraturan PerundangUndangan. Berdasarkan Peraturan Pemerintah Nomor 60 Tahun 2008 tentang SPIP, terdapat 5 (lima) unsur yaitu, Lingkungan Pengendalian, Penilaian Risiko, Kegiatan Pengendalian, Informasi dan Komunikasi, serta Pemantauan Pengendalian Intern yang dijadikan indikator pencapaian tujuan tersebut di atas. Lembaga Pembinaan Khusus Anak Kelas II Pangkal Pinang sebagai Satuan Kerja yang bernaung dibawah Kementerian Hukum dan Hak Asasi Manusia Republik Indonesia mempunyai kewajiban untuk menerapkan unsur-unsur dalam SPIP untuk menjamin tercapainya tujuan dan sasaran serta mewujudkan Visi dan Misi Kementerian Hukum dan Hak Asasi Manusia Republik Indonesia"
    //     ],
    //     [
    //         "title" => "Judul Post Kedua",
    //         "slug" => "judul-post-kedua",
    //         "author" => "Hambara",
    //         "body" => "Penerapan Manajemen Risiko pada Lembaga Pembinaan Khusus Anak Kelas II Pangkal Pinang dimaksudkan untuk membangun dan memperkuat unsur-unsur Sistem Pengendalian Internal Pemerintah (SPIP) guna tercapainya tujuan dan sasaran strategis yang telah ditetapkan"
    //     ] 
    //     ];

    // $new_post = [];
    // foreach($blog_posts as $post) {
    //     if($post["slug"] === $slug) {
    //         $new_post = $post;
    //     }
    // }
//     return view ('post', [
//         "title" => "Single Post",
//         "post" => Post::find($slug)
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', function(){
            return view('dashboard.index');
            })->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');       
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/postingan', AdminPostController::class)->except('show')->middleware('admin');

// Route::get('/dashboard/posts/{approved:id}', [DashboardPostController::class, 'approved'])->middleware('auth');
Route::get('/dashboard/posts/approved/{id}', [DashboardPostController::class, 'approved'])->middleware('auth');


Route::resource('/dashboard/users', AdminUserController::class)->except('show')->middleware('admin');