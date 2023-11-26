<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OrderX</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <p class="text-center">Selamat Datang</p>
                <form action="{{ route('loginuser') }}" method="POST" class="mt-10" id="loginuser">
                  @csrf
                  <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama_pelanggan">
                  </div>
                  <div class="mb-4">
                    <label class="form-label">Nomor Meja</label>
                    <input type="text" class="form-control" id="nomor_meja">
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Masuk</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
<script>
  $(document).ready(function() {
  $('#loginuser').submit(function(e) {
      e.preventDefault();

      const data = $(this).serialize();
      $.ajax({
          url: '/user/masuk',
          method: 'post',
          data: $(this).serialize(),
          success: function(response) {
              if (response.success) {
                  alert(response.message);
              } else {
                  alert(response.message);
              }
          },
          error: function() {
              alert('Terjadi kesalahan');
          }
      });
  });
});
</script>


</html>