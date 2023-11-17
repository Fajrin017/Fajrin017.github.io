@extends ('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-5">{{ $post->title }}</h2>
            
        
             <!-- <h5>{{ $post->author }}</h5> -->
    <!-- <div class="badge bg-success"><label>{{ $post->post_status->nama }}</label></div> -->

            

    <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back To All My Posts</a>
    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
    <form action="/dashboard/posts/{{ $post->slug}}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Delete</button>
    </form>

        @if($post->image)
        <div style="max-height: 400px; overflow:hidden;">
        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3" alt=" $post->category->name  }}">
        </div>
        @else
        <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
        @endif

                
            
            <article class="my-3 fs-5">
            {!! $post->body !!}
            </article>




            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>BARANG</th>
                                        <th class="d-none d-sm-table-cell">JUMLAH</th>
                                        <th>SATUAN</th>
                                        <th>KONDISI</th>
                                        <!-- <th class="text-right">AMOUNT</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                       
                                
                                    <tr>
                                    <td>#</td>
                                    <td>{{ $post->barang }}</td>
                                    <td>{{ $post->jumlah }}</td>
                                    <td>{{ $post->satuan }}</td>
                                    <td>{{ $post->kondisi }}</td>
                                    </tr>
                                
                                </tbody>
                            </table>
            
            
        </div>
    </div>
</div>

@endsection