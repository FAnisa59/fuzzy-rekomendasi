@extends('layout.layout')

@section('content')

<body>
<div class="p-3" >
      <div class="container" style=" margin-top: 70px;" >
        <h3 style="text-align: center;">Table Pemesanan</h3>
          <a href="#" class="btn btn-success mb-3">Add Order</a>
        <table class="table table-hover table-striped table-bordered table-primary">
            <thead>
              <tr class="tabel" style="text-align: center;">
                <th scope="col">No</th>
                <th scope="col">No.Pelanggan</th>
                <th scope="col">Status Pemesanan</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Jenis Pembayaran</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no =1;?>
              @foreach ($pemesanan as $item)
              <tr>
          <th scope="row">{{$no++}}</th>
              <td> {{$item->id_pelanggan}}</td>
              <td> {{$item->status_pemesanan}}</td>
              <td> {{$item->total_harga}}</td>
              <td> {{$item->jenis_pembayaran}}</td>
              <td>
                <a href="/order_detail" class="btn btn-success">Detail</a>
                <a href="/cetak" class="btn btn-success">Cetak</a>
                <button onclick="destroy({{ $item->id}})" class="btn btn-success">Hapus</button>
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
        url : " {{ route ('pemesanan.destroy')}}//?id=" +id,
        data : {
          "id": id,
          "_method" :"delete"
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