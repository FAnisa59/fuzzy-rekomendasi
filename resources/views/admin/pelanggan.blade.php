@extends('layout.layout')

@section('content')

<body>
    <div class="p-3" >
      <div class="container" style=" margin-top: 70px;" >
        <div class="p-6">
        <div class="p-6">
          <a href="{{ route ('pelanggan.create') }}" class="btn btn-info mb-3">Tambah Data</a>
        <table class="table table-hover table-striped table-bordered table-primary">
            <thead>
              <tr class="tabel" style="text-align: center;">
                <th scope="col">No</th>
                <th scope="col">Id Pelanggan</th>
                <th scope="col">Nama Pelanggan</th>
                <th scope="col">Usia</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no =1;?>
              @foreach ($pelanggan as $item)
              <tr>
          <th scope="row">{{$no++}}</th>
              <td> {{$item->id}}</td>
              <td> {{$item->nama_pelanggan}}</td>
              <td> {{$item->usia}}</td>
              <td> {{$item->pekerjaan}}</td>
              <td>
              <a href="{{ route ('pelanggan.edit', ['id' => $item->id]) }}" class="btn btn-icon" ><i class="fas fa-edit" style="font-size: 20px; color:black"></i></a>
                <button onclick="destroy({{ $item->id}})"class="btn btn-icon"><i class="fas fa-trash" style="font-size: 20px; color:red"></i></button>
              </td>
            </tr>
              @endforeach
          </tbody>
        </table>
        </div>
      </div>
    </div>
    <script>
  function destroy(id){
      console.log(id);

    if ( confirm ('Anda yakin ingin menghapus data?')){
      $.ajax({
        type : "post",
        url : " {{ route ('pelanggan.destroy')}}/?id=" +id,
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