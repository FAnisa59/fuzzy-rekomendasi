@extends('layout.layout')

@section('content')
<body>
    <div class="p-3">
      <div class="container" style="margin-top: 70px;">
    <h1 style="text-align: left; padding:20px;">Tambah Data Pelanggan</h1>
    <form action="{{ route('pelanggan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
          <label>Nama Pelanggan</label>
          <input name="nama_pelanggan" type="text" class="form-control"  >
        </div>
        <div class="form-group mb-3">
          <label>Usia</label>
          <input name="usia" type="text" class="form-control"  >
        </div>
        <label>Status</label>
        <select name="pekerjaan" class="form-select form-select-lg mb-3" aria-label="Default select example">
          <option selected disabled></option>
          <option value="mahasiswa">Mahasiswa</option>
          <option value="pekerja">Pekerja</option>
          <option value="-">-</option>
        </select>
        <div class="form-group mb-3">
          <label>Nomor Meja</label>
          <input name="nomor_meja" type="text" class="form-control"  >
        </div>
        <a href="/pelanggan" class=" btn btn-secondary">Kembali</a>
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
