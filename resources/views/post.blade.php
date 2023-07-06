@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-5">{{ $post->title }}</h2>
            
        
             <!-- <h5>{{ $post->author }}</h5> -->
                
                <p>By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }} </a> in<a href="//posts?category={{ $post->category->slug}}" class="text-decoration-none"> {{ $post->category->name   }} </a> created at : {{ $post->created_at }}</p>
                
                

                @if($post->image)
                <div style="max-height: 1200px; overflow:hidden; position:relative;">
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt=" $post->category->name  }}">
                </div>
                @else
                <img src="https://source.unsplash.com/500x400?{{$post->category->name}}" class="img-fluid" alt="{{ $post->category->name }}">
                @endif
            
            <article class="my-3 fs-5">
            {!! $post->body !!}
            </article>


            <!-- Comment Form -->
            <!-- <div class="card my-6">
                <div class="card-header">
                Berikan Komentar :
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                    <div class="form-group my-2">
                        <p>Nama :</p>
                        <input type="text" class="form-control" name="nama" id="nama"></input>
                    </div>
                    <div class="form-group my-2">
                        <p>Komentar :</p>
                        <input type="text" class="form-control" name="komentar" id="komentar"></input>
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">kirim</button>
                    </form>
                </div>
            </div> -->

            <!-- Single Comment -->
            <div class="media mb-3">
                <div class="media-body">
                    <h5>Nama Komentator:</h5>
                </div>
            </div>



            <a href="/posts" class="d-block mt-5 text-decoration-none fs-5"><strong>Back to Posts</strong></a>
        </div>
    </div>
</div>

    <!-- <h1 class="mb-5">Halaman Blog Posts</h1> -->
    
    
    
@endsection