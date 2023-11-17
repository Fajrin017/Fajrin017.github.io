<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Sub;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/posts/create', [
            'categories' => Category::all(),
            'subs' => Sub::all()
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // dd ($request);
        // return $request->file('image')->store('post-images');
        // dd($request->input('barang'));

        $data = $request->all();
        // dd($data);

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required',
           
        ]);

        

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
       


        
        // $post = new Post;
        // $post->title = $data['title'];
        // $post->slug = $data['slug'];
        // $post->category_id = $data['category_id'];
        // // $post->id = $data['id'];
        // // $post->excerpt = $data['excerpt'];
        // $post->image = $data['image'];
        // $post->body = $data['body'];
        // $post -> save();

        // $post->title = $request->title;
        // $post->slug= $request->slug;
        // $post->category_id  = $request->category_id;
        // $post->image  = $request->image;
        // $post->body  = $request->body;
        // $post -> save()


        Post::create($validatedData);


    //     foreach($request->post as $key => $value)
    //     {

    //     Post::create($validatedData, [
    //         'title' => $request->input('title'),
    //         'slug' => $request->input('slug'),
    //         'category_id' => $request->input('category_id'),
    //         'image' => $request->input('image'),
    //         'body' => $request->input('body'),
    //         'barang' => $request->input('barang')[$key],
    //         'jumlah' => $request->input('jumlah')[$key],
    //         'satuan' => $request->input('satuan')[$key],
    //         'kondisi' => $request->input('kondisi')[$key],
    //     ]);
    // }

        // $data = ['barang'];
        // if(count($data['barang'] > 0 )) {
        //     foreach ($data['barang'] as $item => $value ) {
        //         $data2 = array (
        //             'user_id' => $user->id,
        //             'post_id' => $data['post_id'][$item],
        //             'barang' => $data['barang'][$item],
        //             'jumlah' => $data['jumlah'][$item],
        //             'satuan' => $data['satuan'][$item],
        //             'kondisi' => $data['kondisi'][$item]
        //         );

        //         Sub::create( $data2 );
        //     }
        // }

        // foreach($request->$sub as $key =>$value) {
        //     Sub::create([
        //         "barang" => $request -> input("barang")[$key],
        //         "jumlah" => $request -> input("jumlah")[$key],
        //         "satuan" => $request -> input("satuan")[$key],
        //         "kondisi" => $request -> input("kondisi")[$key],

        //     ]);
        // }

        // $post_id = get_values() ?: [];
        $post_id = $request ->post_id;
        foreach($post_id as $row => $value) {
            // Simpan Data Subkomponen
            $sub = new Sub();
            $sub->user_id -> auth()->user()->id;
            $sub->post_id -> $request->post_id[$row];
            $sub->barang -> $request->barang[$row];
            $sub->jumlah -> $request->jumlah[$row];
            $sub->satuan -> $request->satuan[$row];
            $sub->kondisi -> $request->kondisi[$row];
            $sub ->save();


        }   



        return redirect('/dashboard/posts/')->with('success', 'New post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post,
            
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard/posts/edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];
      

        if($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::where('id', $post->id)
            ->update($validatedData);

        return redirect('/dashboard/posts/')->with('success', 'Post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->image){
            Storage::delete($post->image);
        }

        Post::destroy($post->id);
        return redirect('/dashboard/posts/')->with('success', 'Post has been deleted');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
