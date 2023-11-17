<?php 

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Sub;

class PostController extends Controller 
{
    public function index()
    {
        $title = '';
        if (request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' Dalam bidang ' . $category->name;
        }

        if (request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' Oleh ' . $author->name;
        }

        return view ('posts', [
            "title" => "Semua Laporan Pemeriksaan" . $title,
            // "posts" => Post::all()
            "active" =>'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
            // "posts" => Post::with(['author', 'category'])->latest()->get()
        ]);
    }

    public function show (Post $post) {
        return view ('post', [
        "title" => "Single Post",
        // "post" => Post::find($id)
        "active" =>'posts',
        "post" => $post
    ]);
    }
}

