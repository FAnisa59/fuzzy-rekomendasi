@extends('layout.layout')

@section('content')

<body>
    <div class="p-3" >
      <div class="container" style=" margin-top: 70px;" >
        <div class="p-6">
        <div class="p-6">
          <a href="{{ route ('rekomendasi.create') }}" class="btn btn-success mb-3">Tambah Data</a>
        <table class="table table-hover table-striped table-bordered table-primary">
            <thead>
              <tr class="tabel" style="text-align: center;">
                <th scope="col">No</th>
                <th scope="col">id_pelanggan</th>
                <th scope="col">Menu</th>
                <th scope="col">Ulasan</th>
                <th scope="col">Skor Rating</th>
                <th scope="col">Output</th>
              </tr>
            </thead>
            <tbody>
              <?php $no =1;?>
              @foreach ($rekomendasi as $item)
              <tr>
          <th scope="row">{{$no++}}</th>
              <td> {{$item->id_pelanggan}}</td>
              <td> {{$item->id_menu}}</td>
              <td> {{$item->ulasan}}</td>
              <td> {{$item->skor_rating}}</td>
              <td> {{$item->output}}</td>
            </tr>
              @endforeach
          </tbody>
        </table>
        </div>
      </div>
    </div>
</body>
</html>

@endsection