@extends ('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">BUAT LAPORAN PEMERIKSAAN SARPRAS</h1>
  </div>

  <div class="col-lg-8">
      <form action="/dashboard/posts" method="post" class="mb-3" enctype="multipart/form-data">
        @csrf
      <div class="mb-3">
        <label for="title" class="form-label">KEGIATAN PEMERIKSAAN</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
     </div>
     
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
        @error('slug')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      
      <div class="mb-3">
        <label for="Category" class="form-label">SEKSI/BAGIAN</label>
        <select class="form-select" name="category_id">
          @foreach ( $categories as $category)
            @if(old('category_id') == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">DOKUMENTASI PEMERIKSAAN</label>
        <img class="img-preview img-fluid mb-3 col-sm-5">
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
        @error('image')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>


      <div class="mb-3">
        <label for="body" class="form-label">KETERANGAN TAMBAHAN</label>
        @error('body')
        <p class="text-danger">{{ $message }}</p>
        @enderror
          <input id="body" type="hidden" name="body" value="{{ old('body') }}">
          <trix-editor input="body"></trix-editor>
      </div>

      

      <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-hover table-white" id="tableEstimate">
                                        <thead>
                                            <tr>
                                                <th style="width: 20px">#</th>
                                                <th class="col-sm-6">Nama Barang</th>
                                                <th class="col-md-2">Jumlah</th>
                                                <th style="width:100px;">Satuan</th>
                                                <th class="col-sm-4">Kondisi</th>
                                                <!-- <th>Amount</th> -->
                                            </tr>
                                        </thead>
                                        <tbody id="data">
                                        <tr>
                                            <td>1</td>
                                            
                                            <td><input class="form-control" style="min-width:150px" type="text" id="barang" name="barang[]"></td>
                                            <td><input class="form-control"style="min-width:100px" type="number" id="jumlah" name="jumlah[]"></td>
                                            <td><input class="form-control" style="width:80px" type="text" id="satuan" name="satuan[]"></td>
                                            <td><input class="form-control" style="width:120px" type="text" id="kondisi" name="kondisi[]"></td>
                                            <!-- <td><input class="form-control total" style="width:120px" type="text" id="amount" name="amount[]" value="0" readonly></td> -->
                                            <td><button type="button" class="btn btn-sm btn-primary float-end" title="Add" id="add-input" >Tambah Data</button></td>
                                            <!-- <td><a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn"><i class="fa fa-plus">Tambah</i></a></td> -->
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>

          <!-- <div class="form-group">
            <button class="btn btn-primary" value="Tambah Uraian" type="button" id="addButton" ><span data-feather="file-plus"></span></button>
            <button class="btn btn-outline-primary" value="Hapus Uraian" type="button" id="removeButton" ><span data-feather="file-minus"></span></button>
          </div>
          <div id="tambah_inputan"></div> -->
      
      
      <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
  </div>
  
  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener ('trix-file-accept', function(e) {
      e.preventDefault();
    })

    function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');
    
    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }
    }

  
        //     var rowIdx = 1;
        //     $("#addBtn").on("click", function ()
        //     {
        //         // Adding a row inside the tbody.
        //         $("#tableEstimate tbody").append(`
        //         <tr id="R${++rowIdx}">
        //             <td class="row-index text-center"><p> ${rowIdx}</p></td>
        //             <td><input class="form-control" type="text" style="min-width:150px" id="barang" name="barang[]"></td>
        //             <td><input class="form-control" type="text" style="min-width:150px" id="jumlah" name="jumlah[]"></td>
        //             <td><input class="form-control" style="width:100px" type="text" id="satuan" name="satuan[]"></td>
        //             <td><button type="button" class="btn btn-sm btn-primary float-end" title="Add" id="addBtn">Tambah Data</button></td>
        //         </tr>`);
        //     });
        //     $("#tableEstimate tbody").on("click", ".remove", function ()
        //     {
        //         // Getting all the rows next to the row
        //         // containing the clicked button
        //         var child = $(this).closest("tr").nextAll();
        //         // Iterating across all the rows
        //         // obtained to change the index
        //         child.each(function () {
        //         // Getting <tr> id.
        //         var id = $(this).attr("id");

        //         // Getting the <p> inside the .row-index class.
        //         var idx = $(this).children(".row-index").children("p");

        //         // Gets the row number from <tr> id.
        //         var dig = parseInt(id.substring(1));

        //         // Modifying row index.
        //         idx.html(`${dig - 1}`);

        //         // Modifying row id.
        //         $(this).attr("id", `R${dig - 1}`);
        //     });
    
        //         // Removing the current row.
        //         $(this).closest("tr").remove();
    
        //         // Decreasing total number of rows by 1.
        //         rowIdx--;
        //     });
        // </script>



       



<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    let dataRow = 0
        $('#add-input').click( () => {
            dataRow++
            inputRow(dataRow)
        })

        inputRow = (i) => {
            let tr = `<tr id="input-tr-${++i}">
                        <td>
                        ${i}
                        </td>
                        <td>
                          <input class="form-control" style="min-width:150px" type="text" id="barang" name="barang[]">
                        </td>
                        <td>
                          <input class="form-control"style="min-width:100px" type="text" id="jumlah" name="jumlah[]">
                        </td>
                        <td>
                          <input class="form-control" style="width:80px" type="text" id="satuan" name="satuan[]">
                        </td>
                        <td>
                        <input class="form-control" style="width:120px" type="text" id="kondisi" name="kondisi[]">
                        </td>
                        <td><button class="btn btn-sm btn-danger delete-record float-end" data-id="${i}">Hapus</button></td>
                    </tr>`
            $('#data').append(tr)
        }

        $('#data').on('click', '.delete-record', function() {
            let id = $(this).attr('data-id')
            $('#input-tr-'+id).remove()
        })
</script>



<!-- <script type="text/javascript">
  $('.addCustomer').on('click', function(){
      addCustomer();
  });
  function addCustomer(){
    var customer = '';
    $('.customer').append(customer);
  };

  $('.remove').live('click', function(){
    $(this).parent().parent().parent().remove();
  }); -->

</script>





@endsection