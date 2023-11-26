@extends('layout.layout')

@section('content')

<body>
    <div class="p-3">
      <div class="container" style="margin-top: 70px;"> 
    <h1 style="text-align: left; padding:20px;">Edit Menu</h1>
    <form action="{{ route('menu.update' , [$menu->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label>Jenis Menu*</label>
            <select name="jenis_menu" class="form-select form-select-lg mb-3" aria-label="Default select example"  value="{{ $menu->jenis_menu}}">
            <option selected disabled></option>
          <option value="Makanan">Makanan</option>
          <option value="Minuman">Minuman</option>
          <option value="Dessert">Dessert</option>
          <option value="Snack">Snack</option>
            </select>
          </div>
        <div class="form-group mb-3">
          <label>Nama Menu*</label>
          <input name="nama_menu" type="text" class="form-control" value="{{ $menu->nama_menu}}">
        </div>
        <div class="form-group mb-3">
          <label>Harga*</label>
          <input name="harga" type="text" class="form-control" value="{{ $menu->harga}}">
        </div>
        <div class="form-group mb-3">
          <label>Deskripsi*</label>
          <input name="deskripsi" type="text" class="form-control" value="{{ $menu->deskripsi}}">
        </div>
        <div class="form-group mb-3">
          <label>Gambar*</label>
          <input name="gambar" type="file" class="form-control" value="{{ $menu->gambar}}">
        </div>
        <a href="/menu" class=" btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
  </script>
</body>
</html>
@endsection