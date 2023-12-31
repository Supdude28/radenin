<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Sign In</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="/assets/img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="/assets/css/style.min.css">
</head>

<body>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title">Welcome back!</h1>
    <p class="sign-up__subtitle">Sign in to your account to continue</p>
    <form class="sign-up-form form" action="{{url('adminspp/loginadmin')}}" method="POST">
      @csrf
      <label class="form-label-wrapper">
        <p class="form-label">Username</p>
        <input class="form-input" type="text" name="username" placeholder="Enter your username" >
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Password</p>
        <input class="form-input" type="password" name="password" placeholder="Enter your password" required>
      </label>
      <a class="link-info forget-link" href="##">Forgot your password?</a>
      
      <button class="form-btn primary-default-btn transparent-btn">Sign in</button>
      {{-- <a class="link-info forget-link" href="{{url('registrasiadmin')}}">"Registrasi</a> --}}
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