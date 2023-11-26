@extends('layout.layout')

@section('content')

<body>
  <div class="card" >
    <div class="p-3" >
      <div class="container" style=" margin-top: 70px;" >
        <h3 class="card-title" style="text-align: center;">Table Menu</h3>
        <div class="p-6">
          <a href="{{ route ('menu.create') }}" class="btn btn-info mb-3">Tambahkan Menu</a>
        <table class="table table-hover table-striped table-bordered table-primary">
            <thead>
              <tr class="tabel" style="text-align: center;">
                <th scope="col">No</th>
                <th scope="col">Kode Menu</th>
                <th scope="col">Jenis Menu</th>
                <th scope="col">Nama Menu</th>
                <th scope="col">Harga</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no =1;?>
              @foreach ($menu as $item)
              <tr>
          <th scope="row">{{$no++}}</th>
              <td> {{$item->id}}</td>
              <td> {{$item->jenis_menu}}</td>
              <td> {{$item->nama_menu}}</td>
              <td> {{$item->harga}}</td>
              <td> {{$item->deskripsi}}</td>
              <td>
              <img src="{{ asset('uploads/' . $item->gambar) }}" alt="{{ $item->nama_menu }}" width="100">
              </td>
              <td>
                <a href="{{ route ('menu.edit', ['id' => $item->id]) }}" class="btn btn-icon" ><i class="fas fa-edit" style="font-size: 20px; color:black"></i></a>
                <button onclick="destroy({{ $item->id}})"class="btn btn-icon"><i class="fas fa-trash" style="font-size: 20px; color:red"></i></button>
              </td>
            </tr>
              @endforeach
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
    
    <script>
  function destroy(id){
      console.log(id);

    if ( confirm ('Anda yakin ingin menghapus data?')){
      $.ajax({
        type : "post",
        url : " {{ route ('menu.destroy')}}/?id=" +id,
        data : {
          "id": id,
          "_method" :"delete",
          "_token" :"{{ csrf_token() }} "
        },
        success: function(response){
        window.location.reload();
        }
      });
    }
  }
  </script>
</body>
</html>

@endsection