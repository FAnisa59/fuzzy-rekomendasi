@extends('layout.layout')

@section('content')

<body>
    <div class="p-3">
      <div class="container" style="margin-top: 70px;"> 
    <h1 style="text-align: left; padding:20px;">Edit Menu</h1>
    <form action="{{ route('pelanggan.update' , [$pelanggan->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label>Nama Pelanggan</label>
            <input name="nama_pelanggan" type="text" class="form-control"  value="{{ $pelanggan->nama_pelanggan}}">
          </div>
        <div class="form-group mb-3">
          <label>Usia</label>
          <input name="usia" type="text" class="form-control" value="{{ $pelanggan->usia}}">
        </div>
        <div class="form-group mb-3">
            <label>Status</label>
            <select name="pekerjaan" class="form-select form-select-lg mb-3" aria-label="Default select example" value="{{ $pelanggan->pekerjaan}}">
                <option selected disabled></option>
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Pekerja">Pekerja</option>
                <option value="-">-</option>
              </select>
          </div>
          <div class="form-group mb-3">
            <label>Nomor Meja</label>
            <input name="nomor_meja" type="text" class="form-control" value="{{ $pelanggan->nomor_meja}}">
          </div>
        <a href="/pelanggan" class=" btn btn-secondary">Kembali</a>
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