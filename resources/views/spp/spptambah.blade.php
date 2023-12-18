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
  <link rel="stylesheet" href="assets/css/style.min.css">
  <style>
    
  </style>
</head>

<body>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title">Get started</h1>
    <p class="sign-up__subtitle">Start creating the best possible user experience for you customers</p>
    <form class="sign-up-form form" action="{{url('tambahispp')}}" method="post">
      @csrf
      <label class="form-label-wrapper">
        <p class="form-label">tahun</p>
        <input class="form-input" type="text" name="tahun" placeholder="Masukan Tahun Spp" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Nominal</p>
        <input class="form-input" type="text" name="nominal" placeholder="Masukan Nominal spp" required>
      </label>
      
      <button class="form-btn primary-default-btn transparent-btn">Tambah</button><br>
      <a class="form-btn primary-default-btn transparent-btn" href="{{url('siswaspp')}}">Kembali</a>
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