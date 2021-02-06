<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Donnelworks - {{ $judul }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Boxicon -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/boxicons/css/boxicons.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom-0">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="bx bx-menu bx-sm"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="bx bx-fullscreen bx-sm"></i>
        </a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)">
          <i class="bx bx-bell bx-tada bx-sm"></i>
          <span class="badge badge-primary navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>

      <li class="nav-item dropdown user-menu">
        <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)">
          <!-- <i class="bx bx-user bx-sm"></i> -->
          <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="user-image img-circle elevation-0" alt="User">
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <span class="dropdown-header">
            <strong>Donny Anggara Putra</strong> <br>
            Admin
          </span>
          <div class="dropdown-divider"></div>
          <a href="javascript:void(0)" class="dropdown-item">
            <span class="text-muted"><i class="far fa-user mr-2"></i> Profile</span>
          </a>
          <a href="javascript:void(0)" class="dropdown-item">
            <span class="text-muted"><i class="fas fa-cog mr-2"></i> Setting</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="javascript:void(0)" class="dropdown-item mb-2">
            <span class="text-muted"><i class="fas fa-power-off mr-2"></i> Keluar</span>
          </a>
        </div>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-0">
    <a href="index3.html" class="brand-link navbar-dark">
      <img src="{{ asset('assets/dist/img/logo.svg') }}" alt="Logo" class="brand-image">
      <span class="brand-text font-weight-medium text-light">donnelworks</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-0" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <div class="form-inline mt-3">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-3">
        <ul class="nav nav-legacy nav-sidebar flex-column nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/dashboard" class="nav-link active">
              <i class="nav-icon bx bx-home-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <!-- PERSEDIAAN -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bx bx-box"></i>
              <p>Persediaan <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="bx bx-circle nav-icon"></i>
                  <p>Master <i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"><p>Kategori</p></a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link"><p>Merek</p></a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link"><p>Lokasi</p></a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link"><p>Barang</p></a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="bx bx-circle nav-icon"></i>
                  <p>Transaksi <i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"><p>Stock Opname</p></a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="bx bx-circle nav-icon"></i>
                  <p>Cetak Label <i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"><p>Barcode</p></a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link"><p>Pricetag</p></a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="bx bx-circle nav-icon"></i>
                  <p>Laporan <i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"><p>Barang</p></a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link"><p>Stock</p></a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link"><p>Stock Opname</p></a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>

          <!-- PEMBELIAN -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bx bx-shopping-bag"></i>
              <p>Pembelian <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="bx bx-circle nav-icon"></i>
                  <p>Master <i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"><p>Kategori Supplier</p></a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link"><p>Data Supplier</p></a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="bx bx-circle nav-icon"></i>
                  <p>Transaksi <i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"><p>Purchase Order</p></a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link"><p>Penerimaan</p></a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link"><p>Tukar Faktur</p></a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link"><p>Pembayaran Hutang</p></a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="bx bx-circle nav-icon"></i>
                  <p>Laporan <i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"><p>Data Supplier</p></a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link"><p>Purchase Order</p></a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link"><p>Penerimaan</p></a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link"><p>Kartu Hutang</p></a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /Sidebar Menu -->

    </div>
    <!-- /Sidebar -->
  </aside>
  <!-- Sidebar Container -->


  @yield('content')


  <!-- Footer -->
  <footer class="main-footer">
    <strong>
      Copyright &copy;
      <script>document.write(new Date().getFullYear())</script>
      <a href="https://donnelworks.com">Donnelworks</a>.
    </strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.1
    </div>
  </footer>
  <!-- /Footer -->

</div>
<!-- /wrapper -->

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('assets/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('assets/dist/js/pages/dashboard.js') }}"></script>

@yield('script')

</body>
</html>
