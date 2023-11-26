@extends('layout.layout')

@section('content')

<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

    <title>Order</title>
</head>

<body>
    <div class="p-3">
      <div class="container">
        <div class="p-6">
        <h3 style="text-align: center;">Detail Pemesanan</h3>
        <table class="table table-hover table-striped table-bordered table-primary">
            <thead>
              <tr class="tabel" style="text-align: center;">
                <th scope="col">No</th>
                <th scope="col">Menu</th>
                <th scope="col">Harga</th>
              </tr>
            </thead>
            <tbody>
              <?php $no =1;?>
              @foreach ($order_detail as $item)
              <tr>
          <th scope="row">{{$no++}}</th>
              <td> {{$item->id_pemesanan}}</td>
              <td> {{$item->id_menu}}</td>
              <td> {{$item->harga}}</td>
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