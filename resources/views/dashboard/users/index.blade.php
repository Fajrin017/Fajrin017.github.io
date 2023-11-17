@extends ('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Semua User</h1>
    <h5 style="color:blue;">Jumlah Pengguna telah diinput : {{ $users->count() }}</h5>
  </div>

  @if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div>
  @endif

  <div class="table-responsive col-lg-12">
    <a href="/dashboard/users/create" class= "btn btn-primary mb-3">Buat User Baru</a>
        <table class="table table-striped table-sm-4">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">Password</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            
            @foreach ($users as $user)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->username }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->password }}</td>
              <td>
              <td>
              @can('admin')              
                <a href="/dashboard/users/{{ $user->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="/dashboard/users/{{ $user->id }}" method="post" class="d-inline">
                <button class="badge bg-danger border-0" onclick="return confirm('Apakah Anda Yakin?')"><span data-feather="x-circle"></span></button>
                @method('delete')
                @csrf
              </form>
              @endcan
              </td>
              </td>
              
              
             
              
              
              
              
              
              
              
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>



      <a class="btn btn-success mb-5" href="/dashboard/postingan"><span data-feather="arrow-left"></span>Kembali</a>

@endsection


<!-- @push('script')
<script>
    let counter= 1
        $(#addButton).click (function() {
          counter ++

          let newInputan = '<tr><td><input class="form-control" style="min-width:150px" type="text" id="barang" name="barang[]"></td><td><input class="form-control"style="min-width:100px" type="text" id="jumlah" name="jumlah[]"></td><td><input class="form-control" style="width:80px" type="text" id="satuan" name="satuan[]"></td><td><input class="form-control" style="width:120px" type="text" id="kondisi" name="kondisi[]"></td></tr>'

                        $('#tambah_inputan').append(newInputan)
        });

            $('#removeButton').click(function () {
                if(counter ==1) {
                  swal.fire("Inputan tidak bisa dihapus")
                }
            });

</script> -->
@endpush