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
    <form class="sign-up-form form" action="{{url('tambahkan')}}" method="POST">
      @csrf
      <label class="form-label-wrapper">
        <p class="form-label">Nisn</p>
        <input class="form-input" type="text" name="nisn" placeholder="Masukan nama kelas" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Nis</p>
        <input class="form-input" type="text" name="nis" placeholder="Masukan nama kelas" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Nama Siswa</p>
        <input class="form-input" type="text" name="nama" placeholder="Masukan nama kelas" required>
      </label>
      <div class="form-label">
        <label class="form-label-wrapper">Nama Kelas</label>
        <select class="form-select" name="form-input" aria-label="Default select example" name="id_spp" id="">
          @foreach ($data as $item)
              <option value="{{$item->id_kelas}}">{{$item->nama_kelas}}-{{$item->kompetensi_keahlian}}</option>
          @endforeach
        </select>
    </div>
      <label class="form-label-wrapper">
        <p class="form-label">Alamat</p>
        <input class="form-input" type="text" name="alamat" placeholder="Masukan nama kelas" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Telepon</p>
        <input class="form-input" type="text" name="no_telp" placeholder="Masukan nama kelas" required>
      </label>
      <div class="form-label">
          <label class="form-label-wrapper">Nominal Dan Tahun</label>
          <select class="form-select" name="form-input" aria-label="Default select example" name="id_spp" id="">
            @foreach ($dataspp as $item)
                <option value="{{$item->id_spp}}">{{$item->tahun}}-{{$item->nominal}}</option>
            @endforeach
          </select>
      </div>
      {{-- <label class="form-label-wrapper">
        <p class="form-label">Id spp</p>
        <input class="form-input" type="text" name="id_spp" placeholder="Masukan nama kelas" required>
      </label> --}}
      <button class="form-btn primary-default-btn transparent-btn">Tambah</button>
      <a class="form-btn primary-default-btn transparent-btn my-3" href="{{url('siswa') }}">Batal</a><br>
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