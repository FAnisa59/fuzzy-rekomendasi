@extends('layout.layout')

@section('content')
<body>
    <div class="p-3">
      <div class="container" style="margin-top: 70px;">
    <h1 style="text-align: left; padding:20px;">Tambah Menu</h1>
    <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Jenis Menu</label>
        <select name="jenis_menu" class="form-select form-select-lg mb-3" aria-label="Default select example">
          <option selected disabled></option>
          <option value="Makanan">Makanan</option>
          <option value="Minuman">Minuman</option>
          <option value="Dessert">Dessert</option>
          <option value="Snack">Snack</option>
        </select>
        <div class="form-group mb-3">
          <label>Nama Menu</label>
          <input name="nama_menu" type="text" class="form-control"  >
        </div>
        <div class="form-group mb-3">
          <label>Harga</label>
          <input name="harga" type="text" class="form-control"  >
        </div>
        <div class="form-group mb-3">
          <label>Deskripsi</label>
          <input name="deskripsi" type="text" class="form-control">
        </div>
        <div class="form-group mb-3">
          <label>Gambar*</label>
          <input name="gambar" type="file" class="form-control">
        </div>
        <a href="/menu" class=" btn btn-secondary">Kembali</a>
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
