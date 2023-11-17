<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Sub;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Models\Post_Status;
use Illuminate\Support\Facades\Validator;



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
        $this->post_status_id = 1;

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'post_status_id' => 'required',
            'body' => 'required',
            'barang1' => 'required',
            'jumlah1' =>'required',
            'satuan1' => 'required',
            'kondisi1' => 'required',
            'barang2' => 'required',
            'jumlah2' => 'required',
            'satuan2' => 'required',
            'kondisi2' => 'required',
            'barang3' => 'required',
            'jumlah3' =>'required',
            'satuan3' => 'required',
            'kondisi3' => 'required',
            'barang4' => 'required',
            'jumlah4' => 'required',
            'satuan4' => 'required',
            'kondisi4' => 'required',
            'barang5' => 'required',
            'jumlah5' => 'required',
            'satuan5' => 'required',
            'kondisi5' => 'required',
            'barang6' => 'required',
            'jumlah6' => 'required',
            'satuan6' => 'required',
            'kondisi6' => 'required',
            'barang7' => 'required',
            'jumlah7' => 'required',
            'satuan7' => 'required',
            'kondisi7' => 'required',
            'barang8' => 'required',
            'jumlah8' => 'required',
            'satuan8' => 'required',
            'kondisi8' => 'required',
            'barang9' => 'required',
            'jumlah9' => 'required',
            'satuan9' => 'required',
            'kondisi9' => 'required',
            'barang10' => 'required',
            'jumlah10' => 'required',
            'satuan10' => 'required',
            'kondisi10' => 'required',
            'barang11' => 'required',
            'jumlah11' => 'required',
            'satuan11' => 'required',
            'kondisi11' => 'required',
            'barang12' => 'required',
            'jumlah12' => 'required',
            'satuan12' => 'required',
            'kondisi12' => 'required',
            'barang13' => 'required',
            'jumlah13' => 'required',
            'satuan13' => 'required',
            'kondisi13' => 'required',
            'barang14' => 'required',
            'jumlah14' => 'required',
            'satuan14' => 'required',
            'kondisi14' => 'required',
            'barang15' => 'required',
            'jumlah15' => 'required',
            'satuan15' => 'required',
            'kondisi15' => 'required',
            'barang16' => 'required',
            'jumlah16' => 'required',
            'satuan16' => 'required',
            'kondisi16' => 'required',
            'barang17' => 'required',
            'jumlah17' => 'required',
            'satuan17' => 'required',
            'kondisi17' => 'required',
            'barang18' => 'required',
            'jumlah18' => 'required',
            'satuan18' => 'required',
            'kondisi18' => 'required',
            'barang19' => 'required',
            'jumlah19' => 'required',
            'satuan19' => 'required',
            'kondisi19' => 'required',
            'barang20' => 'required',
            'jumlah20' => 'required',
            'satuan20' => 'required',
            'kondisi20' => 'required',
           
        ]);

        

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
       


        
        


        Post::create($validatedData);


   


         



        return redirect('/dashboard/posts/')->with('success', 'Laporan baru telah ditambahkan');
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
            // 'post_status_id' => $post_status,
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
        $this->post_status_id = 1;
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'post_status_id' => 'required',
            'body' => 'required',
            'barang1' => 'required',
            'jumlah1' =>'required',
            'satuan1' => 'required',
            'kondisi1' => 'required',
            'barang2' => 'required',
            'jumlah2' => 'required',
            'satuan2' => 'required',
            'kondisi2' => 'required',
            'barang3' => 'required',
            'jumlah3' =>'required',
            'satuan3' => 'required',
            'kondisi3' => 'required',
            'barang4' => 'required',
            'jumlah4' => 'required',
            'satuan4' => 'required',
            'kondisi4' => 'required',
            'barang5' => 'required',
            'jumlah5' => 'required',
            'satuan5' => 'required',
            'kondisi5' => 'required',
            'barang6' => 'required',
            'jumlah6' => 'required',
            'satuan6' => 'required',
            'kondisi6' => 'required',
            'barang7' => 'required',
            'jumlah7' => 'required',
            'satuan7' => 'required',
            'kondisi7' => 'required',
            'barang8' => 'required',
            'jumlah8' => 'required',
            'satuan8' => 'required',
            'kondisi8' => 'required',
            'barang9' => 'required',
            'jumlah9' => 'required',
            'satuan9' => 'required',
            'kondisi9' => 'required',
            'barang10' => 'required',
            'jumlah10' => 'required',
            'satuan10' => 'required',
            'kondisi10' => 'required',
            'barang11' => 'required',
            'jumlah11' => 'required',
            'satuan11' => 'required',
            'kondisi11' => 'required',
            'barang12' => 'required',
            'jumlah12' => 'required',
            'satuan12' => 'required',
            'kondisi12' => 'required',
            'barang13' => 'required',
            'jumlah13' => 'required',
            'satuan13' => 'required',
            'kondisi13' => 'required',
            'barang14' => 'required',
            'jumlah14' => 'required',
            'satuan14' => 'required',
            'kondisi14' => 'required',
            'barang15' => 'required',
            'jumlah15' => 'required',
            'satuan15' => 'required',
            'kondisi15' => 'required',
            'barang16' => 'required',
            'jumlah16' => 'required',
            'satuan16' => 'required',
            'kondisi16' => 'required',
            'barang17' => 'required',
            'jumlah17' => 'required',
            'satuan17' => 'required',
            'kondisi17' => 'required',
            'barang18' => 'required',
            'jumlah18' => 'required',
            'satuan18' => 'required',
            'kondisi18' => 'required',
            'barang19' => 'required',
            'jumlah19' => 'required',
            'satuan19' => 'required',
            'kondisi19' => 'required',
            'barang20' => 'required',
            'jumlah20' => 'required',
            'satuan20' => 'required',
            'kondisi20' => 'required',
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

    public function approved($id){
        try {
            
            Post::where('id', $id)->update([
                'post_status_id' =>2
            ]);
            \Session::flash('sukses', 'Data berhasil disetujui');
        } catch (\Exception $e) {
            \Session::flash('gagal', $e->getMessage());
        }
        return redirect()->back()->with(['success' => 'Laporan telah ditindaklanjuti']);
    }


    // public function approved($id)
    // {
    //     $post = Post::find($id);

    //     if($post){
    //         if($post->post_status_id){
    //             $post->post_status_id =1;
    //         }
    //         else {
    //             $post->post_status_id =2;
    //         }
    //         $post->save();
    //     }
    //     return redirect()->back()->with(['success' => 'Laporan telah ditindaklanjuti']);
    // }
}
