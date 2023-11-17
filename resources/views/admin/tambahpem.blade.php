<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Sign Up</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title">Tambah Pembayaran</h1>
    <p class="sign-up__subtitle">Jujur lah dengan keadaan yang sekarang</p>
    <form class="sign-up-form form" action="" method="">
      <label class="form-label-wrapper">
        <p class="form-label">Nisn</p>
        <input class="form-input" type="text" name="" placeholder="Masukan Nisn" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Tanggal Bayar</p>
        <input class="form-input" type="date" name="" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Tahun</p>
        <input class="form-input" type="text" name="" placeholder="Masukan Tahun Pembayaran" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Bulan</p>
        <input class="form-input" type="text" name="" placeholder="Masukan Bulan Pembayaran" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Jumlah Bayar</p>
        <input class="form-input" type="text" name="" placeholder="Masukan Jumlah Pembayaran" required>
      </label>
      <label class="form-checkbox-wrapper">
        <input class="form-checkbox" type="checkbox" required>
        <span class="form-checkbox-label">Remember me next time</span>
      </label>
      <a class="form-btn primary-default-btn transparent-btn">Tambah</a>
      <a class="form-btn primary-default-btn transparent-btn my-3" href="{{url('adminspp') }}">Batal</a><br>
    </form>
  </article>
</main>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
</body>

</html>