<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Pembayaran | SPP</title>
  <!-- Favicon -->
  <link rel="stylesheet" href="/assets/cssboots/bootstrap.css">
  <link rel="shortcut icon" href="/assets/img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="/assets/css/style.min.css">
  <style>
    .bruh{
        margin-right: 50px;
    }
    .oyaa{
      margin-left:933px; 
    }
  </style>
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title">SPP</span>
                    <span class="logo-subtitle">Sekolah</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a href="{{url('adminspp')}}"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon document" aria-hidden="true"></span>Posts
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a class="active" href="posts.html">Data Pembayaran</a>
                        </li>
                        <li>
                            <a href="{{url('siswaspp')}}">Data Spp</a>
                        </li>
                        <li>
                            <a href="#">Tambah Spp</a>
                        </li>
                    </ul>
                </li> 




                
            </ul>
            <h1 class="system-menu__title">system</h1>
            <ul class="sidebar-body-menu">
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon user-3" aria-hidden="true"></span>Siswa
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                      <li>
                          <a href="{{url('siswa')}}">Data Siswa</a>
                      </li>
                  </ul>
                </li>
                  <a class="show-cat-btn" href="##">
                      <span class="icon user-3" aria-hidden="true"></span>Petugas
                      <span class="category__btn transparent-btn" title="Open list">
                          <span class="sr-only">Open list</span>
                          <span class="icon arrow-down" aria-hidden="true"></span>
                      </span>
                  </a>
                  <ul class="cat-sub-menu">
                      <li>
                          <a href="{{url('petugas')}}">Data Petugas</a>
                      </li>
                  </ul>
              </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon document" aria-hidden="true"></span>Kelas
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a class="" href="{{url('kelas')}}">Data Kelas</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="##"><span class="icon setting" aria-hidden="true"></span>Settings</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="##" class="sidebar-user">
            <span class="sidebar-user-img">
                {{-- <picture><source srcset="assets/img/avatar/avatar-illustrated-01.webp" type="image/webp"><img src="assets/img/avatar/avatar-illustrated-01.png" alt="User name"></picture> --}}
            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__title">Dadang Supra</span>
                <span class="sidebar-user__subtitle">Support manager</span>
            </div>
        </a>
    </div>
</aside>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start">
      <div class="search-wrapper">
        <i data-feather="search" aria-hidden="true"></i>
        <input type="text" placeholder="Enter keywords ..." required>
      </div>
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
      <div class="lang-switcher-wrapper">
        <button class="lang-switcher transparent-btn" type="button">
          IND
          <i data-feather="chevron-down" aria-hidden="true"></i>
        </button>
        <ul class="lang-menu dropdown">
          <li><a href="##">Indonesia</a></li>
          <li><a href="##">English</a></li>
        </ul>
      </div>
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
      <div class="notification-wrapper">
        <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
          <span class="sr-only">To messages</span>
          <span class="icon notification active" aria-hidden="true"></span>
        </button>
        <ul class="users-item-dropdown notification-dropdown dropdown">
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">System just updated</span>
                <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                  here.</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon danger">
                <i data-feather="info" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">The cache is full!</span>
                <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                  interfere ...</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">New Subscriber here!</span>
                <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
              </div>
            </a>
          </li>
          <li>
            <a class="link-to-page" href="##">Go to Notifications page</a>
          </li>
        </ul>
      </div>
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
            {{-- <picture><source srcset="assets/img/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-02.png" alt="User name"></picture> --}}
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
          <li><a href="##">
              <i data-feather="user" aria-hidden="true"></i>
              <span>Profile</span>
            </a></li>
          <li><a href="##">
              <i data-feather="settings" aria-hidden="true"></i>
              <span>Account settings</span>
            </a></li>
          <li><a class="danger" href="##">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Logout</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container">
        {{-- <h2 class="main-title">Dashboard</h2>
        <div class="row stat-cards">
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon warning">
                <i data-feather="bar-chart-2" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">0</p>
                <p class="stat-cards-info__title">Total Pembayaran Belum Lunas</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit success">
                    <i data-feather="trending-up" aria-hidden="true"></i>0%
                  </span>
                  Last month
                </p>
              </div>
              
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon success">
                <i data-feather="file" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">0</p>
                <p class="stat-cards-info__title">Total Pembayaran Lunas</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit success">
                    <i data-feather="trending-up" aria-hidden="true"></i>0%
                  </span>
                  Last month
                </p>
              </div>
            </article>
          </div> --}}
          <div>
            <th>Data Pembayaran</th>
          </div>
          {{-- <div class="oyaa">
            <div class="btn btn-primary">
              <a href="{{url('kantambah')}}">Tambah Data</a><br>
            </div>
          </div> --}}
          <!-- Button trigger modal -->
          <div class="oyaa">

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Tambah Data
            </button>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Pembayaran</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <main class="page-center">
                    <article class="sign-up">
                      <h1 class="sign-up__title">Tambah Pembayaran</h1>
                      <p class="sign-up__subtitle">Jujur lah dengan keadaan yang sekarang</p>
                      <form class="sign-up-form form" action="" method="">
                        <label class="form-label-wrapper">
                          <p class="form-label">Nisn</p>
                          <input class="form-input" type="text" name="" placeholder="Masukan Nisn" required>
                        </label>
                        <label for="tanggal_bayar" class="form-label">Tanggal Pembayaran</label>
                        <input type="date" class="form-control" name="tanggal_bayar" id="tanggal_bayar" placeholder="tanggal_pengaduan">
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
                      </form>
                    </article>
                  </main>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button"  class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
            <div class="bruh card">
            <div class="users-table table-wrapper">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Id Pembayaran</th>
                    <th scope="col">Id Petugas</th>                      
                    <th scope="col">Nisn</th>
                    <th scope="col">Tanggal Bayar</th>
                    <th scope="col">Tahun Bayar</th>
                    <th scope="col">Bulan Bayar</th>
                    <th scope="col">Jumlah Bayar</th>
                </tr>                     
                </thead>
                <tbody>
                    <tr>
                        @foreach ($au as $item)
                            <th>{{$item->id_pembayaran}}</th>
                            <th>{{$item->id_petugas}}</th>
                            <th>{{$item->nisn}}</th>
                            <th>{{$item->tanggal_bayar}}</th>
                            <th>{{$item->tahun_dibayar}}</th>
                            <th>{{$item->bulan_dibayar}}</th>
                            <th>{{$item->jumlah_bayar}}</th>
                        @endforeach
                    </tr>
                </tbody>
              </table>
          </div>
          </div>
          
    <!-- ! Footer -->
    <footer class="footer">
  <div class="container footer--flex">
    <div class="footer-start">
      <p>2021 © Elegant Dashboard - <a href="elegant-dashboard.com" target="_blank"
          rel="noopener noreferrer">elegant-dashboard.com</a></p>
    </div>
    <ul class="footer-end">
      <li><a href="##">About</a></li>
      <li><a href="##">Support</a></li>
      <li><a href="##">Puchase</a></li>
    </ul>
  </div>
</footer>
  </div>
</div>
<!-- Chart library -->
<script src="/assets/plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="/assets/plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="assets/js/script.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>