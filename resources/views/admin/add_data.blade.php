@extends('layout.layout')

@section('content')
<body>
    <div class="p-3">
      <div class="container" style="margin-top: 70px;">
    <h1 style="text-align: left; padding:20px;">Tambah Data</h1>
    <form action="{{ route('rekomendasi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Pelanggan</label>
        <select name="nama_pelanggan" class="form-select form-select-lg mb-3" aria-label="Default select example">
          
        @foreach($pelanggan as $key => $value)
        <option value="{{ $value->id }}">{{ $value->nama_pelanggan }}</option>
        @endforeach
        </select>
        <label>Menu</label>
        <select name="nama_menu" class="form-select form-select-lg mb-3" aria-label="Default select example">
          
        @foreach($menu as $key => $value)
        <option value="{{ $value->id }}">{{ $value->nama_menu }}</option>
        @endforeach
        </select>
        <div class="form-group mb-3">
          <label>Rate Rasa</label>
          <input name="rasa" type="text" class="form-control"  >
        </div>
        <div class="form-group mb-3">
          <label>Rate Harga</label>
          <input name="harga" type="text" class="form-control"  >
        </div>
        <div class="form-group mb-3">
          <label>Rate Plating</label>
          <input name="plating" type="text" class="form-control">
        </div>
        <div class="form-group mb-3">
          <label>Ulasan</label>
          <input name="ulasan" type="longtext" class="form-control">
        </div>
        <a href="/rekomendasi" class=" btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
      </div>
    </div>
  </div>
</body>
@endsection
