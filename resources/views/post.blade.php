@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-5">{{ $post->title }}</h2>

            <h3>Status Laporan :</h3>
            @if ($post->post_status !==1)
              <td>
                <!-- <div class="badge bg-success"><label>{{ $post->post_status->nama }}</label></div> -->
                <h3><span class="badge bg-primary">{{ $post->post_status->nama }}</span></h3>
              </td>
              @else
              <td>
              <h3><span class="badge bg-success">{{ $post->post_status->nama }}</span></h3>
              </td>
              @endif
            
        
             <!-- <h5>{{ $post->author }}</h5> -->
                
                <p>By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }} </a> in<a href="//posts?category={{ $post->category->slug}}" class="text-decoration-none"> {{ $post->category->name   }} </a> created at : {{ $post->created_at }}</p>
                
                

                @if($post->image)
                <div style="max-height: 1200px; overflow:hidden; position:relative;">
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt=" $post->category->name  }}">
                </div>
                @else
                <img src="https://source.unsplash.com/500x400?{{$post->category->name}}" class="img-fluid" alt="{{ $post->category->name }}">
                @endif


                <h3 class="mt-5">URAIAN OBJEK PEMERIKSAAN :</h3>
            <table class="table table-striped table-hover mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>BARANG</th>
                                        <th class="d-none d-sm-table-cell">JUMLAH</th>
                                        <th>SATUAN</th>
                                        <th>KONDISI</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>1</td>
                                    <td>{{ $post->barang1 }}</td>
                                    <td>{{ $post->jumlah1 }}</td>
                                    <td>{{ $post->satuan1 }}</td>
                                    <td>{{ $post->kondisi1 }}</td>
                                    </tr>
                                    <tr>
                                    <td>2</td>
                                    <td>{{ $post->barang2 }}</td>
                                    <td>{{ $post->jumlah2 }}</td>
                                    <td>{{ $post->satuan2 }}</td>
                                    <td>{{ $post->kondisi2 }}</td>
                                    </tr>
                                    <tr>
                                    <td>3</td>
                                    <td>{{ $post->barang3 }}</td>
                                    <td>{{ $post->jumlah3 }}</td>
                                    <td>{{ $post->satuan3 }}</td>
                                    <td>{{ $post->kondisi3 }}</td>
                                    </tr>
                                    <tr>
                                    <td>4</td>
                                    <td>{{ $post->barang4 }}</td>
                                    <td>{{ $post->jumlah4 }}</td>
                                    <td>{{ $post->satuan4 }}</td>
                                    <td>{{ $post->kondisi4 }}</td>
                                    </tr>
                                    <tr>
                                    <td>5</td>
                                    <td>{{ $post->barang5 }}</td>
                                    <td>{{ $post->jumlah5 }}</td>
                                    <td>{{ $post->satuan5 }}</td>
                                    <td>{{ $post->kondisi5 }}</td>
                                    </tr>
                                    <tr>
                                    <td>6</td>
                                    <td>{{ $post->barang6 }}</td>
                                    <td>{{ $post->jumlah6 }}</td>
                                    <td>{{ $post->satuan6 }}</td>
                                    <td>{{ $post->kondisi6 }}</td>
                                    </tr>
                                    <tr>
                                    <td>7</td>
                                    <td>{{ $post->barang7 }}</td>
                                    <td>{{ $post->jumlah7 }}</td>
                                    <td>{{ $post->satuan7 }}</td>
                                    <td>{{ $post->kondisi7 }}</td>
                                    </tr>
                                    <tr>
                                    <td>8</td>
                                    <td>{{ $post->barang8 }}</td>
                                    <td>{{ $post->jumlah8 }}</td>
                                    <td>{{ $post->satuan8 }}</td>
                                    <td>{{ $post->kondisi8 }}</td>
                                    </tr>
                                    <tr>
                                    <td>9</td>
                                    <td>{{ $post->barang9 }}</td>
                                    <td>{{ $post->jumlah9 }}</td>
                                    <td>{{ $post->satuan9 }}</td>
                                    <td>{{ $post->kondisi9 }}</td>
                                    </tr>
                                    <tr>
                                    <td>10</td>
                                    <td>{{ $post->barang10 }}</td>
                                    <td>{{ $post->jumlah10 }}</td>
                                    <td>{{ $post->satuan10 }}</td>
                                    <td>{{ $post->kondisi10 }}</td>
                                    </tr>
                                    <tr>
                                    <td>11</td>
                                    <td>{{ $post->barang11 }}</td>
                                    <td>{{ $post->jumlah11 }}</td>
                                    <td>{{ $post->satuan11 }}</td>
                                    <td>{{ $post->kondisi11 }}</td>
                                    </tr>
                                    <tr>
                                    <td>12</td>
                                    <td>{{ $post->barang12 }}</td>
                                    <td>{{ $post->jumlah12 }}</td>
                                    <td>{{ $post->satuan12 }}</td>
                                    <td>{{ $post->kondisi12 }}</td>
                                    </tr>
                                    <tr>
                                    <td>13</td>
                                    <td>{{ $post->barang13 }}</td>
                                    <td>{{ $post->jumlah13 }}</td>
                                    <td>{{ $post->satuan13 }}</td>
                                    <td>{{ $post->kondisi13 }}</td>
                                    </tr>
                                    <tr>
                                    <td>14</td>
                                    <td>{{ $post->barang14 }}</td>
                                    <td>{{ $post->jumlah14 }}</td>
                                    <td>{{ $post->satuan14 }}</td>
                                    <td>{{ $post->kondisi14 }}</td>
                                    </tr>
                                    <tr>
                                    <td>15</td>
                                    <td>{{ $post->barang15 }}</td>
                                    <td>{{ $post->jumlah15 }}</td>
                                    <td>{{ $post->satuan15 }}</td>
                                    <td>{{ $post->kondisi15 }}</td>
                                    </tr>
                                    <tr>
                                    <td>16</td>
                                    <td>{{ $post->barang16 }}</td>
                                    <td>{{ $post->jumlah16 }}</td>
                                    <td>{{ $post->satuan16 }}</td>
                                    <td>{{ $post->kondisi16 }}</td>
                                    </tr>
                                    <tr>
                                    <td>17</td>
                                    <td>{{ $post->barang17 }}</td>
                                    <td>{{ $post->jumlah17 }}</td>
                                    <td>{{ $post->satuan17 }}</td>
                                    <td>{{ $post->kondisi17 }}</td>
                                    </tr>
                                    <tr>
                                    <td>18</td>
                                    <td>{{ $post->barang18 }}</td>
                                    <td>{{ $post->jumlah18 }}</td>
                                    <td>{{ $post->satuan18 }}</td>
                                    <td>{{ $post->kondisi18 }}</td>
                                    </tr>
                                    <tr>
                                    <td>19</td>
                                    <td>{{ $post->barang19 }}</td>
                                    <td>{{ $post->jumlah19 }}</td>
                                    <td>{{ $post->satuan19 }}</td>
                                    <td>{{ $post->kondisi19 }}</td>
                                    </tr>
                                    <tr>
                                    <td>20</td>
                                    <td>{{ $post->barang20}}</td>
                                    <td>{{ $post->jumlah20 }}</td>
                                    <td>{{ $post->satuan20 }}</td>
                                    <td>{{ $post->kondisi20 }}</td>
                                    </tr>
                                </tbody>
                            </table>


        <div class="mt-5 card">
            <h3>INFORMASI TAMBAHAN :</h3>
            <article class="my-3 fs-5">
            {!! $post->body !!}
            </article>
        </div>
            
            <!-- <article class="my-3 fs-5">
            {!! $post->body !!}
            </article> -->





            <a href="/posts" class="btn btn-success mt-5"><span data-feather="arrow-left"></span>Kembali Ke Laporan Saya</a>
            <!-- <a href="/posts" class="d-block mt-5 text-decoration-none fs-5"><strong>Back to Posts</strong></a> -->
        </div>
    </div>
</div>
      
@endsection