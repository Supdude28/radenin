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
    <h1 class="sign-up__title">Tambah Data Kelas</h1>
    {{-- <p class="sign-up__subtitle">Jujur lah dengan keadaan yang sekarang</p> --}}
    <form class="sign-up-form form" action="{{url('kelastambah')}}" method="post">
      @csrf
      <label class="form-label-wrapper">
        <p class="form-label">Nama Kelas</p>
        <input class="form-input" type="text" name="nama_kelas" placeholder="Masukan nama kelas" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Kompetensi Keahlian</p>
        <input class="form-input" type="text" name="kompetensi_keahlian" placeholder="Masukan kompetensi keahlian" required>
      </label>
      <button class="form-btn primary-default-btn transparent-btn">Tambah</button>
      <a class="form-btn primary-default-btn transparent-btn my-3" href="{{url('kelas') }}">Batal</a><br>
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